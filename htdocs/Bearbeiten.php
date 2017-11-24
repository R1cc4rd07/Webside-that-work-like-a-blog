<?php 
include 'headernav/headernavlogin.php';
?>
<section class="bearbeiten">
	<div class="container0">
		<a class="neubtn" href="include.php?id=0">Neuen Beitrag Hinzufügen</a>
		<hr>
		<label><?php 
		$statement = $pdo->prepare("SELECT * FROM textablage.ablagetext");
		if ($result !== null) {
			$result = $statement->execute();
			While ($row = $statement->fetch($result)) {
				echo "<h1>".$row['titel']."</h1>";
				echo "<h3>".$row['summary']."</h3>";
				echo "<p>".$row['content']."</p>";
				echo "<a class=\"edit\" href=\"include.php?id=".$row['id']."\">Edit</a> <a class=\"delet\" href=\"Script/delet.php?id=".$row['id']."\">Delet</a><hr>";
			}
		}
		?>
		</label>
	</div>
</section>
