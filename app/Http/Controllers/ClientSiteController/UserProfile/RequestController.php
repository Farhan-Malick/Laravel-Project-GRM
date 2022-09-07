<?php

namespace App\Http\Controllers\ClientSiteController\UserProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Add_Request;
use App\Models\Category;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\DB;


class RequestController extends Controller
{
  
  public function Addbtn()
  {
    if (Auth::check()) {
      $user_id = auth()->user()->id;
   $membership = User::find($user_id)->Membership_For_User;
     }else{
      return view('user.AllPages.Memberships', compact('membership'));
  }
      return view('user.UserProfile.AddRequest', compact('membership'));
  }
    public function Request()
    {
        if (Auth::check()) {
          $user_id = auth()->user()->id;
      $membership = User::find($user_id)->Membership_For_User;
      }else{
          return view('user.AllPages.Memberships', compact('membership'));
      }
        $user_id = auth()->user()->id;
        $Reqdata = User::find($user_id)->Req_user;
        return view('user.UserProfile.Request',compact('Reqdata','membership'));
    }
    public function AddRequest(Request $request)
    {
          //validation
          $request->validate([
            'm_type'            =>  'required',
            'sub_type'            =>  'required',
            'p_name'               =>  'required |max:100',
            'condition'            =>  'required',
            'location'             =>  'required',
            'weight'             =>  'required',
          ]);      
            $addreq = new Add_Request;
            $addreq->user_id = auth()->user()->id;
            $addreq ->m_type =$request->input('m_type');
            $addreq ->sub_type =$request->input('sub_type');
            $addreq ->p_name =$request->input('p_name');
            $addreq ->condition =$request->input('condition');
            $addreq ->location =$request->input('location');
            $addreq ->weight =$request->input('weight');
            $addreq->save();
            // dd($addreq);
            $request->session()->flash('request','Your Request Has Been Posted Successfully'); 
            return redirect('/Request');
}
public function edit(Request $request,$id)
{
  if (Auth::check()) {
    $user_id = auth()->user()->id;
$membership = User::find($user_id)->Membership_For_User;
}else{
    return view('user.AllPages.Memberships', compact('membership'));
}
    $addreq=Add_Request::findOrFail($id);
    return view('user.UserProfile.EditRequest',['addreq'=>$addreq],['membership'=>$membership]);
}
  public function update(Request $request)
  {
    $addreq=Add_Request::find($request->id);
    $addreq ->m_type =$request->input('m_type');
    $addreq ->sub_type =$request->input('sub_type');
    $addreq ->p_name =$request->input('p_name');
    $addreq ->condition =$request->input('condition');
    $addreq ->location =$request->input('location');
    $addreq ->weight =$request->input('weight');
    $addreq->user_id = auth()->user()->id;
    $addreq->save();
    // dd($addreq);
    $request->session()->flash('request','Your Request Has Been Updated Successfully'); 
    return redirect('/Request');
  }
    public function delete(Request $request,$id)
    {
      $Reqdata=Add_Request::find($id);
        if ($Reqdata != null) {
            $Reqdata->delete();
            $request->session()->flash('Docs','Data Has Been Deleted Successfully');
        } 
        return redirect()->back();
    }
}
