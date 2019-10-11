<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Megan - Industrial & Manufacturing Businesses HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">

    <!-- Ionicons CSS -->
    <link rel="stylesheet" href="assets/css/vendor/ionicons.min.css">

    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/css/vendor/flaticon.min.css">

    <!-- Icomoon CSS -->
    <link rel="stylesheet" href="assets/css/vendor/icomoon.min.css">

    <!-- Tractor icon CSS -->
    <link rel="stylesheet" href="assets/css/vendor/tractor-icon.min.css">

    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css">


    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
    <!--
	<link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
	<link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    -->



    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">











</head>

<body>
    <!--====================  preloader ====================-->
    <div class="preloader-activate preloader-active">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <img src="assets/img/preloader.gif" alt="">
            </div>
        </div>
    </div>
    <!--====================  End of preloader  ====================-->
    <!--====================  header area ====================-->
    <?php include 'header.php'; ?>
    <!--====================  End of header area  ====================-->
    <!--====================  breadcrumb area ====================-->
    <div class="breadcrumb-area breadcrumb-area-bg section-space--inner--80 bg-img" data-bg="assets/img/backgrounds/19.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h2 class="breadcrumb-page-title">Services</h2>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb-page-list text-uppercase">
                        <li class="has-children"><a href="index.php">Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->
    <!--====================  page content wrapper ====================-->
    <div class="page-content-wrapper section-space--inner--120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- industry grid wrapper -->
                    <div class="industry-grid-wrapper">
                        <div class="row">
                          		<?php
                        
                       // $query = "select * from tbl_product";
                       		//                $page = $_GET['c_id'];

                        
			//	$result = mysqli_query($conn, "SELECT * FROM `tbl_product` where p_id='$page'");
			$result = mysqli_query($conn, "SELECT * FROM `tbl_service`");
                        while ($row = mysqli_fetch_array($result)) {

							$id=$row['id'];
							$name=$row['name'];
							//$price=$row['price'];
							$description = $row['description'];
							$image = $row['image'];
							
            ?>
                              <div class="col-lg-4 col-md-6">
                                <div class="industry-two-slider__single-item industry-two-slider__single-item--style3 section-space--bottom--60">
                                    
                          
			
		
				<!--<div class="col-md-4 agileits_services_grid">-->
                 <div class="industry-two-slider__single-item__image">
					<img src="./admin/gallery/<?php echo $image; ?>" alt=" " class="img-fluid"  height="350px" width="410px"/>
				</div>
                 <div class="industry-two-slider__single-item__content">
						<h3   class="title"><?php echo $name; ?></h3>
											<p class="subtitle"> <?php echo $description; ?> </p>
				
				<div class="w3_agile_services_grid1">
						<a href="service-details.php?id=<?php echo $id; ?>" class="see-more-link see-more-link--dark" >More detail <i class="ion-arrow-right-c"></i></a>
				</div>
				</div>
				
				
					 
					  </div>
					  </div>
					  
					   <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of page content wrapper  ====================-->
    <!--====================  footer area ====================-->
    <?php include 'footer.php'; ?>
	<!--End of footer area  ====================-->
    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__header">
            <div class="container-fluid--cp-60">
                <div class="row align-items-center">
                    <div class="col-md-4 col-sm-6 col-9">
                        <!-- logo -->
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/img/logo/logo-dark.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6 col-3">
                        <!-- mobile menu content -->
                        <div class="mobile-menu-content">
                            <a class="mobile-navigation-close-icon" id="mobile-menu-close-trigger" href="javascript:void(0)">
                                <i class="ion-ios-close-empty"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation">
                <ul>
                    <li class="has-children">
                        <a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Main Homepage</a></li>
                            <li><a href="index-2.html">Essential 1 Homepage</a></li>
                            <li><a href="index-3.html">Simple Homepage</a></li>
                            <li><a href="index-4.html">Header Left Homepage</a></li>
                            <li><a href="index-5.html">Homepage 11</a></li>
                            <li><a href="index-6.html">Classic Homepage</a></li>
                            <li><a href="index-7.html">Essential 2 Homepage</a></li>
                            <li><a href="index-8.html">Multi Card Homepage</a></li>
                            <li><a href="index-9.html">Modern Homepage</a></li>
                            <li><a href="index-10.html">Bold & Strong Homepage</a></li>
                            <li><a href="index-11.html">Box Homepage</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="has-children">
                                <a href="#">Page list 01</a>
                                <ul class="sub-menu">
                                    <li><a href="page-about.html">About 01</a></li>
                                    <li><a href="page-about-2.html">About 02</a></li>
                                    <li><a href="page-contact.html">Contact Us 01</a></li>
                                    <li><a href="page-contact-2.html">Contact Us 02</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Page list 02</a>
                                <ul class="sub-menu">
                                    <li><a href="page-history.html">History</a></li>
                                    <li><a href="page-leadership.html">Leadership</a></li>
                                    <li><a href="page-partner.html">Partners & Clients</a></li>
                                    <li><a href="page-faq.html">FAQ's</a></li>
                                    <li><a href="page-award.html">Award & Recognition</a></li>
                                    <li><a href="page-career.html">Career</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Page list 03</a>
                                <ul class="sub-menu">
                                    <li><a href="icon-flat.html">Icon Flat</a></li>
                                    <li><a href="icon-tractor.html">Icon Tractor</a></li>
                                    <li><a href="icon-icomoon.html">Icon Icomoon</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="javascript:void(0)">Industries</a>
                        <ul class="sub-menu">
                            <li class="has-children">
                                <a href="#">Grid</a>
                                <ul class="sub-menu">
                                    <li><a href="industries-grid.html">Industries Grid 1</a></li>
                                    <li><a href="industries-grid-2.html">Industries Grid 2</a></li>
                                    <li><a href="industries-grid-3.html">Industries Grid 3</a></li>
                                    <li><a href="industries-grid-4.html">Industries Grid 4</a></li>
                                    <li><a href="industries-grid-5.html">Industries Grid 5</a></li>
                                    <li><a href="industries-grid-6.html">Industries Grid 6</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Carousel</a>
                                <ul class="sub-menu">
                                    <li><a href="industries-carousel.html">Industries Carousel 1</a></li>
                                    <li><a href="industries-carousel-2.html">Industries Carousel 2</a></li>
                                    <li><a href="industries-carousel-3.html">Industries Carousel 3</a></li>
                                    <li><a href="industries-carousel-4.html">Industries Carousel 4</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="javascript:void(0)">Case Studies</a>
                        <ul class="sub-menu">
                            <li><a href="case-studies-grid-caption.html">Case Studies Grid Caption 01</a></li>
                            <li><a href="case-studies-grid-caption-2.html">Case Studies Grid Caption 02</a></li>
                            <li><a href="case-studies-grid.html">Case Studies Grid</a></li>
                            <li><a href="case-study-single-slider.html">Single Case Study Slider</a></li>
                            <li><a href="case-study-single-gallery.html">Single Case Study Gallery</a></li>
                            <li class="has-children">
                                <a href="#">Submenu Level One</a>
                                <ul class="sub-menu">
                                    <li class="has-children">
                                        <a href="#">Submenu Level Two</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Submenu Level Three</a></li>
                                            <li><a href="#">Submenu Level Three</a></li>
                                            <li><a href="#">Submenu Level Three</a></li>
                                            <li><a href="#">Submenu Level Three</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Submenu Level Two</a></li>
                                    <li><a href="#">Submenu Level Two</a></li>
                                    <li><a href="#">Submenu Level Two</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Submenu Level One</a>
                                <ul class="sub-menu">
                                    <li class="has-children">
                                        <a href="#">Submenu Level Two</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Submenu Level Three</a></li>
                                            <li><a href="#">Submenu Level Three</a></li>
                                            <li><a href="#">Submenu Level Three</a></li>
                                            <li><a href="#">Submenu Level Three</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Submenu Level Two</a></li>
                                    <li><a href="#">Submenu Level Two</a></li>
                                    <li><a href="#">Submenu Level Two</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="javascript:void(0)">Blog</a>
                        <ul class="sub-menu">
                            <li class="has-children">
                                <a href="#">Blog layouts 01</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-metro.html">Blog Metro</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Blog layouts 02</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid-classic.html">Blog Grid Classic 1</a></li>
                                    <li><a href="blog-grid-classic-2.html">Blog Grid Classic 2</a></li>
                                    <li><a href="blog-grid-classic-3.html">Blog Grid Classic 3</a></li>
                                    <li><a href="blog-grid-classic-4.html">Blog Grid Classic 4</a></li>
                                    <li><a href="blog-grid-classic-5.html">Blog Grid Classic 5</a></li>
                                    <li><a href="blog-grid-simple.html">Blog Grid Simple</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Blog layouts 03</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-carousel.html">Blog Carousel</a></li>
                                    <li><a href="blog-carousel-2.html">Blog Carousel 2</a></li>
                                    <li><a href="blog-carousel-3.html">Blog Carousel 3</a></li>
                                    <li><a href="blog-carousel-4.html">Blog Carousel 4</a></li>
                                    <li><a href="blog-carousel-5.html">Blog Carousel 5</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Single Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-post-image.html">Image format</a></li>
                                    <li><a href="blog-post-gallery.html">Gallery format</a></li>
                                    <li><a href="blog-post-video.html">Video format</a></li>
                                    <li><a href="blog-post-audio.html">Audio format</a></li>
                                    <li><a href="blog-post-link.html">Link format</a></li>
                                    <li><a href="blog-post-quote.html">Quote format</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="javascript:void(0)">Shop</a>
                        <ul class="sub-menu">
                            <li><a href="shop.html">Shop Page</a></li>
                            <li><a href="shop-product.html">Single Product</a></li>
                            <li><a href="shop-cart.html">Cart</a></li>
                            <li><a href="shop-wishlist.html">Wishlist</a></li>
                            <li><a href="shop-checkout.html">Checkout</a></li>
                            <li><a href="shop-my-account.html">My Account</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="ion-android-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->
    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <!-- Popper JS -->
    <script src="assets/js/vendor/popper.min.js"></script>

    <!-- Swiper Slider JS -->
    <script src="assets/js/plugins/swiper.min.js"></script>

    <!-- Tippy JS -->
    <script src="assets/js/plugins/tippy.min.js"></script>

    <!-- Light gallery JS -->
    <script src="assets/js/plugins/lightgallery.min.js"></script>

    <!-- Light gallery video JS -->
    <script src="assets/js/plugins/lg-video.min.js"></script>

    <!-- Waypoints JS -->
    <script src="assets/js/plugins/waypoints.min.js"></script>

    <!-- Counter up JS -->
    <script src="assets/js/plugins/counterup.min.js"></script>

    <!-- Isotope JS -->
    <script src="assets/js/plugins/isotope.min.js"></script>

    <!-- Masonry JS -->
    <script src="assets/js/plugins/masonry.min.js"></script>

    <!-- ImagesLoaded JS -->
    <script src="assets/js/plugins/images-loaded.min.js"></script>

    <!-- Appear JS -->
    <script src="assets/js/plugins/appear.min.js"></script>

    <!-- Gmap3 JS -->
    <script src="assets/js/plugins/gmap3.min.js"></script>

    <!-- Mailchimp JS -->
    <script src="assets/js/plugins/mailchimp-ajax-submit.min.js"></script>

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

    <!--
<script src="assets/js/plugins/plugins.min.js"></script>
-->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


</body>


<!-- Mirrored from demo.hasthemes.com/megan-preview/megan/industries-grid-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jul 2019 09:08:28 GMT -->
</html>