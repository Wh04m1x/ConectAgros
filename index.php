<?PHP
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    $uri = 'https://';
} else {
    $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];
header('Location: '.$uri.'/tomaterh/recursos_humanos');
exit;
?>
Algo está mal con la instalación de TOMATERH :-(