<?php

namespace App\Http\Controllers\ClientSiteController\UserAds;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientsAd;
use App\Models\Category;
use Auth;


class UserAdController extends Controller
{
  
    public function AddData(Request $request)
   {
        //validation
        $request->
        validate([
          'main_type'            =>  'required',
          'sub_category'         =>  'required',
          'p_name'               =>  'required |max:100',
          'title'                =>  'required',
          'description'          =>  'required|max:1500',
          'condition'            =>  'required',
          'quantity_avl'         =>  'required',
          'unit_weight'          =>  'required',
          'product_weight'          =>  'required',
          'supply_type'          =>  'required',
          'currency'             =>  'required',
          'price'                =>  'required|numeric',
          'p_terms'              =>  'required',
          'col_address'          =>  'required |max:100',
          'country'              =>  'required',
          'location'             =>  'required',
          'payment_terms'             =>  'required',
          'zip_code'             =>   'required|numeric',
          'listing_options'      =>  'required',
          'image1'               =>  'required |mimes: jfif,png,svg,jpg,jpeg,png,webp',
          'image2'               =>  'required |mimes: jfif,png,svg,jpg,jpeg,png,webp',
          'image3'               =>  'required |mimes: jfif,png,svg,jpg,jpeg,png,webp',
        ]);
        $clientAd = new ClientsAd;
            $clientAd ->main_type =$request->input('main_type');
            $clientAd->user_id = auth()->user()->id;
            $clientAd->sub_category =$request->input('sub_category');
            $clientAd ->p_name =$request->input('p_name');
            $clientAd ->title =$request->input('title');
            $clientAd ->description =$request->input('description');
            $clientAd ->condition =$request->input('condition');
            $clientAd ->quantity_avl =$request->input('quantity_avl');
            $clientAd ->unit_weight =$request->input('unit_weight');
            $clientAd ->product_weight =$request->input('product_weight');
            $clientAd ->supply_type =$request->input('supply_type');
            $clientAd ->currency =$request->input('currency');
            $clientAd ->price =$request->input('price');
            $clientAd ->p_terms =$request->input('p_terms');
            $clientAd ->col_address =$request->input('col_address');
            $clientAd ->country =$request->input('country');
            $clientAd ->location =$request->input('location');
            $clientAd ->payment_terms =$request->input('payment_terms');
            $clientAd ->zip_code =$request->input('zip_code');
            $clientAd ->listing_options =$request->input('listing_options');
          
        if($request->hasfile('image1'))
            {
                $image1=$request->file('image1');
                $ext = $image1->extension();
                $file1=time().'.'.$ext;
                $image1->storeAs('public/post/usersAd1/',$file1);
                $clientAd['image1']=$file1;
            }
        if($request->hasfile('image2'))
            {
                $image2=$request->file('image2');
                $ext = $image2->extension();
                $file2=time().'.'.$ext;
                $image2->storeAs('public/post/usersAd2/',$file2);
                $clientAd['image2']=$file2;
            }
            if($request->hasfile('image3'))
            {
                $image3=$request->file('image3');
                $ext = $image3->extension();
                $file3=time().'.'.$ext;
                $image3->storeAs('public/post/usersAd3/',$file3);
                $clientAd['image3']=$file3;
            }
            if($request->hasfile('image4'))
            {
                $image4=$request->file('image4');
                $ext = $image4->extension();
                $file4=time().'.'.$ext;
                $image4->storeAs('public/post/usersAd4/',$file4);
                $clientAd['image4']=$file4;
            }
            if($request->hasfile('image5'))
            {
                $image5=$request->file('image5');
                $ext = $image5->extension();
                $file5=time().'.'.$ext;
                $image5->storeAs('public/post/usersAd5/',$file5);
                $clientAd['image5']=$file5;
            }
            if($request->hasfile('image6'))
            {
                $image6=$request->file('image6');
                $ext = $image6->extension();
                $file6=time().'.'.$ext;
                $image6->storeAs('public/post/usersAd6/',$file6);
                $clientAd['image6']=$file6;
            }
            if($request->hasfile('image7'))
            {
                $image7=$request->file('image7');
                $ext = $image7->extension();
                $file7=time().'.'.$ext;
                $image7->storeAs('public/post/usersAd7/',$file7);
                $clientAd['image7']=$file7;
            }
            if($request->hasfile('image8'))
            {
                $image8=$request->file('image8');
                $ext = $image8->extension();
                $file8=time().'.'.$ext;
                $image8->storeAs('public/post/usersAd8/',$file8);
                $clientAd['image8']=$file8;
            }
            if($request->hasfile('image9'))
            {
                $image9=$request->file('image9');
                $ext = $image9->extension();
                $file9=time().'.'.$ext;
                $image9->storeAs('public/post/usersAd9/',$file9);
                $clientAd['image9']=$file9;
            }
            if($request->hasfile('image10'))
            {
                $image10=$request->file('image10');
                $ext = $image10->extension();
                $file10=time().'.'.$ext;
                $image10->storeAs('public/post/usersAd10/',$file10);
                $clientAd['image10']=$file10;
            }
            if($request->hasfile('image11'))
            {
                $image11=$request->file('image11');
                $ext = $image11->extension();
                $file11=time().'.'.$ext;
                $image11->storeAs('public/post/usersAd11/',$file11);
                $clientAd['image11']=$file11;
            }
            if($request->hasfile('image12'))
            {
                $image12=$request->file('image12');
                $ext = $image12->extension();
                $file12=time().'.'.$ext;
                $image12->storeAs('public/post/usersAd12/',$file12);
                $clientAd['image12']=$file12;
            }
            if($request->hasfile('image13'))
            {
                $image13=$request->file('image13');
                $ext = $image13->extension();
                $file13=time().'.'.$ext;
                $image13->storeAs('public/post/usersAd13/',$file13);
                $clientAd['image13']=$file13;
            }
            if($request->hasfile('image14'))
            {
                $image14=$request->file('image14');
                $ext = $image14->extension();
                $file14=time().'.'.$ext;
                $image14->storeAs('public/post/usersAd14/',$file14);
                $clientAd['image14']=$file14;
            }
            if($request->hasfile('image15'))
            {
                $image15=$request->file('image15');
                $ext = $image15->extension();
                $file15=time().'.'.$ext;
                $image15->storeAs('public/post/usersAd15/',$file15);
                $clientAd['image15']=$file15;
            }
        $clientAd->save();
        $request->session()->flash('Attributes','Your Ad Has Been Posted Successfully.'); 
        return redirect('/Offers');
   }
}
