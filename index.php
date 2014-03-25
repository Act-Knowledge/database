<?php

require("./template/header.php");

?>
	<div class="wrapper">
		<div class="rij1">
		
		
		<?php
		$sql = $mysqli->query("SELECT * FROM tuts WHERE type = 1 OR type = 2 ORDER by id");
		
		while($row = mysqli_fetch_object($sql))
		{
		?>
			<div class="tutorials">
		 		<h2><?php echo $row->titel; ?></h2>
		 		
				  <?php 
			if(trim($row->videolink)) 
			{
			echo '<iframe width="532" height="315" src="'.$row->videolink.'" frameborder="0" allowfullscreen></iframe>';
			}
			else
			{
			echo '<div class="image"><center><img src="'.$row->afbeelding.'" style="width:200px;" alt="'.$row->titel.'"></center>	</div>';
			}
			?>
				
				
		 		<section class="tekst"><?php
if(strlen($row->bericht) > 50)
{
$textdisplaylist = '<div>'.substr($row->bericht,0,50).'<br><a href="./article.php?id='.$row->id.'">Lees meer >></a></div>';
}
else
{
$textdisplaylist = '<div>'.$row->bericht.'<br><a href="./article.php?id='.$row->id.'">Lees meer >></a></div>';
}

				echo $textdisplaylist; ?></section><br>
				<section style="text-align:right;">Door: <b><?php echo $row->auteur; ?></b></section>
		
			</div>
			
			<?php
			}
			?>
			
			
			
		</div>
		<div class="rij2">
			
		<?php
		$sql = $mysqli->query("SELECT * FROM tuts WHERE type = 3 ORDER by id");
		
		while($row = mysqli_fetch_object($sql))
		{
		?>
		
			<div class="fotos">
		<h2><?php echo $row->titel; ?></h2>
		
		 		  <?php 
				if(trim($row->videolink)) 
			{
			echo '<iframe width="532" height="315" src="'.$row->videolink.'" frameborder="0" allowfullscreen></iframe>';
			}
			else
			{
			echo '<div class="image"><center><img src="'.$row->afbeelding.'" style="width:200px;" alt="'.$row->titel.'"></center>	</div>';
			}
			?>
			<section class="tekst"><?php
if(strlen($row->bericht) > 50)
{
$textdisplaylist = '<div>'.substr($row->bericht,0,50).'<br><a href="./article.php?id='.$row->id.'">Lees meer >></a></div>';
}
else
{
$textdisplaylist = '<div>'.$row->bericht.'<br><a href="./article.php?id='.$row->id.'">Lees meer >></a></div>';
}

				echo $textdisplaylist; ?></section><br>
				<section style="text-align:right;">Door: <b><?php echo $row->auteur; ?></b></section>
			</div>
			
			<?php
			}
			?></div>
		<div class="rij3">
		<?php
		$sql = $mysqli->query("SELECT * FROM tuts WHERE type = 4 ORDER by id");
		
		while($row = mysqli_fetch_object($sql))
		{
		?>
			<div class="videos">
		 			<h2><?php echo $row->titel; ?></h2>
		    <?php 
				if(trim($row->videolink)) 
			{
			echo '<iframe width="532" height="315" src="'.$row->videolink.'" frameborder="0" allowfullscreen></iframe>';
			}
			else
			{
			echo '<div class="image"><center><img src="'.$row->afbeelding.'" style="width:200px;" alt="'.$row->titel.'"></center>	</div>';
			}
			?>
			
		 		<section class="tekst"><?php
if(strlen($row->bericht) > 50)
{
$textdisplaylist = '<div>'.substr($row->bericht,0,50).'<br><a href="./article.php?id='.$row->id.'">Lees meer >></a></div>';
}
else
{
$textdisplaylist = '<div>'.$row->bericht.'<br><a href="./article.php?id='.$row->id.'">Lees meer >></a></div>';
}

				echo $textdisplaylist; ?></section><br>
				<section style="text-align:right;">Door: <b><?php echo $row->auteur; ?></b></section>
			</div>
			<?php
			}
			?>
		</div>
	</div><!-- end wrapper -->

	<footer></footer>


</body></html>