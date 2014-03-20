<?php

require("./template/header.php");

?>
	<div class="wrapper">
		<div class="rij1">
		
		
		<?php
		$sql = $mysqli->query("SELECT * FROM tuts WHERE type = 1 ORDER by titel");
		
		while($row = mysqli_fetch_object($sql))
		{
		?>
			<div class="tutorials">
		 		<h2><?php echo $row->titel; ?></h2>
		 		<div class="image"><center><img src="<?php echo $row->afbeelding; ?>" style="width:200px;" alt="<?php echo $row->titel; ?>"></center>	</div>
		 		<section class="tekst"><?php echo $row->bericht; ?></section><br>
				<section style="text-align:right;">Door: <b><?php echo $row->auteur; ?></b></section>
		
			</div>
			
			<?php
			}
			?>
			
			
			
		</div>
		<div class="rij2">
			
		<?php
		$sql = $mysqli->query("SELECT * FROM tuts WHERE type = 2 ORDER by titel");
		
		while($row = mysqli_fetch_object($sql))
		{
		?>
		
			<div class="fotos">
		<h2><?php echo $row->titel; ?></h2>
		 		<div class="image"><center><img src="<?php echo $row->afbeelding; ?>" style="width:200px;" alt="<?php echo $row->titel; ?>"></center>	</div>
		 		<section class="tekst"><?php echo $row->bericht; ?></section><br>
				<section style="text-align:right;">Door: <b><?php echo $row->auteur; ?></b></section>
			</div>
			
			<?php
			}
			?></div>
		<div class="rij3">
		<?php
		$sql = $mysqli->query("SELECT * FROM tuts WHERE type = 3 ORDER by titel");
		
		while($row = mysqli_fetch_object($sql))
		{
		?>
			<div class="videos">
		 			<h2><?php echo $row->titel; ?></h2>
		     <iframe width="420" height="315" src="<?php echo $row->videolink;?>" frameborder="0" allowfullscreen></iframe>
		 		<section class="tekst"><?php echo $row->bericht; ?></section><br>
				<section style="text-align:right;">Door: <b><?php echo $row->auteur; ?></b></section>
			</div>
			<?php
			}
			?>
		</div>
	</div><!-- end wrapper -->

	<footer></footer>


</body></html>