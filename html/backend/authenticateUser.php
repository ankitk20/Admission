<?php

session_start();

$conn = new mysqli('localhost', 'root', '', 'registration');
if ($conn->connect_error) {
	die("Connection failed: (" . $conn->connect_errno . ") " . $conn->connect_error);
}

$vars = [];

foreach ($_POST as $key => $value) {
  $vars[$key] = $conn->real_escape_string(htmlspecialchars($value));
}

$stmt = $conn->prepare("SELECT * FROM signedupuser WHERE appid=?;");
$stmt->bind_param("s", $vars['uName']);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 0) {
	$stmt = $conn->prepare("SELECT * FROM applicationid WHERE appid=?;");
	$stmt->bind_param("s", $vars['uName']);
	$stmt->execute();
	$stmt->store_result();

	if ($stmt->num_rows === 1) {
		$stmt = $conn->prepare("SELECT * FROM password WHERE password=?;");
		$stmt->bind_param("s", $vars['passcode']);
		$stmt->execute();
		$stmt->store_result();

		if ($stmt->num_rows === 1) {
			$stmt = $conn->prepare("INSERT INTO signedupuser VALUES(?, ?);");
			$stmt->bind_param("ss", $vars['uName'], $vars['passcode']);
			$stmt->execute();

			$stmt = $conn->prepare("DELETE FROM applicationid WHERE appid=?;");
			$stmt->bind_param("s", $vars['uName']);
			$stmt->execute();

			$stmt = $conn->prepare("DELETE FROM password WHERE password=?;");
			$stmt->bind_param("s", $vars['passcode']);
			$stmt->execute();

			$_SESSION['userID'] = $vars['uName'];
			echo 'hide';
		}
	}
} else {
	$_SESSION['userID'] = $vars['uName'];
	echo 'hide';
}

$stmt->close();
$conn->close();

?>
