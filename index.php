<?php
session_start();
?>
<!DOCTYPE html>

<!-- Mirrored from htmldemo.kimarotec.net/Kwitara-Bootstrap-Real-Estate/html/dark/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 08:45:55 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tastic </title>

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
    <style type="text/css">
    .virtecla-form-search{
        background-image: url('nairobi4.jpg');
        background-size: cover;
    }
    .virtecal-search{
        bottom: 0;
        height: 74%;
        margin-bottom: 0; 
    }
    @media (max-width: 480px)  {        
        #map_canvas{
            display: none;
        }
    }
    @media (max-width: 767px)  {        
        #map_canvas{
            display: none;
        }
    }
    @media (max-width: 980px)  {        
        #map_canvas{
            background-image: url('nairobi4.jpg');
            background-size: cover;
            background-size: 100% 100%;
            
        }
    }
    </style>
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
                         { echo '<a class="link" href="login.php"> Sign Up | Login </a>'; }?> </span>
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
    <section class="virtecla-form-search">
            <div id="map_canvas"></div>  
            <div class="virtecal-search">
                <div class="search-form"> 
                    <h3 class="fsearch-title">
                        <i class="fa fa-search"></i><span>SEARCH FOR PROPERTY</span>
                    </h3>
                    <form action="http://htmldemo.kimarotec.net/Kwitara-Bootstrap-Real-Estate/html/dark/properties.html"  method="get" class="form-inline">   
                        <div class="search-form-content">
                            <div class="search-form-field">  
                                <div class="form-group col-md-12">
                                    <div class="label-select">  
                                        <select class="form-control" name="s_cat">
                                            <option>Property Type</option>
                                            <option>Apartment</option>
                                            <option>House</option>
                                            <option>Office Building</option>
                                            <option>House</option>
                                            <option>Villa</option>
                                            <option>Developments</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="label-select"> 
                                        <select class="form-control" name="s_statu">
                                            <option>Property Status</option>
                                            <option>For Sale</option>
                                            <option>Open House</option>
                                            <option>For Rent</option>
                                            <option>For Sale</option>  
                                        </select>
                                    </div>
                                </div> 
                                <div class="form-group col-md-12">
                                                        <div class="label-select">
                                                            <select class="form-control" name="s_location">
                                                                <option>All Locations</option>
                                                                <option>Tokyo</option>
                                                                <option>New Jersey</option>
                                                                <option>New York</option>
                                                                <option>Paris</option>
                                                                <option>Marrakech</option>
                                                                <option>lille</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">
                                                            <select class="form-control" name="s_sub_location"> 
                                                                <option>All Sub-locations</option>
                                                                <option>Central New York</option>
                                                                <option>GreenVille</option>
                                                                <option>Long Island</option>
                                                                <option>New York City</option>
                                                                <option>West Side</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                <div class="form-group col-md-12">
                                    <span class="gprice-label">Price</span>
                                    <input type="text" class="span2" value="" data-slider-min="0" 
                                           data-slider-max="600" data-slider-step="5" 
                                           data-slider-value="[270,600]" id="price-range" >
                                </div>                                        
                            </div> 
                        </div>
                        <div class="search-form-submit">
                                <button type="submit" class="btn-search">Search</button>
                        </div>
                    </form>
                </div><!-- Services Sec -->
            </div>
        </section>

         <section class="block">
            <div class="container">
                <div class="heading4">
                    <h2>FEATURED PROPERTIES</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="properties-sec">
                            <div class="row">                                

                                <?php
// connect to the database
include('DBconnect.php');

$sql = "SELECT p.propertyId, p.propertyTitle, p.propertyPrice, p.propertyStatus, p.bedrooms, p.bathrooms, i1.image, i1.propertyId
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
        LIMIT 6";


