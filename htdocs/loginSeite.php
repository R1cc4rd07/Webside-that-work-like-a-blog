<?php 
include 'headernav/headernavlogin.php';
?>
<section class="login">
	<div class="sidenav">
		<ul>
			<li><a class="active" href="loginSeite.php">Profil</a></li>
			<li><a href="passwortaendern.php">Passwortändern</a></li>
			<li><a href="Bearbeiten.php">Bearbeiten</a></li>
		</ul>
	</div>
	<div class="Profil">
		<h1>Profil</h1>
		<div class="containerpro">
			<div class="row1">
				<label class="label1">
					Username:
				</label>
				<label class="label2">
					<?php if((isset($_SESSION['userid'])) && (isset($user['username']))){ echo $user['username'];} else { echo 'kein username gesetzt';}?>
				</label>
			</div>
			<div class="row2">
				<br>
				<label class="label1">
					E-mail:
				</label>
				<label class="label2">
					<?php if((isset($_SESSION['userid'])) && (isset($user['email']))){ echo $user['email'];} else { echo 'Keine E-Mail vorhanden';}?>
				</label>
			</div>
			<div class="btn">
				<input type="submit" name="edit" value="edit" class="edit">
			</div>
		</div>
		<div class="containered">
			<form action="?Bearbeiten" method="post">
				<div class="row11">
					<label class="label11"> 
						Username: 
					</label>
					<label class="label12">
						<input type="text" name="username" value=<?php if((isset($_SESSION['userid'])) && (isset($user['username']))){ echo $user['username'];} else { echo 'null';}?>> 
					</label>
				</div>
				<div class="row12">
					<br>
					<label class="label11"> 
						E-mail: 
					</label>
					<label class="label12">
						<input type="email" name="email" value=<?php if((isset($_SESSION['userid'])) && (isset($user['email']))){ echo $user['email'];} else { echo 'null';}?>> 
					</label>
				</div>
				<div class="btn1">	
					<input type="submit" name="aendern" value="aendern" class="aendern">
				</div>
			</form>
		</div>
	</div>
</section>
<?php 
include 'footer.php';
?>