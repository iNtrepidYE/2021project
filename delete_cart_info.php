<?php
require_once("config.php");
$userid=$_SESSION['id'];

if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['Product_value'])){
        $p_id=$_POST['Product_value'];
        $c_size=$_POST['Cart_size'];
        $delsql="DELETE FROM s_cart WHERE member_id=$userid AND product_id='$p_id' AND cart_status='false' AND cart_size='$c_size'";
        $result=mysqli_query($link,$delsql);
        if($result===true){
            echo "成功移除";
        }else{
            echo mysqli_error($link);
        }
    }else{
        echo "no";
    }
}else{
    echo "nono";
}

?>