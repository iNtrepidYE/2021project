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
      <div id="main-title" class="icon-3"><i class="fas fa-cart-plus"></i>隱私權政策</div>
      <hr>     
          <h5>本購物城重視消費者的隱私權益，希望您能安心的使用本購物城的各項服務與資訊，特此向您說明相關的隱私權保護政策，以保障您的權益，敬請詳閱及充分瞭解下列內容：</h5>
            <div class="privacy-group">
                <h6>一、隱私權保護政策的適用範圍</h6>
                <p>隱私權保護政策內容，包括本購物城如何處理在您使用網站服務時收集到的個人識別資料。隱私權保護政策不適用於本購物城以外的相關連結網站，也不適用於非本購物城所委託或參與管理的人員。</p>
            </div>
            <div class="privacy-group">
            <h6>二、資料的蒐集與使用方式 </h6>
            <p>為了在本購物城上提供您最佳的互動性服務，會請您提供相關個人的資料，其範圍如下：<br />
            1. 本購物城在您使用服務信箱、問卷調查等互動性功能時，會保留您所提供的姓名、電子郵件地址、聯絡方式及使用時間等。<br>
            2. 於一般瀏覽時，伺服器會自行記錄相關行徑，包括您使用連線設備的IP位址、使用時間、使用的瀏覽器、瀏覽及點選資料記錄等，做為我們增進網站服務的參考依據，此記錄為內部應用，決不對外公布。<br>
            3. 為提供精確的服務，本購物城會將收集的問卷調查內容進行統計與分析，分析結果之統計數據或說明文字呈現，除供內部研究外，本購物城會視需要公佈統計數據及說明文字，但不涉及特定個人之資料。<br>
            4.在未經消費者同意或其他法令之特別規定之下，本購物城絕不會將您的個人資料提供予任何與服務無關之第三人。本購物城確保僅為履行訂單及行銷之目的使用會員的資料，不會向任何人出售或出借會員的個人識別資料。</p>

            </div>

            <div class="privacy-group">
                <h6>三、資料之保護</h6>
                <p>1. 本購物城主機均設有防火牆、防毒系統等相關的各項資訊安全設備及必要的安全防護措施，加以保護網站及您的個人資料採用嚴格的保護措施，只由經過授權的人員才能接觸您的個人資料，相關處理人員皆簽有保密合約，如有違反保密義務者，將會受到相關的法律處分。本公司以SSL（安全通訊協定）憑證。<br>
                2. 如因業務需要有必要委託本購物城相關單位提供服務時，本購物城亦會嚴格要求其遵守保密義務，並且採取必要檢查程序以確定其將確實遵守。</p>
            </div>

            <div class="privacy-group">
                <h6>四、網站對外的相關連結</h6>
                <p>本購物城的網頁提供其他網站的網路連結，您也可經由本購物城所提供的連結，點選進入其他網站。但該連結網站不適用本購物城的隱私權保護政策，您必須參考該連結網站中的隱私權保護政策。</p>
            </div>

            <div class="privacy-group">
                <h6>五、Cookie之使用</h6>
                <p>為了提供您最佳的服務體驗，本購物城使用cookie技術，以便於提供會員所需要的服務；cookie是網站伺服器用來和會員瀏覽器進行溝通的一種技術，它可能在會員的電腦中隨機儲存字串，用以辨識區別使用者，若會員關閉cookie有可能導致無法順利登入網站或無法使用購物車等狀況。</p>
            </div>

            <div class="privacy-group">
                <h6>六、隱私權保護政策之修正</h6>
                <p>本購物城隱私權保護政策將因應需求隨時進行修正，將以合於產業標準之合理技術及程序，維本購物城個人資料之安全，修正後的條款將刊登於網站上。</p>
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