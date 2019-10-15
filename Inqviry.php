<?php require_once('connect.php');?>

<!*DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/megan-preview/megan/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jul 2019 09:08:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Megan - Industrial & Manufacturing Businesses HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
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
	
	
                                
    <!--====================  End of header area  ====================-->
    <!--====================  breadcrumb area ====================-->
    <div class="breadcrumb-area breadcrumb-area-bg section-space--inner--80 bg-img" data-bg="assets/img/backgrounds/19.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h2 class="breadcrumb-page-title">inquiry</h2>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb-page-list text-uppercase">
                        <li class="has-children"><a href="index.html">Home</a></li>
                        <li>inquiry</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	
	
	
	

	<div >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	   <form role="form" method="post" name="" id=""> 
						
		
		
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fa fa-user prefix grey-text"></i>
		  <label data-error="wrong" data-success="right" for="form34">Your name</label>
          <input type="text" id="form34" class="form-control validate" name="u_name">
          </div>

        <div class="md-form mb-5">
          <i class="fa fa-envelope prefix grey-text"></i>
		  <label data-error="wrong" data-success="right" for="form29">Your email</label>
          <input type="email" id="form29" class="form-control validate" name="email">
          </div>

        <div class="md-form mb-5">
          <i class="fa fa-tag prefix grey-text"></i>
		  <label data-error="wrong" data-success="right" for="form32">phone</label>
          <input type="text" id="form32" class="form-control validate" name="phone">
          </div>
		
		<div class="md-form mb-5">
          <i class="fa fa-tag prefix grey-text"></i>
        <label data-error="wrong" data-success="right" for="form32">city</label>
		  <select  class="form-control validate" name="city">
                            <option  value="city">city</option>	
							<option value="india">india</option>
							<option value="japan">japan</option>
						
			</select>	
		</div>
		
		<div class="md-form">
          <i class="fa fa-pencil prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="form8">address </label>
			<textarea type="text" id="form8" class="md-textarea form-control"  name="address"rows="4"></textarea>
        </div>

      </div>

		<div class="modal-footer d-flex justify-content-center">
			<button class="btn btn-unique" name="send">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
        </div>
</form>
		
 

	  <?php
	 
	  //if (isset($_POST) && !empty($_POST)) {
if(isset($_POST['send']))
{
 
	$u_name=$_POST['u_name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$city=$_POST['city'];
	$address=$_POST['address'];

	//echo $q="insert into `tbl_inquiry`(name,email,phone,city,address)values('$name','$email','$phone','$city','$address')";
	//die;
	if(isset($_GET['id']))
	{

	
	
	
	$query=mysqli_query($conn,"insert into `tbl_inquiry`(id,u_name,email,phone,city,address)values('$id','$u_name','$email','$phone','$city','$address')");
	 
	}else
	
	{
		
		$query=mysqli_query($conn,"insert into `tbl_inquiry`(u_name,email,phone,city,address)values('$u_name','$email','$phone','$city','$address')");
	}		
						
				
		
}?>
    </div>
  </div>
</div>

	
	
    <!--====================  End of breadcrumb area  ====================-->
    <!--====================  page content wrapper ====================-->
    <!--====================  End of footer area  ====================-->
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
    <!--====================  search overlay ====================-->
    <div class="search-overlay" id="search-overlay">
        <a id="popup-search-close" href="#" class="popup-search-close"><i class="ion-ios-close-empty"></i></a>
        <div class="page-popup-search-inner">
            <form action="#">
                <input type="text" class="search-field" id="search-field">
            </form>
            <p class="form-description">Hit enter to search or ESC to close</p>
        </div>
    </div>
    <!--====================  End of search overlay  ====================-->
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


<!-- Mirrored from demo.hasthemes.com/megan-preview/megan/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jul 2019 09:08:59 GMT -->
</html>