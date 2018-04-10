<?php
include('auth.php');
?>

<!DOCTYPE html>

<!-- Mirrored from htmldemo.kimarotec.net/Kwitara-Bootstrap-Real-Estate/html/dark/submit.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 08:50:02 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Listing</title>

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
                        <a href="index.html" title="">
                            <i class="fa fa-get-pocket"></i>
                            <span>Tastic</span>
                            <strong>REALTORS</strong>
                        </a>
                    </div><!-- LOGO -->
                    <div class="popup-client">
                        <span><?php if(isset( $_SESSION['username'])) { echo 'Logout </a> '; } else 
                         { echo '<a class="link" href="login.php"> Sign Up | Login </a>'; }?> </span>
                    </div>
                    <span class="menu-toggle"><i class="fa fa-bars"></i></span>
                    <nav>
                        <ul>
                                <li><a href="index.php" title="">HOME</a></li>
                                <li><a href="addListing.php" title="">ADD LISTING</a></li>
                                <li><a href="myListings.php" title="">MY LISTINGS</a></li>
                                <li><a href="myProfle.php" title="">PROFILE</a></li>                        </ul>
                    </nav>

                </div>
            </div>
        </header>


        <div class="inner-head overlap">
            <div style="background: url(img/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->	
            <div class="container">
                <div class="inner-content">
                    <span><i class="ti ti-home"></i></span>
                    <h2>Property Information</h2>
                    <ul>
                        <li><a href="#" title="">HOME</a></li>
                        <li><a href="#" title="">Property Information</a></li>
                    </ul>
                </div>
            </div>
        </div> 
        <div class="container">
        
        
            <div class="row bs-wizard" style="border-bottom:0;">
                
                <div class="col-xs-3 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum"><strong>Step 1</strong></div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Property Information</div>
                </div>
                
                <div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum"><strong>Step 2</strong></div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Contact Details</div>
                </div>
                
                <div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum"><strong>Step 3</strong></div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Preview</div>
                </div>
                
                <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
                  <div class="text-center bs-wizard-stepnum"><strong>Step 4</strong></div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center"> Submit Property</div>
                </div>
            </div>
        
        
        
        
        
    </div>
</div>      

        <section class="block" style="padding-top: 2px">
            <div class="container agnet-prop">
                <div class="row">                                       
                        <div class="submit-content">
                            <form id="new_post" action="newProperty.php" name="new_post" method="post" class="property-form" role="form" enctype="multipart/form-data">
                                <div class="control-group">
                                    <div class="group-title">Property Description &amp; Price</div>
                                    <div class="group-container row">
                                        <div class="col-md-12">
                                            <div class="form-group s-prop-title">
                                                <label for="title">Title&nbsp;&#42;</label>
                                                <input type="text" id="title" class="form-control" value="" name="title" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group s-prop-desc">
                                                <label for="textarea">Description&nbsp;&#42;</label>
                                                <textarea id="textarea" name="desc" rows="10" required="" style="width: 100%;"></textarea>
                                            </div>
                                        </div>
                                       
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group s-prop-status">
                                                <label>Status</label>
                                                <div class="dropdown label-select">
                                                    <select class="form-control" name="status">
                                                        <option>Sale</option>
                                                        <option>Open house</option>
                                                        <option>Rent</option>
                                                        <option>Sold</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group s-prop-type">
                                                <label>Type</label>
                                                <div class="dropdown label-select">
                                                    <select class="form-control" name="type">
                                                        <option>Apartment</option>
                                                        <option>Co-op</option>
                                                        <option>Condo</option>
                                                        <option>Single Family Home</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-md-4">
                                            <div class="form-group s-prop-area">
                                                <label for="area">Area&nbsp;(sqft)</label>
                                                <input type="text" id="area" class="form-control" value="" name="area">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group s-prop-bedrooms">
                                                <label for="bedrooms">Bed Rooms</label>
                                                <input type="text" id="bedrooms" class="form-control" value="" name="bedrooms">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group s-prop-bathrooms">
                                                <label for="bathrooms">Bath Rooms</label>
                                                <input type="text" id="bathrooms" class="form-control" value="" name="bathrooms">
                                            </div>
                                        </div>
                                                <div class="col-md-5">
                                                    <label for="price">Price&nbsp;&#42;&nbsp;(&#36;)</label>
                                                    <input type="text" id="price" class="form-control" value="" name="price" required="">
                                                    <br>
                                                        <input type="checkbox" name="priceHide" value="Attic"><label>Hide Price</label>                                                   
                                                </div>


                                </div>
                                <div class="control-group">
                                    <div class="group-title">Property Images</div>
                                    <div class="group-container row">
                                        <div class="form-container">
 
 
    <div class="add-more-cont"><a id="moreImg"><img src="img/add.png" height="25" width="25"> Click to add more than one image</a></div>
        <div class="input-files">
        <input type="file" name="image_upload-1">
        </div>    
    </div>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            var id = 1;
            $("#moreImg").click(function(){
                var showId = ++id;
                if(showId <=10)
                {
                    $(".input-files").append('<input type="file" name="image_upload-'+showId+'">');
                }
            });
        });
    </script>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="group-title">Additional Info</div>
                                    <div class="group-container row">
                                        <div class="col-md-4">
                                            <div class="form-group property_field_lot_area">
                                                <label for="property_field_lot_area">Lot Area</label>
                                                <input type="text" id="property_field_lot_area" name="property_field[lot_area]" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group s-prop-property_field_year_built">
                                                <label for="property_field_year_built">Year Built</label>
                                                <input type="text" id="property_field_year_built" name="property_field[year_built]" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group s-prop-property_field_flooring">
                                                <label for="property_field_flooring">Flooring</label>
                                                <input type="text" id="property_field_flooring" name="property_field[flooring]" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group s-prop-property_field_garage_size">
                                                <label for="property_field_garage_size">Garage Size</label>
                                                <input type="text" id="property_field_garage_size" name="property_field[garage_size]" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group s-prop-property_field_roofling">
                                                <label for="property_field_roofling">Roofling</label>
                                                <input type="text" id="property_field_roofling" name="property_field[roofling]" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group s-prop-property_field_parking">
                                                <label for="property_field_parking">Parking</label>
                                                <input type="text" id="property_field_parking" name="property_field[parking]" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group s-prop-property_field_style">
                                                <label for="property_field_style">Style</label>
                                                <input type="text" id="property_field_style" name="property_field[style]" class="form-control" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script language="javascript" type="text/javascript">
