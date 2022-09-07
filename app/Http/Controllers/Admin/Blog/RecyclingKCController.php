<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Models\RecyclingKC;

class RecyclingKCController extends Controller
{
    public function index()
    {
        $RecyclingKC=RecyclingKC::get();
        return view('Admin.Blog.RecyclingKC.List', compact('RecyclingKC'));
    }
    public function Add()
    {
        return view('Admin.Blog.RecyclingKC.Add');
    }
    public function edit(Request $req , $id)
    {
        $RecyclingKC=RecyclingKC::findOrFail($id);
        return view('Admin.Blog.RecyclingKC.Edit',['RecyclingKC'=>$RecyclingKC]);
    }
   public function AddData(Request $request)
   {
        //validation
        $request->validate([
          'heading'        => 'required',
          'p1'              => 'required',
          'p2'              => 'required',
          'p3'              => 'required',
          'p4'              => 'required',
        ]);
        $RecyclingKC = new RecyclingKC;
        $RecyclingKC ->heading =$request->input('heading');
        $RecyclingKC ->p1 =$request->input('p1');
        $RecyclingKC ->p2 =$request->input('p2');
        $RecyclingKC ->p3 =$request->input('p3');
        $RecyclingKC ->p4 =$request->input('p4');
        $RecyclingKC->save();
        $request->session()->flash('msg','Data Has Been Inserted Successfully'); 
        return redirect('Admin/RecyclingKC');
   }
   public function update(Request $request)
    {
      //array
        $RecyclingKC=RecyclingKC::find($request->id);
        $RecyclingKC ->heading =$request->input('heading');
        $RecyclingKC ->p1 =$request->input('p1');
        $RecyclingKC ->p2 =$request->input('p2');
        $RecyclingKC ->p3 =$request->input('p3');
        $RecyclingKC ->p4 =$request->input('p4');
        $RecyclingKC->save();
        $request->session()->flash('msg','Data Has Been Inserted Successfully'); 
        return redirect('Admin/RecyclingKC');
    }
    public function delete(Request $request , $id)
    {
        $RecyclingKC=RecyclingKC::find($id);
        $RecyclingKC->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}
