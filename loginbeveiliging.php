<?php

require("config.php");

if(isset($_SESSION['gebruiker']) && isset($_SESSION['wachtwoord'])
{

echo "alles is goed";

}
else
{

header('Location: login.php?error=nietinlogt');
die();
}
?>