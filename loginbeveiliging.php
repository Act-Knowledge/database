<?php

if(isset($_SESSION['userdata']))
{
$user = new JordyUser($_SESSION['username']);
$_SESSION['userdata'] = $user;
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