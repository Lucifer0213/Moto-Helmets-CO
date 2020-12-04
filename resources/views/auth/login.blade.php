<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Moto Helmets CO | Iniciar Sesión</title>
    <link href="{{ url('css\admin\styles.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ url('favicon.ico') }}">
    <script data-search-pseudo-elements="" defer=""
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous">
    </script>
</head>

<body style="background-image: url({{url('img/fondo.jpg')}}); background-size:cover; background-repeat:no-repeat;">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                             Basic login form
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center"><img
                                        src="{{ url('L-moto-helment-large.png')}}" alt=""></div>
                                <div class="card-body">
                                   Login form
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                      Form Group (email address)
                                        <div class="form-group">
                                            <label class="small mb-1">Correo</label>
                                            <input class="form-control py-4 @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" name="email" type="email"
                                                placeholder="Ingrese su Correo" required>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                         Form Group (password)
                                        <div class="form-group">
                                            <label class="small mb-1">Password</label>
                                            <input class="form-control py-4 @error('password') is-invalid @enderror"
                                                name="password" type="password" placeholder="Ingrese su contraseña"
                                                required>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                         Form Group (remember password checkbox)
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="rememberPasswordCheck"
                                                    type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="custom-control-label"
                                                    for="rememberPasswordCheck">Recuerdame</label>
                                            </div>
                                        </div>
                                         Form Group (login box)
                                        <div
                                            class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            @if (Route::has('password.request'))
                                            <a class="small" href="{{ route('password.request') }}">Olvidaste tu
                                                Contraseña?</a>
                                            @endif
                                            <button class="btn btn-primary" type="submit">Iniciar Sesión</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="{{route('register')}}">Necesitas una cuenta?
                                            Registrate!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer mt-auto footer-light text-white">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small">Todos los derechos reservads &#xA9; Moto Helmets CO 2020</div>
                        <div class="col-md-6 text-md-right small">
                            <a href="#!">Politica de Privacidad</a>
                            &#xB7;
                            <a href="#!">Terminos &amp; Condiciones</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{url('js\admin\scripts.js')}}"></script>

    <script src="{{ url('js\admin\sb-customizer.js')}}"></script>
</body>

</html>
<!doctype html>
<html class="no-js" lang="">

 Mirrored from www.kazierfan.com/themes/pixelmarket/account.html by HTTrack Website Copier/3.x XR&CO'2014], Sat, 20 Jun 2020 12:44:10 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Moto Helmets CO | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- all css here -->
    <!-- bootstrap v3.3.7 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- slicknav.min.css -->
    <link rel="stylesheet" href="css/slicknav.min.css">
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- font-awesome v4.6.3 css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!--start preloader area-->
    <div class="loader-container circle-pulse-multiple">
        <div class="loader">
            <div id="loading-center-absolute">
                <div class="object" id="object_four"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_one"></div>
            </div>
        </div>
    </div>
    <!--End preloader area-->

    <!-- breadcumb-area start
    <div class="breadcumb-area ptb-70 bg-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcumb-wrap">
                        <h2>Iniciar Sesión</h2>
                        <ul>
                            <li><a href="index1.html">Home</a></li>
                            <li>/</li>
                            <li>Moto Helmets CO</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- breadcumb-area end -->
@extends('layouts.app')
@section('content')
    <div class="account-area ptb-70 bg-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-4">
                    <h3 class="sidebar-title">Ingrese</h3>
                    <div class="checkout-form">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                           <!-- <div class="row">
                                <div class="col-xs-12">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                    <input type="text" placeholder="Tu email aquí ..." />
                                </div>
                                <div class="col-xs-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xs-12">
                                    <input type="checkbox" />
                                    <span class="remamber">Recuérdame</span>
                                </div>
                                <div class="col-xs-12">
                                    <a href="resetPassword.html">¿Olvidaste tu clave?</a>
                                    <a href="nowUser.html">¿No tienes cuenta?</a>
                                    <button>Iniciar Sesión</button>
                                </div>
                            </div>-->
                            @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer area start -->
    <footer>
        <div class="footer-bottom bg-3">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        Copyright &copy; 2020 Moto Helmets CO. Todos los derechos reservados.
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- counterup.main.js -->
    <script src="js/counterup.main.js"></script>
    <!-- jquery.waypoints.min.js -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- jquery.slicknav.min.js -->
    <script src="js/jquery.slicknav.min.js"></script>
    <!-- jquery-ui js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>

<!-- Mirrored from www.kazierfan.com/themes/pixelmarket/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jun 2020 12:44:10 GMT -->

</html>
