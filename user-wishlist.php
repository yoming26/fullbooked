﻿<?php
    session_start();

    if(isset($_SESSION['user'])) {
         
?>
<!doctype html>
<html class="no-js" lang="zxx">


<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>My Wishlist| Books Library</title>
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
								<li><a href="user-index-2.php">Home</a>
								</li>
								<li><a href="shop-grid.php">Shop</a>
								</li>
								<li class="drop"><a href="user-shop-grid.php">Books</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title">Categories</li>
											<li><a href="user-shop-grid.php">Biography </a></li>
											<li><a href="user-shop-grid.php">Business </a></li>
											<li><a href="user-shop-grid.php">Cookbooks </a></li>
											<li><a href="user-shop-grid.php">Health & Fitness </a></li>
											<li><a href="user-shop-grid.php">History </a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Customer Favourite</li>
											<li><a href="user-shop-grid.php">Mystery</a></li>
											<li><a href="user-shop-grid.php">Religion & Inspiration</a></li>
											<li><a href="user-shop-grid.php">Romance</a></li>
											<li><a href="user-shop-grid.php">Fiction/Fantasy</a></li>
											<li><a href="user-shop-grid.php">Sleeveless</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Collections</li>
											<li><a href="user-shop-grid.php">Science </a></li>
											<li><a href="user-shop-grid.php">Fiction/Fantasy</a></li>
											<li><a href="user-shop-grid.php">Self-Improvemen</a></li>
											<li><a href="user-shop-grid.php">Home & Garden</a></li>
											<li><a href="user-shop-grid.php">Humor Books</a></li>
										</ul>
									</div>
								</li>
								
								<li><a href="user-about-us.php">About Us</a>
									
								</li>
								<li><a href="user-contact.php">Contact Us</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-8 col-sm-8 col-5 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search"><a class="search__active" href="#"></a></li>
							<li class="wishlist"><a href="#"></a></li>
							<li class="shopcart"><a class="cartbox_active" href="#"><span
										class="product_qun">3</span></a>
								<div class="block-minicart minicart__active">
									<div class="minicart-content-wrapper">
										<div class="micart__close">
											<span>close</span>
										</div>
										<div class="items-total d-flex justify-content-between">
											<span>3 items</span>
											<span>Cart Subtotal</span>
										</div>
										<div class="total_amount text-right">
											<span>&#8369;900.00</span>
										</div>
										<div class="mini_action checkout">
											<a class="checkout__btn" href="user-cart.php">Go to Checkout</a>
										</div>
										<div class="single__items">
											<div class="miniproduct">
												<div class="item01 d-flex">
													<div class="thumb">
														<a href="product-details.php"><img
																src="im\22.jpg"
																alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.php">Voyage Yoga Bag</a></h6>
														<span class="prize">&#8369;300.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 01</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="item01 d-flex mt--20">
													<div class="thumb">
														<a href="product-details.php"><img
																src="im\23.jpg"
																alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.php">Impulse Duffle</a></h6>
														<span class="prize">&#8369;100.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 03</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="item01 d-flex mt--20">
													<div class="thumb">
														<a href="product-details.php"><img
																src="im\25.jpg"
																alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.php">Compete Track Tote</a></h6>
														<span class="prize">&#8369;100.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 03</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="mini_action cart">
											<a class="cart__btn" href="user-cart.php">View and edit cart</a>
										</div>
									</div>
								</div>
								<!-- End Shopping Cart -->
						</li>
							<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>My Account</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="#">Compare Product</a></span>
														<span><a href="#">My Account</a></span>
														<span><a href="#">My Wishlist</a></span>
														<span><a href="logout.php?logout">Logout</a></span>
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
		<div class="ht__bradcaump__area bg-image--5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="bradcaump__inner text-center">
							<h2 class="bradcaump-title">My Wishlist</h2>
							<nav class="bradcaump-content">
								<a class="breadcrumb_item" href="index.php">Home</a>
								<span class="brd-separetor">/</span>
								<span class="breadcrumb_item active">My Wishlist</span>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- End Bradcaump area -->
		<!-- cart-main-area start -->
		<div class="wishlist-area section-padding--lg bg__white">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="wishlist-content">
							<form action="#">
								<div class="wishlist-table wnro__table table-responsive">
									<table>
										<thead>
											<tr>
												<th class="product-remove"></th>
												<th class="product-thumbnail"></th>
												<th class="product-name"><span class="nobr">Product Name</span></th>
												<th class="product-price"><span class="nobr"> Unit Price </span></th>
												<th class="product-stock-stauts"><span class="nobr"> Stock Status
													</span></th>
												<th class="product-add-to-cart"></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="product-remove"><a href="#">×</a></td>
												<td class="product-thumbnail"><a href="#"><img
															src="im\1.jpg" alt=""></a></td>
												<td class="product-name"><a href="#">The testament</a></td>
												<td class="product-price"><span class="amount">&#8369;565.00</span></td>
												<td class="product-stock-status"><span class="wishlist-in-stock">In
														Stock</span></td>
												<td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
											</tr>
											<tr>
												<td class="product-remove"><a href="#">×</a></td>
												<td class="product-thumbnail"><a href="#"><img
															src="im\2.jpg" alt=""></a></td>
												<td class="product-name"><a href="#">Smashed</a></td>
												<td class="product-price"><span class="amount">&#8369;250.00</span></td>
												<td class="product-stock-status"><span class="wishlist-in-stock">In
														Stock</span></td>
												<td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
											</tr>
											<tr>
												<td class="product-remove"><a href="#">×</a></td>
												<td class="product-thumbnail"><a href="#"><img
															src="im\3.jpg" alt=""></a></td>
												<td class="product-name"><a href="#">Norse Mythology</a></td>
												<td class="product-price"><span class="amount">&#8369;565.00</span></td>
												<td class="product-stock-status"><span class="wishlist-in-stock">In
														Stock</span></td>
												<td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- cart-main-area end -->		<!-- Footer Area -->
		<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
			<div class="footer-static-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer__widget footer__menu">
								<div class="ft__logo">
									<a href="index.php">
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
										<li><a href="index.php">Trending</a></li>
										<li><a href="index.php">Best Seller</a></li>
										<li><a href="index.php">All Product</a></li>
										<li><a href="index.php">Wishlist</a></li>
										<li><a href="index.php">Blog</a></li>
										<li><a href="index.php">Contact</a></li>
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

	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>

</body>


</html>
<?php

     }
    else {
        header('location: my-account.php');
    }
?>