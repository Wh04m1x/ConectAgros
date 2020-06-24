<?php


date_default_timezone_set("America/Mexico_City");

function request_sepomex_api($criterio_busqueda){
	
	$endpoint_sepomex = "http://api-sepomex.hckdrk.mx/query/";
	$method_sepomex = 'info_cp/';
	$variable_string = '?type=simplified';
	
	$url = $endpoint_sepomex . $method_sepomex . $criterio_busqueda . $variable_string;
	$response = file_get_contents($url);
	
	if($response){
		return $response;
	}else{
		return false;
	}
	
}
$response = request_sepomex_api('09810');

function request_estados(){
	
	$endpoint_sepomex = "http://api-sepomex.hckdrk.mx/query/";
	$method_sepomex = 'get_estados/';
	//$variable_string = '?type=simplified';
	
	$url = $endpoint_sepomex . $method_sepomex;
	$response = file_get_contents($url);
	
	if($response){
		return $response;
	}else{
		return false;
	}
	
}

$response2 = request_estados();

if($response){
	
    $response2 = (array) json_decode($response2, true);
    header('Content-Type: text/html; charset=utf-8');
    var_dump($response2);
    echo "<pre>";
    print_r($response2);
    echo "</pre>";
  echo $response2[7];
 
}else{
	
	echo 'Ha ocurrido un error';
	
}

echo   $date = date('Y-m-d H:i:s');

?>
					