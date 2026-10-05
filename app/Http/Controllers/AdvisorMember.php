<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Member;
use App\Models\StaticPageSeoManage;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;

class AdvisorMember extends Controller
{
    public function index()
    {
        $member = Member::where('type', '1')->orderBy('order_position')->get();
        return view('admin.advisor.index', compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.advisor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:members,name',
            'image' => 'image|mimes:jpg,jpeg,png,webp|max:200|dimensions:min_width=280,min_height=270,max_width=300,max_height=276',
            // 'member_category' => 'required',
        ]);

        DB::beginTransaction();
        try {

            $member = new Member;
            $member->name = $request->name;
            $member->type = $request->type;

            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'advisorImages');
                $member->image = $filename;
                // $member->image= $filename;
                // $member->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            }
            $member->image_alt = $request->image_alt;
            $member->position = $request->position;
            $member->linkedin = $request->linkedin;
            $member->save();
            DB::commit();
            Session::flash('success', 'Member created successfully');
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-board-advisors.index');
            } elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.manage-board-advisors.index');
            } elseif (Auth::user()->role == 'seo-manager') {
                return redirect()->route('seo-manager.manage-board-advisors.index');
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
        $blog = Member::find($id);
        $blog->is_active = $request->status;
        $blog->updated_at = now();
        $blog->save();
        return response()->json(['success' => 'Record status changed successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $member = Member::where('id', $id)->first();
        return view('admin.advisor.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|unique:members,name,' . $id,
            'image' => 'image|mimes:jpg,jpeg,png,webp|max:200|dimensions:min_width=280,min_height=270,max_width=300,max_height=276',
            // 'member_category' => 'required',
        ]);

        DB::beginTransaction();
        try {

            $member = Member::find($id);
            $member->name = $request->name;
            $member->type = $request->type;

            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'advisorImages');
                $member->image = $filename;
                // $member->image= $filename;
                // $member->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            }
            $member->image_alt = $request->image_alt;
            $member->position = $request->position;
            $member->linkedin = $request->linkedin;
            $member->save();
            DB::commit();
            Session::flash('success', 'Member updated successfully');
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-board-advisors.index');
            } elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.manage-board-advisors.index');
            } elseif (Auth::user()->role == 'seo-manager') {
                return redirect()->route('seo-manager.manage-board-advisors.index');
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
        Member::where('id', $id)->delete();
        return response()->json(['success' => 'Member deleted successfully!']);
    }
    public function updateOrder(Request $request)
    {
        $items = $request->items;
        foreach ($items as $index => $id) {
            $item = Member::find($id);
            $item->order_position = $index;
            $item->save();
        }
        return response()->json(['success' => 'Order Changed Successfully']);
    }
}
