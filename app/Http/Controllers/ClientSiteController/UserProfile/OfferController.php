<?php

namespace App\Http\Controllers\ClientSiteController\UserProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\ClientsAd;

class OfferController extends Controller
{
    public function AdOffers(Request $request,$id){
        if (Auth::check()) {
            $user_id = auth()->user()->id;
        $membership = User::find($user_id)->Membership_For_User;
        }else{
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $user=ClientsAd::where(['id'=>$id])->first();
        return view('/user/UserProfile/ViewAdOffers',compact('user','membership')); 
    }
    public function OfferForm(){
        if (Auth::check()) {
            $user_id = auth()->user()->id;
        $membership = User::find($user_id)->Membership_For_User;
        }else{
            return view('user.AllPages.Memberships', compact('membership'));
        }
        return view('user.UserProfile.AddProduct', compact('membership'));
    }
    public function Store()
    {  if (Auth::check()) {
        $user_id = auth()->user()->id;
    $membership = User::find($user_id)->Membership_For_User;
    }else{
        return view('user.AllPages.Memberships', compact('membership'));
    }
        $user_id = auth()->user()->id;
        $user = User::find($user_id)->user;
        return view('/user/UserProfile/Offers',compact('user','membership'));
    }
    public function edit(Request $request,$id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
        $membership = User::find($user_id)->Membership_For_User;
        }else{
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $offers=ClientsAd::findOrFail($id);
        return view('/user/UserProfile/EditOffers',['offers'=>$offers],['membership'=>$membership]);
    }
    public function update(Request $request)
    {
        //validation
        $request->validate([
            'main_type'            =>  'required',
            'sub_category'         =>  'required',
          ]);
      //array
        $offers=ClientsAd::find($request->id);
        $offers ->main_type =$request->input('main_type');
            $offers ->sub_category =$request->input('sub_category');
            $offers ->p_name =$request->input('p_name');
            $offers ->title =$request->input('title');
            $offers ->description =$request->input('description');
            $offers ->condition =$request->input('condition');
            $offers ->quantity_avl =$request->input('quantity_avl');
            $offers ->unit_weight =$request->input('unit_weight');
            $offers ->product_weight =$request->input('product_weight');
            $offers ->supply_type =$request->input('supply_type');
            $offers ->currency =$request->input('currency');
            $offers ->price =$request->input('price');
            $offers ->p_terms =$request->input('p_terms');
            $offers ->col_address =$request->input('col_address');
            $offers ->country =$request->input('country');
            $offers ->location =$request->input('location');
            $offers ->payment_terms =$request->input('payment_terms');
            $offers ->zip_code =$request->input('zip_code');
            $offers ->listing_options =$request->input('listing_options');
            $offers->user_id = auth()->user()->id;

        $offers->save();
        $request->session()->flash('ClientsAds','Your Ad Has Been Updated Successfully.'); 
        return redirect('/Offers');
    }
    public function delete(Request $request,$id)
    {
      $offers=ClientsAd::find($id);
        if ($offers != null) {
            $offers->delete();
            $request->session()->flash('ClientsAdsDEL','Data Has Been Deleted Successfully');
        } 
        return redirect()->back();
    }
}
