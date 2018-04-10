<?php
session_start();
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
                    <h2>PROPERTIES LIST </h2>
                    <ul>
                        <li><a href="index.html" title="">HOME</a></li>
                        <li><a href="propertiees.html" title="">PROPERTIES LIST</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- inner Head -->

        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">	
                        <div class="row">
                            <div class="col-md-9 column">                               
                                <div class="properties-sec">
                                    <div class="properties-list">
                                        <div class="properties-content">                                            
                                            <div class="row">      
                                            <?php
                                            if(($_POST['status']) && ($_POST['value'])){
                                                $propertyType = trim(strip_tags($_POST['value']));
                                                $propertyStatus = trim(strip_tags($_POST['status']));
                                                include('DBconnect.php');
                                                $sql = "SELECT p.propertyId, p.propertyTitle, p.propertyPrice, p.propertyStatus, p.propertyType, p.bedrooms, p.bathrooms, i1.image, i1.propertyId
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
                                                    WHERE p.propertyStatus = '$propertyStatus' AND p.propertyType = '$propertyType'
                                                    LIMIT 6";
                                                $result = $connection->query($sql);
                                                if ($result) {
                                                    while($row = $result->fetch_assoc()) {  
                                                        $id = $row ['propertyId'];
                                                        $price = $row['propertyPrice'];
                                                        $name = $row ['propertyTitle'];
                                                        $status = $row ['propertyStatus'];
                                                        $bedrooms = $row ['bedrooms'];
                                                        $bathrooms = $row['bathrooms'];
                                                        $image=$row ['image']; 
                                                        echo '<div class="col-md-4 col-sm-6  col-xs-12">';
                                                        echo '<div class="properties-box">';
                                                        echo '<div class="properties-thumb">';
                                                        echo '<a href="property.php?propertyId=' . $id . '"><img src= "uploads/'.$image.'" width="100%" height = "220"></a>'; 
                                                        echo '<span class="spn-status"> For ' . $status . '</span>';
                                                        echo '<ul class="property-info">';
                                                        echo '<li><i class="fa  fa-bed"></i><span>' .$bedrooms. '</span> </li>';                             
                                                        echo '<li class="li-rl"></li>';
                                                        echo '<li><i class="fa  fa-building"> </i> <span>' .$bathrooms. '</span></li>';
                                                        echo '</ul>'; 
                                                        echo '<a class="proeprty-sh-more" href="property.php?propertyId=' . $id . '"><i class="fa fa-info-circle"> </i></a></div>';
                                                        echo '<h3><a href="property.php?propertyId=' . $id . '">' .$name. '</a></h3>';
                                                        echo '<span class="price"> KSh:' .$price. '</span> </div> </div>  '; 
                                                    }
                                                }
                                            }
                                           else if(($_POST['status']) && (!$_POST['value'])){
                                                $propertyType = trim(strip_tags($_POST['value']));
                                                $propertyStatus = trim(strip_tags($_POST['status']));
                                                include('DBconnect.php');
                                                $sql = "SELECT p.propertyId, p.propertyTitle, p.propertyPrice, p.propertyStatus, p.propertyType, p.bedrooms, p.bathrooms, i1.image, i1.propertyId
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
                                                    WHERE p.propertyStatus = '$propertyStatus'
                                                    LIMIT 6";
                                                $result = $connection->query($sql);
                                                if ($result) {
                                                    while($row = $result->fetch_assoc()) {  
                                                        $id = $row ['propertyId'];
                                                        $price = $row['propertyPrice'];
                                                        $name = $row ['propertyTitle'];
                                                        $status = $row ['propertyStatus'];
                                                        $bedrooms = $row ['bedrooms'];
                                                        $bathrooms = $row['bathrooms'];
                                                        $image=$row ['image']; 
                                                        echo '<div class="col-md-4 col-sm-6  col-xs-12">';
                                                        echo '<div class="properties-box">';
                                                        echo '<div class="properties-thumb">';
                                                        echo '<a href="property.php?propertyId=' . $id . '"><img src= "uploads/'.$image.'" width="100%" height = "220"></a>'; 
                                                        echo '<span class="spn-status"> For ' . $status . '</span>';
                                                        echo '<ul class="property-info">';
                                                        echo '<li><i class="fa  fa-bed"></i><span>' .$bedrooms. '</span> </li>';                             
                                                        echo '<li class="li-rl"></li>';
                                                        echo '<li><i class="fa  fa-building"> </i> <span>' .$bathrooms. '</span></li>';
                                                        echo '</ul>'; 
                                                        echo '<a class="proeprty-sh-more" href="property.php?propertyId=' . $id . '"><i class="fa fa-info-circle"> </i></a></div>';
                                                        echo '<h3><a href="property.php?propertyId=' . $id . '">' .$name. '</a></h3>';
                                                        echo '<span class="price"> KSh:' .$price. '</span> </div> </div>  '; 
                                                    }
                                                }
                                            }
                                            else if((!$_POST['status']) && ($_POST['value'])){
                                                $propertyType = trim(strip_tags($_POST['value']));
                                                $propertyStatus = trim(strip_tags($_POST['status']));
                                                include('DBconnect.php');
                                                $sql = "SELECT p.propertyId, p.propertyTitle, p.propertyPrice, p.propertyStatus, p.propertyType, p.bedrooms, p.bathrooms, i1.image, i1.propertyId
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
                                                    WHERE p.propertyType = '$propertyType'
                                                    LIMIT 6";
                                                $result = $connection->query($sql);
                                                if ($result) {
                                                    while($row = $result->fetch_assoc()) {  
                                                        $id = $row ['propertyId'];
                                                        $price = $row['propertyPrice'];
                                                        $name = $row ['propertyTitle'];
                                                        $status = $row ['propertyStatus'];
                                                        $bedrooms = $row ['bedrooms'];
                                                        $bathrooms = $row['bathrooms'];
                                                        $image=$row ['image']; 
                                                        echo '<div class="col-md-4 col-sm-6  col-xs-12">';
                                                        echo '<div class="properties-box">';
                                                        echo '<div class="properties-thumb">';
                                                        echo '<a href="property.php?propertyId=' . $id . '"><img src= "uploads/'.$image.'" width="100%" height = "220"></a>'; 
                                                        echo '<span class="spn-status"> For ' . $status . '</span>';
                                                        echo '<ul class="property-info">';
                                                        echo '<li><i class="fa  fa-bed"></i><span>' .$bedrooms. '</span> </li>';                             
                                                        echo '<li class="li-rl"></li>';
                                                        echo '<li><i class="fa  fa-building"> </i> <span>' .$bathrooms. '</span></li>';
                                                        echo '</ul>'; 
                                                        echo '<a class="proeprty-sh-more" href="property.php?propertyId=' . $id . '"><i class="fa fa-info-circle"> </i></a></div>';
                                                        echo '<h3><a href="property.php?propertyId=' . $id . '">' .$name. '</a></h3>';
                                                        echo '<span class="price"> KSh:' .$price. '</span> </div> </div>  '; 
                                                    }
                                                }
                                            }
                                            if(($_POST['status']) && ($_POST['value'])){
                                                $propertyType = trim(strip_tags($_POST['value']));
                                                $propertyStatus = trim(strip_tags($_POST['status']));
                                                include('DBconnect.php');
                                                $sql = "SELECT p.propertyId, p.propertyTitle, p.propertyPrice, p.propertyStatus, p.propertyType, p.bedrooms, p.bathrooms, i1.image, i1.propertyId
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
                                                    WHERE p.propertyStatus = '$propertyStatus' AND p.propertyType = '$propertyType'
                                                    LIMIT 6";
                                                $result = $connection->query($sql);
                                                if ($result) {
                                                    while($row = $result->fetch_assoc()) {  
                                                        $id = $row ['propertyId'];
                                                        $price = $row['propertyPrice'];
                                                        $name = $row ['propertyTitle'];
                                                        $status = $row ['propertyStatus'];
                                                        $bedrooms = $row ['bedrooms'];
                                                        $bathrooms = $row['bathrooms'];
                                                        $image=$row ['image']; 
                                                        echo '<div class="col-md-4 col-sm-6  col-xs-12">';
                                                        echo '<div class="properties-box">';
                                                        echo '<div class="properties-thumb">';
                                                        echo '<a href="property.php?propertyId=' . $id . '"><img src= "uploads/'.$image.'" width="100%" height = "220"></a>'; 
                                                        echo '<span class="spn-status"> For ' . $status . '</span>';
                                                        echo '<ul class="property-info">';
                                                        echo '<li><i class="fa  fa-bed"></i><span>' .$bedrooms. '</span> </li>';                             
                                                        echo '<li class="li-rl"></li>';
                                                        echo '<li><i class="fa  fa-building"> </i> <span>' .$bathrooms. '</span></li>';
                                                        echo '</ul>'; 
                                                        echo '<a class="proeprty-sh-more" href="property.php?propertyId=' . $id . '"><i class="fa fa-info-circle"> </i></a></div>';
                                                        echo '<h3><a href="property.php?propertyId=' . $id . '">' .$name. '</a></h3>';
                                                        echo '<span class="price"> KSh:' .$price. '</span> </div> </div>  '; 
                                                    }
                                                }
                                            }
                                            else{
                                                echo 'No property to display';
                                            }
                                        ?>
                                            </div>
                                            <ul class="pagination">
                                                <li class="disabled"><a href="#" title=""><span>NEXT</span></a></li>
                                                <li><a href="#" title="">1</a></li>
                                                <li class="active"><a href="#" title="">2</a></li>
                                                <li><a href="#" title="">3</a></li>
                                                <li><a href="#" title=""><span>PREV</span></a></li>
                                            </ul>
                                        </div>
                                    </div><!-- Blog Post -->
                                </div><!-- Blog POst Sec -->
                            </div>
                            <aside class="col-md-3 column">
                                <div class="search_widget widget">
                                    <div class="heading2">
                                        <h3>Search properties</h3>
                                    </div>
                                    <div class="search-form"> 
                                        <form action=""  method="post">   
                                            <div class="search-form-content">
                                                <div class="search-form-field">  
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">
                                                            <select class="form-control" name="value">
                                            <option value="">Property Type</option>
                                            <?php
                                            include("DBconnect.php");
                                            $query  = "SELECT DISTINCT propertyType FROM properties";
                                            $result = mysqli_query($connection, $query);
                                            if ($result) {
                                                while($row = $result->fetch_assoc()) {  
                                                    $propertyType = $row ['propertyType'];
                                                    echo '<option value="'.$propertyType.'">'.$propertyType.'</option>';
                                                }
                                            }
                                           ?> 
                                        </select> 
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">
                                                            <select class="form-control" name="status">
                                            <option value="">Property Status</option>
                                            <?php
                                            include("DBconnect.php");
                                            $query  = "SELECT DISTINCT propertyStatus FROM properties";
                                            $result = mysqli_query($connection, $query);
                                            if ($result) {
                                                while($row = $result->fetch_assoc()) {  
                                                    $propertyStatus = $row ['propertyStatus'];
                                                    echo '<option status="'.$propertyStatus.'">'.$propertyStatus.'</option>';
                                                }
                                            }
                                            ?> 
                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">  
                                                            <select class="form-control" name="location">
                                                                <option value="">All Locations</option>
                                                                <?php
                                                                include("DBconnect.php");
                                                                $query  = "SELECT DISTINCT propertyLocation FROM properties";
                                                                $result = mysqli_query($connection, $query);
                                                                if ($result) {
                                                                                        while($row = $result->fetch_assoc()) {  
                                                                        $propertyLocation = $row ['propertyLocation'];
                                                                        echo '<option status="'.$propertyLocation.'">'.$propertyLocation.'</option>';
                                                                    }
                                                                }
                                                                ?> 
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select"> 
                                                            <select class="form-control" name="sub_location"> 
                                                                <option value="">All Sub-locations</option>
                                                                <?php
                                                                include("DBconnect.php");
                                                                $query  = "SELECT DISTINCT propertySublocation FROM properties";
                                                                $result = mysqli_query($connection, $query);
                                                                if ($result) {
                                                                                        while($row = $result->fetch_assoc()) {  
                                                                        $propertySublocation = $row ['propertySublocation'];
                                                                        echo '<option status="'.$propertySublocation.'">'.$propertySublocation.'</option>';
                                                                    }
                                                                }
                                                                ?> 
                                                            </select>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group col-md-12">
                                                        <span class="gprice-label">Price</span>
                                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                                               data-slider-max="600" data-slider-step="5" 
                                                               data-slider-value="[0,270]" id="price-range" >
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <span class="garea-label">Area</span> 
                                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                                               data-slider-max="600" data-slider-step="5" 
                                                               data-slider-value="[170,600]" id="property-geo" >
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


    <script type="text/javascript">
        $(document).ready(function () {
            "use strict";

        });
    </script>

</body>

<!-- Mirrored from htmldemo.kimarotec.net/Kwitara-Bootstrap-Real-Estate/html/dark/properties.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 08:49:42 GMT -->
</html>