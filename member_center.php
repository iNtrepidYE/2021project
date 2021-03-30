<?php
require_once("config.php");
$user_id=$_SESSION['id'];

$sql="SELECT member_token,member_id FROM member WHERE member_id=$user_id";
$result=mysqli_query($link,$sql);
if($row=mysqli_fetch_array($result)){
    $member_token=$row['member_token'];
    
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
    <link rel="stylesheet" href="./css/style40.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

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
                        <li><a href="member_center.php" class='active'>會員中心</a></li>
                    </ul>
                </nav>
                <a href="like_list.php" class='like-icon'>喜愛清單<i class="fas fa-heart"></i></a>
                <a href="cart.php">購物車<i class="fas fa-shopping-cart"><span class='cart_quantity'>0</span></i></a>
                <img src="./img/menu.png" alt="" class='menu-icon' onclick="menutoggle()">
            </div>
        </div>
    <!-- 內容-->
    <div class="small-container">
        <h1 class='member-title'>會員中心</h1>
        <hr>
        <h3 class='choose-item'>請選擇您要查詢及修改的項目</h3>
        <div class="row">
            <div class="col-4">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-user-cog"></i>個人資料
                    </h5>
                    <p class="card-text">
                        平台個人資料填寫，確保帳戶安全以及相關資料查證！
                    </p>
                    <div class="card-link">
                        <a href="edit_self.php" class='btn-regd'>個人資料</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card-body">
                    <h5 class="card-title">
                    <i class="fas fa-lock"></i>修改密碼
                    </h5>
                    <p class="card-text">
                        您可以變更密碼以確保帳戶安全，也可以在忘記密碼時重設密碼。
                    </p>
                    <div class="card-link">
                        <a href="reset_password.php?token=<?php echo $member_token;?>" class='btn-regd'>修改密碼</a>
                    </div>      
                </div>
            </div>
            <div class="col-4">
                <div class="card-body">
                    <h5 class="card-title">
                    <i class="fas fa-file-invoice"></i>訂單紀錄
                    </h5>
                    <p class="card-text">
                        平台個人資料填寫，確保帳戶安全以及相關資料查證！
                    </p>
                    <div class="card-link">
                        <a href="order_record.php" class='btn-regd'>訂單紀錄</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card-body">
                    <h5 class="card-title">
                    <i class="fas fa-comments"></i>留言板
                    </h5>
                    <p class="card-text">
                        平台個人資料填寫，確保帳戶安全以及相關資料查證！
                    </p>
                    <div class="card-link">
                        <a href="message_board.php" class='btn-regd'>加入討論</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-gavel"></i>隱私權政策
                    </h5>
                    <p class="card-text">
                        平台個人資料填寫，確保帳戶安全以及相關資料查證！
                    </p>
                    <div class="card-link">
                        <a href="privacy-policy.php" class='btn-regd'>點選了解</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-question-circle"></i>常見問題
                    </h5>
                    <p class="card-text">
                        平台個人資料填寫，確保帳戶安全以及相關資料查證！
                    </p>
                    <div class="card-link">
                        <a href="faq.php" class='btn-regd'>點選了解</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-balance-scale"></i>違規停權說明
                    </h5>
                    <p class="card-text">
                        平台個人資料填寫，確保帳戶安全以及相關資料查證！
                    </p>
                    <div class="card-link">
                        <a href="Break_rules_info.php" class='btn-regd'>點選了解</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-bullhorn"></i>公告專區
                    </h5>
                    <p class="card-text">
                        平台個人資料填寫，確保帳戶安全以及相關資料查證！
                    </p>
                    <div class="card-link">
                        <a href="postview.php" class='btn-regd'>點選了解</a>
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

</body>
</html>