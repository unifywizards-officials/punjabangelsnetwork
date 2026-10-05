<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormBuider;
use App\Models\Forms;
use DB;
use Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Str;

class FormBuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formBuilder = FormBuider::all();
        return view('admin.form-builder.index', compact('formBuilder'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.form-builder.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|unique:form_buiders,name',
                'slug' => 'required|unique:form_buiders,slug',
                'form_heading' => 'required',
                'form_description' => 'required',
                'image' => 'image|mimes:jpg,jpeg,png|max:500|dimensions:min_width=1536,min_height=1536,max_width=1536,max_height=1536',
                // 'image' => 'required|string',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            DB::beginTransaction();
            $item = new FormBuider();
            $item->name = $request->name;
            $item->slug = Str::slug($request->name, '-');
            $item->form_heading = $request->form_heading;
            $item->form_description = $request->form_description;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'FormImages');
                $item->image = $filename;
                // $blog->image= $filename;
                // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            }
            $item->content = $request->form;
            $item->save();
            DB::commit();
            return response()->json(['success' => 'Form Created Successfully!']);
        } catch (\Exception $e) {

            DB::rollback();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function show(Request $request, $slug)
    {
    }

    public function editData(Request $request)
    {
        return FormBuider::where('id', $request->id)->first();
    }
    /**
     * Display the specified resource.
     */
    public function getForm(string $slug)
    {
        try {
            $formBuilder = FormBuider::where('slug', $slug)->where('is_active', '1')->first();
            $pageData = FormBuider::where('slug', $slug)->where('is_active', '1')->first();
            $MetaOg = '';
            if (!$formBuilder) {
                abort(404);
            }
            // return view('admin.form-builder.showform', compact('formBuilder', 'pageData', 'MetaOg'));
            return view('guest.customform', compact('formBuilder', 'pageData', 'MetaOg'));
        } catch (\Throwable $th) {

            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {

        try {
            $formBuilder = FormBuider::where('slug', $slug)->where('is_active', '1')->first();
            $pageData = FormBuider::where('slug', $slug)->where('is_active', '1')->first();
            $MetaOg = '';
            if (!$formBuilder) {
                abort(404);
            }
            return view('admin.form-builder.edit', compact('formBuilder', 'pageData', 'MetaOg'));
        } catch (\Throwable $th) {

            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateData(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|unique:form_buiders,name,' . $request->id,
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
            $item = FormBuider::findOrFail($request->id);
            $item->name = $request->name;
            $item->slug = Str::slug($request->name, '-');
            $item->form_heading = $request->form_heading;
            $item->form_description = $request->form_description;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'FormImages');
                $item->image = $filename;
                // $blog->image= $filename;
                // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            }
            $item->content = $request->form;
            $item->update();
            return response()->json(['success' => 'Form Updated Successfully!']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FormBuider::where('id', $id)->delete();
        return response()->json(['success' => 'Form deleted successfully!']);
    }


    public function read(Request $request)
    {
        $item = FormBuider::findOrFail($request->id);
        return $item;
    }

    public function viewData($form_id, $id)
    {
        $formData = Forms::with('form_name')->where('form_id', $form_id)->where('id', $id)->first();
        return view('admin.form-builder.viewformdata', compact('formData'));
    }
}
