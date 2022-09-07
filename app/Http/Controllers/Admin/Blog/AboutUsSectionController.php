<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Models\AboutUsSection;

class AboutUsSectionController extends Controller
{
    public function index()
    {
        $AboutUsSection=AboutUsSection::get();
        return view('Admin.Blog.About_Us.Section.List', compact('AboutUsSection'));
    }
    public function Add()
    {
        return view('Admin.Blog.About_Us.Section.Add');
    }
    public function edit(Request $req , $id)
    {
        $AboutUsSection=AboutUsSection::findOrFail($id);
        return view('Admin.Blog.About_Us.Section.Edit',['AboutUsSection'=>$AboutUsSection]);
    }
   public function AddData(Request $request)
   {
        //validation
        $request->validate([
            'title'        => 'required',
          'heading'        => 'required',
          'p1'              => 'required',
          'p2'              => 'required',
          'p3'              => 'required',
          'p4'              => 'required',
          'p5'              => 'required',
          'p6'              => 'required',
          'image'       =>  'required |mimes: png,svg,jpg,jpeg,png,webp',
          Rule::dimensions()->maxWidth(1920)->maxHeight(500)->ratio(3 / 2),
        ]);
        $AboutUsSection = new AboutUsSection;
        $AboutUsSection ->title =$request->input('title');
        $AboutUsSection ->heading =$request->input('heading');
        $AboutUsSection ->p1 =$request->input('p1');
        $AboutUsSection ->p2 =$request->input('p2');
        $AboutUsSection ->p3 =$request->input('p3');
        $AboutUsSection ->p4 =$request->input('p4');
        $AboutUsSection ->p5 =$request->input('p5');
        $AboutUsSection ->p6 =$request->input('p6');
        if($request->hasfile('image'))
            {
                $image=$request->file('image');
                $ext = $image->extension();
                $file=time().'.'.$ext;
                $image->storeAs('public/post/AboutUs/SectionImage',$file);
                $AboutUsSection['image']=$file;
            }
        $AboutUsSection->save();
        $request->session()->flash('msg','Data Has Been Inserted Successfully'); 
        return redirect('Admin/About-Us-Section');
   }
   public function update(Request $request)
    {
      //array
        $AboutUsSection=AboutUsSection::find($request->id);
        $AboutUsSection ->title =$request->input('title');
        $AboutUsSection ->heading =$request->input('heading');
        $AboutUsSection ->p1 =$request->input('p1');
        $AboutUsSection ->p2 =$request->input('p2');
        $AboutUsSection ->p3 =$request->input('p3');
        $AboutUsSection ->p4 =$request->input('p4');
        $AboutUsSection ->p5 =$request->input('p5');
        $AboutUsSection ->p6 =$request->input('p6');
        if($request->hasfile('image'))
        {
            $image=$request->file('image');
            $ext = $image->extension();
            $file=time().'.'.$ext;
            $image->storeAs('public/post/AboutUs/SectionImage',$file);
            $AboutUsSection['image']=$file;
        }
        $AboutUsSection->save();
        $request->session()->flash('msg','Data Has Been Inserted Successfully'); 
        return redirect('Admin/About-Us-Section');
    }
    public function delete(Request $request , $id)
    {
        $AboutUsSection=AboutUsSection::find($id);
        $AboutUsSection->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}
