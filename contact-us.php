<?php
	require_once("connection.php");
	$logacc="Sign In";
?>

<!doctype html>
<html class="no-js" lang="zxx">


<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Shop| Books Library</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/icon.png">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="style.css">

	<!-- Cusom css -->
	<link rel="stylesheet" href="css/custom.css">

	<!-- Modernizer js -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
	
	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">

		<!-- Header -->
		<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-7 col-lg-2">
						<div class="logo">
							<a href="index-2.php">
								<img src="logo.png" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li><a href="index-2.php">Home</a>
								</li>
								<li><a href="shop-grid.php">Shop</a>
								</li>
								<li class="drop"><a href="shop-grid.php">Books</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title">Categories</li>
											<li><a href="shop-grid.php">Biography </a></li>
											<li><a href="shop-grid.php">Business </a></li>
											<li><a href="shop-grid.php">Cookbooks </a></li>
											<li><a href="shop-grid.php">Health & Fitness </a></li>
											<li><a href="shop-grid.php">History </a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Customer Favourite</li>
											<li><a href="shop-grid.php">Mystery</a></li>
											<li><a href="shop-grid.php">Religion & Inspiration</a></li>
											<li><a href="shop-grid.php">Romance</a></li>
											<li><a href="shop-grid.php">Fiction/Fantasy</a></li>
											<li><a href="shop-grid.php">Sleeveless</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Collections</li>
											<li><a href="shop-grid.php">Science </a></li>
											<li><a href="shop-grid.php">Fiction/Fantasy</a></li>
											<li><a href="shop-grid.php">Self-Improvemen</a></li>
											<li><a href="shop-grid.php">Home & Garden</a></li>
											<li><a href="shop-grid.php">Humor Books</a></li>
										</ul>
									</div>
								</li>
								
								<li><a href="about-us.php">About Us</a>
									
								</li>
								<li><a href="contact-us.php">Contact Us</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-8 col-sm-8 col-5 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search"><a class="search__active" href="#"></a></li>
							<li class="wishlist"><a href="#"></a></li>
							<li class="shopcart"><a class="cartbox_active" onclick="addtocart()">></a></li>
					<!-- End Shopping Cart -->

							<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										
										<div class="switcher-currency">
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="#">Compare Product</a></span>
														<span><a href="#">My Wishlist</a></span>
														<span><a href="my-account.php" id="username"><?php echo $logacc; ?></a></span>
														<span><a href="register.php">Create An Account</a></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				
				<div class="mobile-menu d-block d-lg-none">
				</div>
				<!-- Mobile Menu -->
			</div>
		</header>
		<!-- //Header -->
		<!-- Start Search Popup -->
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
		<!-- Start Bradcaump area -->
		<div class="ht__bradcaump__area bg-image--4">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="bradcaump__inner text-center">
							<h2 class="bradcaump-title">Product Details</h2>
							<nav class="bradcaump-content">
								<a class="breadcrumb_item" href="index-2.php">Home</a>
								<span class="brd-separetor">/</span>
								<span class="breadcrumb_item active">Product</span>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End main Content -->
		<!-- Start Search Popup -->
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form--2" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
		
		
			<div class="container" style="padding-top: 50px">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="contact-form-wrap">
							<h2 class="contact__title">Get in touch</h2>
							<p>You can reach us at our head office</p>
							<form id="contact-form" action="#" method="post">
								<div class="single-contact-form space-between">
									<input type="text" name="firstname" placeholder="First Name*">
									<input type="text" name="lastname" placeholder="Last Name*">
								</div>
								<div class="single-contact-form space-between">
									<input type="email" name="email" placeholder="Email*">
									<input type="text" name="website" placeholder="Website*">
								</div>
								<div class="single-contact-form">
									<input type="text" name="subject" placeholder="Subject*">
								</div>
								<div class="single-contact-form message">
									<textarea name="message" placeholder="Type your message here.."></textarea>
								</div>
								<div class="contact-btn">
									<button type="submit">Send Email</button>
								</div>
							</form>
						</div>
						<div class="form-output">
							<p class="form-messege">
						</div>
					</div>
					<div class="col-lg-4 col-12 md-mt-40 sm-mt-40">
						<div class="wn__address">
							<h2 class="contact__title">Or send us an email</h2>
							<ul>
<li style="margin: 15px;">Online orders follow-up and concerns: support@fullybookedonline.com</li>

<li style="margin: 15px;">Book reservation and product inquiries: greatreads@fullybookedonline.com</li>

<li style="margin: 15px;">Bulk and corporate orders: corporateaccounts@fullybookedonline.com</li>

<li style="margin: 15px;">Events and venue rentals: events@fullybookedonline.com</li>

<li style="margin: 15px;">Careers: hrd@fullybookedonline.com</li>

