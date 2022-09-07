<?php

namespace App\Http\Controllers\ClientSiteController\Industry;

use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\IndustryService;
use App\Models\MembershipForm;
use App\Models\ServicesProvider;

class IndustryServicesController extends Controller
{

    public function Add_industry_Services()
    {
        $ServiceProviders=ServicesProvider::get();
        if (Auth::check()) {
            $user_id = auth()->user()->id;
        $membership = User::find($user_id)->Membership_For_User;
        }else{
            return view('user.AllPages.Memberships', compact('membership'));
        }
      return view('user/Industry/AddIndustryServices', compact('membership','ServiceProviders'));
    }
    public function Add_industry_Services_Data(Request $request)
    {
        $request->validate([
            // 'industry' => 'required',
            'title'   => 'required',
            'services_type'        => 'required',
            'detail'        => 'required',
            'location'        => 'required',
            'duration'        => 'required',
          ]);
          $industryService = new IndustryService;
          $industryService ->service_id =$request->input('service_id');
          $industryService ->title =$request->input('title');
          $industryService ->services_type =$request->input('services_type');
          $industryService ->detail =$request->input('detail');
          $industryService ->location =$request->input('location');
          $industryService ->duration =$request->input('duration');
          $industryService->user_id = auth()->user()->id;
          $industryService->save();
          $request->session()->flash('msg','Data Has Been Inserted Successfully'); 
          return redirect('/industry-Services-List');
    }
    public function edit(Request $request,$id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
        $membership = User::find($user_id)->Membership_For_User;
        }else{
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $industryService=IndustryService::findOrFail($id);
        return view('user.Industry.IndustryServicesEdit', compact('membership','industryService'));
    }
    public function update(Request $request)
    {
      //array
        $industryService=IndustryService::find($request->id);
        $industryService ->title =$request->input('title');
        $industryService ->services_type =$request->input('services_type');
        $industryService ->detail =$request->input('detail');
        $industryService ->location =$request->input('location');
        $industryService ->duration =$request->input('duration');
        $industryService->save();
        $request->session()->flash('msg','Data Has Been Updated Successfully'); 
        return redirect('/industry-Services-List');
    }
    public function delete(Request $request , $id)
    {
        $industryService=IndustryService::find($id);
        $industryService->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
    
}
