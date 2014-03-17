<?php

if(isset($_SESSION['userdata']))
{
$logged_in = true;
}
else
{
header('Location: inloggen.php?error=nietinlogt');
die();
}
?>