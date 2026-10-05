<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\EventRegisterFormData;
use App\Models\Category;
use App\Models\EventCategory;
use App\Models\CustomForm;
use DB;
use Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\userSideMeditationEmail;
use App\Mail\AdminSideMeditationEmail;
use App\Mail\AdminSideCaptechEmail;
use App\Mail\UserSideCaptechEmail;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function showEvent()
    {
        return view('guest.events');
    }

    public function index()
    {
        $blog = Events::with(['event_category.category_name'])->orderBy('updated_at', 'desc')->get();
        // return $blog = Blog::with(['blog_category.category_name' => function ($query) {
        //     $query->where('is_active', 1);
        // }])->orderBy('created_at', 'desc')->get();
        return view('admin.event.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::where('is_active', '1')->get();
        return view('admin.event.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'heading' => 'required|unique:events,heading',
            'slug' => 'required|unique:events,slug',
            'image' => 'image|mimes:jpg,jpeg,png',
            'start_time' => 'required',
            'end_time' => [
                'required',
                function ($attribute, $value, $fail) use ($request) {
                    if ($value == $request->input('start_time')) {
                        $fail('The time out must be different from time in.');
                    }
                },
            ],
            'city' => 'required',
            'location' => 'required',
            'website' => 'url',
            // 'payment_link' => 'url',
            'short_description' => 'required',
            'long_description' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',
            'meta_og' => 'required',
            // 'blog_category' => 'required',
        ]);

        DB::beginTransaction();
        try {

            $blog = new Events;
            $blog->heading = $request->heading;
            $blog->slug = Str::slug($request->slug, '-');
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'blogImages');
                $blog->image = $filename;
                // $blog->image= $filename;
                // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            }

            $type = $request->input('type');
            if ($type === 'razorpay') {
                // $paymentLink = $request->input('payment_link');
                $blog->payment_link = $request->payment_link;
                // Handle Razorpay form data
            } elseif ($type === 'qna') {
                $blog->zoom_link = $request->input('zoom_link');
                $blog->zoom_password = $request->input('zoom_password');
                $blog->qna_date = $request->input('qna_date');
                // Handle QnA form data
            } else {
                // $zoomLink = $request->input('zoom_link');
                // $zoomPassword = $request->input('zoom_password');
                // $qnaDate = $request->input('qna_date');
                // Handle QnA form data
            }

            $blog->type = 'normal';
            $blog->city = $request->city;
            $blog->location = $request->location;
            $blog->start_date = $request->start_date;
            $blog->end_date = $request->end_date;
            $blog->start_time = $request->start_time;
            $blog->end_time = $request->end_time;
            $blog->image_alt = $request->image_alt;
            $blog->website = $request->website;
            $blog->short_description = $request->short_description;
            $blog->long_description = $request->long_description;
            $blog->publish_date = $request->publish_date;
            $blog->meta_title = $request->meta_title;
            $blog->meta_description = $request->meta_description;
            $blog->meta_keyword = $request->meta_keyword;
            $blog->meta_og = $request->meta_og;
            $blog->save();

            foreach ($request->input('blog_category', []) as $category) {

                $blog_Category = new EventCategory;
                $blog_Category->event_id = $blog->id;
                $blog_Category->event_categories_id = $category;
                $blog_Category->save();
            }
            DB::commit();
            Session::flash('success', 'Event created successfully');
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-event.index');
            } elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.manage-event.index');
            } elseif (Auth::user()->role == 'seo-manager') {
                return redirect()->route('seo-manager.manage-event.index');
            }
        } catch (\Throwable $th) {
            // Rollback and return with Error
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        // dd($request->all());
        $blog = Events::find($id);
        $blog->is_active = $request->status;
        $blog->updated_at = now();
        $blog->save();
        return response()->json(['success' => 'Record status changed successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $blog = Events::with(['event_category'])->where('slug', $slug)->first();
        $category = Category::where('is_active', '1')->get();
        $selectedCategory = $blog->event_category->pluck('event_categories_id')->toArray();
        return view('admin.event.edit', compact('blog', 'category', 'selectedCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request->all();
        $request->validate([
            'heading' => 'required|unique:events,heading,' . $id,
            'slug' => 'required|unique:events,slug,' . $id,
            'image' => 'image|mimes:jpg,jpeg,png',
            'start_time' => 'required',
            'end_time' => [
                'required',
                function ($attribute, $value, $fail) use ($request) {
                    if ($value == $request->input('start_time')) {
                        $fail('The time out must be different from time in.');
                    }
                },
            ],
            'city' => 'required',
            'website' => 'url',
            // 'payment_link' => 'url',
            'location' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',
             
            // 'blog_category' => 'required',
        ]);

        DB::beginTransaction();
        try {

            $blog = Events::find($id);
            $blog->heading = $request->heading;
            $blog->slug = Str::slug($request->slug, '-');
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'blogImages');
                $blog->image = $filename;
                // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            }

            // $blog->type = 'normal';
            $blog->type = $request->input('type');

            if ($blog->type === 'razorpay') {
                $blog->payment_link = $request->input('payment_link');
            } elseif ($blog->type === 'qna') {
                $blog->meeting_link = $request->input('meeting_link');
                $blog->meeting_id = $request->input('meeting_id');
                $blog->meeting_password = $request->input('meeting_password');
            }
            $blog->city = $request->city;
            $blog->location = $request->location;
            $blog->start_date = $request->start_date;
            $blog->end_date = $request->end_date;
            $blog->start_time = $request->start_time;
            $blog->end_time = $request->end_time;
            $blog->payment_link = $request->payment_link;
            $blog->image_alt = $request->image_alt;
            $blog->website = $request->website;
            $blog->short_description = $request->short_description;
            $blog->long_description = $request->long_description;
            $blog->publish_date = $request->publish_date;
            $blog->meta_title = $request->meta_title;
            $blog->meta_description = $request->meta_description;
            $blog->meta_keyword = $request->meta_keyword;
            $blog->meta_og = $request->meta_og;
            $blog->updated_at = now();
            $blog->save();

            EventCategory::where('event_id', $blog->id)->delete();

            foreach ($request->input('blog_category', []) as $category) {

                $blog_Category = new EventCategory;
                $blog_Category->event_id = $blog->id;
                $blog_Category->event_categories_id = $category;
                $blog_Category->save();
            }
            // $blog->blog_category()->sync($request->input('blog_category'));

            DB::commit();
            Session::flash('success', 'Event updated successfully');
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-event.index');
            } elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.manage-event.index');
            } elseif (Auth::user()->role == 'seo-manager') {
                return redirect()->route('seo-manager.manage-event.index');
            }
        } catch (\Throwable $th) {
            // Rollback and return with Error
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Events::where('id', $id)->delete();
        return response()->json(['success' => 'Event deleted successfully!']);
    }


    public function eventlist(Request $request)
    {

        // Get filter parameters
        $keyword = $request->input('keywords');
        $location = $request->input('location');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Start a query on the Product model
        $query = Events::query();

        // Apply filters if present
        if ($keyword) {
            $query->where(function ($query) use ($keyword) {
                $query->where('heading', 'like', '%' . $keyword . '%');
            });
        }

        if ($location) {
            $query->where(function ($query) use ($location) {
                $query->where('city', 'like', '%' . $location . '%');
            });
        }

        if ($startDate) {
            $startDate = date('Y-m-d', strtotime($startDate));
            $query->where('publish_date', '>=', $startDate);
        }

        if ($endDate) {
            $endDate = date('Y-m-d', strtotime($endDate));
            $query->where('publish_date', '<=', $endDate);
        }

        $event = $query->where('is_active', '1')->orderBy('publish_date', 'desc')->paginate(9);
        // Check if the request is an AJAX request
        if ($request->ajax()) {
            if ($event->isEmpty()) {
                return response()->json([
                    'event' => view('guest.event.no_data')->render(),
                    'pagination' => ''
                ]);
            }

            return response()->json([
                'event' => view('guest.event.partial_list', compact('event'))->render(),
                'pagination' => view('guest.event.pagination', compact('event'))->render(),
            ]);
        }


        return view('guest.event.listing', compact('event'));
    }

    public function searchData(Request $request)
    {
        $query = $request->input('query');
        $data = Events::where('column_name', 'like', '%' . $query . '%')->where('is_active', '1')->orderBy('publish_date', 'desc')->paginate(10);
        return view('data.partial', compact('data'));
    }


    public function blogDetail(Request $request, string $slug)
    {
        try {
            $blog = Events::with(['event_category.category_name'])->where('slug', $slug)->where('is_active', '1')->first();
            $pageData = Events::where('slug', $slug)->where('is_active', '1')->first();
            $MetaOg = $pageData->MetaOg;
            if (is_null($blog)) {
                return view('errors.404');
            } else {
                // dd('asdsad');
                return view('guest.event.detail', compact('blog', 'pageData', 'MetaOg'));
            }
        } catch (\Throwable $th) {

            // return redirect()->back()->with('error', $th->getMessage());
            abort(404);
        }
    }

    public function eventFormData(Request $request)
    {

        $eventData = EventRegisterFormData::whereNull('type')->orderBy('updated_at', 'desc')->get();

        return view('admin.event.eventformdata', compact('eventData'));
    }

    public function event24FormData(Request $request)
    {

        $eventData = EventRegisterFormData::where('type', 'captech')->orderBy('updated_at', 'desc')->get();

        return view('admin.event.eventcap24formdata', compact('eventData'));
    }




    public function eventFormView(Request $request, $slug)
    {
        try {
            $currentDate = Carbon::now()->format('Y-m-d');
            // $event = Events::with(['event_category.category_name'])->where('slug', $slug)->where('is_active', '1')->where('publish_date', '!=', $currentDate)->first();
            $event = Events::with(['event_category.category_name'])->where('slug', $slug)->where('is_active', '1')->first();
            if (!$event) {
                return view('errors.404');
            }
            return view('admin.event.eventform', compact('event'));
        } catch (\Throwable $th) {

            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function eventFormDataPost(Request $request)
    {


        if ($request->event_type == 'captech') {
            $validator = $request->validate([
                'name' => 'required|regex:/\S/',
                'phone_no' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:12',
                'email' => 'required|email',
                'company_name' => 'required',
                'designation' => 'required|regex:/\S/',
                // 'type' => 'required|regex:/\S/',
                'expectations' => 'required',
            ]);
        } elseif ($request->event_type == 'qna') {
            $validator = $request->validate([
                'name' => 'required|regex:/\S/',
                'phone_no' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:12',
                'email' => 'required|email',
                'organization' => 'required|regex:/\S/',
                'designation' => 'required|regex:/\S/',
                // 'type' => 'required|regex:/\S/',
                'is_active' => 'required|regex:/\S/',
            ]);
        } else {
            $validator = $request->validate([
                'name' => 'required|regex:/\S/',
                'phone_no' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:12',
                'email' => 'required|email',
                'organization' => 'required|regex:/\S/',
                'designation' => 'required|regex:/\S/',
                // 'type' => 'required|regex:/\S/',
                'is_active' => 'required|regex:/\S/',
            ]);
        }


        DB::beginTransaction();
        try {

            if ($request->event_type == 'captech') {
                // $mail=mail($to, $subject, $message, $headers);    // uncomment when email function working properly
                $getQuote = new EventRegisterFormData;
                $getQuote->name = $request->name;
                $getQuote->event_name = $request->event_name;
                $getQuote->phone_no = $request->phone_no;
                $getQuote->gender = $request->gender;
                $getQuote->email = $request->email;
                $getQuote->company_name = $request->company_name;
                $getQuote->designation = $request->designation;
                $getQuote->domain = $request->domain;
                $getQuote->company_location = $request->company_location;
                $getQuote->has_australian_visa = $request->has_australian_visa;
                $getQuote->type = $request->event_type;

                if ($request->other_comment) {
                    $getQuote->comment = $request->other_comment;
                } else {
                    $getQuote->comment = $request->expectations;
                }
                $getQuote->save();

                DB::commit();
                // Send the email
                $event = Events::where('slug', $request->event_slug)->where('is_active', '1')->first();
                // dd($event);
                $application = array(
                    'Name' => $request->name,
                    'event_name' => $request->event_name,
                    'Email' => $request->email,
                    'Phone_Number' => $request->phone_no,
                    'company_name' => $request->company_name,
                    'designation' => $request->designation,
                    'gender' => $request->gender,
                    'domain' => $request->domain,
                    'company_location' => $request->company_location,
                    'has_australian_visa' => $request->has_australian_visa,
                    'comment' => $getQuote->comment,
                    'start_date' => $event->start_date,
                    'end_date' => $event->end_date,
                    'start_time' => $event->start_time,
                    'end_time' => $event->end_time,
                    'venue' => $event->location,
                );

                // Send the email
                // Mail::to(['backenddeveloper222@gmail.com'])->send(new AdminSideCaptechEmail($application));
                Mail::to(['info@punjabangelsnetwork.com'])->send(new AdminSideCaptechEmail($application));
                Mail::to($request->email)->send(new UserSideCaptechEmail($application));
                return response()->json(['success' => 'Thanks, We will get back to you soon!']);
            } elseif ($request->event_type == 'qna') {
                $validator = $request->validate([
                    'name' => 'required|regex:/\S/',
                    'phone_no' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:12',
                    'email' => 'required|email',
                    'organization' => 'required|regex:/\S/',
                    'designation' => 'required|regex:/\S/',
                    // 'type' => 'required|regex:/\S/',
                    'is_active' => 'required|regex:/\S/',
                ]);
            } else {
                // $mail=mail($to, $subject, $message, $headers);    // uncomment when email function working properly
                $getQuote = new EventRegisterFormData;
                $getQuote->name = $request->name;
                $getQuote->event_name = $request->event_name;
                $getQuote->phone_no = $request->phone_no;
                $getQuote->email = $request->email;
                $getQuote->organization = $request->organization;
                $getQuote->designation = $request->designation;
                $getQuote->type = $request->type;
                $getQuote->is_active = $request->is_active;
                $getQuote->save();

                DB::commit();

                // Send the email

                $event = Events::where('slug', $request->event_slug)->where('is_active', '1')->first();
                $application = array(
                    'Name' => $request->name,
                    'event_name' => $request->event_name,
                    'Email' => $request->email,
                    'Phone_Number' => $request->phone_no,
                    'organization' => $request->organization,
                    'designation' => $request->designation,
                    'date' => $event->start_date,
                    'start_time' => $event->start_time,
                    'end_time' => $event->end_time,
                    'venue' => $event->location,
                );

                // Send the email
                Mail::to($request->email)->send(new userSideMeditationEmail($application));
                Mail::to(['info@punjabangelsnetwork.com'])->send(new AdminSideMeditationEmail($application));
                return response()->json(['success' => 'Thanks, We will get back to you soon!']);
            }
        } catch (\Throwable $th) {
            // Rollback and return with Error
            DB::rollBack();
            return redirect()->back();
        }
    }
}
