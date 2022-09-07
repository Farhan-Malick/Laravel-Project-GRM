<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientSiteController\AllRoutesHandler\NavLinkController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Admin\LoginRegister\AdminController;
use App\Http\Controllers\Admin\Sidebar\AdminSidebarController;
use App\Http\Controllers\Admin\Home\ProductsController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Category\RequestCategoryController;
use App\Http\Controllers\Admin\User\AdController;
use App\Http\Controllers\Admin\User\UserContactController;
use App\Http\Controllers\Admin\User\MembershipFormController;
use App\Http\Controllers\Admin\Tenders\TenderController;
use App\Http\Controllers\ClientSiteController\UserProfile\SellerTenderController;
use App\Http\Controllers\Admin\MyProfile\CompanyProfileController;
use App\Http\Controllers\Admin\MyProfile\DocsController;
use App\Http\Controllers\Admin\MyProfile\Request_Controller;
use App\Http\Controllers\Admin\MyProfile\Media_Controller;
use App\Http\Controllers\Admin\WasteRegulation\WasteRegulationsController;
use App\Http\Controllers\Admin\WasteRegulation\WasteRKCController;
use App\Http\Controllers\Admin\ServiceProviders\ServiceProviderController;
use App\Http\Controllers\ClientSiteController\UserAds\UserAdController;
use App\Http\Controllers\ClientSiteController\Contact\ContactController;
use App\Http\Controllers\ClientSiteController\Membership\MembershipController;
use App\Http\Controllers\ClientSiteController\UserProfile\DocumentController;
use App\Http\Controllers\ClientSiteController\UserProfile\MediaController;
use App\Http\Controllers\ClientSiteController\UserProfile\AddCompanyDataController;
use App\Http\Controllers\ClientSiteController\UserProfile\RequestController;
use App\Http\Controllers\ClientSiteController\UserProfile\OfferController;
use App\Http\Controllers\ClientSiteController\UserProfile\CommentsForTendersController;
// use App\Http\Controllers\ClientSiteController\Waste\WasteRKCController;
use App\Http\Controllers\ClientSiteController\Industry\IndustryProfileController;
use App\Http\Controllers\ClientSiteController\Industry\IndustryServicesController;
use App\Http\Controllers\ClientSiteController\Industry\IndustryPortfolioController;
use App\Http\Controllers\Admin\Home\PostHeaderrController;
use App\Http\Controllers\Admin\Home\ServicesController;
use App\Http\Controllers\Admin\Home\WasteController;
use App\Http\Controllers\Admin\Home\LatestArticleController;
// Blog Controller
use App\Http\Controllers\Admin\Blog\AboutUsController;
use App\Http\Controllers\Admin\Blog\AboutUsSectionController;
use App\Http\Controllers\Admin\Blog\WhyUseGRMController;
use App\Http\Controllers\Admin\Blog\RecyclingKCController;
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

