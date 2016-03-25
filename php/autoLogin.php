<?php
	session_start();

	if( isset($_SESSION['userID']) && isset($_SESSION['password']) ){
		echo "hide";
	}else{
		echo "show";
	}
?>