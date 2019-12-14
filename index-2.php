<?php
	require_once("connection.php");
	$logacc="Sign In";
?>
<!doctype html>
<html class="no-js" lang="zxx">


<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home Two | Books Library eCommerce Store</title>
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
    <script src="cart.js" async></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
	

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
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

					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search"><a class="search__active" href="#"></a></li>
							<li class="wishlist"><a href="#"></a></li>
							<li class="shopcart"><a class="cartbox_active" onclick="addtocart()"></a></li>
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
		<div class="brown--color box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text"  name="search" id="search" placeholder="Search entire store here..." class="form-control" />
 
   
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
					  
   <ul class="list-group" id="result"></ul>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
		<!-- Start Slider area -->
		<div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
			<!-- Start Single Slide -->
			<div class="slide animation__style10 bg-image--8 fullscreen align__center--left">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="slider__content">
								<div class="contentbox">
									<h3>Fully Booked</h3>
									<h2>The Best <span>Online</span></h2>
									<h2 class="another">book <span>shop </span></h2>
									<p>Fully Booked specifically created for authors and writes to present and sell their
										books online Soufflé tart sweet. </p>
									<a class="shopbtn" href="shop-grid.php">shop now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slide -->
			<!-- Start Single Slide -->
			<div class="slide animation__style10 bg-image--9 fullscreen align__center--left">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="slider__content">
								<div class="contentbox">
									<h3>Fully Booked</h3>
									<h2>The Best <span>Online</span></h2>
									<h2 class="another">book <span>shop </span></h2>
									<p>Fully Booked specifically created for authors and writes to present and sell their
										books online Soufflé tart sweet. </p>
									<a class="shopbtn" href="shop-grid.php">shop now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slide -->
		</div>
		<!-- End Slider area -->
		 <div class="promo-box full-width mt-md--40 mb-md--40" style="margin-left:50px; padding-bottom: 100px;">
		 	
		 </style>
                                            
                                        </div>
		<!-- Start NEwsletter Area -->
		<section class="wn__newsletter__area bg-image--2">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--150">
						<div class="section__title text-center">
							<h2>Stay With Us</h2>
						</div>
						<div class="newsletter__block text-center">
							<p>Subscribe to our newsletters now and stay up-to-date with new collections, the latest
								lookbooks and exclusive offers.</p>
							<form action="#">
								<div class="newsletter__box">
									<input type="email" placeholder="Enter your e-mail">
									<button>Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End NEwsletter Area -->
	
<!-- details card section starts from here -->

<section class="details-card">
    <div class="container">
    	<div class="row"<
    		<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">All <span class="color--theme">Products</span></h2>
							<p>“I have always imagined that Paradise will be a kind of library.”</p>
						</div>
					</div>
		</div>
        <div class="row mt--50">
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="2020_planners-blog_cover.png" alt="">
                    </div>
                    <div class="card-desc">
                        <h3>2020 Planners</h3>
                        <p>Have a look at the planners to help you get ready for 2020!. Marks the first year into a brand new decade. </p>
                            <a href="#" class="btn-card">Read</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="banner4.png" alt="">
                    </div>
                    <div class="card-desc">
                        <h3>Kids Fair 2019</h3>
                        <p>Have a fun and story-filled weekend on November 16-17 at Fully Booked Bonifacio High Street!</p>
                            <a href="#" class="btn-card">Read</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="banner3.png" alt="">
                    </div>
                    <div class="card-desc">
                        <h3>First Look: Supernova Era</h3>
                        <p>in shaping the future they want, will the children usher in an era of bright beginnings or final mistakes?</p>
                            <a href="#" class="btn-card">Read</a>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- details card section starts from here -->
		
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
			<div class="modal fade" id="productmodal" tabindex-2="-1" role="dialog">
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
										<img alt="big images" src="images/product/big-img/1.jpg">
									</div>
								</div>
								<!-- end product images -->
								<div class="product-info">
									<h1>Simple Fabric Bags</h1>
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
											<span class="new-price">$17.20</span>
											<span class="old-price">$45.00</span>
										</div>
									</div>
									<div class="quick-desc">
										Designed for simplicity and made from high quality materials. Its sleek geometry
										and material combinations creates a modern look.
									</div>
									<div class="select__color">
										<h2>Select color</h2>
										<ul class="color__list">
											<li class="red"><a title="Red" href="#">Red</a></li>
											<li class="gold"><a title="Gold" href="#">Gold</a></li>
											<li class="orange"><a title="Orange" href="#">Orange</a></li>
											<li class="orange"><a title="Orange" href="#">Orange</a></li>
										</ul>
									</div>
									<div class="select__size">
										<h2>Select size</h2>
										<ul class="color__list">
											<li class="l__size"><a title="L" href="#">L</a></li>
											<li class="m__size"><a title="M" href="#">M</a></li>
											<li class="s__size"><a title="S" href="#">S</a></li>
											<li class="xl__size"><a title="XL" href="#">XL</a></li>
											<li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
										</ul>
									</div>
									<div class="social-sharing">
										<div class="widget widget_socialsharing_widget">
											<h3 class="widget-title-modal">Share this product</h3>
											<ul class="social__net social__net--2 d-flex justify-content-start">
												<li class="facebook"><a href="#" class="rss social-icon"><i
															class="zmdi zmdi-rss"></i></a></li>
												<li class="linkedin"><a href="#" class="linkedin social-icon"><i
															class="zmdi zmdi-linkedin"></i></a></li>
												<li class="pinterest"><a href="#" class="pinterest social-icon"><i
															class="zmdi zmdi-pinterest"></i></a></li>
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
  <script>
$(document).ready(function(){
 $.ajaxSetup({ cache: false });
 $('#search').keyup(function(){
  $('#result').php('');
  $('#state').val('');
  var searchField = $('#search').val();
  var expression = new RegExp(searchField, "i");
  $.getJSON('data.json', function(data) {
   $.each(data, function(key, value){
    if (value.title.search(expression) != -1 || value.author.search(expression) != -1)
    {
     $('#result').append('<li class="list-group-item link-class"><img src="'+value.image+'" height="40" width="40" class="img-thumbnail" /> '+value.title+' | <span class="text-muted">'+value.author+'</span></li>');
    }
   });   
  });
 });
 
 $('#result').on('click', 'li', function() {
  var click_text = $(this).text().split('|');
  $('#search').val($.trim(click_text[0]));
  $("#result").php('');
 });
});
</script>


</body>


</html>