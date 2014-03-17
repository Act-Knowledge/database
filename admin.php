<?php
require("./includes/config.php");
require("./loginbeveiliging.php");

?>

<!doctype html><!-- Act-Knowledge "mark-it" 
Laatste update: 2014-02-20 -->
<html>
<head>
	<meta charset="utf-8">
	<!-- stylesheet -->
	<title>Mark-it</title>
	<link rel="stylesheet" href="css/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<link rel="icon" type="img/ico" href="img/web-icons/favicon.gif">
</head>
<body>	
	<header class="top-fixed">
		<nav class="menu">
			<div class="top-left">
				<span class="menu-icon">
					<img class="top" src="img/icons/mnu-hover.png" />
					<img class="bottom" src="img/icons/mnu.png" />
				</span>
			
			</div><!-- end top-left -->

			<div class="top-right">
				<span class="optie-icon">
					<img class="before" src="img/icons/opties-hover.png" />
					<img class="after" src="img/icons/opties.png" />
				</span>
			</div>
		</nav>
	</header><!-- end top-fixed -->

	<div class="wrapper">

	<div id="main">
	<?php echo "<center>Welkom ".User::getUserData('username').", In het allerbeste paneel ter wereld!<br><br></center>"; ?>
			<div class="uploads">
				<section class="load1"><img src="img/add/video.png" class="image"/></section>
				<section class="load2"><img src="img/add/foto.png" class="image"></section>
				<section class="load3"><img src="img/add/doc.png" class="image"></section>
			</div><!-- end uploads-->

			<nav class="add">
				<ul>
			        <li><a href="#"><img src="img/add/plus.png" class="image">Add video</a></li>
			        <li><a href="#"><img src="img/add/plus.png" class="image">Add foto</a></li>
			        <li><a href="#"><img src="img/add/plus.png" class="image">New article</a></li>
			     </ul>
			</nav>
	</div>

	</div><!-- end wrapper -->

	<footer></footer>
</body>
</html>
