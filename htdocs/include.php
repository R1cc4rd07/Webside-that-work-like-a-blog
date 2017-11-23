<?php 
include 'headernav/headernavlogin.php';
?>
<section class="include">
	<div class="container0">
		<?php 
			$Statemant = $pdo->prepare("SELECT * FROM textablage.ablagetext WHERE :id");
			$result = $Statemant->execute(array('id' => $_GET['id']));
			$eintrag = $Statemant->fetch();
			
		?>
		<form action="Script/Dateneinlesen.php" name="beitrag" method="post" >
			<p>Titel: 
			<input type="number" name="id" class="idin" value="<?php if($_GET['id'] >= 1) {echo $eintrag['id'];}else {echo '0';} ?>">
			<input type="text" name="titel" class="titelin" value="<?php if($_GET['id'] >= 1) { echo $eintrag['titel'];}else { echo '';} ?>"></p>
			<br>
			<p>Summery: 
			<input type="text" name="summary" class="summaryin" value="<?php if($_GET['id'] >= 1) { echo $eintrag['summary'];}else { echo ''; } ?>"></p>
			<br>
			<br>
			<p>Content: </p>
			<textarea id="text" name="content" class="contentin" cols="100" rows="10"><?php if($_GET['id'] >= 1) {echo $eintrag['content'];} else {echo '';} ?></textarea>
			<br>
			<input type="submit" name="aktivate" class="changbtn" value="ändern">
		</form>
	</div>
</section>
<?php 
include 'footer.php';
?>