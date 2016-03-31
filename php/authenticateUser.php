<?php

session_start();
// session_regenerate_id(true); // generates different session id on every login

$dbConn = mysqli_connect('localhost', 'root', '', 'registration');
$userID = mysqli_real_escape_string($dbConn, htmlspecialchars($_POST['uName']));
$password = mysqli_real_escape_string($dbConn, htmlspecialchars($_POST['passcode']));

$query = "select * FROM signedupuser WHERE appID ='$userID' and password='$password';";
$result = mysqli_query($dbConn, $query);

if (mysqli_num_rows($result) === 0) {
	$query = "select * FROM applicationid WHERE appid ='$userID';";
	$result = mysqli_query($dbConn, $query);

	if (mysqli_num_rows($result) === 1) {
		$query = "select * FROM password WHERE password ='$password';";
		$result = mysqli_query($dbConn, $query);

		if (mysqli_num_rows($result) === 1) {
			$query = "insert into signedupuser values ('$userID','$password');";
			mysqli_query($dbConn, $query);
			$_SESSION['userID'] = $userID;
			$_SESSION['password'] = $password;
			echo "hide";
		}
	}
} else {
	echo "hide";
	$_SESSION['userID'] = $userID;
	$_SESSION['password'] = $password;
}

mysqli_close($dbConn);

?>
