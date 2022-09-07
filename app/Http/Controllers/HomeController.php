<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\CommentsForTenders;
use App\Notifications\CommentNotification;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
            return view('user.AllPages.Memberships', compact('membership'));
        } else {
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('/user/AllPages/home')
                ->with('ads', $user->ads);
        }
    }
    public function notify(Request $request, $id)
    {
        if (auth()->user()) {
            $user = User::first();
            auth()->user()->notify(new CommentNotification($user));
        }
        dd('done');
    }
}
