@extends('layouts.private') @section('title', 'Hjem') @section('content')

<div class="page-container open">
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-6">
                    <div class="info-user">
                        <p class="name-user">André M. Hefner</p>
                        <span class="avatar">
                            <img src="/assets/images/avatar.svg" class="img-responsive center-block" alt="">
                        </span>
                    </div>
                    <button type="button" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <div class="page-content proguiden-customers">
        <div class="container-fluid">
            <div class="box-top">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="title">
                            <h1>Profil</h1>
                        </div>
                        <div class="breadcrumb">
                            <a href="">Oversikt</a>
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            <a href="">Brukere</a>
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            <span>Brukere</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="alert-message success">
                <p>Profilen har blitt oppdatert.</p>
                <span><a href="javascript:void(0);"><i class="fa fa-times" aria-hidden="true"></i></a></span>
            </div>
            <div class="single-wrapper">
                <div class="row">
                        <form action="">
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-block">
                                    <h2>Personinnstillinger</h2>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5">
                                                <label for="">Kundenummer</label>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5">
                                                <label for="">Fornavn</label>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5">
                                                <label for="">Etternavn</label>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5">
                                                <label for="">Fødselsdato</label>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-block">
                                    <h2>Adresseinnstillinger</h2>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5">
                                                <label for="">Adresse 1</label>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5">
                                                <label for="">Adresse 2</label>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5">
                                                <label for="">Postnummer</label>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5">
                                                <label for="">Poststed</label>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5">
                                                <label for="">Land</label>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <select name="" id="" class="form-control">
                                                    <option value="Norge">Norge</option>
                                                    <option value="Norge">Norge</option>
                                                    <option value="Norge">Norge</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-block">
                                    <h2>Kontaktinnstillinger</h2>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5">
                                                <label for="">E-post</label>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-block">
                                    <h2>Utbetalingsinnstillinger</h2>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5">
                                                <label for="">Balanse</label>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="wrapper-box-colors">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-7">
                                                            <div class="box box-green"><span>kr</span>11 000,-</div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-5">
                                                            <a href="">Se betalinger</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5">
                                                <label for="">Totalt utbetalt</label>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="wrapper-box-colors">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-7">
                                                            <div class="box box-blue"><span>kr</span>2 345,-</div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-5">
                                                            <a href="">Se betalinger</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5">
                                                <label for="">Venter godkjennning</label>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="wrapper-box-colors">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-7">
                                                            <div class="box box-orange"><span>kr</span>2 345,-</div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-5">
                                                            <a href="">Se betalinger</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5">
                                                <label for="">Kontonummer</label>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="checkbox checkbox-custom">
                                            <label>
                                                <input type="checkbox" value="">Jeg er eieren av kontoen og opplysningene ovenfor er korrekte.
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox checkbox-custom">
                                            <label>
                                                <input type="checkbox" value="">Automatisk utbetaling
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="clearfix"></div>
                                        <small>Utbetal automatisk til min bankkonto. <a href="">Les mer.</a> <br>
                                        Jeg er ansvarlig for å holde kontonummeret oppdatert til en hver tid.</small>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="radio radio-custom">
                                                    <label>
                                                        <input type="radio" name="price">500 kr
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="radio radio-custom">
                                                    <label>
                                                        <input type="radio" name="price">1000 kr
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="radio radio-custom">
                                                    <label>
                                                        <input type="radio" name="price">2000 kr
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="radio radio-custom">
                                                    <label>
                                                        <input type="radio" name="price">3000 kr
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="radio radio-custom">
                                                    <label>
                                                        <input type="radio" name="price">4000 kr
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4">
                                                <div class="radio radio-custom">
                                                    <label>
                                                        <input type="radio" name="price">5000 kr
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-xs-12">
                                <div class="form-block">
                                    <h2>Kontoinnstillinger</h2>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3 col-md-2">
                                                <label for="">Nytt passord</label>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-md-3">
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="col-xs-12 col-sm-5 col-md-7">
                                                <a href="" class="btn btn-normal btn-lg">Generer passord</a>
                                                <a href="" class="btn btn-normal btn-lg"><i class="fa fa-eye-slash" aria-hidden="true"></i>Skjul</a>
                                                <a href="" class="btn btn-normal btn-lg"><i class="fa fa-eye" aria-hidden="true"></i>Vis</a>
                                                <a href="" class="btn btn-normal btn-lg">Kanseller</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3 col-md-2">
                                                <label for="">Sessions</label>
                                            </div>
                                            <div class="col-xs-12 col-sm-9 col-md-10">
                                                <a href="" class="btn btn-normal btn-lg">Logg ut over alt</a>
                                                <small><em>Har du mistet telefonen eller lat kontoen din logge på en offentlig datamaskin? Du kan logge deg ut overalt, og forbli logget inn her.</em></small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" value="Oppdater profil
                                        " class="btn btn-green btn-lg">
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="/js/admin-portal.js"></script>
<script>
  jQuery(function () {
    new Proguiden.Controllers.adminPortal();
  });
</script> 
@endsection