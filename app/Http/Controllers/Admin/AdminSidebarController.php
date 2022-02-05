<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\Product;

class AdminSidebarController extends Controller
{
    public function header()
    {
        $header = Header::all();
        return view('Admin.pages.HomePage.Header.header', compact('header'));
    }
    public function product()
    {  
        $product = Product::all();
        return view('Admin.pages.HomePage.Products.productlist', compact('product'));
    }
    public function view_product()
    {
        return view('Admin.pages.HomePage.view_product.view_product');
    }
    public function services()
    {
        return view('Admin.pages.HomePage.services.services');
    }
    public function tenders()
    {
        return view('Admin.pages.HomePage.tenders.tenders');
    }
    public function waste_regulations()
    {
        return view('Admin.pages.HomePage.waste_regulations.waste_regulations');
    }
    public function latest_atricles()
    {
        return view('Admin.pages.HomePage.latest_atricles.latest_atricles');
    }
}
