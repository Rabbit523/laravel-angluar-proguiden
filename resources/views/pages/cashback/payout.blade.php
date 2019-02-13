@extends('layouts.public') @section('title', 'Hjem') @section('content')

<main class="proguiden-payout">

    <div class="container">
        <h1>Utbetaling til konto.</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="box-left">
                    <div class="alert-box show warning">
                        Fyll inn dine opplysninger og få utbetalinger til din bankkonto.
                    </div>
                    <div class="alert-box show error">
                        Fyll inn dine opplysninger og få utbetalinger til din bankkonto.
                    </div>
                    <div class="alert-box show saved">
                        Fyll inn dine opplysninger og få utbetalinger til din bankkonto.
                    </div>
                    <div class="form-wrapper">
                        <hr>
                        <form action="">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="account" id="account" value="">
                                        <label for="account">Kontonummer, 11 siffer</label>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group error">
                                        <input type="text" class="form-control" name="birthday" id="birthday" value="">
                                        <label for="birthday">Fødselsdato (dd/mm/åååå)</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="firstname" id="firstname" value="">
                                        <label for="firstname">Fornavn</label>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="surname" id="surname" value="">
                                        <label for="surname">Etternavn</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group success">
                                        <input type="text" class="form-control" name="address" id="address" value="">
                                        <label for="address">Adresselinje 1</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address_2" id="address_2" value="">
                                        <label for="address_2">Adresselinje 2 (valgfri)</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="zip_code" id="zip_code" value="">
                                        <label for="zip_code">Postnummer</label>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="city" id="city" value="">
                                        <label for="city">Poststed</label>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="country" id="country" value="Norge" disabled>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <hr>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="checkbox checkbox-custom">
                                        <label>
                                            <input type="checkbox" value="">Automatisk utbetaling
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="gray-text">Utbetal automatisk til min bankkonto.
                                        <a href="" target="_blank">Les mer.</a>
                                        <br> Jeg er ansvarlig for å holde kontonummeret oppdatert til en hver tid.</p>
                                </div>
                            </div>
                            <div class="wrapper-radios">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-2">
                                        <div class="radio radio-custom">
                                            <label>
                                                <input type="radio" name="price">500 kr
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-2">
                                        <div class="radio radio-custom">
                                            <label>
                                                <input type="radio" name="price">1000 kr
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-2">
                                        <div class="radio radio-custom">
                                            <label>
                                                <input type="radio" name="price">2000 kr
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-2">
                                        <div class="radio radio-custom">
                                            <label>
                                                <input type="radio" name="price">3000 kr
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-2">
                                        <div class="radio radio-custom">
                                            <label>
                                                <input type="radio" name="price">4000 kr
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-2">
                                        <div class="radio radio-custom">
                                            <label>
                                                <input type="radio" name="price">5000 kr
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="checkbox checkbox-custom">
                                        <label>
                                            <input type="checkbox" value="">Jeg er eieren av kontoen og opplysningene ovenfor er korrekte.
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-12">
                                    <input type="submit" value="Lagre utbetalingsinformasjon" class="btn btn-block btn-green">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                <div class="box-right">
                    <div class="green-box box">
                        <h4>Engangsutbetaling</h4>
                        <p>Du må først oppgi opplysninger om bankkonto og adresse.</p>
                    </div>
                    <div class="green-box box">
                        <h4>Engangsutbetaling</h4>
                        <p>Minimumsbeløpet er kr 250,-</p>
                    </div>
                    <div class="green-box box">
                        <h4>Engangsutbetaling</h4>
                        <p>Du har valgt automatisk utbetaling på kr X.</p>
                    </div>
                    <div class="blue-box box">
                        <h4>Tidligere utbetalinger</h4>
                        <p>Ingen tidligere utbetalinger</p>
                    </div>
                    <div class="order-total">
                        <h4>Tidligere utbetalinger</h4>
                        <p>Totalt 3 tidligere utbetalinger</p>
                        <table>
                            <thead>
                                <tr>
                                    <th>Beløp</th>
                                    <th>Kontonr.</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1 990 kr</td>
                                    <td>0539 43 42250</td>
                                    <td>Betalt</td>
                                </tr>
                                <tr>
                                    <td>11 290 kr</td>
                                    <td>0539 43 42250</td>
                                    <td>Betalt</td>
                                </tr>
                                <tr>
                                    <td>1 290 kr</td>
                                    <td>0539 43 42250</td>
                                    <td>Betalt</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>14 570 kr</td>
                                    <td colspan="2">Totalt utbetalt</td>
                                </tr>
                            </tfoot>
                        </table>
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
    new Proguiden.Controllers.payout();
  });
</script>
@endsection