//AFTER LOGIN USER
Route::group(['middleware' => ['ClientAuth']], function () {
    Route::get('/User_dashboard', [NavLinkController::class, 'UserDashboard']);
    Route::get('/Select_category', [NavLinkController::class, 'Select_category']);
    Route::get('/Attributes', [NavLinkController::class, 'RecoveredPapers']);
    Route::get('/Store', [NavLinkController::class, 'Store']);
    Route::get('/GeneralStore', [NavLinkController::class, 'GeneralStore']);
    Route::get('/RequestStore', [NavLinkController::class, 'RequestStore']);
    Route::get('/TendersStore', [NavLinkController::class, 'GeneralStoreForTenders']);
    Route::get('/Services-Store', [NavLinkController::class, 'ServicesStore']);
    Route::get('/All-Ads', [NavLinkController::class, 'GeneralStoreAllads']);
    Route::get('/Ad-Details/{id}', [NavLinkController::class, 'AdDetails']);
    Route::get('/Services-Details/{id}', [NavLinkController::class, 'ServicesDetails']);
    Route::get('/Memberships', [NavLinkController::class, 'Memberships']);
    Route::get('/Registration-Form', [NavLinkController::class, 'Membership_RegForm']);
    Route::get('/Tenders-List-Expand', [NavLinkController::class, 'TendersListExpand']);
    Route::get('/Services', [NavLinkController::class, 'Services'])->name('all-services');
    Route::get('/All-Latest-Article', [NavLinkController::class, 'Latest']);
    /*
    |Client Site POST FUNCTIONALITY
    */
    Route::post('/Attributes', [UserAdController::class, 'AddData']);
    Route::post('/Contact-Us', [ContactController::class, 'Contact_us']);
    Route::post('/Memberships', [MembershipController::class, 'AddMemberships']);

    /*
    |My Profile DOCUMENTS Section FUNCTIONALITY
    */
    Route::get('/Docs', [DocumentController::class, 'show']);
    Route::post('/docs', [DocumentController::class, 'index']);
    Route::get('/delete/{id}', [DocumentController::class, 'delete']);
    /*
    |My Profile MEDIA Section FUNCTIONALITY
    */
    Route::get('/Media', [MediaController::class, 'Media']);
    Route::post('/Media', [MediaController::class, 'Post']);
    /*
    |My Profile Company-Profile Section FUNCTIONALITY
    */
    Route::get('/Company-Profile', [AddCompanyDataController::class, 'CompanyProfile']);
    Route::get('/Add_Company_Data', [AddCompanyDataController::class, 'Add_Company_Data']);
    Route::post('/Add_Company_Detail', [AddCompanyDataController::class, 'Add_Company']);
    Route::get('/Edit-Company-Data/{id}', [AddCompanyDataController::class, 'edit']);
    Route::post('/Update-Data', [AddCompanyDataController::class, 'update']);
    /*
    |My Profile Request Section FUNCTIONALITY
    */
    Route::get('/Add-Request', [RequestController::class, 'Addbtn']);
    Route::get('/Request', [RequestController::class, 'Request']);
    Route::post('/Add_Requests', [RequestController::class, 'AddRequest']);
    Route::get('/Request-Edit/{id}', [RequestController::class, 'edit']);
    Route::post('/Req-Update', [RequestController::class, 'update']);
    Route::get('/destroy/{id}', [RequestController::class, 'delete']);
    Route::get('/Request-Details/{id}', [NavLinkController::class, 'RequestDetail']);
    /*
    |My Profile TENDERS Section FUNCTIONALITY
    */
    Route::get('/Tenders-List', [SellerTenderController::class, 'TendersList']);
    Route::get('/Tenders-Details-Comments/{id}', [SellerTenderController::class, 'TenderCommentsAndDetail']);
    Route::get('/Buyer-Profile/{id}', [SellerTenderController::class, 'TenderCommentsAndDetail']);
    Route::get('/Add-Tenders', [SellerTenderController::class, 'AddTenders']);
    Route::post('/Seller/Tender', [SellerTenderController::class, 'Add']);
    Route::get('/Tender-Edit/{id}', [SellerTenderController::class, 'edit']);
    Route::post('/Tender-Update', [SellerTenderController::class, 'update']);
    Route::get('/Tender/{id}', [SellerTenderController::class, 'delete']);
    //TENDER HOME PAGE ROUTE
    Route::get('/Tenders-Detail/{id}', [SellerTenderController::class, 'TendersDetail']);
    /*
    |My Profile OFFERS Section FUNCTIONALITY
    */
    Route::get('/Offers-Form', [OfferController::class, 'OfferForm']);
    Route::get('/Offers', [OfferController::class, 'Store']);
    Route::get('/Offers-Edit/{id}', [OfferController::class, 'edit']);
    Route::post('//Update-Offers', [OfferController::class, 'update']);
    Route::get('/Offers_delete/{id}', [OfferController::class, 'delete']);
    Route::get('/Ad-Offers/{id}', [OfferController::class, 'AdOffers']);
    /*
    |COMMENTS FOR TENDERS Section FUNCTIONALITY
    */
    Route::post('/commentForTender/{id}', [CommentsForTendersController::class, 'AddCommentAndPrice']);
    /*
    |Industry Profile Section FUNCTIONALITY
    */
    Route::get('/Industry-Profile', [IndustryProfileController::class, 'industry']);
    Route::get('/Add_Industry_Data', [IndustryProfileController::class, 'Add_Industry_Data']);
    Route::post('/Add_Industry_Detail', [IndustryProfileController::class, 'Add_Industry']);
    Route::get('/Edit-Industry-Data/{id}', [IndustryProfileController::class, 'edit']);
    Route::post('/Update-industry-Data', [IndustryProfileController::class, 'update']);
    /*
    |Industry Services Section FUNCTIONALITY
    */
    Route::get('/industry-Services-List', [NavLinkController::class, 'industryServicesList'])->name('industry-Services-List/');
    Route::get('/Services-Form', [IndustryServicesController::class, 'Add_industry_Services']);
    Route::post('/Add-Industry-Services', [IndustryServicesController::class, 'Add_industry_Services_Data']);
    Route::get('/Industry_Services-Edit/{id}', [IndustryServicesController::class, 'edit']);
    Route::post('/Update-Industry_Services', [IndustryServicesController::class, 'update']);
    Route::get('/Industry_Services_delete/{id}', [IndustryServicesController::class, 'delete']);
    /*
    |My Industry MEDIA Section FUNCTIONALITY
    */
    Route::get('/Industry-Portfolio', [IndustryPortfolioController::class, 'Media']);
    Route::post('/Industry-Portfolio', [IndustryPortfolioController::class, 'Post']);
    /*
    |View Profile
    */
    Route::get('/Ad-view/{id}', [NavLinkController::class, 'Ad_view']);
    Route::get('/User-Profile/{id}', [NavLinkController::class, 'profile'])->name('Profile/');
    Route::get('/Profile/{id}', [NavLinkController::class, 'NavProfile']);
    /*
    |View Offers
    */
    Route::get('/User-Offers/{id}', [NavLinkController::class, 'NavOffers'])->name('Offers/');
    Route::get('/Ad-Offers-Detail/{id}', [NavLinkController::class, 'NavOffersDetail']);
    /*
    |View Request,Portfolio,Tenders
    */
    Route::get('/User-Request/{id}', [NavLinkController::class, 'NavRequest'])->name('Request/');
    Route::get('/Ad-Request-Detail/{id}', [NavLinkController::class, 'NavRequestDetail']);
    /*
    |View Documents
    */
    Route::get('/User-Documents/{id}', [NavLinkController::class, 'NavDocuments'])->name('Documents/');
    /*
    |View Portfolio
    */
    Route::get('/User-Portfolio/{id}', [NavLinkController::class, 'NavPortfolio'])->name('Portfolio/');
    /*
    |View Tenders
    */
    Route::get('/User-Tenders/{id}', [NavLinkController::class, 'NavTenders'])->name('Tenders/');
    Route::get('/User-Comments/{id}', [NavLinkController::class, 'NavTendersCommentsAndDetail']);
    /*
    |Waste Regiulation Knowledge Center
    */
    Route::get('/Waste-RKC', [NavLinkController::class, 'wasteRKCPage']);

    //Commenters Profiles
    Route::get('/Buyer-Profile/{id}', [NavLinkController::class, 'CommenterProfile'])->name('buyerProfile/');

    // SERVICES AD VIEW ROUTES
    /*
    |View Profile
    */
    Route::get('/Industry-User-Profile/{id}', [NavLinkController::class, 'industryProfileView']);
    // Route::get('/Industry-Profile-Data/{id}', [NavLinkController::class, 'NavIndustryProfile']);
    /*
    |View Offers
    */
    Route::get('/Industry-Services/{id}', [NavLinkController::class, 'industry_services']);
    Route::get('/Industry-Services-Details/{id}', [NavLinkController::class, 'industry_services_detail']);
    /*
    |View Portfolio
    */
    Route::get('/User-Portfolio/{id}', [NavLinkController::class, 'NavPortfolio'])->name('Portfolio/');

    Route::get('/Services-Info/{id}', [NavLinkController::class, 'NavService'])->name('Services/');
});
//User
Route::get('/', [NavLinkController::class, 'HomePage'])->name('/');
Route::get('/About-Us', [NavLinkController::class, 'AboutPage']);
Route::get('/Why-Use-GRM', [NavLinkController::class, 'GRMPage']);
Route::get('/Affliations&Memberships', [NavLinkController::class, 'Affliations_Membership']);
Route::get('/Recycling-KC', [NavLinkController::class, 'RecyclingKCPage']);
Route::get('/Contact-Us', [NavLinkController::class, 'ContactUsPage']);
Route::get('/Blog', [NavLinkController::class, 'Category']);
Route::get('/Blog-Selected', [NavLinkController::class, 'CategorySelected']);
Route::get('/Industry-News', [NavLinkController::class, 'IndustryNews']);
Route::get('/Live-Pricing', [NavLinkController::class, 'LivePricing']);

