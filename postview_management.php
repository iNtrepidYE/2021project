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
    <link rel="stylesheet" href="./css/style34.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

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
                        <li ><a href="product_management.php">商品管理</a></li>
                        <li ><a href="member_management.php">客戶管理</a></li>
                        <li ><a href="order_management.php">訂單管理</a></li>
                        <li><a href="about.php">關於我們</a></li>
                        <li><a href="contact.php">聯絡我們</a></li>
                        <li class='menu_active'><a href="postview_management.php">新增公告消息</a></li>
                        <li><a href="logout.php">登出</a></li>
                        
                    </ul>
                </div>        
            </div>
            <!--內容-->
            <div class="col-mg-10">
               <div class="sider-container">
                    <h1>公告管理</h1>
                    
                    <hr>
                    <div class="product-list">
                        <div class="product-list-title">
                            <p>公告列表:</p>
                            <a  id='add_postview'>新增公告</a>
                        </div>
                        <div class="product-list-container" id='product-list-container'>
                            <table class='product-management-table'>
                                <tr>
                                    <th>公告編號</th>
                                    <th>公告類型</th>
                                    <th>公告主題</th>
                                    <th>公告內容</th>
                                    <th>公告時間</th>
                                    <th>設定</th>                             
                                </tr>
                            
                                <tr>
                                    <td><a href='#'>2021031511</a></td>
                                    <td>體育</td>
                                    <td>運動的好處</td>
                                    <td>可以變帥</td>
                                    <td>2021-03-15</td>
                                    <td><a value='1' class='dPostview'>移除</a>/<a value='1' class='uPostview'>編輯</a></td>
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
//新增公告使用axios
$(document).ready(function(){
    $("#add_postview").click(function(){    
        axios({
            url:'add_postview.php',
            method: 'post',
            //axios預設請求資料是json 利用header轉成form格式
            header:{"Content-Type":"application/x-www-form-urlencoded"},
            data:"add_postview=add_postview"
        })
        //then()成功接受資料
        .then(res=>{
            var product=$("#product-list-container");
            product[0].innerHTML = res.data;        
        });   
    });
});
</script>
<!--編輯公告-->
<script>
    $(".uPostview").click(function(){
        var Postview_val=$(this).attr('value');      
        alert(Postview_val);
        axios({
            url:'edit_postview_info.php',
            method:'post',
            headers: {'Content-Type': 'application/json'},            
            data:{edit_Postview:Postview_val}
        })
        .then(res=>{
            var product=$("#product-list-container");
            product[0].innerHTML = res.data; 
        })
        .catch(function (error) {
            console.log(error);
        });
    });
</script> 
</script>
</body>
</html>


<?php
//新增公告
if($_SERVER['REQUEST_METHOD']==='POST'){ 
    if(isset($_POST['add_postview'])){
        $post_type=$_POST['postview_type'];
        $post_topic=$_POST['postview_topic'];
        $post_info=$_POST['postview_info'];
        $sql="INSERT INTO postview (postview_type,postview_topic,postview_info) VALUES('$post_type','$post_topic','$post_info')";
        $result=mysqli_query($link,$sql);
        if($result===true){
            header("location:postview_management.php");
        }else{
            echo mysqli_error($link);
        }
    }
}
?>

