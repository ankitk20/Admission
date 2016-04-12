<?php

session_start();

// unset($_SESSION['userID']);
// unset($_SESSION['password']);
session_unset();
session_destroy();
session_write_close();
setcookie(session_name(),'',0);
session_regenerate_id(true);

header('Location: http://localhost/Admission-Backup/html/form.php');
exit;

?>
