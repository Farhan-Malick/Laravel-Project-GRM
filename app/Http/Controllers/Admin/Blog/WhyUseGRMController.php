<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Models\WhyUseGRM;

class WhyUseGRMController extends Controller
{
    public function index()
    {
        $WhyUseGRM=WhyUseGRM::get();
        return view('Admin.Blog.WhyUseGRM.List', compact('WhyUseGRM'));
    }
    public function Add()
    {
        return view('Admin.Blog.WhyUseGRM.Add');
    }
    public function edit(Request $req , $id)
    {
        $WhyUseGRM=WhyUseGRM::findOrFail($id);
        return view('Admin.Blog.WhyUseGRM.Edit',['WhyUseGRM'=>$WhyUseGRM]);
    }
   public function AddData(Request $request)
   {
        //validation
        $request->validate([
          'heading'        => 'required',
          'p1'              => 'required',
          'p2'              => 'required',
          'p3'              => 'required',
          Rule::dimensions()->maxWidth(1920)->maxHeight(500)->ratio(3 / 2),
        ]);
        $WhyUseGRM = new WhyUseGRM;
        $WhyUseGRM ->heading =$request->input('heading');
        $WhyUseGRM ->p1 =$request->input('p1');
        $WhyUseGRM ->p2 =$request->input('p2');
        $WhyUseGRM ->p3 =$request->input('p3');
        $WhyUseGRM->save();
        $request->session()->flash('msg','Data Has Been Inserted Successfully'); 
        return redirect('Admin/Why-Use-GRM');
   }
   public function update(Request $request)
    {
      //array
        $WhyUseGRM=WhyUseGRM::find($request->id);
        $WhyUseGRM ->heading =$request->input('heading');
        $WhyUseGRM ->p1 =$request->input('p1');
        $WhyUseGRM ->p2 =$request->input('p2');
        $WhyUseGRM ->p3 =$request->input('p3');
        $WhyUseGRM->save();
        $request->session()->flash('msg','Data Has Been Inserted Successfully'); 
        return redirect('Admin/Why-Use-GRM');
    }
    public function delete(Request $request , $id)
    {
        $WhyUseGRM=WhyUseGRM::find($id);
        $WhyUseGRM->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}

