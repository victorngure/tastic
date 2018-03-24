<?php
//Start session
session_start();
?>
<?php 
include('DBconnect.php');
$propertyId="";
if (isset($_GET['propertyId']) && is_numeric($_GET['propertyId']) && $_GET['propertyId'] > 0)
 {
 // query db
 $id = $_GET ['propertyId'];
 $result = mysqli_query($connection,"SELECT * FROM properties WHERE propertyId = $id")
 or die(mysqli_error($connection)); 
    while ($rs=mysqli_fetch_assoc($result)) {
        $name=$rs['propertyTitle'];
        $price=$rs['propertyPrice'];
        $propertyDescription=$rs['propertyDescription'];
        $propertyArea =$rs['propertyArea'];
        $propertyStatus=$rs['propertyStatus'];
        $bedrooms =$rs['bedrooms'];
        $bathrooms =$rs['bathrooms'];
        $propertyLocation =$rs['propertyLocation'];
        $propertySublocation =$rs['propertySublocation'];
        $propertyArea =$rs['propertyArea'];
        $agentId = $rs['agentId'];
        $propertyVideo = $rs['propertyVideo'];
    }
}
?>
<!DOCTYPE html>

<!-- Mirrored from htmldemo.kimarotec.net/Kwitara-Bootstrap-Real-Estate/html/dark/property.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 08:49:42 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tastic</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="fonts/themify-icons/themify-icons.css" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" /><!-- Owl Carousal -->
    <link rel="stylesheet" href="css/price-range.css" type="text/css" /><!-- Owl Carousal -->
    <link rel="stylesheet" href="css/lightslider.min.css">

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
                        <span><?php if(isset( $_SESSION['username'])) { echo ' <a class="link" href="logout.php">Logout </a> '; } else 
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


        <div class="inner-head overlap">
            <div style="background: url(img/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->	
            <div class="container">
                <div class="inner-content">
                    <span><i class="ti ti-home"></i></span>
                    <h2><?php echo $name;?></h2>
                    <ul>
                        <li><a href="#" title="">HOME</a></li>
                        <li><a href="#" title=""><?php echo $name;?></a></li>
                    </ul>
                </div>
            </div>
        </div><!-- inner Head -->
        
        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">	
                        <div class="row">
                            <div class="col-md-8 column">
                                <div class="single-post-sec">
                                    <div class="blog-post property-post">
                                        <div class="property-gallery"> 
                                            <div class="light-slide-item">  
                                                <div class="favorite-and-print"> 
                                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                                    <?php
                                                    $result = mysqli_query($connection,"SELECT * FROM properties p INNER JOIN images i1 ON p.propertyId = i1.propertyId WHERE p.propertyId = $id")
                                                    or die(mysqli_error($connection)); 
                                                     while ($rs=mysqli_fetch_assoc($result)) {
                                                        $image=$rs['image'];
                                                        echo '<li data-thumb="uploads/'.$image.'">';
                                                           echo '<img src="uploads/'.$image.'" alt="kwitara" width="100%"/>';
                                                       echo '</li>'; 
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> 
                                        <?php
                                        echo '<h1>Price : KSh '.$price.'</h1>';
                                        ?>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="property-detail">
                                                   <div class="detail-field row" >
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Type</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">Apartment</span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Status</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><?php echo $propertyStatus?></span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Location</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><?php echo $propertyLocation?></span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Price</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">
                                                            <span class="amount"><?php echo 'KSh'.$price?></span>
                                                        </span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Area</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><?php echo $propertyArea?> sqft</span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Bedrooms</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><?php echo $bedrooms?></span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Bathrooms</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><?php echo $bathrooms?></span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Lot Area</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">880 ftsq</span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Year Built</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">2002</span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Flooring</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">Stone</span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Roofling</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">Tile</span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Parking</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">5 slots</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <p><?php echo $propertyDescription?></p>
                                            </div>
                                        </div>

                                        <div class="property-feature">
                                            <div class="heading3">
                                                <h3>Property Features </h3> 
                                            </div>
                                            <div class="property-feature-content clearfix">
                                            <?php
                                            $result = mysqli_query($connection,"SELECT * FROM properties p INNER JOIN property_features i1 ON p.propertyId = i1.propertyId WHERE p.propertyId = $id")
                                        or die(mysqli_error($connection)); 
                                        while ($rs=mysqli_fetch_assoc($result)) {
                                            $feature = $rs['feature'];
                                        echo '<div class="has">';
                                        echo '<i class="fa fa-check-circle"></i> '.$feature.'</div>';
                                    }
                                    ?>

                                            </div>
                                        </div>

                                        <div class="property-video">
                                            <div class="heading3">
                                                <h3>Property Video </h3> 
                                            </div>
                                             <?php 
                                             if ($propertyVideo == null && $propertyVideo ==""){
                                             	echo '<h5> This property has no video </h5>';
                                             }else
                                             echo'<iframe height="400" width="100%" src="'.$propertyVideo.'" allowfullscreen frameborder="0" encrypted-media></iframe>';?>
                                       </div>
<!-- 
                                        <div class="property-map">
                                            <div class="heading3">
                                                <h3>Find this property on the map </h3> 
                                            </div>
                                            <div id="propertyMap" ></div>
                                        </div> -->

                                    </div><!-- Blog Post -->
                                </div><!-- Blog POst Sec -->
                            </div>
                            <aside class="col-md-4 column">
                            	<?php
                            	$res = mysqli_query($connection,"SELECT * FROM users WHERE userId = $agentId")
 								or die(mysqli_error($connection)); 
 							    while ($rs=mysqli_fetch_assoc($res)) {
    								$userName=$rs['userName'];
    								$userEmail=$rs['userEmail'];
    								$userMobile=$rs['userMobile1'];
    								$facebook=$rs['facebook'];
    								$twitter=$rs['twitter'];
    								$youtube=$rs['youtube'];
    								$userImage=$rs['userImage'];
    							}
                            	?>
                                <div class="agent_bg_widget widget"> 
                                    <div class="agent_widget">
                                        <div class="agent_pic">
                                            <a href="agent.html" title="">
                                                <img src="img/demo/man1.jpg" alt="" />
                                                <h5><?php echo $userName?></h5> 
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
                                            <i class="fa fa-phone"> </i> <?php echo $userMobile?>
                                        </span>
                                        <span>
                                            <i class="fa fa-envelope"> </i> <?php echo $userEmail?>
                                        </span>


                                        <a href="agent.html"  title="" class="btn contact-agent">Find more</a>                                        
                                    </div>
                                </div><!-- Follow Widget -->       

                                 <div class="send-email-to-agent">
                                            <div class="comment-form">
                                                <div class="heading3">
                                                	<div class="search_widget widget">
                                    <div class="heading2">
                                        <h3>Contact Agent</h3>
                                    </div>
                                                     
                                                </div>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-user"></i>
                                                                <input type="text" placeholder="Name" style="color: black" required/>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-at"></i>
                                                                <input type="text" placeholder="Email" style="color: black" required/>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-phone"></i>
                                                                <input type="text" placeholder="Phone Number" style="color: black" required/>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-pencil"></i>
                                                                <textarea placeholder="Your Message" style="color: black">Hello, I found your listing on JUMIA HOUSE. Please send me more information about Tree Tops Apartments, Peponi Road, Peponi Road. Thank you.</textarea>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button type="submit" class="flat-btn">SEND MESSAGE</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>                         

                                <div class="search_widget widget">
                                    <div class="heading2">
                                        <h3>SEARCH PROPERTIES</h3>
                                    </div>
                                    <div class="search-form"> 
                                        <form action="http://htmldemo.kimarotec.net/Kwitara-Bootstrap-Real-Estate/html/dark/properties.html"  method="get" class="form-inline">   
                                            <div class="search-form-content">
                                                <div class="search-form-field">  
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
                                                        <div class="label-select">  
                                                            <select class="form-control" name="s_cat">
                                                                <option>All Categories </option>
                                                                <option>Apartment</option>
                                                                <option>Load</option>
                                                                <option>Office Building</option>
                                                                <option>House</option>
                                                                <option>Villa</option>
                                                                <option>Retail</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select"> 
                                                            <select class="form-control" name="s_statu">
                                                                <option> All Status </option>
                                                                <option>Open house</option>
                                                                <option>Rent </option>
                                                                <option>Boy</option>
                                                                <option>used</option>  
                                                            </select>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">
                                                            <select class="form-control">
                                                                <option>No. of Bedrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">
                                                            <select class="form-control">
                                                                <option>No. of Bed</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <span class="gprice-label">Price</span>
                                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                                               data-slider-max="600" data-slider-step="5" 
                                                               data-slider-value="[0,450]" id="price-range" >
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <span class="garea-label">Area</span> 
                                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                                               data-slider-max="600" data-slider-step="5" 
                                                               data-slider-value="[50,450]" id="property-geo" >
                                                    </div>                                            
                                                </div> 
                                            </div>
                                            <div class="search-form-submit">
                                <button type="submit" class="btn-search">Search</button>
                                            </div>
                                        </form>
                                    </div><!-- Services Sec -->
                                </div><!-- Category Widget -->
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
    <script type="text/javascript" src="js/lightslider.min.js"></script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5b6Hi8Xf353o7wFv4bs0W81IOFszQFWU&amp;libraries=places"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>

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

    <?php
    $id = $_GET ['propertyId'];
 $result = mysqli_query($connection,"SELECT * FROM propertyCordinates WHERE propertyId = $id")
 or die(mysqli_error($connection)); 
    while ($rs=mysqli_fetch_assoc($result)) {
    	$longitude = $rs['propertyLong'];
    	$latitude = $rs['propertyLat '];
    }
    ?>
    <!-- <script type="text/javascript">
        $(function () {
            map();
        });
        /* map */
        function map() {
            var styles = [{"featureType": "landscape", "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]}, {"featureType": "poi", "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "simplified"}]}, {"featureType": "road.highway", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "road.arterial", "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]}, {"featureType": "road.local", "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]}, {"featureType": "transit", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "administrative.province", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "labels", "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]}, {"featureType": "water", "elementType": "geometry", "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]}];
            map = new GMaps({
                el: '#propertyMap',
                lat: -12.043333,
                lng: -77.028333,
                zoomControl: true,
                zoomControlOpt: {
                    style: 'SMALL',
                    position: 'TOP_LEFT'
                },
                panControl: false,
                streetViewControl: false,
                mapTypeControl: false,
                overviewMapControl: false,
                scrollwheel: false,
                draggable: false,
                styles: styles
            });
            var image = 'img/house.png';
            map.addMarker({
                lat: -12.043333,
                lng: -77.028333,
                icon: image/* ,
                 title: '',
                 infoWindow: {
                 content: '<p>HTML Content</p>'
                 }*/
            });
        }

    </script> -->

</body>

<!-- Mirrored from htmldemo.kimarotec.net/Kwitara-Bootstrap-Real-Estate/html/dark/property.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 08:49:52 GMT -->
</html>