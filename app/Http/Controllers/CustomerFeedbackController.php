<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;
use App\Models\HomePageCoustomerFeedback;

class CustomerFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function editCustomerFeedback(Request $request)
    {
        $customerfeedback=HomePageCoustomerFeedback::find(1);
        return view('admin.master-entries.customer-feedback.edit',compact('customerfeedback'));
    }

    public function updateCustomerFeedback(Request $request)
    {
        // return $request->all();
            $request->validate([
                'faster_order_fulfillment' => 'required|numeric|between:0,999.99',
                'Real_time_inventory_control' => 'required|numeric|between:0,999.99',
                'Clean_claim_rate' => 'required|numeric|between:0,999.99',
                'Reduction_in_paper' => 'required|numeric|between:0,999.99'
            ]);

            DB::beginTransaction();
            try {

            $customerfeedback=HomePageCoustomerFeedback::find(1);
            $customerfeedback->faster_order_fulfillment=$request->faster_order_fulfillment;
            $customerfeedback->Real_time_inventory_control=$request->Real_time_inventory_control;
            $customerfeedback->Clean_claim_rate=$request->Clean_claim_rate;
            $customerfeedback->Reduction_in_paper=$request->Reduction_in_paper;
            $customerfeedback->save();
            DB::commit();
            Session::flash('success', 'Customer Feedback Updated Successfully');
            return redirect()->back();
        } catch (\Throwable $th) {
            // Rollback and return with Error
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', $th->getMessage());
    }
    }
}
