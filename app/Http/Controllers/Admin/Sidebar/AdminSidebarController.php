<?php

namespace App\Http\Controllers\Admin\Sidebar;

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
    public function tenders()
    {
        return view('Admin.pages.HomePage.tenders.tenders');
    }
    // User 
    public function list()
    {
        return view('Admin.pages.User.list');
    }
    public function addcategory()
    {
        return view('Admin.pages.User.addcategory');
    }
    public function editcategory()
    {
        return view('Admin.pages.User.editcategory');
    }
}
