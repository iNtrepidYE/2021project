
<?php
session_start();


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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&family=Recursive:wght@600&display=swap" rel="stylesheet">
</head>
<body>

    <!--頁首-->
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="./img/logo.png" alt="" width="50px" height="50px" >
                </div>
                <nav>
                    <ul id='MenuItems'>
                        <li><a href="index.php" class='active'><i class="fas fa-home"></i>首頁</a></li>
                        <?php if(isset($_SESSION['loggedin'])!==true){ echo "<li><a href='login.php'>登入</a></li>";}?>
                        <?php if(isset($_SESSION['loggedin'])!==true){ echo "<li><a href='sign_up.php'>註冊</a></li>";}?>
                        <li><a href="product.php">產品區</a></li>
                        <li><a href="about.php">關於我們</a></li>
                        <li><a href="contact.php">聯絡我們</a></li>
                        <li><a href="member_center.php">會員中心</a></li>
                        <li><a href="management.php">管理者介面</a></li>
                        <?php if(isset($_SESSION['loggedin'])===true){ echo "<li><a href='logout.php'>登出</a></li>";}?>
                    </ul>
                </nav>
                <a href="like_list.php" class='like-icon'>喜愛清單<i class="fas fa-heart"></i></a>
                <a href="cart.php">購物車<i class="fas fa-shopping-cart"><span class='cart_quantity'>0</span></i></a>
                <img src="./img/menu.png" alt="" class='menu-icon' onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>歡迎來到</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a 
                    <br>galley of type and scrambled it to make a type specimen book.</p>
                    <a href="product.php" class='btn'>立即購買 &#8594;</a>
                </div>
                <div class="col-2 header-model">
                    <img src="./img/model_1.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!--精選分類-->
        <div class="categories">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <img src="./img/IMG_0026.PNG" alt="">
                    </div>
                    <div class="col-3">
                        <img src="./img/IMG_0027.PNG" alt="">
                    </div>
                    <div class="col-3">
                        <img src="./img/IMG_0028.PNG" alt="">
                    </div>
                </div>
            </div>
        </div>

    <!--精選產品-->
        <div class="small-container">
            <h2 class='title'>Feature Product</h2>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product-9.jpg" alt="">
                        </div>
                        <div class="card-info">
                            <h4>Red printed T-shirt</h4>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>                      
                            </div>
                            <p>$50.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product-10.jpg" alt="">
                        </div>
                        <div class="card-info">
                            <h4>Red printed T-shirt</h4>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>                      
                            </div>
                            <p>$50.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product-11.jpg" alt="">
                        </div>
                        <div class="card-info">
                            <h4>Red printed T-shirt</h4>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>                      
                            </div>
                            <p>$50.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product-12.jpg" alt="">
                        </div>
                        <div class="card-info">
                            <h4>Red printed T-shirt</h4>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>                      
                            </div>
                            <p>$50.00</p>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="title">Latest Products</h2>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product-1.jpg" alt="">
                        </div>
                        <div class="card-info">
                            <h4>Red printed T-shirt</h4>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>                      
                            </div>
                            <p>$50.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product-2.jpg" alt="">
                        </div>
                        <div class="card-info">
                            <h4>Red printed T-shirt</h4>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>                      
                            </div>
                            <p>$50.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product-3.jpg" alt="">
                        </div>
                        <div class="card-info">
                            <h4>Red printed T-shirt</h4>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>                      
                            </div>
                            <p>$50.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product-4.jpg" alt="">
                        </div>
                        <div class="card-info">
                            <h4>Red printed T-shirt</h4>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>                      
                            </div>
                            <p>$50.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product-5.jpg" alt="">
                        </div>
                        <div class="card-info">
                            <h4>Red printed T-shirt</h4>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>                      
                            </div>
                            <p>$50.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product-6.jpg" alt="">
                        </div>
                        <div class="card-info">
                            <h4>Red printed T-shirt</h4>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>                      
                            </div>
                            <p>$50.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product-7.jpg" alt="">
                        </div>
                        <div class="card-info">
                            <h4>Red printed T-shirt</h4>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>                      
                            </div>
                            <p>$50.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="./img/product-8.jpg" alt="">
                        </div>
                        <div class="card-info">
                            <h4>Red printed T-shirt</h4>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>                      
                            </div>
                            <p>$50.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- offer-->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="./img/IMG_0026.PNG" class='offer-img'alt="">
                </div>
                <div class="col-2">
                    <p>Exclusive Availabel on RedStore</p>
                    <h1>藍白拖 12</h1>
                    <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</small>
                    <br>
                    <a href="product.php" class='btn'>Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>

    <!--brands-->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="./img/logo-godrej.png" alt="">
                </div>
                <div class="col-5">
                    <img src="./img/logo-oppo.png" alt="">
                </div>
                <div class="col-5">
                    <img src="./img/logo-coca-cola.png" alt="">
                </div>
                <div class="col-5">
                    <img src="./img/logo-paypal.png" alt="">
                </div>
                <div class="col-5">
                    <img src="./img/logo-philips.png" alt="">
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
                        <li><a href="https://www.facebook.com/">Facebook</a></li>
                        <li><a href="https://twitter.com/?lang=zh-tw">Twitter</a></li>
                        <li><a href="https://www.instagram.com/">Instagram</a></li>
                        <li><a href="https://www.youtube.com/">Youtube</a></li>
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