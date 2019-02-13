@extends('layouts.public') @section('title', 'Hjem') @section('content')

<main class="proguiden-comparison-credit-card">
    <section class="header-credit-card">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumb">
                        <a href="">Tjenester </a>
                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                        <span>Forbrukslån</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
                    <h1>Sammenlign alle kort på markedet.
                        <br> Beste kredittkort
                        <span>juni 2018.</span>
                    </h1>
                    <p>Sammenlign alle kredittkort på markedet,
                        <br> og finn det beste lånet til dit behov.</p>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 text-right">
                    <div class="icon">
                        <span class="icon-proguiden-paper"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="filter-box">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="box-slider-widget">
                                <span class="label-left">LÅNEBELØP</span>
                                <span class="label-right"><strong>500 000 kr</strong></span>
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
                                <span class="indicator left">0 kr</span>
                                <span class="indicator right">1 000 000 +</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="box-slider-widget">
                                <span class="label-left">LÅNETID (ÅR)</span>
                                <span class="label-right"><strong>6 år</strong></span>
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
                                <span class="indicator left">0 år</span>
                                <span class="indicator right">15 år</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="box-slider-widget">
                                <span class="label-left">DIN ALDER</span>
                                <span class="label-right"><strong>90 år</strong></span>
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
                                <span class="indicator left">0 år</span>
                                <span class="indicator right">90 år</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-md-offset-1">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-custom">
                                <label>
                                    <input type="checkbox" value="">Lokal og regional
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-custom">
                                <label>
                                    <input type="checkbox" value="">Landsdekkende
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-custom">
                                <label>
                                    <input type="checkbox" value="">Inkluder fordelsprogram
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="items-show">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <strong>Viser 5 av 371 forbrukslån</strong>
                </div>
                <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-2 col-md-offset-6">
                    <div class="form-group label-green-arrow">
                        <label for="">Sorter etter</label>
                        <select name="" id="" class="form-control">
                            <option value="">Alle forbrukslån</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="loan-banks">
        <div class="container">
            <div class="header-list">
                <div class="bank">Forbrukslån</div>
                <div class="reviews text-right">Omtaler</div>
                <div class="max-credit text-right">Maks kreditt</div>
                <div class="age text-right">Alder</div>
                <div class="interest-rate text-right">Eff. rente</div>
                <div class="est-fee text-right">Etabl. gebyr</div>
                <div class="actions text-right">Søk kredittkort</div>
            </div>
            <div class="loan">
                <div class="info-top">
                    <div class="bank">
                        <div class="figure">
                            <img src="{{ asset('assets/images/santander.jpg', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                        </div>
                        <div class="content">
                            Santander Bank
                            <small>Beste forbrukslån under 70 000</small>
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
                            <a href="">249 omtaler</a>
                        </small>
                    </div>
                    <div class="max-credit text-right">10 000 - 350 000 kr
                        <small>kredittgrense</small>
                    </div>
                    <div class="age text-right">18 år
                        <small>alder</small>
                    </div>
                    <div class="interest-rate text-right">25,40 %
                        <small>Eff. rente</small>
                    </div>
                    <span class="clearfix visible-xs"></span>
                    <div class="est-fee text-right">950 kr
                        <small>Etabl. gebyr</small>
                    </div>
                    <div class="actions text-right">
                        <a href="" class="btn btn-block btn-yellow btn-shadow">Søk nå
                            <span class="icon-proguiden-open-link"></span>
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="info-bot">
                    <div class="probided-by">
                        <img src="{{ asset('assets/images/finans.png', env('REDIRECT_HTTPS')) }}" class="img-responsive" alt="">
                    </div>
                    <div class="info-card">
                        <span>
                            Eff.rente: 16,17 %. <br>
                            Etabl.geb. 950 kr. 65 000 kr o/5 år.  <br>
                            Totalt 92 945 kr. Løpetid: 1-5 år. Refinans: Inntil 15 år.</span>
                    </div>
                    <div class="features text-center">
                        <span>Ingen termin-/etableringsgebyr <br>
                                under 70 000</span>
                        <span>Beste forbrukslån <br>
                                under 70 000</span>
                        <span>Lav <br>
                                minimumsrente</span>
                    </div>
                    <div class="detail">
                        <a href="{{ route('compare.consumer.detail_page', 1) }}" class="btn btn-border-blue btn-block">Detaljer</a>
                    </div>
                </div>
            </div>

            <div class="loan">
                <div class="info-top">
                    <div class="bank">
                        <div class="figure">
                            <img src="{{ asset('assets/images/komplett-mini.jpg', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                        </div>
                        <div class="content">
                            re:member kredittkort
                            <small>Svært gode shopping rabatter</small>
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
                            <a href="">249 omtaler</a>
                        </small>
                    </div>
                    <div class="max-credit text-right">10 000 - 350 000 kr
                        <small>kredittgrense</small>
                    </div>
                    <div class="age text-right">18 år
                        <small>alder</small>
                    </div>
                    <div class="interest-rate text-right">25,40 %
                        <small>Eff. rente</small>
                    </div>
                    <span class="clearfix visible-xs"></span>
                    <div class="est-fee text-right">950 kr
                        <small>Etabl. gebyr</small>
                    </div>
                    <div class="actions text-right">
                        <a href="" class="btn btn-block btn-yellow btn-shadow">Søk nå
                            <span class="icon-proguiden-open-link"></span>
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="info-bot">
                    <div class="probided-by">
                        <img src="{{ asset('assets/images/finans.png', env('REDIRECT_HTTPS')) }}" class="img-responsive" alt="">
                    </div>
                    <div class="info-card">
                        <span>Eff.rente 16,9 %. <br>
                        Etabl.geb. 640 kr. 65 000 kr o/5 år. <br>
                        Totalt 94 333 kr. Løpetid: Revolverende. </span>
                    </div>
                    <div class="features text-center">
                        <span>Testen mest fleksible  <br>
                                tilbakebetaling</span>
                        <span>Solid <br>
                                tilbudspakke</span>
                        <span>Variabelt <br>
                                etableringsgebyr</span>
                    </div>
                    <div class="detail">
                        <a href="{{ route('compare.consumer.detail_page', 1) }}" class="btn btn-border-blue btn-block">Detaljer</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

@endsection

@section('scripts')
<script src="{{ asset('/js/main.js', env('REDIRECT_HTTPS')) }}"></script>
<script>
  jQuery(function () {
    new Proguiden.Controllers.CompanyBroadband();
  });
</script> 
@endsection