<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientsAd;

class AdController extends Controller
{
    public function index()
    {
        $userad=ClientsAd::get();
        return view('Admin.pages.Ads.list', compact('userad'));
    }
    public function Approval(Request $request)
    {
        $userads=ClientsAd::find($request->ad_id);
        $approval=$request->approve;
        if ($approval=='on') {
            $approval=1;
        }else {
            $approval=0;
        }
        $userads->approve=$approval;
        $userads->save();
        return redirect()->back()->with('You have Approved the Ad');
    }
}
