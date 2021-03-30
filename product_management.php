<?php
    require_once("config.php");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
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
                        <li><a href="member_center.php" class='active'>管理者介面</a></li>
                    </ul>
                </nav>
                <a href="like_list.php" class='like-icon'>喜愛清單<i class="fas fa-heart"></i></a>
                <a href="cart.php">購物車<i class="fas fa-shopping-cart"><span class='cart_quantity'>0</span></i></a>
                <img src="./img/menu.png" alt="" class='menu-icon' onclick="menutoggle()">
            </div>
        </div>
   
    <!--內容-->
    <div class="container">
        <div class="row sider-row">
            <!--側邊選單-->
            <div class="col-mg-2">
                <div class="siderMenu-title">
                    <h2>選單Menu</h2>
                    <ul>   
                        <li ><a href="management.php" >網站資訊</a></li>
                        <li class='menu_active'><a href="product_management.php">商品管理</a></li>
                        <li><a href="member_management.php">客戶管理</a></li>
                        <li><a href="order_management.php">訂單管理</a></li>
                        <li><a href="about.php">關於我們</a></li>
                        <li><a href="contact.php">聯絡我們</a></li>
                        <li><a href="postview_management.php">新增公告消息</a></li>
                        <li><a href="logout.php">登出</a></li>
                        
                    </ul>
                </div>        
            </div>
            <!--內容-->
            <div class="col-mg-10">
               <div class="sider-container">
                    <h1  >商品管理</h1>
                    <hr>
                    <div class="product-list">
                        <div class="product-list-title">
                            <p>產品列表:</p>
                            <a   id='add_product'>新增產品</a>
                        </div>
                        <div class="product-list-container " id='product-list-container'>
                            <table class='product-management-table'>
                                <tr>
                                    <th>產品編號</th>
                                    <th>產品名稱</th>
                                    <th>產品圖片</th>
                                    <th>產品售價</th>
                                    <th>產品存貨數</th>
                                    <th>產品加入時間</th>
                                    <th>設定</th>
                                    
                                </tr>
                                <tr>
                                    <td>001</td>
                                    <td>RED T-Shrits</td>
                                    <td><img src="./img/buy-1.jpg" alt=""></td>
                                    <td>$3000</td>
                                    <td>10</td>
                                    <td>2021/3/15</td>
                                    <td><a  class='dProduct' value='1'>移除</a>/<a  class="uProduct" value='1'>更新</a></td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>RED T-Shrits</td>
                                    <td><img src="./img/buy-1.jpg" alt=""></td>
                                    <td>$4000</td>
                                    <td>10</td>
                                    <td>2021/3/15</td>
                                    <td><a class='dProduct' value='2'>移除</a>/<a href="#" class="uProduct" value='2'>更新</a></td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>RED T-Shrits</td>
                                    <td><img src="./img/buy-1.jpg" alt=""></td>
                                    <td>$4000</td>
                                    <td>10</td>
                                    <td>2021/3/15</td>
                                    <td><a  class='dProduct' value='3'>移除</a>/<a href="#"  class="uProduct" value='003'>更新</a></td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>RED T-Shrits</td>
                                    <td><img src="./img/buy-1.jpg" alt=""></td>
                                    <td>$4000</td>
                                    <td>10</td>
                                    <td>2021/3/15</td>
                                    <td><a  class='dProduct' value='4'>移除</a>/<a href="#">更新</a></td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>RED T-Shrits</td>
                                    <td><img src="./img/buy-1.jpg" alt=""></td>
                                    <td>$4000</td>
                                    <td>10</td>
                                    <td>2021/3/15</td>
                                    <td><a href="#">移除</a>/<a href="#">更新</a></td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>RED T-Shrits</td>
                                    <td><img src="./img/buy-1.jpg" alt=""></td>
                                    <td>$4000</td>
                                    <td>10</td>
                                    <td>2021/3/15</td>
                                    <td><a href="#">移除</a>/<a href="#">更新</a></td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>RED T-Shrits</td>
                                    <td><img src="./img/buy-1.jpg" alt=""></td>
                                    <td>$4000</td>
                                    <td>10</td>
                                    <td>2021/3/15</td>
                                    <td><a href="#">移除</a>/<a href="#">更新</a></td>
                                </tr>
                            </table>
                        </div>
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
$(document).ready(function(){
    $("#add_product").click(function(){
        
        $.ajax({
           url:"add_product.php",
           method:"POST",
           data:{
               add_product:'add_product'
           },
           success:function(response){
                $("#product-list-container").html(response);
           },
           error: function (thrownError) {
                console.log(throwError);
            }
       });
    });
});
</script>
<script>
    //編輯產品ajax
    $(".uProduct").click(function(){
        var Product_val=$(this).attr('value');      
        $.ajax({
            url:"edit_product_info.php",
            method:'POST',
            data:{
                Product_value:Product_val
            },
            success:function(response){
                
                $("#product-list-container").html(response);
            },
            error: function (thrownError) {
                console.log(throwError);
            }       
        });
    });
