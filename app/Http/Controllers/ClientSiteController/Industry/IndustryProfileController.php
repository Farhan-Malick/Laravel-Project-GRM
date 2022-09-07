<?php

namespace App\Http\Controllers\ClientSiteController\Industry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\IndustryProfile;
use App\Models\MembershipForm;
use Auth;
class IndustryProfileController extends Controller
{

    public function industry()
    {
      if (Auth::check()) {
        $user_id = auth()->user()->id;
    $membership = User::find($user_id)->Membership_For_User;
    }else{
        return view('user.AllPages.Memberships', compact('membership'));
    }
      $MembershipForm=MembershipForm::get();
      $user_id = auth()->user()->id;
        $industryData = User::find($user_id)->addIndustryDetail;
      return view('/user/Industry/Profile')
      ->with('industryData',$industryData)
      ->with('MembershipForm',$MembershipForm)
      ->with('membership',$membership);
    }
    public function Add_Industry_Data(){
      if (Auth::check()) {
        $user_id = auth()->user()->id;
    $membership = User::find($user_id)->Membership_For_User;
    }else{
        return view('user.AllPages.Memberships', compact('membership'));
    }
        return view('user.Industry.IndustryProfileReg', compact('membership'));
    }
    public function Add_Industry(Request $request){
        //validation
        $request->validate([
            'name'                   =>  'required',
            'company_email'          =>   'required|email|unique:add_company_details,company_email',
            'phone'                  =>  'required|numeric',
            'company_website'        =>  'required',
            'description'            =>  'required',
            'companyfy'              =>  'required',
            'address'                =>  'required',
            'warehouse'              =>  'required',
            'vat_id'                 =>  'required|numeric',
            'tax_id'                 =>  'required|numeric',
            'reg_id'                 =>  'required|numeric',
            'court'                  =>  'required',
            'linkedin'               =>  'required',
            'facebook'               =>  'required',
            'twitter'                =>  'required',
            'insta'                  =>  'required',
            'file'                   =>  'required|mimes: jpg,csv,txt,xlx,xls,pdf|max:2048',
            'image'                  =>  'required|mimes: jfif,png,svg,jpg,jpeg,png',
          ]);
          $industryData = new IndustryProfile;
          $industryData ->name =$request->input('name');
          $industryData ->company_email =$request->input('company_email');
          $industryData ->phone =$request->input('phone');
          $industryData ->company_website =$request->input('company_website');
          $industryData ->description =$request->input('description');
          $industryData ->companyfy =$request->input('companyfy');
          $industryData ->address =$request->input('address');
          $industryData ->warehouse =$request->input('warehouse');
          $industryData ->vat_id =$request->input('vat_id');
          $industryData ->tax_id =$request->input('tax_id');
          $industryData ->reg_id =$request->input('reg_id');
          $industryData ->court =$request->input('court');
          $industryData ->linkedin =$request->input('linkedin');
          $industryData ->facebook =$request->input('facebook');
          $industryData ->twitter =$request->input('twitter');
          $industryData ->insta =$request->input('insta');
          $industryData->user_id = auth()->user()->id;
          if($request->hasfile('image'))
            {
                $image=$request->file('image');
                $ext = $image->extension();
                $file=time().'.'.$ext;
                $image->storeAs('public/post/Memberships',$file);
                $industryData['image']=$file;
            }
            if($request->hasfile('file'))
            {
                $file=$request->file('file');
                $ext = $file->GetClientOriginalExtension();
                $file2=time().'.'.$ext;
                $file->storeAs('public/post',$file2);
                $industryData['file']=$file2;
            }
          $request->session()->flash('Company','Your Data Has Been Saved Successfully.'); 
          $industryData->save();
          return redirect('/Industry-Profile');
    }
    public function edit(Request $request,$id)
    {
      if (Auth::check()) {
        $user_id = auth()->user()->id;
    $membership = User::find($user_id)->Membership_For_User;
    }else{
        return view('user.AllPages.Memberships', compact('membership'));
    }
        $industryData=IndustryProfile::findOrFail($id);
        return view('user.Industry.IndustryProfileEdit', compact('membership','industryData'));
    }
    public function update(Request $request)
  {
    $industryData=IndustryProfile::find($request->id);
    $industryData ->name =$request->input('name');
    $industryData ->company_email =$request->input('company_email');
    $industryData ->phone =$request->input('phone');
    $industryData ->company_website =$request->input('company_website');
    $industryData ->description =$request->input('description');
    $industryData ->companyfy =$request->input('companyfy');
    $industryData ->address =$request->input('address');
    $industryData ->warehouse =$request->input('warehouse');
    $industryData ->vat_id =$request->input('vat_id');
    $industryData ->tax_id =$request->input('tax_id');
    $industryData ->reg_id =$request->input('reg_id');
    $industryData ->court =$request->input('court');
    $industryData ->linkedin =$request->input('linkedin');
    $industryData ->facebook =$request->input('facebook');
    $industryData ->twitter =$request->input('twitter');
    $industryData ->insta =$request->input('insta');
    $industryData->user_id = auth()->user()->id;
    if($request->hasfile('image'))
      {
          $image=$request->file('image');
          $ext = $image->extension();
          $file=time().'.'.$ext;
          $image->storeAs('public/post/Memberships',$file);
          $industryData['image']=$file;
      }
      if($request->hasfile('file'))
      {
          $file=$request->file('file');
          $ext = $file->GetClientOriginalExtension();
          $file2=time().'.'.$ext;
          $file->storeAs('public/post',$file2);
          $industryData['file']=$file2;
      }
    $request->session()->flash('Company','Your Data Has Been Saved Successfully.'); 
    $industryData->save();
    return redirect('/Industry-Profile');
  }
}
