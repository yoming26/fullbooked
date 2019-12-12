<?php
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

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    User Dashboard tab
****************************/
.user-dashboard-tab__head {
  border: 1px solid #e5e5e5;
  background-color: #fff;
  padding: 2rem 3rem; }
  .user-dashboard-tab__head .nav-link {
    padding: 1.5rem 0;
    font-size: 1.5rem;
    color: #333333;
    position: relative; }
    .user-dashboard-tab__head .nav-link:not(:last-child) {
      border-bottom: 1px solid #e5e5e5; }

.user-dashboard-tab__content p {
  line-height: 1.6;
  font-size: 1.5rem; }
  .user-dashboard-tab__content p a {
    color: #a43d21; }

.user-dashboard-tab__content h3 {
  border-bottom: 1px solid #ededed;
  font-size: 2.4rem;
  margin-bottom: 2rem;
  padding-bottom: 1.5rem;
  text-transform: capitalize; }

.user-dashboard-tab__content table {
  width: 100%; }
  .user-dashboard-tab__content table th {
    font-weight: 700;
    font-size: 1.4rem;
    border-bottom: 1px solid #ededed;
    padding: 1rem; }
  .user-dashboard-tab__content table td {
    padding: 1rem;
    vertical-align: middle; }

.user-dashboard-tab__content h4 {
  font-size: 1.8rem;
  margin: 2rem 0; }

/*****************************
    </style>
</head>
<body>
   \
	
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
								
								<li><a href="user-about.php">About Us</a>
									
								</li>
								<li><a href="user-contact.php">Contact Us</a></li>
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
														<a href="user-product-details.php"><img
																src="im\1.jpg"
																alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="user-product-details.php">The Testament</a></h6>
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
														<a href="user-product-details.php"><img
																src="im\2.jpg"
																alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="user-product-details.php">Smashed</a></h6>
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
														<a href="user-product-details.php"><img
																src="im\3.jpg"
																alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="user-product-details.php">Norse Mythology</a></h6>
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
							<h2 class="bradcaump-title">My Account</h2>
							<nav class="bradcaump-content">
								<a class="breadcrumb_item" href="index.php">Home</a>
								<span class="brd-separetor">/</span>
								<span class="breadcrumb_item active">My Account</span>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Bradcaump area -->	
		<!-- Start My Account Area -->

        <section class="main-content-wrapper">
            <div class="account-wrapper pt--40 pb--80 pt-sm--30 pb-sm--60">
                <div class="container">
                    <div class="user-dashboard-tab">
                        <div class="row">
                            <div class="col-lg-4 mb-md--40">
                                <div class="user-dashboard-tab__head nav flex-column" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" data-toggle="pill" role="tab" href="#dashboard" aria-controls="dashboard" aria-selected="true">Dashboard</a>
                                    <a class="nav-link" data-toggle="pill" role="tab" href="#orders" aria-controls="orders" aria-selected="true">Orders</a>

                                    <a class="nav-link" data-toggle="pill" role="tab" href="#addresses" aria-controls="addresses" aria-selected="true">Addresses</a>
                                    <a class="nav-link" data-toggle="pill" role="tab" href="#accountdetails" aria-controls="accountdetails" aria-selected="true">Account Details</a>
                                    <!-- <a class="nav-link" href="login-register.php">Logout</a> -->
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="user-dashboard-tab__content tab-content">
                                    <div class="tab-pane fade show active" id="dashboard">
                                        <p>Hello <strong>Marlon</strong> (not <strong>Marlon</strong>? <a href="login.php">Log out</a>)</p>
                                        <p>From your account dashboard. you can easily check & view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details</a>.</p>
                                    </div>
                                    <div class="tab-pane fade" id="orders">
                                        <div class="account-table table-content table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td class="wide-column">September 19, 2018</td>
                                                        <td>Processing</td>
                                                        <td class="wide-column"><span>&#8369;350.00</span> for 1 item</td>
                                                        <td><a href="#" class="btn btn-5 btn-style-2">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td class="wide-column">September 19, 2018</td>
                                                        <td>Processing</td>
                                                        <td class="wide-column"><span>&#8369;850.00</span> for 1 item</td>
                                                        <td><a href="#" class="btn btn-5 btn-style-2">View</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="downloads">
                                        <div class="account-table table-content table-responsive">
                                            <table class="table">
                                               
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="addresses">
                                        <div class="billing-address mb--20">
                                            <p>The following addresses will be used on the checkout page by default.</p>
                                            <h4>BILLING ADDRESS</h4>
                                            <a href="#" data-attr="#billing_address" class="btn btn-5 btn-style-2 expand_action">Edit</a>
                                            <div class="address-form hide-in-default" id="billing_address">
                                                <form action="#" class="form">
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-md-6 mb-sm--30">
                                                            <label for="billing_fname" class="form__label">First Name <span>*</span></label>
                                                            <input type="text" name="billing_fname" id="billing_fname" class="form__input form__input--3">
                                                        </div>
                                                        <div class="form__group col-md-6">
                                                            <label for="billing_lname" class="form__label">Last Name <span>*</span></label>
                                                            <input type="text" name="billing_lname" id="billing_lname" class="form__input form__input--3">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="billing_company" class="form__label">Company</label>
                                                            <input type="text" name="billing_company" id="billing_company" class="form__input form__input--3">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="billing_country" class="form__label">Country</label>
                                                            <select name="billing_country" id="billing_country" class="form__input form__input--3 nice-select">
                                                                <option value="">Select a country…</option>
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AL">Albania</option>
                                                                <option value="DZ">Algeria</option>
                                                                <option value="AR">Argentina</option>
                                                                <option value="AM">Armenia</option>
                                                                <option value="AU">Australia</option>
                                                                <option value="AT">Austria</option>
                                                                <option value="AZ">Azerbaijan</option>
                                                                <option value="BH">Bahrain</option>
                                                                <option value="BD" selected="selected">Bangladesh</option>
                                                                <option value="BD">Brazil</option>
                                                                <option value="CN">China</option>
                                                                <option value="EG">Egypt</option>
                                                                <option value="FR">France</option>
                                                                <option value="DE">Germany</option>
                                                                <option value="HK">Hong Kong</option>
                                                                <option value="HU">Hungary</option>
                                                                <option value="IS">Iceland</option>
                                                                <option value="IN">India</option>
                                                                <option value="ID">Indonesia</option>
                                                                <option value="IR">Iran</option>
                                                                <option value="IQ">Iraq</option>
                                                                <option value="IE">Ireland</option>
                                                                <option value="IT">Italy</option>
                                                                <option value="JP">Japan</option>
                                                                <option value="KW">Kuwait</option>
                                                                <option value="MY">Malaysia</option>
                                                                <option value="MV">Maldives</option>
                                                                <option value="MX">Mexico</option>
                                                                <option value="MC">Monaco</option>
                                                                <option value="NP">Nepal</option>
                                                                <option value="RU">Russia</option>
                                                                <option value="KR">South Korea</option>
                                                                <option value="SS">South Sudan</option>
                                                                <option value="ES">Spain</option>
                                                                <option value="LK">Sri Lanka</option>
                                                                <option value="SD">Sudan</option>
                                                                <option value="SZ">Swaziland</option>
                                                                <option value="SE">Sweden</option>
                                                                <option value="CH">Switzerland</option>
                                                                <option value="TN">Tunisia</option>
                                                                <option value="TR">Turkey</option>
                                                                <option value="UA">Ukraine</option>
                                                                <option value="AE">United Arab Emirates</option>
                                                                <option value="GB">United Kingdom (UK)</option>
                                                                <option value="US">United States (US)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="billing_streetAddress" class="form__label">Street Address</label>
                                                            <input type="text" name="billing_streetAddress" id="billing_streetAddress" class="form__input form__input--3">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="billing_apartment" class="form__label">Apartment, suite, unit etc. (optional)</label>
                                                            <input type="text" name="billing_apartment" id="billing_apartment" class="form__input form__input--3">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="billing_city" class="form__label">Town/City <span>*</span></label>
                                                            <input type="text" name="billing_city" id="billing_city" class="form__input form__input--3">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="billing_district" class="form__label">District <span>*</span></label>
                                                            <select name="billing_district" id="billing_district" class="form__input form__input--3 nice-select">
                                                                <option value="">Select a District…</option>
                                                                <option>BARISAL</option>
                                                                <option>BHOLA</option>
                                                                <option>BANDARBAN</option>
                                                                <option>BRAHMANBARIA</option>
                                                                <option>CHANDPUR</option>
                                                                <option>CHITTAGONG</option>
                                                                <option>COMILLA</option>
                                                                <option>COX'S BAZAR</option>
                                                                <option>DHAKA</option>
                                                                <option>FARIDPUR</option>
                                                                <option>FENI</option>
                                                                <option>GAZIPUR</option>
                                                                <option>GOPALGANJ</option>
                                                                <option>JAMALPUR</option>
                                                                <option>KHAGRACHHARI</option>
                                                                <option>KISHOREGONJ</option>
                                                                <option>LAKSHMIPU</option>
                                                                <option>RMADARIPUR</option>
                                                                <option>MUNSHIGANJ</option>
                                                                <option>MYMENSINGH</option>
                                                                <option>NARAYANGANJ</option>
                                                                <option>NARSINGDI</option>
                                                                <option>NETRAKONA</option>
                                                                <option>NOAKHALI</option>
                                                                <option>RANGAMATI </option>
                                                                <option>RAJBARI</option>
                                                                <option>SHARIATPUR</option>
                                                                <option>SHERPUR</option>
                                                                <option>TANGAIL</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="billing_zip" class="form__label">Post/Zip Code <span>*</span></label>
                                                            <input type="text" name="billing_zip" id="billing_zip" class="form__input form__input--3">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-md-6 mb-sm--30">
                                                            <label for="billing_phone" class="form__label">Phone</label>
                                                            <input type="text" name="billing_phone" id="billing_phone" class="form__input form__input--3">
                                                        </div>
                                                        <div class="form__group col-md-6">
                                                            <label for="billing_email" class="form__label">Email Address <span>*</span></label>
                                                            <input type="email" name="billing_email" id="billing_email" class="form__input form__input--3">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form__group col-12">
                                                            <button type="submit" class="btn btn-5 btn-style-2">Save Address</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="shipping-address">
                                            <p>The following addresses will be used on the checkout page by default.</p>
                                            <h4>Shipping ADDRESS</h4>
                                            <a href="#" data-attr="#shipping_address" class="btn btn-5 btn-style-2 expand_action">Edit</a>
                                            <div class="address-form hide-in-default" id="shipping_address">
                                                <form action="#" class="form">
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-md-6 mb-sm--30">
                                                            <label for="shipping_fname" class="form__label">First Name <span>*</span></label>
                                                            <input type="text" name="shipping_fname" id="shipping_fname" class="form__input form__input--3">
                                                        </div>
                                                        <div class="form__group col-md-6">
                                                            <label for="shipping_lname" class="form__label">Last Name <span>*</span></label>
                                                            <input type="text" name="shipping_lname" id="shipping_lname" class="form__input form__input--3">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="shipping_company" class="form__label">Company</label>
                                                            <input type="text" name="shipping_company" id="shipping_company" class="form__input form__input--3">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="shipping_country" class="form__label">Country</label>
                                                            <select id="shipping_country" name="shipping_country" class="form__input form__input--3 nice-select">
                                                                <option value="">Select a country…</option>
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AL">Albania</option>
                                                                <option value="DZ">Algeria</option>
                                                                <option value="AR">Argentina</option>
                                                                <option value="AM">Armenia</option>
                                                                <option value="AU">Australia</option>
                                                                <option value="AT">Austria</option>
                                                                <option value="AZ">Azerbaijan</option>
                                                                <option value="BH">Bahrain</option>
                                                                <option value="BD" selected="selected">Bangladesh</option>
                                                                <option value="BD">Brazil</option>
                                                                <option value="CN">China</option>
                                                                <option value="EG">Egypt</option>
                                                                <option value="FR">France</option>
                                                                <option value="DE">Germany</option>
                                                                <option value="HK">Hong Kong</option>
                                                                <option value="HU">Hungary</option>
                                                                <option value="IS">Iceland</option>
                                                                <option value="IN">India</option>
                                                                <option value="ID">Indonesia</option>
                                                                <option value="IR">Iran</option>
                                                                <option value="IQ">Iraq</option>
                                                                <option value="IE">Ireland</option>
                                                                <option value="IT">Italy</option>
                                                                <option value="JP">Japan</option>
                                                                <option value="KW">Kuwait</option>
                                                                <option value="MY">Malaysia</option>
                                                                <option value="MV">Maldives</option>
                                                                <option value="MX">Mexico</option>
                                                                <option value="MC">Monaco</option>
                                                                <option value="NP">Nepal</option>
                                                                <option value="RU">Russia</option>
                                                                <option value="KR">South Korea</option>
                                                                <option value="SS">South Sudan</option>
                                                                <option value="ES">Spain</option>
                                                                <option value="LK">Sri Lanka</option>
                                                                <option value="SD">Sudan</option>
                                                                <option value="SZ">Swaziland</option>
                                                                <option value="SE">Sweden</option>
                                                                <option value="CH">Switzerland</option>
                                                                <option value="TN">Tunisia</option>
                                                                <option value="TR">Turkey</option>
                                                                <option value="UA">Ukraine</option>
                                                                <option value="AE">United Arab Emirates</option>
                                                                <option value="GB">United Kingdom (UK)</option>
                                                                <option value="US">United States (US)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="shipping_streetAddress" class="form__label">Street Address</label>
                                                            <input type="text" name="shipping_streetAddress" id="shipping_streetAddress" class="form__input form__input--3">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="shipping_apartment" class="form__label">Apartment, suite, unit etc. (optional)</label>
                                                            <input type="text" name="shipping_apartment" id="shipping_apartment" class="form__input form__input--3">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="shipping_city" class="form__label">Town/City <span>*</span></label>
                                                            <input type="text" name="shipping_city" id="shipping_city" class="form__input form__input--3">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="shipping_district" class="form__label">Distring <span>*</span></label>
                                                            <select name="shipping_district" id="shipping_district" class="form__input form__input--3 nice-select">
                                                                <option value="">Select a District…</option>
                                                                <option>BARISAL</option>
                                                                <option>BHOLA</option>
                                                                <option>BANDARBAN</option>
                                                                <option>BRAHMANBARIA</option>
                                                                <option>CHANDPUR</option>
                                                                <option>CHITTAGONG</option>
                                                                <option>COMILLA</option>
                                                                <option>COX'S BAZAR</option>
                                                                <option>DHAKA</option>
                                                                <option>FARIDPUR</option>
                                                                <option>FENI</option>
                                                                <option>GAZIPUR</option>
                                                                <option>GOPALGANJ</option>
                                                                <option>JAMALPUR</option>
                                                                <option>KHAGRACHHARI</option>
                                                                <option>KISHOREGONJ</option>
                                                                <option>LAKSHMIPU</option>
                                                                <option>RMADARIPUR</option>
                                                                <option>MUNSHIGANJ</option>
                                                                <option>MYMENSINGH</option>
                                                                <option>NARAYANGANJ</option>
                                                                <option>NARSINGDI</option>
                                                                <option>NETRAKONA</option>
                                                                <option>NOAKHALI</option>
                                                                <option>RANGAMATI </option>
                                                                <option>RAJBARI</option>
                                                                <option>SHARIATPUR</option>
                                                                <option>SHERPUR</option>
                                                                <option>TANGAIL</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="shipping_zip" class="form__label">Post/Zip Code <span>*</span></label>
                                                            <input type="text" name="shipping_zip" id="shipping_zip" class="form__input form__input--3">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb--20">
                                                        <div class="form__group col-md-6 mb-sm--30">
                                                            <label for="shipping_phone" class="form__label">Phone</label>
                                                            <input type="text" name="shipping_phone" id="shipping_phone" class="form__input form__input--3">
                                                        </div>
                                                        <div class="form__group col-md-6">
                                                            <label for="shipping__email" class="form__label">Email Address <span>*</span></label>
                                                            <input type="email" name="shipping__email" id="shipping__email" class="form__input form__input--3">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form__group col-12">
                                                            <button type="submit" class="btn btn-5 btn-style-2">Save Address</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="accountdetails">
                                        <div class="account-form">
                                            <form action="#" class="form">
                                                <div class="form-row mb--20">
                                                    <div class="col-md-6 mb-sm--20">
                                                        <div class="form__group">
                                                            <label for="account_fname" class="form__label">First Name</label>
                                                            <input type="text" name="account_fname" id="account_fname" class="form__input form__input--3">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form__group">
                                                            <label for="account_lname" class="form__label">First Name</label>
                                                            <input type="text" name="account_lname" id="account_lname" class="form__input form__input--3">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label for="user_email" class="form__label">Email Address</label>
                                                            <input type="email" name="user_email" id="user_email" class="form__input form__input--3">
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="form-row">
                                                    <div class="col-12">
                                                        <h4>PASSWORD CHANGE</h4>
                                                    </div>
                                                </div>
                                                <div class="form-row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label for="cur_password" class="form__label">Current Password (leave blank to leave unchanged)</label>
                                                            <input type="password" name="cur_password" id="cur_password" class="form__input form__input--3">
                                                        </div>
                                                    </div>
                                                </div>                                             
                                                <div class="form-row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label for="new_password" class="form__label">New Password (leave blank to leave unchanged)</label>
                                                            <input type="password" name="new_password" id="new_password" class="form__input form__input--3">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label for="new_password" class="form__label">Confirm Password</label>
                                                            <input type="password" name="confirm_password" id="confirm_password" class="form__input form__input--3">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-5 btn-style-2">Save Changes</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>    
            </div>
        </section>

		<!-- End My Account Area -->
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
										<li><a href="#"><i class="bi bi-facebook"></i></a></li>
										<li><a href="#"><i class="bi bi-google"></i></a></li>
										<li><a href="#"><i class="bi bi-twitter"></i></a></li>
										<li><a href="#"><i class="bi bi-linkedin"></i></a></li>
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