<?php

namespace App\Http\Controllers\ClientSiteController\UserProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CommentsForTenders;
use App\Models\SellerTender;
use App\Models\User;
use App\Notifications\CommentNotification;
// use Illuminate\Thread;
use Carbon;

class CommentsForTendersController extends Controller
{
    public function AddCommentAndPrice(Request $request, $id)
    {
        $request->validate([
            'comment'   => 'required',
            'price'     => 'required|numeric',
        ]);
        $cp = new CommentsForTenders;
        $cp->comment = $request->input('comment');
        $cp->price = $request->input('price');
        $cp->user_id = auth()->user()->id;
        $cp->tender_id = $id;
        $request->session()->flash('msg', 'We Have Submitted Your Offer To this Tender');
        $cp->save();
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        // $user = User::all();
        auth()->user()->notify(new CommentNotification($user));
        return redirect()->back();
    }
    // public function notify(Request $request, $id)
    // {
    //     $tender = SellerTender::where(['id' => $id])->first();
    //     return view('user.userLayouts.Notifications', compact('tender'));
    // }
}
