<?php

namespace App\Http\Controllers\Admin\MyProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Add_Request;

class Request_Controller extends Controller
{
    public function list(){
        $addreq=Add_Request::get();
        return view('Admin.pages.MyProfile.addreq',compact('addreq'));
    }
    public function delete(Request $request , $id)
    {
        $addreq=Add_Request::find($id);
        $addreq->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}
