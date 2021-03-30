<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST['add_postview']=='add_postview'){
        echo "<h1>新增公告</h1>";
        echo "<form enctype='multipart/form-data' method='post' action='".htmlspecialchars('postview_management.php')."'>";
            echo "<div class='form-group'>";
                echo "<label for='postview_name'>公告類型:</label>";
                echo "<select name='postview_type'>";
                    echo "<option>熱門</option>";
                    echo "<option>最新</option>";
                    echo "<option>活動</option>";
                    echo "<option>更新</option>";
                echo "</select>";
            echo "</div>";
            echo "<div class='form-group'>";
                echo "<label for='postview_topic'>公告主題:</label>";
                echo "<input type='text'  name='postview_topic' id='postview_topic'>";
            echo "</div>";
            echo "<div class='form-group'>";
                echo "<label for='postview_info'>公告內容:</label>";
                echo "<textarea name='postview_info' id='postview_info'></textarea>";
            echo "</div>";
           
            echo "<div class='form-group'>";
                echo "<input type='submit' value='上傳' name='add_postview' class='add_btn'>";
            echo "</div>";
        echo "</form>";  
    } 
}
?>
