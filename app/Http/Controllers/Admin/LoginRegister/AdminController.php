<?php

namespace App\Http\Controllers\Admin\LoginRegister;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminLogin;
use App\Models\AdminRegister;
use Illuminate\Support\Facades\DB;
use Crypt;
use Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.pages.index');
    }
    public function register()
    {
    return view('Admin.AdminLoginRegister.Register');
    }
    public function AdminLoginView()
    {
      return view('Admin.AdminLoginRegister.Login');
    }
    
    public function Adminregister(Request $request)
    {
    //     //validation
      $request->validate([
        'email'        => 'required',
        'password'     => 'required',
        'status'     => 'required'
      ]);
        //array
      $admin = new AdminRegister;
      $admin->email=$request->input('email');
      $admin->password=Crypt::encrypt($request->input('password'));
      $admin->status=$request->input('status');
      $admin->save();
      $request->session()->put('admin',$request->input('email'));
      return back()->with(['success'=>"You have been Register"]); 
    }

    function login(Request $request)
    {
       $email=$request->input('email');
       $password=$request->input('password');

       //QUERY BUILDER
       $result= DB::table('admin_registers')
       ->where('email',$email)
       ->where('password',$password)
       ->get();
       Session::put('email', $email);

    if(isset($result[0]->id))
    {
        if($result[0]->status==1)
        {
            $request->session()->put('BLOG_USER_ID',$result[0]->id);
            return redirect('/AdminIndex');
        }else{
            $request->session()->flash('msg','Account Is Deactivated.'); 
            return redirect('/admin');
        }
    }else
    {
         $request->session()->flash('msg','Please Enter Valid Login Details.'); 
         return redirect('/admin');
    }
    }
     
}
