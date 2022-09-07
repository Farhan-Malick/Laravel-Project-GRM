<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MembershipForm;
use Illuminate\Support\Facades\Storage;


class MembershipFormController extends Controller
{
   public function index()
   {
    $member=MembershipForm::get();
    return view('Admin/pages/Membership/MembershipForm',compact('member'));
   }
   public function delete(Request $request, $id)
   {
          $category=MembershipForm::find($id);
          $category->delete();
          $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
          return redirect()->back();
   }
}
