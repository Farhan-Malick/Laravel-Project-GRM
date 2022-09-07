<?php

namespace App\Http\Controllers\ClientSiteController\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function Contact_us(Request $request){
        //validation
        $request->validate([
            'firstname'     =>  'required',
            'email'          =>  'required',
            'message'         =>  'required |max:2000',
          ]);
          $contact = new Contact;
          $contact ->firstname =$request->input('firstname');
          $contact ->email =$request->input('email');
          $contact ->message =$request->input('message');
          $request->session()->flash('Contact','Your Message Has Been Posted Successfully.'); 
          $contact->save();
          return redirect()->back();
    }
}
