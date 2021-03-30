<?php
require_once("config.php");
//訂單編號
$order_id=$_GET['order_id'];
//會員編號
$user_id=$_SESSION['id'];
$sql="SELECT m.member_user,m.member_contact,m.member_telephone,m.member_address,o.order_id,o.order_price,o.order_deliver,o.pay_method,o.order_time,p.product_id,p.product_name,p.product_price,c.cart_size,c.cart_count FROM s_order as o INNER JOIN member as m ON o.member_id=m.member_id INNER JOIN s_cart as c ON o.cart_id=c.cart_id INNER JOIN product AS p ON c.product_id=p.product_id  WHERE o.order_id=$order_id AND o.member_id=$user_id";
$result=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($result)){
    //姓名
    $member_name=$row['member_user'];
    //連絡電話
    $member_contact=$row['member_contact'];
    //行動電話
    $member_telephone=$row['member_telephone'];
    //地址
    $member_address=$row['member_address'];
    //訂單編號
    $order_id=$row['order_id'];
    //訂單日期
    $order_time=$row['order_time'];
    //商品編號
    $product_id=$row['product_id'];
    //商品名稱
    $product_name=$row['product_name'];
    //購買的商品尺寸
    $cart_size=$row['cart_size'];
    //購買的單一產品數量
    $cart_count=$row['cart_count'];
    //付款方式
    $pay_method=$row['pay_method'];
    //本次訂單總金額
    $order_price=$row['order_price'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style40.css">
</head>
<body>
    <div class="order-container">
        <div class="header-bill-title">
            <h2>訂單明細</h2>
        </div>
        <div class="small-container order-content">
            <div class="row-order">
                <div class="col-order">
                    <h4>訂單完成確認</h4>
                </div>
            </div>
            <hr>
            <div class="row-order">
                <div class="col-order">
                    <h4>親愛的客戶,感謝您的訂購,您已經完成本筆交易的訂購程序,我們將會盡快為您處理訂單並安排出貨</h4>
                </div>
            </div>
            <div class="row-order">
                <div class="col-2-order ">
                    <h4>您的訂單如下</h4>
                </div>
                <div class="col-2-order order-print">
                    <a href="" onclick="print();">列印頁面</a>
                </div>
            </div>
            <hr>
            <div class="row-order">
                <div class="col-2-title">
                    <h4>收件人資料</h4>
                </div>
                <div class="col-10-text">
                    <table class='user-table'>
                        <tr>
                            <th>姓名:</th>
                            <td><?php echo $member_name;?></td>
                        </tr>
                        <tr>
                            <th>聯絡電話:</th>
                            <td>02-<?php echo $member_contact;?></td>
                        </tr>
                        <tr>
                            <th>行動電話:</th>
                            <td>09-<?php echo $member_telephone;?></td>
                        </tr>
                        <tr>
                            <th>地址:</th>
                            <td><?php echo $member_address;?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr>
            <div class="row-order">
                <div class="col-2-title">
                    <h4>訂單編號</h4>
                </div>
                <div class="col-10-text">
                    <p><?php echo $order_id;?></p>
                </div>
            </div>
            <hr>
            <div class="row-order">
                <div class="col-2-title">
                    <h4>訂單日期</h4>
                </div>
                <div class="col-10-text">
                    <?php echo $order_time;?>
                </div>
            </div>  
            <hr>
            <div class="row-order">
                <div class="col-2-title">
                    <h4>訂單明細</h4>
                </div>
                <div class="col-10-text">
                    <table class='product-table'>
                        <tr>
                            <th>商品編號</th>
                            <th>商品名稱</th>
                            <th>尺寸</th>
                            <th>數量</th>
                        </tr>
                        <?php
                        $product_sql="SELECT p.product_id,p.product_name,p.product_price,c.cart_size,c.cart_count FROM s_order as o INNER JOIN member as m ON o.member_id=m.member_id INNER JOIN s_cart as c ON o.cart_id=c.cart_id INNER JOIN product AS p ON c.product_id=p.product_id  WHERE o.order_id=$order_id AND o.member_id=$user_id";
                        $Productresult=mysqli_query($link,$product_sql);
                        while($row=mysqli_fetch_array($Productresult)){
                            echo "<tr>";
                                echo "<td>".$row['product_id']."</td>";
                                echo "<td>".$row['product_name']."</td>";
                                echo "<td>".$row['cart_size']."</td>";
                                echo "<td>*".$row['cart_count']."</td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
            <hr>
            <div class="row-order">
                <div class="col-2-title">
                    <h4>付款方式</h4>
                </div>
                <div class="col-10-text">
                    <?php echo $pay_method;?>
                </div>
            </div>
            <hr>
            <div class="row-order">
                <div class="col-2-title">
                    <h4>本次訂單金額</h4>
                </div>
                <div class="col-10-text">
                    $<?php echo $order_price;?>
                </div>
            </div>  
            <hr>          
            <div class="goback-btn">
                <a href="index.php" class='back-btn'>回首頁</a>
            </div>
        </div>
    </div>

</body>
</html>