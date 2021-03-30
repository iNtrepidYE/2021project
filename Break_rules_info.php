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
    <div class="small-container member-container">
      <!-- main-title -->
        <div id="main-title" class="icon-3"><i class="fas fa-cart-plus"></i>違規停權說明</div>
        <hr>     
        <h5>購物網提供給大家更好的服務平台，並維護網站秩序、公平性及會員相關權益，對於違反網站相關規範的會員，訂制了違規停權規範，並於網站公告<a href='#'>『會員停權名單』</a>。</h5><br>
        <h4  class='rules-title'>停權說明如下：</h4><br>
        <table class='rules-table'>
            <tr>
                <th>第1~3次違規</th>
                <td>發送改善提醒通知信</td>
            </tr>
            <tr>
                <th>第4次違規</th>
                <td>帳號停權7天</td>
            </tr>
            <tr>
                <th>第5次違規</th>
                <td>帳號停權30天</td>
            </tr>
            <tr>
                <th>第二次停權開通後，再次違規</th>
                <td>永久停權 (不再開通帳號)</td>
            </tr>
        </table>
        <br>
        <p>當會員初次違規時，系統將寄發改善通知信件並告知原因，以避免會員再次觸犯。若屢勸不聽，將依網站規定處置並再次寄發改善通知信件提醒，當停權期限過後，系統將自動開通該會員帳號；但若經連續停權二次，則無法再給予復權的機會，且不另行寄發停權通知信件。</p><br>
        <h4 class='rules-title'>重大違規：</h4>
        <p>請會員們特別注意，以下為重大違規項目，只要有過一次違規記錄，將立即停權(視情節嚴重性，必要時則為永久停權)，二次停權後，將不再給予任何復權機會</p><br>
        <ol class='rules-list'>
            <li>註冊資料不實</li>
            <li>多次遭會員檢舉及違反網站規定未改善</li>
            <li>多次大量刊登違規案件或惡意洗版</li>
            <li>嚴重侵犯他人智慧財產權與專利權</li>
            <li>會員利用網站平台功能使用之便利進行不法行為</li>
            <li>多次違反網站規定屢勸無效</li>
            <li>要求私下交易 (如要求到其他網站交易或面交)</li>
            <li>註冊使用多筆不同帳號刊登案件。</li>
        </ol>
        <br>
        <p>由於停權對於會員自身權益影響甚大，所以請務必於刊登案件、交稿前仔細了解各項相關規範，以免影響個人權益，期盼會員能夠遵守規則，共同營造良好的外包服務平台。</p>
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