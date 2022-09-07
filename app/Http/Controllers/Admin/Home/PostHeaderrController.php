<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Models\Header;
use session;
class PostHeaderrController extends Controller
{
    public function index()
    {
        $header=Header::get();
        return view('Admin.pages.HomePage.Header.AddDataForHeader', compact('header'));
    }
    public function edit(Request $req , $id)
    {
        $header=Header::findOrFail($id);
        return view('Admin.pages.HomePage.Header.EditDataForHeader',['header'=>$header]);
    }
   public function AddData(Request $request)
   {
        //validation
        $request->validate([
          'heading'        => 'required |max:30',
          'title'        => 'required |max:80',
          'image'       =>  'required |mimes: png,svg,jpg,jpeg,png',
          'image2'        =>  'required |mimes: png,svg,jpg,jpeg,png',
          Rule::dimensions()->maxWidth(1920)->maxHeight(500)->ratio(3 / 2),
        ]);
        $header = new Header;
        $header ->heading =$request->input('heading');
        $header ->title =$request->input('title');
        if($request->hasfile('image'))
            {
                $image=$request->file('image');
                $ext = $image->extension();
                $file=time().'.'.$ext;
                $image->storeAs('public/post/home/background',$file);
                $header['image']=$file;
            }

        if($request->hasfile('image2'))
            {
                $image2=$request->file('image2');
                $ext = $image2->extension();
                $file2=time().'.'.$ext;
                $image2->storeAs('public/post/home/BannerImage',$file2);
                $header['image2']=$file2;
            }
        $header->save();
        $request->session()->flash('msg','Data Has Been Inserted Successfully'); 
        return redirect('Admin/header');
   }
   public function update(Request $request)
    {
      //array
        $header=Header::find($request->id);
        $header->heading=$request->input('heading');
        $header->title=$request->input('title');
        if($request->hasfile('image'))
            {
                $image=$request->file('image');
                $ext = $image->extension();
                $file=time().'.'.$ext;
                $image->storeAs('public/post/home/background',$file);
                $header['image']=$file;
            }
        if($request->hasfile('image2'))
            {
                $image2=$request->file('image2');
                $ext = $image2->extension();
                $file2=time().'.'.$ext;
                $image2->storeAs('public/post/home/BannerImage',$file2);
                $header['image2']=$file2;
            }
        $header->save();
        $request->session()->flash('msg','Data Has Been Updated Successfully'); 
        return redirect('/Admin/header');
    }
    public function delete(Request $request , $id)
    {
        $header=Header::find($id);
        $header->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}
