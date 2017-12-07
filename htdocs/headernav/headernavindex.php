<?php 
include 'head/headindex.php';
?>

<body>
	<div class="loginbar">
		<div class="login">
			<button type="button" class="loginbtn"><?php if((isset($_SESSION['userid'])) && (isset($user['email']))) { echo $user['email'];} else { echo 'Login';} ?></button>
			<div class="dropdown-content1">
				<form action="?login" method="post">
					E-Mail:<br>
					<input type="email" size="20" maxlength="250" name="email"><br><br>

					Dein Passwort:<br>
					<input type="password" size="20"  maxlength="20" name="passwort"><br>

					<input type="submit" value="Abschicken">
				</form>
			</div>
			<div class="dropdown-content2">
				<ul>
					<li><a href="../loginSeite.php">Profil</a></li>
					<li><a href="../Script/Logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
	<header class="HeaderImg"> </header>
	<nav>
		<label for="show-menu" class="show-menu"><span>&#9776;</span> Navigation</label>
		<input type="checkbox" id="show-menu" role="button">
		<ul id="menu">
			<li><a class="activee" href="index.php">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Portfolio</a></li>
			<li><a href="#">News</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</nav>