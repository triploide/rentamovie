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
                        <li><i class="fa fa-home pr-10"></i><a href="index.html">Home</a></li>
                        <li class="active">Perfil</li>
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

            <?php include "tpl/components/calls-to-action/recomendaciones.php"; ?>

            <?php include "tpl/partials/footer.php"; ?>
            
        </div>
        <!-- page-wrapper end -->

        <?php include "tpl/partials/scripts.php"; ?>

    </body>
</html>
<?php
unset($_SESSION['errors']);
?>