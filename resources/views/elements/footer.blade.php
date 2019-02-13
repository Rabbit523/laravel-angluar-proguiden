<footer>
    <div class="container">
      <div class="top-footer">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-8">
            <div class="menu-footer">
              <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-2">
                  <ul>
                    <strong>PROGUIDEN</strong>
                    <li>
                      <a href="{{route('home')}}">Hjem</a>
                    </li>
                    <li>
                      <a href="{{route('about_us')}}">Om oss</a>
                    </li>
                    <li>
                      <a href="{{route('partner')}}">Bli Partner</a>
                    </li>
                    <li>
                      <a href="{{route('contact')}}">Kontakt</a>
                    </li>
                  </ul>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-2">
                  <ul>
                    <strong>SHOPPING</strong>

                    <li>
                      <a href="">Mobil og nettbrett</a>
                    </li>
                    <li>
                      <a href="">Data og datautstyr</a>
                    </li>
                    <li>
                      <a href="">Lyd og bilde</a>
                    </li>
                    <li>
                      <a href="">Spill og spillutstyr</a>
                    </li>
                    <li>
                      <a href="{{route('compare.landing_page')}}">Vis alle...</a>
                    </li>
                  </ul>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-2">
                  <ul>
                    <strong>TJENESTER</strong>

                    <li>
                      <a href="{{route('compare.power.landing_page')}}">Strøm</a>
                    </li>
                    <li>
                      <a href="{{route('compare.credit_card.landing_page')}}">Kredittkort</a>
                    </li>
                    <li>
                      <a href="{{route('compare.mobile_phone.landing_page')}}">Mobiltelefoni</a>
                    </li>
                    <li>
                      <a href="{{route('compare.broadband.landing_page')}}">Bredbånd</a>
                    </li>
                    <li>
                      <a href="">Forbrukslån</a>
                    </li>
                  </ul>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-2">
                  <ul>
                    <strong>RABATTER</strong>

                    <li>
                      <a href="">Pierre Robert</a>
                    </li>
                    <li>
                      <a href="">Ellos</a>
                    </li>
                    <li>
                      <a href="">CDON</a>
                    </li>
                    <li>
                      <a href="">EVO Fitness</a>
                    </li>
                    <li>
                      <a href="{{route('discount.landing_page')}}">Vis alle...</a>
                    </li>
                  </ul>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-2">
                  <ul>
                    <strong>CASHBACK</strong>
                    @guest
                    <li>
                      <a href="{{route('login')}}">Logg inn</a>
                    </li>
                    <li>
                      <a href="{{route('register')}}">Bli medlem</a>
                    </li>
                    @endguest
                    <li>
                      <a href="">Min profil</a>
                    </li>
                    <li>
                      <a href="{{route('cashback.my_profile.payout')}}">Utbetaling</a>
                    </li>
                    @auth
                    <li>
                      <a href="{{route('cashback.my_profile.payout')}}">Innstillinger</a>
                    </li>
                    <li>
                      <a href="{{route('logout')}}">Logg ut</a>
                    </li>
                    @endauth
                  </ul>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-2">
                  <ul>
                    <strong>PARTNERE</strong>

                    <li>
                      <a href="http://bestcall.no/" target="_blank">BestCall</a>
                    </li>
                    <li>
                      <a href="https://www.hardworkout.no/" target="_blank">Hardworkout</a>
                    </li>
                    <li>
                      <a href="http://topcredit.no/" target="_blank">TopCredit</a>
                    </li>
                    <li>
                      <a href="https://fantasylab.no/" target="_blank">FantasyLab</a>
                    </li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4">
            <a class="brand" href="index.html">
              <strong>PROGUIDEN</strong>
              DE BESTE PRODUKTENE. LITT BILLIGERE!
            </a>
          </div>
        </div>
      </div>
      <div class="bot-footer">
        <div class="row">
          <div class="col-xs-12 col-sm-2 col-md-4">
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
          </div>
          <div class="col-xs-12 col-sm-10 col-md-8">
            <div class="legal">
              <p>© 2018 ProGuiden - De beste produktene, litt billigere!
                <span>
                  <i class="fa fa-circle" aria-hidden="true"></i>
                </span> Vilkår & Personvern</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>