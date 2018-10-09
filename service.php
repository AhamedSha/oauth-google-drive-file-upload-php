<?php

session_start();
$url_array = explode('?', 'http://'.$_SERVER ['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$url = $url_array[0];

require_once 'google-api-php-client/src/Google_Client.php';
require_once 'google-api-php-client/src/contrib/Google_DriveService.php';
$client = new Google_Client();
$client->setClientId('736892032653-qkrin7ppb2bc0i7f9at9tcm16ara9qah.apps.googleusercontent.com');
$client->setClientSecret('eXE5rQ7urx09p-99Zm4yi14K');
$client->setRedirectUri($url);
$client->setScopes(array('https://www.googleapis.com/auth/drive'));

if (isset($_GET['code'])) {
    $_SESSION['accessToken'] = $client->authenticate($_GET['code']);
    header('location: index.php');
    exit();
} elseif (!isset($_SESSION['accessToken'])) {
    $client->authenticate();
}


?>



