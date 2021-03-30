<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-MING_STORE</title>
    
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style20.css">
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
                <a href="like_list.php" class='like-icon'>喜愛清單<i class="fas fa-heart"></i></a>
                <a href="cart.php">購物車<i class="fas fa-shopping-cart"><span class='cart_quantity'>0</span></i></a>
                <img src="./img/menu.png" alt="" class='menu-icon' onclick="menutoggle()">
            </div>
        </div>

    <!--內容-->
    <div class="small-container privacy-container">
      <!-- main-title -->
      <div id="main-title" class="icon-3"><i class="fas fa-cart-plus"></i>常見問題</div>
      <hr>     
            <div class="faq-group">
                <h4>會員問題：</h4>
                <ul>
                    <li>
                        <span class='faq-title'>
                            是否一定要先加入會員才能購物？
                        </span>
                        <br>
                        <p>
                            為保障您我雙方的權益，採會員機制，以便在您進行購物時有交易紀錄可供日後查詢，購物前請先加入會員。
                        </p>
                    </li>
                    <li>
                        <span class='faq-title'>
                            如何加入會員？
                        </span>
                        <br>
                        <p>
                        詳讀服務條款及購物說明後，在本網上點選加入會員進行註冊。<br>
                        註冊成功後系統會自動寄送「會員加入成功通知信」至您的E-mail，您即可以申請的帳號密碼登入會員。
                        </p>
                    </li>
                    <li>
                        <span class='faq-title'>
                            無法順利加入會員該怎麼辦？
                        </span>
                        <br>
                        <p>
                            如果您按指示步驟加入會員，但仍無法順利加入，請洽客服專線。
                        </p>
                    </li>
                    <li>
                        <span class='faq-title'>
                            加入會員時一定要留個人資料嗎？
                        </span>
                        <br>
                        <p>
                            為了維護您個人的權利，請您加入會員時詳細填寫會員資料，若是寄送地址與聯絡電話之資料有所變更，應立即更正，不得以資料不符為由，否認其購買行為或是拒絕付款。
                        </p>
                    </li>
                    <li>
                        <span class='faq-title'>
                            加入會員後還能更改個人資料嗎？
                        </span>
                        <br>
                        <p>
                            您可以在登入會員後，至上方「會員專區＞會員基本資料」進行檢視及修改帳號資訊。
                        </p>
                    </li>
                </ul>
            </div>
            <hr>
            <div class="faq-group">
                <h4>購物問題：</h4>
                <ul>
                    <li>
                        <span class='faq-title'>
                            是否訂購成功？
                        </span>
                        <br>
                        <p>
                            當您的訂單成立後，系統會發送「訂單確認」E-mail給您，確認訂單詳細資料，包括訂購明細和收件資訊。若未收到E-mail，很可能代表您的訂單沒有完成，此時請洽客服專線。
                        </p>
                    </li>
                    <li>
                        <span class='faq-title'>
                            如何追蹤訂單進度？
                        </span>
                        <br>
                        <p>
                            有關商品的出貨進度，可在「會員專區＞訂單查詢」中查詢。
                        </p>
                    </li>
                    <li>
                        <span class='faq-title'>
                            有哪些付款方式？
                        </span>
                        <br>
                        <p>
                            目前只有現金支付
                        </p>
                    </li>
                    <li>
                        <span class='faq-title'>
                            訂單完成後多久可以收到商品？
                        </span>
                        <br>
                        <p>
                            無論您是以哪種方式訂購商品，配送的方式均以 "新竹貨運" 或 "宅急便"配送；到貨日原則上以5~7個工作天內到貨，或請洽客服專線。
                        </p>
                    </li>
                    <li>
                        <span class='faq-title'>
                            若是公司機關、親友團體大量訂購的話，會有更多的折扣優惠嗎？ 
                        </span>
                        <br>
                        <p>
                            訂單金額超過１萬元，請洽客服專線，由專人為您服務。
                        </p>
                    </li>
                </ul>
            </div>
            <hr>
        
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