<?php
session_start();
    function saveDataNoImage(){
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
            if($result){
                header("Location:review.php");
                }
            // }else{
            //     header("Location:login.php");
        }
    }

    function saveDataImage(){
        // if(isset($userId)){
            require('DBconnect.php');
            $userId=$_SESSION['userId'];
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

            $target_dir = "userPhotos";
            $fileToUpload = $_FILES['fileToUpload']['name'];
            $getFileExtension = pathinfo($fileToUpload, PATHINFO_EXTENSION);;
            if(($getFileExtension =='jpg') || ($getFileExtension =='jpeg') || ($getFileExtension =='png') || ($getFileExtension =='gif')){
                if ($_FILES["fileToUpload"]["size"] <= 5000000){
                    $breakImgName = explode(".",$fileToUpload);
                    $imageOldNameWithOutExt = $breakImgName[0];
                    $imageOldExt = $breakImgName[1]; 
                    $newFileName = strtotime("now")."-".str_replace(" ","-",strtolower($imageOldNameWithOutExt)).".".$imageOldExt;
                    $targetPath = $target_dir."/".$newFileName;
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetPath)){
                        $query = "UPDATE users SET userName ='$userName ' , userMobile1='$mobile1' , userMobile2='$mobile2', facebook='$facebook', twitter='$twitter', youtube='$youtube', userPhoto ='$newFileName' WHERE userId='$userId'";
                        $result = mysqli_query($connection,$query) or die(mysqli_error($connection));
                        if($result){
                            header("Location:review.php");
                        }
                    } else{
                        echo "Cannot move file to new directory ";}
                } else{
                    echo "Image size is too large in";} 
                }else{
                    echo 'Only images allowed';}
            // }else{
            //     header("Location:login.php");}
    }

    $fileToUpload = $_FILES['fileToUpload']['name'];   
    if($fileToUpload == null || $fileToUpload == ""){
        saveDataNoImage();
    }
    else {
        saveDataImage();
        }
?>

