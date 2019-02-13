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
                        <a href="" class="back">4. Bestill</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-8">
                    <h1>Takk for din bestilling!</h1>
                    <p>Din bestilling er mottatt og du vil bli flyttet til <br>
                        din nye strømleverandør i løpet av to til tre uker.</p>
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
    <section class="wrapper-step step-6">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="title">
                        <h2>Ordrebekreftelse</h2>
                        <p>Du skal også ha mottatt ordrebekreftelsen på e-post - <a href="">Send på nytt</a></p>
                    </div>

                    <div class="wrapper-table">
                        <div class="title-table">
                            <div class="row">
                                <div class="col-xs-12 col-sm-10">
                                    <p>Gudbrandsdal Energi As</p>
                                    <h3>Sommerspot 2018</h3>
                                </div>
                                <div class="col-xs-12 col-sm-2">
                                    <img src="{{ asset('assets/images/gudbrandsdal.jpg', env('REDIRECT_HTTPS')) }}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                        <h4>Personalia</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Fullt navn:</td>
                                        <td>Nohman Janjua</td>
                                    </tr>
                                    <tr>
                                        <td>Fødselsdato:</td>
                                        <td>06.09.1990</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h4>Kontaktinformasjon</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>E-postadresse:</td>
                                        <td>nohman@fantasylab.no</td>
                                    </tr>
                                    <tr>
                                        <td>Telefonnummer:</td>
                                        <td>45494649</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h4>Måler 1:</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Adresse:</td>
                                        <td>Traverveien 11</td>
                                    </tr>
                                    <tr>
                                        <td>Sted:</td>
                                        <td>0588 Oslo</td>
                                    </tr>
                                    <tr>
                                        <td>Målepunkt-ID:</td>
                                        <td>XXXXXXXX</td>
                                    </tr>
                                    <tr>
                                        <td>Målerstand:</td>
                                        <td>XXXXXXXX</td>
                                    </tr>
                                    <tr>
                                        <td>Avlesningsdato:</td>
                                        <td>20.07.18</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="other-services">
                <div class="title">
                    <div class="row">
                        <div class="col-xs-12">
                            <h4>
                                Sammenlign flere tjenester.
                                <span>Finn de beste og billigste tjenestene.</span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <article class="service">
                            <figure>
                            <a href=""><i class="icon-proguiden-credit-card"></i></a>
                            </figure>
                            <h3>
                            <a href="">Kredittkort</a>
                            </h3>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <article class="service">
                            <figure>
                                <a href=""><i class="icon-proguiden-mobile"></i></a>
                            </figure>
                            <h3>
                            <a href="">Mobiltelefoni</a>
                            </h3>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <article class="service">
                            <figure>
                                <a href=""><i class="icon-proguiden-broadband"></i></a>
                            </figure>
                            <h3>
                            <a href="">Bredbånd</a>
                            </h3>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <article class="service">
                            <figure>
                                <a href=""><i class="icon-proguiden-paper"></i></a>
                            </figure>
                            <h3>
                            <a href="">Forbrukslån</a>
                            </h3>
                        </article>
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