$result = $connection->query($sql);
if ($result) {
    // output data of each row                    
    while($row = $result->fetch_assoc()) {  
        $id = $row ['propertyId'];
        $price = $row['propertyPrice'];
        $name = $row ['propertyTitle'];
        $status = $row ['propertyStatus'];
        $bedrooms = $row ['bedrooms'];
        $bathrooms = $row['bathrooms'];
        $image=$row ['image'];
                                        echo '<div class="col-md-4">';
                                        echo'<div class="properties-box">';
                                        echo '<div class="properties-thumb">';
                                        echo'<a href="property.php?propertyId=' . $id . '"><img src= "uploads/'.$image.'" width="100%" height="265"></a>'; 
                                        echo '<span class="spn-status"> For ' . $status . '</span>';
                                        echo '<ul class="property-info">';                                   
                                        echo '<li class="li-rl"></li>';
                                        echo '<li><i class="fa  fa-bed"></i><span>' .$bedrooms. '</span> </li>';                             
                                        echo '<li class="li-rl"></li>';
                                        echo '<li><i class="fa  fa-building"> </i> <span>' .$bathrooms. '</span></li>';
                                        echo '</ul>'; 
                                        echo '<a class="proeprty-sh-more" href="property.php?propertyId=' . $id . '"><i class="fa fa-info-circle"> </i></a></div>';
                                        echo '<h3><a href="property.php?propertyId=' . $id . '">' .$name. '</a></h3>';
                                        echo '<span class="price"> KSh:' .$price. '</span> </div> </div>  ';
                               
                            }}
                                else
                                {
                                    echo "Couldn't execute query: ";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="block">
            <div style="background: url(img/call-to-action-bg.jpg) repeat scroll 50% 422.28px transparent; background-attachment: fixed;" class="parallax scrolly-invisible  whitish"></div><!-- PARALLAX BACKGROUND IMAGE -->	
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="properties-text-bar">
                            <h3>Sell or Rent  <span> Properties </span>Quickly ! </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare porttitor diam<br/> a accumsan justo laoreet suscipit. Maecenas at bibendum nunc</p>
                            <a href="addListing.php" title="" class="flat-btn">Add Listing</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="agents-carousal-sec">
                            <div class="heading4">
                                <h2>Agents</h2>
                            </div>
                            <div class="our-clients-sec">
                                <ul class="carousel-client">
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client1.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client2.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client3.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client4.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client5.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client1.jpg" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><img src="img/clients/our-client3.jpg" alt="" /></a>
                                    </li>
                                </ul>
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

                                <span><i class="fa fa-envelope"></i>tastic@gmail.com</span>
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
                                    <li><a href="registerStart.php" title=""><i class="fa fa-angle-right"></i>VerificationWithCSS</a></li>
                                    <li><a href="sendEmailForm/secure_email_form.php" title=""><i class="fa fa-angle-right"></i> Contact</a></li> 
                                    <li><a href="Verification/index.php" title=""><i class="fa fa-angle-right"></i> Register</a></li> 
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-3 column">
                            <div class="links_widget widget">
                                <div class="heading1">
                                    <h2><span>Useful</span> Places</h2>
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

    <script src="js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
    <script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            "use strict";
            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none",
                delay: 16000,
                startwidth: 1170,
                startheight: 700,
                hideThumbs: 200,
                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 5,
                navigationType: "bullet",
                navigationArrows: "solo",
                navigationStyle: "preview1",
                touchenabled: "on",
                onHoverStop: "on",
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                parallax: "mouse",
                parallaxBgFreeze: "on",
                parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
                keyboardNavigation: "off",
                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 20,
                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,
                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,
                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",
                spinner: "spinner4",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                forceFullWidth: "off",
                hideThumbsOnMobile: "off",
                hideNavDelayOnMobile: 1500,
                hideBulletsOnMobile: "off",
                hideArrowsOnMobile: "off",
                hideThumbsUnderResolution: 0,
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                videoJsPath: "rs-plugin/videojs/",
                fullScreenOffsetContainer: ""
            });

            $(".carousel-prop").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: true,
                dots: true,
                nav: false,
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

            $(".carousel").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: false,
                dots: false,
                nav: true,
                margin: 0,
                items: 3
            });

            $(".carousel-client").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: false,
                dots: false,
                nav: true,
                margin: 30,
                items: 5,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: true
                    },
                    1000: {
                        items: 5,
                        nav: true,
                        loop: false
                    }
                }
            });

        });
    </script>
</body>

<!-- Mirrored from htmldemo.kimarotec.net/Kwitara-Bootstrap-Real-Estate/html/dark/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 08:49:30 GMT -->
</html>
