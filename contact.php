<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-MING_STORE</title>
    
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style30.css">
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
                        <li><a href="contact.php" class='active'>聯絡我們</a></li>
                        <li><a href="member_center.php">會員中心</a></li>
                    </ul>
                </nav>
                <a href="like_list.php" class='like-icon'>喜愛清單<i class="fas fa-heart"></i></a>
                <a href="cart.php">購物車<i class="fas fa-shopping-cart"><span class='cart_quantity'>0</span></i></a>
                <img src="./img/menu.png" alt="" class='menu-icon' onclick="menutoggle()">
            </div>
        </div>
    <!-- jumbotron-->
    <div class="jumbotron contact-jumbotron">
        <h1>購物網</h1>
        <h3>聯絡我們</h3>
    </div>
   <!-- 內容 -->
   <div class="small-container contact-container">
        <div class="row">
            <div class="col contact-title">
                <h1>contact us</h1>
            </div>

            <div class="col contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3616.81744486076!2d121.45357901460775!3d24.972324984001318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346802d0b5243783%3A0x9f518998b09020f3!2z5a6P5ZyL5b636ZyW56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1615341090167!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <form action="" method='post'>
                    <div class='form-group'>
                        <label for="FullName">Full Name:</label>
                        <input type="text"  id='FullName' name='FullName' class="form-control">
                    </div>
                    <div class='form-group'>
                        <label for="Email">Email:</label>
                        <input type="text" id='Email' name='Email' class="form-control">
                    </div>
                    <div class='form-group'>
                        <label for="Message">Message</label>
                        <br>
                        <textarea name="" class="form-control textarea-control" id="Message" cols="30" rows="10" ></textarea>
                    </div>
                    <input type="submit" value='送出' class="form-control contact-btn">
                </form>
            </div>
            <div class="col-2">
                <div class='contact-info'>
                    <div class='contact-group'>
                        <h3><i class="fas fa-phone"></i>聯絡電話:</h3>
                        <p>09-12345-678</p>
                    </div>
                     <div class='contact-group'>
                        <h3><i class="fas fa-map-marker-alt"></i>地址:</h3>
                        <p>新北市土城區青雲路380巷宏國德霖科技大學</p>
                    </div>
                    <div class='contact-group'>
                        <h3><i class="fas fa-envelope"></i>信箱:</h3>
                        <p>hudtxxx@gmail.com</p>
                    </div>
                    <div class='contact-group'>
                        <h3><i class="fas fa-bus"></i>公車:</h3>
                        <p>275,262</p>
                    </div>
                    <div class='contact-group'>
                        <h3><i class="fas fa-bus"></i>捷運:</h3>
                        <p>海山站</p>
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