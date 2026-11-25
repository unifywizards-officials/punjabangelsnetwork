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
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp', 'pdf', 'doc', 'docx'];
            $allowedMimes = [
                'image/jpeg',
                'image/png',
                'image/webp',
                'application/pdf',
                'application/msword',
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            ];
            $maxSizeBytes = 10 * 1024 * 1024; // 10 MB

            // Handle file upload
            foreach ($request->allFiles() as $key => $files) {
                $fileList = is_array($files) ? $files : [$files];
                foreach ($fileList as $file) {
                    if (!$file || !$file->isValid()) {
                        continue;
                    }
                    $ext = strtolower($file->getClientOriginalExtension());
                    $mime = $file->getMimeType();
                    if (
                        !in_array($ext, $allowedExtensions, true) ||
                        !in_array($mime, $allowedMimes, true) ||
                        $file->getSize() > $maxSizeBytes
                    ) {
                        return redirect()->back()->with('error', 'Invalid file type or size. Allowed: JPG, PNG, WEBP, PDF, DOC, DOCX (max 10MB).');
                    }

                    $baseName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeBase = substr(preg_replace('/[^a-zA-Z0-9_-]/', '_', $baseName) ?: 'upload', 0, 80);
                    $imageName = time() . '_' . Str::random(8) . '_' . $safeBase . '.' . $ext;
                    $file->move(public_path('images'), $imageName);
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
