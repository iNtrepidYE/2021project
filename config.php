<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
// 0) 設定 client 端的 id, secret
$google_client = new Google_Client();
//Set the OAuth 2.0 Client ID
$google_client->setClientId('767889447943-a5hno90rln17evsumspfojf768p3kn9c.apps.googleusercontent.com');
//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('QKtLJ3nLFGSoBGOa5xAB0sHI');

//Set the OAuth 2.0 Redirect URI
// 寫憑證設定：「已授權的重新導向 URI 」的網址
$google_client->setRedirectUri('http://localhost/computer-project/login.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 

<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','cartproject');
//connect Database
$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);

if($link === false){
    die("error".mysqli_connect_error());

}


?>



