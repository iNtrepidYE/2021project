<?php
require_once("config.php");
$new_password=$confirm_password="";
$new_password_err=$confirm_password_err="";
if(isset($_POST['submit'])){

    if(empty(trim($_POST['password']))){
        $new_password_err="請輸入新密碼";
    }elseif(strlen(trim($_POST['password']))<6){
        $new_password_err="密碼長度要大於6";
    }elseif(!preg_match("/^(([a-z]+[0-9]+)|([0-9]+[a-z]+))[a-z0-9]*$/i",$_POST['password'])){
        $new_password_err = "密碼只能是數字和英文組成";
    }else{
        $new_password=trim($_POST['password']);
    }

    if(empty(trim($_POST['confirm_password']))){
        $confirm_password_err="請輸入確認密碼";
    }else{
        $confirm_password=trim($_POST['confirm_password']);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "兩個密碼不一致";
        }
    }

    if(empty($new_password_err) && empty($confirm_password_err)){

    
        $newpassword=mysqli_real_escape_string($link,$new_password);
        $cpassword=mysqli_real_escape_string($link,$confirm_password);
        
        $pass=password_hash($newpassword,PASSWORD_DEFAULT);
        $cpass=password_hash($cpassword,PASSWORD_DEFAULT);
        if(isset($_GET['token'])){
            $token=$_GET['token'];
            
            if($newpassword===$cpassword){
                $updatesql="update member set member_password='$pass' where member_token='$token'";
                $result=mysqli_query($link,$updatesql);
                if($result){
                    unset($_SESSION["loggedin"]);
                    $_SESSION['msg']='密碼已確認更新成功';
                    
                    header("location:login.php");
                }else{
                    echo mysqli_error($link);
                }
            }else{
                $confirm_password_err="兩個密碼不一致";
            }
        }else{
            echo "沒有 token 碼";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首頁</title>
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
        <h1 class='form_title'>Reset Password</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']);?>" class='form' method='post'>
            <div class="form-group">
                <label for="password">新密碼:</label>
                <input type="password" id='password' class='form-control' name='password' >
                <span class='help-block'><?php echo $new_password_err;?></span>
            </div>
            <div class="form-group">
                <label for="confirm_password">確認密碼:</label>
                <input type="password" id='confirm_password' class='form-control' name='confirm_password' >
                <span class='help-block'><?php echo $confirm_password_err;?></span>
            </div>
            <div class="form-group">
                <input type="submit" value='確認更新' name='submit' class='form-control btn btn-primary'>
            </div>
            <a href="index.php">回到首頁</a>
        </form>

    </section>
</body>
</html>