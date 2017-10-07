<?php
error_reporting(0);
session_start();
if (isset($_SESSION['Account_ID']) == ' ' && ($_SESSION['Account_Description']) == 'Customer'){
    $dbconnect = mysqli_connect("mysql.hostinger.ph", "u810519564_giga", "cabusolapuzseverino");
    mysqli_select_db($dbconnect, "u810519564_giga");
?>
<?php

require __DIR__ . '/../bootstrap/app.php';

$app->run();
?>
<?php
}
 else{
    header("location: /../cart/resources/views/cart/login.php");
     }
    ?>