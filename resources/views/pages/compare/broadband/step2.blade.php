@extends('layouts.public') @section('title', 'Tjenester - Bredbånd') @section('content')
<main class="proguiden-comparison-company-broadband">
    <section class="header-company-broadband">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumb">
                        <a href="" class="back">1. Start</a>
                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                        <a href="" class="current">2. Krav</a>
                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                        <a href="" class="forward">3. Resultater</a>
                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                        <a href="" class="forward">4. Bestill</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-8">
                    <h1>Krav til bredbåndet</h1>
                    <p>Svar på følgende tre enkle spørsmål for å se bredbåndsavtaler som passer deg best.</p>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-lg-offset-2">
                    <div class="icon">
                        <span class="icon-proguiden-broadband"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="wrapper-step step-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="comparison-step">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="content-step">
                                    <h2>1. Velg bruk</h2>
                                    <p>Skal din bredbåndsforbindelse kun brukes hjemme, eller vil du også bruke den  andre steder (f.eks. på bussen, trikken, eller sommerhuset)?</p>
                                </div>
                            </div>
                        </div>
                        <div class="step-2-1">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3">
                                                <figure>
                                                    <img src="{{ asset('assets/images/comparison-icons/house.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                                                </figure>
                                            </div>
                                            <div class="col-xs-12 col-sm-9">
                                                <h3>Hjemme</h3>
                                                <p>For deg som ønsker å bruke bredbåndet i ditt eget hjem.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3">
                                                <figure>
                                                    <img src="{{ asset('assets/images/comparison-icons/walk.png',  env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                                                </figure>
                                            </div>
                                            <div class="col-xs-12 col-sm-9">
                                                <h3>På farten</h3>
                                                <p>For deg som ønsker å bruke bredbåndet f.eks på toget.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item select">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3">
                                                <figure>
                                                    <img src="{{ asset('assets/images/comparison-icons/house-men.png',  env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                                                </figure>
                                            </div>
                                            <div class="col-xs-12 col-sm-9">
                                                <h3>Hjemme og på farten</h3>
                                                <p>For deg som ønsker å bruke bredbåndet hjemme og på toget</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="content-step">
                                    <h2>2. Hvor mange brukere er i husstanden? </h2>
                                    <p>Hvor mange personer skal bruke bredbåndsforbindelsen?<br> Velg antall så finner vi hastigheten og datamengden som passer ditt behov</p>
                                </div>
                            </div>
                        </div>
                        <div class="step-2-2">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3">
                                                <figure>
                                                    <img src="{{ asset('assets/images/comparison-icons/house.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                                                </figure>
                                            </div>
                                            <div class="col-xs-12 col-sm-9">
                                                <h3>1 bruker</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3">
                                                <figure>
                                                    <img src="{{ asset('assets/images/comparison-icons/walk.png',  env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                                                </figure>
                                            </div>
                                            <div class="col-xs-12 col-sm-9">
                                                <h3>2-3 brukere</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="item select">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3">
                                                <figure>
                                                    <img src="{{ asset('assets/images/comparison-icons/house-men.png',  env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                                                </figure>
                                            </div>
                                            <div class="col-xs-12 col-sm-9">
                                                <h3>4-5 brukere</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3">
                                                <figure>
                                                    <img src="{{ asset('assets/images/comparison-icons/house-men.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                                                </figure>
                                            </div>
                                            <div class="col-xs-12 col-sm-9">
                                                <h3>6+ brukere</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="content-step">
                                    <h2>3. Velg det du bruker bredbåndet til</h2>
                                    <p>Hva bruker du typisk din bredbåndsforbindelse til?  <br>Vi finner hastigheten og datamengden som passer ditt behov</p>
                                </div>
                            </div>
                        </div>
                        <div class="step-2-3">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="switch-control">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                <h3>Film og serier</h3>
                                            </div>
                                            <div class="col-xs-12">
                                                <p>Bredbåndet blir brukt for streaming av film og serier</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-3">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="switch-control">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                <h3>Musikk</h3>
                                            </div>
                                            <div class="col-xs-12">
                                                <p>Bredbåndet blir brukt for streaming av film og serier</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-3">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="switch-control">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                <h3>Online spill</h3>
                                            </div>
                                            <div class="col-xs-12">
                                                <p>Bredbåndet blir brukt for streaming av film og serier</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-3">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="switch-control">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                <h3>Arbeid</h3>
                                            </div>
                                            <div class="col-xs-12">
                                                <p>Bredbåndet blir brukt for streaming av film og serier</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper-btns">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <a href="{{route('compare.broadband.step1_page')}}" class="btn btn-block btn-lg prev">Gå tilbake</a>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4">
                                    <a href="{{route('compare.broadband.step3_page')}}" class="btn btn-block btn-lg next">Vis resultater</a>
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

@section('scripts')
<script src="{{ asset('/js/main.js', env('REDIRECT_HTTPS')) }}"></script>
@endsection
