<?php 
include 'Datenbanken.php';

$id = $_GET['id'];

$Statemant = $pdo->prepare("DELETE FROM textablage.ablagetext WHERE id = :id");
$result = $Statemant->execute(array('id' => $id));
header('location:../Bearbeiten.php');
?>