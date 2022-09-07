<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RequestCategory;

class RequestCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=RequestCategory::all();
        return view('Admin.pages.User.RequestCategories.list',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=RequestCategory::whereNull('cat_id')->get();
        return view('Admin.pages.User.RequestCategories.addcategory', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
            'category'=>$request->category,
            'cat_id'=>$request->cat_id,
        );
        $create = RequestCategory::create($data);
        return redirect()->route('category.creates');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=RequestCategory::findOrFail($id);
        return view('Admin.pages.User.RequestCategories.editcategory',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  RequestCategory $category)
    {
        $category=RequestCategory::find($request->id);
        $category->category=$request->input('category');
        $category->save();
        $request->session()->flash('msg','Data Has Been Updated Successfully'); 
        return redirect('Admin/Request_Category-List');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $category=RequestCategory::find($id);
        if ($category != null) {
            $category->delete();
            $request->session()->flash('msg','Data Has Been Deleted Successfully');
        } 
        return redirect()->back();
    }
}
