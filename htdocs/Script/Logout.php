<?php 
//Session beenden und somit Auslogen
session_start();
session_destroy();

echo "Logout erfolgreich";
header("location:../index.php");
?>