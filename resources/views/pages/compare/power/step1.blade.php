@extends('layouts.public') @section('title', 'Hjem') @section('content')

<main class="proguiden-comparison-company-electricity">
    <section class="header-company-electricity">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumb">
                        <a href="">Tjenester </a>
                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                        <span>Strøm</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
                    <h1>Sammenlign alle <br>
                    <span>120 strømleverandører</span></h1>
                    <p>Sammenlign strømpriser fra alle strømleverandører i Norge og bytt strømavtale – enkelt og kostnadsfritt. Strømkalkulatoren hjelper deg å finne den strømavtalen som passer akkurat deg best.</p>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                    <div class="icon">
                        <span class="icon-proguiden-electricity"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="box-form">
                        <label for="">Start ved å fylle inn boligens postnummer:</label>
                        <form action="{{route('compare.power.step2_page')}}" method="GET" class="form-inline">
                            <div class="form-group">
                                <!-- <input type="text" class="form-control" id="postnummer" name="postnummer"> -->
                                <input type="text" class="form-control" id="postnummer">
                                <label for="postnummer">Postnummer *</label>
                            </div>
                            <button type="submit" class="btn btn-green">Gå videre</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="wrapper-step step-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="step">
                        <span class="number">1</span>
                        <div class="content-step">
                            <h4>Sammenlign strømpriser</h4>
                            <p>Svar på fem enkle spørsmål for å se strømkontraktene som passer akkurat deg og dine behov.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="step">
                        <span class="number">2</span>
                        <div class="content-step">
                            <h4>Velg ønsket strømavtale</h4>
                            <p>Sammenlign strømpriser fra alle strømleverandører og velg etter pris, kundetilfredshet eller miljø.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="step">
                        <span class="number">3</span>
                        <div class="content-step">
                            <h4>Spar penger på strøm</h4>
                            <p>Vi hjelper deg kostnadsfritt å bytte. Gjør et aktivt valg og spar penger. på å finne eller bytte leverandør.</p>
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