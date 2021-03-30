<?php
require_once("config.php");
$user_id=$_SESSION['id'];
if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['p_id'])){
        $p_id=$_POST['p_id'];
        $sql="INSERT INTO like_p (product_id,member_id) VALUES ($p_id,$user_id)";
        $result=mysqli_query($link,$sql);
        if($result===true){
            echo "成功加入最愛清單";
        }else{
            echo "已經存在最愛清單";
        }
    }
}

?>