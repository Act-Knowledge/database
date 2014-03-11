<?php
//Database verbinding
$con = mysqli_connect("127.0.0.1","root","Lolo1211","mark-it");

if(!$con)
{
die("Fout in verbinding: ". mysqli_connect_error());
}


?>