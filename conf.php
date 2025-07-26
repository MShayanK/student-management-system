<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$host="localhost";
$uname="root";
$pass="";
$db="student";

$conn= mysqli_connect($host, $uname, $pass, $db) or die(mysqli_error($conn));
?>