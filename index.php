<?php

require("./includes/config.php");

?>
<html><head>
	<meta charset="utf-8">
	<!-- stylesheet -->
	<title>Mark-it</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
	<link rel="icon" type="img/ico" href="img/web-icons/favicon.gif">

</head>
<body>	
	<header class="top-fixed">
		<nav class="menu">
			<div class="top-left">
				<span class="menu-icon">
					<img class="top" src="img/icons/mnu-hover.png">
					<img class="bottom" src="img/icons/mnu.png">
				</span>
				
				<!-- HTML for SEARCH BAR -->
				<div class="search">
					<label for="mysearch">Enter your search string here : </label> 
					<input id="mysearch" type="search" placeholder="search">
				</div>

				</div><!-- end top-left -->

			<div class="top-right">
				<span class="optie-icon">
					<img class="before" src="img/icons/opties-hover.png">
					<?php if(!isset($_SESSION['userdata']))
					{
					echo'<a href="/inloggen.php"><img class="after" src="img/icons/opties.png"></a>';
					}
					?>
				
				</span>
			</div>
		</nav>
		
		
	</header><!-- end top-fixed -->

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