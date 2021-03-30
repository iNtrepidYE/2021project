<?php
require_once("config.php");
$userid=$_SESSION['id'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-MING_STORE</title>
    
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style40.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./css/checkout.css">
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
    <!--結帳內容-->
    <div class="small-container checkout-container">
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
        <h1><i class="fas fa-cash-register"></i>結帳</h1>
        <hr>
        <div class="row checkout-row">
            <div class="col-9">
                <div class="checkout-group">
                    <div class="checkout-title">
                        <i class="fas fa-shopping-bag"></i>要購買的商品
                        <hr>
                    </div>
                    <div class="checkout-info">
                        <table class='checkout-table'>
                        <?php
                            $userid=$_SESSION['id'];
                            $sql="SELECT p.product_image,product_name,product_price,c.cart_count FROM s_cart as c inner join product as p on c.product_id=p.product_id WHERE c.member_id=$userid AND c.cart_status='false'";
                            $result=mysqli_query($link,$sql);
                            //總金額變數
                            $total=0;
                            //總數量變數
                            $total_count=0;
                            while($row=mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td class='checkout-img'><img src='./img/".$row['product_image']."' alt=''> </td>";
                                echo "<td>";
                                    echo "<div class='checkout-text'>";
                                        echo "<h4>Red Printed T-shirt</h4>";
                                        echo "<h5>$".$row['product_price']."</h5>";
                                    echo "</div>";
                                echo "</td>";
                                echo "<td>";
                                    echo "<span class='cart_count'>*".$row['cart_count']."</span>";
                                echo "</td>";
                            echo "</tr>";
                            $total+=$row['cart_count']*$row['product_price'];
                            $total_count+=$row['cart_count'];
                            }
                            
                        ?>
                            
                        </table>
                    </div>
                    
                </div>
                <div class="checkout-group">
                    <div class="checkout-title">
                        <i class="fas fa-truck-moving"></i>運送方式
                    </div>
                    <hr>
                    <h5>超商門市/智慧郵筒取貨</h5>
                    <div class="row">
                        <div class="col-3">
                            <input type="radio" name='delivery-item' value='60' ><span>7-11取貨付款</span> $60
                        </div>
                        <div class="col-3">
                            <input type="radio" name='delivery-item' value='60'><span>7-11取貨</span> $60
                        </div>
                        <div class="col-3">
                            <input type="radio" name='delivery-item' value='60'><span>全家、OK、萊爾富取貨付款</span> $60
                        </div>
                    </div>
                    <h5>賣家自行提供</h5>
                    <div class="row">
                        <div class="col-3">
                            <input type="radio" name='delivery-item' value='60' ><span>郵寄寄送</span> $60
                        </div>
                        <div class="col-3">
                            <input type="radio" name='delivery-item' value='80'><span>宅配/快遞</span> $80
                        </div>
                        <div class="col-3">
                            <input type="radio" name='delivery-item' value='280'><span>離島寄送</span> $280
                        </div>
                    </div>
                </div>
                <div class="checkout-group">
                    <div class="checkout-title">
                        <i class="fas fa-dollar-sign"></i>付款方式 
                    </div>
                    <hr>
                    <div class="row">       
                        <div class="col-3">
                            <input type="radio" name='cash-item'><span>現金支付</span> 
                        </div>
                        <div class="col-3">
                            <input type="radio" name='cash-item'><span>條碼支付</span> 
                        </div>
                        <div class="col-3">
                            <input type="radio" name='cash-item'><span>信用卡</span> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="checkout-group">
                    <div class="checkout-discount">
                        <h4>使用折扣</h4>
                    </div>
                </div>
                <div class="checkout-group">
                    <div class="checkout-item">
                        <div class="checkout-item-name">商品總金額</div>
                        <div class="checkout-item-price order_product_money">$<?php echo $total;?></div>
                    </div>
                    <div class="checkout-item">
                        <div class="checkout-item-name">運費</div>
                        <div class="checkout-item-price deliver_money">$0</div>
                    </div>
                    <div class="checkout-item ">
                        <div class="checkout-item-name ">訂單金額</div>
                        <div class="checkout-item-price order_money order_total_money">$<?php echo $total;?></div>
                    </div>
                    <div class="checkout-item">
                        <form method='post'>

                            <input type="submit" value='結帳' class='checkout-btn'>
                        </form>
                    </div>
                </div>
            </div>
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
    $("input[name='delivery-item']").change(function(){
        //取得當前按鈕的值 deliver=運送 jquery取value值 使用val()函數 this=當前元素
        var deliver_money=($(this).val()); 
        //獲取送方方式的價錢
        var deliver_money_text= $('.deliver_money');
        //獲取運送方式名字
        var transport=($("input[name=delivery-item]:checked").next().html());
        //
        //商品總金額
        var order_total_money=$('.order_product_money').html().replace(/[^0-9]/ig,"");      
        var order_add= Number(order_total_money)+Number(deliver_money);
        
        //訂單總金額=商品總金額+運送方式
        ($('.order_total_money').html("$"+order_add));
        
        $.ajax({
            url:'update_deliver_money.php',
            method:'POST',
            data:{deliver_money_method:deliver_money},
            success:function(res){
                deliver_money_text.html(res);
            }
        });
    })
    $("input[type='submit']").click(function(){
        //運送方式名字
        var transport=($("input[name=delivery-item]:checked").next().html());
        //支付方式名子
        var pay_method=($("input[name=cash-item]:checked").next().html())
        
        //商品總金額 只取數字
        var order_total_money=$('.order_product_money').html().replace(/[^0-9]/ig,"");
        //運送方式價錢
        var deliver_money=($("input[name=delivery-item]:checked").val());
        //訂單總金額
        var order_add= Number(order_total_money)+Number(deliver_money);
        //
        if((typeof pay_method=="undefined") || (typeof transport=='undefined')){
            alert('請把運送方式和支付方式選擇');
        }else{
            $.ajax({
                url:'checkout_info.php',
                method:'POST',
                data:{
                    transport:transport,
                    pay_method:pay_method,
                    order_total_money:order_total_money,
                    deliver_money:deliver_money,
                    order_add:order_add
                },
                success:function(res){
                    if(res==='請先把會員資料填寫完畢!才可執行結帳'){
                        alert(res);
                    }else{
                        location.href=res;
                    };
                },
                error: function (thrownError) {
                    console.log(throwError);
                }   
                
            });
        }
    });
</script>

</body>
</html>