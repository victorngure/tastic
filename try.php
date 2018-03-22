<?php
include('DBconnect.php');
$result = mysqli_query($connection,"SELECT p.propertyId, p.propertyTitle, p.propertyPrice, p.propertyStatus, p.bedrooms, p.bathrooms, i1.image, i1.propertyId
        FROM properties p
        INNER JOIN images i1
        ON p.propertyId = i1.propertyId")
 or die(mysqli_error($connection)); 
    while ($rs = mysqli_fetch_array($result)) {
        $name=$rs['propertyTitle'];
        $image=$rs['image'];
        echo '<p>'.$name.'</p>';
        echo '<p>'.$image.'</p>';
    }
    ?>