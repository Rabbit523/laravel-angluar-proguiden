@extends('layouts.public') @section('title', 'Hjem') @section('content')

<main class="proguiden-settings">
    <section class="settings-form">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <h1>Innstillinger</h1>
                    <h2>Profilbilde</h2>
                    <form action="">
                        <div class="avatar-box">
                            <div class="row">
                                <div class="col-xs-4 col-sm-2">
                                    <a href="">
                                        <img src="{{ asset('/assets/images/avatar.svg', env('REDIRECT_HTTPS')) }}" class="img-fluid center-block" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-10">
                                    <h3>Last opp et bilde</h3>
                                    <p>Maksimum opplastningsstørrelse er 500KB, JPG, PNG, JPEG.</p>
                                </div>
                            </div>
                        </div>

                        <h2>Kontoinformasjon</h2>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="fornavn" name="fornavn">
                                    <label for="fornavn" class="">Fornavn</label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="etternavn" name="etternavn">
                                    <label for="etternavn" class="">Etternavn</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="e-postadresse" name="e-postadresse">
                                    <label for="e-postadresse" class="">E-postadresse</label>
                                    <small>Alle e-poster vil bli sendt til denne adressen. E-postadressen offentliggjøres ikke, og brukes kun hvis du ønsker å motta et nytt passord eller nyheter og oppdateringer</small>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-xs-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" id="nytt-passord" name="nytt-passord">
                                    <label for="nytt-passord" class="">Nytt Passord</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" id="bekreft-passord" name="bekreft-passord">
                                    <label for="bekreft-passord" class="">Bekreft Passord</label>
                                    <small>Skriv inn det nye passordet i begge felter for å endre ditt nåværende passord.</small>
                                </div>
                                <hr>
                            </div>
                        </div>

                        <h2>Personverninnstillinger</h2>

                        <div class="checkbox checkbox-custom">
                            <label>
                                <input type="checkbox" value="">Ikke overfør data til statistikk- og analyseverktøy.
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <hr>

                        <input type="submit" value="Lagre innstillinger" class="btn btn-block btn-green btn-lg">
                    </form>
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
            new Proguiden.Controllers.settings();
        });
    </script>
@endsection