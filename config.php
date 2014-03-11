<?php
//Database verbinding
$con = mysqli_connect("127.0.0.1","root","1234","mark-it");

if(!$con)
{
die("Fout in verbinding: ". mysqli_connect_error());
}


?>