</script>
<script>
    //刪除產品ajax
    $(".dProduct").click(function(){
        var Product_val=$(this).attr('value');
        $.ajax({
            url:'delete_product_info.php',
            method:'POST',
            data:{
                Product_value:Product_val
            },
            success:function(response){
                $("#product-list-container").html(response);
            },
            error:function(throwError){
                console.log(throwError);
            }
        });
    });
</script>
<script>



</script>

</body>
</html>
<?php
//新增商品
if($_SERVER['REQUEST_METHOD']==='POST'){
    
    if(isset($_POST['add_product'])){
        if($_FILES['file']['error']>0){
            echo "Error".$FILES['file']['error'];
            
        }else{
            if(file_exists("./img/".$_FILES['file']['name'])){
                
                
            }else{
                move_uploaded_file($_FILES["file"]["tmp_name"],"./img/".$_FILES["file"]["name"]);
            }
        
        
        $p_name=$_POST['p_name'];
        $p_img=$_FILES['file']['name'];
        $p_price=$_POST['p_price'];
        $p_size=$_POST['p_size'];
        $p_count=$_POST['p_count'];
        $p_info=$_POST['p_info'];
        $p_type=$_POST['p_type'];
        }
        $sql="INSERT INTO product (product_name,product_type,product_image,product_size,product_price,product_count,product_info,product_time) VALUES('$p_name','$p_type','$p_img','$p_size','$p_price','$p_count','$p_info',DEFAULT)";
        $result=mysqli_query($link,$sql);

        if($result===true){
            // header("location:product_management.php");
            echo "hello";
        }else{
            echo mysqli_error($link);   
        }
    }
}

?>
<?php
//編輯商品請求
if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['up-btn'])){
        $p_id=$_POST['p_id'];
        $p_name=$_POST['p_name'];
        $p_img=$_POST['p_image'];
        $p_price=$_POST['p_price'];
        $p_size=$_POST['size'];
        $p_count=$_POST['p_count'];
        $p_info=$_POST['p_info'];
        $sql="UPDATE product SET product_id='$p_id',product_name='$p_name',product_size='$p_size',product_image='$p_img',product_price='$p_price',product_info='$p_info',product_count='$p_count' WHERE product_id=$p_id";
        $result=mysqli_query($link,$sql);
        if($result===true){
            header("location:product_management.php");
        }else{
            echo mysqli_error($link);
        }
    }
}
?>
<?php
//移除商品請求
if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['del_btn'])){
        $p_id=$_POST['p_id'];
        $sql="DELETE FROM product WHERE product_id='$p_id'";
        $result=mysqli_query($link,$sql);
        if($result===true){
            header("location:product_management.php");
        }else{
            echo mysqli_error($link);
        }
    }
}

?>
