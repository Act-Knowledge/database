<?php
//Database verbinding
$con = mysqli_connect("127.0.0.1","root","1234","mark-it");


//connectie error?
if (mysqli_connect_error($con))
  {
  die('Kan niet connecten: ' . mysqli_connect_error());
  }

?>