<!DOCTYPE html>

<!-- Mirrored from htmldemo.kimarotec.net/Kwitara-Bootstrap-Real-Estate/html/dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 08:50:02 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Register</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="fonts/themify-icons/themify-icons.css" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" /><!-- Owl Carousal-->
    <link rel="stylesheet" href="css/price-range.css" type="text/css" /><!-- Owl Carousal -->

    <link rel="stylesheet" href="css/style.css" type="text/css" /><!-- Style -->	
    <link rel="stylesheet" href="css/responsive.css" type="text/css" /><!-- Responsive -->	
    <link rel="stylesheet" href="css/colors.css" type="text/css" /><!-- color -->	

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css">

</head>
<body>

    <!-- /.preloader -->
    <div id="preloader"></div>
    <div class="theme-layout">
        
        
        <div class="account-popup-sec">
            <div class="account-popup-area">
                <div class="account-popup">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="account-user">
                                <div class="logo">
                                    <a href="#" title="">
                                        <i class="fa fa-get-pocket"></i>
                                        <span>Tastic</span>
                                        <strong>REALTORS</strong>
                                    </a>
                                </div><!-- LOGO -->
                                <form>
                                    <h4>Login Form</h4>
                                    <div class="field">
                                        <input type="text" placeholder="Username" />
                                    </div>
                                    <div class="field">
                                        <input type="password" placeholder="Password" />
                                    </div>
                                    <div class="field">
                                        <?php include("log.php") ?>
                                    </div>
                                    <div class="field">
                                        <input name="submit" type="submit" value="SEND NOW" class="flat-btn" />
                                    </div>
                                </form>
                                <i>OR</i>
                                <span>LOGIN WITH</span>
                                <ul class="social-btns">
                                    <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="registration-sec">
                                <h3>SIGNUP Form</h3>
                                <form>
                                    <div class="field">
                                        <input type="text" placeholder="Your Name" />
                                    </div>
                                    <div class="field">
                                        <input type="text" placeholder="Your Email" />
                                    </div>
                                    <div class="field">
                                        <input type="password" placeholder="Type Password" />
                                    </div>
                                    <div class="field">
                                        <input type="password" placeholder="Retype Password" />
                                    </div>                                   
                                    <label>
                                        <input type="checkbox" /> By Clicking on this You are agree with our <a href="#" title="">Terms & Condition</a>
                                    </label>
                                    <input type="submit" value="Singup Now" class="flat-btn" />
                                </form>
                            </div><!-- Registration sec -->
                        </div>
                    </div>
                    <span class="close-popup"><i class="fa fa-close"></i></span>
                </div>
            </div>
        </div><!-- Account Popup Sec -->

        
        <header class="simple-header for-sticky ">
            <div class="menu">
                <div class="container">
                    <div class="logo">
                        <a href="index.php" title="">
                            <i class="fa fa-get-pocket"></i>
                            <span>Tastic</span>
                            <strong>REALTORS</strong>
                        </a>
                    </div><!-- LOGO -->
                    <div class="popup-client">
                        <span><i class="fa fa-user"></i> /  Signup</span>
                    </div>
                    <span class="menu-toggle"><i class="fa fa-bars"></i></span>
                    <nav>
                        <ul>
                                <li><a href="index.php" title="">HOME</a></li>
                                <li><a href="addListing.php" title="">ADD LISTING</a></li>
                                <li><a href="myListings.php" title="">MY LISTINGS</a></li>
                                <li><a href="contact.html" title="">CONTACT US</a></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </header>


        <div class="inner-head overlap">
            <div style="background: url(img/parallax1.jpg)" class="parallax scrolly-invisible no-parallax"></div>
            <!-- PARALLAX BACKGROUND IMAGE -->	
            <div class="container">
                <div class="inner-content">
                    <span><i class="fa fa-bolt"></i></span>
                    <h2>LOGIN PAGE</h2>
                    <ul>
                        <li><a href="#" title="">HOME</a></li>
                        <li><a href="#" title="">LOGIN PAGE</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- inner Head -->

        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="login-sec"> 
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="account-user">
                                        <div class="logo">
                                            <a href="#" title="">
                                                <i class="fa fa-get-pocket"></i>
                                                <span>Tastic</span>
                                                <strong>REALTORS</strong>
                                            </a>
                                        </div><!-- LOGO -->
                                            <h4>Login Form</h4>
                                            <form action="" method="post">                                    
                                            <div class="field">
                                                <input type="text" placeholder="Username" name="username" />
                                            </div>
                                            <div class="field">
                                                <input type="password" placeholder="Password" name="password" />
                                            </div>
                                            <div class="field">
                                                <p id="wrongPass" style="color: red"></p>
                                            </div>
                                            <div class="field">
                                                <input type="submit" name="login" value="Login" class="flat-btn"/>
                                            </div>
                                        </form>
                                        <?php
                                    if(isset($_POST['login'])){
                                        require('DBconnect.php');
                                        session_start();
                                        // If form submitted, insert values into the database.
                                        if (isset($_POST['username'])){                                            
                                            $username = stripslashes($_REQUEST['username']);
                                            $username = mysqli_real_escape_string($connection,$username);
                                            $password = stripslashes($_REQUEST['password']);
                                            $password = mysqli_real_escape_string($connection,$password);

                                            $query = "SELECT * FROM `users` WHERE userName='$username' and userPassword='".md5($password)."'";
                                            $result = mysqli_query($connection,$query) or die(mysql_error());
                                            $rows = mysqli_num_rows($result);
                                            $rs = mysqli_fetch_array($result);
                                            $userId=$rs['userId'];
                                            $_SESSION['userId']=$userId;
                                            if($rows==1){
                                                $_SESSION['username'] = $username;
                                                 // Redirect user to index.php
                                                header("Location: index.php");
                                            }else{                                                 
                                                echo '<script type="text/javascript">
                                                document.getElementById("wrongPass").innerHTML = " Username/password is incorrect. Kindly try login in again ";
                                                </script>';
                                             } 
                                         }
                                     }
                                            ?>  
                                        <i>OR</i>
                                        <span>LOGIN WITH</span>
                                        <ul class="social-btns">
                                            <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="registration-sec">
                                        <h3>SIGNUP Form</h3>
                                         <form action="reg.php" name="registration" method="post">
                                        <div class="field">
                                        <input type="text" placeholder="User Name" name="username" required/>
                                    </div>
                                    <div class="field">
                                        <input type="text" placeholder="Your Email" name="email" required/>
                                    </div>
                                    <div class="field">
                                        <input type="password" placeholder="Type Password" name="password" required/>
                                    </div> 
                                            <label>
                                                <input type="checkbox" /> By Clicking on this You are agree with our <a href="#" title="">Terms & Condition</a>
                                            </label>
                                            <input type="submit" value="Singup" class="flat-btn" />
                                        </form>
                                    </div><!-- Registration sec -->
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <footer>
            <section class="top-line">
                <div style="background: url(img/footer.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax blackish"></div><!-- PARALLAX BACKGROUND IMAGE -->	
                <div class="container">
                    <div class="row">                        
                        <div class="col-md-3 column">
                            <div class="about_widget widget">
                                <div class="heading1">
                                    <h2><span>Useful</span> links</h2>
                                </div><!-- heading -->

                                <span><i class="fa fa-envelope"></i>yourcompany@gmail.com</span>
                                <span><i class="fa fa-phone"></i>0888 (29999996)</span>
                                <span><i class="fa fa-location-arrow"></i>1234 Tokyo shibuia , WI 54115</span>
                                <ul class="social-btns">
                                    <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" title=""><i class="fa fa-tumblr"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 column">
                            <div class="links_widget widget">
                                <div class="heading1">
                                    <h2><span>Useful</span> links</h2>
                                </div><!-- heading -->
                                <ul>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Home</a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> About us</a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Services</a></li> 
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Services</a></li> 
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 column">
                            <div class="links_widget widget">
                                <div class="heading1">
                                    <h2><span>Useful</span> links</h2>
                                </div><!-- heading -->
                                <ul>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Lorem ipsum </a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Closest ipsum </a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Lorem dolom </a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Positioned ipl</a></li> 
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 column">
                            <div class="subscribe_widget widget">
                                <div class="heading1">
                                    <h2><span>Subscribe</span> Us</h2>
                                </div><!-- heading -->
                                <p>Positioning the closest positioned for abs positioning</p>
                                <form>
                                    <label><input type="text" placeholder="TYPE YOUR EMAIL" /></label>
                                    <button type="submit" class="flat-btn"><i class="ti ti-email"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="bottom-line">
                <div class="container">
                    <span>Copyright All Right Reserved 2016 <a href="#" title="">KimaroTec</a></span>
                    <ul>
                        <li><a title="" href="#">HOME</a></li>
                        <li><a title="" href="#">ABOUT</a></li>
                        <li><a title="" href="#">properties-</a></li>
                        <li><a title="" href="#">BLOG</a></li>
                        <li><a title="" href="#">CONTACT</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="scrollToTop"><i class="ti ti-arrow-circle-up"></i></a>
        </footer>

    </div>

    <!-- Script -->
    <script type="text/javascript" src="js/modernizr.js"></script><!-- Modernizer -->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script><!-- Jquery -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script><!-- Owl Carousal -->
    <script type="text/javascript" src="js/html5lightbox.js"></script><!-- HTML -->
    <script type="text/javascript" src="js/scrolly.js"></script><!-- Parallax -->
    <script type="text/javascript" src="js/price-range.js"></script><!-- Parallax -->
    <script type="text/javascript" src="js/script.js"></script><!-- Script -->
    <script type="text/javascript" src="js/jquery.poptrox.min.js"></script><!-- Popup -->

    <script type="text/javascript">
        $(document).ready(function () {
            "use strict";

            $(function () {
                var foo = $('.gallery-box');
                foo.poptrox({
                    usePopupCaption: true
                });
            });
        });
    </script>

</body>

<!-- Mirrored from htmldemo.kimarotec.net/Kwitara-Bootstrap-Real-Estate/html/dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 08:50:04 GMT -->
</html>