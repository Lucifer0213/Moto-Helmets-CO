@extends('layouts.customer.customer_layout')
@section('title', 'Inicio')
@section('content')
    <section class="hero-slider" style="background-image: {{url('img/customer/hero-slider/main-bg.jpg')}};">
    <div class="owl-carousel large-controls dots-inside"
      data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 7000 }">
      <div class="item">
        <div class="container padding-top-3x">
          <div class="row justify-content-center align-items-center">
            <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
              <div class="from-bottom">
                <img class="d-inline-block w-150 mb-4" src="{{url('img/pruebas/logo-shaft.jpg')}}"
                  alt="Shaft">
                <div class="h2 text-body mb-2 pt-1">Casco - Shaft Solid</div>
                <div class="h2 text-body mb-4 pb-1">Por tan solo<span class="text-medium"> $200.000</span></div>
              </div>
              <a class="btn btn-primary scale-up delay-1" href="shop-grid-ls.html">Saber mas...&nbsp;
                <i class="icon-arrow-right"></i>
              </a>
            </div>
            <div class="col-md-6 padding-bottom-2x mb-3">
              <img class="d-block mx-auto" src="{{url('img/pruebas/casco-v-10.jpeg')}}" width="350rem"
                alt="Casco">
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="container padding-top-3x">
          <div class="row justify-content-center align-items-center">
            <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
              <div class="from-bottom"><img class="d-inline-block w-150 mb-3"
                  src="{{url('img/pruebas/logo-thor.jpg')}}" alt="Sony">
                <div class="h2 text-body mb-2 pt-1">Rodilleras - Thor</div>
                <div class="h2 text-body mb-4 pb-1">Por tan solo <span class="text-medium">$60.000</span></div>
              </div>
              <a class="btn btn-primary scale-up delay-1" href="{{url('img/customer/shop-single.html')}}">Saber mas...&nbsp;
                <i class="icon-arrow-right"></i>
              </a>
            </div>
            <div class="col-md-6 padding-bottom-2x mb-3">
              <img class="d-block mx-auto" src="{{url('img/pruebas/rodilleras-v-1.jpeg')}}"
                width="350rem" alt="Thor">
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="container padding-top-3x">
          <div class="row justify-content-center align-items-center">
            <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
              <div class="from-bottom">
                <img class="d-inline-block w-150 mb-3" src="{{url('img/pruebas/logo-pro-biker.jpg')}}"
                  alt="Motorola">
                <div class="h2 text-body mb-2 pt-1">Guantes - Pro Biker</div>
                <div class="h2 text-body mb-4 pb-1">Por tan solo <span class="text-medium">$150.000</span></div>
              </div>
              <a class="btn btn-primary scale-up delay-1" href="shop-single.html">Saber mas...&nbsp;
                <i class="icon-arrow-right"></i>
              </a>
            </div>
            <div class="col-md-6 padding-bottom-2x mb-3">
              <img class="d-block mx-auto" src="{{url('img/pruebas/guantes-v-3.jpg')}}" width="350rem"
                alt="Pro Biker"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Top Categories/Deals-->
  <section class="bg-secondary container padding-top-3x padding-bottom-2x">
    <div class="row">
      <div class="col-lg-6 col-sm-6">
        <div class="card border-0 bg-white mb-30">
          <div class="card-body d-table w-100">
            <div class="d-table-cell align-middle">
              <img class="d-block w-100" src="{{url('img/pruebas/casco-v-15.jpeg')}}" width="290rem"
                height="290rem" alt="Image">
            </div>
            <div class="d-table-cell align-middle pl-2">
              <h3 class="h6 text-thin">Cascos, Chaquetas<br>
                <strong>Y mas...</strong>
              </h3>
              <h4 class="h6 d-table w-100 text-thin">
                <span class="d-table-cell align-bottom" style="line-height: 1.2;">Hasta&nbsp;</span>
                <span class="d-table-cell align-bottom h1 text-medium">50%</span>
                <span class="d-table-cell align-bottom">&nbsp;descuento</span>
              </h4>
              <a class="text-decoration-none" href="shop-grid-ls.html">Saber mas...&nbsp;
                <i class="icon-chevron-right d-inline-block align-middle text-lg"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-6">
        <div class="card border-0 bg-white mb-30">
          <div class="card-body d-table w-100">
            <div class="d-table-cell align-middle">
              <img class="d-block w-100" src="{{url('img/pruebas/coletas-v-1.jpg')}}" width="290rem"
                height="290rem" alt="Image">
            </div>
            <div class="d-table-cell align-middle pl-2">
              <h3 class="h6 text-thin">Trenzas,
                <span style='white-space: nowrap;'>Ponpones</span>
              </h3>
              <h4 class="h6 d-table w-100 text-thin">
                <span class="d-table-cell align-top text-right" style="line-height: 1.2;">Desde&nbsp;
                  <br><strong>$&nbsp;</strong>
                </span>
                <span class="d-table-cell align-top h1 text-medium">30.000</span>
              </h4>
              <a class="text-decoration-none" href="shop-grid-ls.html">Saber mas...&nbsp;
                <i class="icon-chevron-right d-inline-block align-middle text-lg"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- Popular Brands Carousel-->
  <section class="bg-white padding-top-3x padding-bottom-3x">
    <div class="container">
      <h2 class="h3 text-center mb-30 pb-3">Marcas Populares</h2>
      <div class="owl-carousel"
        data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: false, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;470&quot;:{&quot;items&quot;:3},&quot;630&quot;:{&quot;items&quot;:4},&quot;991&quot;:{&quot;items&quot;:5},&quot;1200&quot;:{&quot;items&quot;:6}} }">
        <img class="d-block w-150 opacity-75 m-auto" src="{{url('img/pruebas/logo-shaft.png')}}"
          alt="Shaft">
        <img class="d-block w-150 opacity-80 m-auto" src="{{url('img/pruebas/logo-shark.png')}}"
          alt="Shark">
        <img class="d-block w-150 opacity-75 m-auto" src="{{url('img/pruebas/logo-thor.jpg')}}"
          alt="Thor">
        <img class="d-block w-150 opacity-75 m-auto" src="{{url('img/pruebas/logo-pro-biker.jpg')}}"
          alt="Pro Biker">
        <img class="d-block w-150 opacity-75 m-auto" src="{{url('img/pruebas/logo-fox.png')}}"
          alt="Fox">
        <img class="d-block w-150 opacity-75 m-auto" src="{{url('img/pruebas/logo-mt.png')}}" alt="MT">
        <img class="d-block w-150 opacity-75 m-auto" src="{{url('img/pruebas/logo-hro.png')}}" alt="HRO">
        <img class="d-block w-150 opacity-75 m-auto" src="{{url('img/pruebas/logo-ich.png')}}"
          alt="Samsung">
      </div>
    </div>
  </section>
  <!-- Services-->
  <section class="bg-secondary container padding-top-3x padding-bottom-2x">
    <div class="row">
      <div class="col-md-4 col-sm-6 text-center mb-30">
        <img class="d-block w-90 img-thumbnail rounded mx-auto mb-4" src="{{url('img/customer/services/01.png')}}"
          alt="Shipping">
        <h6 class="mb-2">Envio Gratis a toda Bogotá</h6>
        <p class="text-sm text-muted mb-0">Por compras superiores a $200.000</p>
      </div>
      <div class="col-md-4 col-sm-6 text-center mb-30">
        <img class="d-block w-90 img-thumbnail rounded mx-auto mb-4" src="{{url('img/customer/services/02.png')}}"
          alt="Money Back">
        <h6 class="mb-2">Reembolso Garantizado</h6>
        <p class="text-sm text-muted mb-0">Antes de los 15 dias de haber comprado el producto</p>
      </div>
      <div class="col-md-4 col-sm-6 text-center mb-30">
        <img class="d-block w-90 img-thumbnail rounded mx-auto mb-4" src="{{url('img/customer/services/03.png')}}"
          alt="Support">
        <h6 class="mb-2">Atención al Cliente 24/7</h6>
        <p class="text-sm text-muted mb-0">Siendo Amigables con el Cliente</p>
      </div>

    </div>
  </section>
@endsection