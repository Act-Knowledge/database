<?php

require("./includes/config.php");

if(isset($_SESSION['userdata']))
{
?>
<meta http-equiv="refresh" content="0; URL=./admin.php">
<?php
}
if(isset($_POST['submit']))
{

$username = Security($_POST['username']);
$password = Jordyhash($_POST['password']); 
$query = $mysqli->query("SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."' LIMIT 1");
$count = $query->num_rows;

if($count > 0)
{
$user = new JordyUser($username);
$_SESSION['userdata'] = $user;
$_SESSION['username'] = User::getUserData('username');
?>
<meta http-equiv="refresh" content="0; URL=./admin.php">
<?php
}
else
{
$error = "Onjuist wachtwoord of gebruikersnaam";
}

}

if(isset($_GET['error']))
{

$fout = Security($_GET['error']);

if($fout == 'nietingelogt')
{

$error = "Je bent niet ingelogt!";

}
}
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
	
				<!-- HTML for SEARCH BAR -->
				<div class="search">
					<label for="mysearch">Enter your search string here : </label> 
					<input id="mysearch" type="search" placeholder="search">
				</div>
	</header><!-- end top-fixed -->

	<div class="wrapper">

	<div id="main">
<center>	<?php 
if(isset($error))
{
echo $error;
}
?></center>
		<form action="inloggen.php" id="login" method="post">

			<p>Naam:
				<input type="text" id="username" name="username" size="15" maxlength="30" />
			</p>
			<p>Wachtwoord:
				<input type="password" id="password" name="password" size="15" maxlength="30" />
			</p>

			<input class="submit" id="button" name="submit" type="submit" value="Aanmelden">
		</form>


	</div>

	</div><!-- end wrapper -->

	<footer></footer>
</body>
</html>
