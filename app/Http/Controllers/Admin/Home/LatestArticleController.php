<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LatestArticle;

class LatestArticleController extends Controller
{
    public function index()
    {
        $latest_article=LatestArticle::get();
        return view('Admin.pages.HomePage.LatestArticle.latest_article',compact('latest_article'));
    }
    public function Addview(){
        return view('Admin.pages.HomePage.LatestArticle.add');
    }
    public function LatestEdit(Request $req , $id)
    {
        $latest_article=LatestArticle::findOrFail($id);
        return view('Admin.pages.HomePage.LatestArticle.edit',['latest_article'=>$latest_article]);
    }
   public function AddArticle(Request $request)
   {
        //validation
        $request->validate([
        //   'head1'        => 'required |max:50',
        //   'head2'        => 'required |max:50',
          'limage'       =>  'required |mimes: png,svg,jpg,jpeg,png',
          'date'        => 'required|',
          'title'        => 'required|max:150'
        ]);
        $latest_article = new LatestArticle;
        // $latest_article ->head1 =$request->input('head1');
        // $latest_article ->head2 =$request->input('head2');
        $latest_article ->date =$request->input('date');
          $latest_article ->title =$request->input('title');
        if($request->hasfile('limage'))
            {
                $limage=$request->file('limage');
                $ext = $limage->extension();
                $file2=time().'.'.$ext;
                $limage->storeAs('public/post/home/background',$file2);
                $latest_article['limage']=$file2;
            }
        $latest_article->save();
        $request->session()->flash('msg','Data Has Been Inserted Successfully'); 
        return redirect('Admin/Latest-Article');
   }
   public function update(Request $request)
    {
      //array
        $latest_article=LatestArticle::find($request->id);
        // $latest_article ->head1 =$request->input('head1');
        // $latest_article ->head2 =$request->input('head2');
        $latest_article ->date =$request->input('date');
          $latest_article ->title =$request->input('title');
        if($request->hasfile('limage'))
            {
                $limage=$request->file('limage');
                $ext = $limage->extension();
                $file2=time().'.'.$ext;
                $limage->storeAs('public/post/home/LA',$file2);
                $latest_article['limage']=$file2;
            }
        $latest_article->save();
        $request->session()->flash('msg','Data Has Been updated Successfully'); 
        return redirect('Admin/Latest-Article');
    }
    public function delete(Request $request , $id)
    {
        $latest_article=LatestArticle::find($id);
        $latest_article->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
}
