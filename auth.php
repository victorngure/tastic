<?php
session_start();
if(!isset($_SESSION["username"])){
	$message = "Kindly login to perform action";
echo "<script type='text/javascript'>alert('$message');</script>";
header("Location: registerStart.php");
exit(); }
?>