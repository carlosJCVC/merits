<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">

    <title>FCYT</title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
    {{--<link href="css/responsive.css" rel="stylesheet" type="text/css">--}}
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="assets/js/jquery.1.8.3.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/classie.js"></script>
    <script src="contactform/contactform.js"></script>

</head>
<body>
    <!--header-start-->
    <header class="header" id="header">
        <div class="container">
            <figure class="logo animated fadeInDown delay-07s">
                <a href="#">
                    <img src="assets/images/ulogo.png" alt="">
                </a>
            </figure>
            <h1 class="animated fadeInDown delay-07s">Bienvenido</h1>
            <ul class="we-create animated fadeInUp delay-1s">
                <li>Universidad Mayor de Sansimon</li>
            </ul>
            <a class="link animated fadeInUp delay-1s servicelink" href="#service">Iniciar Navegacion</a>
        </div>
    </header>
    <!--header-end-->

    <!--main-nav-start-->
    <nav class="main-nav-outer" id="test">
        <div class="container">
            <ul class="main-nav">
                <li><a href="#header">Inicio</a></li>
                <li><a href="#service">Servicios</a></li>
                <li><a href="#Portfolio">Convocatorias</a></li>
                <li class="small-logo">
                    <a href="#header">
                        <img src="assets/images/logotec.jpg" alt="" width="60px">
                    </a>
                </li>
                <li><a href="{{ url('login') }}">Iniciar Sesión</a></li>
                <li><a href="#contact">Contactos</a></li>
                <li><a href="#">Calendario</a></li>
            </ul>
            <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
        </div>
    </nav>
    <!--main-nav-end-->


    <!--main-section-start-->
    <section class="main-section" id="service">
        <div class="container">
            <h2>Servicios</h2>
            <h6>Tenemos los siguientes servicios a disposicion</h6>
            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
                    <div class="service-list">
                        <div class="service-list-col1">
                            <i class="fa-university"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3>Convocatoria</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                            <i class="fa-building-o"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3>Aulas</h3>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                            <i class="fa-cubes"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3>Convocatoria</h3>
                        </div>
                    </div>
                </div>
                <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
                    <img src="assets/images/servicio.png" alt="">
                </figure>
            </div>
        </div>
    </section>
    <!--main-section-end-->


    <!--main-section-start-->
    <section class="main-section paddind" id="Portfolio">
        <div class="container">
            <h2>Convocatoria</h2>
          <div class="portfolioFilter">
            <ul class="Portfolio-nav wow fadeIn delay-02s">
                <li><a href="#" data-filter="*" class="current" ></li>
            </ul>
           </div>

        </div>
        <div class="portfolioContainer wow fadeInUp delay-04s">
        </div>
    </section>
    <!--main-section-end-->


    <div class="container">

        <section class="main-section contact" id="contact">
            <h2>Contactos</h2>
              <div class="col-md-3"></div>
                <div class="row">
                    <div class="col-md-6 col-sm-7 wow fadeInLeft">
                        <div class="contact-info-box address clearfix">
                            <h3><i class="icon-map-marker"></i>Direccion:</h3>
                            <span>Calle Sucre y Parque la Torre</span>
                        </div>
                        <div class="contact-info-box phone clearfix">
                            <h3><i class="fa-phone"></i>Telefono:</h3>
                            <span>4 4556893</span>
                        </div>
                        <div class="contact-info-box email clearfix">
                            <h3><i class="fa-pencil"></i>Email:</h3>
                            <span>admin@fcyt.umss.edu.bo.com</span>
                        </div>
                        <div class="contact-info-box hours clearfix">
                            <h3><i class="fa-clock-o"></i>Horas:</h3>
                            <span><strong>Lunes - Viernes :</strong> 6:45am - 10pm<br><strong>Sabado :</strong> 6:45 - 14pm<br><strong>Domingo :</strong> Sin atencion</span>
                        </div>
                        <ul class="social-link">
                            <li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
                            <li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
                            <li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>
                            <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
                            <li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>
                        </ul>
                    </div>

                </div>
            <div class="col-md-3"></div>
        </section>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-logo"><a href="#"><img src="assets/images/logotec.jpg" alt=""></a></div>
            <span class="copyright">&copy; Todo los Derechos Resevados.</span>
            <div class="credits">
            </div>
            <br>
            <div class="credits">
                <a href="#">Cochabamba - Bolivia</a>
            </div>
        </div>
    </footer>


    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#test').scrollToFixed();
            $('.res-nav_click').click(function(){
                $('.main-nav').slideToggle();
                return false
            });
        });
    </script>

      <script>
        wow = new WOW(
          {
            animateClass: 'animated',
            offset:       100
          }
        );
        wow.init();
      </script>


    <script type="text/javascript">
        $(window).load(function(){

            $('.main-nav li a, .servicelink').bind('click',function(event){
                var $anchor = $(this);

                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 102
                }, 1500,'easeInOutExpo');
                /*
                if you don't want to use the easing effects:
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top
                }, 1000);
                */
          if ($(window).width() < 768 ) {
            $('.main-nav').hide();
          }
                event.preventDefault();
            });
        })
    </script>

<script type="text/javascript">

$(window).load(function(){


  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;


  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });

  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }

  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({

            filter: selector,
         });
         return false;
    });

});

</script>

</body>
</html>
