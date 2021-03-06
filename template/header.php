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
		<img class="banner" src="img/web-icons/header.PNG">
			<div class="top-left">
				<span class="menu-icon">
				<a href="./index.php">	<img class="top" src="img/icons/mnu.png">
					<img class="bottom" src="img/icons/mnu-hover.png"></a>
				</span>
				
				<!-- HTML for SEARCH BAR -->
				<form action="./zoekresultaten.php" method="get">
				<div class="search">
			
					<label for="mysearch"><cite>Zoeken:</cite></label> 
					<input id="mysearch" name="zoek" type="search" placeholder="search">
					<input type = "submit" name="submit" id="submit" value="zoeken">
			    
				</div>
                </form>
				</div><!-- end top-left -->

			<div class="top-right">
				<span class="optie-icon">
				<?php if(!isset($_SESSION['userdata']))
					{
					echo'<img class="before" src="img/icons/opties.png">';
					echo'<a href="./inloggen.php"><img class="after" src="img/icons/opties-hover.png"></a>';
					}
					else
					{
					echo'<img class="before" src="img/icons/opties.png">';
					echo'<a href="./admin.php"><img class="after" src="img/icons/opties-hover.png"></a>';
					}
					?>
				
				</span>
			</div>
		</nav>
		
		
	</header><!-- end top-fixed -->