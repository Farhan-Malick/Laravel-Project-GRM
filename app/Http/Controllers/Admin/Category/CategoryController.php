<?php

namespace App\Http\Controllers\Admin\Category;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Category::all();
        return view('Admin.pages.User.ParentCategories.list',compact('category'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::whereNull('category_id')->get();
        return view('Admin.pages.User.ParentCategories.addcategory', compact('category'));
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
            'category_id'=>$request->category_id,
        );
        $create = Category::create($data);
        return redirect()->route('category.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$id)
    {
        $category=Category::findOrFail($id);
        return view('Admin.pages.User.ParentCategories.editcategory',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category=Category::find($request->id);
        $category->category=$request->input('category');
        $category->save();
        $request->session()->flash('msg','Data Has Been Updated Successfully'); 
        return redirect('Admin/Category-List');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,Request $request, $id)
    {
        $category=Category::find($id);
        if ($category != null) {
            $category->delete();
            $request->session()->flash('msg','Data Has Been Deleted Successfully');
        } 
        return redirect()->back();
    }
}
