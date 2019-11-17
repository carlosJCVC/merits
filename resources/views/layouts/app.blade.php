<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FCYT</title>

    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/home/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/font-awesome-4.6.1/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/home/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/home/owl.theme.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/home/styles.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset ('assets/js/home/modernizr.custom.32033.js') }}"></script>

    @yield('styles')
</head>
<body id="app-layout">

    <!-- Wrap all page content here -->
    <div id="wrap">
        <header class="masthead">
            <!-- Fixed navbar -->
            <div class="navbar" id="nav" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-align-justify"></i>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="{{ asset('assets/images/home/logo.png') }}" alt="">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav social hidden-xs hidden-sm">
                            <li><a href="#"><i class="fa fa-twitter fa-lg fa-fw"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook fa-lg fa-fw"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin fa-lg fa-fw"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="{{ url('/')  }}">Inicio</a></li>
                            <li><a href="#features">Caracteristicas</a></li>
                            <li><a href="#announcements">Convocatorias</a></li>
                            <li><a href="#contact">Contactar</a></li>
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Registrarse</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!--/.container -->
            </div>
            <!--/.navbar -->
        </header>

        <section>
            <div class="container">
                @yield('content')
            </div>
        </section>
    </div>

    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('assets/js/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/home/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/home/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/home/script.js') }}"></script>
    <script>
        $(document).ready(function() {
            appMaster.preLoader();
        });
    </script>
    @yield('scripts')
</body>
</html>
