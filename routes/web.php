<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientSiteController\NavLinkController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminSidebarController;
use App\Http\Controllers\Admin\Home\PostHeaderrController;
use App\Http\Controllers\Admin\Home\ProductsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [NavLinkController::class, 'HomePage']);
Route::get('/About-Us', [NavLinkController::class, 'AboutPage']);
Route::get('/Why-Use-GRM', [NavLinkController::class, 'GRMPage']);
Route::get('/Affliations&Memberships', [NavLinkController::class, 'Affliations_Membership']);
Route::get('/Waste-RKC', [NavLinkController::class, 'wasteRKCPage']);
Route::get('/Recycling-KC', [NavLinkController::class, 'RecyclingKCPage']);
Route::get('/Contact-Us', [NavLinkController::class, 'ContactUsPage']);
Route::get('/Product-view', [NavLinkController::class, 'Product_view']);
// After Login Routes
Route::get('/Company-Profile', [NavLinkController::class, 'CompanyProfile']);
Route::get('/Login-Product-view', [NavLinkController::class, 'Login_Product_view']);
Route::get('/Home', [NavLinkController::class, 'LoginHome']);
Route::get('/Memberships', [NavLinkController::class, 'Memberships']);
Route::get('/Registration-Form', [NavLinkController::class, 'Membership_RegForm']);
Route::get('/Add-Product', [NavLinkController::class, 'AddProduct']);
Route::get('/User-Products', [NavLinkController::class, 'User_product']);
Route::get('/Request', [NavLinkController::class, 'home_product']);
Route::get('/Docs', [NavLinkController::class, 'DocumentsFile']);
Route::get('/Media', [NavLinkController::class, 'Media']);
Route::get('/Tenders-Detail', [NavLinkController::class, 'TendersDetail']);
Route::get('/Blog', [NavLinkController::class, 'Category']);
Route::get('/Blog-Selected', [NavLinkController::class, 'CategorySelected']);
Route::get('/Tenders-List', [NavLinkController::class, 'TendersList']);
Route::get('/Tenders-List-Expand', [NavLinkController::class, 'TendersListExpand']);
Route::get('/Industry-News', [NavLinkController::class, 'IndustryNews']);
Route::get('/Services', [NavLinkController::class, 'Services'])->name('all-services');
Route::get('/Our-Services', [NavLinkController::class, 'OurServices']);
Route::get('/Live-Pricing', [NavLinkController::class, 'LivePricing']);

//Admin Panel
Route::group(['middleware' =>['admin_auth']], function()
{
    Route::get('/register',[AdminLoginController::class, 'register']);
    Route::post('/register',[AdminLoginController::class, 'Adminregister']);
    Route::get('/admin',[AdminLoginController::class, 'Admin']);
    Route::post('/AdminPanel',[AdminLoginController::class, 'login']);
    Route::get('/Adminpanel', [AdminLoginController::class, 'index']);
});
    Route::get('/admin/logout', function () {
        session()->forget('admin');
        return view('Admin.AdminLoginRegister.Login');
    });
/*
|--------------------------------------------------------------------------
|SIDEBAR HOME SECTION ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/Admin/header', [AdminSidebarController::class, 'header']);
Route::get('/Admin/product',[AdminSidebarController::class, 'product']);
Route::get('/Admin/view_product',[AdminSidebarController::class, 'view_product']);
Route::get('/Admin/services',[AdminSidebarController::class, 'services']);
Route::get('/Admin/tenders',[AdminSidebarController::class, 'tenders']);
Route::get('/Admin/waste_regulations',[AdminSidebarController::class, 'waste_regulations']);
Route::get('/Admin/latest_atricles',[AdminSidebarController::class, 'latest_atricles']);
/*
|--------------------------------------------------------------------------
|HOME HEADER ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/Admin/header-Add',[PostHeaderrController::class, 'index'])->name('/Admin/header-Add');
Route::post('/Admin/header',[PostHeaderrController::class, 'AddData']);
Route::get('/Admin/header-List',[PostHeaderrController::class, 'list'])->name('list');
Route::get('/Admin/header-Edit/{id}',[PostHeaderrController::class, 'edit']);
Route::post('/Admin/header-Update',[PostHeaderrController::class,'update']);
Route::get('/Admin/header/{id}',[PostHeaderrController::class,'delete']);/*
|--------------------------------------------------------------------------
|HOME Products ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/Admin/product-List',[ProductsController::class, 'list'])->name('list');
Route::get('/Admin/product-Add',[ProductsController::class, 'index'])->name('/Admin/product-Add');
Route::post('/Admin/product',[ProductsController::class, 'AddData']);
Route::get('/Admin/product-Edit/{id}',[ProductsController::class, 'edit']);
Route::post('/Admin/product-Update',[ProductsController::class,'update']);
Route::get('/Admin/product/{id}',[ProductsController::class,'delete']);