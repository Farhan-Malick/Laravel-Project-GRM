<?php

namespace App\Http\Controllers\ClientSiteController\UserProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function index(Request $request){
        if (Auth::check()) {
            $user_id = auth()->user()->id;
        $membership = User::find($user_id)->Membership_For_User;
        }else{
            return view('user.AllPages.Memberships', compact('membership'));
        }
            $data=new Document();
            $file=$request->file;
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->file->storeAs('public/post/',$filename);
            $data->file=$filename;
            $request->session()->flash('Docs','Your File Has Been Uploaded Successfully.'); 
            $data->user_id = auth()->user()->id;
            $data->save();
            return redirect()->back();  
    }
    public function show(){ 
        if (Auth::check()) {
            $user_id = auth()->user()->id;
        $membership = User::find($user_id)->Membership_For_User;
        }else{
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $user_id = auth()->user()->id;
        $data = User::find($user_id)->docs;
        return view('user.UserProfile.DocumentsFile',compact('data','membership'));
    }
    public function download(Request $request, $file)
    {
        return response()->download(public_path('post/'.$file));
    }
    public function delete(Request $request, $id)
    {
        $data=Document::find($id);
        if ($data != null) {
            $data->delete();
            $request->session()->flash('Docs','Data Has Been Deleted Successfully');
        } 
        return redirect()->back();
    }
}
