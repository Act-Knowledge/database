<?php
 
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

?>