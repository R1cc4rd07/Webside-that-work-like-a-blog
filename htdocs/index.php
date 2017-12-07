
<?php 
include 'headernav/headernavindex.php';
?>

<section class="index">
	<div class="container0">
		<label><?php 
			$counter = 0;
			$statement = $pdo->prepare("SELECT * FROM textablage.ablagetext");
			$result = $statement->execute();
			While ($row = $statement->fetch($result)) {
				echo "<div class=\"rahmen\">";
				echo "<h1>".$row['titel']."</h1>";
				echo "<h3>".$row['summary']."</h3>";
				echo "<p>".$row['content']."</p>";
				echo "</div><hr>";
				$counter++;
			}
			if ($counter == 0) {
				echo '<script> alert("ES BEFINDEN SICH NOCH KEINE Beiträge auf deiser Seite Bitte haben sie noch einwenig gedult!!")</script>';
				echo '<br> <br> <br> <br> <br> <br> <br> <br> <b><p style="text-align: center;">Wie gesagt kein Information vorhanden.</p></b> <br> <br> <br> <br> <br> <br> <br> <br>';
			}
		?>
		</label>
	</div>
</section>
<?php 
	include 'footer.php'
?>