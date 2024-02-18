<?php
session_start();
unset($_SESSION['loggedin']);
unset($_SESSION['USERNAME']);
session_destroy();
header("location:index.php");
?>
