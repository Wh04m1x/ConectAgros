<?php
$clave  = 'C0A3D104B13F7A4801D98BEFD17ED3AB710CF65207D03B9FD38EAB76CD6B0573198EF467C6C09FA847ECEDB95F7EC7E36B2803D269C45B53356E74A75BCB1C7D';
//Metodo de encriptación
$method = 'aes-256-cbc';
// Puedes generar una diferente usando la funcion $getIV()
$iv = base64_decode("C9fBxl1EWtYTL1/M8jfstw==");
/*
 Encripta el contenido de la variable, enviada como parametro.
  */
$encriptar = function ($valor) use ($method, $clave, $iv) {
	return openssl_encrypt($valor, $method, $clave, false, $iv);
};


function hash_r2($crd)
{
	$pass = md5($crd);
	$salt = "6e0ad8d5c1c2aeedc1d057bc4cb368553cf78c00dae29438dac32f8a7d85584e";
	$pass = $salt . $pass;
	$hash = '$2y$10$';
	$passnd = $hash . hash('gost', $pass);
	return $passnd;
}


function validar($user, $pass)
{

	require("web/dbcon/conexion.php");


	$sql = "SELECT * FROM `tomate_rh_user` INNER JOIN rh_user_info ON rh_user_info.numero_empleado = tomate_rh_user.emp_numero WHERE `user_name` = '$user' and `user_password` = '$pass' LIMIT 1;";
	//$sql = "SELECT * FROM `rh_user`";
	/*
	$query = "SELECT * ";
	$query .= "FROM `rh_user` ";
	$query .= "WHERE `user` = " . "'" . $user . "'";
	$query .= ' and `password` = ' . "'" . $pass . "'";
	$query .= ' LIMIT 1 ';
*/

	$results = array();
	if ($result = mysqli_query($con, $sql)) {
		while ($row = mysqli_fetch_assoc($result)) {
			$results[] = $row;
		}
		return $results;
	} else {
		return mysqli_error($con);
	}
}


/*
$user = 'admin';
$pass = 'admin';
$consutla = validar($user,$pass);
//echo $consutla['emp_numero'];
//var_dump($consutla);
if (!empty($consutla)) {
	//print_r($consutla);
	foreach ($consutla as $key => $note) {
		echo $note['user_role'];
		echo "<br />";
		echo $note['emp_numero'];
		echo "<br />";
		echo $note['id_creador'];
		echo "<br />";
	}

	$Estatus     = 1;
	echo $Estatus;
} else {
	echo "<br />";

	echo "hola mundo";
}

*/
