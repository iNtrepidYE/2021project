<?php
require_once("config.php");

?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-MING_STORE</title>
    
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style40.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
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
                        <li><a href="index.php" class='active'><i class="fas fa-home"></i>首頁</a></li>
                        <li><a href="login.php">登入</a></li>
                        <li><a href="sign_up.php">註冊</a></li>
                        <li><a href="product.php">產品區</a></li>
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

    <!--單項產品詳細資訊-->
    <div class="small-container single-product">
        <div class="row">
            <?php
                $p_id=$_GET['p_id'];
                $sql="SELECT * FROM product WHERE product_id=$p_id";
                $result=mysqli_query($link,$sql);
                if($row=mysqli_fetch_array($result)){
                echo  "<div class='col-2'>
                    <img src='./img/$row[product_image]' width='100%' alt='' class='single-product-img' id='ProductImg'>
                    
                        <div class='small-img-row'>
                            <div class='small-img-col'>
                                <img src='./img/gallery-1.jpg' width='100%' alt='' class='small-img'>
                            </div>
                            <div class='small-img-col'>
                                <img src='./img/gallery-2.jpg' width='100%' alt='' class='small-img'>
                            </div>
                            <div class='small-img-col'>
                                <img src='./img/gallery-3.jpg' width='100%' alt='' class='small-img'> 
                            </div>
                            <div class='small-img-col'>
                                <img src='./img/gallery-4.jpg' width='100%'' alt='' class='small-img'>
                            </div>
                        </div>
                    </div>
                <div class='col-2'>
                    <p>Home / $row[product_type]</p>
                    <h1>$row[product_name]</h1>
                    <h4>$$row[product_price]</h4>
                    <form method='post' action=".htmlspecialchars($_SERVER['REQUEST_URI']).">
                    <select name='cart_size' id=''>
                        <option value='none'>Select Size</option>
                        <option value='XXL'>XXL</option>
                        <option value='XL'>XL</option>
                        <option value='Large'>Large</option>
                        <option value='Medium'>Medium</option>
                        <option value='Small'>Small</option>      
                    </select>
                    <input type='number' name='cart_count' value='1'><br>
                    <input type='submit' value='加入購物車' name='add_cart'>

                    </form>
                    <a id='add-like' class='add-like'>加入最愛</a>
                    <h3>Product Details<i class='fas fa-indent'></i></h3>
                    <br>
                    <p>$row[product_info]</p>
                </div>
    </div>";
            }
    ?>
</div>
    <!--推薦商品標題-->
        <div class="small-container">
            <div class="row row-2">
                <h2>相關產品</h2>
                <p>View More</p>
            </div>
        </div>
    <!--推薦商品-->
        <div class="small-container">
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

<!----JS for product gallery ------>
<script>
    var productImg=document.getElementById('ProductImg');
    var SmallImg=document.getElementsByClassName('small-img');
    SmallImg[0].onclick=function(){
        ProductImg.src=SmallImg[0].src;
    }
    SmallImg[1].onclick=function(){
        ProductImg.src=SmallImg[1].src;
    }
    SmallImg[2].onclick=function(){
        ProductImg.src=SmallImg[2].src;
    }
    SmallImg[3].onclick=function(){
        ProductImg.src=SmallImg[3].src;
    }


</script>
<!--加入最愛-->
<script>
    $(document).ready(function(){
        //利用location.href取得網址，並存入變數
        var getUrlString = location.href;
        //將網址 (字串轉成URL)
        var url = new URL(getUrlString);
        //使用URL.searchParams + get 函式  (括弧裡面帶入欲取得結果的KEY鍵值參數)
        $("#add-like").click(function(){
            var p_id=url.searchParams.get('p_id');;
            $.ajax({
                url:'add_like_info.php',
                method:'POST',
                data:{p_id:p_id},
                success:function(res){
                    alert(res);
                },
                error:function(thrownError) {
                    console.log(throwError);
                }   
            });
        });
    });
</script>
</body>
</html>
<?php
//接購買資料
if($_SERVER['REQUEST_METHOD']==='POST'){
    if(!empty($_POST['add_cart'])){
        if(isset($_SESSION['loggedin'])){         
            $c_size=$_POST['cart_size'];
            if($c_size=='none'){
                echo "<script>alert('請選擇尺寸')</script>";
            }else{
            $c_count=$_POST['cart_count'];
            $p_id=$_GET['p_id'];
            $m_id=$_SESSION['id'];
            $c_id=date("hi");  
            }
            $sql="INSERT INTO s_cart (cart_id,product_id,member_id,cart_size,cart_count,cart_status) VALUES('$c_id','$p_id','$m_id','$c_size','$c_count','false')";
            $result=mysqli_query($link,$sql); 
                if($result===true){
                    header("location:cart.php");
                }else{
                    $upsql="UPDATE s_cart SET cart_count=$c_count WHERE product_id=$p_id AND cart_size='$c_size'";
                    if($reuslt=mysqli_query($link,$upsql)){
                        header("location:cart.php");
                    }else{
                        echo "error".mysqli_error($link);
                    }
                    
                }
        }else{
            echo "<script>alert('請先登入')</script>";
        }
    }
}
?>