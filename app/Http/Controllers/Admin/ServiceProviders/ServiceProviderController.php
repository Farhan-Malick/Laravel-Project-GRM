<?php

namespace App\Http\Controllers\Admin\ServiceProviders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServicesProvider;

class ServiceProviderController extends Controller
{
    public function index()
    {
        $header=ServicesProvider::get();
        return view('Admin.pages.Services.ListService', compact('header'));
    }
    public function Addview()
    {
        return view('Admin.pages.Services.AddService');
    }
    public function edit(Request $req , $id)
    {
        $header=ServicesProvider::findOrFail($id);
        return view('Admin.pages.Services.EditService',['header'=>$header]);
    }
   public function AddData(Request $request)
   {
        //validation
        $request->validate([
          'service_providers'        => 'required',
        ]);
        $header = new ServicesProvider;
        $header ->service_providers =$request->input('service_providers');
        $header->save();
        $request->session()->flash('msg','Data Has Been Inserted Successfully'); 
        // return redirect('Admin/Service');
        return redirect()->back();
   }
   public function update(Request $request)
    {
      //array
        $header=ServicesProvider::find($request->id);
        $header->service_providers=$request->input('service_providers');
        $header->save();
        $request->session()->flash('msg','Data Has Been Updated Successfully'); 
        return redirect('/Admin/Service');
    }
    public function delete(Request $request , $id)
    {
        $header=ServicesProvider::find($id);
        $header->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}
