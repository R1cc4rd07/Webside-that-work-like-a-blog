<?php 
include 'headernav/headernavlogin.php';
include 'Script/passwortaendernn.php';
?>
<section class="pwaendern">
	<div class="conpw">
		<h1>Passwortändern</h1>
		<form action="?passwort" method="post">
			<label>Altes Passwort:</label>
			<br>
			<input type="password" name="pwa" value="">
			<br>
			<br>
			<label>Neues Passwort:</label>
			<br>
			<input type="password" name="pw1" value="">
			<br>
			<br>
			<label>Neues Passwort Wiederholen:</label>
			<br>
			<input type="password" name="pw2" value="">
			<input type="submit" name="pwaendern" value="ändern"> 
		</form>
	</div>
</section>