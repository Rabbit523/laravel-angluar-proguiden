@extends('layouts.public') @section('title', 'Om oss') @section('content')

<main class="proguiden-about-us">
    <div class="container">
        <section class="about-us-item">
            <div class="row">
                <div class="col-xs-12 col-sm-5">
                    <div class="content-text">
                        <h2>Lorem ipsum
                            <span>dolor sit amet</span>
                        </h2>
                        <p>Lorem Ipsum er rett og slett dummytekst fra og for trykkeindustrien. Lorem Ipsum har vært bransjens
                            standard for dummytekst helt siden 1500-tallet.
                            <br>
                            <br> Lorem Ipsum har tålt tidens tann usedvanlig godt, og har i tillegg til å bestå gjennom fem århundrer
                            også tålt spranget over til elektronisk typografi uten vesentlige endringer.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7">
                    <figure>
                        <img src="assets/images/placeholder.jpg" class="img-responsive center-block" alt="">
                    </figure>
                </div>
            </div>
        </section>
        <section class="about-us-item">
            <div class="row">
                <div class="col-xs-12 col-sm-7">
                    <figure>
                        <img src="assets/images/placeholder.jpg" class="img-responsive center-block" alt="">
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-5">
                    <div class="content-text">
                        <h2>Lorem ipsum
                            <span>dolor sit amet</span>
                        </h2>
                        <p>Lorem Ipsum er rett og slett dummytekst fra og for trykkeindustrien. Lorem Ipsum har vært bransjens
                            standard for dummytekst helt siden 1500-tallet.
                            <br>
                            <br> Lorem Ipsum har tålt tidens tann usedvanlig godt, og har i tillegg til å bestå gjennom fem århundrer
                            også tålt spranget over til elektronisk typografi uten vesentlige endringer.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-us-item">
            <div class="row">
                <div class="col-xs-12 col-sm-5">
                    <div class="content-text">
                        <h2>Lorem ipsum
                            <span>dolor sit amet</span>
                        </h2>
                        <p>Lorem Ipsum er rett og slett dummytekst fra og for trykkeindustrien. Lorem Ipsum har vært bransjens
                            standard for dummytekst helt siden 1500-tallet.
                            <br>
                            <br> Lorem Ipsum har tålt tidens tann usedvanlig godt, og har i tillegg til å bestå gjennom fem århundrer
                            også tålt spranget over til elektronisk typografi uten vesentlige endringer.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7">
                    <figure>
                        <img src="assets/images/placeholder.jpg" class="img-responsive center-block" alt="">
                    </figure>
                </div>
            </div>
        </section>
        <section class="about-us-information">
            <div class="row">
                <div class="col-xs-12 col-sm-3">
                    <div class="item">
                        <h3>Besøksadresse</h3>
                        <p>Pilestredet park 1
                            <br> 0176 OSLO</p>
                        <a href="">Se kart</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="item">
                        <h3>Kontakt oss</h3>
                        <p>E-post:
                            <a href="">post@proguiden.no</a>
                        </p>
                        <div class="social-net">
                            <ul>
                                <li>
                                    <a href="">
                                        <span class="fa-stack">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="fa-stack">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="fa-stack">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a href="">Slik ivaretar vi ditt personvern</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="item">
                        <h3>Postadresse</h3>
                        <p>ProGuiden AS
                            <br> Postboks 333 Sentrum
                            <br> 0333 OSLO</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="item">
                        <h3>ProGuiden AS</h3>
                        <p>Org.nr: 920 448 348
                            <br> Bankkonto: XXXX XX XXXXX
                            <br> IBAN: NOXXXXXXXXXXXXX
                            <br> SWIFT: DNBANOKKXXX
                            <br> Faktura:
                            <a href="">faktura@proguiden.no</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
@section('scripts')
    <script src="js/main.js"></script>
    <script>
        jQuery(function () {
            new Proguiden.Controllers.contactUs();
        });
    </script>
@endsection