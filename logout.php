<?php

//logout.php

include('config.php');
ob_start();

//Reset OAuth access token
$google_client->revokeToken();

//Destroy entire session data.
session_destroy();
setcookie('emailcookie','',time()-86400);
setcookie('passwordcookie','',time()-86400);
//redirect page to index.php
header('location:login.php');

?>