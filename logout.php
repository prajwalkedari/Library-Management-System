<?php
session_start();
unset($_SESSION["UserName"]);
session_unset();
session_destroy();
header("Location: login.php");
exit();
?>
