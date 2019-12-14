<?php
require_once("connection.php");
	$logacc="Logout";
    session_start();
    require_once("connection.php");

    if(isset($_SESSION['user'])) {

    	$user = $_SESSION['user'];
    	//$ASK="SELECT * FROM `customer_info` WHERE Email='$user' ";
     	//$INFO=mysqli_query($db, $ASK);
     	//$result=mysqli_fetch_assoc($INFO);
     	//$myaccountID = $result['Email'];
         
?>
<!doctype html>
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
					<!-- cart starts here -->

					<!-- compute total price -->
					<?php
						$result = mysqli_query($db, "SELECT SUM(price) as 'total', count(quantity) as 'quantity' FROM addcart");
						$fetch = mysqli_fetch_assoc($result);
					?>
					

					<div class="col-md-8 col-sm-8 col-5 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search"><a class="search__active" href="#"></a></li>
							<li class="wishlist"><a href="#"></a></li>
							<li class="shopcart"><a class="cartbox_active" href="#" id="pquantity"><span
										class="product_qun"><?php echo $fetch['quantity']?></span></a>
								<div class="block-minicart minicart__active">
									<div class="minicart-content-wrapper">
										<div class="micart__close">
											<span>close</span>
										</div>
										<div class="items-total d-flex justify-content-between">
											<span><?php echo $fetch['quantity']?> items</span>
											<span>Cart Subtotal</span>
										</div>
										<div class="total_amount text-right">
											<span>&#8369;<?php echo $fetch['total']  ?></span>
										</div>
										<div class="mini_action checkout">
											<a class="checkout__btn" href="cart.php">Go to Checkout</a>
										</div>
										<div class="single__items">
											<?php
													$result = mysqli_query($db, "SELECT * from addcart");
									
													while($fetch = mysqli_fetch_array($result)) {
						
												?>
											<div class="miniproduct">
												<div class="item01 d-flex">
													<div class="thumb">
														<img
																src="im/<?php echo $fetch['productImage'] ?>"
																alt="product images">
													</div>
													<div class="content">
														<h6><a href="product-details.php"><?php echo $fetch['productName'] ?></a></h6>
														<span class="prize">&#8369;<?php echo $fetch['price'] ?></span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: <?php echo $fetch['quantity']  ?></span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a>
																</li>
															</ul>
														</div>
													</div>

																								
												
											</div>
										</div>
										<?php
													} 
												?>
										<div class="mini_action cart">
											<a class="cart__btn" href="cart.php">View and edit cart</a>
										</div>
									</div>
								</div>
								<!-- End Shopping Cart -->

								
						</li>
							<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										
										<div class="switcher-currency">
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="#">Compare Product</a></span>
														<span><a href="#">My Wishlist</a></span>
														<span><a href="logout.php?logout" id="username"><?php echo $logacc; ?></a></span>
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
								<a class="breadcrumb_item" href="index.php">Home</a>
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
						<!-- product list -->
						<div class="tab__container">
							<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
								<div class="row">

									<?php
										$result = mysqli_query($db, "SELECT * FROM product");
									
										while($fetch = mysqli_fetch_array($result)) {
									?>

									<!-- Start Single Product -->
									<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="single-product.php"><img
													src="im/<?php echo $fetch['Product_image'] ?>" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product.php" id="pname"><?php echo $fetch['Product_name']  ?></a></h4>
											<ul class="prize d-flex">
												<li id >&#8369;<?php echo $fetch['Product_price']?></li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" onclick="addtocart()"><i
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
									<?php
									} ?>
									<!-- End Single Product -->
								
							
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
	<script src="addcart.js"></script>


</body>


</html>

<?php

     }
    else {
        header('location: my-account.php');
    }
?>