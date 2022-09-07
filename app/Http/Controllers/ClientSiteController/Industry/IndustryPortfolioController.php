<?php

namespace App\Http\Controllers\ClientSiteController\Industry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IndustryPortfolio;
use App\Models\User;
use Auth;

class IndustryPortfolioController extends Controller
{
    public function Media(){
        if (Auth::check()) {
          $user_id = auth()->user()->id;
      $membership = User::find($user_id)->Membership_For_User;
      }else{
          return view('user.AllPages.Memberships', compact('membership'));
      }
        $user_id = auth()->user()->id;
        $medias = User::find($user_id)->IndustryPortfolio;
          return view('user.Industry.Media',compact('medias','membership'));
      }
     public function Post(Request $request)
     {
          //validation
          $request->validate([
            'video' =>  'mimetypes:video/x-flv,video/mp4,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv | max:20000'
          ]);
          $medias = new IndustryPortfolio;
          // Imgae Upload
          $file=$request->file;
          $filename=time().'.'.$file->getClientOriginalExtension();
          $request->file->storeAs('public/post/industryPortfolio',$filename);
          $medias->file=$filename; 
          // Video upload
          $video=$request->video;
          $videoname=time().'.'.$video->getClientOriginalExtension();
          $request->video->storeAs('public/post/industryPortfolio',$videoname);
          $medias->video=$videoname;
          $medias->user_id = auth()->user()->id;
          $request->session()->flash('imgvideo','Your Image & Video Has Been Uploaded Successfully.');
          $medias->save();
          return redirect()->back();  
     }
}
