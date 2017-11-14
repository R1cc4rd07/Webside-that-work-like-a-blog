<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=user', 'root', '');
?>
<!DOCTYPE html5>
<html lang="de">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Plazhalter</title>
	<link rel="stylesheet" type="text/css" href="css/Header,nav,footer.css">
	<link rel="stylesheet" type="text/css" href="css/sectionindex.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="javascript/Dropdownlogin.js"></script>