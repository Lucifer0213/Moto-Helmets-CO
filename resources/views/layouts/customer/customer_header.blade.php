<!-- Header-->
  <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
  <header class="site-header navbar-sticky">
    <!-- Topbar-->
    <div class="topbar d-flex justify-content-between">
      <!-- Logo-->
      <div class="site-branding d-flex">
        <a class="site-logo align-self-center" href="index.html">
          <img src="{{url('L-moto-helment-large.png')}}" alt="Moto Helmets CO">
        </a>
      </div>
      <!-- Search / Categories-->
      <div class="search-box-wrap d-flex">
        <div class="search-box-inner align-self-center">
          <div class="search-box d-flex">
            <div class="btn-group categories-btn">
              <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                <i class="icon-menu text-lg"></i>&nbsp;Categorias
              </button>
              <div class="dropdown-menu mega-dropdown">
                <div class="row">
                  <div class="col-sm-3">
                    <a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html">
                      <img class="d-block" src="{{url('img/pruebas/casco-v-1.jpg')}}">
                      <span class="text-gray-dark">Cascos</span>
                    </a>
                  </div>
                  <div class="col-sm-3">
                    <a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html">
                      <img class="d-block" src="{{url('img/pruebas/chalecos-v-1.jpg')}}">
                      <span class="text-gray-dark">Chalecos &amp; Inpermeables</span>
                    </a>
                  </div>
                  <div class="col-sm-3">
                    <a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html">
                      <img class="d-block" src="{{url('img/pruebas/guantes-v-1.jpg')}}">
                      <span class="text-gray-dark">Guantes &amp; Mascarillas</span>
                    </a>
                  </div>
                  <div class="col-sm-3">
                    <a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html">
                      <img class="d-block" src="{{url('img/pruebas/coletas-v-1.jpg')}}">
                      <span class="text-gray-dark">Accessorios &amp; Mas...</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <form class="input-group" method="get">
              <span class="input-group-btn">
                <button type="submit"><i class="icon-search"></i></button>
              </span>
              <input class="form-control" type="search" placeholder="Busca lo que necesites">
            </form>
          </div>
        </div>
      </div>
      <!-- Toolbar-->
      <div class="toolbar d-flex">
        <div class="toolbar-item visible-on-mobile mobile-menu-toggle">
          <a href="#">
            <div>
              <i class="icon-menu"></i>
              <span class="text-label">Menu</span>
            </div>
          </a>
        </div>
        <div class="toolbar-item">
          <a href="cart.html">
            <div>
              <span class="cart-icon">
                <i class="icon-shopping-cart"></i>
                <span class="count-label">3 </span>
              </span>
              <span class="text-label">Carrito</span>
            </div>
          </a>
          <div class="toolbar-dropdown cart-dropdown widget-cart hidden-on-mobile">
            <!-- Entry-->
            <div class="entry">
              <div class="entry-thumb">
                <a href="shop-single.html"><img src="{{url('img/pruebas/casco-v-12.jpeg')}}" alt="Product"></a>
              </div>
              <div class="entry-content">
                <h4 class="entry-title">
                  <a href="shop-single.html">Casco Shaft</a>
                </h4>
                <span class="entry-meta">1 x $500.000</span>
              </div>
              <div class="entry-delete">
                <i class="icon-x"></i>
              </div>
            </div>
            <!-- Entry-->
            <div class="entry">
              <div class="entry-thumb">
                <a href="shop-single.html"><img src="{{url('img/pruebas/guantes-v-2.jpg')}}" alt="Product"></a>
              </div>
              <div class="entry-content">
                <h4 class="entry-title">
                  <a href="shop-single.html">Guantes Fox</a>
                </h4>
                <span class="entry-meta">1 x $100.000</span>
              </div>
              <div class="entry-delete">
                <i class="icon-x"></i>
              </div>
            </div>
            <!-- Entry-->
            <div class="entry">
              <div class="entry-thumb">
                <a href="shop-single.html"><img src="{{url('img/pruebas/coletas-v-2.jpeg')}}" alt="Product"></a>
              </div>
              <div class="entry-content">
                <h4 class="entry-title">
                  <a href="shop-single.html">Trensas de Mujer</a>
                </h4>
                <span class="entry-meta">1 x $40.000</span>
              </div>
              <div class="entry-delete">
                <i class="icon-x"></i>
              </div>
            </div>
            <!-- Subtotal -->
            <div class="text-right">
              <p class="text-gray-dark py-2 mb-0">
                <span class='text-muted'>Subtotal:</span> &nbsp;$600.000
              </p>
            </div>
            <!-- buttons -->
            <div class="d-flex">
              <div class="pr-2 w-50">
                <a class="btn btn-secondary btn-sm btn-block mb-0" href="cart.html">Mostrar mas...</a>
              </div>
              <div class="pl-2 w-50">
                <a class="btn btn-primary btn-sm btn-block mb-0" href="checkout.html">Finalizar</a>
              </div>
            </div>
          </div>
        </div>
        <div class="toolbar-item hidden-on-mobile">
          <a href="{{route('login')}}">
            <div>
              <i class="icon-user"></i>
              <span class="text-label">Iniciar Sesion</span>
            </div>
          </a>
        </div>
      </div>
      <!-- Mobile Menu-->
      <div class="mobile-menu">
        <!-- Search Box-->
        <div class="mobile-search">
          <form class="input-group" method="get">
            <span class="input-group-btn">
              <button type="submit"><i class="icon-search"></i></button>
            </span>
            <input class="form-control" type="search" placeholder="Busca lo que necesites">
          </form>
        </div>
        <!-- Toolbar-->
        <div class="toolbar">
          <div class="toolbar-item">
            <a href="{{ route('login') }}">
              <div>
                <i class="icon-user"></i>
                <span class="text-label">Iniciar Sesion</span>
              </div>
            </a>
          </div>
        </div>
        <!-- Slideable (Mobile) Menu-->
        <nav class="slideable-menu">
          <ul class="menu" data-initial-height="385">
            <li class="has-children active">
              <span>
                <a href="index.html">Inicio</a>
              </span>
            </li>
            <li class="has-children">
              <span>
                <a href="index.html">Productos</a>
              </span>
            </li>
            <li class="has-children">
              <span>
                <a href="index.html">Contacto</a>
              </span>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- Navbar-->
    <div class="navbar">
      <div class="btn-group categories-btn">
        <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
          <i class="icon-menu text-lg"></i>&nbsp;Categorias
        </button>
        <div class="dropdown-menu mega-dropdown">
          <div class="row">
            <div class="col-sm-3">
              <a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html">
                <img class="d-block" src="{{url('img/pruebas/casco-v-1.jpg')}}">
                <span class="text-gray-dark">Cascos</span>
              </a>
            </div>
            <div class="col-sm-3">
              <a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html">
                <img class="d-block" src="{{url('img/pruebas/chalecos-v-1.jpg')}}">
                <span class="text-gray-dark">Chalecos &amp; Inpermeables</span>
              </a>
            </div>
            <div class="col-sm-3">
              <a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html">
                <img class="d-block" src="{{url('img/pruebas/guantes-v-1.jpg')}}">
                <span class="text-gray-dark">Guantes &amp; Mascarillas</span>
              </a>
            </div>
            <div class="col-sm-3">
              <a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html">
                <img class="d-block" src="{{url('img/pruebas/coletas-v-1.jpg')}}">
                <span class="text-gray-dark">Accessorios &amp; Mas...</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Main Navigation-->
      <nav class="site-menu">
        <ul>
          <li class="active">
            <a href="index.html">Inicio</a>
          </li>
          <li class="">
            <a href="index.html">Productos</a>
          </li>
          <li class="">
            <a href="index.html">Contacto</a>
          </li>
        </ul>
      </nav>
      <!-- Toolbar ( Put toolbar here only if you enable sticky navbar )-->
      <div class="toolbar">
        <div class="toolbar-inner">
          <div class="toolbar-item">
            <a href="cart.html">
              <div>
                <span class="cart-icon">
                  <i class="icon-shopping-cart"></i>
                  <span class="count-label">3 </span>
                </span>
                <span class="text-label">Carrito</span>
              </div>
            </a>
            <div class="toolbar-dropdown cart-dropdown widget-cart hidden-on-mobile">
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb">
                  <a href="shop-single.html"><img src="{{url('img/pruebas/casco-v-12.jpeg')}}" alt="Product"></a>
                </div>
                <div class="entry-content">
                  <h4 class="entry-title">
                    <a href="shop-single.html">Casco Shaft</a>
                  </h4>
                  <span class="entry-meta">1 x $500.000</span>
                </div>
                <div class="entry-delete">
                  <i class="icon-x"></i>
                </div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb">
                  <a href="shop-single.html"><img src="{{url('img/pruebas/guantes-v-2.jpg')}}" alt="Product"></a>
                </div>
                <div class="entry-content">
                  <h4 class="entry-title">
                    <a href="shop-single.html">Guantes Fox</a>
                  </h4>
                  <span class="entry-meta">1 x $100.000</span>
                </div>
                <div class="entry-delete">
                  <i class="icon-x"></i>
                </div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb">
                  <a href="shop-single.html"><img src="{{url('img/pruebas/coletas-v-2.jpeg')}}" alt="Product"></a>
                </div>
                <div class="entry-content">
                  <h4 class="entry-title">
                    <a href="shop-single.html">Trensas de Mujer</a>
                  </h4>
                  <span class="entry-meta">1 x $40.000</span>
                </div>
                <div class="entry-delete">
                  <i class="icon-x"></i>
                </div>
              </div>
              <!-- Subtotal -->
              <div class="text-right">
                <p class="text-gray-dark py-2 mb-0">
                  <span class='text-muted'>Subtotal:</span> &nbsp;$600.000
                </p>
              </div>
              <!-- buttons -->
              <div class="d-flex">
                <div class="pr-2 w-50">
                  <a class="btn btn-secondary btn-sm btn-block mb-0" href="cart.html">Mostrar mas...</a>
                </div>
                <div class="pl-2 w-50">
                  <a class="btn btn-primary btn-sm btn-block mb-0" href="checkout.html">Finalizar</a>
                </div>
              </div>
            </div>
          </div>
          <div class="toolbar-item hidden-on-mobile">
            <a href="{{route('login')}}">
              <div>
                <i class="icon-user"></i>
                <span class="text-label">Iniciar Sesion</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>