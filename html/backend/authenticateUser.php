<?php

session_start();
// session_regenerate_id(true); // generates different session id on every login

$conn = new mysqli('localhost', 'root', 'samrudhiS12~`', 'registration');
if ($conn->connect_error) {
	die("Connection failed: (" . $conn->connect_errno . ") " . $conn->connect_error);
}

$userID = $conn->real_escape_string(htmlspecialchars($_POST['uName']));
$password = $conn->real_escape_string(htmlspecialchars($_POST['passcode']));

$stmt = $conn->prepare("SELECT * FROM signedupuser WHERE appID=? AND password=?;");
$stmt->bind_param("ss", $userID, $password);
$stmt->execute();

if ($conn->num_rows === 0) {
	$stmt = $conn->prepare("SELECT * FROM applicationid WHERE appid=?;");
	$stmt->bind_param("s", $userID);
	$stmt->execute();

	if ($conn->num_rows === 1) {
		$stmt = $conn->prepare("SELECT * FROM password WHERE password=?;");
		$stmt->bind_param("s", $password);
		$stmt->execute();

		if ($conn->num_rows === 1) {
			$stmt = $conn->prepare("INSERT INTO signedupuser VALUES(?, ?);");
			$stmt->bind_param("ss", $userID, $password);
			$stmt->execute();
			$_SESSION['userID'] = $userID;
			$_SESSION['password'] = $password;
			echo 'hide';
		}
	}
} else {
	$_SESSION['userID'] = $userID;
	$_SESSION['password'] = $password;
	echo 'hide';
}

$stmt->close();
$conn->close();

?>
