<?php

namespace App\Http\Controllers\Admin\MyProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;

class DocsController extends Controller
{
    public function list(){
        $document=Document::get();
        return view('Admin.pages.MyProfile.document',compact('document'));
    }
    public function delete(Request $request , $id)
    {
        $document=Document::find($id);
        $document->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}
