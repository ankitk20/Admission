<?php

session_start();

unset($_SESSION['userID']);
unset($_SESSION['password']);

header('location: ../form.php');

?>
