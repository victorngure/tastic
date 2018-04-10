<?php
include('auth.php');
include ('DBconnect.php');
$propId = $_GET['propertyId'];
$result = mysqli_query($connection,"DELETE FROM property_features WHERE propertyId = $propId") or die(mysqli_error($connection)); 

$result = mysqli_query($connection,"DELETE FROM images WHERE propertyId = $propId") or die(mysqli_error($connection)); 

$result = mysqli_query($connection,"DELETE FROM properties WHERE propertyId = $propId") or die(mysqli_error($connection)); 
if($result) {
	header("Location:myListings.php");
}
?>