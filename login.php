<?php
include 'php/config.php';
include 'php/middlewares/guest.middleware.php';
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
                        <li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
                        <li class="active">Login</li>
                    </ol>
                </div>
            </div>
            <!-- breadcrumb end -->

            <div class="main-container dark-translucent-bg" style="background-image:url('images/living.jpg');">
                <div class="container">
                    <div class="row">
                        <!-- main start -->
                        <!-- ================ -->
                        <div class="main object-non-visible animated object-visible fadeInUpSmall" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
                            <div class="form-block center-block p-30 light-gray-bg border-clear">
                                <h2 class="title">Login</h2>
                                <?php if (isset($_SESSION['errors'])): ?>
                                    <div class="alert alert-danger">
                                        <?php foreach($_SESSION['errors'] as $error): ?>
                                            <p><?php echo $error; ?></p>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                                <form action="php/controllers/login.controller.php" method="post" class="form-horizontal" role="form">
                                    <div class="form-group has-feedback">
                                        <label for="email" class="col-sm-3 control-label">Email <span class="text-danger small">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                            <i class="fa fa-envelope form-control-feedback"></i>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="password" class="col-sm-3 control-label">Contraseña <span class="text-danger small">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña">
                                            <i class="fa fa-lock form-control-feedback"></i>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-8">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="recordarme"> Recordarme
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-group btn-default btn-animated">Login <i class="fa fa-check"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- main end -->
                    </div>
                </div>
            </div>

            <?php include "tpl/components/calls-to-action/recomendaciones.php"; ?>

            <?php include "tpl/partials/footer.php"; ?>
            
        </div>
        <!-- page-wrapper end -->

        <?php include "tpl/partials/scripts.php"; ?>

    </body>
</html>
<?php unset($_SESSION['errors']); ?>