Route::get('/datatable', [NavLinkController::class, 'datatable']);
//Admin Panel
Route::get('/admin', [AdminController::class, 'AdminLoginView']);
Route::post('/AdminPanel', [AdminController::class, 'login']);
// Route::get('/admin/register',[AdminController::class, 'register']);
// Route::post('/admin/register',[AdminController::class, 'Adminregister']);
Route::get('/admin/logout', function () {
    session()->forget('BLOG_USER_ID');
    return redirect('/admin');
});
Route::group(['middleware' => ['Custom_Auth']], function () {
    Route::get('/AdminIndex', [AdminController::class, 'index']);
    /*
        |CATEGORY SECTION ROUTES
        */
    Route::get('/Admin/Category-List', [CategoryController::class, 'index']);
    Route::get('/Admin/Add_Category', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/Admin/Add_Category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/Admin/Category_Edit/{id}', [CategoryController::class, 'edit']);
    Route::post('/Admin/Category_Update', [CategoryController::class, 'update']);
    Route::get('/Admin/Category/{id}', [CategoryController::class, 'destroy']);
    /*
        |REQUEST CATEGORY SECTION ROUTES
        */
    Route::get('/Admin/Request_Category-List', [RequestCategoryController::class, 'index']);
    Route::get('/Admin/Request_Add_Category', [RequestCategoryController::class, 'create'])->name('category.creates');
    Route::post('/Admin/Request_Add_Category', [RequestCategoryController::class, 'store'])->name('category.stores');
    Route::get('/Admin/Request_Category_Edit/{id}', [RequestCategoryController::class, 'edit']);
    Route::post('/Admin/Request_Category_Update', [RequestCategoryController::class, 'update']);
    Route::get('/Admin/Request_Category/{id}', [RequestCategoryController::class, 'destroy']);
    /*
        |SERVICE PROVIDERS SECTION ROUTES
        */
    Route::get('/Admin/Service', [ServiceProviderController::class, 'index']);
    Route::get('/Admin/Service-Add', [ServiceProviderController::class, 'Addview'])->name('/Admin/Services-Add');
    Route::post('/Admin/Service', [ServiceProviderController::class, 'AddData']);
    Route::get('/Admin/Service-List', [ServiceProviderController::class, 'list'])->name('list');
    Route::get('/Admin/Service-Edit/{id}', [ServiceProviderController::class, 'edit']);
    Route::post('/Admin/Service-Update', [ServiceProviderController::class, 'update']);
    Route::get('/Admin/Service/{id}', [ServiceProviderController::class, 'delete']);
    /*
        |SIDEBAR USERS Ad SECTION ROUTES
        */
    Route::get('/Admin/Users-Ad', [AdController::class, 'index']);
    Route::get('/Admin/Users-Ad_Edit/{id}', [AdController::class, 'edit']);
    Route::post('/Admin/Users-Ad_Update', [AdController::class, 'update']);
    Route::post('/toggle-approve', [AdController::class, 'Approval']);
    Route::get('/Admin/Users-Ad/{id}', [AdController::class, 'delete']);
    /*
        |Message US SECTION ROUTES
        */
    Route::get('/Admin/User-Message', [UserContactController::class, 'index']);
    Route::get('/Admin/User_Message/{id}', [UserContactController::class, 'edit']);
    Route::post('/Message_Update', [UserContactController::class, 'update']);
    Route::get('/Admin/Message/{id}', [UserContactController::class, 'delete']);
    /*
        |MEMBERSHIPS_FORM SECTION ROUTES
        */
    Route::get('/Admin/Membership-Form', [MembershipFormController::class, 'index']);
    Route::get('/storage/app/public/post/{company_document}', [MembershipController::class, 'download']);
    Route::get('/Admin/Membership_Decline/{id}', [MembershipFormController::class, 'delete']);
    /*
        |HOME Tenders ROUTES
        */
    Route::get('/Admin/Tenders', [TenderController::class, 'list']);
    Route::get('/Admin/Add-Tender', [TenderController::class, 'view'])->name('/Admin/Tender-Add');
    Route::post('/Admin/Tender', [TenderController::class, 'Add']);
    Route::get('/Admin/Tender-Edit/{id}', [TenderController::class, 'edit']);
    Route::post('/Admin/Tender-Update', [TenderController::class, 'update']);
    Route::get('/Admin/Tender/{id}', [TenderController::class, 'delete']);
    Route::post('/toggle-approval', [TenderController::class, 'Approval']);
    /*
        |HOME CompanyProfile ROUTES
        */
    Route::get('/Admin/CompanyProfile', [CompanyProfileController::class, 'list']);
    Route::get('/Admin/Delete/{id}', [CompanyProfileController::class, 'delete']);
    /*
        |HOME Document ROUTES
        */
    Route::get('/Admin/Document', [DocsController::class, 'list']);
    Route::get('/Admin/DeleteDoc/{id}', [DocsController::class, 'delete']);
    /*
        |HOME Request ROUTES
        */
    Route::get('/Admin/Request', [Request_Controller::class, 'list']);
    Route::get('/Admin/DeleteReq/{id}', [Request_Controller::class, 'delete']);
    /*
        |HOME Media ROUTES
        */
    Route::get('/Admin/Media', [Media_Controller::class, 'list']);
    Route::get('/Admin/DeleteMedia/{id}', [Media_Controller::class, 'delete']);
    /*
        |SIDEBAR HOME SECTION ROUTES
        */
    Route::get('/Admin/header', [AdminSidebarController::class, 'header']);
    Route::get('/Admin/view_product', [AdminSidebarController::class, 'view_product']);
    Route::get('/Admin/tenders', [AdminSidebarController::class, 'tenders']);
    /*
        |HOME HEADER ROUTES
        */
    Route::get('/Admin/header-Add', [PostHeaderrController::class, 'index'])->name('/Admin/header-Add');
    Route::post('/Admin/header', [PostHeaderrController::class, 'AddData']);
    Route::get('/Admin/header-List', [PostHeaderrController::class, 'list'])->name('list');
    Route::get('/Admin/header-Edit/{id}', [PostHeaderrController::class, 'edit']);
    Route::post('/Admin/header-Update', [PostHeaderrController::class, 'update']);
    Route::get('/Admin/header/{id}', [PostHeaderrController::class, 'delete']);

    /*
        |Home Services Routes
        */
    Route::get('/Admin/Services', [ServicesController::class, 'index']);
    Route::get('/Admin/Add', [ServicesController::class, 'Addview']);
    Route::post('/Admin/add', [ServicesController::class, 'AddServices']);
    Route::get('/Admin/Services-Edit/{id}', [ServicesController::class, 'edit']);
    Route::post('/Admin/Services-Update', [ServicesController::class, 'update']);
    Route::get('/Admin/Services/{id}', [ServicesController::class, 'delete']);
    /*
        |Home WasteRKC Routes
        */
    Route::get('/Admin/WasteRKC', [WasteController::class, 'index']);
    Route::get('/Admin/WasteRKC-Add', [WasteController::class, 'Addview'])->name('/Admin/waste-Add');
    Route::post('/Admin/WasteRKC-add', [WasteController::class, 'Addwaste']);
    Route::get('/Admin/WasteRKC-Edit/{id}', [WasteController::class, 'edit']);
    Route::post('/Admin/WasteRKC-Update', [WasteController::class, 'update']);
    Route::get('/Admin/WasteRKC/{id}', [WasteController::class, 'delete']);

    /*
        |Home LATEST ARTICLE Routes
        */
    Route::get('/Admin/Latest-Article', [LatestArticleController::class, 'index']);
    Route::get('/Admin/Latest-Article-Add', [LatestArticleController::class, 'Addview'])->name('/Admin/latest-Add');
    Route::post('/Admin/Latest-Article-add', [LatestArticleController::class, 'AddArticle']);
    Route::get('/Admin/Latest-Article-Edit/{id}', [LatestArticleController::class, 'LatestEdit']);
    Route::post('/Admin/Latest-Article-Update', [LatestArticleController::class, 'update']);
    Route::get('/Admin/Article/{id}', [LatestArticleController::class, 'delete']);

    /*
        |Home WasteRegulations_Entries Routes
        */
    Route::get('/Admin/Waste-Regulations', [WasteRegulationsController::class, 'index']);
    Route::get('/Admin/Waste-Add', [WasteRegulationsController::class, 'Add_View'])->name('/Admin/Waste-Add');
    Route::post('/Admin/Waste-add', [WasteRegulationsController::class, 'Add']);
    Route::get('/Admin/Waste-Edit/{id}', [WasteRegulationsController::class, 'edit']);
    Route::post('/Admin/Waste-Update', [WasteRegulationsController::class, 'update']);
    Route::get('/Admin/Waste/{id}', [WasteRegulationsController::class, 'delete']);

    /*
        |Home WasteRegulations_Countries_Entries Routes
        */
    Route::get('/Waste-RKC-Countries', [WasteRKCController::class, 'index']);
    Route::get('/Admin/Add-Country', [WasteRKCController::class, 'Add_View'])->name('/Admin/Add-Country');
    Route::post('/Admin/Country-add', [WasteRKCController::class, 'Add']);
    Route::get('/Admin/Country/{id}', [WasteRKCController::class, 'delete']);
});
/*
    WEBSITE FLOW CONTROLLING ROUTES
*/
Route::group(['middlware' => ['Custom_Auth']], function () {
    //About US Banner
    Route::get('/Admin/AboutUsBanner', [AboutUsController::class, 'index']);
    Route::get('/Admin/About_Us/Add', [AboutUsController::class, 'Add'])->name('/Admin/AboutUsBanner');
    Route::post('/Admin/AboutUsBanner', [AboutUsController::class, 'AddData']);
    Route::get('/Admin/Edit/{id}', [AboutUsController::class, 'edit']);
    Route::post('/Admin/Update', [AboutUsController::class, 'update']);
    Route::get('/Admin/AboutUsBanner/{id}', [AboutUsController::class, 'delete']);
    //About Us Section
    Route::get('/Admin/About-Us-Section', [AboutUsSectionController::class, 'index']);
    Route::get('/Admin/About-Us/Add', [AboutUsSectionController::class, 'Add'])->name('/Admin/About-Us-Section');
    Route::post('/Admin/About-Us-Section', [AboutUsSectionController::class, 'AddData']);
    Route::get('/Admin/Section-Edit/{id}', [AboutUsSectionController::class, 'edit']);
    Route::post('/Admin/Section-Update', [AboutUsSectionController::class, 'update']);
    Route::get('/Admin/About-Us-Section/{id}', [AboutUsSectionController::class, 'delete']);
    //WHY USE GRM Section
    Route::get('/Admin/Why-Use-GRM', [WhyUseGRMController::class, 'index']);
    Route::get('/Admin/Why-GRM/Add', [WhyUseGRMController::class, 'Add'])->name('/Admin/Why-Use-GRM');
    Route::post('/Admin/Why-Use-GRM', [WhyUseGRMController::class, 'AddData']);
    Route::get('/Admin/GRM-Edit/{id}', [WhyUseGRMController::class, 'edit']);
    Route::post('/Admin/GRM-Update', [WhyUseGRMController::class, 'update']);
    Route::get('/Admin/Why-Use-GRM/{id}', [WhyUseGRMController::class, 'delete']);
    //WHY USE GRM Section
    Route::get('/Admin/RecyclingKC', [RecyclingKCController::class, 'index']);
    Route::get('/Admin/Why-GRM/Add', [RecyclingKCController::class, 'Add'])->name('/Admin/RecyclingKC');
    Route::post('/Admin/RecyclingKC', [RecyclingKCController::class, 'AddData']);
    Route::get('/Admin/RecyclingKC-Edit/{id}', [RecyclingKCController::class, 'edit']);
    Route::post('/Admin/RecyclingKC-Update', [RecyclingKCController::class, 'update']);
    Route::get('/Admin/RecyclingKC/{id}', [RecyclingKCController::class, 'delete']);
});

Auth::routes();
Route::get('/Memberships', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('notify', [App\Http\Controllers\HomeController::class, 'notify']);

Auth::routes();
