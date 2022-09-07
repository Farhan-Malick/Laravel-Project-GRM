<?php

namespace App\Http\Controllers\Admin\MyProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddCompanyDetail;

class CompanyProfileController extends Controller
{
    public function list(){
        $c_profile=AddCompanyDetail::get();
        return view('Admin.pages.MyProfile.c_profile',compact('c_profile'));
    }
    public function delete(Request $request , $id)
    {
        $tender=AddCompanyDetail::find($id);
        $tender->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}
