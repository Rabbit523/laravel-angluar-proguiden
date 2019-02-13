@extends('layouts.public') @section('title', 'Hjem') @section('content')

<main class="proguiden-comparison-company-electricity">
    <section class="header-company-electricity">
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
                    <h1>Alternativer</h1>
                    <p>Svar på følgende tre enkle spørsmål for å se strømavtale som passer deg best.</p>
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
    <section class="wrapper-step step-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="comparison-step">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="content-step">
                                    <h2>1. Velg avtaletype</h2>
                                    <p>Velg hvilke avtaletyper du vil basere resultatet ditt på.</p>
                                </div>
                            </div>
                        </div>
                        <div class="step-2-1">
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
                                                <h3>Fastpris</h3>
                                            </div>
                                            <div class="col-xs-12">
                                                <p>Fast pris i avtaleperioden basert på forbruk i kWt</p>
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
                                                <h3>Spotpris</h3>
                                            </div>
                                            <div class="col-xs-12">
                                                <p>Følger markedets oppganger og nedganger</p>
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
                                                <h3>Variabel</h3>
                                            </div>
                                            <div class="col-xs-12">
                                                <p>Moderate og forutsigbare prisendringer</p>
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
                                                <h3>Annet</h3>
                                            </div>
                                            <div class="col-xs-12">
                                                <p>Andre avtaletyper som ikke går under de førstnevnte</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="content-step">
                                    <h2>2. Angi forbruk</h2>
                                    <p>Du kan finne ditt årsforbruk på en tidligere strømregning.</p>
                                </div>
                            </div>
                        </div>

                        <div class="step-2-2">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-8 col-md-2">
                                                <strong>15 000 <span>kWt/år</span></strong>
                                            </div>
                                            <div class="col-xs-12 col-sm-8">
                                                <div class="slider-control">
                                                    <span class="control" style="left: 38%;"></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-2">
                                                <div class="switch-control">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                <h3>Vetikke</h3>
                                            </div>
                                            <div class="clearfix"></div>
                                            <hr>
                                            <div class="clearfix"></div>
                                            <div class="col-xs-12 col-sm-8 col-md-9">
                                                <p>Estimer strømforbruk på boligareal</p>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-3 text-right">
                                                <div class="switch-control">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                <p>Ekskluder oppvarming</p>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="col-xs-12">
                                                <div class="box-form">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="boligareal" name="boligareal">
                                                        <label for="boligareal" class="">Boligareal *</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="content-step">
                                    <h2>3. Velg faktureringsmetoder</h2>
                                    <p>Resultatet angis på bakgrunn av valgte faktureringsmetoder.</p>
                                </div>
                            </div>
                        </div>
                        <div class="step-2-1">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="switch-control">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                <h3>Etterskuddsvis</h3>
                                            </div>
                                            <div class="col-xs-12">
                                                <p>Betaling etter perioden - basert på faktisk pris og faktisk forbruk</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-4">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="switch-control">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                <h3>Forskuddsvis</h3>
                                            </div>
                                            <div class="col-xs-12">
                                                <p>Betaling tidligst i midten av periode - delvis basert på estimert pris og stipulert forbruk</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-4">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="switch-control">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                                <h3>Akonto</h3>
                                            </div>
                                            <div class="col-xs-12">
                                                <p>Betaling før perioden - basert på estimert pris og forbruk</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper-btns">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <a href="{{route('compare.power.step1_page')}}" class="btn btn-block btn-lg prev">Gå tilbake</a>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4">
                                    <a href="{{route('compare.power.step3_page')}}" class="btn btn-block btn-lg next">Vis resultater</a>
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
<script>
    jQuery(function () {
        new Proguiden.Controllers.comparisonElectricity();
    });
</script> 
@endsection