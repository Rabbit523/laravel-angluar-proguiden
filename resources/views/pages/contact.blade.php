@extends('layouts.public') @section('title', 'Hjem') @section('content')

<main class="proguiden-contact">
    <div class="wrapper-page">
        <div class="container">
            <div class="row">
                <div class="flex-box">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <section class="wrapper-map">
                            <div id="map">
                                <img src="assets/images/map.jpg" class="img-responsive center-block" alt="">
                            </div>
                            <div class="info-map">
                                <h2>ProGuiden AS</h2>
                                <p>ProGuiden AS
                                    <br> Postboks 333 Sentrum
                                    <br> 0333 OSLO
                                    <br> Norge
                                </p>
                                <p>+47 XXX XX XXX</p>
                                <p>Org.nr: 920 448 348</p>
                                <a href="mailto:post@proguiden.no" target="_blank">post@proguiden.no</a>
                            </div>
                        </section>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <section class="wrapper-form">
                            <div class="title">
                                <h1>Kontakt oss</h1>
                                <p>Vi ser frem til å høre fra deg.</p>
                            </div>
                            <form action="">
                                <div class="form-group select">
                                    <label for="">Hva kan vi hjelpe deg med? *</label>
                                    <select class="form-control" name="" id="">
                                        <option value="cashback">Cashback</option>
                                    </select>
                                </div>
                                <div class="form-group success">
                                    <input type="text" class="form-control" name="user-name" id="user-name" value="">
                                    <label for="user-name">Fullt navn *</label>
                                </div>
                                <div class="form-group error">
                                    <input type="email" class="form-control" name="user-email" id="user-email" value="">
                                    <label for="user-email">E-postadresse *</label>
                                    <small>Alle e-poster vil bli sendt til denne adressen. E-postadressen offentliggjøres ikke,
                                        og brukes kun hvis du ønsker å motta et nytt passord eller nyheter og oppdateringer</small>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="user-message" id="user-message" value="" rows="4"></textarea>
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
                                    <input type="submit" value="Send melding" class="btn btn-block btn-green btn-lg">
                                </div>
                                <div class="submited-message">
                                    <p class="error-msj">Beklager! En feil har oppstått. Send oss en manuell e-post.</p>
                                    <p class="success-msj">Takk for din henvendelse! Vi vil ta kontakt i løpet av kort tid.</p>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
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