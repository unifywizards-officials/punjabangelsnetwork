<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;
use App\Models\ContactFormData;
use App\Models\Blog;
use App\Models\Events;
use App\Models\EventRegisterFormData;
use App\Models\GetQuote;
use App\Models\StaticPageSeoManage;
use App\Models\VisaInsurance;
use App\Models\ApplyNow;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminContactUsMail;
use App\Mail\UserContactUsMail;
use App\Mail\SubscribeMail;
use App\Rules\NoScriptTags;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Revolution\Google\Sheets\Facades\Sheets;
use Carbon\Carbon;
use App\Mail\ApplicationReceived;
use App\Models\MentorOrFundRaiser;
use App\Models\InvestorEnrollmentForm;
use App\Models\CorporateEnrollmentForm;
use App\Mail\VisitorRegistration;
use App\Mail\VisitorTankyou;
use App\Mail\AdminSideApplyform;
use App\Mail\UserSideApplyform;
use App\Mail\UserSideCorporateform;
use App\Mail\AdminSideInvestorform;
use App\Mail\UserSideInvestorform;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['show_visa_insurance', 'contactform', 'getQuote', 'submitQuote', 'submitContact', 'upload', 'revert', 'saveAppynow', 'mentorshipfundraiseSave', 'investorenrollmentSave', 'submitvisitorform','corporatememberSave']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_blog = Blog::count();
        $total_event = Events::count();
        $total_contactFormData = ContactFormData::where('type', 'contact-us')->count();
        $total_EventFormData = EventRegisterFormData::count();
        return view('admin.dashboard', compact('total_blog', 'total_event', 'total_contactFormData', 'total_EventFormData'));
    }

    public function contactDataList()
    {
        $contact = ContactFormData::where('type', 'contact-us')->orderBy('updated_at', 'desc')->get();
        return view('admin.contact-data.index', compact('contact'));
    }

    public function quoteDataList()
    {
        $quote = GetQuote::orderBy('updated_at', 'desc')->get();
        return view('admin.quote-data.index', compact('quote'));
    }

    public function deleteSelected(Request $request)
    {
        // dd($request->table);
        $ids = $request->ids;
        $table = $request->table;
        DB::table($table)->whereIn('id', $ids)->delete();
        return response()->json(['success' => 'Selected items deleted successfully']);
    }

    public function editVisaInsurance(Request $request)
    {

        $visa_insurance = VisaInsurance::find(1);
        return view('admin.visa-insurance.edit', compact('visa_insurance'));
    }

    public function updateVisaInsurance(Request $request)
    {

        $visa_insurance = VisaInsurance::find(1);
        $visa_insurance->visa_details = $request->visa_details;
        $visa_insurance->user_id = Auth::user()->id;
        $visa_insurance->updated_at = now();
        $visa_insurance->save();
        return back()->with('success', 'Data Updated Successfully.');
    }

    public function show_visa_insurance()
    {
        $visa_insurance = VisaInsurance::find(1);
        $MetaOg = StaticPageSeoManage::where('id', 1)->first()->visa_meta_og;
        return view('guest.visa-insurance.visa-insurance', compact('visa_insurance', 'MetaOg'));
    }

    public function contactform()
    {
        $MetaOg = StaticPageSeoManage::where('id', 1)->first()->contactus_meta_og;
        return view('guest.contact', compact('MetaOg'));
    }

    public function getQuote(Request $request)
    {
        $MetaOg = StaticPageSeoManage::where('id', 1)->first()->contactus_meta_og;
        return view('guest.quote', compact('MetaOg'));
    }

    public function submitQuote(Request $request)
    {



        $validator = $request->validate([
            'name' => 'required|regex:/\S/',
            'contact' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:12',
            'email' => 'required|email',
            'no_of_person' => 'required|regex:/\S/',
            'message' => ['required', new NoScriptTags],
        ]);

        DB::beginTransaction();
        try {


            $mailData = [
                'name' => $request->name,
                'contact' => $request->contact,
                'email' => $request->email,
                'no_of_person' => $request->no_of_person,
                'message' => $request->message
            ];
            // Mail::to($request->email)->send(new ContactUsMail($mailData));
            // return response()->json(['message' => 'Contact Form Saved Successfully']);


            $to = 'info@unifyholidays.com';
            $subject = 'Quote';

            // Define your email template with placeholders
            $template = '<html>
    <body>
        <p>Name : [NAME],</p>
        <p>Email :  [EMAIL],</p>
        <p>Number :  [NUMBER],</p>
        <p>No of Person\s :  [SUB],</p>
        <p>Message :  [MSG],</p>
         
    </body>
</html>';

            // Replace placeholders with actual values
            $name = $request->name;
            $email = $request->email;
            $number = $request->contact;
            $subjectdata = $request->no_of_person;
            $message = $request->message;

            $message = str_replace(['[NAME]', '[EMAIL]', '[NUMBER]', '[SUB]', '[MSG]'], [$name, $email, $number, $subjectdata, $message], $template);

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From:info@unifyholidays.com' . "\r\n";
            // Use the mail function

            // $mail=mail($to, $subject, $message, $headers);    // uncomment when email function working properly
            $getQuote = new GetQuote;
            $getQuote->name = $request->name;
            $getQuote->contact = $request->contact;
            $getQuote->email = $request->email;
            $getQuote->no_of_person = $request->no_of_person;
            $getQuote->message = $request->message;
            $getQuote->save();

            DB::commit();
            return response()->json(['success' => 'Thanks, We will get back to you soon!']);
        } catch (\Throwable $th) {
            // Rollback and return with Error
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function submitContact(Request $request)
    {
        // return $request->all();
        // dd('sdsdsdsd');
        if ($request->type == 'contact-us') {

            $validator = $request->validate([
                'name' => 'required',
                'regex:/\S/',
                'email' => 'required',
                'regex:/\S/',
                'message' => ['required', new NoScriptTags],
            ]);

            $contact_form_data = new ContactFormData;
            $contact_form_data->type = 'contact-us';
            $contact_form_data->name = $request->name;
            $contact_form_data->email = $request->email;
            $contact_form_data->message = $request->message;
            $contact_form_data->phone_no = $request->phone;
            $contact_form_data->save();
            
            $application = array(
                'Name' => $request->name,
                'Email' => $request->email,
                'message' => $request->message,
                'phone' => $request->phone,
            );

            // Send the email
            Mail::to(['info@punjabangelsnetwork.com'])->send(new AdminContactUsMail($application));
            // Mail::to([$request->email])->send(new AdminContactUsMail($application));
            Mail::to([$request->email])->send(new UserContactUsMail($application));
            DB::commit();
            
            return response()->json(['success' => 'Thanks, We will get back to you soon!']);
        } else {


            $validator = Validator::make($request->all(), [
                'email' => 'required|email|email:rfc,dns|regex:/^\S+@\S+\.\S+$/',
            ]);

            $contact_form_data = new ContactFormData;
            $contact_form_data->type = $request->type;
            $contact_form_data->email = $request->email;
            $contact_form_data->save();
            Session::flash('success_subscribe', 'Thanks, We will get back to you soon');
            return redirect()->back();
        }
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('filepond')) {
            $file = $request->file('filepond');
            $path = $file->store('temp_images');

            return response()->json(['id' => $path]);
        }

        return response()->json(['message' => 'No file uploaded'], 400);
    }

    public function revert(Request $request)
    {
        $path = $request->getContent();
        Storage::delete($path);

        return response()->json(['message' => 'File deleted']);
    }

    public function saveAppynow(Request $request)
    {

        // $posts = array(
        //     'Name' => 'Manish',
        //     'Email' => 'max@gmailcom',
        //     'Phone no' => '9041571952'
        // );
        // dd(array_values($posts))


        // dd($request->all);
        try {
            $validator = Validator::make($request->all(), [
                'full_name' => 'required',
                'email' => 'required',
                'phone_no' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'designation' => 'required',
                'company_url' => ['required','regex:/^(https?:\/\/)?([a-z0-9]+[.])+[a-z]{2,}(:[0-9]{1,5})?(\/.*)?$/i'],
                'company_location' => 'required',
                'industry_type' => 'required',
                'company_name' => 'required',
                'industry_category' => 'required',
                'incorprated_since' => 'required',
                // 'filepond' => 'required',
                'description' => ['required', new NoScriptTags],
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            // dd($request->all);

            DB::beginTransaction();
            $apply = new ApplyNow;
            $apply->full_name = $request->full_name;
            $apply->email = $request->email;
            $apply->phone_no = $request->phone_no;
            $apply->designation = $request->designation;
            $apply->company_url = $request->company_url;
            $apply->company_location = $request->company_location;
            $apply->industry_type = $request->industry_type;
            $apply->company_name = $request->company_name;
            $apply->industry_category = $request->industry_category;
            $apply->incorprated_since = $request->incorprated_since;
            $apply->description = $request->description;
            $tempPath = $request->image_id;
            $realupload = $request->attachment;
            // $orignal_name = $realupload->getClientOriginalName();
            if (Storage::exists($tempPath)) {
                // Storage::move($tempPath, $finalPath);
                Storage::delete($tempPath);
                $filename = uploadImage($realupload, 'applyNow');
                $apply->attachment = $filename;
            }
            $apply->term_condition = $request->checkboxValue;
            $apply->save();

            ///////////sync save data to google sheet
            // Get the spreadsheet ID
            $spreadsheetId = env('GOOGLE_SPREADSHEETID');


            // Fetch the existing data from the sheet
            $existingRows = Sheets::spreadsheet($spreadsheetId)
                ->sheet('Sheet1')
                ->all();



            // Determine the last serial number
            $lastSerialNumber = 0;
            if (count($existingRows) > 1) { // Assuming the first row is headers
                $lastSerialNumber = $existingRows[count($existingRows) - 1][0];
            }

            // Increment the serial number
            $newSerialNumber = $lastSerialNumber + 1;



            // Create the new row data
            $posts = array(
                'S No' => $newSerialNumber,
                'Name' => $request->full_name,
                'Email' => $request->email,
                'Phone Number' => $request->phone_no,
                'Designation' => $request->designation,
                'URL' => $request->company_url,
                'Location' => $request->company_location,
                'Industry' => $request->industry_type,
                'Company Name' => $request->company_name,
                'Company Type' => $request->industry_category,
                // 'Incorporated Since' => $request->incorprated_since,
                'Incorporated Since' => Carbon::parse($apply->created_at)->format('d-m-Y'),
                'Pitch Upload' => asset($apply->attachment),
                'Description' => $request->description,
                // 'Date of Registration' => Carbon::parse($apply->created_at)->format('M d, Y H:i'),
                'Date of Registration' => Carbon::parse($apply->created_at)->format('d-m-Y'),
                'Accept T&C' => $request->checkboxValue,
            );


            // Append the new row to the sheet
            Sheets::spreadsheet($spreadsheetId)
                ->sheet('Sheet1')
                ->append([$posts]);

            // dd($posts);

            // Send the email
            
             $data = array(
                'Name' => $request->full_name,
                'Email' => $request->email,
                'Phone_Number' => $request->phone_no,
                'Designation' => $request->designation,
                'URL' => $request->company_url,
                'Location' => $request->company_location,
                'Industry' => $request->industry_type,
                'Company_Name' => $request->company_name,
                'Company_Type' => $request->industry_category,
                // 'Incorporated Since' => $request->incorprated_since,
                'Incorporated_Since' => Carbon::parse($request->incorprated_since)->format('d-m-Y'),
                'Pitch_Upload' => asset($apply->attachment),
                'Description' => $request->description,
                // 'Date of Registration' => Carbon::parse($apply->created_at)->format('M d, Y H:i'),
                'Date_of_Registration' => Carbon::parse($apply->created_at)->format('d-m-Y'),
                'Accept_T&C' => $request->checkboxValue,
            );

            // Send the email
            Mail::to(['info@punjabangelsnetwork.com'])->send(new AdminSideApplyform($data));
            Mail::to([$request->email])->send(new UserSideApplyform($data));
            DB::commit();
            return response()->json(['success' => 'Thanks, We will get back to you soon!']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function submitvisitorform(Request $request)
    {

      // dd('asdsadasd');
        // dd($request->all());
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'organization' => $request->organization,
            'designation' => $request->designation,
            'type' => $request->type,
            'is_active' => $request->is_active,
            'invited_by' => $request->invited_by == 'Others' ? $request->invited_by_other : $request->invited_by,
        ];



        ///////////sync save data to google sheet
        // Get the spreadsheet ID
        $spreadsheetId = env('GOOGLE_SPREADSHEETID_2');


        // Fetch the existing data from the sheet
        // $existingRows = Sheets::spreadsheet($spreadsheetId)
        //     ->sheet('Masterclass on Finance for Entrepreneurs')
        //     ->all(); 
            
            $existingRows = Sheets::spreadsheet($spreadsheetId)
            ->sheet('Transform 15.0')
            ->all();



        // Determine the last serial number
        $lastSerialNumber = 0;
        if (count($existingRows) > 1) { // Assuming the first row is headers
            $lastSerialNumber = $existingRows[count($existingRows) - 1][0];
        }

        // Increment the serial number
        $newSerialNumber = $lastSerialNumber + 1;



        // Create the new row data
        $posts = array(
            'S No' => $newSerialNumber,
            'Name' => $request->name,
            'Organisation' => $request->organization,
            'Designation' => $request->designation,
            'Invited By' => $request->invited_by == 'Others' ? $request->invited_by_other : $request->invited_by,
            'Email Adress' => $request->email,
            'Phone Number' => $request->phone_no,
            'Are You a Member/Guest' => $request->type,
            'DATE' => Carbon::now()->format('d-m-Y')
        );


        // Append the new row to the sheet
        Sheets::spreadsheet($spreadsheetId)
            ->sheet('Transform 15.0')
            ->append([$posts]);



        $sender_email = env('MAIL_FROM_ADDRESS');

        Mail::to($sender_email)->send(new VisitorRegistration($details));
        Mail::to($request->email)->send(new VisitorTankyou($details));





        return response()->json(['success' => 'Thanks, We will get back to you soon!']);
    }


    public function viewAppynow()
    {
        $ApplyNow = ApplyNow::orderBy('updated_at', 'desc')->get();
        return view('admin.applynow.index', compact('ApplyNow'));
    }


    public function viewMentorShip()
    {
        $MentorOrFundRaiser = MentorOrFundRaiser::orderBy('updated_at', 'desc')->get();
        return view('admin.mentorOrfundRaiser.index', compact('MentorOrFundRaiser'));
    }




    public function mentorshipfundraiseSave(Request $request)
    {
        try {
            // $validator = Validator::make($request->all(), [
            //     'looking_for' => 'required',
            //     'full_name' => 'required',
            //     'email' => 'required',
            //     'mobile_no' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            //     'start_up_name' => 'required',
            //     'start_up_website' => 'required|url',
            //     'start_up' => 'required',
            //     'amount_receive_till_date' => 'required',
            // ]);

            // if ($validator->fails()) {
            //     return response()->json(['errors' => $validator->errors()], 422);
            // }

            // dd($request->all);

            DB::beginTransaction();
            $mentorship = new MentorOrFundRaiser;
            $mentorship->looking_for = $request->looking_for;
            $mentorship->full_name = $request->full_name;
            $mentorship->email = $request->email;
            $mentorship->mobile_no = $request->mobile_no;
            $mentorship->start_up_name = $request->start_up_name;
            $mentorship->start_up_website = $request->start_up_website;
            $mentorship->start_up = $request->start_up;
            $mentorship->amount_receive_till_date = $request->amount_receive_till_date;
            $mentorship->save();

            DB::commit();
            return response()->json(['success' => 'Thanks, We will get back to you soon!']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function corporatememberSave(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'full_name' => 'required',
                'contact_no' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'email' => 'required'
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            // dd($request->all);

            DB::beginTransaction();
            $mentorship = new CorporateEnrollmentForm;
            $mentorship->full_name = $request->full_name;
            if($request->gender == 'Other')
            {
                $mentorship->gender = $request->other_gender;
            }
            else
            {
                $mentorship->gender = $request->gender;

            }
            $mentorship->dob = $request->dob;
            $mentorship->designation = $request->designation;
            $mentorship->organization = $request->organization;
            $mentorship->domain = $request->domain;
            $mentorship->linkedin_id = $request->linkedin_id;
            $mentorship->contact_no = $request->contact_no;
            $mentorship->professional_qualification = $request->professional_qualification;
            $mentorship->office_address = $request->office_address;
            $mentorship->residential_address = $request->residential_address;
            $mentorship->preferred_mailing_address = $request->preferred_mailing_address;
            $mentorship->email = $request->email;
            $mentorship->comment = $request->comment;
            $mentorship->save();
            DB::commit();
            
            // Send the email
            
            //  $data = array(
            //     'Name' => $request->full_name,
            //     'Email' => $request->email,
            //     'Gender' => $request->gender,
            //     'dob' => $request->dob,
            //     'Phone_Number' => $request->contact_no,
            //     'Designation' => $request->designation,
            //     'Organization' => $request->organization,
                
            //     'URL' => $request->domain,
            //     'linkedin_id' => $request->linkedin_id,
            // );

            $data = array(
                'Name' => $request->full_name,
                'Email' => $request->email,
                'Phone_Number' => $request->contact_no,
            );
            
            // Send the email
            Mail::to([$request->email])->send(new UserSideCorporateform($data));
            return response()->json(['success' => 'Thanks, We will get back to you soon!']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }




    public function viewInvestorEnrollment()
    {
        $investor_enrollment = InvestorEnrollmentForm::orderBy('updated_at', 'desc')->get();
        return view('admin.InvestorEnrollment.index', compact('investor_enrollment'));
    }

    public function viewCorporateEnrollment()
    {
        $corporate_enrollment = CorporateEnrollmentForm::orderBy('updated_at', 'desc')->get();
        return view('admin.CorporateEnrollment.index', compact('corporate_enrollment'));
    }


    public function investorenrollmentSave(Request $request)
    {

        // dd($request->all);
        try {
            $validator = Validator::make($request->all(), [
                'full_name' => 'required',
                // 'designation' => 'required',
                'organization' => 'required',
                // 'domain' => 'required',
                // 'date_of_birth' => 'required',
                // 'gender' => 'required',
                'mobile_no' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'email' => 'required',
                // 'linkden_id' => 'required',
                // 'web_address' => 'url',
                // 'qualification' => 'required',
                // 'office_address' => 'required',
                // 'residential_address' => 'required',
                // 'preferred_mailing_address' => 'required',
                // 'term_condition' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            // dd($request->all);

            DB::beginTransaction();
            $investor = new InvestorEnrollmentForm;
            $investor->full_name = $request->full_name;
            $investor->email = $request->email;
            $investor->designation = $request->designation;
            $investor->organization = $request->organization;
            $investor->domain = $request->domain;
            $investor->date_of_birth = $request->date_of_birth;
            $investor->gender = $request->gender;
            $investor->mobile_no = $request->mobile_no;
            $investor->linkden_id = $request->linkden_id;
            $investor->web_address = $request->web_address;
            $investor->qualification = $request->qualification;
            $investor->office_address = $request->office_address;

            $investor->residential_address = $request->residential_address;
            $investor->preferred_mailing_address = $request->preferred_mailing_address;
            $investor->minimun_investment_range = $request->minimun_investment_range;
            $investor->maximum_investment_range = $request->maximum_investment_range;
            $investor->preferred_investment_stage = $request->preferred_investment_stage;
            $investor->industry_preference = $request->industry_preference;
            $investor->geographical_preference = $request->geographical_preference;
            $investor->investment_strategy = $request->investment_strategy;
            $investor->previous_investment_experience = $request->previous_investment_experience;
            $investor->investment_experience_with_startup = $request->investment_experience_with_startup;
            $investor->relevant_skill = $request->relevant_skill;
            $investor->risk_tolarance_level = $request->risk_tolarance_level;
            $investor->how_hear_aboutus = $request->how_hear_aboutus;
            $investor->why_interested_in_startup = $request->why_interested_in_startup;
            $investor->industry_interest_you = $request->industry_interest_you;
            $investor->term_condition = $request->checkboxValue;

            $investor->save();

            DB::commit();
            
             $data = array(
                'Name' => $request->full_name,
                'Email' => $request->email,
                'Phone_Number' => $request->mobile_no,
                'Organization' => $request->organization,
            );
            
            Mail::to(['info@punjabangelsnetwork.com'])->send(new AdminSideInvestorform($data));
            Mail::to([$request->email])->send(new UserSideInvestorform($data));
            return response()->json(['success' => 'Thanks, We will get back to you soon!']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
