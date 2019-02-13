@extends('layouts.public') @section('title', 'Logg Inn') @section('content')
  <main class="proguiden-login">

    <section class="login">
        <div class="container">
            <div class="title text-center">
                <h1>Logg inn på ProGuiden</h1>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                    <div class="login-form">
                        <a href="{{route('auth', 'facebook')}}" class="btn btn-facebook btn-block">Logg inn med Facebook</a>
                        <a href="{{route('auth', 'google')}}" class="btn btn-google btn-block">Logg inn med Google</a>
                        <div class="separator">
                            <p>eller</p>
                        </div>
                        <form action="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><img src="assets/images/email-input-addon.png" alt=""></div>
                                    <input type="email" class="form-control" id="" name="" placeholder="E-post">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><img src="assets/images/pass-input-addon.png" alt=""></div>
                                    <input type="password" class="form-control" id="" name="" placeholder="Passord">
                                    <a href="" class="remember">Glemt passord?</a>
                                </div>
                            </div>
                            <div class="checkbox checkbox-custom">
                                <label>
                                    <input type="checkbox" value="">Husk meg
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <input type="submit" value="Logg inn" class="btn btn-block btn-orange">
                            <span class="note">Ikke medlem fra før? <a href="{{route('register')}}">Bli medlem nå, det er gratis.</a></span>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

  </main>
