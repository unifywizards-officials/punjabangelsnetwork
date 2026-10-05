<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageMenu;
use App\Models\Page;
use App\Models\PageMenuLink;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;

class PageMenuLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $pagemenulink=PageMenuLink::with(['menu','page'])->orderBy('order_by', 'asc')->get();
        $pagemenulink=PageMenuLink::with(['menu','page'])->orderBy('order_by', 'asc')->get();
        return view('admin.page-menu-link.index',compact('pagemenulink'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          $menu=PageMenu::where('is_active','1')->get();
          $page=Page::where('is_active','1')->get();
          return view('admin.page-menu-link.create',compact('menu','page'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'menu_id' => 'required',
            'page_id' => 'required'
            
        ]);

        DB::beginTransaction();
        try {

            $pageexist = PageMenuLink::where('menu_id',$request->menu_id)->where('page_id',$request->page_id)->count();
            if($pageexist == 1)
            {
                Session::flash('danger', 'This page is alredy linked with this menu');
                return redirect()->back();
            }
            $maxOrder = PageMenuLink::where('is_active','1')->max('order_by');
            $pagemenulink = new PageMenuLink;
            $pagemenulink->menu_id=$request->menu_id;
            $pagemenulink->page_id=$request->page_id;
            $pagemenulink->order_by=$maxOrder + 1;
            $pagemenulink->save();

            DB::commit();
            Session::flash('success', 'Menu Linked With Page Created Successfully');
            //  return redirect()->back();
             return redirect()->route('manage-pagemenulink.index');

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
        $page=PageMenuLink::find($id);
        $page->is_active=$request->status;
        $page->save();
        return response()->json(['success' => 'Record status changed successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menu=PageMenu::where('is_active','1')->get();
        $page=Page::where('is_active','1')->get();
        $pagemenulink=PageMenuLink::find($id);
        return view('admin.page-menu-link.edit',compact('pagemenulink','menu','page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'menu_id' => 'required',
            'page_id' => 'required'
            
        ]);

        DB::beginTransaction();
        try {

            $pageexist = PageMenuLink::where('menu_id',$request->menu_id)->where('page_id',$request->page_id)->count();
            if($pageexist == 1)
            {
                Session::flash('danger', 'This page is alredy linked with this menu');
                return redirect()->back();
            }

            $pagemenulink = PageMenuLink::find($id);
            $pagemenulink->menu_id=$request->menu_id;
            $pagemenulink->page_id=$request->page_id;
            $pagemenulink->order_by=$request->order_by;
            $pagemenulink->save();

            DB::commit();
            Session::flash('success', 'Menu Linked With Page Updated Successfully');
            //  return redirect()->back();
             return redirect()->route('manage-pagemenulink.index');

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
        PageMenuLink::find($id)->delete($id);
        return response()->json(['success' => 'Record deleted successfully!']);
    }

    public function updateOrder(Request $request) {
        // Get the new order from the request
        $newOrder = $request->input('order');
        

        $result = collect($newOrder)->map(function ($item, $index){
            return [
                'id' => $item,
                'order' => $index+1
            ];
        })->toArray();

        // dd($result);
        foreach ($result as $data) {
            $id = $data['id'];
            $order = $data['order'];
            PageMenuLink::where('id', $id)->update(['order_by' => $order]);
        }

    
        return response()->json(['success' => 'Order updated successfully']);
    }
}
