<?php
session_start();
include('class.consultas.php');
require("web/dbcon/conexion.php");

$user = $_POST['username'];
$pass2 = $_POST['password'];

$pass = hash_r2($pass2);
$consulta = validar($user, $pass);
if (!empty($consulta)) {

	foreach ($consulta as $key => $note) {
		$roll = $note['rol_usuario'];
		$status = $note['status'];
		$numero = $note['numero_empleado'];
		$login = $note['nombre'] . ' ' . $note['apepa'];
		if ($status === 'DESHABILITADA') {
			$Estatus   =  666;
		} elseif ($status === 'ACTIVO') {
			if ($roll === '4') {
				$_SESSION['USERID'] = $roll;
				$_SESSION['USER_LOGIN'] = $login;
				$_SESSION['numero'] = $numero;
				$_SESSION['logeado'] = true;
				$Estatus    = 1003;
			} elseif ($roll === '2') {
				$_SESSION['USERID'] = $roll;
				$_SESSION['USER_LOGIN'] = $login;
				$_SESSION['numero'] = $numero;
				$_SESSION['logeado'] = true;
				$Estatus    = 1001;
			} elseif ($roll === '7') {
				$_SESSION['USERID'] = $roll;
				$_SESSION['USER_LOGIN'] = $login;
				$_SESSION['numero'] = $numero;
				$_SESSION['logeado'] = true;
				$Estatus    = 1004;
			} else {
				$_SESSION['USERID'] = $roll;
				$_SESSION['USER_LOGIN'] = $login;
				$_SESSION['numero'] = $numero;
				$_SESSION['logeado'] = true;
				$Estatus    = 1000;
			}
		}
	}
} else {
	$Estatus = 0;
}
echo $Estatus;
