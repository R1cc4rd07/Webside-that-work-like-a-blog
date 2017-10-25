<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=user', 'root', '');
if(isset($_GET['login'])) {
	$email = $_POST['email'];
	$passwort = $_POST['passwort'];
	
	$statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
	$result = $statement->execute(array('email' => $email));
	$user = $statement->fetch();
	
	//Überprüfung des Passworts
	if ($user !== false && password_verify($passwort, $user['passwort'])) {
		$_SESSION['userid'] = $user['id'];
		header("location: login.php");
	} else {
		echo "E-Mail oder Passwort war ungültig<br>";
	}
	
}
?>
<!DOCTYPE html5>
<html lang="de">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Plazhalter</title>
	<link rel="stylesheet" type="text/css" href="css/Header,nav,footer.css">
	<link rel="stylesheet" type="text/css" href="css/section.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="javascript/login.js"></script>
<body>
	<div class="loginbar">
		<div class="login">
			<button type="button" class="loginbtn">login</button>
			<div class="dropdown-content">
				<form action="?login=1" method="post">
					E-Mail:<br>
					<input type="email" size="20" maxlength="250" name="email"><br><br>

					Dein Passwort:<br>
					<input type="password" size="20"  maxlength="20" name="passwort"><br>

					<input type="submit" value="Abschicken">
				</form>
			</div>
		</div>
	</div>
	<header class="HeaderImg"> </header>
	<nav>
		<label for="show-menu" class="show-menu"><span>&#9776;</span> Navigation</label>
		<input type="checkbox" id="show-menu" role="button">
		<ul id="menu">
			<li><a href="seite2.php">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Portfolio</a></li>
			<li><a href="#">News</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</nav>