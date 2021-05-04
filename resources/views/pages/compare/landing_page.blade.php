@extends('layouts.public') @section('title', 'Tjenester – Landing page') @section('content')

<main class="proguiden-comparison-page">

  <section class="services-comparison">
    <div class="container">
      <div class="title text-center">
        <h2>Sammenlign tjenester.
          <span>Finn de beste og billigste tjenestene.</span>
        </h2>
        <p>Sammenlign pris, les andres erfaringer før du bytter tjeneste eller selskap.</p>
      </div>
      <div class="row">
        <article class="service power">
          <div class="icon">
            <a href="{{route('compare.power.landing_page')}}"></a>
          </div>
          <h3>
            <a href="{{route('compare.power.landing_page')}}">Strøm</a>
          </h3>
        </article>
        <article class="service credit-cards">
          <div class="icon">
            <a href="{{route('compare.credit_card.landing_page')}}"></a>
          </div>
          <h3>
            <a href="{{route('compare.credit_card.landing_page')}}">Kredittkort</a>
          </h3>
        </article>
        <article class="service mobile-subscriptions">
          <div class="icon">
            <a href="{{route('compare.mobile_phone.landing_page')}}"></a>
          </div>
          <h3>
            <a href="{{route('compare.mobile_phone.landing_page')}}">Mobiltelefoni</a>
          </h3>
        </article>
        <article class="service broadband">
          <div class="icon">
            <a href="{{route('compare.broadband.landing_page')}}"></a>
          </div>
          <h3>
            <a href="{{route('compare.broadband.landing_page')}}">Bredbånd</a>
          </h3>
        </article>
        <article class="service consumer-loan">
          <div class="icon">
            <a href=""></a>
          </div>
          <h3>
            <a href="">Forbrukslån</a>
          </h3>
        </article>
      </div>
    </div>
  </section>

  <div class="clearfix"></div>

  <section class="products-comparison">
    <div class="container">
      <div class="title text-center">
        <h2>Sammenligningsportal for tjenester og produkter</h2>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-3 text-center">
          <article class="product balance">
            <div class="icon"></div>
            <h3>Sammenlign tjenester</h3>
            <p>Lorem ipsum dolor sit amet consectetur ipsum dolor remi</p>
          </article>
        </div>
        <div class="col-xs-12 col-sm-3 text-center">
          <article class="product industries">
            <div class="icon"></div>
            <h3>Vurder selskaper</h3>
            <p>Lorem ipsum dolor sit amet consectetur ipsum dolor remi</p>
          </article>
        </div>
        <div class="col-xs-12 col-sm-3 text-center">
          <article class="product cash-back">
            <div class="icon"></div>
            <h3>Få Cashback</h3>
            <p>Lorem ipsum dolor sit amet consectetur ipsum dolor remi</p>
          </article>
        </div>
        <div class="col-xs-12 col-sm-3 text-center">
          <article class="product share-experiences">
            <div class="icon"></div>
            <h3>Del erfaringer</h3>
            <p>Lorem ipsum dolor sit amet consectetur ipsum dolor remi</p>
          </article>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection