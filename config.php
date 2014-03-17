<?php
 Session_start();
//Hostname, bijvoorbeeld: localhost of 127.0.0.1
$host = "127.0.0.1";
//Database gebruikersnaam
$dbuser = "root";
//Database wachtwoord
$dbpass = "1234";
//Database naam
$dbname = "mark-it";

//Database verbinding
$con = mysqli_connect($host,$dbuser,$dbpass,$dbname);


//connectie error?
if (mysqli_connect_error($con))
  {
  // laat de error zien.
  die('Kan niet connecten: ' . mysqli_connect_error());
  }

  
  function Security($input) {
	$output = $input;
	
	$output = addslashes($output);
	$output = mysql_real_escape_string($output);
	$output = htmlspecialchars($output);
	
	return $output;
}


function Jordyhash($string) {
	$output = sha1($string);
	
	return $output;
}
?>