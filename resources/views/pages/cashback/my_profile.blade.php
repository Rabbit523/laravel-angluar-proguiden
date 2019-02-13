@extends('layouts.public') @section('title', 'Produkctguider') @section('content')
<main class="proguiden-my-profile">

  <section class="info-profile">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4">
          <div class="box-description">
            <h2>Din oversikt</h2>
            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-12">
                <div class="price checking">
                  <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-7">
                      <div class="value">
                        <p>0,-</p>
                        <span>Klar til utbetaling</span>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-5">
                      <div class="img-wrapper">
                        <img src="{{ asset('/assets/images/checking.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-12">
                <div class="price waiting">
                  <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-7">
                      <div class="value">
                        <p>0,-</p>
                        <span>Venter godkjenning</span>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-5">
                      <div class="img-wrapper">
                        <img src="{{ asset('/assets/images/waiting.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-12">
                <div class="price total">
                  <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-7">
                      <div class="value">
                        <p>0,-</p>
                        <span>Totalt utbetalt</span>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-5">
                      <div class="img-wrapper">
                        <img src="{{ asset('/assets/images/total.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="box-activity">
            <h2>Din siste aktivitet</h2>
            <div class="box-empty">
              <img src="{{ asset('/assets/images/empty-activity.png', env('REDIRECT_HTTPS')) }}" class="center-block img-responsive" alt="">
              <p>Dine siste transaksjoner vil vises her etter at du har gjort et kjøp.</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="box-faqs">
            <h2>Ofte stilte spørsmål</h2>
            <ul>
              <li>
                <a href="">Hvordan handler jeg for å få CashBack?</a>
              </li>
              <li>
                <a href="">Hva betyr registrert, bekreftet og avvist?</a>
              </li>
              <li>
                <a href="">Min CashBack har ikke blitt registrert - hva gjør jeg?</a>
              </li>
              <li>
                <a href="">Hvordan kan jeg sikre at CashBack blir registrert?</a>
              </li>
              <li>
                <a href="">Lorem ipsum dolor sit amet consec?</a>
              </li>
              <li>
                <a href="">Hva betyr registert, bekreftet og avvist?</a>
              </li>
              <li>
                <a href="">Min CashBack har ikke blitt registert?</a>
              </li>
              <li>
                <a href="">Kan jeg avslutte min konto?</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="clearfix"></div>

  <section class="new-stores">
    <div class="container">
      <h2>Nyeste butikker</h2>
      <div class="row">
        <div class="col-xs-6 col-sm-3 col-md-special">
          <div class="item">
            <figure>
              <a href="#">
                <img src="{{ asset('/assets/images/geardbest.jpg', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              </a>
            </figure>
          </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-special">
          <div class="item">
            <figure>
              <a href="#">
                <img src="{{ asset('/assets/images/bildeler.jpg', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              </a>
            </figure>
          </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-special">
          <div class="item">
            <figure>
              <a href="#">
                <img src="{{ asset('/assets/images/bakeren.jpg', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              </a>
            </figure>
          </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-special">
          <div class="item">
            <figure>
              <a href="#">
                <img src="{{ asset('/assets/images/ivyrevel.jpg', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              </a>
            </figure>
          </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-special">
          <div class="item">
            <figure>
              <a href="#">
                <img src="{{ asset('/assets/images/coolshop.jpg', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              </a>
            </figure>
          </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-special">
          <div class="item">
            <figure>
              <a href="#">
                <img src="{{ asset('/assets/images/bakeren.jpg', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              </a>
            </figure>
          </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-special">
          <div class="item">
            <figure>
              <a href="#">
                <img src="{{ asset('/assets/images/geardbest.jpg', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              </a>
            </figure>
          </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-special">
          <div class="item">
            <figure>
              <a href="#">
                <img src="{{ asset('/assets/images/bakeren.jpg', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              </a>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="online-shopping">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="shopping-categories">
            <h2>
              <span>Spar penger.</span>
              Handle på nett med Cashback.</h2>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <article class="shopping-category">
                  <div class="row">
                    <div class="flex-box">
                      <div class="col-xs-12 col-sm-4">
                        <figure>
                          <img src="{{ asset('/assets/images/category-1.png', env('REDIRECT_HTTPS')) }}"  class="center-block img-responsive" alt="">
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
                          <img src="{{ asset('/assets/images/category-3.png', env('REDIRECT_HTTPS')) }}"  class="center-block img-responsive" alt="">
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
                          <img src="{{ asset('/assets/images/category-4.png', env('REDIRECT_HTTPS')) }}"  class="center-block img-responsive" alt="">
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
                          <img src="{{ asset('/assets/images/category-2.png', env('REDIRECT_HTTPS')) }}"  class="center-block img-responsive" alt="">
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
                          <img src="{{ asset('/assets/images/category-5.png', env('REDIRECT_HTTPS')) }}"  class="center-block img-responsive" alt="">
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
                          <img src="{{ asset('/assets/images/category-6.png', env('REDIRECT_HTTPS')) }}"  class="center-block img-responsive" alt="">
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
                          <img src="{{ asset('/assets/images/category-7.png', env('REDIRECT_HTTPS')) }}"  class="center-block img-responsive" alt="">
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
                          <img src="{{ asset('/assets/images/category-8.png', env('REDIRECT_HTTPS')) }}"  class="center-block img-responsive" alt="">
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
                          <img src="{{ asset('/assets/images/category-9.png', env('REDIRECT_HTTPS')) }}"  class="center-block img-responsive" alt="">
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
                          <img src="{{ asset('/assets/images/category-10.png', env('REDIRECT_HTTPS')) }}"  class="center-block img-responsive" alt="">
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
                          <img src="{{ asset('/assets/images/category-11.png', env('REDIRECT_HTTPS')) }}"  class="center-block img-responsive" alt="">
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
                          <img src="{{ asset('/assets/images/category-12.png', env('REDIRECT_HTTPS')) }}"  class="center-block img-responsive" alt="">
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
      </div>
    </div>
  </section>

  <div class="clearfix"></div>

  <section class="discount-codes">
    <div class="container">
      <h2>Siste
        <span>tilbud.</span>
      </h2>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="code">
            <figure>
              <img src="{{ asset('/assets/images/code-1.png', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              <div class="brand">
                <img src="{{ asset('/assets/images/brand-1.png', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              </div>
            </figure>
            <div class="info-code">
              <h3>Spar opptil 200,- på skjønnetsprodukter</h3>
              <p>Kjøp dine skjønnhetsfavoritter hos Nordic Feel! Nå får du 200kr i rabatt når du handler for 1099kr.</p>
              <a href="" class="btn btn-block btn-green">GÅ TIL NETTBUTIKK</a>
              <small>Cashback:
                <strong>Opptil 5%</strong>
              </small>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="code">
            <figure>
              <img src="{{ asset('/assets/images/code-2.png', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              <div class="brand">
                <img src="{{ asset('/assets/images/brand-2.png', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              </div>
            </figure>
            <div class="info-code">
              <h3>100 kr i rabatt hos Stayhard</h3>
              <p>Kjøp dine skjønnhetsfavoritter hos Nordic Feel! Nå får du 200kr i rabatt når du handler for 1099kr.</p>
              <a href="" class="btn btn-block btn-green">GÅ TIL NETTBUTIKK</a>
              <small>Cashback:
                <strong>Opptil 5%</strong>
              </small>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="code">
            <figure>
              <img src="{{ asset('/assets/images/code-2.png', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              <div class="brand">
                <img src="{{ asset('/assets/images/brand-2.png', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              </div>
            </figure>
            <div class="info-code">
              <h3>100 kr i rabatt hos Stayhard</h3>
              <p>Kjøp dine skjønnhetsfavoritter hos Nordic Feel! Nå får du 200kr i rabatt når du handler for 1099kr.</p>
              <a href="" class="btn btn-block btn-green">GÅ TIL NETTBUTIKK</a>
              <small>Cashback:
                <strong>Opptil 5%</strong>
              </small>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="code">
            <figure>
              <img src="{{ asset('/assets/images/code-2.png', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              <div class="brand">
                <img src="{{ asset('/assets/images/brand-2.png', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              </div>
            </figure>
            <div class="info-code">
              <h3>100 kr i rabatt hos Stayhard</h3>
              <p>Kjøp dine skjønnhetsfavoritter hos Nordic Feel! Nå får du 200kr i rabatt når du handler for 1099kr.</p>
              <a href="" class="btn btn-block btn-green">GÅ TIL NETTBUTIKK</a>
              <small>Cashback:
                <strong>Opptil 5%</strong>
              </small>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="code">
            <figure>
              <img src="{{ asset('/assets/images/code-1.png', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              <div class="brand">
                <img src="{{ asset('/assets/images/brand-1.png', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              </div>
            </figure>
            <div class="info-code">
              <h3>Spar opptil 200,- på skjønnetsprodukter</h3>
              <p>Kjøp dine skjønnhetsfavoritter hos Nordic Feel! Nå får du 200kr i rabatt når du handler for 1099kr.</p>
              <a href="" class="btn btn-block btn-green">GÅ TIL NETTBUTIKK</a>
              <small>Cashback:
                <strong>Opptil 5%</strong>
              </small>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="code">
            <figure>
              <img src="{{ asset('/assets/images/code-2.png', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              <div class="brand">
                <img src="{{ asset('/assets/images/brand-2.png', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              </div>
            </figure>
            <div class="info-code">
              <h3>100 kr i rabatt hos Stayhard</h3>
              <p>Kjøp dine skjønnhetsfavoritter hos Nordic Feel! Nå får du 200kr i rabatt når du handler for 1099kr.</p>
              <a href="" class="btn btn-block btn-green">GÅ TIL NETTBUTIKK</a>
              <small>Cashback:
                <strong>Opptil 5%</strong>
              </small>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="code">
            <figure>
              <img src="{{ asset('/assets/images/code-2.png', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              <div class="brand">
                <img src="{{ asset('/assets/images/brand-2.png', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              </div>
            </figure>
            <div class="info-code">
              <h3>100 kr i rabatt hos Stayhard</h3>
              <p>Kjøp dine skjønnhetsfavoritter hos Nordic Feel! Nå får du 200kr i rabatt når du handler for 1099kr.</p>
              <a href="" class="btn btn-block btn-green">GÅ TIL NETTBUTIKK</a>
              <small>Cashback:
                <strong>Opptil 5%</strong>
              </small>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="code">
            <figure>
              <img src="{{ asset('/assets/images/code-2.png', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              <div class="brand">
                <img src="{{ asset('/assets/images/brand-2.png', env('REDIRECT_HTTPS')) }}"  class="img-responsive center-block" alt="">
              </div>
            </figure>
            <div class="info-code">
              <h3>100 kr i rabatt hos Stayhard</h3>
              <p>Kjøp dine skjønnhetsfavoritter hos Nordic Feel! Nå får du 200kr i rabatt når du handler for 1099kr.</p>
              <a href="" class="btn btn-block btn-green">GÅ TIL NETTBUTIKK</a>
              <small>Cashback:
                <strong>Opptil 5%</strong>
              </small>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>

</main>

@endsection
