<?php

require_once("config.php");

if(isset($_GET['token'])){
    $token=$_GET['token'];
    $updatequery="UPDATE member SET member_status='active' where member_token='$token'";

    $result=mysqli_query($link,$updatequery);
    if($result===true){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg']="Account update successfully";
            header("location:login.php");
        }else{
            $_SESSION['msg']="You are logged out";
            header("location:login.php");
        }
    }else{
        $_SESSION['msg']="Account not update";
        header("location:sign_up.php");
    }
}



?>