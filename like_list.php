<?php
require_once("config.php");
$user_id=$_SESSION['id'];
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
</head>
<body>

    <!--頁首-->
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="./img/logo.png" alt="" width="50px" height="50px" >
                </div>
                <nav>
                    <ul id='MenuItems'>
                        <li><a href="index.php" ><i class="fas fa-home"></i>首頁</a></li>
                        <li><a href="login.php">登入</a></li>
                        <li><a href="sign_up.php">註冊</a></li>
                        <li><a href="product.php">產品區</a></li>
                        <li><a href="about.php" >關於我們</a></li>
                        <li><a href="contact.php">聯絡我們</a></li>
                        <li><a href="member_center.php">會員中心</a></li>
                    </ul>
                </nav>
                <a href="like_list.php" class='like-icon active'>喜愛清單<i class="fas fa-heart"></i></a>
                <a href="cart.php">購物車<i class="fas fa-shopping-cart"><span class='cart_quantity'>0</span></i></a>
                <img src="./img/menu.png" alt="" class='menu-icon' onclick="menutoggle()">
            </div>
        </div>

    <!--內容-->
    <div class="small-container">
        <h1 class="like-title">喜愛清單</h1>
        <hr>
        <div class="row">
            <div class="col">
                <table class='like-table'>
                    <tr>
                        <th><input id="select-all" type="checkbox"></th>
                        <th>照片</th>
                        <th>商品名稱/商品編號</th>
                        <th>目前價格</th>
                        <th>狀態</th>
                        <th>上架日期</th>
                    </tr>
                    <?php
                        $sql="SELECT  p.product_image,p.product_id,p.product_name,p.product_price,p.product_time FROM like_p AS l INNER JOIN product AS p ON l.product_id=p.product_id WHERE member_id=$user_id";
                        $result=mysqli_query($link,$sql);
                        while($row=mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td><input type='checkbox' class='like-item' value=".$row['product_id']."></td>";
                            echo "<td><img src='./img/".$row['product_image']."'></td>";
                            echo "<td>".$row['product_name']."<span class='slash'>/</span>".$row['product_id']."</td>";
                            echo "<td>$".$row['product_price']."</td>";
                            echo "<td>上架中</td>";
                            echo "<td>".$row['product_time']."</td>";
                        echo "</tr>";
                        }
                    ?>
                </table>
            </div>         
        </div>     
            <a href="" id='' class='remove-like-product-btn'>移除</a>      
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
    //全部選取
    $(document).ready(function(){
        //當id值是select-all的元素 被點擊時 執行下方程式
        $("#select-all").click(function(event){
            //this = 被點擊的元素 不用再寫一次#select-all去找元素
            if(this.checked){ //checked 當複選框被點選 會增加checked屬性
                //把輸入框類型是checkbox 把每個元素選取
                $("input[type=checkbox]").each(function(){
                    //這邊this = input[type=checkbox]  true=把全部選取 false反之
                    this.checked=true;
                });
            }else{
                $("input[type=checkbox]").each(function(){
                    this.checked=false;
                });
            }

        })

    });
</script>
<script>
    //把選擇的
    $(document).ready(function(){
        $('.remove-like-product-btn').click(function(){
            var id=[];
            $('.like-item:checked').each(function(){
                //把選取的複選框的值 放到到id陣列
                id.push($(this).val());
                element=this;
            });
            if(id.length>0){
                if(confirm("您確定要移除這些項目?")){
                    $.ajax({
                        url:"delete_like_info.php",
                        method:"POST",
                        data:{deleteId:id},
                        success:function(res){
                            alert(res);
                        }

                    });
                }
            }
        });
    });
</script>
</body>
</html>