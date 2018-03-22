 <?php
$server = "localhost";
$user = "root";
$password = "";
$database="tastic";  

// Create connection
$connection=mysqli_connect($server,$user,$password,$database) or die("NO server and database");

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
// echo "Connected successfully";
?> 