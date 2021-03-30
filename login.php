<?php

require_once("config.php");
ob_start(); //打開輸出緩沖區 使用cookie 要先打開
//isset() 檢查變數是否存在  存在為true   
//empty() 檢查變數(值)是否存在  存在為false
//使用$_SESSION讀取loggedin變數    和loggedin變數值是否等於true
//這邊沒有啟動session_start()原因是  上面的引入檔裡面已經有寫session_start()了 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location:index.php");
    exit;
}
if(!isset($_SESSION['username'])){
    
    
}
$email = $password = "";
$email_err = $password_err = "";
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    if(empty(trim($_POST["email"]))){
        $email_err = "請輸入Email";
    }else{
        $email = trim($_POST["email"]);
    }

    if(empty(trim($_POST["password"]))){
        $password_err = "請輸入密碼";
    }else{
        $password = trim($_POST["password"]);
        
    }

    if(empty($email_err) && empty($password_err)){
        
        $sql = "SELECT member_id,member_email,member_user,member_password FROM member where member_email= ?";
        if($stmt = mysqli_prepare($link,$sql)){
            mysqli_stmt_bind_param($stmt,'s',$param_email);
            $param_email = $email;
            if(mysqli_stmt_execute($stmt)){
                
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    //mysqli_stmt_bind_result - 將變量绑定到準備好的語句以儲存结果
                    mysqli_stmt_bind_result($stmt,$id,$email,$username,$hashed_password);
                    //mysqli_stmt_fetch - 從準備好的语句中獲取结果到绑定變量中 。 返回一個布爾值，指示是否獲取了一行
                    if(mysqli_stmt_fetch($stmt)){
                        /*由於在註冊頁面使用password hash 參數放PASSWORD_DEFAULT，
                        因此，無法得知到底使用了哪組SALT，只能透過password_verify 進行驗證*/
                        //password_verify() 第一個參數放輸入的密碼 第二參數是放已經經過雜湊的密碼 
                        if(password_verify($password,$hashed_password)){
                            /*Session 使用的地方通常如果你的網站具有會員登入的功能
                            或是購物車的功能，基本上就可以使用到 session 來幫助你記錄這些資訊 */
                            /*使用 session 來記錄用戶的資訊前，要先用 session_start() 這個函式，告訴系統準備開始使用 */
                            if(isset($_POST['rememberme'])){
                                setcookie('emailcookie',$email,time()+86400);
                                setcookie('passwordcookie',$password,time()+86400);

                                session_start();
                                $_SESSION["loggedin"] = true;
                                $_SESSION['id']=$id;
                                $_SESSION["email"] = $email;
                                $_SESSION["username"] = $username;
                                header("location:index.php");
                            }else{
                                session_start();
                                $_SESSION["loggedin"] = true;
                                $_SESSION['id']=$id;
                                $_SESSION["email"] = $email;
                                $_SESSION["username"] = $username;
                                header("location:index.php");
                            }
                           
                        }else{
                            $password_err = "密碼錯誤";
                        }
                    }
                }else{
                    $email_err = "這信箱不存在";
                }
            }else{
                echo "Oops! something wrong";
            }
            mysqli_stmt_close($stmt);
        }
        mysqli_close($link);
    }
}



?>





<?php
//google登入
//index.php

//Include Configuration File

require_once('config.php');

$login_button = '';

// 2) 使用者認證後，可取得 access_token 
if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error'])){
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
  header("location:index.php");
 }
}


if(!isset($_SESSION['access_token']))
{
    //createAuthUrl  取得要點擊登入的網址
 $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="./img/google.png" width="50px" height="50px"><br>Google</a>';
}

?>
<!--上半部google登入-->
<!--下半部fb登入-->
<?php
require_once("FBconfig.php");
$permissions = ['email']; //optional

if (isset($accessToken))
{
	if (!isset($_SESSION['facebook_access_token'])) 
	{
		//get short-lived access token
		$_SESSION['facebook_access_token'] = (string) $accessToken;
		
		//OAuth 2.0 client handler
		$oAuth2Client = $fb->getOAuth2Client();
		
		//Exchanges a short-lived access token for a long-lived one
		$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
		$_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
		
		//setting default access token to be used in script
		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
	} 
	else 
	{
		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
	}
	
	
	//redirect the user to the index page if it has $_GET['code']
	if (isset($_GET['code'])) 
	{
		header('Location: ./');
	}
	
	
	try {
		$fb_response = $fb->get('/me?fields=name,first_name,last_name,email');
		$fb_response_picture = $fb->get('/me/picture?redirect=false&height=200');
		
		$fb_user = $fb_response->getGraphUser();
		$picture = $fb_response_picture->getGraphUser();
		
		$_SESSION['fb_user_id'] = $fb_user->getProperty('id');
		$_SESSION['fb_user_name'] = $fb_user->getProperty('name');
		$_SESSION['fb_user_email'] = $fb_user->getProperty('email');
		$_SESSION['fb_user_pic'] = $picture['url'];
		
		
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
		echo 'Facebook API Error: ' . $e->getMessage();
		session_destroy();
		// redirecting user back to app login page
		header("Location: ./");
		exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		echo 'Facebook SDK Error: ' . $e->getMessage();
		exit;
	}
}else{	
	// replace your website URL same as added in the developers.Facebook.com/apps e.g. if you used http instead of https and you used
	$fb_login_url = $fb_helper->getLoginUrl('http://localhost/computer-project/login.php', $permissions);
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
        <h1 class='form_title'>Login</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class='form' method='post'>
            <div class="form-group <?php echo (!empty($email_err))?'has-error':'';?>">
                <label for="email">信箱:</label>
                <input type="text" id='email' class="form-control" name='email' placeholder='enter email' value="<?php if(isset($_COOKIE['usercookie'])){ echo $_COOKIE['usercookie'];}?>">
                <span class='help-block'><?php echo $email_err;?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err))?'has-error':'';?>">
                <label for="password">密碼:</label>
                <input type="password" id='password' placeholder='enter password'class='form-control' name='password' value="<?php if(isset($_COOKIE['passwordcookie'])){ echo $_COOKIE['passwordcookie'];}?>" >
                <span class='help-block'><?php echo $password_err;?></span>
            </div>
            <div class="form-group">
                <input type="checkbox" name='rememberme'class=''>Remember Me
            </div>
            <div class="form-group">
                <p class='msg'><?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];  }else{
                    echo "準備登入狀態";
                };?></p>
            </div>
            <div class="form-group">
                <input type="submit" value='登入' class='form-control btn btn-primary'>
            </div>
            <div class="form-group form-or">
                <span class='form-or-title'>或</span>
            </div>
            
            <div class='login-wrapper'>
                <div class='login-link'>
                    <a href="<?php echo $fb_login_url;?>"><img src='./img/facebook.png'>facebook</a>
                </div>
                <div class='login-link'>
                    <?php echo $login_button ?>
                </div>
            </div>
            <p>忘記密碼嗎?別擔心!<a href="recover_email.php">點這裡</a></p>
            <p>還沒有帳號嗎?<a href="sign_up.php">立即註冊</a></p>
            <a href="index.php">回到首頁</a>
            
        </form>

    </section>
</body>
</html>