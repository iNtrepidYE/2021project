<?php
require_once("config.php");
$user_id=$_SESSION['id'];
if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['deleteId'])){
        $deleteId=$_POST['deleteId'];
        $deleteId=implode(',',$deleteId);  /* implode() 函數把數組元素組合為一個字符串。 傳過來的資料是一個數組 利用implode 以逗號隔開每個元素*/ 
        $sql="DELETE FROM like_p WHERE member_id=$user_id AND product_id IN($deleteId)";
        $result=mysqli_query($link,$sql);
        if($result===true){
            echo "ok已移除";
        }else{
            echo "移除失敗 再試一次!";
        }
    }
}

?>