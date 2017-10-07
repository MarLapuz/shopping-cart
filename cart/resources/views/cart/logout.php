<?php
session_start();
unset($_SESSION['Account_ID']);
unset($_SESSION['Username']);
unset($_SESSION['Password']);
header("location: login.php");
?>