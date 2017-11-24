<?php 
include 'headernav/headernavlogin.php';
?>
<section class="include">
	<div class="container0">
		<?php 
			$id = $_GET['id'];
			$Statemant = $pdo->prepare("SELECT * FROM textablage.ablagetext WHERE id = :id");
			$result = $Statemant->execute(array('id' => $id));
			$eintrag = $Statemant->fetch();
		?>
		<form action="Script/Dateneinlesen.php?id=<?php echo $id ?>" name="beitrag" method="post" >
			<p>Titel: </p>
			<textarea id="text" name="titel" class="titelin"  cols ="50" rows="1"><?php if($id >= 1) { echo $eintrag['titel'];}else { echo '';} ?></textarea>
			<p>Summery: </p>
			<textarea id="text" name="summary" class="summaryin" cols="50" rows="1"><?php if($id >= 1) { echo $eintrag['summary'];}else { echo ''; } ?></textarea>
			<p>Content: </p>
			<div class="toolbar">
				<ul>
					<li><a href="#" class="btn">Fett</a></li>
					<li><a href="#" class="btn">Untersichrichen</a></li>
				</ul>
			</div>
			<hr>
			<div class="textfeld">
			<textarea style="clear:both;" id="text" name="content" class="contentin" cols="100" rows="10"><?php if($id >= 1) {echo $eintrag['content'];} else {echo '';} ?></textarea>
			</div>
			
			<input type="submit" name="aktivate" class="changbtn" value="ändern">
		</form>
	</div>
</section>
