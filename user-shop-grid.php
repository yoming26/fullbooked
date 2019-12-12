<?php
    session_start();

    if(isset($_SESSION['user'])) {
         
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
							<a href="user-index-2.php">
								<img src="logo.png" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li><a href="user-index-2.php">Home</a>
								</li>
								<li><a href="user-shop-grid.php">Shop</a>
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
														<span><a href="">Compare Product</a></span>
														<span><a href="">My Account</a></span>
														<span><a href="">My Wishlist</a></span>
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
		<div class="ht__bradcaump__area bg-image--6">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="bradcaump__inner text-center">
							<h2 class="bradcaump-title">Shop</h2>
							<nav class="bradcaump-content">
								<a class="breadcrumb_item" href="index-2.php">Home</a>
								<span class="brd-separetor">/</span>
								<span class="breadcrumb_item active">Shop</span>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Bradcaump area -->
		<!-- Start Shop Page -->
		<div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
						<div class="shop__sidebar">
							<aside class="wedget__categories poroduct--cat">
								<h3 class="wedget__title">Product Categories</h3>
								<ul>
									<li><a href="#">Biography <span>(3)</span></a></li>
									<li><a href="#">Business <span>(4)</span></a></li>
									<li><a href="#">Cookbooks <span>(6)</span></a></li>
									<li><a href="#">Health & Fitness <span>(7)</span></a></li>
									<li><a href="#">History <span>(8)</span></a></li>
									<li><a href="#">Mystery <span>(9)</span></a></li>
									<li><a href="#">Inspiration <span>(13)</span></a></li>
									<li><a href="#">Romance <span>(20)</span></a></li>
									<li><a href="#">Fiction/Fantasy <span>(22)</span></a></li>
									<li><a href="#">Self-Improvement <span>(13)</span></a></li>
									<li><a href="#">Humor Books <span>(17)</span></a></li>
									<li><a href="#">Harry Potter <span>(20)</span></a></li>
									<li><a href="#">Land of Stories <span>(34)</span></a></li>
									<li><a href="#">Kids' Music <span>(60)</span></a></li>
									<li><a href="#">Toys & Games <span>(3)</span></a></li>
									<li><a href="#">hoodies <span>(3)</span></a></li>
								</ul>
							</aside>
							
							<aside class="wedget__categories poroduct--tag">
								<h3 class="wedget__title">Product Tags</h3>
								<ul>
									<li><a href="#">Biography</a></li>
									<li><a href="#">Business</a></li>
									<li><a href="#">Cookbooks</a></li>
									<li><a href="#">Health & Fitness</a></li>
									<li><a href="#">History</a></li>
									<li><a href="#">Mystery</a></li>
									<li><a href="#">Inspiration</a></li>
									<li><a href="#">Religion</a></li>
									<li><a href="#">Fiction</a></li>
									<li><a href="#">Fantasy</a></li>
									<li><a href="#">Music</a></li>
									<li><a href="#">Toys</a></li>
									<li><a href="#">Hoodies</a></li>
								</ul>
							</aside>
							<aside class="wedget__categories sidebar--banner">
								<img src="images/others/banner_left.jpg" alt="banner images">
								<div class="text">
									<h2>new products</h2>
									<h6>save up to <br> <strong>40%</strong>off</h6>
								</div>
							</aside>
						</div>
					</div>
					<div class="col-lg-9 col-12 order-1 order-lg-2">
						<div class="row">
							<div class="col-lg-12">
								<div
									class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
									<div class="shop__list nav justify-content-center" role="tablist">
										<a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid"
											role="tab"><i class="fa fa-th"></i></a>
										<a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i
												class="fa fa-list"></i></a>
									</div>
									<p>Showing 1–12 of 40 results</p>
									<div class="orderby__wrapper">
										<span>Sort By</span>
										<select class="shot__byselect">
											<option>Default sorting</option>
											<option>Hot</option>
											<option>New</option>
											<option>Classics</option>
											<option>Bestsellers</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="tab__container">
							<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
								<div class="row">
									<!-- Start Single Product -->
									<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="single-product.php"><img
													src="im\1.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product.php"><img
													src="im\2.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product.php">The Testament</a></h4>
											<ul class="prize d-flex">
												<li>&#8369;400.00</li>
												<li class="old_prize">&#8369;700.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="cart.php"><i
																	class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="compare" href="wishlist.php"><i
																	class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View"
																class="quickview modal-view detail-link"
																href="#productmodal"><i class="bi bi-search"></i></a>
														</li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- End Single Product -->
									<!-- Start Single Product -->
									<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="user-single-product.php"><img
													src="im\3.jpg" alt="product image"></a>
											<a class="second__img animation1" href="user-single-product.php"><img
													src="im\4.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product.php">Norse Mythology</a></h4>
											<ul class="prize d-flex">
												<li>&#8369;400.00</li>
								<li class="old_prize">&#8369;700.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="cart.php"><i
																	class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="compare" href="wishlist.php"><i
																	class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View"
																class="quickview modal-view detail-link"
																href="#productmodal"><i class="bi bi-search"></i></a>
														</li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- End Single Product -->
									<!-- Start Single Product -->
									<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="single-product.php"><img
													src="im\5.jpg" alt="product image"></a>
											<a class="second__img animation1" href="user-single-product.php"><img
													src="im\6.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="user-single-product.php">Mythology</a></h4>
											<ul class="prize d-flex">
												<li>&#8369;400.00</li>
								<li class="old_prize">&#8369;700.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="cart.php"><i
																	class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="compare" href="wishlist.php"><i
																	class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View"
																class="quickview modal-view detail-link"
																href="#productmodal"><i class="bi bi-search"></i></a>
														</li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- End Single Product -->
									<!-- Start Single Product -->
									<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="single-product-2.php"><img
													src="im\7.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product-2.php"><img
													src="im\8.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product-2.php">How To</a></h4>
											<ul class="prize d-flex">
												<li>&#8369;400.00</li>
								<li class="old_prize">&#8369;700.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="cart-2.php"><i
																	class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="compare" href="wishlist-2.php"><i
																	class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View"
																class="quickview modal-view detail-link"
																href="#productmodal"><i class="bi bi-search"></i></a>
														</li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- End Single Product -->
									<!-- Start Single Product -->
									<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="single-product-2.php"><img
													src="im\9.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product-2.php"><img
													src="im\10.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="single-product-2.php">A clask of Kings</a></h4>
											<ul class="prize d-flex">
												<li>&#8369;400.00</li>
								<li class="old_prize">&#8369;700.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="cart-2.php"><i
																	class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="compare" href="wishlist-2.php"><i
																	class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View"
																class="quickview modal-view detail-link"
																href="#productmodal"><i class="bi bi-search"></i></a>
														</li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- End Single Product -->
									<!-- Start Single Product -->
									<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="single-product-2.php"><img
													src="im\11.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product-2.php"><img
													src="im\12.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="single-product-2.php">Tower of Dawn</a></h4>
											<ul class="prize d-flex">
												<li>&#8369;400.00</li>
								<li class="old_prize">&#8369;700.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="cart-2.php"><i
																	class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="compare" href="wishlist-2.php"><i
																	class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View"
																class="quickview modal-view detail-link"
																href="#productmodal"><i class="bi bi-search"></i></a>
														</li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- End Single Product -->
									<!-- Start Single Product -->
									<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="single-product-2.php"><img
													src="im\13.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product-2.php"><img
													src="im\14.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="single-product-2.php">Queen of Shadows</a></h4>
											<ul class="prize d-flex">
												<li>&#8369;400.00</li>
								<li class="old_prize">&#8369;700.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="cart-2.php"><i
																	class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="compare" href="wishlist-2.php"><i
																	class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View"
																class="quickview modal-view detail-link"
																href="#productmodal"><i class="bi bi-search"></i></a>
														</li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- End Single Product -->
									<!-- Start Single Product -->
									<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="single-product-2.php"><img
													src="im\15.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product-2.php"><img
													src="im\16.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="single-product-2.php">Starless Sea</a></h4>
											<ul class="prize d-flex">
												<li>&#8369;400.00</li>
								<li class="old_prize">&#8369;700.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="cart-2.php"><i
																	class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="compare" href="wishlist-2.php"><i
																	class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View"
																class="quickview modal-view detail-link"
																href="#productmodal"><i class="bi bi-search"></i></a>
														</li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- End Single Product -->
									<!-- Start Single Product -->
									<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="single-product-2.php"><img
													src="im\17.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product-2.php"><img
													src="im\18.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="single-product-2.php">Heir of Fire</a></h4>
											<ul class="prize d-flex">
												<li>&#8369;400.00</li>
								<li class="old_prize">&#8369;700.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="cart-2.php"><i
																	class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="compare" href="wishlist-2.php"><i
																	class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View"
																class="quickview modal-view detail-link"
																href="#productmodal"><i class="bi bi-search"></i></a>
														</li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- End Single Product -->
									<!-- Start Single Product -->
									<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="single-product-2.php"><img
													src="im\19.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product-2.php"><img
													src="im\20.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="single-product-2.php">Don't Be Evil</a></h4>
											<ul class="prize d-flex">
												<li>&#8369;400.00</li>
								<li class="old_prize">&#8369;700.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="cart-2.php"><i
																	class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="compare" href="wishlist-2.php"><i
																	class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View"
																class="quickview modal-view detail-link"
																href="#productmodal"><i class="bi bi-search"></i></a>
														</li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- End Single Product -->
									<!-- Start Single Product -->
									<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="single-product-2.php"><img
													src="im\21.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product-2.php"><img
													src="im\22.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="single-product-2.php">The Beautiful</a></h4>
											<ul class="prize d-flex">
												<li>&#8369;400.00</li>
								<li class="old_prize">&#8369;700.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="cart-2.php"><i
																	class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="compare" href="wishlist-2.php"><i
																	class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View"
																class="quickview modal-view detail-link"
																href="#productmodal"><i class="bi bi-search"></i></a>
														</li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- End Single Product -->
									<!-- Start Single Product -->
									<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="single-product-2.php"><img
													src="im\23.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product-2.php"><img
													src="im\24.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="single-product-2.php">Virginia Woolf</a></h4>
											<ul class="prize d-flex">
												<li>&#8369;400.00</li>
								<li class="old_prize">&#8369;700.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="cart-2.php"><i
																	class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="compare" href="wishlist-2.php"><i
																	class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View"
																class="quickview modal-view detail-link"
																href="#productmodal"><i class="bi bi-search"></i></a>
														</li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- End Single Product -->
								</div>
								<ul class="wn__pagination">
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
								</ul>
							</div>
							<div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
								<div class="list__view__wrapper">
									<!-- Start Single Product -->
									<div class="list__view">
										<div class="thumb">
											<a class="first__img" href="single-product-2.php"><img
													src="im\25.jpg" alt="product images"></a>
											<a class="second__img animation1" href="single-product-2.php"><img
													src="im\26.jpg" alt="product images"></a>
										</div>
										<div class="content">
											<h2><a href="single-product-2.php">Ali Smith</a></h2>
											<ul class="rating d-flex">
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li><i class="fa fa-star-o"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
											<ul class="prize__box">
												<li>&#8369;111.00</li>
												<li class="old__prize">&#8369;220.00</li>
											</ul>
											<p>Daniel Gluck, a 101-year-old former songwriter, lies asleep and dreaming in his care home. He is regularly visited by 32-year-old Elisabeth Demand, who had been his next door neighbour as a young child. Her mother had disapproved of their early friendship, based on her belief that Daniel was gay, but Elisabeth had nevertheless formed a close bond with him and been inspired by his descriptions of works of art. 
											<ul class="cart__action d-flex">
												<li class="cart"><a href="cart-2.php">Add to cart</a></li>
												<li class="wishlist"><a href="cart-2.php"></a></li>
												<li class="compare"><a href="cart-2.php"></a></li>
											</ul>
										</div>
									</div>
									<!-- End Single Product -->
									<!-- Start Single Product -->
									<div class="list__view mt--40">
										<div class="thumb">
											<a class="first__img" href="single-product-2.php"><img
													src="im\11.jpg" alt="product images"></a>
											<a class="second__img animation1" href="single-product-2.php"><img
													src="im\10.jpg" alt="product images"></a>
										</div>
										<div class="content">
											<h2><a href="single-product-2.php">Blood In Water</a></h2>
											<ul class="rating d-flex">
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li><i class="fa fa-star-o"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
											<ul class="prize__box">
												<li>&#8369;111.00</li>
												<li class="old__prize">&#8369;220.00</li>
											</ul>
											<p>Blood in the Water: The Attica Prison Uprising of 1971 and Its Legacy is the third book from University of Michigan historian Heather Ann Thompson. It provides the first complete history of the Attica Prison uprising of 1971 and details not only the events of the week-long uprising and its brutal ending, but also the protracted legal battles that persisted for decades after the event. Blood in the Water reflects the more than a decade of research, including information from interviews, government records, personal correspondence, and legal documents, much of which has never been made public before. </p>
											<ul class="cart__action d-flex">
												<li class="cart"><a href="cart-2.php">Add to cart</a></li>
												<li class="wishlist"><a href="cart-2.php"></a></li>
												<li class="compare"><a href="cart-2.php"></a></li>
											</ul>

										</div>
									</div>
									<!-- End Single Product -->
									<!-- Start Single Product -->
									<div class="list__view mt--40">
										<div class="thumb">
											<a class="first__img" href="single-product-2.php"><img
													src="im\12.jpg" alt="product images"></a>
											<a class="second__img animation1" href="single-product-2.php"><img
													src="im\13.jpg" alt="product images"></a>
										</div>
										<div class="content">
											<h2><a href="single-product-2.php">Madeness Overated</a></h2>
											<ul class="rating d-flex">
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li><i class="fa fa-star-o"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
											<ul class="prize__box">
												<li>&#8369;111.00</li>
												<li class="old__prize">&#8369;220.00</li>
											</ul>
											<p>Madness Overrated explores the mad dynamics of the consumption-based, growth-driven world and its undeniably powerful role in affecting virtually every aspect of our lives and reshaping our existence as humans. The book presents deep-reaching observations on the human mind as it undergoes various changes while adapting to everything imposed onto it by society in the name of progress, productivity, and growth. The author encourages the readers to ask themselves honest questions about.</p>
											<ul class="cart__action d-flex">
												<li class="cart"><a href="cart-2.php">Add to cart</a></li>
												<li class="wishlist"><a href="cart-2.php"></a></li>
												<li class="compare"><a href="cart-2.php"></a></li>
											</ul>

										</div>
									</div>
									<!-- End Single Product -->
									<!-- Start Single Product -->
									<div class="list__view mt--40">
										<div class="thumb">
											<a class="first__img" href="single-product-2.php"><img
													src="im\14.jpg" alt="product images"></a>
											<a class="second__img animation1" href="single-product-2.php"><img
													src="im\15.jpg" alt="product images"></a>
										</div>
										<div class="content">
											<h2><a href="single-product-2.php">Watching You</a></h2>
											<ul class="rating d-flex">
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li><i class="fa fa-star-o"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
											<ul class="prize__box">
												<li>&#8369;111.00</li>
												<li class="old__prize">&#8369;220.00</li>
											</ul>
											<p>When Ella Longfield overhears two attractive young men flirting with teenage girls on a train, she thinks nothing of it—until she realises they are fresh out of prison and her maternal instinct is put on high alert. But just as she’s decided to call for help, something stops her. The next day, she wakes up to the news that one of the girls—beautiful, green-eyed Anna Ballard—has disappeared.</p>
											<ul class="cart__action d-flex">
												<li class="cart"><a href="cart-2.php">Add to cart</a></li>
												<li class="wishlist"><a href="cart-2.php"></a></li>
												<li class="compare"><a href="cart-2.php"></a></li>
											</ul>

										</div>
									</div>
									<!-- End Single Product -->
									<!-- Start Single Product -->
									<div class="list__view mt--40">
										<div class="thumb">
											<a class="first__img" href="single-product-2.php"><img
													src="im\16.jpg" alt="product images"></a>
											<a class="second__img animation1" href="single-product-2.php"><img
													src="im\17.jpg" alt="product images"></a>
										</div>
										<div class="content">
											<h2><a href="single-product-2.php">Court Wings Run</a></h2>
											<ul class="rating d-flex">
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li class="on"><i class="fa fa-star-o"></i></li>
												<li><i class="fa fa-star-o"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
											<ul class="prize__box">
												<li>&#8369;111.00</li>
												<li class="old__prize">&#8369;220.00</li>
											</ul>
											<p>Looming war threatens all Feyre holds dear in the third volume of the #1 New York Times bestselling A Court of Thorns and Roses series.Feyre has returned to the Spring Court, determined to gather information on Tamlin's maneuverings and the invading king threatening to bring Prythian to its knees.</p>
											<ul class="cart__action d-flex">
												<li class="cart"><a href="cart-2.php">Add to cart</a></li>
												<li class="wishlist"><a href="cart-2.php"></a></li>
												<li class="compare"><a href="cart-2.php"></a></li>
											</ul>
										</div>
									</div>
									<!-- End Single Product -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Shop Page -->
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


</body>


</html>
<?php

     }
    else {
        header('location: my-account.php');
    }
?>