<header>
    <nav class="navbar navbar-proguiden navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
            aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="{{route('home')}}" class="brand navbar-brand">
            <strong>PROGUIDEN</strong>
            DE BESTE PRODUKTENE. LITT BILLIGERE!
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Søk i ProGuiden">
            </div>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="{{route('shopping.landing_page')}}">Shopping</a>
            </li>
            <li>
              <a href="{{route('compare.landing_page')}}">Tjenester</a>
            </li>
            <li>
              @auth
                <a href="{{route('cashback.my_profile')}}">Cashback</a>
              @endauth
              @guest
                <a href="{{route('register')}}">Cashback</a>
              @endguest
            </li>
            <li>
              <a href="{{route('discount.landing_page')}}">Rabatter</a>
            </li>
            <li>
              <a href="{{route('productguide')}}">Produktguider </a>
            </li>
            <li>
              @auth
                <a href="{{route('logout')}}" class="btn btn-default navbar-btn">Logg ut</a>
              @endauth
              @guest
                <a href="{{route('login')}}" class="btn btn-default navbar-btn">Logg inn</a>
              @endguest
            </li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
</header>