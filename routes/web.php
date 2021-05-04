<?php

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


Route::middleware('web')->group(
    function () {
        Route::get('/auth/{provider}', 'Auth\LoginController@redirectToProvider')->name('auth');
        Route::get('/auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('authCallback');

        //////////////////////////////////////////////////////////////////////
        ///////////////////////////// Universal //////////////////////////////
        //////////////////////////////////////////////////////////////////////

        // Hjem - /
        Route::get('/', function () { return redirect()->route('home'); });
        // Hjem - /hjem/
        Route::get('/hjem', 'Frontend\PagesController@home')
            ->name('home');
    
        // Om oss - /om-oss/
        Route::get('/om-oss', 'Frontend\PagesController@aboutUs')
            ->name('about_us');

        // Partner - /partner/
        Route::get('/partner', 'Frontend\PagesController@partner')
            ->name('partner');

        // Kontakt - /kontakt/
        Route::get('/kontakt', 'Frontend\PagesController@contact')
            ->name('contact');

        //////////////////////////////////////////////////////////////////////
        ////////////////////////////// Shopping //////////////////////////////
        //////////////////////////////////////////////////////////////////////

        // Shopping - Landing page - /prissok/
        Route::get('/prissok', 'Frontend\PagesController@shoppingLandingPage')
            ->name("shopping.landing_page");

        
        //////////////////////////////////////////////////////////////////////
        ///////////////////////////// Tjenester //////////////////////////////
        //////////////////////////////////////////////////////////////////////

        // Tjenester – Landing page - /sammenlign/
        Route::get('/sammenlign', 'Frontend\PagesController@compareLandingPage')
            ->name('compare.landing_page');

        // Tjenester – Mobiltelefoni - /sammenlign/mobiltelefoni/
        Route::get('/sammenlign/mobiltelefoni', 'Frontend\PagesController@compareMobilePhoneLandingPage')
            ->name('compare.mobile_phone.landing_page');
        
        // Tjenester - Strøm - /sammenlign/strom/
        Route::get('/sammenlign/strom/', 'Frontend\PagesController@comparePowerLandingPage')
            ->name('compare.power.landing_page');

        // Tjenester - Bredbånd - /sammenlign/bredband/
        Route::get('/sammenlign/bredband/', 'Frontend\PagesController@compareBroadbandLandingPage')
            ->name('compare.broadband.landing_page');
        
        // Tjenester - Kredittkort - /sammenlign/kredittkort/
        Route::get('/sammenlign/kredittkort/', 'Frontend\PagesController@compareCreditCardLandingPage')
            ->name('compare.credit_card.landing_page');

        // Tjenester - Forbrukslån - /sammenlign/forbrukslan/
        // **************************************

        //////////////////////////////////////////////////////////////////////
        ////////////////////////////// Cashback //////////////////////////////
        //////////////////////////////////////////////////////////////////////

        // Cashback - Login page- /logg-inn/
        Route::get('/logg-inn', 'Frontend\PagesController@login')
            ->name('login');

        // Cashback - Become member page - /bli-medlem/
        Route::get('/bli-medlem', 'Frontend\PagesController@register')
            ->name('register');

        // Cashback - Log out - /logg-ut/
        Route::get('/logg-ut', 'Frontend\PagesController@logout')
            ->name('logout');

        // Min profil /cashback/profil/
        Route::get('/cashback/profil/', 'Frontend\PagesController@cashbackMyProfile')
            ->name('cashback.my_profile')->middleware('auth');

        // Utbetaling - /cashback/profil/utbetaling/
        Route::get('/cashback/profil/utbetaling/', 'Frontend\PagesController@cashbackMyProfilePayout')
            ->name('cashback.my_profile.payout')->middleware('auth');

        //////////////////////////////////////////////////////////////////////
        ////////////////////////////// Rabatter //////////////////////////////
        //////////////////////////////////////////////////////////////////////

        // Rabatter - Landing page - /rabatter-tilbud/
        Route::get('/rabatter-tilbud', 'Frontend\PagesController@discountLandingPage')
            ->name('discount.landing_page');
        //////////////////////////////////////////////////////////////////////
        /////////////////////////// Produktguider  ///////////////////////////
        //////////////////////////////////////////////////////////////////////

        // Produktguider  - Landing page - /best-i-test/
        Route::get('/best-i-test', 'Frontend\PagesController@productGuideLandingPage')
        ->name("productguide");

        // *******************************************************************

        // 13. Instillinger - /cashback/profil/innstillinger/
        // 14. Vilkår og Personvern - /vilkar-personvern/
        // 15. Rabatter - Single Company /company-name/
        // 16. Single product page /product-name/
        Route::get('/single-product', 'Frontend\PagesController@singleproduct')
            ->name('singleproduct');
        // 17. Adminpanel - Kategorier /kategorier/
        Route::get('/admin/kategorier/', 'Frontend\PagesController@admincategory')
            ->name('admin_category');
        // 18. Adminpanel - Kampanjer /kampanjer/
        Route::get('/admin/kampanjer/', 'Frontend\PagesController@admincampaigns')
            ->name('admin_campaigns');
        // 19. Adminpanel - Brukere /brukere/
        // 20. Adminpanel - Sider /sider/
        // 21. Adminpanel - Inlegg /inlegg/
        // 22. Adminpanel - Produkter /produkter/
        // 23. Adminpanel - Utbetalinger /utbetalinger/


        ////////////  pending route name ////////////
        Route::get('/category', 'Frontend\PagesController@category')
            ->name('category');

        Route::get('/rabatter', 'Frontend\PagesController@rabatter')
            ->name('rabatter');
        Route::get('/rabatter-categories', 'Frontend\PagesController@rabattercategories')
            ->name('rabattercategories');
        
        Route::get('/single-product-guide', 'Frontend\PagesController@singleproductguide')
            ->name('singleproductguide');
        Route::get('/companyelectricity', 'Frontend\PagesController@companyelectricity')
            ->name('company_electricity');

        Route::get('/single', 'Frontend\PagesController@single')
        ->name('single');

        Route::get('/admincustomer', 'Frontend\PagesController@admincustomer')
        ->name('admin_customer');
        Route::get('/adminslide', 'Frontend\PagesController@adminslide')
        ->name('admin_slide');
    }
);
