<?php 
include 'headernav/headernavlogin.php';
?>
<section class="include">
	<div class="sidenav">
		<ul>
			<li><a class="active" href="loginSeite.php">Profil</a></li>
			<li><a href="passwortaendern.php">Passwortändern</a></li>
			<li><a href="Bearbeiten.php">Bearbeiten</a></li>
		</ul>
	</div>
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
				<script type="text/javascript" src="javascript/nicEdit.js"></script>
			</div>
			<hr>
			<div class="textfeld">
			<textarea style="clear:both;" id="contentto" name="content" rows="10"><?php if($id >= 1) {echo $eintrag['content'];} else {echo '';} ?></textarea>
			<script type="text/javascript">bkLib.onDomLoaded(function(){ new nicEditor().panelInstance('contentto');});</script>
			</div>
			<input type="submit" name="aktivate" class="changbtn" value="ändern">
		</form>
	</div>
</section>
