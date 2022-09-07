<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
use Auth;
class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // $path=$request->path();
        if(!$request->session()->has('BLOG_USER_ID'))
        {
            return redirect('/admin');
        }
        // if (($path=="admin" )&&(session()->has('BLOG_USER_ID'))) {
        //     return redirect('/AdminIndex');
        // }
       
        return $next($request);
    }
}
