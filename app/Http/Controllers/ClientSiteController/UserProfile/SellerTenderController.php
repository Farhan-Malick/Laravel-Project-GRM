<?php

namespace App\Http\Controllers\ClientSiteController\UserProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SellerTender;
use App\Models\CommentsForTenders;
use App\Models\User;
use App\Models\AddCompanyDetail;
use Auth;
use Carbon;
use Illuminate\Support\Facades\DB;
use mount;

class SellerTenderController extends Controller
{
    public $min_price;
    public $max_price;
    public function mount()
    {
        $this->min_price = 100;
        $this->max_price = 100000;
    }
    public function TendersDetail(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $tender = SellerTender::where(['id' => $id])->first();
        return view('user.AllPages.TendersDetail', compact('tender', 'membership'));
    }
    public function TenderCommentsAndDetail(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $tender = SellerTender::where(['id' => $id])->first();
        $comments = CommentsForTenders::where(['tender_id' => $id])->get();
        return view('user.UserProfile.Tenders.TenderCommentsAndDetail', compact('tender', 'comments', 'membership'));
    }
    public function TendersList()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $user_id = auth()->user()->id;
        $seller_tender = User::find($user_id)->user_tender;
        // $tender=CommentsForTenders::first();
        return view('user.UserProfile.Tenders.TendersList', compact('seller_tender', 'membership'));
    }
    public function AddTenders()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        return view('user.UserProfile.Tenders.AddTenders', compact('membership'));
    }
    public function Add(Request $request)
    {
        $request->validate([
            'description'   => 'required',
            'odate'        => 'required',
            'cdate'        => 'required',
            'location'        => 'required',
            'status'        => 'required',
            'amount'        => 'required|numeric',
        ]);
        $seller_tender = new SellerTender;
        $seller_tender->description = $request->input('description');
        $seller_tender->odate = $request->input('odate');
        $seller_tender->cdate = $request->input('cdate');
        $seller_tender->location = $request->input('location');
        $seller_tender->status = $request->input('status');
        $seller_tender->amount = $request->input('amount');
        $seller_tender->user_id = auth()->user()->id;
        $seller_tender->save();
        $request->session()->flash('msg', 'Data Has Been Inserted Successfully');
        return redirect('/Tenders-List');
    }
    public function edit(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $seller_tender = SellerTender::findOrFail($id);
        return view('user.UserProfile.Tenders.TendersEdit', compact('seller_tender', 'membership'));
    }
    public function update(Request $request)
    {
        //array
        $seller_tender = SellerTender::find($request->id);
        $seller_tender->description = $request->input('description');
        $seller_tender->odate = $request->input('odate');
        $seller_tender->cdate = $request->input('cdate');
        $seller_tender->location = $request->input('location');
        $seller_tender->status = $request->input('status');
        $seller_tender->amount = $request->input('amount');
        $seller_tender->save();
        $request->session()->flash('msg', 'Data Has Been Updated Successfully');
        return redirect('/Tenders-List');
    }
    public function delete(Request $request, $id)
    {
        $seller_tender = SellerTender::find($id);
        $seller_tender->delete();
        $request->session()->flash('msg', 'Data Has Been Deleted Successfully');
        return redirect()->back();
    }
}
