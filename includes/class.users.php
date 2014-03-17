<?php
//USERS CLASS
class HoloUser {
	var $userid = 0; 
	var $username = "Gast";
	var $password = null;

    var $user = array('0','Gast','null');
	
	function HoloUser($name,$password){
	
		    $Lol = $mysqli->query("SELECT id,username,password FROM users WHERE username = '".$name."' LIMIT 1") or die (mysqli_connect_error());
			$User->user = $Lol->fetch_assoc;
		    $this->userid = $User->user['id'];
			$this->username = $User->user['username'];
			$this->password = $User->user['password'];
		
		
		}
		
	

}

?>

