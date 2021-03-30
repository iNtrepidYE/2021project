<?php
require_once("config.php");
//會員編號
$userid=$_SESSION['id'];
//運送方式
$transport=$_POST['transport'];
//支付方式
$pay_method=$_POST['pay_method'];
//訂單總金額
$order_add=$_POST['order_add'];
//訂單編號
$order_id="2021".date("hi");




$Checksql="SELECT member_address,member_telephone,member_contact  FROM member WHERE member_id=$userid ";
$result=mysqli_query($link,$Checksql);
if($row=mysqli_fetch_array($result)){
    
    $member_address=$row['member_address'];
    $member_telephone=$row['member_telephone'];
    $member_contact=$row['member_contact'];
    if(empty($member_address) || empty($member_telephone) || empty($member_contact)){
        echo "請先把會員資料填寫完畢!才可執行結帳";
    }else{
        
        $sql="SELECT cart_id FROM s_cart WHERE member_id=$userid AND cart_status='false'";
            $result=mysqli_query($link,$sql);
        if($row=mysqli_fetch_array($result)){
            $cart_id=$row['cart_id']; 
                      
            if(!empty($cart_id)){
                
                $InsertCart="INSERT INTO s_order (order_id,cart_id,member_id,order_price,order_deliver,pay_method) VALUES ('$order_id','$cart_id','$userid','$order_add','$transport','$pay_method')";
                $InsertResult=mysqli_query($link,$InsertCart);
                if($InsertResult===true){
                    $UpdateCart="UPDATE s_cart SET cart_status='true' WHERE cart_id=$cart_id";
                    if($UpdateResult=mysqli_query($link,$UpdateCart)){
                        echo "http://localhost/computer-project/transaction.php?order_id=$order_id";
                    }else{
                        echo mysqli_error($link);
                    }
                }else{
                    echo mysqli_error($link);
                }
            }else{
                echo mysqli_error($link);
            }
        }else{
            echo mysqli_error($link);
        }
    }
}





?>