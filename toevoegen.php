<?php

require("./includes/config.php");

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
			<div class="form">
				<form name="web-form" action="mailto:youremail@email.com" method="post">
					<input type="text" name="title" size="70">

					<select>
						<option value="html">HTML</option>
						<option value="css">CSS</option>
						<option value="php">PHP</option>
						<option value="jquery">jQuery</option>
					</select>

					<textarea cols="90" rows="16" name="message"></textarea>

					<input type="checkbox" name="add" value="foto">Upload foto<br>
					<input type="checkbox" name="add" value="video">Upload video

					<input type="file" name="uploadField" />
					
					<div class="enter">
					<input type="submit" value="submit">
					<input type="reset">
					</div>
				</form>
			</div> <!-- end post-form -->
	</div>

	</div><!-- end wrapper -->

	<footer></footer>
</body>
</html>
