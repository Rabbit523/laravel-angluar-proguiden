@extends('layouts.public') @section('title', 'Tjenester – Mobiltelefoni') @section('content')

<main class="proguiden-comparison-mobile-phone">
  <section class="header-credit-card">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="breadcrumb">
            <a href="">Tjenester </a>
            <i class="fa fa-caret-right" aria-hidden="true"></i>
            <span>Mobiltelefoni</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-md-7">
          <h1>Finn beste og billigste
            <br> mobilabonnement
            <span>juni 2018.</span>
          </h1>
          <p>Sammenlign pris, datamengde og tusenvis av verifiserte omtaler fra norske mobilkunder.</p>
        </div>
        <div class="col-xs-12 col-sm-2 col-md-2 col-md-offset-3 text-right">
          <div class="icon">
            <span class="icon-proguiden-mobile"></span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <section class="filter-box">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="box-slider-widget">
            <span class="label-left">DATA PR. MND.</span>
            <span class="label-right">
              <strong>18 GB</strong>
            </span>
            <div class="widget-slider">
              <div class="slider-base">
                <div class="slider-origin" style="left: 40px;">
                  <div class="slider-handler"></div>
                </div>
                <div class="slider-connect" style="width: 60%; left: 40px;"></div>
                <div class="slider-origin" style="right: 70px;">
                  <div class="slider-handler"></div>
                </div>
              </div>
            </div>
            <span class="indicator left">0</span>
            <span class="indicator right">20+ GB</span>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <span>MOBILNETT</span>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-xs-12 col-sm-4">
              <div class="switch-control">
                <label class="switch">
                  <input type="checkbox">
                  <span class="slider round"></span>
                </label>
                <p>Telenor</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="switch-control">
                <label class="switch">
                  <input type="checkbox">
                  <span class="slider round"></span>
                </label>
                <p>Telia</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="switch-control">
                <label class="switch">
                  <input type="checkbox">
                  <span class="slider round"></span>
                </label>
                <p>Ice</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <span>SKAL INKLUDERE</span>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-xs-12 col-sm-5">
              <div class="switch-control">
                <label class="switch">
                  <input type="checkbox">
                  <span class="slider round"></span>
                </label>
                <p>Data Rollover</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6">
              <div class="switch-control">
                <label class="switch">
                  <input type="checkbox">
                  <span class="slider round"></span>
                </label>
                <p>Inkl. bruk i EU/EØS</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <span>FILTRER SØK</span>
          <div class="form-group label-green-arrow">
            <label for="">Sorter etter</label>
            <select name="" id="" class="form-control">
              <option value="">Best omtalt</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <section class="items-show">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <strong>Viser 6 resultater av 120 mobilabonnement</strong>
        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <section class="mobile-phones">
    <div class="container">
      <div class="header-list">
        <div class="detail">
          Detaljer
        </div>
        <div class="subscription">
          Mobilabonnement
        </div>
        <div class="reviews text-right">
          <select name="" id="">
            <option value="">Omtaler</option>
          </select>
        </div>
        <div class="date text-right">
          <select name="" id="">
            <option value="">Data/mnd</option>
          </select>
        </div>
        <div class="price text-right">
          <select name="" id="">
            <option value="">Pris/mnd</option>
          </select>
        </div>
        <div class="action text-right">
          Bestill
        </div>
      </div>
      <div class="accordion-mobile">
        <div class="panel-group">
          <div class="panel panel-mobile">
            <div class="panel-heading collapsed" data-toggle="collapse" href="#collapse1">
              <div class="detail">
                <div class="arrow">
                  <i class="fa fa-chevron-up" aria-hidden="true"></i>
                </div>
              </div>
              <div class="subscription">
                <figure>
                  <img src="{{ asset('/assets/images/mobile-img.jpg', env('REDIRECT_HTTPS')) }}" clas="img-responsive" alt="">
                </figure>
                <div class="content">
                  MyPack S 100 MB
                  <small>100 minutter, 100 SMS og 100 MMS</small>
                </div>
              </div>
              <div class="reviews text-right">
                <div class="rating-circle">
                  <ul>
                    <li class="green">
                      <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                      </span>
                    </li>
                    <li class="green">
                      <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                      </span>
                    </li>
                    <li class="green">
                      <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                      </span>
                    </li>
                    <li class="green">
                      <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                      </span>
                    </li>
                    <li>
                      <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                      </span>
                    </li>
                  </ul>
                </div>
                <small>
                  <a href="">670 omtaler</a>
                </small>
              </div>
              <div class="date">
                <div class="content text-right full-width">
                  1 GB
                  <small>pr. mnd</small>
                </div>
              </div>
              <div class="price">
                <div class="content text-right full-width">
                  199 kr
                  <small>pr. mnd</small>
                </div>
              </div>
              <div class="action text-right">
                <a href="https://google.com.co" class="btn btn-yellow btn-shadow">Bestill
                  <span class="icon-proguiden-open-link"></span>
                </a>
              </div>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
              <div class="row">
                <div class="flex-box">
                  <div class="col-xs-12 col-sm-6">
                    <div class="box-left">
                      <div class="header-box-panel">
                        <img src="{{ asset('/assets/images/mobile-img-min.jpg', env('REDIRECT_HTTPS')) }}" alt="" class="img-responsive">
                      </div>
                      <div class="content-box-panel">
                        <p>Trygg mobilabonnementene fra Talkmore er for barn og ungdom under 21 år. Mobilabonnementet gir oversiktlig
                          og forutsigbar bruk ved at det sperrer for overforbruk av data og dyre innholdstjenester. Fri tale,
                          SMS og MMS i er inkludert i Norge og EU/EØS.</p>
                        <div class="panel-group" id="accordion">
                          <div class="panel panel-inner">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1_1">
                                  For barn og ungdom under 21 år
                                  <span>
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                  </span>
                                </a>
                              </h4>
                            </div>
                            <div id="collapse1_1" class="panel-collapse collapse in">
                              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>
                          </div>
                          <div class="panel panel-inner">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2_1" class="collapsed">
                                  Automatisk sperret for dyre innholdstjenester
                                  <span>
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                  </span>
                                </a>
                              </h4>
                            </div>
                            <div id="collapse2_1" class="panel-collapse collapse">
                              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>
                          </div>
                          <div class="panel panel-inner">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3_1" class="collapsed">
                                  15% familierabatt med to eller flere abonnement
                                  <span>
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                  </span>
                                </a>
                              </h4>
                            </div>
                            <div id="collapse3_1" class="panel-collapse collapse">
                              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-3">
                    <div class="box-center">
                      <div class="header-box-panel">
                        <strong>Fritt 15 GB + EU</strong>
                      </div>
                      <div class="content-box-panel">
                        <div class="row">
                          <div class="col-xs-12 col-sm-6">
                            Pris pr. mnd
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <strong>499 kr</strong>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-6">
                            Data pr. mnd
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <strong>15 GB</strong>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-xs-12 col-sm-6">
                            Ringeminutter
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <strong>Ubegrenset</strong>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-6">
                            Antall SMS
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <strong>Ubegrenset</strong>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-6">
                            Antall MMS
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <strong>Ubegrenset</strong>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-6">
                            Inkl. bruk EU/EØS
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <strong>Ubegrenset</strong>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-6">
                            Data Rollover
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <strong>ja</strong>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-6">
                            Bindingstid
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <strong>ja</strong>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-6">
                            Mobilnett
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <strong>Nei</strong>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-3">
                    <div class="box-right">
                      <div class="header-box-panel text-center">
                        <strong>Omtaler</strong>
                      </div>
                      <div class="content-box-panel">
                        <div class="status text-center orange">
                          <i class="fa fa-meh-o" aria-hidden="true"></i> 69%
                          <small>anbefaler Talkmore</small>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-xs-12 text-center">
                            <p>Kundetilfredshet</p>
                            <div class="rating-circle">
                              <ul>
                                <li class="green">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li class="green">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li class="green">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li class="green">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li>
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                              </ul>
                            </div>
                            <small class="green">Bra!</small>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 text-center">
                            <p>Kundeservice</p>
                            <div class="rating-circle">
                              <ul>
                                <li class="green">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li class="green">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li class="green">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li class="green">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li>
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                              </ul>
                            </div>
                            <small class="green">Bra!</small>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 text-center">
                            <p>Verdi for pengene</p>
                            <div class="rating-circle">
                              <ul>
                                <li class="light-orange">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li class="light-orange">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li class="light-orange">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li class="light-orange">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li>
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                              </ul>
                            </div>
                            <small class="light-orange">Bra!</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-mobile">
            <div class="panel-heading collapsed" data-toggle="collapse" href="#collapse2">
              <div class="detail">
                <div class="arrow">
                  <i class="fa fa-chevron-up" aria-hidden="true"></i>
                </div>
              </div>
              <div class="subscription">
                <figure>
                  <img src="{{ asset('/assets/images/mobile-img.jpg', env('REDIRECT_HTTPS')) }}" clas="img-responsive" alt="">
                </figure>
                <div class="content">
                  MyPack S 100 MB
                  <small>100 minutter, 100 SMS og 100 MMS</small>
                </div>
              </div>
              <div class="reviews text-right">
                <div class="rating-circle">
                  <ul>
                    <li class="green">
                      <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                      </span>
                    </li>
                    <li class="green">
                      <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                      </span>
                    </li>
                    <li class="green">
                      <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                      </span>
                    </li>
                    <li class="green">
                      <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                      </span>
                    </li>
                    <li>
                      <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                      </span>
                    </li>
                  </ul>
                </div>
                <small>
                  <a href="">670 omtaler</a>
                </small>
              </div>
              <div class="date">
                <div class="content text-right full-width">
                  1 GB
                  <small>pr. mnd</small>
                </div>
              </div>
              <div class="price">
                <div class="content text-right full-width">
                  199 kr
                  <small>pr. mnd</small>
                </div>
              </div>
              <div class="action text-right">
                <a href="https://google.com.co" class="btn btn-yellow btn-shadow">Bestill
                  <span class="icon-proguiden-open-link"></span>
                </a>
              </div>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
              <div class="row">
                <div class="flex-box">
                  <div class="col-xs-12 col-sm-6">
                    <div class="box-left">
                      <div class="header-box-panel">
                        <img src="{{ asset('/assets/images/mobile-img-min.jpg', env('REDIRECT_HTTPS')) }}" alt="" class="img-responsive">
                      </div>
                      <div class="content-box-panel">
                        <p>Trygg mobilabonnementene fra Talkmore er for barn og ungdom under 21 år. Mobilabonnementet gir oversiktlig
                          og forutsigbar bruk ved at det sperrer for overforbruk av data og dyre innholdstjenester. Fri tale,
                          SMS og MMS i er inkludert i Norge og EU/EØS.</p>
                        <div class="panel-group" id="accordion">
                          <div class="panel panel-inner">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1_1">
                                  For barn og ungdom under 21 år
                                  <span>
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                  </span>
                                </a>
                              </h4>
                            </div>
                            <div id="collapse1_1" class="panel-collapse collapse in">
                              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>
                          </div>
                          <div class="panel panel-inner">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2_1" class="collapsed">
                                  Automatisk sperret for dyre innholdstjenester
                                  <span>
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                  </span>
                                </a>
                              </h4>
                            </div>
                            <div id="collapse2_1" class="panel-collapse collapse">
                              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>
                          </div>
                          <div class="panel panel-inner">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3_1" class="collapsed">
                                  15% familierabatt med to eller flere abonnement
                                  <span>
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                  </span>
                                </a>
                              </h4>
                            </div>
                            <div id="collapse3_1" class="panel-collapse collapse">
                              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-3">
                    <div class="box-center">
                      <div class="header-box-panel">
                        <strong>Fritt 15 GB + EU</strong>
                      </div>
                      <div class="content-box-panel">
                        <div class="row">
                          <div class="col-xs-12 col-sm-6">
                            Pris pr. mnd
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <strong>499 kr</strong>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-6">
                            Data pr. mnd
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <strong>15 GB</strong>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-xs-12 col-sm-6">
                            Ringeminutter
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <strong>Ubegrenset</strong>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-6">
                            Antall SMS
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <strong>Ubegrenset</strong>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-6">
                            Antall MMS
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <strong>Ubegrenset</strong>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-6">
                            Inkl. bruk EU/EØS
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <strong>Ubegrenset</strong>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-6">
                            Data Rollover
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <strong>ja</strong>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-6">
                            Bindingstid
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <strong>ja</strong>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-6">
                            Mobilnett
                          </div>
                          <div class="col-xs-12 col-sm-6">
                            <strong>Nei</strong>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-3">
                    <div class="box-right">
                      <div class="header-box-panel text-center">
                        <strong>Omtaler</strong>
                      </div>
                      <div class="content-box-panel">
                        <div class="status text-center orange">
                          <i class="fa fa-meh-o" aria-hidden="true"></i> 69%
                          <small>anbefaler Talkmore</small>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-xs-12 text-center">
                            <p>Kundetilfredshet</p>
                            <div class="rating-circle">
                              <ul>
                                <li class="green">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li class="green">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li class="green">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li class="green">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li>
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                              </ul>
                            </div>
                            <small class="green">Bra!</small>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 text-center">
                            <p>Kundeservice</p>
                            <div class="rating-circle">
                              <ul>
                                <li class="green">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li class="green">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li class="green">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li class="green">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li>
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                              </ul>
                            </div>
                            <small class="green">Bra!</small>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 text-center">
                            <p>Verdi for pengene</p>
                            <div class="rating-circle">
                              <ul>
                                <li class="light-orange">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li class="light-orange">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li class="light-orange">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li class="light-orange">
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                                <li>
                                  <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-star fa-stack-1x fa-inverse"></i>
                                  </span>
                                </li>
                              </ul>
                            </div>
                            <small class="light-orange">Bra!</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection