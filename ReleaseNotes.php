 <?php
/*
include 'bkp/in.php';
register();
*/
?>

<!DOCTYPE html>
<html>

<head>

  <link rel="shortcut icon" type="image/x-icon" href="web/app-assets/images/ico/12favicon.ico">
  <title>ReleaseNotes - TomatesRH</title>
  <meta http-equiv="Content-Type" content="text/html;
charset=UTF-8">
  <link rel="stylesheet" href="version/ReleaseNotes.css">
</head>

<body class="details">
  <div class="links">
    <ul>

    </ul>

  </div>
  <div class="content">
    <h1 clas="logo"><strong class="parte_1">TOMATE</strong><strong class="parte_2">RH</strong> </h1>

    <p>Última actualización: </p>

    <h2>Introducción</h2>

    <p>Estas release notes describen problemas específicos y las actualizaciones de la versión del Portal de Tomaterh.</p>
 <!---->
 <h2 id="v2.25.1" nr="3" class="collapsible">Cambios de Portal Tomaterh V1.3.2<br /><small>(10 Mayo del 2020)</small></h2>
      <div>
      <h3>Nuevas características</h3>
  
        <ul>
          <li>Se empieza el desarollo de Encuestas y vacaciones version BETA.</li>¿
        </ul>

        <h3>Corrección de errores</h3>
  
        <ul>
          <li>Se Corrigieron Errores al registrar Paciente .</li>
        </ul>
      </div>

      <!-- -->
 <!---->
 <h2 id="v2.25.1" nr="3" class="collapsible">Cambios de Portal Tomaterh V1.3.1<br /><small>(03 Mayo del 2020)</small></h2>
      <div>
      <h3>Nuevas características</h3>
  
        <ul>
          <li>Se agrego la función de descargar Query de candidatos para la descarga en formato Excel.</li>
          <li>Se agrego la función de descargar Query de examen Médico en Excel.</li>
          <li>La cartera de candidatos se agrego función de rechazar y eliminar.</li>
        </ul>

        <h3>Corrección de errores</h3>
  
        <ul>
          <li>Se arreglo error al registrar un candidato rechazado.</li>
          <li>Se arreglo la función de actualizar estatus. Debe seleccionar algún estatus para continuar.</li>
        </ul>
      </div>

      <!-- -->
 <!---->
 <h2 id="v2.25.1" nr="3" class="collapsible">Cambios de Portal Tomaterh V1.2.1<br /><small>(26 Abril del 2020)</small></h2>
      <div>
      <h3>Nuevas características</h3>
  
        <ul>
          <li>Se agrega una opción para editar la información personal del candidato en el apartado de “OPCIONES”.</li>
          <li>Se agrega una función para evaluar en examen medico “Antecedentes Gineco-Obstetrico”</li>
          <li>En el formulario de examen medico se agrego nuevos campos para la evaluación.</li>
          <li>Se agrego la función de dar de baja a empleado en el apartado MODULO DE EMPLEADOS – LISTA DE EMPLEADOS Y PUESTO DE TRABAJO - Actualizar Estado de empleo.</li>
          <li>La alerta para anunciar un candidato fue enviado a examen medico se envía al usuario que este en línea.</li>
        </ul>

        <h3>Corrección de errores</h3>
  
        <ul>
          <li>Se arreglo la función de Evaluacion de Examen Medico.</li>
          <li>Se arreglo la función de actualizar estatus. Debe seleccionar algún estatus para continuar.</li>
          <li>Se arreglo el campo de Fecha de Nacimiento en el formulario de agregar candidato. Ahora se puede agregar la edad automáticamente.</li>
          <li>Se ha solucionado un bloqueo ocasional  al generar contrato y ser enviado al destinatario. </li>
          <li>La alerta para anunciar un candidato fue enviado a examen medico se envía al usuario que este en línea.</li>
        </ul>
      </div>

      <!-- -->

      <!---->
      <h2 id="v2.25.1" nr="3" class="collapsible">Cambios de Portal Tomaterh V1.1.0<br /><small>(16 Abril del 2020)</small></h2>
      <div>
  
        <h3>Nuevas características</h3>
  
        <ul>
          <li>Se agrego nuevos campos para realizar el Examen Medico.</li>
          <li>Se agrego la opcion de rechazar candidato en cualquier proceso que se encuentre el candidato. IMPORTANTE! Debe seleccionar el motivo del rechazo y ademas poner una descripción de esta, si no se selecciona alguna opcion mandara una alerta que debe seleccionar alguna opción.</li>
          <li>Se agrego un nuevo Contrato de tiempo determinado que ya esta disponible para realizar contratos.</li>
          <li>Se agrego las opciones para visulizar los candidatos rechazados y en espera.</li>
          <li>Se modifico la opcion de Historial.</li>
          <li>Se habilito la encuesta.</li>
        </ul>
      </div>

      <!-- -->
    <h2 id="v2.25.1" nr="3" class="collapsible">Release inicial - Publicada V1.0.0<br /><small>(01 Abril del 2020)</small></h2>
    <div>

      <h3>Nuevas características</h3>

      <ul>
        <li>Modulo de Reclutamiento.</li>
        <li>Módulo de información personal de los Empleados.</li>
        <li>Módulo de Servicio Médico.</li>
        <li>Signatura PAD para firmas</li>
      </ul>
    </div>
  </div>
  </div>
  <script>
    (() => {
      for (let el of document.getElementsByClassName('collapsible')) {
        let arrow = document.createElement('div');
        arrow.innerHTML = '⯆';
        arrow.style.float = 'left';
        arrow.style.position = 'relative';
        arrow.style.left = '-1em';
        arrow.style.top = '+1.5em';

        const toggle = () => {
          // this.classList.toggle('active');
          let details = el.nextElementSibling;
          if (details.style.display === 'none') {
            details.style.display = 'block';
            arrow.innerHTML = '⯆';
          } else {
            details.style.display = 'none';
            arrow.innerHTML = '⯈';
          }
        };

        if (el.getAttribute('nr') !== '1') {
          toggle();
        }

        el.addEventListener('click', toggle);
        arrow.addEventListener('click', toggle);
        el.parentElement.insertBefore(arrow, el);
      }
    })();
  </script>
</body>

</html>