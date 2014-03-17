<?php
Session_start();

unset($_SESSION['userdata']);
unset($_SESSION['username']);


?>

<meta http-equiv="refresh" content="0; URL=./admin.php">

<?php
die();
?>