<?php
require "dbcon/conexion.php";
include('class/class.encriptar.php');
$target = $_GET['emp'];
$identificacioneequi = decrypt($_GET['emp']);
$query = mysqli_query($con, "SELECT * from tbrh_empleado where emp_numero = '$identificacioneequi'")
    or die(mysqli_error($con));
$ver = mysqli_fetch_assoc($query);

$query2 = mysqli_query($con, "SELECT * from tbrh_contrato where empleado = '$identificacioneequi'")
    or die(mysqli_error($con));
$ver2 = mysqli_fetch_assoc($query2);
$fcha = date("Y-m-d");
?>
<!DOCTYPE html>
<html class="loading" lang="esp" data-textdirection="ltr">

<head>
    <?php
    include 'inc/head.php';
    ?>
 

 <link href="app-assets/sign/css/ESTILO.css" rel="stylesheet">

<link href="app-assets/css/contrato.css" rel="stylesheet">


<script type="text/javascript" src="app-assets/vendors/js/vendors.min.js"></script>
<script src="js/jquery-1.12.4.js"></script>
<link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/horizontal-menu.css">
<link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.css">
<link rel="stylesheet" type="text/css" href="app-assets/css/plugins/pickers/daterange/daterange.css">
<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/icheck/icheck.css">
<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/toggle/switchery.min.css">
<script type="text/javascript" src="app-assets/contrato.js"></script>
    <!-- -->


    <!-- -->
    <style type="text/css" media="print">
    .oculto {
        display: none
    }


    /* también puedes poner display:none */
    </style>
    <script src="app-assets/edad.js"></script>
    <style>
    #validacion {
        display: none;
    }
    </style>




</head>

