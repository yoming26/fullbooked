<?php
require_once("connection.php");
	$logacc="Logout";
    session_start();

    if(isset($_SESSION['user'])) {
         
?>
<!doctype html>
<html class="no-js" lang="zxx">


<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Cart| Books Library</title>
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
								
								<li><a href="about.php">About Us</a>
									
								</li>
								<li><a href="contact.php">Contact Us</a></li>
							</ul>
						</nav>
					</div>
					<!---Cart Starts Here--->
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
											<span>&#8369;750.00</span>
										</div>
										<div class="mini_action checkout">
											<a class="checkout__btn" href="user-cart.php">Go to Checkout</a>
										</div>
										<div class="single__items">
											<div class="miniproduct">
												<div class="item01 d-flex">
													<div class="thumb">
														<a href="product-details.php"><img
																src="im\1.jpg"
																alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.php">The Testament</a></h6>
														<span class="prize">&#8369;250.00</span>
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
																src="im\2.jpg"
																alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.php">Smashed</a></h6>
														<span class="prize">&#8369;250.00</span>
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
																src="im\3.jpg"
																alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.php">Norse Mythology</a></h6>
														<span class="prize">&#8369;250.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 01</span>
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
		<div class="ht__bradcaump__area bg-image--4">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="bradcaump__inner text-center">
							<h2 class="bradcaump-title">Checkout</h2>
							<nav class="bradcaump-content">
								<a class="breadcrumb_item" href="index-2.php">Home</a>
								<span class="brd-separetor">/</span>
								<a class="breadcrumb_item" href="index-2.php">Cart</a>
								<span class="brd-separetor">/</span>
								<span class="breadcrumb_item active">Checkout</span>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Bradcaump area -->	
		<!-- Start Checkout Area -->
		<section class="wn__checkout__area section-padding--lg bg__white">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="wn_checkout_wrap">
							<div class="checkout_info">
								<span>Returning customer ?</span>
								<a class="showlogin" href="#">Click here to login</a>
							</div>
							<div class="checkout_login">
								<form class="wn__checkout__form" action="#">
									<p>If you have shopped with us before, please enter your details in the boxes below.
										If you are a new customer please proceed to the Billing & Shipping section.</p>

									<div class="input__box">
										<label>Username or email <span>*</span></label>
										<input type="text">
									</div>

									<div class="input__box">
										<label>password <span>*</span></label>
										<input type="password">
									</div>
									<div class="form__btn">
										<button>Login</button>
										<label class="label-for-checkbox">
											<input id="rememberme" name="rememberme" value="forever" type="checkbox">
											<span>Remember me</span>
										</label>
										<a href="#">Lost your password?</a>
									</div>
								</form>
							</div>
							<div class="checkout_info">
								<span>Have a coupon? </span>
								<a class="showcoupon" href="#">Click here to enter your code</a>
							</div>
							<div class="checkout_coupon">
								<form action="#">
									<div class="form__coupon">
										<input type="text" placeholder="Coupon code">
										<button>Apply coupon</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="customer_details">
							<h3>Billing details</h3>
							<div class="customar__field">
								<div class="margin_between">
									<div class="input_box space_between">
										<label>First name <span>*</span></label>
										<input type="text">
									</div>
									<div class="input_box space_between">
										<label>last name <span>*</span></label>
										<input type="text">
									</div>
								</div>
								<div class="input_box">
									<label>Company name <span>*</span></label>
									<input type="text">
								</div>
								<div class="input_box">
									<label>Country<span>*</span></label>
									<select class="select__option">
										<option>Philippines</option>
									</select>
								</div>
								<div class="input_box">
									<label>Address <span>*</span></label>
									<input type="text" placeholder="Street address">
								</div>
								<div class="input_box">
									<input type="text" placeholder="Apartment, suite, unit etc. (optional)">
								</div>
								<div class="input_box">
									<label>Province<span>*</span></label>
									<select class="select__option">
										<option value="A1">Select a Province…</option>
                                                                <option value="A2">Abra</option>
                                                                <option value="A3">Agusandel Norte</option>
                                                                <option value="A4">Agusandel Sur</option>
                                                                <option value="A5">Aklan</option>
                                                                <option value="A6">Albay</option>
                                                                <option value="A7">Antique</option>
                                                                <option value="A8">Apayao</option>
                                                                <option value="A9">Aurora</option>
                                                                <option value="B1">Basilan</option>
                                                                <option value="B2">Bataan</option>
                                                                <option value="B3">Batanes</option>
                                                                <option value="B4">Batangas</option>
                                                                <option value="B5">Benguet</option>
                                                                <option value="B6">Biliran</option>
                                                                <option value="B7">Bohol</option>
                                                                <option value="B8">Bukidnon</option>
                                                                <option value="B9">Bulacan</option>
                                                                <option value="C1">Cagayan</option>
                                                                <option value="C2">Camarines Norte</option>
                                                                <option value="C3">Camarines Sur</option>
                                                                <option value="C4">Camiguin</option>
                                                                <option value="C5">Capiz</option>
                                                                <option value="C6">Catanduanes</option>
                                                                <option value="C7">Cavite</option>
                                                                <option value="C8">Cebu</option>
                                                                <option value="C9">Compostela Valley</option>
                                                                <option value="C10">Cotabato</option>
                                                                <option value="D1">Davao del Norte</option>
                                                                <option value="D2">Davaodel Sur</option>
                                                                <option value="D3">Davao Occidental</option>
                                                                <option value="D4">Davao Oriental</option>
                                                                <option value="D5">Dinagat Islands</option>
                                                                <option value="E">Eastern Samar</option>
                                                                <option value="G">Guimaras	</option>
                                                                <option value="I1">Ifugao</option>
                                                                <option value="I2">IlocosNorte</option>
                                                                <option value="I3">Ilocos Sur</option>
                                                                <option value="I4">Iloilo</option>
                                                                <option value="I5">Isabela</option>
                                                                <option value="K">Kalinga</option>
                                                                <option value="L1">La Union</option>
                                                                <option value="L2">Laguna</option>
                                                                <option value="L3">Lanaodel Norte</option>
                                                                <option value="L4">Lanaodel Sur</option>
                                                                <option value="L5">Leyte</option>
                                                                <option value="M1">Maguindanao</option>
                                                                <option value="M2">Manila</option>
                                                                <option value="M3">Marinduque</option>
                                                                <option value="M4">Masbate</option>
                                                                <option value="M5">Misamis Occidental</option>
                                                                <option value="M6">Misamis Oriental</option>
                                                                <option value="M7">Mountain Province</option>
                                                                <option value="M1">Negros Occidental</option>
                                                                <option value="M2">Negros Oriental</option>
                                                                <option value="N3">Northern Samar</option>
                                                                <option value="N4">Nueva Ecija</option>
                                                                <option value="N5">Nueva Vizcaya</option>
                                                                <option value="O1">OccidentalMindoro</option>
                                                                <option value="O2">OrientalMindoro</option>
                                                                <option value="P1">Palawan</option>
                                                                <option value="P2">Pampanga</option>
                                                                <option value="P3">Pangasinan</option>
                                                                <option value="Q1">Quezon</option>
                                                                <option value="Q2">Quirino</option>
                                                                <option value="R1">Rizal</option>
                                                                <option value="R2">Romblon</option>
                                                                <option value="S1">Samar</option>
                                                                <option value="S2">Sarangani</option>
                                                                <option value="S3">Siquijor</option>
                                                                <option value="S4">Sorsogon</option>
                                                                <option value="S5">South Cotabato</option>
                                                                <option value="S6">Southern Leyte</option>
                                                                <option value="S7">Sultan Kudarat</option>
                                                                <option value="S8">Sulu</option>
                                                                <option value="S9">Surigao del Norte</option>
                                                                <option value="S10">Surigao del Sur</option>
                                                                <option value="T1">Tarlac</option>
                                                                <option value="T2">Tawi-Tawi</option>
                                                                <option value="Z1">Zambales</option>
                                                                <option value="Z2">Zamboanga del Norte</option>
                                                                <option value="Z3">Zamboangadel Sur</option>
                                                                <option value="Z4">ZamboangaSibugay</option>
                                                            </select>
								</div>

								<div class="input_box">
									<label>City/Municipality<span>*</span></label>
									<select class="select__option">
										<option value="A1">Select a City/Municipality</option>
                                                                <option value="A2" >Bangued</option>
                                                                <option value="A3">Boliney</option>
                                                                <option value="A4">Bucay</option>
                                                                <option value="A5">Bucloc</option>
                                                                <option value="A6">Daguioman</option>
                                                                <option value="A8">Danglas</option>
                                                                <option value="A9">Dolores</option>
                                                                <option value="B1">La Paz</option>
                                                                <option value="B2">Lacub</option>
                                                                <option value="B3">Lagangilang</option>
                                                                <option value="B4">Lagayan</option>
                                                                <option value="B5">Langiden</option>
                                                                <option value="B6">Licuan</option>
                                                                <option value="B7">Luba</option>
                                                                <option value="B8">Malibcong</option>
                                                                <option value="C1">Manabo</option>
                                                                <option value="C2">Peñarrubia Norte</option>
                                                                <option value="C3">Pidigan</option>
                                                                <option value="C4">Pilar</option>
                                                                <option value="C5">Sallapadan</option>
                                                                <option value="C6">San Isidro</option>
                                                                <option value="C7">San Juan</option>
                                                                <option value="C8">San Quintin</option>
                                                                <option value="C9">Tayum</option>
                                                                <option value="C10">Tineg</option>
                                                                <option value="D1">Tubo</option>
                                                                <option value="D2">Villaviciosa</option>
                                                            </select>


								</div>
								<div class="input_box">
									<label>Postcode / ZIP <span>*</span></label>
									<input type="text">
								</div>
								<div class="margin_between">
									<div class="input_box space_between">
										<label>Phone <span>*</span></label>
										<input type="text">
									</div>

									<div class="input_box space_between">
										<label>Email address <span>*</span></label>
										<input type="email">
									</div>
								</div>
							</div>
							<div class="create__account">
								<div class="wn__accountbox">
									<input class="input-checkbox" name="createaccount" value="1" type="checkbox">
									<span>Create an account ?</span>
								</div>
								<div class="account__field">
									<form action="#">
										<label>Account password <span>*</span></label>
										<input type="text" placeholder="password">
									</form>
								</div>
							</div>
						</div>
						<div class="customer_details mt--20">
							<div class="differt__address">
								<input name="ship_to_different_address" value="1" type="checkbox">
								<span>Ship to a different address ?</span>
							</div>
							<div class="customar__field differt__form mt--40">
								<div class="margin_between">
									<div class="input_box space_between">
										<label>First name <span>*</span></label>
										<input type="text">
									</div>
									<div class="input_box space_between">
										<label>last name <span>*</span></label>
										<input type="text">
									</div>
								</div>
								<div class="input_box">
									<label>Company name <span>*</span></label>
									<input type="text">
								</div>
								<div class="input_box">
									<label>Country<span>*</span></label>
									<select class="select__option">
										<option>Philippines</option>
									</select>
								</div>
								<div class="input_box">
									<label>Address <span>*</span></label>
									<input type="text" placeholder="Street address">
								</div>
								<div class="input_box">
									<input type="text" placeholder="Apartment, suite, unit etc. (optional)">
								</div>
								<div class="input_box">
									<label>Province<span>*</span></label>
									<select class="select__option">
										<option value="A1">Select a Province…</option>
                                                                <option value="A2">Abra</option>
                                                                <option value="A3">Agusandel Norte</option>
                                                                <option value="A4">Agusandel Sur</option>
                                                                <option value="A5">Aklan</option>
                                                                <option value="A6">Albay</option>
                                                                <option value="A7">Antique</option>
                                                                <option value="A8">Apayao</option>
                                                                <option value="A9">Aurora</option>
                                                                <option value="B1">Basilan</option>
                                                                <option value="B2">Bataan</option>
                                                                <option value="B3">Batanes</option>
                                                                <option value="B4">Batangas</option>
                                                                <option value="B5">Benguet</option>
                                                                <option value="B6">Biliran</option>
                                                                <option value="B7">Bohol</option>
                                                                <option value="B8">Bukidnon</option>
                                                                <option value="B9">Bulacan</option>
                                                                <option value="C1">Cagayan</option>
                                                                <option value="C2">Camarines Norte</option>
                                                                <option value="C3">Camarines Sur</option>
                                                                <option value="C4">Camiguin</option>
                                                                <option value="C5">Capiz</option>
                                                                <option value="C6">Catanduanes</option>
                                                                <option value="C7">Cavite</option>
                                                                <option value="C8">Cebu</option>
                                                                <option value="C9">Compostela Valley</option>
                                                                <option value="C10">Cotabato</option>
                                                                <option value="D1">Davao del Norte</option>
                                                                <option value="D2">Davaodel Sur</option>
                                                                <option value="D3">Davao Occidental</option>
                                                                <option value="D4">Davao Oriental</option>
                                                                <option value="D5">Dinagat Islands</option>
                                                                <option value="E">Eastern Samar</option>
                                                                <option value="G">Guimaras	</option>
                                                                <option value="I1">Ifugao</option>
                                                                <option value="I2">IlocosNorte</option>
                                                                <option value="I3">Ilocos Sur</option>
                                                                <option value="I4">Iloilo</option>
                                                                <option value="I5">Isabela</option>
                                                                <option value="K">Kalinga</option>
                                                                <option value="L1">La Union</option>
                                                                <option value="L2">Laguna</option>
                                                                <option value="L3">Lanaodel Norte</option>
                                                                <option value="L4">Lanaodel Sur</option>
                                                                <option value="L5">Leyte</option>
                                                                <option value="M1">Maguindanao</option>
                                                                <option value="M2">Manila</option>
                                                                <option value="M3">Marinduque</option>
                                                                <option value="M4">Masbate</option>
                                                                <option value="M5">Misamis Occidental</option>
                                                                <option value="M6">Misamis Oriental</option>
                                                                <option value="M7">Mountain Province</option>
                                                                <option value="M1">Negros Occidental</option>
                                                                <option value="M2">Negros Oriental</option>
                                                                <option value="N3">Northern Samar</option>
                                                                <option value="N4">Nueva Ecija</option>
                                                                <option value="N5">Nueva Vizcaya</option>
                                                                <option value="O1">OccidentalMindoro</option>
                                                                <option value="O2">OrientalMindoro</option>
                                                                <option value="P1">Palawan</option>
                                                                <option value="P2">Pampanga</option>
                                                                <option value="P3">Pangasinan</option>
                                                                <option value="Q1">Quezon</option>
                                                                <option value="Q2">Quirino</option>
                                                                <option value="R1">Rizal</option>
                                                                <option value="R2">Romblon</option>
                                                                <option value="S1">Samar</option>
                                                                <option value="S2">Sarangani</option>
                                                                <option value="S3">Siquijor</option>
                                                                <option value="S4">Sorsogon</option>
                                                                <option value="S5">South Cotabato</option>
                                                                <option value="S6">Southern Leyte</option>
                                                                <option value="S7">Sultan Kudarat</option>
                                                                <option value="S8">Sulu</option>
                                                                <option value="S9">Surigao del Norte</option>
                                                                <option value="S10">Surigao del Sur</option>
                                                                <option value="T1">Tarlac</option>
                                                                <option value="T2">Tawi-Tawi</option>
                                                                <option value="Z1">Zambales</option>
                                                                <option value="Z2">Zamboanga del Norte</option>
                                                                <option value="Z3">Zamboangadel Sur</option>
                                                                <option value="Z4">ZamboangaSibugay</option>
                                                            </select>
								</div>
								<div class="input_box">
									<label>City/Municipality<span>*</span></label>
									<select class="select__option">
										<option value="A1">Select a City/Municipality</option>
                                                                <option value="A2" >Bangued</option>
                                                                <option value="A3">Boliney</option>
                                                                <option value="A4">Bucay</option>
                                                                <option value="A5">Bucloc</option>
                                                                <option value="A6">Daguioman</option>
                                                                <option value="A8">Danglas</option>
                                                                <option value="A9">Dolores</option>
                                                                <option value="B1">La Paz</option>
                                                                <option value="B2">Lacub</option>
                                                                <option value="B3">Lagangilang</option>
                                                                <option value="B4">Lagayan</option>
                                                                <option value="B5">Langiden</option>
                                                                <option value="B6">Licuan</option>
                                                                <option value="B7">Luba</option>
                                                                <option value="B8">Malibcong</option>
                                                                <option value="C1">Manabo</option>
                                                                <option value="C2">Peñarrubia Norte</option>
                                                                <option value="C3">Pidigan</option>
                                                                <option value="C4">Pilar</option>
                                                                <option value="C5">Sallapadan</option>
                                                                <option value="C6">San Isidro</option>
                                                                <option value="C7">San Juan</option>
                                                                <option value="C8">San Quintin</option>
                                                                <option value="C9">Tayum</option>
                                                                <option value="C10">Tineg</option>
                                                                <option value="D1">Tubo</option>
                                                                <option value="D2">Villaviciosa</option>
                                                            </select>

                                                            
								</div>
								<div class="input_box">
									<label>Postcode / ZIP <span>*</span></label>
									<input type="text">
								</div>
								<div class="margin_between">
									<div class="input_box space_between">
										<label>Phone <span>*</span></label>
										<input type="text">
									</div>
									<div class="input_box space_between">
										<label>Email address <span>*</span></label>
										<input type="email">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12 md-mt-40 sm-mt-40">
						<div class="wn__order__box">
							<h3 class="onder__title">Your order</h3>
							<ul class="order__total">
								<li>Product</li>
								<li>Total</li>
							</ul>
							<ul class="order_product">
								<li>The Testament× 1<span>&#8369;250.00</span></li>
								<li>Smashed × 1<span>&#8369;250.00</span></li>
								<li>Norse Mythology × 1<span>&#8369;250.00</span></li>
								
							</ul>
							<ul class="shipping__method">
								<li>Cart Subtotal <span>&#8369;750.00</span></li>
								<li>Shipping
									<ul>
										<li>
											<input name="shipping_method[0]" data-index="0" value="legacy_flat_rate"
												checked="checked" type="radio">
											<label>Flat Rate: <span>&#8369;750.00</span></label>
										</li>
										<li>
											<input name="shipping_method[0]" data-index="0" value="legacy_flat_rate"
												checked="checked" type="radio">
											<label>Flat Rate: <span>&#8369;750.00</span></label>
											
										</li>
									</ul>
								</li>
							</ul>
							<ul class="total__amount">
								<li>Order Total <span>&#8369;750.00</span></li>
							</ul>
						</div>
						<div id="accordion" class="checkout_accordion mt--30" role="tablist">
							<div class="payment">
								<div class="che__header" role="tab" id="headingOne">
									<a class="checkout__title" data-toggle="collapse" href="#collapseOne"
										aria-expanded="true" aria-controls="collapseOne">
										<span>Direct Bank Transfer</span>
									</a>
								</div>
								<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne"
									data-parent="#accordion">
									<div class="payment-body">Make your payment directly into our bank account. Please
										use your Order ID as the payment reference. Your order won’t be shipped until
										the funds have cleared in our account.</div>
								</div>
							</div>
							<div class="payment">
								<div class="che__header" role="tab" id="headingTwo">
									<a class="collapsed checkout__title" data-toggle="collapse" href="#collapseTwo"
										aria-expanded="false" aria-controls="collapseTwo">
										<span>Cheque Payment</span>
									</a>
								</div>
								<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
									data-parent="#accordion">
									<div class="payment-body">Please send your cheque to Store Name, Store Street, Store
										Town, Store State / County, Store Postcode.</div>
								</div>
							</div>
							<div class="payment">
								<div class="che__header" role="tab" id="headingThree">
									<a class="collapsed checkout__title" data-toggle="collapse" href="#collapseThree"
										aria-expanded="false" aria-controls="collapseThree">
										<span>Cash on Delivery</span>
									</a>
								</div>
								<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree"
									data-parent="#accordion">
									<div class="payment-body">Pay with cash upon delivery.</div>
								</div>
							</div>
							<div class="payment">
								<div class="che__header" role="tab" id="headingFour">
									<a class="collapsed checkout__title" data-toggle="collapse" href="#collapseFour"
										aria-expanded="false" aria-controls="collapseFour">
										<span>PayPal <img src="images/icons/payment.png" alt="payment images"> </span>
									</a>
								</div>
								<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour"
									data-parent="#accordion">
									<div class="payment-body">Pay with cash upon delivery.</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- End Checkout Area -->
	
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
