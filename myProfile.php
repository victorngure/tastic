<?php
include('auth.php');
include('DBconnect.php');
$userId=$_SESSION['userId'];
$result = mysqli_query($connection,"SELECT * FROM users WHERE userId = $userId") 
or die(mysqli_error($connection)); 
while ($rs=mysqli_fetch_assoc($result)) {
    $userName = $rs['userName'];
    $userEmail =$rs['userEmail'];
    $userMobile1 =$rs['userMobile1'];
    $userMobile2 =$rs['userMobile2'];
    $facebook =$rs['facebook'];
    $twitter =$rs['twitter'];
    $youtube =$rs['youtube'];
    $userPhoto = $rs['userPhoto'];
}
?>
<!DOCTYPE html>

<!-- Mirrored from htmldemo.kimarotec.net/Kwitara-Bootstrap-Real-Estate/html/dark/submit.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 08:50:02 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo '<title>'.$userName.'</title>';?>

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="fonts/themify-icons/themify-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" />
    <link rel="stylesheet" href="css/price-range.css" type="text/css" />

    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" /> 
    <link rel="stylesheet" href="css/colors.css" type="text/css" />
    <link rel="stylesheet" href="css/colors.css" type="text/css" />
    <link rel="stylesheet" href="css/steps.css" type="text/css" />

    <link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css">

</head>
<body>
    <!-- /.preloader -->
    <div id="preloader"></div>

    <div class="theme-layout">

        
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
                        <v class="popup-client">
                        <span><?php if(isset( $_SESSION['username'])) { echo 'Logout </a> '; } else 
                         { echo '<a class="link" href="login.php"> Sign Up | Login </a>'; }?> </span>
                    </div>
                    <span class="menu-toggle"><i class="fa fa-bars"></i></span>
                    <nav>
                        <ul>
                           <li><a href="index.php" title="">HOME</a></li>
                                <li><a href="addListing.php" title="">ADD LISTING</a></li>
                                <li><a href="myListings.php" title="">MY LISTINGS</a></li>
                                <li><a href="myProfle.php" title="">PROFILE</a></li>  
                                
                        </ul>
                    </nav>

                </div>
            </div>
        </header>


        <div class="inner-head overlap">
            <div style="background: url(img/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE --> 
            <div class="container">
                <div class="inner-content">
                    <span><i class="fa fa-user"></i></span>
                    <h2>Contact  Details</h2>
                    <ul>
                        <li><a href="#" title="">HOME</a></li>
                        <li><a href="#" title="">Contact  Details</a></li>
                    </ul>
                </div>
            </div>
        </div> 
       
</div>      
        <section class="block"  style="padding-top: 2px">
            <div class="container agnet-prop">
                <div class="row">                    
                        <div class="submit-content">
                            <form id="profile_form" name="profile_form" class="form profile-form" action="updateProf.php" enctype="multipart/form-data" method="post">
                                <div class="control-group">
                                    <div class="group-title">How to reach you</div>
                                    <div class="group-container row">                                       
                                        <div class="col-md-12">
                                            <div class="row">
                                           <div class="col-md-6">
                                                    <div class="form-group s-profile-title">
                                                        <label for="title">Name&nbsp;*</label>
                                                        <?php echo '<input class="form-control" value="'.$userName.'" name="userName" required="" type="text">';?>
                                                    </div>
                                                     </div>
                                                      <div class="col-md-6">
                                                     <div class="form-group s-profile-email">
                                                        <label for="email">Email&nbsp;*</label>
                                                         <?php echo '<input class="form-control" value="'.$userEmail.'" name="userEmail" required="" type="text" readonly>';?>
                                                    </div>
                                                     </div>
                                                    <div class="col-md-6">
                                                    <div class="form-group s-profile-phone">
                                                        <label for="mobile">Mobile 1</label>
                                                        <?php echo '<input id="phone" class="form-control" value="'.$userMobile1.'" name="mobile1" type="text" required>';?>
                                                        <br>
                                                        <input type="checkbox" name="priceHide" value="Hide Mobile 1"><label>Hide Mobile 1</label>
                                                    </div>
                                                    </div>
                                                     <div class="col-md-6">
                                                    <div class="form-group s-profile-mobile">
                                                        <label for="mobile">Mobile 2</label>
                                                        <?php echo '<input id="phone" class="form-control" value="'.$userMobile2.'" name="mobile2" type="text">';?>
                                                        <br>
                                                        <input type="checkbox" name="priceHide" value="Attic"><label>Hide Mobile 2</label>
                                                    </div>
            
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="control-group">
                                    <div class="group-title">
                                    Agent/Agency Photo
                                    </div>
                                    <?php 
                                    echo '<img id="agentPic" src= "userPhotos/'.$userPhoto.'" width="20%" height="28%" style="float:right;" alt="No Image">';
                                    ?>
                                    <div class="group-container row">
                                    <input type="file" name="fileToUpload"  id="fileToUpload"> 
                                    </div>
                                <div class="control-group">
                                    <div class="group-title">Social Media</div>
                                    <div class="group-container row">
                                        <div class="col-md-6">
                                            <div class="form-group s-profile-facebook">
                                                <label for="facebook">Facebook Url</label>
                                                <?php 
                                                echo '<input class="form-control" value="'.$facebook.'" name="facebook" type="text">';
                                                ?>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group s-profile-twitter">
                                                <label for="twitter">Twitter Url</label>
                                                <?php echo '<input class="form-control" value="'.$twitter.'" name="twitter" type="text">';?>
                                            </div>
                                            </div>
                                        <div class="col-md-6">
                                            <div class="form-group s-profile-linkedin">
                                                <label for="linkedin">Youtube Url</label>
                                                <?php echo '<input class="form-control" value="'.$youtube.'" name="youtube" type="text">';?>
                                            </div> 
                                            </div>  

                                        <div class="col-md-12">
                                            <div class="submit">
                                                <input class="btn flat-btn" id="profile_submit" value="SUBMIT" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    </div>   
                                </div>
                            </form>
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
                        <li><a title="" href="#">PROPERTIES</a></li>
                        <li><a title="" href="#">BLOG</a></li>
                        <li><a title="" href="#">CONTACT</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="scrollToTop"><i class="ti ti-arrow-circle-up"></i></a>
        </footer>
    </div>

    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script><!-- Modernizer -->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script><!-- Jquery -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script><!-- Owl Carousal -->
    <script type="text/javascript" src="js/html5lightbox.js"></script><!-- HTML --> 
    <script type="text/javascript" src="js/scrolly.js"></script><!-- Parallax -->
    <script type="text/javascript" src="js/price-range.js"></script><!-- Parallax -->
    <script type="text/javascript" src="js/script.js"></script><!-- Script -->   

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5b6Hi8Xf353o7wFv4bs0W81IOFszQFWU&amp;libraries=places"></script>
    <script type="text/javascript" src="js/infobox.js"></script>
    <script type="text/javascript" src="js/markerclusterer.js"></script>

    <script type="text/javascript" src="js/property_map.js"></script>

    <script type="text/javascript">
        function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#agentPic').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#fileToUpload").change(function() {
  readURL(this);
});
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            "use strict";
            $(".related-properties-items").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: true,
                dots: true,
                nav: false,
                marging: 30,
                items: 4,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false
                    }
                }
            });
        });
    </script>
</body>

<!-- Mirrored from htmldemo.kimarotec.net/Kwitara-Bootstrap-Real-Estate/html/dark/my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 08:50:02 GMT -->
</html>