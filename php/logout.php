<?php

session_start();

if (isset($_SESSION['userID']) && isset($_SESSION['password'])) {
  unset($_SESSION['userID']);
  unset($_SESSION['password']);
  echo "logged out";
} else {
  echo "session is null";
}

?>
