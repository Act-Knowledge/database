<?php 
$mysqli = mysqli_connect("127.0.0.1","root","Mysql wachtwoord","Database naam");


if(mysqli_connect_error($mysqli))
  {
  // laat de error zien.
  die('Kan niet connecten: ' . mysqli_connect_error());
  }
?>