<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $category=Category::get();
        return view('Admin.pages.User.ParentCategories.list', compact('category'));
    }
    public function AddDataForm()
    {
        return view('Admin.pages.User.ParentCategories.addcategory');
    }
   public function AddData(Request $request)
   {
        //validation
        $request->validate([
          'category'        => 'required |max:60',
        ]);
        $category = new Category;
        $category ->category =$request->input('category');
        $category->save();
        $request->session()->flash('msg','Data Has Been Inserted Successfully'); 
        return redirect('Admin/Category');
   }
   public function edit(Request $req , $id)
   {
       $category=Category::findOrFail($id);
       return view('Admin.pages.User.ParentCategories.editcategory',['category'=>$category]);
   }
   public function update(Request $request)
    {
      //array
        $category=Category::find($request->id);
        $category->category=$request->input('category');
        $category->save();
        $request->session()->flash('msg','Data Has Been Updated Successfully'); 
        return redirect('Admin/Category');
    }
    public function delete(Request $request , $id)
    {
        $category=Category::find($id);
        $category->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}
