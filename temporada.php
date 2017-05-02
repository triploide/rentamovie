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
        
            <?php include "tpl/partials/header.php" ?>
            
            <!-- breadcrumb start -->
            <!-- ================ -->
            <div class="breadcrumb-container">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
                        <li><a href="/series.php">Series</a></li>
                        <li><a href="/serie.php">X Files</a></li>
                        <li class="active">Temporada 1</li>
                    </ol>
                </div>
            </div>
            <!-- breadcrumb end -->
        
            <!-- main-container start -->
            <!-- ================ -->
            <section class="temporada-container">

                <div class="image-cover" style="background-image: url(content/series/720x360/x-files.jpg);"></div>

                <div class="container">

                    <div class="row">

                        <!-- main start -->
                        <!-- ================ -->
                        <div class="main col-md-8">

                            <!-- page-title start -->
                            <!-- ================ -->
                            <h1 class="page-title">X Files - Temporada 1</h1>
                            <div class="separator-2"></div>
                            <!-- page-title end -->

                            <!-- blogpost start -->
                            <article class="blogpost temporada">
                                <div class="row grid-space-10">
                                    <div class="col-md-3">
                                        <div class="overlay-container">
                                            <img src="content/series/720x360/x-files.jpg" alt="">
                                            <a class="overlay-link" href="episodio.php"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <header>
                                            <h2><a href="episodio.php">Piloto</a></h2>
                                            <div class="post-info">
                                                <span class="post-date">
                                                    <i class="icon-tag"></i>
                                                    Capítulo 1 
                                                </span>
                                            </div>
                                        </header>
                                    </div>
                                </div>
                            </article>
                            <!-- blogpost end -->

                            <!-- blogpost start -->
                            <article class="blogpost temporada">
                                <div class="row grid-space-10">
                                    <div class="col-md-3">
                                        <div class="overlay-container">
                                            <img src="content/series/720x360/x-files.jpg" alt="">
                                            <a class="overlay-link" href="episodio.php"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <header>
                                            <h2><a href="episodio.php">Tecnología robada</a></h2>
                                            <div class="post-info">
                                                <span class="post-date">
                                                    <i class="icon-tag"></i>
                                                    Capítulo 2 
                                                </span>
                                            </div>
                                        </header>
                                    </div>
                                </div>
                            </article>
                            <!-- blogpost end -->

                            <!-- blogpost start -->
                            <article class="blogpost temporada">
                                <div class="row grid-space-10">
                                    <div class="col-md-3">
                                        <div class="overlay-container">
                                            <img src="content/series/720x360/x-files.jpg" alt="">
                                            <a class="overlay-link" href="episodio.php"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <header>
                                            <h2><a href="episodio.php">Muertes en serie</a></h2>
                                            <div class="post-info">
                                                <span class="post-date">
                                                    <i class="icon-tag"></i>
                                                    Capítulo 3 
                                                </span>
                                            </div>
                                        </header>
                                    </div>
                                </div>
                            </article>
                            <!-- blogpost end -->

                            <!-- blogpost start -->
                            <article class="blogpost temporada">
                                <div class="row grid-space-10">
                                    <div class="col-md-3">
                                        <div class="overlay-container">
                                            <img src="content/series/720x360/x-files.jpg" alt="">
                                            <a class="overlay-link" href="episodio.php"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <header>
                                            <h2><a href="episodio.php">El conducto</a></h2>
                                            <div class="post-info">
                                                <span class="post-date">
                                                    <i class="icon-tag"></i>
                                                    Capítulo 4 
                                                </span>
                                            </div>
                                        </header>
                                    </div>
                                </div>
                            </article>
                            <!-- blogpost end -->

                        </div>
                        <!-- main end -->

                        <!-- sidebar start -->
                        <!-- ================ -->
                        <aside class="col-md-4 col-lg-3 col-lg-offset-1">
                            <div class="sidebar">
                                <?php include "tpl/aside/buscar.php"; ?>
                                
                                <?php include "tpl/aside/temporadas.php"; ?>

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
