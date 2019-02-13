@extends('layouts.public') @section('title', 'Tjenester - Bredbånd') @section('content')

<main class="proguiden-comparison-company-broadband">
    <section class="header-company-broadband">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumb">
                        <a href="">Tjenester</a>
                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                        <span>Bredbånd</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
                    <h1>Sammenlign alle <br><span>bredbåndsleverandører i Norge</span></h1>
                    <p>Sammenlign bredbåndpriser fra alle bredbåndsleverandører i Norge og bytt bredbåndavtale – enkelt og kostnadsfritt. Bredbåndskalkulatoren hjelper deg å finne den bredbåndsavtalen som passer akkurat deg best.</p>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                    <div class="icon">
                        <span class="icon-proguiden-broadband"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="box-form">
                        <label for="">Start ved å fylle inn boligens postnummer og adrese:</label>
                        <form action="" class="form-inline">
                            <div class="form-group">
                                <input type="text" class="form-control" id="postnummer" name="postnummer">
                                <label for="postnummer">Postnummer *</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="bostedsadresse" name="bostedsadresse">
                                <label for="bostedsadresse">Bostedsadresse |</label>
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
                            <h4>Sammenlign bredbåndspriser</h4>
                            <p>Svar på fem enkle spørsmål for å se strømkontraktene som passer akkurat deg og dine behov.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="step">
                        <span class="number">2</span>
                        <div class="content-step">
                            <h4>Velg ønsket bredbåndsavtale</h4>
                            <p>Sammenlign strømpriser fra alle strømleverandører og velg etter pris, kundetilfredshet eller miljø.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="step">
                        <span class="number">3</span>
                        <div class="content-step">
                            <h4>Spar penger på bredbånd</h4>
                            <p>Vi hjelper deg kostnadsfritt å bytte. Gjør et aktivt valg og spar penger.på å finne eller bytte leverandør.</p>
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
    new Proguiden.Controllers.CompanyBroadband();
  });
</script> 
@endsection