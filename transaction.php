<?php
require_once('config.php');
$order_id=$_GET['order_id'];
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
<body class='transaction-body'>
    <svg width="200" height="200">
        <circle class="circle" fill="none"  stroke="#68E534" stroke-width="5" cx="100"
            cy="100" r="60" stroke-linecap="round" transform="rotate(-90 100 100)"/>
        <polyline class="tick" fill="none" stroke="#68E534" stroke-width="6" points="70,104 93,134 134,68"
            stroke-linecap="round" stroke-linejoin="round" class='tick'></polyline>
    </svg>
    <div class='transaction-card'>
        <a href="order_detail.php?order_id=<?php echo $order_id;?>" class='transaction-detail'>查看明細</a>
        <hr>
        <div class="transaction-group">
        <?php
            
            $sql="SELECT * FROM s_order WHERE order_id=$order_id";
            $result=mysqli_query($link,$sql);
            if($row=mysqli_fetch_array($result)){
                echo  "<div class='transaction-item'>";
                    echo  "<div class='transaction-item-name'>";
                    echo   "訂單編號";
                        echo       "</div>";
                        echo  "<div class='transaction-item-text'>";
                        echo  $row['order_id'];
                        echo  "</div>";
                        echo  "</div>";
                        echo  "<div class='transaction-item'>";
                        echo "<div class='transaction-item-name'>";
                        echo "訂單日期";
                        echo "</div>";
                        echo "<div class='transaction-item-text'>";
                        echo $row['order_time'];
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='transaction-item'>";
                        echo "<div class='transaction-item-name'>";
                        echo "訂單金額";
                        echo "</div>";
                        echo "<div class='transaction-item-text'>";
                        echo "$".$row['order_price'];
                        echo"</div>";
                        echo"</div>";
                        echo"<div class='transaction-item'>";
                        echo"<div class='transaction-item-name'>";
                        echo"付款方式";
                        echo"</div>";
                        echo"<div class='transaction-item-text'>";
                        echo$row['pay_method'];
                        echo "</div>";
                        echo"</div>";
                        echo"<div class='transaction-item'>";
                        echo"<div class='transaction-item-name'>";
                        echo"配送方式";
                        echo"</div>";
                        echo"<div class='transaction-item-text'>";
                        echo$row['order_deliver'];
                        echo"</div>";
                        echo"</div>";
                        echo"<div class='transaction-item'>";
                        echo"<div class='transaction-item-name'>";
                        echo"預計到貨日";
                        echo"</div>";
                        echo"<div class='transaction-item-text'>";
                        echo"2021-03-18 08:00:00";
                        echo"</div>";
                        echo"</div>";
                    }
                ?>
        </div>
        <a href="product.php" class='contiune-shopping'>繼續購物</a>
    </div>
    
</body>
</html>