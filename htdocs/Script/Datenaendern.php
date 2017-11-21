<?php 
if(isset($_GET['Bearbeiten'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	
	$statement = $pdo->prepare("SELECT * FROM user.users WHERE id = :userid");
	$result = $statement->execute(array('userid' => $_SESSION['userid']));
	$user = $statement->fetch();
	
	if($username !== $user['username'] || $email !== $user['email']) {
		$statment = $pdo->prepare('UPDATE user.users SET username = :username, email = :email WHERE id = :userid ');
		$insert = $statment->execute(array('username' => $username, 'email' => $email, 'userid' => $user['id']));
		if($insert) {
			echo 'Deine Daten wurden erfolgreich geaendert';
		}else {
			echo 'Leider hat es nicht geklappt versuche es spaeter nocheinmal';
		}
	}
}
?>