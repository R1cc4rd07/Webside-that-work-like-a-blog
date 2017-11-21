<?php
//Login an sich
if(isset($_GET['login'])) {
	$email = $_POST['email'];
	$passwort = $_POST['passwort'];
	
	$statement = $pdo->prepare("SELECT * FROM user.users WHERE email = :email");
	$result = $statement->execute(array('email' => $email));
	$user = $statement->fetch();
	
	//ueberpruefung des Passworts
	if ($user !== false && password_verify($passwort, $user['passwort'])) {
		$_SESSION['userid'] = $user['id'];
	
		header("location: loginSeite.php");
	}else {
		echo "E-Mail oder Passwort war ungueltig<br>";
	}
}
//weiter gabe des Logins
if(isset($_SESSION['userid'])) {
	$statement = $pdo->prepare("SELECT * FROM user.users WHERE id = :userid");
	$result = $statement->execute(array('userid' => $_SESSION['userid']));
	$user = $statement->fetch();
}
?>