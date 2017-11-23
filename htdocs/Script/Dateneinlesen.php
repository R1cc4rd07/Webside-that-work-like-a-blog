<?php 
include 'Datenbanken.php';
$id = $_POST['id'];
$titel = $_POST['titel'];
$summary = $_POST['summary'];
$content = $_POST['content'];

if ($id >= 1) {
	$statemant = $pdo->prepare("UPDATE textablage.ablagetext SET titel = :titel, summary = :summary, content = :content WHERE :id");
	$result = $statemant->execute(array('titel' => $titel, 'summary' => $summary, 'content' => $content, 'id' => $_POST['id']));
	echo "<p> Es hat funktioniert erfolgreich geupdatet </p>";
	header("location:../Bearbeiten.php");
}

if ($id == 0) {
	$statemant = $pdo->prepare("INSERT INTO textablage.ablagetext (titel, summary, content) VALUES (:titel, :summary, :content)");
	$result = $statemant->execute(array('titel' => $titel, 'summary' => $summary, 'content' => $content));
	echo "<p> Es hat funktioniert erfolgreich eingefügt</p>";
	header("location:../Bearbeiten.php");
}
?>



