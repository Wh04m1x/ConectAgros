jQuery(document).ready(function() {
    $('input#usuario_login').focus();
    $('.register form').submit(function() {

        console.log("entro a la funcion de submit");
        /*Datos para validacion login*/
        $("#Mensaje").html('');
        /*Datos para validacion login*/
        var Usuario_login = $(this).find('input#usuario_login').val();
        var Password_login = $(this).find('input#password_login').val();
        var selectedCountry = $(this).children("option:selected").val();
        /*Validacion para login*/


        if (Usuario_login == '' & Password_login == '') {
            console.log("entro a la validacion de  ususario");
            /*
            $(this).find("label[for='usuario_login']").append("<span style='display:none' class='red'> * El Usuario Esta Vacio.</span>");
            $(this).find("label[for='usuario_login'] span").fadeIn('medium');
            */
            $("#Mensaje").append('<div class="alert alert-warning alert-dismissible mb-2" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Oh NO!</strong> El Usuario Y Contraseña Estan Vacios. </div>');
            $('input#usuario_login').focus();
            return false;
        }
        if (Usuario_login == '') {
            console.log("entro a la validacion de  ususario");
            /*
            $(this).find("label[for='usuario_login']").append("<span style='display:none' class='red'> * El Usuario Esta Vacio.</span>");
            $(this).find("label[for='usuario_login'] span").fadeIn('medium');
            */
            $("#Mensaje").append('<div class="alert alert-warning alert-dismissible mb-2" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Oh NO!</strong> El Usuario Esta Vacio. </div>');
            $('input#usuario_login').focus();
            return false;
        }
        if (Password_login == '') {
            /*
            $(this).find("label[for='password_login']").append("<span style='display:none' class='red'> * El Password Esta Vacio.</span>");
            $(this).find("label[for='password_login'] span").fadeIn('medium');
            */
            $("#Mensaje").append(' <div class="alert alert-warning alert-dismissible mb-2" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> <strong>Oh NO!</strong> El Password Esta Vacio. </div>');
            $('input#password_login').focus();
            return false;
        }
        if (Usuario_login != '' & Password_login != '') {
            // $("#Mensaje").append("<span  class='red'><img src='assets/loader.gif'>     Solicitando Peticion...</span>");
            var datos = 'username=' + Usuario_login + '&password=' + Password_login;
            // console.log(datos);

            $.ajax({
                type: 'POST',
                data: datos,
                url: 'login.php',
                success: function(responseText) {
                    console.log("se envio ajafx");
                    console.log(responseText);
                    $("#Mensaje").html('');
                    if (responseText == 0) {
                        /*
                        $("#Mensaje").append('<div class="alert alert-icon-right alert-danger alert-dismissible mb-2" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>OH RAYOS!</strong> Usuario y/o Contraseña Incorrecta!!!</div>');
                       */

                        swal("Error code #AGR00-0", "OH RAYOS! Usuario y/o Contraseña Incorrecta!!! :)", "error");
                    }
                    if (responseText == 1000) {
                        /*
                        console.log(responseText);
                        $("#Mensaje").append('<div class="alert alert-success alert-dismissible mb-2" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Oh Rayos!</strong> La Cuenta Existe</div>');
                       */

                        window.location = "web/Home";
                    }
                    if (responseText == 2) {
                        $("#Mensaje").append("<span  class='red'>* La cuenta esta inhabilitada</span>");
                    }
                    if (responseText == 1003) {

                        window.location = "web/Medical-Agros/viewCandidatesMedical.php";
                    }
                    if (responseText == 1004) {

                        window.location = "web/ContraList-Firm";
                    }
                    if (responseText == 666) {
                        // $("#Mensaje").append("<span  class='red'>* La cuenta no ha sido Verificada</span>");

                        swal("Error code #AGR66-6!", "OHHHH NOO! LA CUENTA ESTA DESHABILITADA!!! :)", "warning");
                    }
                }
            });



            return false;
        }
    });
});