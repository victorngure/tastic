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

</head>
<body>

    <!-- /.preloader -->
    <div id="preloader"></div>
    <div class="theme-layout">

       

        
        <header class="simple-header for-sticky ">
            <div class="top-bar">
                <div class="container">
                    <ul class="contact-item">
                        <li><i class="fa fa-envelope-o"></i>tastic@gmail.com</li>
                        <li><i class="fa fa-mobile"></i>+254 01969007 / +254 123 456 789</li>
                    </ul>
                </div>
            </div><!-- Top bar -->
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
                        <span><?php if(isset( $_SESSION['username'])) { echo '<a class="link" href="logout.php">'.$_SESSION['username']. ' | Logout </a> '; } else 
                         { echo '<a class="link" href="login.php"> Sign Up | Login </a>'; }?> </span>
                    </div>
                    <span class="menu-toggle"><i class="fa fa-bars"></i></span>
                    <nav>
                        <ul>
                            <li class="menu-item-has-children">
                                <a href="#" title="">HOME</a>
                                <ul>
                                    <li><a href="index.html" title="">Home v1</a></li>
                                    <li><a href="index2.html" title="">Home v2</a></li>
                                    <li><a href="index3.html" title="">Home v3</a></li>
                                    <li><a href="index4.html" title="">Home v4</a></li>
                                    <li><a href="index5.html" title="">Home v5</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#" title="">PROPERTIES</a>
                                <ul>
                                    <li><a href="properties3.html" title="">Properties- Super </a></li>       
                                    <li><a href="properties.html" title="">Properties- List</a></li>
                                    <li><a href="properties2.html" title="">Properties- Grid</a></li>                             
                                    <li><a href="property.html" title="">Property details</a></li>              
                                </ul>
                            </li>
                            <li><a href="property.html" title="">PROPERTY</a></li>

                            <li class="menu-item-has-children mega">
                                <a href="#" title="">PAGES</a>
                                <ul>                                    
                                    <li><a href="comingsoon.html" title="">Coming Soon</a></li> 
                                    <li><a href="agents-listing.html" title="">Agent Listing </a></li> 
                                    <li><a href="terms-conditions.html" title="">Terms & conditions</a></li> 
                                    
                                    <li><a href="agent.html" title="">Agent page</a></li> 
                                    <li><a href="agent2.html" title="">Agent 2 page</a></li> 
                                    <li><a href="agent3.html" title="">Agent 3 page</a></li> 

                                    <li><a href="my-profile.html" title="">Profile page</a></li>
                                    <li><a href="submit.html" title="">Submit page</a></li>
                                    <li><a href="login.html" title="">Login page</a></li>

                                    <li><a href="contact.html" title="">Contact Us</a></li>
                                    <li><a href="404.html" title="">404 Error </a></li> 
                                    <li><a href="faq.html" title="">FAQ page</a></li>
                                    <li><a href="faq.html" title="">PROPERTY LEFT SIDE</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#" title="">BLOG PAGES</a>
                                <ul>
                                    <li><a href="blog.html" title="">Blog Page</a></li>
                                    <li><a href="blog-sidebar.html" title="">Blog left Sidebar</a></li>
                                    <li><a href="single.html" title="">Single Post</a></li>
                                    <li><a href="single-left-sidebar.html" title="">Single Left sidebar</a></li>
                                    <li><a href="single-no-sidebar.html" title="">Single No Sidebar</a></li>
                                </ul>
                            </li>

                            <li><a href="contact.html" title="">CONTACT</a></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </header>
    <!--                 <img src="img/slides/home2.jpg"  alt="2" data-lazyload="img/slides/home2.jpg">
 -->    
    <section class="horizontal-search" style="background:url('home1.jpg');"">
            <div class="container">

                <div class=""> 
                    <div class="search-form">                    
                        <form action=""  method="get" class="form-inline">   
                            <div class="search-form-content">
                                <div class="search-form-field">  
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
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
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
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
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
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
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
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
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
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
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
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
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
                                        <span class="gprice-label">Price</span>
                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                               data-slider-max="600" data-slider-step="5" 
                                               data-slider-value="[0,450]" id="price-range" >
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-3 col-md-3">
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

                </div>
            </div>
        </section>

        <section class="block remove-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading4">
                            <h2>RECENT PROPERTIES</h2>
                            <span>Lorem ipsum dolor</span>
                        </div>
                        <div class="properties-sec">
                            <div class="carousel-prop">
                                <div class="properties-box">
                                    <div class="properties-thumb">
                                        <img src="img/demo/property1.jpg" alt="" /> 
                                        <span class="spn-status"> For Rent </span>
                                        <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                        <ul class="property-info">
                                            <li> 
                                                <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>                                     
                                            </li>
                                            <li class="li-rl"></li>
                                            <li> 
                                                <i class="fa  fa-bed"></i><span>  5   </span>                                 
                                            </li> 
                                            <li class="li-rl"></li>
                                            <li> 
                                                <i class="fa  fa-building"> </i> <span>3   </span>                                
                                            </li>
                                        </ul> 
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="img/4.png" title="Camilė">
                                            </a> 
                                        </div>
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>
                                    </div>
                                    <h3><a href="property.html" title="The Helux villa">The Helux villa</a></h3>
                                    <span class="price">$340000</span>
                                </div> 
                                <div class="properties-box">
                                    <div class="properties-thumb">
                                        <img src="img/demo/property2.jpg" alt="" /> 
                                        <span class="spn-status"> For Rent </span>
                                        <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                        <ul class="property-info">
                                            <li> 
                                                <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>                                     
                                            </li>
                                            <li class="li-rl"></li>
                                            <li> 
                                                <i class="fa  fa-bed"></i><span>  5   </span>                                 
                                            </li> 
                                            <li class="li-rl"></li>
                                            <li> 
                                                <i class="fa  fa-building"> </i> <span>3   </span>                                
                                            </li>
                                        </ul>
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="img/3.png" title="Camilė">
                                            </a> 
                                        </div>     
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>
                                   
                                    </div>
                                    <h3><a href="#" title="New York Villa">New York Villa</a></h3>
                                    <span class="price">$3400000</span>
                                </div> 
                                <div class="properties-box">
                                    <div class="properties-thumb">
                                        <img src="img/demo/property3.jpg" alt="" /> 
                                        <span class="spn-status"> For Rent </span>
                                        <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                        <ul class="property-info">
                                            <li> 
                                                <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>                                     
                                            </li>
                                            <li class="li-rl"></li>
                                            <li> 
                                                <i class="fa  fa-bed"></i><span>  5   </span>                                 
                                            </li> 
                                            <li class="li-rl"></li>
                                            <li> 
                                                <i class="fa  fa-building"> </i> <span>3   </span>                                
                                            </li>
                                        </ul>
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="img/1.png" title="Camilė">
                                            </a> 
                                        </div> 
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>
                                   
                                    </div>
                                    <h3><a href="property.html" title="">The Helux villa</a></h3>
                                    <span class="price">$300000</span>
                                </div> 
                                <div class="properties-box">
                                    <div class="properties-thumb">
                                        <img src="img/demo/property4.jpg" alt="" /> 
                                        <span class="spn-status"> For Rent </span>
                                        <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                        <ul class="property-info">
                                            <li> 
                                                <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>                                     
                                            </li>
                                            <li class="li-rl"></li>
                                            <li> 
                                                <i class="fa  fa-bed"></i><span>  5   </span>                                 
                                            </li> 
                                            <li class="li-rl"></li>
                                            <li> 
                                                <i class="fa  fa-building"> </i> <span>3   </span>                                
                                            </li>
                                        </ul>
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="img/2.png" title="Camilė">
                                            </a> 
                                        </div> 
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>
                                   
                                    </div>
                                    <h3><a href="property.html" title="">The Helux villa</a></h3>
                                    <span class="price">$34.00</span>
                                </div> 
                                <div class="properties-box">
                                    <div class="properties-thumb">
                                        <img src="img/demo/property5.jpg" alt="" /> 
                                        <span class="spn-status"> For Rent </span>
                                        <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                        <ul class="property-info">
                                            <li> 
                                                <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>                                     
                                            </li>
                                            <li class="li-rl"></li>
                                            <li> 
                                                <i class="fa  fa-bed"></i><span>  5   </span>                                 
                                            </li> 
                                            <li class="li-rl"></li>
                                            <li> 
                                                <i class="fa  fa-building"> </i> <span>3   </span>                                
                                            </li>
                                        </ul>
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="img/4.png" title="Camilė">
                                            </a> 
                                        </div> 
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>
                                   
                                    </div>
                                    <h3><a href="property.html" title="">The Helux villa</a></h3>
                                    <span class="price">$9000000</span>
                                </div> 
                            </div><!-- Carousel -->
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
                            <a href="#" title="" class="flat-btn">Joing us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="block">
            <div class="container">
                <div class="heading4">
                    <h2>FEATURED PROPERTIES</h2>
                    <span>Lorem ipsum dolor consectetu</span>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="properties-sec">
                            <div class="row">                                
                                <div class="col-md-4">
                                    <div class="properties-box">
                                        <div class="properties-thumb">
                                            <img src="img/demo/property4.jpg" alt="" />
                                            <span class="spn-status"> For Rent </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                            <ul class="property-info">
                                                <li> 
                                                    <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>                                     
                                                </li>
                                                <li class="li-rl"></li>
                                                <li> 
                                                    <i class="fa  fa-bed"></i><span>  5   </span>                                 
                                                </li> 
                                                <li class="li-rl"></li>
                                                <li> 
                                                    <i class="fa  fa-building"> </i> <span>3   </span>                                
                                                </li>
                                            </ul> 
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="img/4.png" title="Camilė">
                                            </a> 
                                        </div> 
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>
                                   
                                        </div>
                                        <h3><a href="property.html" title="">The Helux villa</a></h3>
                                        <span class="price">$444000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i> 
                                        </span>
                                    </div><!-- prop Box -->
                                </div>                                
                                <div class="col-md-4">
                                    <div class="properties-box">
                                        <div class="properties-thumb">
                                            <img src="img/demo/property3.jpg" alt="" />
                                            <span class="spn-status"> For Rent </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                            <ul class="property-info">
                                                <li> 
                                                    <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>                                     
                                                </li>
                                                <li class="li-rl"></li>
                                                <li> 
                                                    <i class="fa  fa-bed"></i><span>  5   </span>                                 
                                                </li> 
                                                <li class="li-rl"></li>
                                                <li> 
                                                    <i class="fa  fa-building"> </i> <span>3   </span>                                
                                                </li>
                                            </ul> 
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="img/1.png" title="Camilė">
                                            </a> 
                                        </div> 
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>
                                   
                                        </div>
                                        <h3><a href="property.html" title="The Helux villa">The Helux villa</a></h3>
                                        <span class="price">$789000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i> 
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                                <div class="col-md-4">
                                    <div class="properties-box">
                                        <div class="properties-thumb">
                                            <img src="img/demo/property2.jpg" alt="" />
                                            <span class="spn-status"> For Rent </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                            <ul class="property-info">
                                                <li> 
                                                    <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>                                     
                                                </li>
                                                <li class="li-rl"></li>
                                                <li> 
                                                    <i class="fa  fa-bed"></i><span>  5   </span>                                 
                                                </li> 
                                                <li class="li-rl"></li>
                                                <li> 
                                                    <i class="fa  fa-building"> </i> <span>3   </span>                                
                                                </li>
                                            </ul> 
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="img/2.png" title="Camilė">
                                            </a> 
                                        </div> 
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>
                                   
                                        </div>
                                        <h3><a href="property.html" title="The Helux villa">The Helux villa</a></h3>
                                        <span class="price">$380000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i> 
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                                <div class="col-md-4">
                                    <div class="properties-box">
                                        <div class="properties-thumb">
                                            <img src="img/demo/property4.jpg" alt="" />
                                            <span class="spn-status"> For Rent </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                            <ul class="property-info">
                                                <li> 
                                                    <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>                                     
                                                </li>
                                                <li class="li-rl"></li>
                                                <li> 
                                                    <i class="fa  fa-bed"></i><span>  5   </span>                                 
                                                </li> 
                                                <li class="li-rl"></li>
                                                <li> 
                                                    <i class="fa  fa-building"> </i> <span>3   </span>                                
                                                </li>
                                            </ul> 
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="img/4.png" title="Camilė">
                                            </a> 
                                        </div> 
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>
                                   
                                        </div>
                                        <h3><a href="property.html" title="The Helux villa">The Helux villa</a></h3>
                                        <span class="price">$1000000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i> 
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                                <div class="col-md-4">
                                    <div class="properties-box">
                                        <div class="properties-thumb">
                                            <img src="img/demo/property5.jpg" alt="" />
                                            <span class="spn-status"> For Rent </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                            <ul class="property-info">
                                                <li> 
                                                    <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>                                     
                                                </li>
                                                <li class="li-rl"></li>
                                                <li> 
                                                    <i class="fa  fa-bed"></i><span>  5   </span>                                 
                                                </li> 
                                                <li class="li-rl"></li>
                                                <li> 
                                                    <i class="fa  fa-building"> </i> <span>3   </span>                                
                                                </li>
                                            </ul> 
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="img/3.png" title="Camilė">
                                            </a> 
                                        </div> 
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>
                                   
                                        </div>
                                        <h3><a href="property.html" title="The Helux villa">The Helux villa</a></h3>
                                        <span class="price">$500000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i> 
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                                <div class="col-md-4">
                                    <div class="properties-box">
                                        <div class="properties-thumb">
                                            <img src="img/demo/property3.jpg" alt="" />
                                            <span class="spn-status"> For Rent </span>
                                            <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                            <ul class="property-info">
                                                <li> 
                                                    <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>                                     
                                                </li>
                                                <li class="li-rl"></li>
                                                <li> 
                                                    <i class="fa  fa-bed"></i><span>  5   </span>                                 
                                                </li> 
                                                <li class="li-rl"></li>
                                                <li> 
                                                    <i class="fa  fa-building"> </i> <span>3   </span>                                
                                                </li>
                                            </ul> 
                                        <div class="user-preview">
                                            <a class="col" href="agent.html">
                                                <img alt="Camilė" class="avatar avatar-small" src="img/2.png" title="Camilė">
                                            </a> 
                                        </div> 
                                        <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>
                                   
                                        </div>
                                        <h3><a href="property.html" title="The Helux villa">The Helux villa</a></h3>
                                        <span class="price">$340000</span>
                                        <span class="rate-it">
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                                            <i title="nice" class="ti ti-star off star-off-png"></i> 
                                        </span>
                                    </div><!-- prop Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="block">
            <div style="background: transparent url(_img/call-to-action-big.html) repeat scroll 50% 0px; background-attachment: fixed;" class="parallax scrolly-invisible  whitish"></div>
            <div class="container">                
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading4">
                            <h2>OUR AGENTS</h2>
                            <span>Lorem ipsum dolor</span>
                        </div>
                        <div class="agents-carousal-sec">
                            <ul class="carousel">
                                <li>
                                    <div class="agent-content">
                                        <a href="agent.html"><img src="img/agents/agent1.jpg" alt="" /></a>
                                        <h3>SUPER AGENT</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur <br> sed do eiusmod tempor incidid</p>

                                        <div class="agent-social-wrap">
                                            <div class="social-list agent-social">
                                                <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="agent-content">
                                        <a href="agent.html"><img src="img/agents/agent3.jpg" alt="" /></a>
                                        <h3>SUPER AGENT</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur <br> sed do eiusmod tempor incidid</p>

                                        <div class="agent-social-wrap">
                                            <div class="social-list agent-social">
                                                <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="agent-content">
                                        <a href="agent.html"><img src="img/agents/agent5.jpg" alt="" /></a>
                                        <h3>SUPER AGENT</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur <br> sed do eiusmod tempor incidid</p>

                                        <div class="agent-social-wrap">
                                            <div class="social-list agent-social">
                                                <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="agent-content">
                                        <a href="agent.html"><img src="img/agents/agent4.jpg" alt="" /></a>
                                        <h3>SUPER AGENT</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur <br> sed do eiusmod tempor incidid</p>

                                        <div class="agent-social-wrap">
                                            <div class="social-list agent-social">
                                                <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
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
                                <h2>OUR PARTNERS </h2>
                                <span>Lorem ipsum dolor</span>
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
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> About us</a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Services</a></li> 
                                    <li><a href="#" title=""><i class="fa fa-angle-right"></i> Services</a></li> 
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