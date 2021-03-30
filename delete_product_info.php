<?php
require_once("config.php");

if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['Product_value'])){
        $Product_value=$_POST['Product_value'];
        $sql="SELECT * FROM product WHERE product_id='$Product_value'";
        $result=mysqli_query($link,$sql);
        echo "<h2>你確定要移除這項商品</h2>";
        echo "<form method='post' name='delete-form' action=".htmlspecialchars('product_management.php').">";
        if($row=mysqli_fetch_array($result)){
            echo "<div class='form-group'>";
                echo "<label>產品編號</label>";
                echo "<input type='text' value='$row[product_id]' name='p_id'>";
            echo "</div>";
            echo "<div class='form-group'>";
                echo "<label>產品名稱</label>";
                echo "<input type='text' value='$row[product_name]'>";
            echo "</div>";
            echo "<div class='form-group'>";
                echo "<label>產品圖片</label><br>";
                echo "<img src='./img/buy-1.jpg'>";
            echo "</div>";
        }
        echo "<input type='submit' name='del_btn' value='確定'>";
        echo "</form>";
    }else{
        echo "error";
    }
}






?>