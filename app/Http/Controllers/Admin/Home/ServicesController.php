<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index(){
        $Service=Service::get();
        return view('Admin.pages.HomePage.services.services',compact('Service'));
    }
    public function Addview(){
        return view('Admin.pages.HomePage.services.add');
    }
    public function AddServices(Request $request)
   {
        //validation
        $request->validate([
          'h1_b1'        => 'required |max:50',
          'h2_b2'        => 'required |max:50',
          'h3_b3'        => 'required |max:50',
          'h4_b4'        => 'required |max:50',
          'h5_b5'        => 'required |max:50',
          'h6_b6'        => 'required |max:50',
          'p1_b1'        => 'required |max:250',
          'p2_b2'        => 'required |max:250',
          'p3_b3'        => 'required |max:250',
          'p4_b4'        => 'required |max:250',
          'p5_b5'        => 'required |max:250',
          'p6_b6'        => 'required |max:250' 
        ]);
        $Service = new Service;
        $Service ->h1_b1 =$request->input('h1_b1');
        $Service ->h2_b2 =$request->input('h2_b2');
        $Service ->h3_b3 =$request->input('h3_b3');
        $Service ->h4_b4 =$request->input('h4_b4');
        $Service ->h5_b5 =$request->input('h5_b5');
        $Service ->h6_b6 =$request->input('h6_b6');
        $Service ->p1_b1 =$request->input('p1_b1');
        $Service ->p2_b2 =$request->input('p2_b2');
        $Service ->p3_b3 =$request->input('p3_b3');
        $Service ->p4_b4 =$request->input('p4_b4');
        $Service ->p5_b5 =$request->input('p5_b5');
        $Service ->p6_b6 =$request->input('p6_b6');
        $Service->save();
        $request->session()->flash('msg','Data Has Been Inserted Successfully'); 
        return redirect('Admin/Services');
   }
   public function edit(Request $req , $id)
   {
       $Service=Service::findOrFail($id);
       return view('Admin.pages.HomePage.services.edit',['Service'=>$Service]);
   }
   public function update(Request $request)
    {
      //array
        $Service=Service::find($request->id);
        $Service ->h1_b1 =$request->input('h1_b1');
        $Service ->h2_b2 =$request->input('h2_b2');
        $Service ->h3_b3 =$request->input('h3_b3');
        $Service ->h4_b4 =$request->input('h4_b4');
        $Service ->h5_b5 =$request->input('h5_b5');
        $Service ->h6_b6 =$request->input('h6_b6');
        $Service ->p1_b1 =$request->input('p1_b1');
        $Service ->p2_b2 =$request->input('p2_b2');
        $Service ->p3_b3 =$request->input('p3_b3');
        $Service ->p4_b4 =$request->input('p4_b4');
        $Service ->p5_b5 =$request->input('p5_b5');
        $Service ->p6_b6 =$request->input('p6_b6');
        $Service->save();
        $request->session()->flash('msg','Data Has Been Updated Successfully'); 
        return redirect('Admin/Services');
    }
    public function delete(Request $request , $id)
    {
        $Service=Service::find($id);
        $Service->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}
