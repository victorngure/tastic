<?php
require('DBconnect.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username']))
{
        // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($connection,$username); 
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($connection,$email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($connection,$password);
        $query = "INSERT into `users` (userName, userPassword, userEmail)
        VALUES ('$username', '".md5($password)."', '$email')";
        $result = mysqli_query($connection,$query);
        if($result){
            header("Location: login.php");
        }
        else{
            echo 'Could not register you at the moment';
        }
}
?>