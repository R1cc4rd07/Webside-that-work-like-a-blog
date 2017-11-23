<?php 
include 'headernav/headernavlogin.php';
?>
<section class="bearbeiten">
	<div class="container0">
		<a href="include.php?id=0">Neuen Beitrag Hinzufügen</a>
		<hr>
		<label><?php 
		$statement = $pdo->prepare("SELECT * FROM textablage.ablagetext");
		if ($result !== null) {
			$result = $statement->execute();
			While ($row = $statement->fetch_assoc()) {
				echo "<h1>".$row['titel']."</h1><br>";
				echo "<h3>".$row['summary']."</h3><br>";
				echo "<p>".$row['content']."</p><br>";
				echo "<a href=\"include.php?id=".$row['id']."\">Edit</a><br><br>";
			}
		}
		?>
		</label>
	</div>
</section>
<?php 
include 'footer.php';
?>