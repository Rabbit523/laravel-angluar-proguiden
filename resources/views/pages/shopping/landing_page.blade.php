@extends('layouts.public') @section('title', 'Shopping Landing Page') 
@section('styles')
    <link rel="stylesheet" href="assets/plugins/lightslider/lightslider.min.css">  
@endsection
@section('content')
  <main class="proguiden-shopping-landing-page">
    <section class="brand-shopping">
      <div class="container">
        <div class="row">
          <div class="title text-center">
            <h2>
                Online shopping, litt billigere!
                <span>Sammenlign priser fra 350 nettbutikker.</span>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
              <div class="carousel-wrapper">

                  <div class="navigation">
                      <a href="javascript:void(0)" class="arrow-nav prev"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
                      <a href="javascript:void(0)" class="arrow-nav next"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
                  </div>

                  <div class="carousel-box">
                      <div class="carousel-items">
                        <div class="item">
                          <div class="slider">
                            <figure>
                              <img src="assets/images/carrusel-1.jpg" class="img-responsive center-block" alt="">
                            </figure>
                            <div class="content-slider">
                              <div class="brand">
                                <img src="assets/images/apple.png" class="img-responsive" alt="">
                              </div>
                              <small>Cashback: <strong>899,-</strong></small>
                              <div class="title-slider">Kjøp Macbook med Cashback</div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="slider">
                            <figure>
                              <img src="assets/images/carrusel-2.jpg" class="img-responsive center-block" alt="">
                            </figure>
                            <div class="content-slider">
                              <div class="brand">
                                <img src="assets/images/apple.png" class="img-responsive" alt="">
                              </div>
                              <small>Cashback: <strong>1000,-</strong></small>
                              <div class="title-slider">30% rabatt på valgfri vare</div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="slider">
                            <figure>
                              <img src="assets/images/carrusel-1.jpg" class="img-responsive center-block" alt="">
                            </figure>
                            <div class="content-slider">
                              <div class="brand">
                                <img src="assets/images/apple.png" class="img-responsive" alt="">
                              </div>
                              <small>Cashback: <strong>899,-</strong></small>
                              <div class="title-slider">Kjøp Macbook med Cashback</div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="slider">
                            <figure>
                              <img src="assets/images/carrusel-2.jpg" class="img-responsive center-block" alt="">
                            </figure>
                            <div class="content-slider">
                              <div class="brand">
                                <img src="assets/images/apple.png" class="img-responsive" alt="">
                              </div>
                              <small>Cashback: <strong>899,-</strong></small>
                              <div class="title-slider">Kjøp Macbook med Cashback</div>
                            </div>
                          </div>
                        </div>

                      </div>
                  </div>

              </div>

          </div>
        </div>

        <div class="list-products">
          <div class="row">
            <div class="flex-box">
              <div class="col-xs-12 col-sm-6 col-md-n">
                  <div class="product">
                      <figure>
                          <a href="#"><img src="assets/images/related-1.png" class="img-responsive center-block" alt=""></a>
                      </figure>
                      <div class="info-product">
                          <h5>Samsung Galaxy S8</h5>
                          <span class="price">4 990,-</span>
                          <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                          <small>Cashback: <strong>kr 100,-</strong></small>
                      </div>
                  </div>
              </div>
  
              <div class="col-xs-12 col-sm-6 col-md-n">
                  <div class="product">
                      <figure>
                          <a href="#"><img src="assets/images/related-2.png" class="img-responsive center-block" alt=""></a>
                      </figure>
                      <div class="info-product">
                          <h5>Samsung Galaxy S8</h5>
                          <span class="price">4 990,-</span>
                          <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                          <small>Cashback: <strong>kr 100,-</strong></small>
                      </div>
                  </div>
              </div>
  
              <div class="col-xs-12 col-sm-6 col-md-n">
                  <div class="product">
                      <figure>
                          <a href="#"><img src="assets/images/related-3.png" class="img-responsive center-block" alt=""></a>
                      </figure>
                      <div class="info-product">
                          <h5>Samsung Galaxy S8</h5>
                          <span class="price">4 990,-</span>
                          <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                          <small>Cashback: <strong>kr 100,-</strong></small>
                      </div>
                  </div>
              </div>
  
              <div class="col-xs-12 col-sm-6 col-md-n">
                  <div class="product">
                      <figure>
                          <a href="#"><img src="assets/images/related-4.png" class="img-responsive center-block" alt=""></a>
                      </figure>
                      <div class="info-product">
                          <h5>Samsung Galaxy S8</h5>
                          <span class="price">4 990,-</span>
                          <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                          <small>Cashback: <strong>kr 100,-</strong></small>
                      </div>
                  </div>
              </div>
  
              <div class="col-xs-12 col-sm-6 col-md-n">
                  <div class="product">
                      <figure>
                          <a href="#"><img src="assets/images/related-4.png" class="img-responsive center-block" alt=""></a>
                      </figure>
                      <div class="info-product">
                          <h5>Samsung Galaxy S8</h5>
                          <span class="price">4 990,-</span>
                          <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                          <small>Cashback: <strong>kr 100,-</strong></small>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <div class="clearfix"></div>

    <section class="online-shopping">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-8">
            <div class="shopping-categories">
              <h2>Produktkategorier
                <span>Hva leter du etter?</span></h2>
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="shopping-category">
                      <div class="row">
                        <div class="flex-box">
                          <div class="col-xs-12 col-sm-4">
                            <figure>
                              <img src="assets/images/category-1.png" class="center-block img-responsive" alt="">
                            </figure>
                          </div>
                          <div class="col-xs-12 col-sm-8">
                            <div class="content-category">
                              <a href="" class="name">Mobil og nettbrett</a>
                              <div class="sub-menu">
                                <ul>
                                  <li>
                                    <a href="">Vinterlek</a>
                                  </li>
                                  <li>
                                    <a href="">Drone</a>
                                  </li>
                                  <li>
                                    <a href="">Multikopter</a>
                                  </li>
                                  <li>
                                    <a href="">Lykt og hodelykt</a>
                                  </li>
                                  <li>
                                    <a href="">Pulsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Sportsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Aktivitetsarmbånd</a>
                                  </li>
                                  <li>
                                    <a href="">Skismøring</a>
                                  </li>
                                  <li>
                                    <a href="">Ryggsekk</a>
                                  </li>
                                </ul>
                                <a href="" class="view-more">VIS ALLE
                                  <span>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
  
                  <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="shopping-category">
                      <div class="row">
                        <div class="flex-box">
                          <div class="col-xs-12 col-sm-4">
                            <figure>
                              <img src="assets/images/category-3.png" class="center-block img-responsive" alt="">
                            </figure>
                          </div>
                          <div class="col-xs-12 col-sm-8">
                            <div class="content-category">
                              <a href="" class="name">Data og datautstyr</a>
                              <div class="sub-menu">
                                <ul>
                                  <li>
                                    <a href="">Vinterlek</a>
                                  </li>
                                  <li>
                                    <a href="">Drone</a>
                                  </li>
                                  <li>
                                    <a href="">Multikopter</a>
                                  </li>
                                  <li>
                                    <a href="">Lykt og hodelykt</a>
                                  </li>
                                  <li>
                                    <a href="">Pulsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Sportsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Aktivitetsarmbånd</a>
                                  </li>
                                  <li>
                                    <a href="">Skismøring</a>
                                  </li>
                                  <li>
                                    <a href="">Ryggsekk</a>
                                  </li>
                                </ul>
                                <a href="" class="view-more">VIS ALLE
                                  <span>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
  
                  <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="shopping-category">
                      <div class="row">
                        <div class="flex-box">
                          <div class="col-xs-12 col-sm-4">
                            <figure>
                              <img src="assets/images/category-4.png" class="center-block img-responsive" alt="">
                            </figure>
                          </div>
                          <div class="col-xs-12 col-sm-8">
                            <div class="content-category">
                              <a href="" class="name">Lyd og bilde</a>
                              <div class="sub-menu">
                                <ul>
                                  <li>
                                    <a href="">Vinterlek</a>
                                  </li>
                                  <li>
                                    <a href="">Drone</a>
                                  </li>
                                  <li>
                                    <a href="">Multikopter</a>
                                  </li>
                                  <li>
                                    <a href="">Lykt og hodelykt</a>
                                  </li>
                                  <li>
                                    <a href="">Pulsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Sportsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Aktivitetsarmbånd</a>
                                  </li>
                                  <li>
                                    <a href="">Skismøring</a>
                                  </li>
                                  <li>
                                    <a href="">Ryggsekk</a>
                                  </li>
                                </ul>
                                <a href="" class="view-more">VIS ALLE
                                  <span>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
  
                  <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="shopping-category">
                      <div class="row">
                        <div class="flex-box">
                          <div class="col-xs-12 col-sm-4">
                            <figure>
                              <img src="assets/images/category-2.png" class="center-block img-responsive" alt="">
                            </figure>
                          </div>
                          <div class="col-xs-12 col-sm-8">
                            <div class="content-category">
                              <a href="" class="name">Spill og spillutstyr</a>
                              <div class="sub-menu">
                                <ul>
                                  <li>
                                    <a href="">Vinterlek</a>
                                  </li>
                                  <li>
                                    <a href="">Drone</a>
                                  </li>
                                  <li>
                                    <a href="">Multikopter</a>
                                  </li>
                                  <li>
                                    <a href="">Lykt og hodelykt</a>
                                  </li>
                                  <li>
                                    <a href="">Pulsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Sportsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Aktivitetsarmbånd</a>
                                  </li>
                                  <li>
                                    <a href="">Skismøring</a>
                                  </li>
                                  <li>
                                    <a href="">Ryggsekk</a>
                                  </li>
                                </ul>
                                <a href="" class="view-more">VIS ALLE
                                  <span>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
  
                  <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="shopping-category">
                      <div class="row">
                        <div class="flex-box">
                          <div class="col-xs-12 col-sm-4">
                            <figure>
                              <img src="assets/images/category-5.png" class="center-block img-responsive" alt="">
                            </figure>
                          </div>
                          <div class="col-xs-12 col-sm-8">
                            <div class="content-category">
                              <a href="" class="name">Sport og fritid</a>
                              <div class="sub-menu">
                                <ul>
                                  <li>
                                    <a href="">Vinterlek</a>
                                  </li>
                                  <li>
                                    <a href="">Drone</a>
                                  </li>
                                  <li>
                                    <a href="">Multikopter</a>
                                  </li>
                                  <li>
                                    <a href="">Lykt og hodelykt</a>
                                  </li>
                                  <li>
                                    <a href="">Pulsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Sportsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Aktivitetsarmbånd</a>
                                  </li>
                                  <li>
                                    <a href="">Skismøring</a>
                                  </li>
                                  <li>
                                    <a href="">Ryggsekk</a>
                                  </li>
                                </ul>
                                <a href="" class="view-more">VIS ALLE
                                  <span>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
  
                  <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="shopping-category">
                      <div class="row">
                        <div class="flex-box">
                          <div class="col-xs-12 col-sm-4">
                            <figure>
                              <img src="assets/images/category-6.png" class="center-block img-responsive" alt="">
                            </figure>
                          </div>
                          <div class="col-xs-12 col-sm-8">
                            <div class="content-category">
                              <a href="" class="name">Klær og sko</a>
                              <div class="sub-menu">
                                <ul>
                                  <li>
                                    <a href="">Vinterlek</a>
                                  </li>
                                  <li>
                                    <a href="">Drone</a>
                                  </li>
                                  <li>
                                    <a href="">Multikopter</a>
                                  </li>
                                  <li>
                                    <a href="">Lykt og hodelykt</a>
                                  </li>
                                  <li>
                                    <a href="">Pulsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Sportsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Aktivitetsarmbånd</a>
                                  </li>
                                  <li>
                                    <a href="">Skismøring</a>
                                  </li>
                                  <li>
                                    <a href="">Ryggsekk</a>
                                  </li>
                                </ul>
                                <a href="" class="view-more">VIS ALLE
                                  <span>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
  
                  <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="shopping-category">
                      <div class="row">
                        <div class="flex-box">
                          <div class="col-xs-12 col-sm-4">
                            <figure>
                              <img src="assets/images/category-7.png" class="center-block img-responsive" alt="">
                            </figure>
                          </div>
                          <div class="col-xs-12 col-sm-8">
                            <div class="content-category">
                              <a href="" class="name">Hjem og husholdning</a>
                              <div class="sub-menu">
                                <ul>
                                  <li>
                                    <a href="">Vinterlek</a>
                                  </li>
                                  <li>
                                    <a href="">Drone</a>
                                  </li>
                                  <li>
                                    <a href="">Multikopter</a>
                                  </li>
                                  <li>
                                    <a href="">Lykt og hodelykt</a>
                                  </li>
                                  <li>
                                    <a href="">Pulsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Sportsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Aktivitetsarmbånd</a>
                                  </li>
                                  <li>
                                    <a href="">Skismøring</a>
                                  </li>
                                  <li>
                                    <a href="">Ryggsekk</a>
                                  </li>
                                </ul>
                                <a href="" class="view-more">VIS ALLE
                                  <span>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
  
                  <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="shopping-category">
                      <div class="row">
                        <div class="flex-box">
                          <div class="col-xs-12 col-sm-4">
                            <figure>
                              <img src="assets/images/category-8.png" class="center-block img-responsive" alt="">
                            </figure>
                          </div>
                          <div class="col-xs-12 col-sm-8">
                            <div class="content-category">
                              <a href="" class="name">Hjem og husholdning</a>
                              <div class="sub-menu">
                                <ul>
                                  <li>
                                    <a href="">Vinterlek</a>
                                  </li>
                                  <li>
                                    <a href="">Drone</a>
                                  </li>
                                  <li>
                                    <a href="">Multikopter</a>
                                  </li>
                                  <li>
                                    <a href="">Lykt og hodelykt</a>
                                  </li>
                                  <li>
                                    <a href="">Pulsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Sportsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Aktivitetsarmbånd</a>
                                  </li>
                                  <li>
                                    <a href="">Skismøring</a>
                                  </li>
                                  <li>
                                    <a href="">Ryggsekk</a>
                                  </li>
                                </ul>
                                <a href="" class="view-more">VIS ALLE
                                  <span>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
  
                  <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="shopping-category">
                      <div class="row">
                        <div class="flex-box">
                          <div class="col-xs-12 col-sm-4">
                            <figure>
                              <img src="assets/images/category-9.png" class="center-block img-responsive" alt="">
                            </figure>
                          </div>
                          <div class="col-xs-12 col-sm-8">
                            <div class="content-category">
                              <a href="" class="name">Skjønnhet og velvære</a>
                              <div class="sub-menu">
                                <ul>
                                  <li>
                                    <a href="">Vinterlek</a>
                                  </li>
                                  <li>
                                    <a href="">Drone</a>
                                  </li>
                                  <li>
                                    <a href="">Multikopter</a>
                                  </li>
                                  <li>
                                    <a href="">Lykt og hodelykt</a>
                                  </li>
                                  <li>
                                    <a href="">Pulsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Sportsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Aktivitetsarmbånd</a>
                                  </li>
                                  <li>
                                    <a href="">Skismøring</a>
                                  </li>
                                  <li>
                                    <a href="">Ryggsekk</a>
                                  </li>
                                </ul>
                                <a href="" class="view-more">VIS ALLE
                                  <span>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
  
                  <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="shopping-category">
                      <div class="row">
                        <div class="flex-box">
                          <div class="col-xs-12 col-sm-4">
                            <figure>
                              <img src="assets/images/category-10.png" class="center-block img-responsive" alt="">
                            </figure>
                          </div>
                          <div class="col-xs-12 col-sm-8">
                            <div class="content-category">
                              <a href="" class="name">Foto og video</a>
                              <div class="sub-menu">
                                <ul>
                                  <li>
                                    <a href="">Vinterlek</a>
                                  </li>
                                  <li>
                                    <a href="">Drone</a>
                                  </li>
                                  <li>
                                    <a href="">Multikopter</a>
                                  </li>
                                  <li>
                                    <a href="">Lykt og hodelykt</a>
                                  </li>
                                  <li>
                                    <a href="">Pulsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Sportsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Aktivitetsarmbånd</a>
                                  </li>
                                  <li>
                                    <a href="">Skismøring</a>
                                  </li>
                                  <li>
                                    <a href="">Ryggsekk</a>
                                  </li>
                                </ul>
                                <a href="" class="view-more">VIS ALLE
                                  <span>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
  
                  <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="shopping-category">
                      <div class="row">
                        <div class="flex-box">
                          <div class="col-xs-12 col-sm-4">
                            <figure>
                              <img src="assets/images/category-11.png" class="center-block img-responsive" alt="">
                            </figure>
                          </div>
                          <div class="col-xs-12 col-sm-8">
                            <div class="content-category">
                              <a href="" class="name">Foto og video</a>
                              <div class="sub-menu">
                                <ul>
                                  <li>
                                    <a href="">Vinterlek</a>
                                  </li>
                                  <li>
                                    <a href="">Drone</a>
                                  </li>
                                  <li>
                                    <a href="">Multikopter</a>
                                  </li>
                                  <li>
                                    <a href="">Lykt og hodelykt</a>
                                  </li>
                                  <li>
                                    <a href="">Pulsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Sportsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Aktivitetsarmbånd</a>
                                  </li>
                                  <li>
                                    <a href="">Skismøring</a>
                                  </li>
                                  <li>
                                    <a href="">Ryggsekk</a>
                                  </li>
                                </ul>
                                <a href="" class="view-more">VIS ALLE
                                  <span>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
  
                  <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="shopping-category">
                      <div class="row">
                        <div class="flex-box">
                          <div class="col-xs-12 col-sm-4">
                            <figure>
                              <img src="assets/images/category-12.png" class="center-block img-responsive" alt="">
                            </figure>
                          </div>
                          <div class="col-xs-12 col-sm-8">
                            <div class="content-category">
                              <a href="" class="name">Bygg og verktøy</a>
                              <div class="sub-menu">
                                <ul>
                                  <li>
                                    <a href="">Vinterlek</a>
                                  </li>
                                  <li>
                                    <a href="">Drone</a>
                                  </li>
                                  <li>
                                    <a href="">Multikopter</a>
                                  </li>
                                  <li>
                                    <a href="">Lykt og hodelykt</a>
                                  </li>
                                  <li>
                                    <a href="">Pulsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Sportsklokke</a>
                                  </li>
                                  <li>
                                    <a href="">Aktivitetsarmbånd</a>
                                  </li>
                                  <li>
                                    <a href="">Skismøring</a>
                                  </li>
                                  <li>
                                    <a href="">Ryggsekk</a>
                                  </li>
                                </ul>
                                <a href="" class="view-more">VIS ALLE
                                  <span>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
  
                </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="advertisment">
              <a href="{{route('register')}}">
                <img src="assets/images/advertising-landing.png" class="img-responsive center-block" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="clearfix"></div>

    <section class="list-popular-products">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-5">
            <h3>Populære produkter</h3>
            <div class="popular-products">
              <div class="flex-box">
                <div class="col-xs-12 col-sm-4">
                  <figure>
                    <img src="assets/images/popular-product-1.jpg" class="img-responsive center-block" alt="">
                  </figure>
                </div>
                <div class="col-xs-12 col-sm-8">
                  <div class="top-box">
                    <h4>Sony WH-1000XM2</h4>
                    <span>4 990,-</span>
                  </div>
                  <div class="bot-box">
                    <small>Cashback: <strong>kr 100,-</strong></small>
                    <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="popular-products">
              <div class="flex-box">
                <div class="col-xs-12 col-sm-4">
                  <figure>
                    <img src="assets/images/popular-product-1.jpg" class="img-responsive center-block" alt="">
                  </figure>
                </div>
                <div class="col-xs-12 col-sm-8">
                  <div class="top-box">
                    <h4>Sony WH-1000XM2</h4>
                    <span>4 990,-</span>
                  </div>
                  <div class="bot-box">
                    <small>Cashback: <strong>kr 100,-</strong></small>
                    <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="popular-products">
              <div class="flex-box">
                <div class="col-xs-12 col-sm-4">
                  <figure>
                    <img src="assets/images/popular-product-2.jpg" class="img-responsive center-block" alt="">
                  </figure>
                </div>
                <div class="col-xs-12 col-sm-8">
                  <div class="top-box">
                    <h4>Sony WH-1000XM2</h4>
                    <span>4 990,-</span>
                  </div>
                  <div class="bot-box">
                    <small>Cashback: <strong>kr 100,-</strong></small>
                    <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="popular-products">
              <div class="flex-box">
                <div class="col-xs-12 col-sm-4">
                  <figure>
                    <img src="assets/images/popular-product-3.jpg" class="img-responsive center-block" alt="">
                  </figure>
                </div>
                <div class="col-xs-12 col-sm-8">
                  <div class="top-box">
                    <h4>Sony WH-1000XM2</h4>
                    <span>4 990,-</span>
                  </div>
                  <div class="bot-box">
                    <small>Cashback: <strong>kr 100,-</strong></small>
                    <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="popular-products">
              <div class="flex-box">
                <div class="col-xs-12 col-sm-4">
                  <figure>
                    <img src="assets/images/popular-product-2.jpg" class="img-responsive center-block" alt="">
                  </figure>
                </div>
                <div class="col-xs-12 col-sm-8">
                  <div class="top-box">
                    <h4>Sony WH-1000XM2</h4>
                    <span>4 990,-</span>
                  </div>
                  <div class="bot-box">
                    <small>Cashback: <strong>kr 100,-</strong></small>
                    <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-2">
            <h3>Populære tilbud</h3>
            <div class="popular-products">
              <div class="flex-box">
                <div class="col-xs-12 col-sm-4">
                  <figure>
                    <img src="assets/images/popular-product-2.jpg" class="img-responsive center-block" alt="">
                  </figure>
                </div>
                <div class="col-xs-12 col-sm-8">
                  <div class="top-box">
                    <h4>Sony WH-1000XM2</h4>
                    <span>4 990,-</span>
                  </div>
                  <div class="bot-box">
                    <small>Cashback: <strong>kr 100,-</strong></small>
                    <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="popular-products">
              <div class="flex-box">
                <div class="col-xs-12 col-sm-4">
                  <figure>
                    <img src="assets/images/popular-product-1.jpg" class="img-responsive center-block" alt="">
                  </figure>
                </div>
                <div class="col-xs-12 col-sm-8">
                  <div class="top-box">
                    <h4>Sony WH-1000XM2</h4>
                    <span>4 990,-</span>
                  </div>
                  <div class="bot-box">
                    <small>Cashback: <strong>kr 100,-</strong></small>
                    <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="popular-products">
              <div class="flex-box">
                <div class="col-xs-12 col-sm-4">
                  <figure>
                    <img src="assets/images/popular-product-3.jpg" class="img-responsive center-block" alt="">
                  </figure>
                </div>
                <div class="col-xs-12 col-sm-8">
                  <div class="top-box">
                    <h4>Sony WH-1000XM2</h4>
                    <span>4 990,-</span>
                  </div>
                  <div class="bot-box">
                    <small>Cashback: <strong>kr 100,-</strong></small>
                    <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="popular-products">
              <div class="flex-box">
                <div class="col-xs-12 col-sm-4">
                  <figure>
                    <img src="assets/images/popular-product-2.jpg" class="img-responsive center-block" alt="">
                  </figure>
                </div>
                <div class="col-xs-12 col-sm-8">
                  <div class="top-box">
                    <h4>Sony WH-1000XM2</h4>
                    <span>4 990,-</span>
                  </div>
                  <div class="bot-box">
                    <small>Cashback: <strong>kr 100,-</strong></small>
                    <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="popular-products">
              <div class="flex-box">
                <div class="col-xs-12 col-sm-4">
                  <figure>
                    <img src="assets/images/popular-product-1.jpg" class="img-responsive center-block" alt="">
                  </figure>
                </div>
                <div class="col-xs-12 col-sm-8">
                  <div class="top-box">
                    <h4>Sony WH-1000XM2</h4>
                    <span>4 990,-</span>
                  </div>
                  <div class="bot-box">
                    <small>Cashback: <strong>kr 100,-</strong></small>
                    <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <div class="clearfix"></div>

    <section class="product-guides">
      <div class="container">
        <div class="title">
            <div class="row">
                <div class="col-xs-12 col-sm-6"><h2>Tester og produktguider</h2></div>
                <div class="col-xs-12 col-sm-6"><a href="" class="view-more">Vis alle produktguider <i class="fa fa-caret-right" aria-hidden="true"></i></a></div>
            </div>
        </div>
        
        <div class="clerfix"></div>

        <div class="row">

          <div class="col-xs-12 col-sm-12 col-md-5">

            <article class="product big">
              <figure>
                <a href=""><img src="assets/images/product-big.png" class="img-responsive center-block" alt=""></a>
              </figure>
              <div class="info-product">
                <time>Publisert: 25.01.17</time>
                <h3><a href="">Nvidia Shield TV 16GB + Kontroller</a></h3>
                <p><a href="">Lorem Ipsum er rett og slett dummytekst fra og for trykkeindustrien. Lorem Ipsum har vært bransjens standard for dummytekst helt siden 1500-tallet, da en ukjent boktrykker stokket.</a></p>
                <a href="" class="view-more">Les guide <span><i class="fa fa-caret-right" aria-hidden="true"></i></span></a>
              </div>
            </article>

          </div>

          <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="row">
              <div class="col-xs-12 col-sm-4">
                <article class="product small">
                  <figure>
                    <a href=""><img src="assets/images/product-small.png" class="img-responsive center-block" alt=""></a>
                  </figure>
                  <div class="info-product">
                    <time>Publisert: 25.01.17</time>
                    <h3><a href="">Tomtom Spark 3 Cardio</a></h3>
                    <a href="" class="view-more">Les guide <span><i class="fa fa-caret-right" aria-hidden="true"></i></span></a>
                  </div>
                </article>
              </div>

              <div class="col-xs-12 col-sm-4">
                <article class="product small">
                  <figure>
                    <a href=""><img src="assets/images/product-small.png" class="img-responsive center-block" alt=""></a>
                  </figure>
                  <div class="info-product">
                    <time>Publisert: 25.01.17</time>
                    <h3><a href="">Tomtom Spark 3 Cardio</a></h3>
                    <a href="" class="view-more">Les guide <span><i class="fa fa-caret-right" aria-hidden="true"></i></span></a>
                  </div>
                </article>
              </div>

              <div class="col-xs-12 col-sm-4">
                <article class="product small">
                  <figure>
                    <a href=""><img src="assets/images/product-small.png" class="img-responsive center-block" alt=""></a>
                  </figure>
                  <div class="info-product">
                    <time>Publisert: 25.01.17</time>
                    <h3><a href="">Tomtom Spark 3 Cardio</a></h3>
                    <a href="" class="view-more">Les guide <span><i class="fa fa-caret-right" aria-hidden="true"></i></span></a>
                  </div>
                </article>
              </div>

            </div>
            <div class="row">
              <div class="col-xs-12">
                <article class="product medium">
                    <figure>
                      <a href=""><img src="assets/images/product-medium.png" class="img-responsive center-block" alt=""></a>
                    </figure>
                    <div class="info-product">
                      <time>Publisert: 25.01.17</time>
                      <h3><a href="">Garmin Tactix Bravo</a></h3>
                      <a href="" class="view-more">Les guide <span><i class="fa fa-caret-right" aria-hidden="true"></i></span></a>
                    </div>
                  </article>
              </div>
              <div class="col-xs-12">
                <article class="product medium">
                    <figure>
                      <a href=""><img src="assets/images/product-medium.png" class="img-responsive center-block" alt=""></a>
                    </figure>
                    <div class="info-product">
                      <time>Publisert: 25.01.17</time>
                      <h3><a href="">Garmin Tactix Bravo</a></h3>
                      <a href="" class="view-more">Les guide <span><i class="fa fa-caret-right" aria-hidden="true"></i></span></a>
                    </div>
                  </article>
              </div>
            </div>
          </div>

        </div><!-- row -->
      </div><!-- /container -->
    </section>

    <div class="clearfix"></div>

    <section class="best-deals">
      <div class="container">
          <div class="title">
            <h3>De beste tilbudene akkurat nå</h3>
          </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="carousel-best-deals">
                <div id="best-deals-products" class="cs-hidden">
                    <div class="item-small">
                      <div class="product">
                        <figure>
                            <a href="#"><img src="assets/images/related-1.png" class="img-responsive center-block" alt=""></a>
                        </figure>
                        <div class="info-product">
                            <h5>Samsung Galaxy S8</h5>
                            <span class="price">4 990,-</span>
                            <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            <small>Cashback: <strong>kr 100,-</strong></small>
                        </div>
                      </div>
                      <div class="product">
                        <figure>
                            <a href="#"><img src="assets/images/related-1.png" class="img-responsive center-block" alt=""></a>
                        </figure>
                        <div class="info-product">
                            <h5>Samsung Galaxy S8</h5>
                            <span class="price">4 990,-</span>
                            <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            <small>Cashback: <strong>kr 100,-</strong></small>
                        </div>
                      </div>
                    </div>
                    <div class="item-small">
                      <div class="product">
                        <figure>
                            <a href="#"><img src="assets/images/related-1.png" class="img-responsive center-block" alt=""></a>
                        </figure>
                        <div class="info-product">
                            <h5>Samsung Galaxy S8</h5>
                            <span class="price">4 990,-</span>
                            <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            <small>Cashback: <strong>kr 100,-</strong></small>
                        </div>
                      </div>
                      <div class="product">
                        <figure>
                            <a href="#"><img src="assets/images/related-1.png" class="img-responsive center-block" alt=""></a>
                        </figure>
                        <div class="info-product">
                            <h5>Samsung Galaxy S8</h5>
                            <span class="price">4 990,-</span>
                            <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            <small>Cashback: <strong>kr 100,-</strong></small>
                        </div>
                      </div>
                    </div>

                    <div class="item-big">

                      <div class="product">
                        <figure>
                            <a href="#"><img src="assets/images/product-big.jpg" class="img-responsive center-block" alt=""></a>
                        </figure>
                        <div class="info-product">
                            <h5>Samsung Galaxy S8</h5>
                            <span class="price">4 990,-</span>
                            <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            <small>Cashback: <strong>kr 100,-</strong></small>
                        </div>
                      </div><!-- /product -->

                    </div>

                    <div class="item-small"> 
                      <div class="product">
                        <figure>
                            <a href="#"><img src="assets/images/related-1.png" class="img-responsive center-block" alt=""></a>
                        </figure>
                        <div class="info-product">
                            <h5>Samsung Galaxy S8</h5>
                            <span class="price">4 990,-</span>
                            <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            <small>Cashback: <strong>kr 100,-</strong></small>
                        </div>
                      </div>
                      <div class="product">
                        <figure>
                            <a href="#"><img src="assets/images/related-1.png" class="img-responsive center-block" alt=""></a>
                        </figure>
                        <div class="info-product">
                            <h5>Samsung Galaxy S8</h5>
                            <span class="price">4 990,-</span>
                            <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            <small>Cashback: <strong>kr 100,-</strong></small>
                        </div>
                      </div><!-- /product -->
                    </div>
                    <div class="item-big">
                      <div class="product">
                        <figure>
                            <a href="#"><img src="assets/images/product-big.jpg" class="img-responsive center-block" alt=""></a>
                        </figure>
                        <div class="info-product">
                            <h5>Samsung Galaxy S8</h5>
                            <span class="price">4 990,-</span>
                            <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            <small>Cashback: <strong>kr 100,-</strong></small>
                        </div>
                      </div><!-- /product -->
                    </div>
                    <div class="item-small">
                      <div class="product">
                        <figure>
                            <a href="#"><img src="assets/images/related-1.png" class="img-responsive center-block" alt=""></a>
                        </figure>
                        <div class="info-product">
                            <h5>Samsung Galaxy S8</h5>
                            <span class="price">4 990,-</span>
                            <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            <small>Cashback: <strong>kr 100,-</strong></small>
                        </div>
                      </div>
                      <div class="product">
                        <figure>
                            <a href="#"><img src="assets/images/related-1.png" class="img-responsive center-block" alt=""></a>
                        </figure>
                        <div class="info-product">
                            <h5>Samsung Galaxy S8</h5>
                            <span class="price">4 990,-</span>
                            <a href="" class="view-more">73 priser <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            <small>Cashback: <strong>kr 100,-</strong></small>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>

    <div class="clearfix"></div>

    <section class="chasback">
      <div class="container">
        <h2 class="text-center">
            Spar penger når du handler på nett med <span>Cashback</span>
        </h2>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8">
            <div class="row">
              <div class="col-xs-12 col-sm-4">
                <div class="item-cashback text-center">
                  <figure>
                    <img src="assets/images/join.png" class="center-block img-responsive" alt="">
                  </figure>
                  <p>Bli medlem i dagvv</p>
                </div>
              </div>

              <div class="col-xs-12 col-sm-4">
                <div class="item-cashback text-center">
                  <figure>
                    <img src="assets/images/shopping.png" class="center-block img-responsive" alt="">
                  </figure>
                  <p>Du handler på nett</p>
                </div>
              </div>

              <div class="col-xs-12 col-sm-4">
                <div class="item-cashback text-center">
                  <figure>
                    <img src="assets/images/refound.png" class="center-block img-responsive" alt="">
                  </figure>
                  <p>Du får penger tilbake</p>
                </div>
              </div>

              <div class="clearfix"></div>

              <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                <a href="{{route('register')}}" class="btn btn-block btn-orange">Bli medlem gratis</a>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
@section('scripts')
    <script src="assets/plugins/lightslider/lightslider.min.js"></script>
    <script src="js/main.js"></script>
    <script>jQuery(function(){new Proguiden.Controllers.shoppingLanding();});</script>
@endsection