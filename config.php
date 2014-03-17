<?php
 Session_start();


//Database verbinding

function get_my_db()
{
static $mysqli;

if (!$mysqli) 
{

//Hostname, bijvoorbeeld: localhost of 127.0.0.1
$host = "127.0.0.1";
//Database gebruikersnaam
$dbuser = "root";
//Database wachtwoord
$dbpass = "1234";
//Database naam
$dbname = "mark-it";

$mysqli = new mysqli($host,$dbuser,$dbpass,$dbname);
}

return $mysqli;
}

$mysqli = get_my_db();

//connectie error?
if (mysqli_connect_error($con))
  {
  // laat de error zien.
  die('Kan niet connecten: ' . mysqli_connect_error());
  }

  
  function Security($input) {
	$output = $input;
	$mysqli = get_my_db();
	$output = addslashes($output);
	$output = mysqli_real_escape_string($mysqli,$output);
	$output = htmlspecialchars($output);
	
	return $output;
}


function Jordyhash($string) {
	$output = sha1($string);
	
	return $output;
}
?>