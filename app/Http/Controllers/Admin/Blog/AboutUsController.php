<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Models\AboutUsBanner;
use session;
class AboutUsController extends Controller
{
    public function index()
    {
        $AboutUsBanner=AboutUsBanner::get();
        return view('Admin.Blog.About_Us.Banner.List', compact('AboutUsBanner'));
    }
    public function Add()
    {
        return view('Admin.Blog.About_Us.Banner.Add');
    }
    public function edit(Request $req , $id)
    {
        $AboutUsBanner=AboutUsBanner::findOrFail($id);
        return view('Admin.Blog.About_Us.Banner.Edit',['AboutUsBanner'=>$AboutUsBanner]);
    }
   public function AddData(Request $request)
   {
        //validation
        $request->validate([
          'heading'        => 'required |max:30',
          'title'        => 'required',
          'image'       =>  'required |mimes: png,svg,jpg,jpeg,png,webp',
          'image2'        =>  'required |mimes: png,svg,jpg,jpeg,png,webp',
          Rule::dimensions()->maxWidth(1920)->maxHeight(500)->ratio(3 / 2),
        ]);
        $AboutUsBanner = new AboutUsBanner;
        $AboutUsBanner ->heading =$request->input('heading');
        $AboutUsBanner ->title =$request->input('title');
        if($request->hasfile('image'))
            {
                $image=$request->file('image');
                $ext = $image->extension();
                $file=time().'.'.$ext;
                $image->storeAs('public/post/AboutUs/BannerImage1',$file);
                $AboutUsBanner['image']=$file;
            }

        if($request->hasfile('image2'))
            {
                $image2=$request->file('image2');
                $ext = $image2->extension();
                $file2=time().'.'.$ext;
                $image2->storeAs('public/post/AboutUs/BannerImage2',$file2);
                $AboutUsBanner['image2']=$file2;
            }
        $AboutUsBanner->save();
        $request->session()->flash('msg','Data Has Been Inserted Successfully'); 
        return redirect('Admin/AboutUsBanner');
   }
   public function update(Request $request)
    {
      //array
        $AboutUsBanner=AboutUsBanner::find($request->id);
        $AboutUsBanner->heading=$request->input('heading');
        $AboutUsBanner->title=$request->input('title');
        if($request->hasfile('image'))
        {
            $image=$request->file('image');
            $ext = $image->extension();
            $file=time().'.'.$ext;
            $image->storeAs('public/post/AboutUs/BannerImage1',$file);
            $AboutUsBanner['image']=$file;
        }

     if($request->hasfile('image2'))
        {
            $image2=$request->file('image2');
            $ext = $image2->extension();
            $file2=time().'.'.$ext;
            $image2->storeAs('public/post/AboutUs/BannerImage2',$file2);
            $AboutUsBanner['image2']=$file2;
        }
        $AboutUsBanner->save();
        $request->session()->flash('msg','Data Has Been Updated Successfully'); 
        return redirect('/Admin/AboutUsBanner');
    }
    public function delete(Request $request , $id)
    {
        $AboutUsBanner=AboutUsBanner::find($id);
        $AboutUsBanner->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}
