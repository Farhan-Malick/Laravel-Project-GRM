<?php

namespace App\Http\Controllers\Admin\WasteRegulation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WasteRKCCountry;

class WasteRKCController extends Controller
{
    public function index()
    {
        $Country=WasteRKCCountry::get();
        return view('Admin.pages.WasteRegulation.Country',compact('Country'));
    }
    public function Add_View()
    {
        return view('Admin.pages.WasteRegulation.AddCountry');
    }
    public function Add(Request $request)
    {
        $request->validate([
            'country'   => 'required',
          ]);
          $Country = new WasteRKCCountry;
          $Country ->country =$request->input('country');
          $Country->save();
          $request->session()->flash('msg','Data Has Been Inserted Successfully'); 
          return redirect()->back();
    }
    public function delete(Request $request , $id)
    {
        $Country=WasteRKCCountry::find($id);
        $Country->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}
