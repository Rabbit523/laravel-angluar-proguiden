@extends('layouts.public') @section('title', 'Hjem') @section('content')

<main class="proguiden-partner">
    <div class="container">
        <section class="partner-item">
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
        <section class="partner-item">
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
        <section class="partner-item">
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
        <section class="partner-register">
            <div class="row">
                <div class="flex-box">
                    <div class="col-xs-12 col-sm-6">
                        <div class="the-content">
                            <h2>Lorem ipsum
                                <span>dolor sit amet</span>
                            </h2>
                            <p>Lorem Ipsum er rett og slett dummytekst fra og for trykkeindustrien. Lorem Ipsum har vært bransjens
                                standard for dummytekst helt siden 1500-tallet.
                                <br>
                                <br> Lorem Ipsum har tålt tidens tann usedvanlig godt, og har i tillegg til å bestå gjennom fem
                                århundrer også tålt spranget over til elektronisk typografi uten vesentlige endringer.
                                <br>
                                <br> Lorem Ipsum er rett og slett dummytekst fra og for trykkeindustrien. Lorem Ipsum har vært
                                bransjens standard for dummytekst helt siden 1500-tallet.
                                <br>
                                <br> Lorem Ipsum har tålt tidens tann usedvanlig godt, og har i tillegg til å bestå gjennom fem
                                århundrer også tålt spranget over til elektronisk typografi uten vesentlige endringer.
                                <br>
                                <br> Lorem Ipsum er rett og slett dummytekst fra og for. Lorem Ipsum er rett og slett dummytekst
                                fra og for.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="wrapper-form">
                            <h2>Fyll ut
                                <span>søknadsskjema</span>
                            </h2>
                            <form action="">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="user-name" id="user-name" value="">
                                    <label for="user-name">Fornavn</label>
                                </div>
                                <div class="form-group success">
                                    <input type="text" class="form-control" name="user-last-name" id="user-last-name" value="">
                                    <label for="user-last-name">Etternavn</label>
                                </div>
                                <div class="form-group error">
                                    <input type="email" class="form-control" name="user-email" id="user-email" value="">
                                    <label for="user-email">E-postadresse *</label>
                                    <small>Alle e-poster vil bli sendt til denne adressen. E-postadressen offentliggjøres ikke,
                                        og brukes kun hvis du ønsker å motta et nytt passord eller nyheter og oppdateringer</small>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="user-message" id="user-message" value="" rows="3"></textarea>
                                    <label for="user-message">Skriv melding *</label>
                                </div>
                                <div class="checkbox checkbox-custom">
                                    <label>
                                        <input type="checkbox" value="">Ved å trykke "Send melding" godkjenner du
                                        <a href="" target="_blank">Personvern</a>.
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="wrapper-btn">
                                    <input type="submit" value="Send inn skjema" class="btn btn-block btn-green btn-lg">
                                </div>
                                <div class="submited-message">
                                    <p class="error-msj">Beklager! En feil har oppstått. Send oss en manuell e-post.</p>
                                    <p class="success-msj">Takk for din henvendelse! Vi vil ta kontakt i løpet av kort tid.</p>
                                </div>
                            </form>
                        </div>
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