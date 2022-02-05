<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function list()
    {
        $product=Product::get();
        return view('Admin.pages.HomePage.Products.productlist', compact('product'));
    }
    public function index()
    {
        $product=Product::get();
        return view('Admin.pages.HomePage.Products.AddDataforProducts', compact('product'));
    }
    public function edit(Request $req , $id)
    {
        $product=Product::findOrFail($id);
        return view('Admin.pages.HomePage.Products.EditDataForProduct',['product'=>$product]);
    }
    public function delete(Request $request , $id)
    {
        $product=Product::find($id);
        $product->delete();
        $request->session()->flash('msg','Data Has Been Deleted Successfully'); 
        return redirect()->back();
    }
   public function AddData(Request $request)
   {
        //validation
        $request->validate([
          'image'  =>  'required |mimes: png,svg,jpg,jpeg,png',
          'title'  => 'required |max:80',
          'price'  => 'required |max:30',
          'rating' => 'required |max:30',
        ]);
        $product = new Product;
        if($request->hasfile('image'))
            {
                $image=$request->file('image');
                $ext = $image->extension();
                $file=time().'.'.$ext;
                $image->storeAs('public/post/home/products/',$file);
                $product['image']=$file;
            }
            $product ->title =$request->input('title');
            $product ->price =$request->input('price');
            $product ->rating =$request->input('rating');
        $product->save();
        $request->session()->flash('msg','Data Has Been Inserted Successfully'); 
        return redirect('Admin/product');
   }
   public function update(Request $request)
    {
      $product=Product::find($request->id);
      if($request->hasfile('image'))
          {
              $image=$request->file('image');
              $ext = $image->extension();
              $file=time().'.'.$ext;
              $image->storeAs('public/post/home/products/',$file);
              $product['image']=$file;
          }
          $product ->title =$request->input('title');
          $product ->price =$request->input('price');
          $product ->rating =$request->input('rating');
        $product->save();
        $request->session()->flash('msg','Data Has Been Updated Successfully'); 
        return redirect('/Admin/product');
    }
    
}
