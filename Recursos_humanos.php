<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login - ConectAgros</title>

    <link rel="shortcut icon" type="image/x-icon" href="web/app-assets/images/ico/12favicon.ico">
    <link href="web/js/font.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="web/app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="web/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="web/app-assets/vendors/css/forms/icheck/custom.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="web/app-assets/css/app.css">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="web/app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="web/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="web/app-assets/css/pages/login-register.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="web/assets/css/style.css">
    <!-- END Custom CSS-->
    <link rel="stylesheet" type="text/css" href="web/app-assets/vendors/css/extensions/sweetalert.css">

    <link rel='stylesheet' type="text/css" href="web/app-assets/css/botn.css">

    <script>
    $(document).ready(function() {
        $('#info').modal('toggle')
    });
    </script>

    <style type="text/css">
    @font-face {
        font-family: 'Archive';
        src: url('Archive-Regular.ttf') format('truetype');
    }

    .show-password {
        border-color: transparent;
        border-style: solid;
        border-top-color: transparent;
        border-width: 4px;
        color: transparent;
        display: inline-block;
        height: 20px;
        left: -30px;
        position: relative;
        top: 5px;
        transition: all .2s;
        vertical-align: middle;
        width: 20px;
    }

    .show-password::after {
        background-color: #34495e;
        border-radius: 7px;
        content: "";
        display: block;
        height: 8px;
        left: 6px;
        opacity: 0.5;
        position: relative;
        top: 2px;
        transition: all .2s;
        width: 8px;
    }

    .show-password:hover {
        border-radius: 20px;
        border-top-color: #34495e;
    }

    .show-password:hover::after {
        opacity: 1;
    }

    .responsive {
        max-width: 100%;
        height: auto;
    }

    .parte_1 {
        color: #E16310;
        font: normal 70px Archive;
        font-size: calc(1em + 1vw);
    }

    .parte_2 {
        color: #66cc00;
        font: normal 70px Archive;
        font-size: calc(1em + 1vw);

    }

    .logo {
        white-space: nowrap;
    }

    header {
        height: 170px;
        color: #FFF;
        font-size: 20px;
        font-family: Sans-serif;
        background: #009688;
        padding-top: 30px;
        padding-left: 50px;
    }

    .responsive {
        width: 100%;
        max-width: 400px;
        height: auto;
    }
    </style>
</head>

<body class="horizontal-layout horizontal-menu 1-column  bg-full-screen-image menu-expanded blank-page blank-page"
    data-open="hover" data-menu="horizontal-menu" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!---->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">

            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <img class="responsive" src="assets/Logo-ConecAGROS.png" alt="AGROS LOGO">
                                    </div>
                                    <!--
                                    <div class="card-title text-center">
                                        <h1 clas="logo"><strong class="parte_1">TOMATE</strong><strong
                                                class="parte_2">RH</strong> </h1>
                                    </div>
                                    -->
                                    <div for="Mensaje" id="Mensaje">
                                    </div>
                                    <h4 class="card-subtitle line-on-side text-muted text-center font-small-5 pt-2">
                                        <span>Iniciar Sesión</span>
                                    </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body register">
                                        <form class="form-horizontal" enctype="multipart/form-data" action="" novalidate
                                            method="POST">
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control" id="usuario_login"
                                                    name="usuario_login" placeholder="Tu Usuario" required>
                                                <div class="form-control-position">
                                                    <i class="ft-user"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control" id="password_login"
                                                    name="password_login" placeholder="Tu Contraseña" required>
                                                <div class="form-control-position">
                                                    <i class="fa fa-key"></i>
                                                </div>

                                            </fieldset>


                                            <button type="submit" class="btn btn-outline-primary btn-block"><i
                                                    class="ft-unlock"></i> INICIAR</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="col-12">
                                        <p class="float-sm-left text-center m-0"><a href="ReleaseNotes.php"
                                                target='_blank' class="card-link">Acerca de TomateRH</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="contenedor">
        <a href="web/encuesta_agros.php" target="_blank">
            <button class="botonF1">
                <i class="ft-bar-chart-2"></i>
            </button>
        </a>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->




    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script type="text/javascript" src="app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script type="text/javascript" src="app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN STACK JS-->
    <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END STACK JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script type="text/javascript" src="web/app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
    <script src="web/app-assets/js/scripts/modal/components-modal.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/tables/datatables/datatable-basic.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/extensions/sweetalert.min.js" type="text/javascript"></script>
    <script src="web/app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

    <script src="assets/js/jquery-1.8.2.min.js"></script>
    <script src="assets/js/scripts.js"></script>

    <script src="web/app-assets/vendors/js/extensions/sweetalert.min.js" type="text/javascript"></script>
    <!-- -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/view.js"></script>

</body>

</html>