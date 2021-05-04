<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Auth;

/**
 * This is page controller to show pages for each get request.
 *
 * @category Pages
 *
 * @package App\Http\Controllers\Fronted\PagesController
 *
 * @author Aleksei Bronnikov <alexayeugine@gmail.com>
 *
 * @license Apache 2.0
 *
 * @link https://proguiden.no/
 */
class PagesController extends Controller
{

    //////////////////////////////////////////////////////////////////////
    ///////////////////////////// Universal //////////////////////////////
    //////////////////////////////////////////////////////////////////////
    
    /**
     * Show home page
     *
     * @return view
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Show about us page
     * 
     * @return view 
     */
    public function aboutUs()
    {
        return view('pages.about_us');
    }
    
    /**
     * Show partner page
     * 
     * @return view 
     */
    public function partner()
    {
        return view('pages.partner');
    }
                   
    /**
     * Show contact page
     * 
     * @return view 
     */
    public function contact()
    {
        return view('pages.contact');
    }

    //////////////////////////////////////////////////////////////////////
    ////////////////////////////// Shopping //////////////////////////////
    //////////////////////////////////////////////////////////////////////

    /**
     * Show shopping landing page
     *
     * @return view
     */
    public function shoppingLandingPage()
    {
        return view('pages.shopping.landing_page');
    }

    //////////////////////////////////////////////////////////////////////
    ///////////////////////////// Tjenester //////////////////////////////
    //////////////////////////////////////////////////////////////////////

    /**
     * Show tjenester landing page
     * 
     * @return view 
     */
    public function compareLandingPage()
    {
        return view('pages.compare.landing_page');
    }

    /**
     * Show tjenester mobile phone landing page
     * 
     * @return view 
     */
    public function compareMobilePhoneLandingPage()
    {
        return view('pages.compare.mobile.landing_page');
    }

    /**
     * Show tjenester broadband landing page
     * 
     * @return view 
     */
    public function compareBroadbandLandingPage()
    {
        return view('pages.compare.broadband.landing_page');
    }

    /**
     * Show tjenester credit card landing page
     * 
     * @return view 
     */
    public function compareCreditCardLandingPage()
    {
        return view('pages.compare.creditcard.landing_page');
    }

    /**
     * Show tjenester power landing page
     * 
     * @return view 
     */
    public function comparePowerLandingPage()
    {
        return view('pages.compare.power.landing_page');
    }

    //////////////////////////////////////////////////////////////////////
    ////////////////////////////// Rabatter //////////////////////////////
    //////////////////////////////////////////////////////////////////////   

    /**
     * Show discount landing page
     *
     * @return view
     */
    public function discountLandingPage()
    {
        return view('pages.discount.landing_page');
    }

    //////////////////////////////////////////////////////////////////////
    /////////////////////////// Produktguider  ///////////////////////////
    //////////////////////////////////////////////////////////////////////

    /**
     * Show productguide page
     *
     * @return view
     */
    public function productGuideLandingPage()
    {
        return view('pages.guide.landing_page');
    }

    //////////////////////////////////////////////////////////////////////
    ////////////////////////////// Cashback //////////////////////////////
    //////////////////////////////////////////////////////////////////////

    /**
     * Show cashback login page
     *
     * @return view
     */
    public function login() 
    {
        return view('pages.cashback.login');
    }
    
    /**
     * Show cashback register page
     *
     * @return view
     */
    public function register() 
    {
        return view('pages.cashback.register');
    }

    /**
     * Logout
     *
     * @return view
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    /**
     * Show cashback my profile page
     * 
     * @return mixed 
     */
    public function cashbackMyProfile()
    {
        return view('pages.cashback.my_profile');
    }

    
    /**
     * Show payout page
     * 
     * @return mixed 
     */
    public function cashbackMyProfilePayout()
    {
        return view('pages.cashback.payout');
    }
    
    //********************************************************************* */
    /**
     * Show category page
     * 
     * @return mixed 
     */
    public function category()
    {
        return view('pages.category');
    }

    
    /**
     * Show rabatter page
     * 
     * @return mixed 
     */
    public function rabatter()
    {
        return view('pages.rabatter');
    }
        
    /**
     * Show rabattercategories page
     * 
     * @return mixed 
     */
    public function rabattercategories()
    {
        return view('pages.rabatter-categories');
    }
            
    /**
     * Show singleproduct page
     * 
     * @return mixed 
     */
    public function singleproduct()
    {
        return view('pages.single-product');
    }
                
    /**
     * Show singleproductguide page
     * 
     * @return mixed 
     */
    public function singleproductguide()
    {
        return view('pages.single-product-guide');
    }


       
    /**
     * Show company_broadband page
     * 
     * @return mixed 
     */
    public function companyelectricity()
    {
        return view('pages.comparison-company-electricity');
    }





    /**
     * Show company_broadband page
     * 
     * @return mixed 
     */
    public function single()
    {
        return view('pages.comparison-single');
    }

    /**
     * Show company_broadband page
     * 
     * @return mixed 
     */
    public function admincampaigns()
    {
        return view('pages.admin.admin-portal-campaigns');
    }

    /**
     * Show company_broadband page
     * 
     * @return mixed 
     */
    public function admincategory()
    {
        return view('pages.admin.admin-portal-category');
    }

    /**
     * Show company_broadband page
     * 
     * @return mixed 
     */
    public function admincustomer()
    {
        return view('pages.admin.admin-portal-customers');
    }

    /**
     * Show company_broadband page
     * 
     * @return mixed 
     */
    public function adminslide()
    {
        return view('pages.admin.admin-portal-sides');
    }
}
