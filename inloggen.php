<?php

require("config.php");

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
		<form action="login.php">
			<p>Naam:
				<input type="text" name="username" size="15" maxlength="30" />
			</p>
			<p>Wachtwoord:
				<input type="password" name="password" size="15" maxlength="30" />
			</p>

			<button class="submit" name="submit" type="submit">Aanmelden</button>
		</form>


	</div>

	</div><!-- end wrapper -->

	<footer></footer>
</body>
</html>
