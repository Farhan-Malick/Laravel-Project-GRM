<?php

namespace App\Http\Controllers\ClientSiteController\AllRoutesHandler;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Models\User;
use App\Models\Header;
use App\Models\Category;
use App\Models\ClientsAd;
use App\Models\Document;
use App\Models\SellerTender;
use App\Models\Service;
use App\Models\WasteRKC;
use App\Models\LatestArticle;
use App\Models\AddCompanyDetail;
use App\Models\MembershipForm;
use App\Models\IndustryService;
use App\Models\ServicesProvider;
use App\Models\Add_Request;
use App\Models\MediaUser;
use App\Models\WasteRegulation;
use App\Models\WasteRKCCountry;
use App\Models\AboutUsBanner;
use App\Models\AboutUsSection;
use App\Models\WhyUseGRM;
use App\Models\RecyclingKC;
use App\Models\RequestCategory;
use App\Models\CommentsForTenders;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\IndustryProfile;
use Session;

class NavLinkController extends Controller
{
    public function industryServicesList()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $user_id = auth()->user()->id;
        $industryService = User::find($user_id)->user_Services;
        return view('user/Industry/ServicesList', compact('industryService', 'membership'));
    }
    public function HomePage()
    {
        $header = Header::all();
        $service = Service::all();
        $tender = SellerTender::where('approve', '1')->get();
        $waste = WasteRKC::all();
        $approval = ClientsAd::where('approve', '1')->take(6)->get();
        $latest_article = LatestArticle::all();
        // if (Auth::check())
        // {
        //     $user_id = auth()->user()->id;
        //     $user = User::find($user_id)->nUser;
        //     return view('user.AllPages.home', compact('user','header','tender','service','waste','latest_article','approval'));
        //     }
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.home', compact('header', 'tender', 'service', 'waste', 'latest_article', 'approval'));
        }
        return view('user.AllPages.home', compact('header', 'tender', 'service', 'waste', 'latest_article', 'approval', 'membership'));
    }
    public function Latest()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $latest_article = LatestArticle::all();
        return view('user.AllPages.All_Latest_Articles', compact('latest_article', 'membership'));
    }
    public function RecoveredPapers()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $category = Category::all();
        return view('/user/userADDS/Attributes', compact('category', 'membership'));
    }
    public function Store()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $user_id = auth()->user()->id;
        $user = User::find($user_id)->user;
        return view('/user/userADDS/ClientStore', compact('user', 'membership'));
    }
    public function GeneralStore(Request $request)
    {

        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }

        $categories = Category::with('childs')->where('category_id', null)->get();
        $userad = ClientsAd::get();
        if (Request::get('sub_category')) {
            $checked = $_GET['sub_category'];
            $subcategory_filter = Category::whereIn('category', $checked)->get();
            $subcateid = [];
            foreach ($subcategory_filter as $scid_list) {
                array_push($subcateid, $scid_list->id);
            }
            $userad = ClientsAd::whereIn('sub_category', $subcateid)->get();
            return view('/user/userADDS/GeneralStore')
                ->with('userad', $userad)
                ->with('membership', $membership)
                ->with('categories', $categories);
        } else {
            return view('/user/userADDS/GeneralStore')
                ->with('userad', $userad)
                ->with('membership', $membership)
                ->with('categories', $categories);
        }
    }
    public function AdDetails(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $user = ClientsAd::where(['id' => $id])->first();
        return view('/user/userADDS/GenerealStoreAdsDetail', compact('user', 'membership'));
    }
    public function ServicesStore(Request $request)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $ServiceProviders = ServicesProvider::get();
        $userServices = IndustryService::get();
        if (Request::get('service')) {
            $checked = $_GET['service'];
            $subcategory_filter = ServicesProvider::whereIn('service_providers', $checked)->get();
            $subcateid = [];
            foreach ($subcategory_filter as $scid_list) {
                array_push($subcateid, $scid_list->id);
            }
            $userServices = IndustryService::whereIn('service_id', $subcateid)->get();
            return view('/user/userADDS/ServicesStore')
                ->with('membership', $membership)
                ->with('userServices', $userServices)
                ->with('ServiceProviders', $ServiceProviders);
        } else {
            return view('/user/userADDS/ServicesStore')
                ->with('membership', $membership)
                ->with('userServices', $userServices)
                ->with('ServiceProviders', $ServiceProviders);
        }
    }
    public function ServicesDetails(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $user = IndustryService::where(['id' => $id])->first();
        return view('/user/userADDS/ServicesStoreAdsDetail', compact('user', 'membership'));
    }
    public function GeneralStoreForTenders(Request $request)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $tender = SellerTender::where('approve', '1')->get();
        return view('/user/userADDS/TendersStore', compact('membership', 'tender'));
    }
    public function RequestStore(Request $request)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $ReqCategory = RequestCategory::with('children')->where('cat_id', null)->get();
        $AddRequest = Add_Request::get();
        if (Request::get('sub_category')) {
            $checked = $_GET['sub_category'];
            $subcategory_filter = RequestCategory::whereIn('category', $checked)->get();
            $subcateid = [];
            foreach ($subcategory_filter as $scid_list) {
                array_push($subcateid, $scid_list->id);
            }
            $AddRequest = Add_Request::whereIn('sub_type', $subcateid)->get();
            return view('/user/userADDS/RequestStore')
                ->with('AddRequest', $AddRequest)
                ->with('membership', $membership)
                ->with('ReqCategory', $ReqCategory);
        } else {
            return view('/user/userADDS/RequestStore')
                ->with('AddRequest', $AddRequest)
                ->with('membership', $membership)
                ->with('ReqCategory', $ReqCategory);
        }
    }
    public function RequestDetail(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $user = Add_Request::where(['id' => $id])->first();
        return view('/user/userADDS/RequestDetails', compact('user', 'membership'));
    }
    public function wasteRKCPage()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.WasteRKC', compact('membership'));
        }
        $waste = WasteRKCCountry::get();
        $SelectedCountry = WasteRegulation::first();
        if (Request::get('country') && Request::get('country2')) {
            $checked = $_GET['country'];
            $checked2 = $_GET['country2'];
            $country = WasteRKCCountry::whereIn('country', $checked)->get();
            $country2 = WasteRKCCountry::whereIn('country', $checked2)->get();
            $countryid = [];
            foreach ($country as $item) {
                array_push($countryid, $item->id);
            }
            $countryid2 = [];
            foreach ($country2 as $item) {
                array_push($countryid2, $item->id);
            }
            $SelectedCountry = WasteRegulation::whereIn('country_id', $countryid)->orWhereIn('country_id', $countryid2)
                ->first();
            return view('user.AllPages.WasteRKC', compact('membership', 'waste', 'SelectedCountry'));
        } else {
            return view('user.AllPages.WasteRKC', compact('membership', 'waste', 'SelectedCountry'));
        }
    }
    public function User_product()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        return view('user.UserProfile.Offers', compact('membership'));
    }
    public function AboutPage()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
            $AboutUsBanner = AboutUsBanner::first();
            $AboutUsSection = AboutUsSection::first();
            return view('user.AllPages.About', compact('membership', 'AboutUsBanner', 'AboutUsSection'));
        } else {
            $AboutUsBanner = AboutUsBanner::first();
            $AboutUsSection = AboutUsSection::first();
            return view('user.AllPages.About', compact('AboutUsBanner', 'AboutUsSection'));
        }
    }
    public function GRMPage()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
            $WhyUseGRM = WhyUseGRM::first();
            return view('user.AllPages.WhyUseGRM', compact('membership', 'WhyUseGRM'));
        } else {
            $WhyUseGRM = WhyUseGRM::first();
            return view('user.AllPages.WhyUseGRM', compact('WhyUseGRM'));
        }
    }
    public function Affliations_Membership()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
            return view('user.AllPages.AffliationsMemberships', compact('membership'));
        } else {
            return view('user.AllPages.AffliationsMemberships');
        }
    }
    public function RecyclingKCPage()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
            $RecyclingKC = RecyclingKC::first();
            return view('user.AllPages.RecyclingKC', compact('membership', 'RecyclingKC'));
        } else {
            $RecyclingKC = RecyclingKC::first();
            return view('user.AllPages.RecyclingKC', compact('RecyclingKC'));
        }
    }
    public function ContactUsPage()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
            return view('user.AllPages.Contact', compact('membership'));
        } else {
            return view('user.AllPages.Contact');
        }
    }
    public function Memberships()
    {

        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        return view('user.AllPages.Memberships', compact('membership'));
    }
    public function Membership_RegForm()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Membership_RegForm', compact('membership'));
        }
        return view('user.AllPages.Membership_RegForm', compact('membership'));
    }
    // =============================================================================================
    public function industryProfileView(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $IndustryService = MembershipForm::where(['user_id' => $id])
            ->first();
        $industryData = IndustryProfile::where(['user_id' => $id])->first();
        return view('user.ViewIndustryFromAds.IndustryProfile', compact('industryData', 'membership', 'IndustryService'));
    }
    public function Industry_Profile(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $IndustryService = MembershipForm::where(['user_id' => $id])
            ->first();
        $industryData = IndustryProfile::where(['user_id' => $id])->first();
        return view('user.ViewIndustryFromAds.IndustryProfile', compact('industryData', 'membership', 'IndustryService'));
    }
    public function industry_services(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $IndustryService = MembershipForm::where(['user_id' => $id])
            ->first();
        $approval = IndustryService::where(['user_id' => $id])->get();
        $name = IndustryService::where(['user_id' => $id])->first();
        return view('user.ViewIndustryFromAds.ServicesList', compact('approval', 'membership', 'IndustryService', 'name'));
    }
    public function industry_services_detail(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $user = IndustryService::where(['id' => $id])->first();
        return view('/user/ViewIndustryFromAds/ServicesDetail', compact('user', 'membership'));
    }
    // public function NavServicePortfolio(Request $request,$id)
    // {
    //     if (Auth::check()) {
    //         $user_id = auth()->user()->id;
    //     $membership = User::find($user_id)->Membership_For_User;
    //     }else{
    //         return view('user.AllPages.Memberships', compact('membership'));
    //     }
    //     $approval=MediaUser::where(['user_id'=>$id])->first();
    //     $allData = MediaUser::where(['user_id'=>$id])->get();
    //     return view('user.ViewProfileFromAds.PortfolioView',compact('allData','approval','membership'));
    // }
    // =============================================================================================
    public function Ad_view(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.ViewProduct', compact('membership'));
        }
        $approval = ClientsAd::where(['id' => $id])->first();
        return view('user.AllPages.ViewProduct', compact('membership', 'approval'));
    }
    public function profile(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $approval = AddCompanyDetail::where(['user_id' => $id])->first();
        return view('user.ViewProfileFromAds.ProfileView', compact('approval', 'membership'));
    }
    public function NavProfile(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $approval = AddCompanyDetail::where(['user_id' => $id])->first();
        return view('user.ViewProfileFromAds.ProfileView', compact('approval', 'membership'));
    }
    public function NavOffers(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $approval = ClientsAd::where(['user_id' => $id])->first();
        $allData = ClientsAd::where(['user_id' => $id])->get();
        return view('user.ViewProfileFromAds.OffersView', compact('approval', 'allData', 'membership'));
    }
    public function NavOffersDetail(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $user = ClientsAd::where(['id' => $id])->first();
        return view('/user/ViewProfileFromAds/ViewAdOffers', compact('user', 'membership'));
    }
    public function NavRequest(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $approval = Add_Request::where(['user_id' => $id])->first();
        $allData = Add_Request::where(['user_id' => $id])->get();
        return view('user.ViewProfileFromAds.RequestView', compact('allData', 'approval', 'membership'));
    }
    public function NavRequestDetail(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $user = Add_Request::where(['id' => $id])->first();
        return view('/user/ViewProfileFromAds/ViewAdRequest', compact('user', 'membership'));
    }
    public function NavDocuments(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $approval = Document::where(['user_id' => $id])->first();
        $allData = Document::where(['user_id' => $id])->get();
        return view('user.ViewProfileFromAds.DocumentsView', compact('allData', 'approval', 'membership'));
    }
    public function NavPortfolio(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $approval = MediaUser::where(['user_id' => $id])->first();
        $allData = MediaUser::where(['user_id' => $id])->get();
        return view('user.ViewProfileFromAds.PortfolioView', compact('allData', 'approval', 'membership'));
    }
    public function NavTenders(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $approvals = SellerTender::where(['user_id' => $id])->first();
        $allData = SellerTender::where(['user_id' => $id])->get();
        // dd($approval);
        return view('user.ViewProfileFromAds.TendersView', compact('approvals', 'allData', 'membership'));
    }
    public function NavTendersCommentsAndDetail(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $approval = SellerTender::where(['id' => $id])->first();
        $comments = CommentsForTenders::where(['tender_id' => $id])->get();
        return view('user.ViewProfileFromAds.TenderCommentsAndDetail', compact('approval', 'comments', 'membership'));
    }
    public function Category()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
            return view('user.AllPages.Category', compact('membership'));
        } else {
            return view('user.AllPages.Category');
        }
    }
    public function CategorySelected()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
            return view('user.AllPages.SelectedCategory', compact('membership'));
        } else {
            return view('user.AllPages.SelectedCategory');
        }
    }
    public function TendersListExpand()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
            return view('user.AllPages.Memberships', compact('membership'));
        } else {
            return view('user.AllPages.ExpandTenderList');
        }
    }
    public function IndustryNews()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
            return view('user.AllPages.IndustryNews', compact('membership'));
        } else {
            return view('user.AllPages.IndustryNews');
        }
    }
    public function LivePricing()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        return view('user.AllPages.LivePricing', compact('membership'));
    }
    public function Services()
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
            return view('user.AllPages.allservices', compact('membership'));
        } else {
            return view('user.AllPages.allservices');
        }
    }
    public function datatable()
    {
        return view('user.AllPages.datatable');
    }


    public function CommenterProfile(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $approval = AddCompanyDetail::where(['user_id' => $id])->first();
        return view('user.ViewProfileFromTenders.ProfileView', compact('approval', 'membership'));
    }
    public function CommenterNavProfile(Request $request, $id)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            $membership = User::find($user_id)->Membership_For_User;
        } else {
            return view('user.AllPages.Memberships', compact('membership'));
        }
        $approval = AddCompanyDetail::where(['user_id' => $id])->first();
        return view('user.ViewProfileFromTenders.ProfileView', compact('approval', 'membership'));
    }
}
