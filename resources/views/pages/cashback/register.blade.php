@extends('layouts.public') @section('title', 'Registrer') @section('content')<!doctype html>
  <main class="proguiden-bli-medlem">

    <section class="bli-medlem">
        <div class="container">
            <div class="title text-center">
                <h1>Bli medlem i dag. <br>
                    Spar penger med <span>Cashback.</span></h1>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="register-form">
                                <a href="{{route('auth', 'facebook')}}" class="btn btn-facebook btn-block">Opprett konto med Facebook</a>
                                <a href="{{route('auth', 'google')}}" class="btn btn-google btn-block">Opprett konto med Google</a>
                                <div class="separator">
                                    <p>eller</p>
                                </div>
                                <form action="">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><img src="assets/images/email-input-addon.png" alt=""></div>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="E-post">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><img src="assets/images/pass-input-addon.png" alt=""></div>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Passord">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><img src="assets/images/pass-input-addon.png" alt=""></div>
                                            <input type="password" class="form-control" id="confirm" name="confirm" placeholder="Gjenta passord">
                                        </div>
                                    </div>
                                    <input type="submit" value="Bli medlem gratis" class="btn btn-block btn-orange">
                                    <span class="note">Er du allerede medlem? <a href="{{route('login')}}">Logg inn til din konto.</a></span>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="features-section">
                                <ul>
                                    <li><span><img src="assets/images/cart.png" class="img-responsive center-block" alt=""></span><p>Bli medlem i dag og få penger tilbake i  over 250 nettbutikker.</p></li>

                                    <li><span><img src="assets/images/cashback-1.png" class="img-responsive center-block" alt=""></span><p>Få månedlig utbetaling for Cashback rett til din private bankkonto</p></li>

                                    <li><span><img src="assets/images/note.png" class="img-responsive center-block" alt=""></span><p>Ingen skjulte haker, liten skrift eller forpliktelser ved å bli medlem</p></li>

                                    <li><span><img src="assets/images/notification.png" class="img-responsive center-block" alt=""></span><p>Få valgfrie nyhetsbrev med gode tilbud og rabatter på e-post</p></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  </main>
@endsection