<li style="margin: 15px;">Customer Feedback and Concerns: feedback@fullybookedonline.com</li>

 </ul>
							<div class="wn__addres__wreapper" style="padding-top: 40px;">

								<div class="single__address">
									<i class="icon-location-pin icons"></i>
									<div class="content">
										<span>address:</span>
										<p>6B6 Bonifacio High Street, Bonifacio Global City, Taguig</p>
									</div>
								</div>

								<div class="single__address">
									<i class="icon-phone icons"></i>
									<div class="content">
										<span>Phone Number:</span>
										<p>(02) 8-858-7000 | 8-858-7051 | 8-858-7052  </p>
									</div>
								</div>

								<div class="single__address">
									<i class="icon-envelope icons"></i>
									<div class="content">
										<span>Email address:</span>
										<p>support@fullybookedonline.com</p>
									</div>
								</div>

								<div class="single__address">
									<i class="icon-globe icons"></i>
									<div class="content">
										<span>website address:</span>
										<p>corporateaccounts@fullybookedonline.com</p>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- Footer Area -->
		<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
			<div class="footer-static-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer__widget footer__menu">
								<div class="ft__logo">
									<a href="index-2.php">
										<img src="logo.png" alt="logo">
									</a>
									<p>Fully Booked is all about finding the next great read. With over a hundred thousand titles across multiple genres—you'll never run out of stories. Visit one of our bookstores in the Philippines.</p>
								</div>
								<div class="footer__content">
									<ul class="social__net social__net--2 d-flex justify-content-center">
										<li><a href="https://www.facebook.com/sharer/sharer.php?u=http://y1kyxeaw.epizy.com/fullbooked/index-2.php"><i class="bi bi-facebook"></i></a></li>
										<li><a href=""><i class="bi bi-google"></i></a></li>
										<li><a href="https://twitter.com/home?status=http://y1kyxeaw.epizy.com/fullbooked/index-2.php "><i class="bi bi-twitter"></i></a></li>
										<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=http://y1kyxeaw.epizy.com/fullbooked/index-2.php&title=&summary=&source="><i class="bi bi-linkedin"></i></a></li>
										<li><a href="#"><i class="bi bi-youtube"></i></a></li>
									</ul>
									<ul class="mainmenu d-flex justify-content-center">
										<li><a href="index-2.php">Trending</a></li>
										<li><a href="index-2.php">Best Seller</a></li>
										<li><a href="index-2.php">All Product</a></li>
										<li><a href="index-2.php">Wishlist</a></li>
										<li><a href="index-2.php">Blog</a></li>
										<li><a href="index-2.php">Contact</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright__wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="copyright">
								<div class="copy__right__inner text-left">
									<p>Copyright <i class="fa fa-copyright"></i> <a href="#">Fully Booked</a> All Rights
										Reserved</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="payment text-right">
								<img src="images/icons/payment.png" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- //Footer Area -->
		<!-- QUICKVIEW PRODUCT -->
		<div id="quickview-wrapper">
			<!-- Modal -->
			<div class="modal fade" id="productmodal" tabindex="-1" role="dialog">
				<div class="modal-dialog modal__container" role="document">
					<div class="modal-content">
						<div class="modal-header modal__header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
									aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<div class="modal-product">
								<!-- Start product images -->
								<div class="product-images">
									<div class="main-image images">
										<img alt="big images" src="im\7.jpg">
									</div>
								</div>
								<!-- end product images -->
								<div class="product-info">
									<h1>	How To: Absurd Scientific Advice for Common Real-World Problems (Paperback)
Be the first to review this product</h1>
									<div class="rating__and__review">
										<ul class="rating">
											<li><span class="ti-star"></span></li>
											<li><span class="ti-star"></span></li>
											<li><span class="ti-star"></span></li>
											<li><span class="ti-star"></span></li>
											<li><span class="ti-star"></span></li>
										</ul>
										<div class="review">
											<a href="#">4 customer reviews</a>
										</div>
									</div>
									<div class="price-box-3">
										<div class="s-price-box">
											<span class="new-price">&#8369;110.00</span>
											<span class="old-price">&#8369;220.00</span>
										</div>
									</div>
									<div class="quick-desc">
								<div class="review">
										<div>	<a href="#" class="color--theme"><strong>QUICK OVERVIEW</strong></a></div>
										</div>	

Get How To: Absurd Scientific Advice for Common Real-World Problems (Paperback) by Randall Munroe and other science books online and at Fully Booked bookstore branches in the Philippines
									</div>
									
									<div class="social-sharing">
										<div class="widget widget_socialsharing_widget">
											<h3 class="widget-title-modal">Share this product</h3>
											<ul class="social__net social__net--2 d-flex justify-content-start">
												<li class="facebook"><a href="#" class="facebook social-icon"><i
															class="zmdi zmdi-facebook"></i></a></li>
												<li class="instagram"><a href="#" class="instagram social-icon"><i
															class="zmdi zmdi-instagram"></i></a></li>			
												<li class="linkedin"><a href="#" class="linkedin social-icon"><i
															class="zmdi zmdi-linkedin"></i></a></li>
												<li class="google"><a href="#" class="google social-icon"><i
															class="zmdi zmdi-google"></i></a></li>
												<li class="tumblr"><a href="#" class="tumblr social-icon"><i
															class="zmdi zmdi-tumblr"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="addtocart-btn">
										<a href="#">Add to cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END QUICKVIEW PRODUCT -->
	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>
	<script src="cartfunction.js"></script>


</body>


</html>
