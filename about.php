<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-MING_STORE</title>
    
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style26.css">
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
                        <li><a href="about.php" class='active'>關於我們</a></li>
                        <li><a href="contact.php">聯絡我們</a></li>
                        <li><a href="member_center.php">會員中心</a></li>
                    </ul>
                </nav>
                <a href="like_list.php" class='like-icon'>喜愛清單<i class="fas fa-heart"></i></a>
                <a href="cart.php">購物車<i class="fas fa-shopping-cart"><span class='cart_quantity'>0</span></i></a>
                <img src="./img/menu.png" alt="" class='menu-icon' onclick="menutoggle()">
            </div>
        </div>
    <!-- jumbotron-->
    <div class="jumbotron about-jumbotron">
        <div class='about-title'>
        <h1>德霖資訊工程系</h1>
        <h3>關於我們團隊介紹</h3>
        </div>
    </div>
    <!--- 人員名單--->
    <div class="small-container">
        <div class="row">
            <div class="col">
                <div class="col-guy-img">
                    <img src="./img/boy.png" alt="">
                </div>
                <div class="col-guy-info">
                    <h2 class='guy-name'><i class="fas fa-angle-double-right"></i>陳冠銘<span>&nbsp;組長</span></h2>
                    <hr>
                    <h4 class='duty-text'>負責:程式</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque iure excepturi, blanditiis facere, deserunt placeat expedita voluptate perferendis incidunt amet mollitia error, cupiditate illo aspernatur qui possimus obcaecati at cum.</p>
                </div>
            </div>
            <div class="col">
                <div class="col-guy-img">
                    <img src="./img/boy.png" alt="">
                </div>
                <div class="col-guy-info">
                    <h2 class='guy-name'><i class="fas fa-angle-double-right"></i>陳建銘<span>&nbsp;組員</span></h2>
                    <hr>
                    <h4 class='duty-text'>負責:資料庫</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque iure excepturi, blanditiis facere, deserunt placeat expedita voluptate perferendis incidunt amet mollitia error, cupiditate illo aspernatur qui possimus obcaecati at cum.</p>
                </div>
            </div>
            <div class="col">
                <div class="col-guy-img">
                    <img src="./img/girl.png" alt="">
                </div>
                <div class="col-guy-info">
                    <h2 class='guy-name'><i class="fas fa-angle-double-right"></i>張瑀軒<span>&nbsp;組員</span></h2>
                    <hr>
                    <h4 class='duty-text'>負責:網頁設計</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque iure excepturi, blanditiis facere, deserunt placeat expedita voluptate perferendis incidunt amet mollitia error, cupiditate illo aspernatur qui possimus obcaecati at cum.</p>
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