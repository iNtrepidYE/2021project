<?php

if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['deliver_money_method'])){
        $deliver_money=$_POST['deliver_money_method'];
        echo "$".$deliver_money;
    }
    
}


?>