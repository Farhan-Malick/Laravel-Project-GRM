<?php

namespace App\Http\Controllers\ClientSiteController\UserProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MediaUser;
use App\Models\User;
use Auth;
class MediaController extends Controller
{
    public function Media(){
      if (Auth::check()) {
        $user_id = auth()->user()->id;
    $membership = User::find($user_id)->Membership_For_User;
    }else{
        return view('user.AllPages.Memberships', compact('membership'));
    }
      $user_id = auth()->user()->id;
      $media = User::find($user_id)->med;
        return view('user.UserProfile.Media',compact('media','membership'));
    }
   public function Post(Request $request)
   {
        //validation
        $request->validate([
          'video' =>  'mimetypes:video/x-flv,video/mp4,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv | max:20000'
        ]);
        $media = new MediaUser;
        // Imgae Upload
        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->storeAs('public/post/',$filename);
        $media->file=$filename; 
        // Video upload
        $video=$request->video;
        $videoname=time().'.'.$video->getClientOriginalExtension();
        $request->video->storeAs('public/post/',$videoname);
        $media->video=$videoname;
        $media->user_id = auth()->user()->id;
        $request->session()->flash('imgvideo','Your Image & Video Has Been Uploaded Successfully.');
        $media->save();
        return redirect()->back();  
   }
}
