<?php
	
	session_start();

	if( isset($_SESSION['userID']) && isset($_SESSION['password']) ){
		unset($_SESSION['password']);
		unset($_SESSION['userID']);
		echo "logged out";
	}else{
		echo "session is null";
	}

?>