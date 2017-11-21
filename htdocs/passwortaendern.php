<?php 
include 'headernav/headernavlogin.php';
?>
<section class="pwaendern">
	<div class="conpw">
		<h1>Passwortändern</h1>
		<form action="?passwort" method="post">
			<label>Password:</label>
			<br>
			<input type="password" name="pw1" value="">
			<br>
			<br>
			<label>Password Wiederholen:</label>
			<br>
			<input type="password" name="pw2" value="">
			<input type="submit" name="pwaendern" value="ändern"> 
		</form>
	</div>
</section>

<?php 
include 'footer.php';
?>
