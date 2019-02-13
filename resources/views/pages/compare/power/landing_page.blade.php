@extends('layouts.public') @section('title', 'Hjem') @section('content')

<main class="proguiden-comparison-company-electricity">
  <section class="header-company-electricity">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="breadcrumb">
            <a href="">1. Start </a>
            <i class="fa fa-caret-right" aria-hidden="true"></i>
            <a href="">2. Alternativer</a>
            <i class="fa fa-caret-right" aria-hidden="true"></i>
            <a href="">3. Resultater</a>
            <i class="fa fa-caret-right" aria-hidden="true"></i>
            <span> 4. Bestill</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
          <h1>Gudbrandsdal Energi AS</h1>
          <p>Gudbrandsdal Energi er en landsdekkende kraftleverandør som historisk sett har vært blant de aller billigste på
            pris. </p>
        </div>
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
          <div class="icon">
            <span class="icon-proguiden-electricity"></span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <section class="appointment-information">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="title">
            <h2>Avtaleinformasjon</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="description">
            <p>Mer informasjon om valgt strømavtale</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 hidden-xs">
          <div class="toggle-links">
            <a class="current" href="javascript:void(0);" data-target="detail">Detaljer</a> /
            <a href="javascript:void(0);" data-target="information">Informasjon</a>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="row">
        <div class="flex-box">
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="sidebar-left">
              <img src="{{ asset('/assets/images/gudbrandsdal.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
              <div class="info-company text-center">
                <span>Gudbrandsdal Energi As</span>
                <h3>Sommerspot 2018</h3>
                <span>Spotpris</span>
              </div>
              <div class="clearfix"></div>
              <div class="options text-center">
                <span class="disabled">
                  <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                    <img src="{{ asset('/assets/images/lock.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                  </a>
                </span>
                <span>
                  <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                    <img src="{{ asset('/assets/images/bill.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                  </a>
                </span>
                <span>
                  <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                    <img src="{{ asset('/assets/images/email.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                  </a>
                </span>
                <span>
                  <a href="" data-toggle="tooltip" title="Fornybar energi" data-placement="bottom">
                    <img src="{{ asset('/assets/images/ambiental.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                  </a>
                </span>
              </div>
              <div class="clearfix"></div>
              <div class="more-information text-center">
                <a href="">Mer informasjon</a>
              </div>
              <div class="clearfix"></div>
              <div class="price text-center">
                <small>Pris per dags dato</small>
                <p>60,36 øre/kWt</p>
                <small>Estimert årspris: 604 kr</small>
              </div>
              <div class="clearfix"></div>
              <a href="" class="btn btn-block btn-green">Velg avtale</a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-9">
            <div class="col-xs-12 visible-xs">
              <div class="toggle-links">
                <a class="current" href="javascript:void(0);" data-target="detail">Detaljer</a> /
                <a href="javascript:void(0);" data-target="information">Informasjon</a>
              </div>
            </div>
            <div class="content-box-right">
              <div class="company-detail">
                <h3>Detaljer</h3>
                <div class="table-responsive">
                  <table class="table">
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <td>Avtaletype</td>
                          <td>Variabel</td>
                        </tr>
                        <tr>
                          <td>Betalingstype:</td>
                          <td>Årlig</td>
                        </tr>
                        <tr>
                          <td>Bindingstid:</td>
                          <td>Ja</td>
                        </tr>
                        <tr>
                          <td>Opplastning:</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td>Nedlastning:</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td>Garanti:</td>
                          <td>Nei</td>
                        </tr>
                      </tbody>
                    </table>
                  </table>
                </div>
                <h3>Priser</h3>
                <div class="table-responsive">
                  <table class="table">
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <td>Ruterleie:</td>
                          <td>53,90 øre</td>
                        </tr>
                        <tr>
                          <td>Total månedspris:</td>
                          <td>299,00 kr</td>
                        </tr>
                        <tr>
                          <td>Etablering:</td>
                          <td>99,00 kr</td>
                        </tr>
                        <tr>
                          <td>Frakt av ruter:</td>
                          <td>45,00 kr</td>
                        </tr>
                        <tr>
                          <td>Linjeleie pr. mnd:</td>
                          <td>104,00 kr</td>
                        </tr>
                        <tr>
                          <td>Minste totalpris:</td>
                          <td>4 155 kr</td>
                        </tr>
                      </tbody>
                    </table>
                  </table>
                </div>
              </div>
              <div class="company-information">
                <h3>Informasjon</h3>
                <p>webVariabel er en strømavtale levert av Hafslund Strøm As. Avtalen er en variabel avtaletype, som tilsvarer
                  moderate og forutsigbare prisendringer gjennom året. Strømleverandøren vil varsle deg på forhånd før det
                  blir gjort endringer i prisen på strømavtalen.</p>
                <h3>Andre vilkår</h3>
                <p>Det er en forutsetning at kunden oppretter avtale om elektronisk utsendelse av faktura senest to måneder
                  etter leveransestart.
                  <br>
                  <br> Dersom elektronisk utsendelse av faktura ikke er bestilt står Hafslund Strøm fritt til å overføre avtalen
                  til Strøm med 14 dagers varsel.</p>

                <h3>Om NextGenTel AS</h3>
                <p>Gudbrandsdal Energi er en landsdekkende kraftleverandør som historisk sett har vært blant de aller billigste
                  på pris. Det skal vi fortsette med. Fra å være en liten strømleverandør i det norske strømmarkedet har
                  selskapet i løpet av de siste 8 år hatt en betydelig økning i antall nye kunder. Selskapet er nå blant
                  de 10 største strømselskapene i Norge med over 100.000 strømkunder.
                  <br>
                  <br> Selskapet ligger helt i toppsjiktet på å ha landets mest fornøyde strømkunder og har toppet Norsk Kundebarometer
                  sine kundetilfredshetsundersøkelse flere år på rad.
                  <br>
                  <br> Gudbrandsdal Energi AS ble etablert i 1916 og eies av kommunene Nord-Fron, Sør-Fron, Ringebu og Øyer.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <section class="other-deals">
    <div class="container">
      <div class="title">
        <h3>Gudbrandsdal Energi As</h3>
        <p>Liste over andre avtaler som leverandøren tilbyr.</p>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="deal">
            <img src="{{ asset('/assets/images/gudbrandsdal.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
            <div class="info-company text-center">
              <span>Gudbrandsdal Energi As</span>
              <h3>Sommerspot 2018</h3>
              <span>Spotpris</span>
            </div>
            <div class="clearfix"></div>
            <div class="options text-center">
              <span class="disabled">
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/lock.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/bill.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/email.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="Fornybar energi" data-placement="bottom">
                  <img src="{{ asset('/assets/images/ambiental.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
            </div>
            <div class="clearfix"></div>
            <div class="more-information text-center">
              <a href="">Mer informasjon</a>
            </div>
            <div class="clearfix"></div>
            <div class="price text-center">
              <small>Pris per dags dato</small>
              <p>60,36 øre/kWt</p>
              <small>Estimert årspris: 604 kr</small>
            </div>
            <div class="clearfix"></div>
            <a href="" class="btn btn-block btn-green">Velg avtale</a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="deal">
            <img src="{{ asset('/assets/images/gudbrandsdal.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
            <div class="info-company text-center">
              <span>Gudbrandsdal Energi As</span>
              <h3>Sommerspot 2018</h3>
              <span>Spotpris</span>
            </div>
            <div class="clearfix"></div>
            <div class="options text-center">
              <span class="disabled">
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/lock.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/bill.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/email.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="Fornybar energi" data-placement="bottom">
                  <img src="{{ asset('/assets/images/ambiental.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
            </div>
            <div class="clearfix"></div>
            <div class="more-information text-center">
              <a href="">Mer informasjon</a>
            </div>
            <div class="clearfix"></div>
            <div class="price text-center">
              <small>Pris per dags dato</small>
              <p>60,36 øre/kWt</p>
              <small>Estimert årspris: 604 kr</small>
            </div>
            <div class="clearfix"></div>
            <a href="" class="btn btn-block btn-green">Velg avtale</a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="deal">
            <img src="{{ asset('/assets/images/gudbrandsdal.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
            <div class="info-company text-center">
              <span>Gudbrandsdal Energi As</span>
              <h3>Sommerspot 2018</h3>
              <span>Spotpris</span>
            </div>
            <div class="clearfix"></div>
            <div class="options text-center">
              <span class="disabled">
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/lock.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/bill.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/email.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="Fornybar energi" data-placement="bottom">
                  <img src="{{ asset('/assets/images/ambiental.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
            </div>
            <div class="clearfix"></div>
            <div class="more-information text-center">
              <a href="">Mer informasjon</a>
            </div>
            <div class="clearfix"></div>
            <div class="price text-center">
              <small>Pris per dags dato</small>
              <p>60,36 øre/kWt</p>
              <small>Estimert årspris: 604 kr</small>
            </div>
            <div class="clearfix"></div>
            <a href="" class="btn btn-block btn-green">Velg avtale</a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="deal">
            <img src="{{ asset('/assets/images/gudbrandsdal.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
            <div class="info-company text-center">
              <span>Gudbrandsdal Energi As</span>
              <h3>Sommerspot 2018</h3>
              <span>Spotpris</span>
            </div>
            <div class="clearfix"></div>
            <div class="options text-center">
              <span class="disabled">
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/lock.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/bill.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/email.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="Fornybar energi" data-placement="bottom">
                  <img src="{{ asset('/assets/images/ambiental.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
            </div>
            <div class="clearfix"></div>
            <div class="more-information text-center">
              <a href="">Mer informasjon</a>
            </div>
            <div class="clearfix"></div>
            <div class="price text-center">
              <small>Pris per dags dato</small>
              <p>60,36 øre/kWt</p>
              <small>Estimert årspris: 604 kr</small>
            </div>
            <div class="clearfix"></div>
            <a href="" class="btn btn-block btn-green">Velg avtale</a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="deal">
            <img src="{{ asset('/assets/images/gudbrandsdal.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
            <div class="info-company text-center">
              <span>Gudbrandsdal Energi As</span>
              <h3>Sommerspot 2018</h3>
              <span>Spotpris</span>
            </div>
            <div class="clearfix"></div>
            <div class="options text-center">
              <span class="disabled">
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/lock.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/bill.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/email.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="Fornybar energi" data-placement="bottom">
                  <img src="{{ asset('/assets/images/ambiental.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
            </div>
            <div class="clearfix"></div>
            <div class="more-information text-center">
              <a href="">Mer informasjon</a>
            </div>
            <div class="clearfix"></div>
            <div class="price text-center">
              <small>Pris per dags dato</small>
              <p>60,36 øre/kWt</p>
              <small>Estimert årspris: 604 kr</small>
            </div>
            <div class="clearfix"></div>
            <a href="" class="btn btn-block btn-green">Velg avtale</a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="deal">
            <img src="{{ asset('/assets/images/gudbrandsdal.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
            <div class="info-company text-center">
              <span>Gudbrandsdal Energi As</span>
              <h3>Sommerspot 2018</h3>
              <span>Spotpris</span>
            </div>
            <div class="clearfix"></div>
            <div class="options text-center">
              <span class="disabled">
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/lock.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/bill.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/email.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="Fornybar energi" data-placement="bottom">
                  <img src="{{ asset('/assets/images/ambiental.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
            </div>
            <div class="clearfix"></div>
            <div class="more-information text-center">
              <a href="">Mer informasjon</a>
            </div>
            <div class="clearfix"></div>
            <div class="price text-center">
              <small>Pris per dags dato</small>
              <p>60,36 øre/kWt</p>
              <small>Estimert årspris: 604 kr</small>
            </div>
            <div class="clearfix"></div>
            <a href="" class="btn btn-block btn-green">Velg avtale</a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="deal">
            <img src="{{ asset('/assets/images/gudbrandsdal.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
            <div class="info-company text-center">
              <span>Gudbrandsdal Energi As</span>
              <h3>Sommerspot 2018</h3>
              <span>Spotpris</span>
            </div>
            <div class="clearfix"></div>
            <div class="options text-center">
              <span class="disabled">
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/lock.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/bill.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/email.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="Fornybar energi" data-placement="bottom">
                  <img src="{{ asset('/assets/images/ambiental.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
            </div>
            <div class="clearfix"></div>
            <div class="more-information text-center">
              <a href="">Mer informasjon</a>
            </div>
            <div class="clearfix"></div>
            <div class="price text-center">
              <small>Pris per dags dato</small>
              <p>60,36 øre/kWt</p>
              <small>Estimert årspris: 604 kr</small>
            </div>
            <div class="clearfix"></div>
            <a href="" class="btn btn-block btn-green">Velg avtale</a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="deal">
            <img src="{{ asset('/assets/images/gudbrandsdal.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
            <div class="info-company text-center">
              <span>Gudbrandsdal Energi As</span>
              <h3>Sommerspot 2018</h3>
              <span>Spotpris</span>
            </div>
            <div class="clearfix"></div>
            <div class="options text-center">
              <span class="disabled">
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/lock.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/bill.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="text" data-placement="bottom">
                  <img src="{{ asset('/assets/images/email.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
              <span>
                <a href="" data-toggle="tooltip" title="Fornybar energi" data-placement="bottom">
                  <img src="{{ asset('/assets/images/ambiental.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                </a>
              </span>
            </div>
            <div class="clearfix"></div>
            <div class="more-information text-center">
              <a href="">Mer informasjon</a>
            </div>
            <div class="clearfix"></div>
            <div class="price text-center">
              <small>Pris per dags dato</small>
              <p>60,36 øre/kWt</p>
              <small>Estimert årspris: 604 kr</small>
            </div>
            <div class="clearfix"></div>
            <a href="" class="btn btn-block btn-green">Velg avtale</a>
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