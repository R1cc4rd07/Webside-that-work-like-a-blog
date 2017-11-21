<?php 
if(!isset($_SESSION['userid'])) {
	header("location:index.php");
	echo "Fuer diese Seite muessen sie sich Einloggen";
}
?>