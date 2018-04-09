<?php
include('auth.php');
include ('DBconnect.php');
$imageId = $_GET['imageId'];
$result = mysqli_query($connection,"DELETE FROM images WHERE imageId = $imageId") or die(mysqli_error($connection)); 
if($result) {
	$propertyId = $_SESSION['propertyIdForEdit'];
	header("Location:editProperty.php?propertyId=".$propertyId);
}
?>