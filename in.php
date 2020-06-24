<?php

/**
 * Función para encriptar
 */
function my_encrypt($data, $key) {
    // Generamos una cadena de bytes pseudo-aleatoria en base al método de cifrado
    // en este caso: blowfish
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('blowfish'));
    // Ciframos los datos usando blowfish
    $cifrado = openssl_encrypt($data, 'blowfish', $key, 0, $iv);
    // Añadimos el $iv y retornamos en base64
    // el $iv es necesario para poder decodificar los datos por eso lo unimos a 
    // los datos mediante un separador único (|||)
    return base64_encode($cifrado . '|||' . $iv);
}

/**
 * Función para desencriptar
 */
function my_decrypt($data, $key) {
    // Decodificamos los datos y dividimos por el separador único (|||)
    $dataIv = explode('|||', base64_decode($data), 2);
    // comprobamos que tenemos 2 valores
    if(count($dataIv) != 2) {
        return false;
    }
    // Asignamos los datos, para una mejor lectura del código
    $data = $dataIv[0];
    $iv =  $dataIv[1];
    // Validamos longitud correcta del IV
    if(strlen($iv) != openssl_cipher_iv_length('blowfish')) {
        return false;
    }
    // desciframos los datos y retornamos
    return openssl_decrypt($data, 'blowfish', $key, 0, $iv);
}

// Nuestra clave de cifrado
$key = 'C0A3D104B13F7A4801D98BEFD17ED3AB710CF65207D03B9FD38EAB76CD6B0573198EF467C6C09FA847ECEDB95F7EC7E36B2803D269C45B53356E74A75BCB1C7D';
// Datos a cifrar
$texto = 'candidato-Cf@yT';

echo "Clave de cifrado: <br>";
echo $key."<br><br>";

echo "Texto original: <br>";
echo $texto."<br><br>";

echo "Cifrado: <br>";
$texto_cifrado = my_encrypt($texto, $key);
echo $texto_cifrado . "<br><br>";

echo "Descifrado: <br>";
echo my_decrypt($texto_cifrado, $key);


echo '//////////////////////////////////////////////////////////////////////////////////////////////////////////';
$cifrados         = openssl_get_cipher_methods();
$cifrados_y_alias = openssl_get_cipher_methods(true);
$alias_cifrados   = array_diff($cifrados_y_alias, $cifrados);

echo '<pre>';
print_r($cifrados);
print_r($alias_cifrados);
echo '</pre>';