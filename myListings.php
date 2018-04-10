<?php
include('auth.php');
include('DBconnect.php');
$userId = $_SESSION["userId"];
$query = "SELECT * FROM users WHERE userID = '$userId'";
$result = mysqli_query($connection, $query);
if($result){
    while($rs = $result->fetch_assoc()) {
        $userName=$rs['userName'];
        $userEmail=$rs['userEmail'];
        $userMobile=$rs['userMobile1'];
        $facebook=$rs['facebook'];
        $twitter=$rs['twitter'];
        $youtube=$rs['youtube'];
        $userPhoto=$rs['userPhoto'];
    }
}?>
<!DOCTYPE html>

<!-- Mirrored from htmldemo.kimarotec.net/Kwitara-Bootstrap-Real-Estate/html/dark/agent.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 08:50:00 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $userName ?></title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="fonts/themify-icons/themify-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" />
    <link rel="stylesheet" href="css/price-range.css" type="text/css" />

    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" />	
    <link rel="stylesheet" href="css/colors.css" type="text/css" />

    <link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css">
    <script src="https://use.fontawesome.com/a232a238e9.js"></script>

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
                            <i class="fa fa-home"></i>
                            <span>Tastic</span>
                            <strong>REALTORS</strong>
                        </a>
                    </div><!-- LOGO -->
                    <div class="popup-client">
                        <span ><?php if(isset( $_SESSION['username'])) { echo '<a class="link" href="logout.php" style="color: white;"> Logout </a> '; } else 
                         { echo '<a class="link" href="login.php" style="color: white;"><i class="fa fa-user"></i> /  Signup</a>'; }?> </span>
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
            <div style="background: url(img/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE --> 
            <div class="container">
                <div class="inner-content">
                    <span><i class="ti ti-home"></i></span>
                    
                    <h2>AGENT : <?php echo $userName ?></h2>
                    <ul>
                        <li><a href="index.php" title="">HOME</a></li>
                        <li><a href="#" title=""><?php echo $userName; ?></a></li>
                    </ul>
                </div>
            </div>
        </div><!-- inner Head -->

        <section class="block">
            <div class="container agnet-prop">
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter-wrapper">    
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-12">	
                        <div class="row">
                            <div class="col-md-8 column">
                                <div class="single-post-sec">
                                    <div class="blog-post property-post">

                                        <div class="properties-sec">
                                            <div class="properties-list">

                                                <div class="properties-content">                                            
                                                    <div class="row">
                                                         <?php 
                                                            include('DBconnect.php');
                                                            $userId = $_SESSION["userId"];
                                                            $sql = "SELECT p.propertyId, p.propertyTitle, p.propertyDescription, p.agentId,  p.propertyPrice, p.propertyStatus, p.bedrooms, p.bathrooms, p.propertyArea, p.created, i1.image, i1.propertyId
                                                            FROM properties p
                                                            INNER JOIN images i1
                                                            ON p.propertyId = i1.propertyId
                                                            INNER JOIN
                                                            (SELECT propertyId, MIN(imageId) AS min_imageId
                                                            FROM images
                                                            GROUP BY propertyId
                                                            ) i2
                                                            ON i1.propertyId = i2.propertyId AND
                                                            i1.imageId = i2.min_imageId
                                                            WHERE p.agentId = '$userId'
                                                            LIMIT 6";

                                                            $result = mysqli_query($connection, $sql);
                                                            if($result){
                                                                while($rs = $result->fetch_assoc()) {
                                                                    $id = $rs['propertyId'];
                                                                    $name=$rs['propertyTitle'];
                                                                    $price=$rs['propertyPrice'];
                                                                    $propertyDescription=$rs['propertyDescription'];
                                                                    $propertyArea =$rs['propertyArea'];
                                                                    $bedrooms =$rs['bedrooms'];
                                                                    $bathrooms =$rs['bathrooms'];
                                                                    $image =$rs['image'];
                                                                    $status =$rs['propertyStatus'];

                                                                    echo '<div class="col-md-6 col-sm-6  col-xs-12">';
                                                                    echo '<div class="properties-box">';
                                                                    echo '<div class="properties-thumb">';
                                                                    echo '<a href="myProperty.php?propertyId=' . $id . '"><img src= "uploads/'.$image.'" width="100%" height="275"></a>';
                                                                    echo '<span class="spn-status"> For ' . $status . '</span>';
                                                                    echo '<ul class="property-info">';                                   
                                                                    echo '<li class="li-rl"></li>';
                                                                    echo '<li><div style="font-size:1em; color:white"><i class="fa  fa-retweet"> </i> <span>'.$propertyArea.' m2</span></div></li>';
                                                                    echo '<li><div style="font-size:1em; color:white"><i class="fa  fa-bed"></i><span> ' .$bedrooms. '</span> </div></li>';
                                                                    echo '<li class="li-rl"></li>';
                                                                    echo '<li><div style="font-size:1em; color:white"><i class="fa fa-shower"></i></i> <span>' .$bathrooms. '</span></div></li>';
                                                                    echo '</ul>'; 
                                                                    echo '<a class="proeprty-sh-more" href="myProperty.php?propertyId=' . $id . '"><i class="ti ti-share"> </i></a></div>';
                                                                    echo '<h3><a href="property.html" title="">'.$name.'</a></h3>';
                                                                    echo '<span class="price">KSh: '.$price.'</span></div></div>';
                                                                }
                                                            }?>
                                                    </div>
                                                    <ul class="pagination">
                                                        <li class="disabled"><a href="#" title=""><span>NEXT</span></a></li>
                                                        <li><a href="#" title="">1</a></li>
                                                        <li class="active"><a href="#" title="">2</a></li>
                                                        <li><a href="#" title="">3</a></li>
                                                        <li><a href="#" title=""><span>PREV</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <aside class="col-md-4 column">

                                <div class="agent_bg_widget widget"> 
                                    <div class="agent_widget">



                                        <div class="agent_pic">
                                            <a href="" title="">
                                               <?php 
                                               if($userPhoto == null || $userPhoto == ""){ 
                                               echo '<<img src="userPhotos/noImage.png" alt="No Image" style="max-width: 70%;"/>';
                                                }
                                               else{
                                                    echo '<img src="userPhotos/'.$userPhoto.'" alt="No Image" style="max-width: 70%;"/>';} ?>
                                                <h5><?php echo $userName ?></h5> 
                                            </a>
                                        </div>   
                                        <div class="agent_social">
                                            <?php
                                            echo'
                                            <a href="'.$facebook.'" title=""><i class="fa fa-facebook"></i></a>
                                            <a href="'.$twitter.'" title=""><i class="fa fa-twitter"></i></a>
                                            <a href="'.$youtube.'" title=""><i class="fa fa-youtube"></i></a>';
                                            ?>
                                        </div>

                                        <span>
                                            <i class="fa fa-phone"> </i> <?php echo $userMobile ?>
                                        </span>
                                        <span>
                                            <i class="fa fa-envelope"> </i> <?php echo $userEmail ?>
                                        </span>                                 
                                    </div>
                                </div>
                            </aside>
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
    <script type="text/javascript" src="js/modernizr.js"></script><!-- Modernizer -->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script><!-- Jquery -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script><!-- Owl Carousal -->
    <script type="text/javascript" src="js/html5lightbox.js"></script><!-- HTML --> 
    <script type="text/javascript" src="js/scrolly.js"></script><!-- Parallax -->
    <script type="text/javascript" src="js/price-range.js"></script><!-- Parallax -->
    <script type="text/javascript" src="js/script.js"></script><!-- Script -->
    <script src="js/lightslider.min.js"></script>

    <script>
        $(document).ready(function () {

            $('#image-gallery').lightSlider({
                gallery: true,
                item: 1,
                thumbItem: 9,
                slideMargin: 0,
                speed: 500,
                auto: true,
                loop: true,
                onSliderLoad: function () {
                    $('#image-gallery').removeClass('cS-hidden');
                }
            });
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

<!-- Mirrored from htmldemo.kimarotec.net/Kwitara-Bootstrap-Real-Estate/html/dark/agent.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 08:50:00 GMT -->
</html>