function dropdownlist(listindex)
{

document.new_post   .sublocation.options.length = 0;

switch (listindex)
{
    case "Nairobi" :
    document.new_post.sublocation.options[0]=new Option("Kasarani","Kasarani");
    document.new_post.sublocation.options[1]=new Option("Embakasi","Embakasi");
    document.new_post.sublocation.options[2]=new Option("Dagoretti","Dagoretti");

        break;

    case "Mombasa" :
document.new_post.sublocation.options[0]=new Option("Mtongwe","Mtongwe");
document.new_post.sublocation.options[1]=new Option("Likoni","Likoni");
document.new_post.sublocation.options[2]=new Option("Shanzu","Shanzu");

        break;

    case "Kisumu" :
 document.new_post.sublocation.options[0]=new Option("Nyamera","Nyamera");
 document.new_post.sublocation.options[1]=new Option("Ojolla","Ojolla");
 document.new_post.sublocation.options[2]=new Option("Korando","Korando");

        break;
}
return true;
}
</script>
                                 <div class="control-group">
                                    <div class="group-title">Listing Location</div>
                                    <div class="group-container row">
                                        <div class="col-md-12">
                                            <div class="form-group s-prop-address">
                                                <label for="address">Address&nbsp;&#42;</label>
                                                <textarea id="address" class="form-control" name="address" rows="1" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>                                          
                                                <label>Location</label>
                                                <div>
                                                    <select name="location" onchange="dropdownlist(this.options[this.selectedIndex].value);">
                                                        <option value="">Select Location</option>
                                                        <option value="Nairobi">Nairobi</option>
                                                        <option value="Mombasa">Mombasa</option>
                                                        <option value="Kisumu">Kisumu</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <div class="form-group s-prop-sub_location">
                                                <label>Sub Location</label>
                                                <div>
                                                    <script type="text/javascript" language="JavaScript">
                                                    document.write('<select name="sublocation"  id="sublocation" ><option value="">Select Sub-Location</option></select>')
                                                    </script>
                                                    <noscript><select name="sublocation" id="sublocation" >
                                                    <option value="">Select Sub-Category</option>
                                                    </select>
                                                    </noscript>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 
                                        <iframe height="400" src="//www.google.com/maps/embed/v1/place?q=Harrods,Brompton%20Rd,%20UK
                                        &zoom=17
                                        &key=AIzaSyCVq4tOtqLHly-I6oIXitHqGp-VplrK1i0 ">
                                        </iframe> -->
                                       
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                       
                                        <div class="control-group small-group">
                                            <div class="group-title">Property Video</div>
                                            <div class="group-container row">
                                                <div class="col-md-12">
                                                    <div class="form-group s-prop-video">
                                                        <label for="_video_embedded">Video Embedded</label>
                                                        <input type="text" id="propertyVideo" class="form-control" value="">
                                                        <small>Enter a Youtube, Vimeo, Soundcloud, etc... URL.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="control-group small-group">
                                            <div class="group-title">Indoor Features</div>
                                            <div class="group-container row">
                                                <div class="col-md-6">
                                                    <div class="form-group s-prop-property_feature_attic">
                                                        <input type="checkbox" name="check_list[]" value="Attic"><label>Attic</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group s-prop-property_feature_basement">
                                                       <input type="checkbox" name="check_list[]" value="Basement"><label>Basement</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group s-prop-property_feature_garden">
                                                       <input type="checkbox" name="check_list[]" value="Garden"><label>Garden</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group s-prop-property_feature_alarm">
                                                        <input type="checkbox" name="check_list[]" value="Alarm System"><label>Alarm System</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group s-prop-property_feature_solar">
                                                       <input type="checkbox" name="check_list[]" value="Solar Panels"><label>Solar Panel</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group s-prop-property_feature_cctv">
                                                        <input type="checkbox" name="check_list[]" value="CCTV"><label>CCTV</label>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit row" style="clear: both; margin-top: 25px;">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-lg flat-btn" id="property_submit" value="Next">
                                        <label style="margin-top: 15px; margin-left: 10px;">  Your submission will be reviewed by Administrator before it can be published</label>
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

<!-- Mirrored from htmldemo.kimarotec.net/Kwitara-Bootstrap-Real-Estate/html/dark/submit.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 08:50:02 GMT -->
</html>