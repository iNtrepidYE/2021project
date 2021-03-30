<?php
require_once("config.php");
if(isset($_SESSION['loggedin'])){
   $user_id=$_SESSION['id']; 
}else{
    $_SESSION['msg']='請先做登入才可以前往購物車';
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-MING_STORE</title>
    
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style41.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./css/cart.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
</head>
<body>
    <!--頁首-->
        <div class="container">
            <div class="navbar cart-navbar">
                <div class="logo">
                    <a href="index.php"><img src="./img/logo.png" alt="" width="50px" height="50px" ></a>
                </div>
                <div class='cart-user'>
                    <h3>iNtrepidYE</h3>
                </div>
            </div>
        </div>


    <!---購物車 項目 資訊--->
    <div class="small-container cart-page">
    <div class='process-img'>
        <ul>
            <li>
                <img src="./img/shopping-cart.png" alt=""><br>
                <i class="fas fa-check"></i>
                <p>購物車中</p>
            </li>
            <li>
                <img src="./img/order.png" alt=""><br>
                <i class="fas fa-check"></i>
                <p>結帳</p>
            </li>
            <li>
                <img src="./img/flag.png" alt=""><br>
                <i class="fas fa-check"></i>
                <p>送出訂單</p>
            </li>
        </ul>
    </div>
    <h1 class="like-title">購物車</h1>   
   
        <hr>       
        <table class='cart-table'>
            <tr>
                <th>商品名稱</th>
                <th>購買數量</th>
                <th>購買尺寸</th>
                <th class='thead-money'>金額</th>
            </tr>
            <?php
                $sql="SELECT  c.member_id,c.cart_status,c.cart_size,c.cart_count,p.product_id,product_image ,product_name,product_price,product_count FROM s_cart AS c INNER JOIN product AS p ON c.product_id=p.product_id WHERE member_id='$user_id' AND cart_status='false'";
                $result=mysqli_query($link,$sql);
                $num=mysqli_num_rows($result);
                if($num==0){
                    echo "<p>裡面沒有東西:(,去加一點東西進來</p>";
                }
                while($row=mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>";
                            echo "<div class='cart-info'>";
                                echo "<img src='./img/".$row['product_image']."' alt=''>";
                                echo "<div class='cart-info-text'>";
                                    echo "<p>".$row['product_name']."</p>";
                                    echo "<small>Price: $".$row['product_price']."</small>";
                                    echo "<br>";
                                    echo "<a class='dCartP' value='".$row['product_id']."'>移除</a>";
                                echo "</div>";
                            echo "</div>";
                        echo "</td>";
                        echo "<td class='cart-info-quantity'><form id='frm".$row['product_id']."'>
                        
                        <input type='hidden' name='p_id' value='".$row['product_id']."'>
                        <input type='hidden' name='c_size' value='".$row['cart_size']."'>
                        <input type='number' name='qty' class='qty' onchange='updcart(".$row['product_id'].")'value='".$row['cart_count']."' ></form></td>";
                        echo "<td><h4 class='cart-info-size'>".$row['cart_size']."</small></h4>";
                        echo "<td class='cart-sum-price'>$".$row['cart_count']*$row['product_price']."</td>";
                    echo "</tr>";
                }
               

            ?>
        </table>

        <div class="total-price">
            <table>
               
                <tr>
                <td colspan='2'><a href="product.php" class='continue-btn'>繼續購買</a></td>

                </tr>
                <tr>
                    <?php if($num!==0){echo "<td colspan='2'><a href='checkout.php' class='buy-btn'>下一步</a></td>"; }; ?>
                </tr>
            </table>

        </div>
    </div>
    <!--頁尾資訊-->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="./img/play-store.png" alt="">
                        <img src="./img/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="./img/logo-white.png" alt="">
                    <p>Download App for Android and ios mobile phone.</p>
                </div>
                <div class="footer-col-3">
                    <h3>可用連結</h3>
                    <ul>
                        <li><a href="product.php">商品區</a></li>
                        <li><a href="about.php">關於我們</a></li>
                        <li><a href="contact.php">聯絡我們</a></li>
                        <li><a href="member_center.php">會員中心</a></li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>追中我們</h3>
                    <ul>
                        <li><a href="">Facebook</a></li>
                        <li><a href="">Twitter</a></li>
                        <li><a href="">Instagram</a></li>
                        <li><a href="">Youtube</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class='copyright'>Copyright 2020 - A_MING</p>
        </div>
    </div>
<!-- JS FOR TOGGLE-->
<script>
    var MenuItems=document.getElementById("MenuItems");
    MenuItems.style.maxHeight="0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight=="0px"){
            MenuItems.style.maxHeight="200px";
        }else{
            MenuItems.style.maxHeight="0px";
        }
    }
</script>
<script>
    $(".dCartP").click(function(){
        var Product_val=$(this).attr('value');
        var Cart_size=$('.cart-info-quantity').next().contents().html();
       
        $.ajax({
            url:'delete_cart_info.php',
            method:'POST',
            data:{
                Cart_size:Cart_size,
                Product_value:Product_val
            },
            success:function(response){
                location.reload()
            },
            error:function(throwError){
                console.log(throwError);
            }
        });
    });
</script>
<script>
   function updcart(id){ 
       var form_id=$("#frm"+id);
       console.log(form_id);
       $.ajax({
            url:'up_cart_info.php',
            cache: false,     
            type:'POST', 
            dataType: 'html',
            data:$("#frm"+id).serialize(),
            success:function(res){
                form_id.parent().next().next().html(res);
            },
            error: function (res) {
                console.log(res);
            }
                
        });    
   }
</script>
</body>
</html>