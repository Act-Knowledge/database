<?php

if(isset($_SESSION['userdata']))
{

$logged_in = true;
}
else
{
?>
<meta http-equiv="refresh" content="0; URL=./inloggen.php?error=nietingelogt">
<?php
die();
}
?>