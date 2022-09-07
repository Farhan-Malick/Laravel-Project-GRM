<?php

namespace App\Http\Controllers\Admin\Tenders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SellerTender;

class TenderController extends Controller
{
    public function list()
    {
        $tender=SellerTender::get();
        return view('Admin.pages.Tenders.list',compact('tender'));
    }
    public function view()
    {
        return view('Admin.pages.Tenders.add');
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
          $tender = new SellerTender;
          $tender ->description =$request->input('description');
          $tender ->odate =$request->input('odate');
          $tender ->cdate =$request->input('cdate');
          $tender ->location =$request->input('location');
          $tender ->status =$request->input('status');
          $tender ->amount =$request->input('amount');
          $tender->save();
          $request->session()->flash('msg','Data Has Been Inserted Successfully'); 
          return redirect('Admin/Tenders');
    }
    public function edit(Request $request,$id)
    {
        $tender=SellerTender::findOrFail($id);
        return view('Admin.pages.Tenders.edit',['tender'=>$tender]);
    }
    public function update(Request $request)
    {
      //array
        $tender=SellerTender::find($request->id);
        $tender ->description =$request->input('description');
        $tender ->odate =$request->input('odate');
        $tender ->cdate =$request->input('cdate');
        $tender ->location =$request->input('location');
        $tender ->status =$request->input('status');
        $tender ->amount =$request->input('amount');
        $tender->save();
        $request->session()->flash('msg','Data Has Been Updated Successfully'); 
        return redirect('Admin/Tenders');
    }
    public function delete(Request $request , $id)
    {
        $tender=SellerTender::find($id);
        $tender->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
    public function Approval(Request $request)
    {
        $tender=SellerTender::find($request->ad_id);
        $approval=$request->approve;
        if ($approval=='on') {
            $approval=1;
        }else {
            $approval=0;
        }
        $tender->approve=$approval;
        $tender->save();
        return redirect()->back()->with('You have Approved the Ad');
    }
}
