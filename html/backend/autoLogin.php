<?php

session_start();

if (isset($_SESSION['userID']))
  echo 'yes';
else
  echo 'no';

?>
