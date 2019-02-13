@extends('layouts.public') @section('title', 'Hjem') @section('content')

<main class="proguiden-comparison-company-electricity">
    <section class="header-company-electricity">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumb">
                        <a href="" class="back">1. Start</a>
                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                        <a href="" class="back">2. Krav</a>
                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                        <a href="" class="back">3. Resultater</a>
                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                        <a href="" class="current">4. Bestill</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-8">
                    <h1>Måleravlesning</h1>
                    <p>Du er straks ferdig med bestillingen. <br>
                    Fyll ut målerstand og målerpunkt-ID.</p>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-lg-offset-2">
                    <div class="icon">
                        <span class="icon-proguiden-electricity"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="wrapper-step step-5">
        <div class="container">

            <div class="col-xs-12 col-sm-8 col-md-9">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wrapper-form">
                            <form action="">
                                <h2>1. Fyll inn målerinformasjon </h2>
                                <p>Vi trenger din målerstand og målepunkt-ID for å kunne fullføre din bestilling.</p>
                                <div class="form-block">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="malerstand" name="malerstand">
                                                <label for="malerstand" class="">Målerstand *</label>
                                                <p>Målerstand finner du på displayet på strømmåleren som du har i huset/leiligheten. Den viser forbruket ditt siden oppstart og dette tallet må opplyses til ny leverandør.</p>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="malepunkt-id" name="malepunkt-id">
                                                <label for="malepunkt-id" class="">Målepunkt-ID *</label>
                                                <p>Målepunkt-ID er et identifikasjonsnummer som kobler deg til din strømmåler. Du vil kunne finne dette på en tidligere strømregning. Vi trenger kun de 8 siste sifrene, da de første 10 er felles for alle.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <p class="label-form">Avlesningsdato *</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group select">
                                                <label for="" class="labelfocus">Velg dag</label>
                                                <select class="form-control" name="" id="">
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group select">
                                                <label for="" class="labelfocus">Velg måned</label>
                                                <select class="form-control" name="" id="">
                                                    <option value="September">September</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group select">
                                                <label for="" class="labelfocus">Velg år</label>
                                                <select class="form-control" name="" id="">
                                                    <option value="2018">2018</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wrapper-btns">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-5">
                                    <a href="{{route('compare.power.step4_page')}}" class="btn btn-block btn-lg prev">Gå tilbake</a>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-5 col-md-offset-2">
                                    <a href="{{route('compare.power.step6_page')}}" class="btn btn-block btn-lg next">Bestill</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <aside>
                    <h2>Valgt strømleverandør</h2>
                    <p>Endre strømavtale? <a href="">Gå tilbake</a></p>
                    <div class="sidebar">
                        <img src="{{ asset('assets/images/logo-energy.jpg', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                        <div class="info-company text-center">
                            <span>Gudbrandsdal Energi As</span>
                            <h3>Sommerspot 2018</h3>
                            <span>Spotpris</span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="options text-center">
                            <span><img src="{{ asset('assets/images/lock.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt=""></span>
                            <span><img src="{{ asset('assets/images/star.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt=""></span>
                            <span><img src="{{ asset('assets/images/coin.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt=""></span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="more-information text-center">
                            <a href="">Mer informasjon</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="price text-center">
                            <small>Pris per dags dato</small>
                            <p>60,36 øre/kWt</p>
                            <small>Estimert årspris: 604 kr</small>
                        </div>
                    </div>
                </aside>
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