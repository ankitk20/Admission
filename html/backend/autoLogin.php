<?php

session_start();

if (isset($_SESSION['userID']) && isset($_SESSION['password']))
  echo 'yes';
else
  echo 'no';

?>
