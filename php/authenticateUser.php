<?php

		$dbConn = mysqli_connect('localhost',<username>,<password>,<database_name>);

		$query = "select DISTINCT 1 FROM authenticate WHERE appID ='{$_POST['uName'] }' and password='{$_POST['passcode']}';";
	
		$result = mysqli_query($dbConn,$query);

		if( mysqli_num_rows($result) > 0 ){

			echo 'hide';
				
		}else{
			echo 'show';
		}

		mysqli_close($dbConn);
?>