<?php

namespace App\Http\Controllers\ClientSiteController\UserProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddCompanyDetail;
use App\Models\User;
use Auth;
use App\Models\Category;

class AddCompanyDataController extends Controller
{
    public function CompanyProfile(){
        if (Auth::check()) {
            $user_id = auth()->user()->id;
        $membership = User::find($user_id)->Membership_For_User;
        }else{
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $user_id = auth()->user()->id;
        $companyData = User::find($user_id)->addcompanydetail;
        return view('user.UserProfile.CompanyProfile',compact('companyData','membership'));
    }
    public function Add_Company_Data(){
        if (Auth::check()) {
            $user_id = auth()->user()->id;
        $membership = User::find($user_id)->Membership_For_User;
        }else{
            return view('user.AllPages.Memberships', compact('membership'));
        }
        return view('user.UserProfile.CprofileReg', compact('membership'));
    }
    public function Add_Company(Request $request){
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
          $companyData = new AddCompanyDetail;
          $companyData ->name =$request->input('name');
          $companyData ->company_email =$request->input('company_email');
          $companyData ->phone =$request->input('phone');
          $companyData ->company_website =$request->input('company_website');
          $companyData ->description =$request->input('description');
          $companyData ->companyfy =$request->input('companyfy');
          $companyData ->address =$request->input('address');
          $companyData ->warehouse =$request->input('warehouse');
          $companyData ->vat_id =$request->input('vat_id');
          $companyData ->tax_id =$request->input('tax_id');
          $companyData ->reg_id =$request->input('reg_id');
          $companyData ->court =$request->input('court');
          $companyData ->linkedin =$request->input('linkedin');
          $companyData ->facebook =$request->input('facebook');
          $companyData ->twitter =$request->input('twitter');
          $companyData ->insta =$request->input('insta');
          $companyData->user_id = auth()->user()->id;
          if($request->hasfile('image'))
            {
                $image=$request->file('image');
                $ext = $image->extension();
                $file=time().'.'.$ext;
                $image->storeAs('public/post/Memberships',$file);
                $companyData['image']=$file;
            }
            if($request->hasfile('file'))
            {
                $file=$request->file('file');
                $ext = $file->GetClientOriginalExtension();
                $file2=time().'.'.$ext;
                $file->storeAs('public/post',$file2);
                $companyData['file']=$file2;
            }
          $request->session()->flash('Company','Your Data Has Been Saved Successfully.'); 
          $companyData->save();
          return redirect('/Company-Profile');
    }
    public function edit(Request $request,$id)
    { 
        if (Auth::check()) {
        $user_id = auth()->user()->id;
    $membership = User::find($user_id)->Membership_For_User;
    }else{
        return view('user.AllPages.Memberships', compact('membership'));
    }
        $companyData=AddCompanyDetail::findOrFail($id);
        return view('user.UserProfile.EditCompanyData',compact('companyData','membership'));
    }
    public function update(Request $request)
  {
    $companyData=AddCompanyDetail::find($request->id);
    $companyData ->name =$request->input('name');
    $companyData ->company_email =$request->input('company_email');
    $companyData ->phone =$request->input('phone');
    $companyData ->company_website =$request->input('company_website');
    $companyData ->description =$request->input('description');
    $companyData ->companyfy =$request->input('companyfy');
    $companyData ->address =$request->input('address');
    $companyData ->warehouse =$request->input('warehouse');
    $companyData ->vat_id =$request->input('vat_id');
    $companyData ->tax_id =$request->input('tax_id');
    $companyData ->reg_id =$request->input('reg_id');
    $companyData ->court =$request->input('court');
    $companyData ->linkedin =$request->input('linkedin');
    $companyData ->facebook =$request->input('facebook');
    $companyData ->twitter =$request->input('twitter');
    $companyData ->insta =$request->input('insta');
    $companyData->user_id = auth()->user()->id;
    if($request->hasfile('image'))
      {
          $image=$request->file('image');
          $ext = $image->extension();
          $file=time().'.'.$ext;
          $image->storeAs('public/post/Memberships',$file);
          $companyData['image']=$file;
      }
      if($request->hasfile('file'))
      {
          $file=$request->file('file');
          $ext = $file->GetClientOriginalExtension();
          $file2=time().'.'.$ext;
          $file->storeAs('public/post',$file2);
          $companyData['file']=$file2;
      }
    $request->session()->flash('Company','Your Data Has Been Saved Successfully.'); 
    $companyData->save();
    return redirect('/Company-Profile');
  }
    public function download(Request $request, $company_document)
    {
        return response()->download(public_path('post/'.$company_document));
    }
}
