<?php

namespace App\Http\Controllers\ClientSiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Header;

class NavLinkController extends Controller
{
    public function LoginHome(){
        $header = Header::all();
        return view('user.AfterLogin.LoginHome', compact('header'));
    }
    public function HomePage(){
        $header = Header::all();
        return view('user.home', compact('header'));
    }
    public function AboutPage(){
        return view('user.About');
    }
    public function GRMPage(){
        return view('user.WhyUseGRM');
    }
    public function Affliations_Membership(){
        return view('user.AffliationsMemberships');
    }
    public function wasteRKCPage(){
        return view('user.WasteRKC');
    }
    public function RecyclingKCPage(){
        return view('user.RecyclingKC');
    }
    public function ContactUsPage(){
        return view('user.Contact');
    }
    public function Memberships(){
        return view('user.AfterLogin.Membership');
    }
    public function Membership_RegForm(){
        return view('user.AfterLogin.Membership_RegForm');
    }
    public function AddProduct(){
        return view('user.AddProduct');
    }
    public function Product_view()
    {
        return view('user.BeforeLoginViewProduct');
    }
    public function Login_Product_view()
    {
        return view('user.ViewProduct');
    }
    public function CompanyProfile(){
        return view('user.AfterLogin.CompanyProfile');
    }
    public function User_product(){
        return view('user.AfterLogin.Offers');
    }
    public function home_product(){
        return view('user.AfterLogin.Request');
    }
    public function DocumentsFile(){
        return view('user.AfterLogin.DocumentsFile');
    }
    public function Media(){
        return view('user.AfterLogin.Media');
    }
    public function TendersDetail(){
        return view('user.AfterLogin.TendersDetail');
    }
    public function Category(){
        return view('user.AfterLogin.Category');
    }
    public function CategorySelected(){
        return view('user.AfterLogin.SelectedCategory');
    }
    public function TendersList(){
        return view('user.AfterLogin.TendersList');
    }
    public function TendersListExpand(){
        return view('user.AfterLogin.ExpandTenderList');
    }
    public function IndustryNews(){
        return view('user.AfterLogin.IndustryNews');
    }
    public function LivePricing(){
        return view('user.AfterLogin.LivePricing');
    }
    public function Services()
    {
        return view('user.allservices');
    }
    public function OurServices()
    {
        return view('user.ser');
    }

}

