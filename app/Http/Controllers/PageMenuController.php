<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageMenu;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;
class PageMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagemenu=PageMenu::orderBy('updated_at', 'desc')->get();
        return view('admin.page-menu.index',compact('pagemenu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.page-menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'menu' => 'required|unique:page_menus,menu',
        ]);

        DB::beginTransaction();
        try {

        $pagemenu = new PageMenu;
        $pagemenu->menu=$request->menu;
        $pagemenu->slug=Str::slug($request->menu,'-');
        $pagemenu->save();

        
        DB::commit();
        Session::flash('success', 'Menu Created Successfully');
        return redirect()->route('manage-menu.index');

     } catch (\Throwable $th) {
         // Rollback and return with Error
         DB::rollBack();
         return redirect()->back()->withInput()->with('error', $th->getMessage());
     }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,string $id)
    {
        // dd($request->all());
        $pagemenu=PageMenu::find($id);
        $pagemenu->is_active=$request->status;
        $pagemenu->save();
        return response()->json(['success' => 'Record status changed successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pagemenu = PageMenu::findOrFail($id);
        return view('admin.page-menu.edit',compact('pagemenu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'menu' => 'required|unique:page_menus,menu,'.$id
        ]);

        DB::beginTransaction();
        try {

        $pagemenu = PageMenu::findOrFail($id);
        $pagemenu->menu=$request->menu;
        $pagemenu->slug=Str::slug($request->menu,'-');
        $pagemenu->save();

        
        DB::commit();
        Session::flash('success', 'Menu Updated Successfully');
        return redirect()->route('manage-menu.index');

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
        PageMenu::find($id)->delete($id);
        return response()->json(['success' => 'Record deleted successfully!']);
    }
}
