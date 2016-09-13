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
	$password2_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password2);

	if($password != $password2) {
		$errorMsgReg="Die Passwörter müssen übereinstimmen";
	}else if( $email_check && $password_check && $password2_check > 0) 
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

<!doctype html>

<html lang="de">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Angular Material style sheet -->
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<!-- Stylesheet -->
	<link rel="stylesheet" href="style/main.css">
	
	</head>
	<body ng-app="Kim_Board" ng-cloak>
	<header>
		HEADER
		</header>

	<main>
		<!-- Login/Register Box -->
			<div class="box" ng-controller="menuCtrl" > 

				<div ui-view ></div>

				<div class="errorMsg"><?php echo $errorMsgReg; ?></div>
				
			</div>	

	</main>
		
		
	<footer>
		FOOTER
	</footer>
	
	
	
	
	<!-- Angular Material requires Angular.js Libraries -->
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>

	<!-- Angular Material Library -->
	<script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>
	
	<!-- Application Scripts  -->
	<script src="js/angular.js"></script>
	<script src="js/angular-ui-router.min.js"></script>
	
	</body>
</html>