<?php 
include 'Datenbanken.php';
$id = $_GET['id'];
$titel = $_POST['titel'];
$summary = $_POST['summary'];
$content = $_POST['content'];
$neucontent = wordwrap($content, 100, "<br />\n");

if ($id >= 1) {
	$statemant = $pdo->prepare("UPDATE textablage.ablagetext SET titel = :titel, summary = :summary, content = :content WHERE id = :id");
	$result = $statemant->execute(array('titel' => $titel, 'summary' => $summary, 'content' => $neucontent, 'id' => $id));
	echo "<p> Es hat funktioniert erfolgreich geupdatet </p>";
	header("location:../Bearbeiten.php");
}

if ($id == 0) {
	$statemant = $pdo->prepare("INSERT INTO textablage.ablagetext (titel, summary, content) VALUES (:titel, :summary, :content)");
	$result = $statemant->execute(array('titel' => $titel, 'summary' => $summary, 'content' => $neucontent));
	echo "<p> Es hat funktioniert erfolgreich eingefügt</p>";
	header("location:../Bearbeiten.php");
}
?>



