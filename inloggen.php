<?php

require("./template/header.php");


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
