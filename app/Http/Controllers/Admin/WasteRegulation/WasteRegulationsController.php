<?php

namespace App\Http\Controllers\Admin\WasteRegulation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WasteRegulation;
use App\Models\WasteRKCCountry;

class WasteRegulationsController extends Controller
{
    public function index()
    {
        $waste=WasteRegulation::get();
        return view('Admin.pages.WasteRegulation.List',compact('waste'));
    }
    public function Add_View()
    {
        $country=WasteRKCCountry::get();
        return view('Admin.pages.WasteRegulation.Add',compact('country'));
    }
    public function Add(Request $request)
    {
        $request->validate([
            'country_id'   => 'required',
          ]);
          $waste = new WasteRegulation;
          $waste ->country_id =$request->input('country_id');
          $waste ->eu_members =$request->input('eu_members');
          $waste ->oecd =$request->input('oecd');
          $waste ->link1 =$request->input('link1');
          $waste ->link2 =$request->input('link2');
          $waste ->link3 =$request->input('link3');
          $waste ->link4 =$request->input('link4');
          $waste ->link5 =$request->input('link5');
          $waste ->link6 =$request->input('link6');
          $waste ->link7 =$request->input('link7');
          $waste ->link8 =$request->input('link8');
          $waste->save();
          $request->session()->flash('msg','Data Has Been Inserted Successfully'); 
          return redirect()->back();
    }
    public function edit(Request $request,$id)
    {
        $country=WasteRKCCountry::get();
        $waste=WasteRegulation::findOrFail($id);
        return view('Admin.pages.WasteRegulation.Edit',compact('waste','country'));
    }
    public function update(Request $request)
    {
      //array
        $waste=WasteRegulation::find($request->id);
        $waste ->country_id =$request->input('country_id');
        $waste ->eu_members =$request->input('eu_members');
        $waste ->oecd =$request->input('oecd');
        $waste ->link1 =$request->input('link1');
        $waste ->link2 =$request->input('link2');
        $waste ->link3 =$request->input('link3');
        $waste ->link4 =$request->input('link4');
        $waste ->link5 =$request->input('link5');
        $waste ->link6 =$request->input('link6');
        $waste ->link7 =$request->input('link7');
        $waste ->link8 =$request->input('link8');
        $waste->save();
        $request->session()->flash('msg','Data Has Been Updated Successfully'); 
        return redirect('Admin/Waste-Regulations');
    }
    public function delete(Request $request , $id)
    {
        $waste=WasteRegulation::find($id);
        $waste->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}
