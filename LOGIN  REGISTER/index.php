<?php
	include("config.php");
	include('class/userClass.php');
	$userClass = new userClass();

	$errorMsgReg='';
	$errorMsgLogin='';
	
/* Login Form */
if (!empty($_POST['loginSubmit'])) 
{
	$MAIL=$_POST['MAIL'];
	$password=$_POST['password'];
	
	if(strlen(trim($MAIL))>1 && strlen(trim($password))>1 )
	{
		$uid=$userClass->userLogin($MAIL,$password);
		if($uid)
		{
			$url=BASE_URL.'home.php';
			header("Location: $url"); // Page redirecting to home.php 
		}
		else
		{
			$errorMsgLogin="E-Mail oder Passwort war ungültig.";
		}
	}
}

/* Signup Form */
if (!empty($_POST['signupSubmit'])) 
{
	$email=$_POST['emailReg'];
	$password=$_POST['passwordReg'];
	$password2 = $_POST['re-passwordReg'];
	/* Regular expression check */
	$email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
	$password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);
	
	if($password != $password2) {
		$errorMsgReg="Die Passwörter müssen übereinstimmen";
	}
	
	if( $email_check && $password_check > 0) 
	{
		$uid=$userClass->userRegistration($password,$email);
		if($uid)
		{
			$url=BASE_URL.'home.php';
			header("Location: $url"); // Page redirecting to home.php 
		}
		else
		{
			$errorMsgReg="Diese E-Mail-Adresse ist bereits vergeben.";
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01Transitional
//EN""http://www.w3.org/TR/html4/loose.dtd">
<html lang="de">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="keywords" content="" />
			<meta name="copyright" content="Copyright &copy; 2016 by Ignas Kavaliauskas & Viktor Grzonkowski" />

			<!-- Head & Title include -->
			<title><?php echo "KIM Board"; ?></title>
			<link href="_stylesheet.css" rel="stylesheet" type="text/css" />
			<!-- end Head & Title include -->
			
		</head>
		
		
		
		
		<body>
		
		<div id="login">
			<h3>Login</h3>
			<form method="post" action="" name="login">
				<label>Email</label>
					<input type="text" name="MAIL" autocomplete="off" />
				<label>Password</label>
					<input type="password" name="password" autocomplete="off"/>
				<div class="errorMsg"><?php echo $errorMsgLogin; ?></div>
					<input type="submit" class="button" name="loginSubmit" value="Login">
			</form>
		</div>
		
		<div id="signup">
			<h3>Registration</h3>
			<form method="post" action="" name="signup">
			
				<label>Email</label>
					<input type="text" name="emailReg" autocomplete="off" />
					
				<label>Passwort</label>
					<input type="password" name="passwordReg" autocomplete="off"/>
					
				<label>Passwort bestätigen</label>
					<input type="password2" name="re-passwordReg" autocomplete="off"/>
					
				<div class="errorMsg"><?php echo $errorMsgReg; ?></div>
					<input type="submit" class="button" name="signupSubmit" value="Signup">
			</form>
		</div>

		
		
		</body>
</html>