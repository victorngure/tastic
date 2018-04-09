<?php
include("DBconnect.php");
if(($_POST['status']) && ($_POST['value'])){
    $propertyType = trim(strip_tags($_POST['value']));
    $propertyStatus = trim(strip_tags($_POST['status']));
    $sql = "SELECT * FROM properties WHERE propertyStatus = '$propertyStatus' AND propertyType = '$propertyType'"; // Create Query 
    $result = mysqli_query($connection, $sql);  // Run Query
    echo "<table border=1><tr><th>ID</th><th>PROPERTY TITLE</th><th>PRICE</th><th>DESCRIPTION</th></tr>";
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr>";
        echo "<td>" . $row['propertyId'] . "</td>";
        echo "<td>" . $row['propertyTitle'] . "</td>";
        echo "<td>" . $row['propertyPrice'] . "</td>";
        echo "<td>" . $row['propertyDescription'] . "</td>";
        echo "</tr>";    
    }
    echo "</table>";
    mysqli_free_result($result);
}
else if(($_POST['status']) && (!$_POST['value'])){
    $propertyStatus = trim(strip_tags($_POST['status']));
    $sql = "SELECT * FROM properties WHERE propertyStatus = '$propertyStatus'"; // Create Query 
    $result = mysqli_query($connection, $sql);  // Run Query
    echo "<table border=1><tr><th>ID</th><th>PROPERTY TITLE</th><th>PRICE</th><th>DESCRIPTION</th></tr>";
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr>";
        echo "<td>" . $row['propertyId'] . "</td>";
        echo "<td>" . $row['propertyTitle'] . "</td>";
        echo "<td>" . $row['propertyPrice'] . "</td>";
        echo "<td>" . $row['propertyDescription'] . "</td>";
        echo "</tr>";    
    }
    echo "</table>";
    mysqli_free_result($result);
}
else if((!$_POST['status']) && ($_POST['value'])){
    $propertyType = trim(strip_tags($_POST['value']));
    $sql = "SELECT * FROM properties WHERE propertyType = '$propertyType'"; // Create Query 
    $result = mysqli_query($connection, $sql);  // Run Query
    echo "<table border=1><tr><th>ID</th><th>PROPERTY TITLE</th><th>PRICE</th><th>DESCRIPTION</th></tr>";
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr>";
        echo "<td>" . $row['propertyId'] . "</td>";
        echo "<td>" . $row['propertyTitle'] . "</td>";
        echo "<td>" . $row['propertyPrice'] . "</td>";
        echo "<td>" . $row['propertyDescription'] . "</td>";
        echo "</tr>";    
    }
    echo "</table>";
    mysqli_free_result($result);
}
else{
     echo 'Both tags are empty';
 }
    ?>