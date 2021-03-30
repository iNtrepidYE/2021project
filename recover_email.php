<?php 
//引入資料庫連接  這樣就不用重複寫資料庫連接的程式
require_once("config.php");
if(isset($_POST['submit'])){
    $email=mysqli_real_escape_string($link,$_POST['email']);

    $sql="SELECT * FROM member where member_email='$email'";
    $query=mysqli_query($link,$sql);
    $emailcount=mysqli_num_rows($query);
    if($emailcount){
        $userdata=mysqli_fetch_array($query);
        $username=$userdata['member_user'];
        $token=$userdata['member_token'];
        $subject="Email Activation";
        $body="Hi ".$username." Click here http://localhost/computer-project/reset_password.php?token=$token";
        $sender_email="From: lin.721921745330@gmail.com";
        if(mail($email,$subject,$body,$sender_email)){
            $_SESSION['msg']="已發送重設密碼網址到你的郵件";
            header('location:login.php');
        }else{
            
        }
    }else{
        $_SESSION['msg']='信箱不存在';
            header("location:recover_email.php");
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/login4.css">
</head>
<body>
    <div class="logo">
        <img src="./img/logo.png" alt="" width="50px" height="50px" >
    </div>
    <section>
        <h1 class='form_title'>忘記密碼</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class='form' method='post'>
            
            <div class="form-group">
                <label for="email">信箱:</label>
                <input type="email" id='email' class='form-control' name='email' placeholder='enter email' >
                
            </div>
            <div class="form-group">
              
            </div>
            <div class="form-group">
                <input type="submit" value='發送郵件' name='submit'class='form-control btn btn-danger'>
            </div>
            <p>還沒有帳號嗎?<a href="sign_up.php">立即註冊</a></p>
        </form>

    </section>
</body>
</html>