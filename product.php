<?php
require_once('config.php');
$sql="SELECT * FROM product";
$result=mysqli_query($link,$sql);
$per_total=mysqli_num_rows($result);//計算總比數
$per=8;//每頁要顯示的產品數量
$pages=ceil($per_total/$per);//計算總頁數

if(!isset($_GET['page'])){
    $page=1;
}else{
    $page=$_GET['page'];
}
$start=($page-1)*$per;//計算每頁開始序號
$result=mysqli_query($link,"SELECT * FROM product LIMIT $start,$per");
$page_start=$start+1;
$page_end=$start+$per;
if($page_end>$per_total){
    $page_end=$per_total;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-MING_STORE</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                        <li><a href="index.php"><i class="fas fa-home"></i>首頁</a></li>
                        <li><a href="login.php">登入</a></li>
                        <li><a href="sign_up.php">註冊</a></li>
                        <li><a href="product.php" class='active'>產品區</a></li>
                        <li><a href="about.php">關於我們</a></li>
                        <li><a href="contact.php">聯絡我們</a></li>
                        <li><a href="member_center.php">會員中心</a></li>
                    </ul>
                </nav>
                <a href="like_list.php" class='like-icon'>喜愛清單<i class="fas fa-heart"></i></a>
                <a href="cart.php">購物車<i class="fas fa-shopping-cart"><span class='cart_quantity'>0</span></i></a>
                <img src="./img/menu.png" alt="" class='menu-icon' onclick="menutoggle()">
            </div>
        </div>

    <!--carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1570857502809-08184874388e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=798&q=80" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1441984904996-e0b6ba687e04?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--精選產品-->
        <div class="small-container">
            <div class="row row-2">
                <h2>All Products</h2>
                <div class='product-info-choose'>
                    搜尋產品名稱:<input type="text">
                    <select name="" id="">
                        <option value="">預設</option>
                        <option value="">價格由低到高</option>
                        <option value="">價格由高到低</option>
                        <option value="">銷售數量由高到低</option>
                        <option value="">最新商品</option>
                    </select>
                </div>
            </div>


            <div class="row">
                <?php
                
                    $sql="SELECT * FROM product LIMIT $start,$per";
                    $result=mysqli_query($link,$sql);
                    while($row=mysqli_fetch_array($result)){
                        echo "<div class='col-4 col-4-product'>";   
                            echo "<a href='product_detail.php?p_id=".$row['product_id']."' class='card_link'><div class='card'>";
                                echo "<div class='card-img'>";
                                    echo "<img src='./img/".$row['product_image']."' alt=''>";
                                echo "</div>";
                            echo "<div class='card-info'>";
                                    echo "<h4>Red printed T-shirt</h4>";
                                    echo "<div class='rating'>";
                                    echo    "<i class='fas fa-star'></i>";
                                    echo    "<i class='fas fa-star'></i>";
                                    echo   "<i class='fas fa-star'></i>";
                                    echo   "<i class='fas fa-star-half-alt'></i>";
                                    echo   "<i class='far fa-star'></i>";                  
                                    echo "</div>";
                                echo "<p>$50.00</p>";
                            echo "</div>";
                        echo "</div></a>";
                    echo "</div>";
                    }
                ?>           
            </div>
            <div class='row'>
                <div class="col-md-6" align="center">
                <?php
                    //每頁顯示筆數明細
                    echo '顯示 '.$page_start.' 到 '.$page_end.' 筆 共 '.$per_total.' 筆，目前在第 '.$page.' 頁 共 '.$pages.' 頁'; 
                ?>
                </div>
                <div class="col-md-6" align="center">
                <?php
                        if($pages>1){  //總頁數>1才顯示分頁選單
                    
                            //分頁頁碼；在第一頁時,該頁就不超連結,可連結就送出$_GET['page']
                            if($page=='1'){
                                echo "首頁 ";
                                echo "上一頁 ";		
                            }else{
                                echo "<a href=?page=1>首頁 </a> ";
                                echo "<a href=?page=".($page-1).">上一頁 </a> ";		
                            }
                        
                            //此分頁頁籤以左、右頁數來控制總顯示頁籤數，例如顯示5個分頁數且將當下分頁位於中間，則設2+1+2 即可。若要當下頁位於第1個，則設0+1+4。也就是總合就是要顯示分頁數。如要顯示10頁，則為 4+1+5 或 0+1+9，以此類推。	
                            for($i=1 ; $i<=$pages ;$i++){ 
                                $lnum = 2;  //顯示左分頁數，直接修改就可增減顯示左頁數
                                $rnum = 2;  //顯示右分頁數，直接修改就可增減顯示右頁數
                        
                            //判斷左(右)頁籤數是否足夠設定的分頁數，不夠就增加右(左)頁數，以保持總顯示分頁數目。
                            if($page <= $lnum){
                                $rnum = $rnum + ($lnum-$page+1);
                            }
                        
                            if($page+$rnum > $pages){
                                $lnum = $lnum + ($rnum - ($pages-$page));
                            }
                        
                                //分頁部份處於該頁就不超連結,不是就連結送出$_GET['page']
                                    if($page-$lnum <= $i && $i <= $page+$rnum){
                                        if($i==$page){
                                        echo $i.' ';
                                                }else{
                                                    echo '<a href=?page='.$i.'>'.$i.'</a> ';
                                            }
                                        }
                                    }
                        
                        
                            //在最後頁時,該頁就不超連結,可連結就送出$_GET['page']	
                            if($page==$pages){
                                echo " 下一頁";
                                echo " 末頁";	
                            }else{
                                echo "<a href=?page=".($page+1)."> 下一頁</a>";
                                echo "<a href=?page=".$pages."> 末頁</a>";		
                            }
                    }
                    ?>	
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
    <script>
    var MenuItems=document.getElementById("MenuItems");
    MenuItems.style.maxHeight="0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight=="0px"){
            MenuItems.style.maxHeight="250px";
        }else{
            MenuItems.style.maxHeight="0px";
        }
    }
</script>
</body>
</html>