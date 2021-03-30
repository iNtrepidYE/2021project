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
        <h1 class="edit-self-title"><i class="fas fa-user-edit"></i>編輯個人資料</h1>
        <hr>
        <div class="row">
            <div class="col">
                <form action="" method='post' class='edit_self_form'>
                    <div class="EditSelf-group">
                        <div class="EditSelf-col-6 EditSelf-title">
                            您的身分:
                        </div>
                        <div class="EditSelf-col-6">
                            一般會員
                        </div>
                    </div>
                    <div class="EditSelf-group">
                        <div class="EditSelf-col-6 EditSelf-title">
                            <span class='required-star'>*</span><label for="user">用戶名</label>
                        </div>
                        <div class="EditSelf-col-6">
                            <input type="text" id='user' required>
                        </div>
                    </div>
                    <div class="EditSelf-group">
                        <div class="EditSelf-col-6 EditSelf-title">
                            <span class='required-star'>*</span><label for="">性別:</label>
                        </div>
                        <div class="EditSelf-col-6">
                            <input type="radio" name='gender' value='men' checked>男
                            <input type="radio" name='gender' value='women'>女
                        </div>
                    </div>
                    <div class="EditSelf-group">
                        <div class="EditSelf-col-6 EditSelf-title">
                            <span class='required-star'>*</span><label for="">生日:</label>
                        </div>
                        <div class="EditSelf-col-6">
                            <input type="date" id="datemin" name="datemin" min="2000-01-01">
                        </div>
                    </div>
                    <div class="EditSelf-group">
                        <div class="EditSelf-col-6 EditSelf-title">
                            <span class='required-star'>*</span><label for="">聯絡電話:</label>
                        </div>
                        <div class="EditSelf-col-6">
                            <input type="telephone"  name="telephone" >
                        </div>
                    </div>
                    <div class="EditSelf-group">
                        <div class="EditSelf-col-6 EditSelf-title">
                            <span class='required-star'>*</span><label for="">家用電話:</label>
                        </div>
                        <div class="EditSelf-col-6">
                            <input type="text"  name="home-contact" >
                        </div>
                    </div>
                    <div class="EditSelf-group">
                        <div class="EditSelf-col-6 EditSelf-title">
                            <span class='required-star'>*</span><label for="">聯絡地址:</label>
                        </div>
                        <div class="EditSelf-col-6">
                            <input type="text">
                        </div>
                    </div>
                    <div class="EditSelf-gruop">
                        <div class="EditSelf-save-btn">
                            <input type="submit" value='儲存個人資料'>
                        </div>
                    </div>
                </form>
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