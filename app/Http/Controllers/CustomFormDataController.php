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

class CustomFormDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formData = Forms::with('form_name')->get();
        return view('admin.form-builder.submitformindex', compact('formData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // return $request->all();
        $formID = $request->form_id;
        $request->request->remove('_token');
        $request->request->remove('form_id');
        $allData = $request->all();

        // Check if any file is attached to the request
        if ($request->hasFile('*')) {
            // Handle file upload
            foreach ($request->allFiles() as $key => $files) {

                // Check if it's a valid file
                if ($files->isValid()) {
                    // Generate a unique name for the file
                    $imageName = time() . '_' . $files->getClientOriginalName();
                    // Move the file to the desired location
                    $files->move(public_path('images'), $imageName);
                    // Add the file name to the validated data
                    $allData['files'][] = ['key' => $imageName, 'path' => 'images/' . $imageName];
                }
            }
        }


        $item = new Forms();
        $item->form_id = $formID;
        $item->form = $allData;
        $item->save();
        Session::flash('success', 'Form Submitted Successfully');
        // return redirect('form-builder');
        return redirect()->back();
    }
}
