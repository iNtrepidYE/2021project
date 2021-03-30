<?php
require_once("config.php");

$userid=$_SESSION['id'];


if($_SERVER['REQUEST_METHOD']==='POST'){
    
    if(isset($_POST['p_id'])){
   
        //商品編號
        $cart_p_id=$_POST['p_id'];
        //數量
        
        $qty=$_POST['qty'];
        $c_size=$_POST['c_size'];
        $sql="UPDATE s_cart SET cart_count='$qty' WHERE product_id=$cart_p_id AND member_id=$userid AND cart_size='$c_size'";
        if($result=mysqli_query($link,$sql)){
            $sqlCart="SELECT c.cart_count,p.product_price FROM s_cart AS c INNER JOIN product AS p ON c.product_id=p.product_id  WHERE c.product_id=$cart_p_id AND c.member_id=$userid AND c.cart_size='$c_size'";
            $Cartresult=mysqli_query($link,$sqlCart);
            
            if($row=mysqli_fetch_array($Cartresult)){
                echo "$".$row['cart_count']*$row['product_price'];
            }

        }else{
            echo mysqli_error($link);
        }
        
    }
}

?>