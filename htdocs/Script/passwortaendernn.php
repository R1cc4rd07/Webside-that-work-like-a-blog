<?php 
////////////////////////////
// passwort ändern Script //
////////////////////////////

if(isset($_GET['passwort'])) {
	$error = false;
	$altespasswort = $_POST['pwa'];
	$neupasswort = $_POST['pw1'];
	$neupasswortw = $_POST['pw2'];
	
	$statement = $pdo->prepare("SELECT * FROM user.users WHERE id = :userid");
	$result = $statement->execute(array('userid' => $_SESSION['userid']));
	$user = $statement->fetch();
	
	if((strlen($altespasswort) == 0) || $altespasswort != $user['passwort']) {
		echo 'Du musst dein altes Passwort angeben <br>';
		$error = true;
	}
	if((strlen($neupasswort) == 0) || $neupasswort != $altespasswort) {
		echo 'Du musst ein neues Passwort angeben <br>';
		$error = true;
	}
	if($neupasswort != $neupasswortw) {
		echo 'Die 2 Neuen Passworter müssen übereinstimmen <br>';
		$error = true;
	}
	
	if(!$error) {
		$passwort_hash = password_hash($neupasswort, PASSWORD_DEFAULT);
		$statement = $pdo->prepare("UPDATE user.users SET passwort = :passwort WHERE id = :userid");
		$result = $statement->execute(array('passwort' => $passwort_hash, 'userid' => $user['id']));
		
		if($result) {
			echo 'Du hast dein Passwort erfolgreich geändert. <a href="../loginSeite.php">Zur Login Seite</a>';
		}else{
			echo ' Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
		}
	}
}
?>