<body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="click" onload="bloquear();"
    data-menu="horizontal-menu" data-col="2-columns">
    <!-- fixed-top-->

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <!-- Horizontal navigation-->

    <!-- Horizontal navigation-->
    <div class="app-content container center-layout mt-2">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="validation">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Generar Nuevo Contrato.</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="fa fa-ellipsis-h font-medium-3"></i></a>

                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form id="form_contra" name="form_contra" method="POST"
                                            class="steps-validation wizard-circle">
                                            <!-- Step 1 -->
                                            <h6>Datos Personales</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstName3">
                                                                Nombre :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control " id="name"
                                                                name="name" onkeyup="PasarValor();" autocomplete="off"
                                                                value="<?php echo str_replace("-", " ", $ver['emp_nombre']); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstName3">
                                                                Apellido Paterno :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control " id="apepa"
                                                                name="apepa" autocomplete="off"
                                                                value="<?php echo $ver['emp_apepa']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstName3">
                                                                Apellido Materno :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control " id="apema"
                                                                name="apema" autocomplete="off"
                                                                value="<?php echo $ver['emp_apema']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lastName3">
                                                                Estado Civil :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control " id="estado"
                                                                name="estado" autocomplete="off" onkeyup="PasarValor();"
                                                                value="<?php echo $ver['emp_estado_civil']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="date3">Fecha de Nacimiento :</label>
                                                            <input type="date" class="form-control" name="date"
                                                                id="date" onKeyUp="javascript:calcularEdad();"
                                                                value="<?php echo $ver['emp_fechanac']; ?>">

                                                            <input type="hidden" name="actual" id="actual"
                                                                class="form-control" value="<?php echo $fcha; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="firstName3">
                                                                Edad :
                                                            </label>
                                                            <input type="Number" class="form-control" name="edad"
                                                                id="edad" value="<?php echo $ver['emp_edad']; ?>"
                                                                READONLY>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="location">
                                                                Genero :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <select class="custom-select form-control" id="sexo"
                                                                name="sexo">
                                                                <option value="<?php echo $ver['emp_genero']; ?>">
                                                                    <?php echo $ver['emp_genero']; ?></option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="location">
                                                                Nacionalidad :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="nac" name="nac"
                                                                placeholder="ESTADO CIVIL" data-val="true"
                                                                value="<?php echo $ver['emp_nacionalidad']; ?>"
                                                                autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phoneNumber3">CURP :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" maxlength="18"
                                                                onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                                                                class="form-control" id="curp" name="curp"
                                                                autocomplete="off"
                                                                value="<?php echo $ver['emp_curp']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstName3">
                                                                RFC :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control " maxlength="18"
                                                                name="rfc" id="rfc"
                                                                onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                                                                autocomplete="off"
                                                                value="<?php echo $ver['emp_rfc']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstName3">
                                                                NSS :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control " id="nss" name="nss"
                                                                autocomplete="off"
                                                                value="<?php echo $ver['emp_nss']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <!-- Step 2 -->
                                            <h6>
                                                Datos de contacto
                                            </h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="proposalTitle3">
                                                                Dirección :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" autocomplete="off" class="form-control"
                                                                id="dir" name="dir"
                                                                value="<?php echo str_replace("-", " ", $ver['emp_dir1']); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="proposalTitle3">
                                                                Colonia :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input id="ciudad" name="ciudad" type="text"
                                                                class="form-control" placeholder="Ciudad"
                                                                autocomplete="off"
                                                                value="<?php echo $ver['emp_colonia']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="proposalTitle3">
                                                                Municipio :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input id="muni" name="muni" type="text"
                                                                class="form-control" placeholder="Ciudad"
                                                                autocomplete="off"
                                                                value="<?php echo $ver['emp_municipio']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="proposalTitle3">
                                                                Estado :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input id="est" name="est" type="text" class="form-control"
                                                                placeholder=" Estado / Provincia" autocomplete="off"
                                                                value="<?php echo $ver['emp_estado']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="proposalTitle3">
                                                                Código Postal :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input name="cp" id='cp' type="text" class="form-control"
                                                                placeholder="  Código Postal" autocomplete="off"
                                                                value="<?php echo $ver['emp_codpostal']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="location">
                                                                País :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input id="pais" name="pais" type="text"
                                                                class="form-control" placeholder="EDAD" data-val="true"
                                                                value="<?php echo $ver['emp_pais']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="proposalTitle3">
                                                                Teléfono de casa :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input id="tel1" name="tel1" type="number"
                                                                class="form-control" placeholder="  Teléfono de la casa"
                                                                autocomplete="off"
                                                                value="<?php echo $ver['emp_telcasa']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="proposalTitle3">
                                                                Celular :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input id="cel1" name="cel1" type="number"
                                                                class="form-control" placeholder="  Celular"
                                                                autocomplete="off"
                                                                value="<?php echo $ver['emp_celular']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="emailAddress6">
                                                                Correo electrónico en uso :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="email" class="form-control " id="correo"
                                                                name="correo"
                                                                value="<?php echo $ver['emp_correoprincipal']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="emailAddress6">
                                                                Segundo Correo (Opcional) :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="email" class="form-control" id="correo1"
                                                                name="correo1"
                                                                value="<?php echo $ver['emp_correo2']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <!-- Step 3 -->
                                            <h6>Puesto de Trabajo</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="proposalTitle3">
                                                                Numero de trabajor :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input id="numero_empleado" name="numero_empleado"
                                                                type="text" class="form-control"
                                                                placeholder="  Numero de trabajor :" autocomplete="off"
                                                                value="<?php echo $ver['emp_numero']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="eventName3">
                                                                Puesto :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="puesto"
                                                                name="puesto" autocomplete="off"
                                                                value="<?php echo $ver2['puesto']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="eventName3">
                                                                Fecha de Inicio :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="date" class="form-control" id="fecha_inicio"
                                                                name="fecha_inicio" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="eventName3">
                                                                Area :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="area"
                                                                name="area" autocomplete="off"
                                                                value="<?php echo $ver2['area']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="eventType1">Tipo Contrato :</label>
                                                            <select class="custom-select form-control"
                                                                data-placeholder="Type to search cities" id="tipo"
                                                                name="tipo" onChange="pagoOnChange(this)">
                                                                <option value="none" selected="" disabled="">Seleccionar
                                                                </option>
                                                                <option value="POR CAPACITACION">Por CAPACITACION
                                                                    INICIAL
                                                                </option>
                                                                <option value="POR OBRA DETERMINADA">POR OBRA
                                                                    DETERMINADA</option>
                                                                <option value="POR TIEMPO INDETERMINADO">POR TIEMPO
                                                                    INDETERMINADO </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" id='dias2' style="display:;">
                                                        <div class="form-group">
                                                            <label for="proposalTitle3">
                                                                Dias de Contrato :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input id="dias" name="dias" type="number"
                                                                class="form-control" placeholder="Dias de Contrato"
                                                                autocomplete="off" onkeyup="limpiarNumero(this)"
                                                                onchange="limpiarNumero(this)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="proposalTitle3">
                                                                Salario :
                                                                <span>$</span>
                                                                <span>0.00</span>
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="number" class="form-control" id="salario"
                                                                name="salario" placeholder="salario" autocomplete="off"
                                                                title="Solo Numeros Con punto Decimal">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="shortDescription3">Actividades :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <textarea name="text" id="text" rows="4"
                                                                class="form-control" onkeyup="PasarValor2();" value=""
                                                                autocomplete="off"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <!-- Step 4 -->
                                            <h6>Resumen y Beneficiarios</h6>
                                            <fieldset>
                                                <h4 class="form-section"><i class="fas fa-pen-fancy"></i>
                                                    Revision de Contrato
                                                </h4>
                                                <div id="capa" style="display: none;">
                                                    <?php
                                                    include('app/contrato_CAPACITACION INICIAL.php');
                                                    ?>

                                                </div>

                                                <div id="obra" style="display: none;">
                                                    <?php

                                                    include('app/contrato_POR_OBRA_DETERMINADA.php');

                                                    ?>

                                                </div>

                                                <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////-->

                                    </div>

                                </div>
                                <button type="submit" id='formbtton' class="btn btn-primary oculto"
                                    style="display: none;"></button>

                                </fieldset>
                                </form>
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

   <!-- BEGIN VENDOR JS-->
   <script type="text/javascript" src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script type="text/javascript" src="app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script type="text/javascript" src="app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
    <script src="app-assets/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN STACK JS-->

    <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END STACK JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script type="text/javascript" src="app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
    <script src="app-assets/js/scripts/forms/wizard-steps2.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/forms/validation/form-validation.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    <script src="app-assets/vendors/js/extensions/sweetalert.min.js" type="text/javascript"></script>
    <script src="app-assets/sign/js/numeric-1.2.6.min.js"></script>
    <script src="app-assets/sign/js/bezier.js"></script>
    <script src="js/aries.js"></script>
    <script language="JavaScript">
    function pagoOnChange(sel) {
        if (sel.value == "POR TIEMPO INDETERMINADO") {
            $("#dias2").hide();
            divT = document.getElementById("dias2");
            divT.style.display = "none";
        }
    }
    </script>
</body>

</html>