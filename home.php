<?php
	include('config.php');
	include('session.php');
	$userDetails=$userClass->userDetails($session_uid);
?>

<html lang="de">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Angular Material style sheet -->
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<!-- Stylesheet -->
	<link rel="stylesheet" href="style/main.css">
	
	</head>
	<body ng-app="Kim_Board" ng-cloak class="body">

		<header>
			<h1>Welcome <?php echo $userDetails->email; ?></h1>
			<h4><a href="<?php echo BASE_URL; ?>logout.php">Logout</a></h4>
		</header>

		<main>
			MAIN
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