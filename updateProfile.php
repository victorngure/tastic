<?php
session_start();
?>
<?php
require('DBconnect.php');
$userId=$_SESSION['userId'];
if(isset($userId)){
$userName = stripslashes($_REQUEST['userName']);
    $userName = mysqli_real_escape_string($connection,$userName); 

$mobile1 = stripslashes($_REQUEST['mobile1']);
    $mobile1 = mysqli_real_escape_string($connection,$mobile1); 

$mobile2 = stripslashes($_REQUEST['mobile2']);
    $mobile2 = mysqli_real_escape_string($connection,$mobile2); 

$facebook = stripslashes($_REQUEST['facebook']);
    $facebook = mysqli_real_escape_string($connection,$facebook); 

$twitter = stripslashes($_REQUEST['twitter']);
    $twitter = mysqli_real_escape_string($connection,$twitter); 

$youtube = stripslashes($_REQUEST['youtube']);
    $youtube = mysqli_real_escape_string($connection,$youtube); 

    $query = "UPDATE users SET userName ='$userName ' , userMobile1='$mobile1' , userMobile2='$mobile2', facebook='$facebook', twitter='$twitter', youtube='$youtube' WHERE userId='$userId'";
        $result = mysqli_query($connection,$query) or die(mysqli_error($connection));
        header("Location:review.php");
}

