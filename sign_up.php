<?php 
//引入資料庫連接  這樣就不用重複寫資料庫連接的程式
require_once("config.php");
$username =$email= $password = $confirm_password = "";
$username_err = $email_err=$password_err = $confirm_password_err = "";

//判斷提交的資料是否是POST方式傳輸
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //empty(空值)  用來判斷變數值是否是空的 空的為true 
    //trim函數 刪除文字前後的空白區域
    //$_POST 變數用於收集來自 method="post" 的表單中的值
    if(empty(trim($_POST["email"]))){
        $email_err = "請輸入email";
        
    }else{
        // ? 是參數 
        $sql = 'select member_id from member where member_email=?';
        //mysqli_prepare() - 準備執行一個sql語句 。返回一个 statement 對象，如果發生錯誤則返回 FALSE。
        if ($stmt = mysqli_prepare($link,$sql)){
            // var_dump($stmt);  使用var_dump去查看變數值相關訊息
            //$stmt=object(mysqli_stmt)#5 (10) { ["affected_rows"]=> int(0) ["insert_id"]=> int(0) ["num_rows"]=> int(0) ["param_count"]=> int(1) ["field_count"]=> int(1) ["errno"]=> int(0) ["error"]=> string(0) "" ["error_list"]=> array(0) { } ["sqlstate"]=> string(5) "00000" ["id"]=> int(1) }
            
            //mysqli_stmt_bind_param - 將變量绑定到準備好的語句作為參數   第二個參數s=字串類型 i=整數類型
            mysqli_stmt_bind_param($stmt,"s",$param_email);
            $param_email = trim($_POST["email"]);
            //mysqli_stmt_execute - 執行準備好的語句 指示查詢是否成功
            if(mysqli_stmt_execute($stmt)){
                //mysqli_stmt_store_result - 從準備好的語句轉移結果集
                    mysqli_stmt_store_result($stmt);
                    //mysqli_stmt_num_rows - 返回語句結果集的行數 返回值是一個整數，表示結果集的行數
                if(mysqli_stmt_num_rows($stmt) ==1){
                    $email_err = "這信箱已經有人使用過";
                }elseif(empty(trim($_POST['email']))){
                    $email_err="請輸入email";
                   
                }else{
                    $email = trim($_POST["email"]);
                }
            }else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        //mysqli_stmt_close - 關閉準備好的語句
        mysqli_stmt_close($stmt);
    }
   
    if(empty(trim($_POST['user']))){
        $username_err="請輸入用戶名";
    }else{
        $username=trim($_POST['user']);
    }

    if(empty(trim($_POST["password"]))){
        $password_err = "請輸入密碼";
    //取得字串長度可以使用 strlen() 函式
    }elseif(strlen(trim($_POST["password"]))<6){
        $password_err = "密碼至少6個字以上";
    //preg_match - 執行匹配正規表達是
    }elseif(!preg_match("/^(([a-z]+[0-9]+)|([0-9]+[a-z]+))[a-z0-9]*$/i",$_POST['password'])){
        $password_err = "密碼只能是數字和英文組成";
    }
    else{
        $password = trim($_POST["password"]);
        
    }

    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "請輸入確認密碼";
    }else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "密碼不匹配";
        }
    }
    if(empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)){
        
        $token=bin2hex(random_bytes(15));
        $sql ="INSERT INTO member (member_user,member_email,member_password,member_token,member_status) VALUE (?,?,?,?,'inactive')";
        if($stmt= mysqli_prepare($link,$sql)){
            mysqli_stmt_bind_param($stmt, "ssss", $param_username,$param_email, $param_password,$param_token);
            
            // Set parameters
            $param_username = $username;
            $param_email=$email;
            $param_token=$token;
            //password_hash() 使用 password hash 可以直接用最簡單的方式實踐複雜的加密
            //password_hash() 第一個參數放輸入的密碼 第二參數放PASSWORD_DEFAULT 產生隨機的SALT
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            if(mysqli_stmt_execute($stmt)){   
                $subject="Email Activation";
                $body="Hi, $username. Click here to activate your account http://localhost/computer-project/activate.php?token=$token";
                $sender_mail="From: lin.721921745330@gmail.com";
                if(mail($email,$subject,$body,$sender_mail)){
                    session_start();
                    $_SESSION['msg']='check your mail to activate  your account '.$email;
                    header("location:login.php");
                    
                }
                //使用header()函數跳轉頁面  寫法:header("location:網站位址");     
                // header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    //mysqli_close - 關閉先前打開的資料庫連接
    mysqli_close($link);
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
        <h1 class='form_title'>Sign Up</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class='form' method='post'>
            <div class="form-group <?php echo (!empty($username_err))? 'has-error' :''; ?>">
                <label for="user">用戶名:</label>
                <input type="text" id='user' class='form-control' name='user' placeholder='enter user' >
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($email_err))? 'has-error' :''; ?>">
                <label for="email">信箱:</label>
                <input type="email" id='email' class='form-control' name='email' placeholder='enter email'>
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err))? 'has-error' :''; ?>">
                <label for="password">密碼:</label>
                <input type="password" id='password' class='form-control' name='password' placeholder='enter password'>
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err))? 'has-error' :''; ?>">
                <label for="confirm_password">確認密碼:</label>
                <input type="password" id='confirm_password' class='form-control' name='confirm_password' placeholder='enter confirm password' >
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" value='註冊' class='form-control btn btn-primary'>
            </div>
            <div class="form-group">
                <input type="submit" value='重置' class='form-control btn btn-danger'>
            </div>
            <p>已經有帳號嗎?<a href="login.php">立即登入</a></p>
        </form>

    </section>
</body>
</html>