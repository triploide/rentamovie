<?php include 'php/config.php'; ?>
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
        <?php include "tpl/partials/head.php" ?>
    </head>

    <body class="no-trans front-page">

        <!-- scrollToTop -->
        <!-- ================ -->
        <div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
        
        <!-- page wrapper start -->
        <!-- ================ -->
        <div class="page-wrapper">
        
            <?php include "tpl/partials/header.php" ?>
            
            <!-- breadcrumb start -->
            <!-- ================ -->
            <div class="breadcrumb-container">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
                        <li><a href="/peliculas.php">Películas</a></li>
                        <li class="active">Ghostbusters</li>
                    </ol>
                </div>
            </div>
            <!-- breadcrumb end -->
        
            <!-- main-container start -->
            <!-- ================ -->
            <section class="temporada-container">

                <div class="image-cover" style="background-image: url(content/peliculas/720x360/ghostbusters.jpg);"></div>

                <div class="container">

                    <div class="row">

                        <!-- main start -->
                        <!-- ================ -->
                        <div class="main col-md-8">

                            <!-- page-title start -->
                            <!-- ================ -->
                            <h1 class="page-title">Ghostbusters</h1>
                            <div class="separator-2"></div>
                            <!-- page-title end -->

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7aW8oyTgA60"></iframe>
                            </div>

                        </div>
                        <!-- main end -->

                        <!-- sidebar start -->
                        <!-- ================ -->
                        <aside class="col-md-4 col-lg-3 col-lg-offset-1">
                            <div class="sidebar">
                                
                                <?php include "tpl/aside/buscar.php"; ?>
                                
                                <?php include "tpl/aside/relacionados.php"; ?>
                                                              
                            </div>
                        </aside>
                        <!-- sidebar end -->

                    </div>
                </div>
            </section>
            <!-- main-container end -->

            <?php include "tpl/components/calls-to-action/recomendaciones.php"; ?>

            <?php include "tpl/partials/footer.php"; ?>
            
        </div>
        <!-- page-wrapper end -->

        <?php include "tpl/partials/scripts.php"; ?>

    </body>
</html>
