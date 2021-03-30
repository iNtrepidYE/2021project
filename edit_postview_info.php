<?php
require_once("config.php");
var_dump($_POST['edit_Postview']);
if($_SERVER["REQUEST_METHOD"] == "POST"){
   if(!empty($_POST['edit_postview'])){
       $value=$_POST['edit_postview'];
       
       $sql="SELECT * FROM postview WHERE postview_id=$value";
       $result=mysqli_query($link,$sql);
       echo "<h2>編輯產品</h2>";
       echo "<form method='post' name='edit-form' action=".htmlspecialchars('product_management.php').">";
       while($row=mysqli_fetch_array($result)){
           echo "<div class='form-group'>
                    <label>產品編號:</label>
                    <input type='text' value='$row[product_id]' name='p_id'>".
                "</div>";
            echo "<div class='form-group'>
                    <label>產品名稱:</label>
                    <input type='text' value='$row[product_name]' name='p_name'>".
                "</div>";
            echo "<div class='form-group'>
                    <label>產品圖片:</label>
                    <input type='text' value='$row[product_image]' name='p_image'>".
                "</div>";
            echo "<div class='form-group'>
                    <label>產品尺寸:</label>
                    <select name='size'>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                        <option>XLL</option>
                    <select>"
                    .
                "</div>";
            echo "<div class='form-group'>
                    <label>產品價格:</label>
                    <input type='text' value='$row[product_price]' name='p_price'>".
                "</div>";
                echo "<div class='form-group'>
                        <label>產品庫存:</label>
                        <input type='text' value='$row[product_count]' name='p_count'>".
                    "</div>";
            echo "<div class='form-group'>
                    <label>產品資訊:</label>
                    <textarea  name='p_info'>$row[product_info]</textarea>".
                "</div>";

       }
       echo "<input type='submit' value='確認更新' name='up-btn'>";
       
       echo "</form>";
   }
}



?>
