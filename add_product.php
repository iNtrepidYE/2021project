<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST['add_product']=='add_product'){
        echo "<h1>上架產品</h1>";
        echo "<form enctype='multipart/form-data' method='post' action=".htmlspecialchars('product_management.php')."> ";
            echo "<div class='form-group'>";
                echo "<label for='product_name'>產品名:</label>";
                echo "<input type='text'  required id='product_name' name='p_name'>";
            echo "</div>";
            echo "<div class='form-group'>";
                echo "<label for='product_type'>產品類型:</label>";
                echo "<select name='p_type' id='product-type'>";
                    echo "<option>帽子</option>";
                    echo "<option>服飾</option>";
                    echo "<option >鞋子</option>";
                    echo "<option>配件</option>";
                    echo "<option>動物</option>";
                    echo "<option>其他</option>";
            echo "</select>";
        echo "</div>";
            echo "<div class='form-group'>";
                echo "<label for='product_image'>產品圖片:</label>";
                echo "<input type='file'  id='product_image' name='file'>";
            echo "</div>";
            echo "<div class='form-group'>";
                echo "<label for='product_price'>產品價格:</label>";
                echo "<input type='text'  required id='product_price' name='p_price'>";
            echo "</div>";
            echo "<div class='form-group'>";
                echo "<label for='product_size'>產品尺寸:</label>";
                echo "<select name='p_size' id='product-size'>";
                    echo "<option>NONE</option>";
                    echo "<option>S</option>";
                    echo "<option selected>M</option>";
                    echo "<option>L</option>";
                    echo "<option>XL</option>";
                    echo "<option>XXL</option>";
                echo "</select>";
            echo "</div>";
            echo "<div class='form-group'>";
                echo "<label for='product_price'>產品庫存:</label>";
                echo "<input type='text'  required id='product_count' name='p_count'>";
            echo "</div>";
            echo "<div class='form-group'>";
                echo "<label for='product_content'>產品內容:</label>";
                echo "<br>";
                echo "<textarea  id='product_content' required cols='30' rows='10' name='p_info'></textarea>";
            echo "</div>";
            echo "<div class='form-group'>";
                echo "<input type='submit' value='上傳' name='add_product' class='add_btn'>";
            echo "</div>";
        echo "</form>";  

    }
   
}



?>
