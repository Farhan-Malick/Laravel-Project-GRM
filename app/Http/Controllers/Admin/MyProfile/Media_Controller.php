<?php

namespace App\Http\Controllers\Admin\MyProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MediaUser;

class Media_Controller extends Controller
{
    public function list(){
        $media=MediaUser::get();
        return view('Admin.pages.MyProfile.media',compact('media'));
    }
    public function delete(Request $request , $id)
    {
        $media=MediaUser::find($id);
        $media->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}
