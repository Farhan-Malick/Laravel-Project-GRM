<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class UserContactController extends Controller
{
    public function index()
    {
        $message=Contact::get();
        return view('Admin.pages.UserMessage.list', compact('message'));
    }
    public function edit(Request $req , $id)
    {
        $message=Contact::findOrFail($id);
        return view('Admin.pages.UserMessage.edit',['message'=>$message]);
    }
    public function update(Request $request)
    {
      //array
        $userad=Contact::find($request->id);
        $userad->firstname=$request->input('firstname');
        $userad->email=$request->input('email');
        $userad->message=$request->input('message');
        $userad->save();
        $request->session()->flash('msg','Data Has Been Updated Successfully'); 
        return redirect('Admin/User-Message');
    }
    public function delete(Request $request , $id)
    {
        $contact=Contact::find($id);
        $contact->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}
