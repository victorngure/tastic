 <?php
     session_start();
      include('configdb.php');
     if(isset($_POST['submit']))
                                            {
                                            $email = trim($_POST['email']);
                                            $password = trim($_POST['password']);
                                            $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
                                            $result = mysqli_query($mysqli,$query)or die(mysqli_error());
                                            $num_row = mysqli_num_rows($result);
                                            $row=mysqli_fetch_array($result);
                                            if( $num_row ==1 )
                                            {
                                            $_SESSION['user_name']=$row['username'];
                                                 $message = "You have successfully logged in";
                                                echo "<script type='text/javascript'>alert('$message');</script>";
                                            header("Location: contact.html");
                                            exit;
                                            }
                                            else
                                            {
                                            echo '<script type="text/javascript">
                                                document.getElementById("wrongPass").innerHTML = " Username/password is incorrect. Kindly try login in again ";
                                                </script>';
                                            }
                                            }
                                        ?>