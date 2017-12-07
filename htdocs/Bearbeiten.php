<?php 
include 'headernav/headernavlogin.php';
?>
<section class="bearbeiten">
	<div class="sidenav">
		<ul>
			<li><a class="active" href="loginSeite.php">Profil</a></li>
			<li><a href="passwortaendern.php">Passwortändern</a></li>
			<li><a href="Bearbeiten.php">Bearbeiten</a></li>
		</ul>
	</div>
	<div class="container0">
		<a class="neubtn" href="include.php?id=0">Neuen Beitrag Hinzufügen</a>
		<hr>
		<label>
		<?php 
		$statement = $pdo->prepare("SELECT * FROM textablage.ablagetext");
		$result = $statement->execute();
		if ($result !== null) {
			While ($row = $statement->fetch($result)) {
				echo "<div class=\"rahmen\">";
				echo "<h1>".$row['titel']."</h1>";
				echo "<h3>".$row['summary']."</h3>";
				echo "<p>".$row['content']."</p>";
				echo "<a class=\"edit\" href=\"include.php?id=".$row['id']."\">Edit</a> <a class=\"delet\" id=\"deletbtn\" onclick=' if(confirm(\"Wollen wie den Beitrag wirklich löschen dies ist niewieder rückgängig zu machen. ??? BITCH!!!!!!!!!\")){window.location.assign(\"Script/Delet.php?id=".$row["id" ]."\")}' >Delet</a>";
				echo "</div><hr>";
			}
		}
		?>
		</label>
	</div>
</section>
