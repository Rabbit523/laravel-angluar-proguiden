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
        return view('pages.compare.broadband.step1');
    }

    /**
     * Show tjenester broadband landing page
     * 
     * @return view 
     */
    public function compareBroadbandStep1Page()
    {
        return view('pages.compare.broadband.step1');
    }

    /**
     * Show tjenester broadband landing page
     * 
     * @return view 
     */
    public function compareBroadbandStep2Page()
    {
        return view('pages.compare.broadband.step2');
    }

    /**
     * Show tjenester broadband landing page
     * 
     * @return view 
     */
    public function compareBroadbandStep3Page()
    {
        return view('pages.compare.broadband.step3');
    }

    /**
     * Show tjenester broadband landing page
     * 
     * @return view 
     */
    public function compareBroadbandStep4Page()
    {
        return view('pages.compare.broadband.step4');
    }

    /**
     * Show tjenester broadband landing page
     * 
     * @return view 
     */
    public function compareBroadbandStep5Page()
    {
        return view('pages.compare.broadband.step5');
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
     * Show tjenester credit card landing page
     * 
     * @return view 
     */
    public function compareConsumerLandingPage()
    {
        return view('pages.compare.consumer.landing_page');
    }

    /**
     * Show tjenester consumer detail page
     * 
     * @return view 
     */
    public function compareConsumerDetailPage($consumer)
    {
        return view('pages.compare.consumer.detail');
    }

    /**
     * Show tjenester power landing page
     * 
     * @return view 
     */
    public function comparePowerLandingPage()
    {
        return view('pages.compare.power.step1');
    }

        /**
     * Show tjenester power landing page
     * 
     * @return view 
     */
    public function comparePowerStep1Page()
    {
        return view('pages.compare.power.step1');
    }

        /**
     * Show tjenester power landing page
     * 
     * @return view 
     */
    public function comparePowerStep2Page()
    {
        return view('pages.compare.power.step2');
    }

    /**
     * Show tjenester power landing page
     * 
     * @return view 
     */
    public function comparePowerStep3Page()
    {
        return view('pages.compare.power.step3');
    }

    /**
     * Show tjenester power landing page
     * 
     * @return view 
     */
    public function comparePowerStep4Page()
    {
        return view('pages.compare.power.step4');
    }

    /**
     * Show tjenester power landing page
     * 
     * @return view 
     */
    public function comparePowerStep5Page()
    {
        return view('pages.compare.power.step5');
    }

    /**
     * Show tjenester power landing page
     * 
     * @return view 
     */
    public function comparePowerStep6Page()
    {
        return view('pages.compare.power.step6');
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
        
    /**
     * Show settigns page
     * 
     * @return mixed 
     */
    public function cashbackMyProfileSettings()
    {
        return view('pages.cashback.settings');
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
    public function adminCampaigns()
    {
        return view('pages.admin.campaigns');
    }

    /**
     * Show company_broadband page
     * 
     * @return mixed 
     */
    public function adminCategory()
    {
        return view('pages.admin.category');
    }

    /**
     * Show company_broadband page
     * 
     * @return mixed 
     */
    public function adminSides()
    {
        return view('pages.admin.sides');
    }

    /**
     * Show company_broadband page
     * 
     * @return mixed 
     */
    public function adminSingleSides()
    {
        return view('pages.admin.single-side');
    }

    public function adminCustomers()
    {
        return view('pages.admin.customers');
    }

    public function adminSingleCustomers() {
        return view('pages.admin.single-customer');
    }
}
