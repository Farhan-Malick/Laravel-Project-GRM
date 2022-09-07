<?php

namespace App\Http\Controllers\ClientSiteController\Membership;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MembershipForm;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class MembershipController extends Controller
{
    public function AddMemberships(Request $request){
        //validation
        $request->validate(
          [
            'company_name'           =>  'required',
            'company_scope'          =>  'required',
            'address'                =>  'required |max:1000',
            'country'                =>  'required',
            'city'                   =>  'required',
            'zip_code'               =>  'required',
            'company_email'          =>  'required',
            'company_website'        =>  'required',
            'm_type'                 =>  'required',
            'firstname'              =>  'required',
            'last_scope'             =>  'required',
            'phone'                  =>  'required|numeric',
            'gender'                 =>  'required',
            'image'                  =>  'required |mimes: jfif,png,svg,jpg,jpeg,png',
            'company_document'       =>  'required|mimes: csv,txt,xlx,xls,pdf|max:2048',
            'name_on_card'           =>  'required',
            'card_no'                =>  'required|numeric',
            'expiration'             =>  'required',
            'cvv'                    =>  'required|numeric',
          ]);
          $membership = new MembershipForm;
          $membership ->user_id = auth()->user()->id;
            $membership ->company_name =$request->input('company_name');
            $membership ->company_scope =$request->input('company_scope');
            $membership ->address =$request->input('address');
            $membership ->country =$request->input('country');
            $membership ->city =$request->input('city');
            $membership ->zip_code =$request->input('zip_code');
            $membership ->company_email =$request->input('company_email');
            $membership ->company_website =$request->input('company_website');
            $membership ->m_type =$request->input('m_type');
            $membership ->industry =$request->input('industry');
            $membership ->type =$request->input('type');
            $membership ->firstname =$request->input('firstname');
            $membership ->last_scope =$request->input('last_scope');
            $membership ->phone =$request->input('phone');
            $membership ->gender =$request->input('gender');
            $membership ->name_on_card =$request->input('name_on_card');
            $membership ->card_no =$request->input('card_no');
            $membership ->expiration =$request->input('expiration');
          $membership ->cvv =$request->input('cvv');
          // $request->session()->put('CheckMemberShip','status'==null);
          if($request->hasfile('image'))
            {
                $image=$request->file('image');
                $ext = $image->extension();
                $file=time().'.'.$ext;
                $image->storeAs('public/post/Memberships',$file);
                $membership['image']=$file;
            }
            if($request->hasfile('company_document'))
            {
                $company_document=$request->file('company_document');
                $ext = $company_document->GetClientOriginalExtension();
                $file2=time().'.'.$ext;
                $company_document->storeAs('public/post',$file2);
                $membership['company_document']=$file2;
            } 
          $request->session()->flash('Membership','Your Data Has Been Saved Successfully.'); 
          $membership->save();
          if($membership ->type =$request->input('type'))
          {
            return redirect('/Company-Profile');
          }
          if($membership ->industry =$request->input('industry'))
          {
            return redirect('/Industry-Profile');
          }
          
    }
    public function download(Request $request, $company_document)
    {
        return response()->download(public_path('post/'.$company_document));
    }
   
}
