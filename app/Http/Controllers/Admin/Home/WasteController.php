<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WasteRKC;

class WasteController extends Controller
{
    public function index()
    {
        $waste_regulations=WasteRKC::get();
        return view('Admin.pages.HomePage.waste_regulations.waste_regulations', compact('waste_regulations'));
    }
    public function Addview(){
        return view('Admin.pages.HomePage.waste_regulations.add');
    }
    public function edit(Request $req , $id)
    {
        $waste_regulations=WasteRKC::findOrFail($id);
        return view('Admin.pages.HomePage.waste_regulations.edit',['waste_regulations'=>$waste_regulations]);
    }
   public function Addwaste(Request $request)
   {
        //validation
        $request->validate([
          'heading1'        => 'required |max:50',
          'heading2'        => 'required |max:50',
          'image'       =>  'required |mimes: png,svg,jpg,jpeg,png',
          'paragraph'        => 'required|max:500'
        ]);
        $waste_regulations = new WasteRKC;
        $waste_regulations ->heading1 =$request->input('heading1');
        $waste_regulations ->heading2 =$request->input('heading2');
        $waste_regulations ->paragraph =$request->input('paragraph');
        if($request->hasfile('image'))
            {
                $image=$request->file('image');
                $ext = $image->extension();
                $file=time().'.'.$ext;
                $image->storeAs('public/post/home/background',$file);
                $waste_regulations['image']=$file;
            }
        $waste_regulations->save();
        $request->session()->flash('msg','Data Has Been Inserted Successfully'); 
        return redirect('Admin/WasteRKC');
   }
   public function update(Request $request)
    {
      //array
        $waste_regulations=WasteRKC::find($request->id);
        $waste_regulations ->heading1 =$request->input('heading1');
        $waste_regulations ->heading2 =$request->input('heading2');
        $waste_regulations ->paragraph =$request->input('paragraph');
        if($request->hasfile('image'))
            {
                $image=$request->file('image');
                $ext = $image->extension();
                $file=time().'.'.$ext;
                $image->storeAs('public/post/home/background',$file);
                $waste_regulations['image']=$file;
            }
        $waste_regulations->save();
        $request->session()->flash('msg','Data Has Been updated Successfully'); 
        return redirect('Admin/WasteRKC');
    }
    public function delete(Request $request , $id)
    {
        $waste_regulations=WasteRKC::find($id);
        $waste_regulations->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}
