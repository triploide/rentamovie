<?php
include('php/helpers.php');
?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <title>Rent a Movie</title>
        <meta name="description" content="Mirá todas las películas y series desde la comodidad de tu casa. Rent a movie, compartiendo momentos.">
        <meta name="author" content="Maximiliano Yañez">

        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

        <!-- Fontello CSS -->
        <link href="fonts/fontello/css/fontello.css" rel="stylesheet">

        <!-- Plugins -->
        <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
        <link href="plugins/rs-plugin-5/css/settings.css" rel="stylesheet">
        <link href="plugins/rs-plugin-5/css/layers.css" rel="stylesheet">
        <link href="plugins/rs-plugin-5/css/navigation.css" rel="stylesheet">
        <link href="css/animations.css" rel="stylesheet">
        <link href="plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
        <link href="plugins/hover/hover-min.css" rel="stylesheet">      
        <link href="plugins/morphext/morphext.css" rel="stylesheet">
        
        <!-- The Project's core CSS file -->
        <!-- Use css/rtl_style.css for RTL version -->
        <link href="css/style.css" rel="stylesheet" >
        <!-- The Project's Typography CSS file, includes used fonts -->
        <!-- Used font for body: Roboto -->
        <!-- Used font for headings: Raleway -->
        <!-- Use css/rtl_typography-default.css for RTL version -->
        <link href="css/typography-default.css" rel="stylesheet" >
        <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
        <link href="css/skins/red.css" rel="stylesheet">
        
        <!-- Custom css --> 
        <link href="css/custom.css" rel="stylesheet">
    </head>

    <!-- body classes:  -->
    <!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
    <!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
    <!-- "transparent-header": makes the header transparent and pulls the banner to top -->
    <!-- "gradient-background-header": applies gradient background to header -->
    <!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
    <body class="no-trans front-page">

        <!-- scrollToTop -->
        <!-- ================ -->
        <div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
        
        <!-- page wrapper start -->
        <!-- ================ -->
        <div class="page-wrapper">
        
            <!-- header-container start -->
            <div class="header-container">
                                
                <!-- header start -->
                <!-- classes:  -->
                <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
                <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
                <!-- "full-width": mandatory class for the full-width menu layout -->
                <!-- "centered": mandatory class for the centered logo layout -->
                <!-- ================ --> 
                <header class="header fixed clearfix dark">
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 ">
                                <!-- header-first start -->
                                <!-- ================ -->
                                <div class="header-first clearfix">

                                    <!-- logo -->
                                    <div id="logo" class="logo">
                                        <a href="index.html"><img id="logo_img" src="images/logo.png" alt="The Project"></a>
                                    </div>

                                    <!-- name-and-slogan -->
                                    <div class="site-slogan">
                                        Rent a movie - online feature    
                                    </div>
                                    
                                </div>
                                <!-- header-first end -->

                            </div>
                            <div class="col-md-9">
                    
                                <!-- header-second start -->
                                <!-- ================ -->
                                <div class="header-second clearfix">
                                    
                                <!-- main-navigation start -->
                                <!-- classes: -->
                                <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                                <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                                <!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
                                <!-- ================ -->
                                <div class="main-navigation  animated with-dropdown-buttons">

                                    <!-- navbar start -->
                                    <!-- ================ -->
                                    <nav class="navbar navbar-default" role="navigation">
                                        <div class="container-fluid">

                                            <!-- Toggle get grouped for better mobile display -->
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                                
                                            </div>

                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                                <!-- main-menu -->
                                                <ul class="nav navbar-nav ">
                                                    <li class="dropdown ">
                                                        <a href="index-shop.html" class="dropdown-toggle" data-toggle="dropdown">Películas</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="index-shop.html">Más vistas</a></li>
                                                            <li><a href="index-shop.html">Mejor calificadas</a></li>
                                                            <li><a href="index-shop.html">Estrenos</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ">
                                                        <a href="index-shop.html" class="dropdown-toggle" data-toggle="dropdown">Series</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="index-shop.html">Más vistas</a></li>
                                                            <li><a href="index-shop.html">Mejor calificadas</a></li>
                                                            <li><a href="index-shop.html">Estrenos</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="index-shop.html">Quienes Somos</a>
                                                    </li>
                                                    <li>
                                                        <a href="index-shop.html">FAQ</a>
                                                    </li>
                                                </ul>
                                                <!-- main-menu end -->
                                            </div>

                                        </div>
                                    </nav>
                                    <!-- navbar end -->

                                </div>
                                <!-- main-navigation end -->
                                </div>
                                <!-- header-second end -->
                    
                            </div>
                        </div>
                    </div>
                    
                </header>
                <!-- header end -->
            </div>
            <!-- header-container end -->
            
            <!-- breadcrumb start -->
            <!-- ================ -->
            <div class="breadcrumb-container">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home pr-10"></i><a href="index.html">Home</a></li>
                        <li class="active">Image Boxes</li>
                    </ol>
                </div>
            </div>
            <!-- breadcrumb end -->
        
            <!-- main-container start -->
            <!-- ================ -->
            <section class="temporada-container">

                <div class="container">

                    <div class="row">

                        <!-- main start -->
                        <!-- ================ -->
                        <div class="main col-md-12">

                            <!-- page-title start -->
                            <!-- ================ -->
                            <h1 class="page-title">Perfil</h1>
                            <div class="separator-2"></div>
                            <!-- page-title end -->

                            <?php
                                $path = getImageUser('bart@mail.com');
                            ?>

                            <img src="<?php echo $path; ?>" alt="Avatar">

                        </div>
                        <!-- main end -->

                    </div>
                </div>
            </section>
            <!-- main-container end -->

            <!-- footer top start -->
            <!-- ================ -->
            <div class="dark-translucent-bg footer-top animated-text" style="background-color:rgba(0,0,0,0.6);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="call-to-action text-center">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2>Recomendaciones del mes</h2>
                                        <h2>Enterate de todo lo nuevo que se viene</h2>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="mt-10"><a href="#" class="btn btn-animated radius-50 btn-lg btn-gray-transparent">Ver<i class="fa fa-arrow-right"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer top end -->
            <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
            <!-- ================ -->
            <footer id="footer" class="clearfix dark">

                <!-- .footer start -->
                <!-- ================ -->
                <div class="footer">
                    <div class="container">
                        <div class="footer-inner">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="footer-content">
                                        <div class="logo-footer"><img id="logo-footer" src="images/logo.png" alt=""></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus illo vel dolorum soluta consectetur doloribus sit. Delectus non tenetur odit dicta vitae debitis suscipit doloribus. Ipsa, aut voluptas quaerat... <a href="page-about.html"><br>Seguir leyendo<i class="fa fa-long-arrow-right pl-5"></i></a></p>
                                        <div class="separator-2"></div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="footer-content">
                                        <h2 class="title">Links de interés</h2>
                                        <div class="separator-2"></div>
                                        <nav>
                                            <ul class="nav nav-pills nav-stacked">
                                                <li><a target="_blank" href="#">Películas</a></li>
                                                <li><a href="#">Series</a></li>
                                                <li><a href="#">Quienes Somos</a></li>
                                                <li><a href="#">FAQ</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="footer-content">
                                        <h2 class="title">Nosotros</h2>
                                        <div class="separator-2"></div>
                                        <p>Seguinos en nuestras redes sociales.<br>Subimos contenido de interés todos los días.</p>
                                        <ul class="social-links circle animated-effect-1">
                                            <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                            <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .footer end -->

                <!-- .subfooter start -->
                <!-- ================ -->
                <div class="subfooter">
                    <div class="container">
                        <div class="subfooter-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-center">Rentamovie © 2017. Patente pendiente.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .subfooter end -->

            </footer>
            <!-- footer end -->
            
        </div>
        <!-- page-wrapper end -->

        <!-- JavaScript files placed at the end of the document so the pages load faster -->
        <!-- ================================================== -->
        <!-- Jquery and Bootstap core js files -->
        <script type="text/javascript" src="plugins/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- Modernizr javascript -->
        <script type="text/javascript" src="plugins/modernizr.js"></script>
        <script type="text/javascript" src="plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
        <script type="text/javascript" src="plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
        <!-- Isotope javascript -->
        <script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
        <!-- Magnific Popup javascript -->
        <script type="text/javascript" src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
        <!-- Appear javascript -->
        <script type="text/javascript" src="plugins/waypoints/jquery.waypoints.min.js"></script>
        <!-- Count To javascript -->
        <script type="text/javascript" src="plugins/jquery.countTo.js"></script>
        <!-- Parallax javascript -->
        <script src="plugins/jquery.parallax-1.1.3.js"></script>
        <!-- Contact form -->
        <script src="plugins/jquery.validate.js"></script>
        <!-- Morphext -->
        <script type="text/javascript" src="plugins/morphext/morphext.min.js"></script>
        <!-- Background Video -->
        <script src="plugins/vide/jquery.vide.js"></script>
        <!-- Owl carousel javascript -->
        <script type="text/javascript" src="plugins/owlcarousel2/owl.carousel.min.js"></script>
        <!-- SmoothScroll javascript -->
        <script type="text/javascript" src="plugins/jquery.browser.js"></script>
        <script type="text/javascript" src="plugins/SmoothScroll.js"></script>
        <!-- Initialization of Plugins -->
        <script type="text/javascript" src="js/template.js"></script>
        <!-- Custom Scripts -->
        <script type="text/javascript" src="js/custom.js"></script>

    </body>
</html>
<?php
unset($_SESSION['errors']);
?>