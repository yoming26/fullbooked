<?php
	require_once("connection.php");
	$logacc="Sign In";
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

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js">
    
    </script>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
							<a href="index.html">
								<img src="logo.png" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li><a href="index.html">Home</a>
								</li>
								<li><a href="shop-grid.html">Shop</a>
								</li>
								<li class="drop"><a href="shop-grid.html">Books</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title">Categories</li>
											<li><a href="shop-grid.html">Biography </a></li>
											<li><a href="shop-grid.html">Business </a></li>
											<li><a href="shop-grid.html">Cookbooks </a></li>
											<li><a href="shop-grid.html">Health & Fitness </a></li>
											<li><a href="shop-grid.html">History </a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Customer Favourite</li>
											<li><a href="shop-grid.html">Mystery</a></li>
											<li><a href="shop-grid.html">Religion & Inspiration</a></li>
											<li><a href="shop-grid.html">Romance</a></li>
											<li><a href="shop-grid.html">Fiction/Fantasy</a></li>
											<li><a href="shop-grid.html">Sleeveless</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Collections</li>
											<li><a href="shop-grid.html">Science </a></li>
											<li><a href="shop-grid.html">Fiction/Fantasy</a></li>
											<li><a href="shop-grid.html">Self-Improvemen</a></li>
											<li><a href="shop-grid.html">Home & Garden</a></li>
											<li><a href="shop-grid.html">Humor Books</a></li>
										</ul>
									</div>
								</li>
								
								<li><a href="about.html">About Us</a>
									
								</li>
								<li><a href="contact.html">Contact Us</a></li>
							</ul>
						</nav>
					</div>
					<!---Cart Starts Here--->
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
		<div class="ht__bradcaump__area bg-image--6">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="bradcaump__inner text-center">
							<h2 class="bradcaump-title">My Account</h2>
							<nav class="bradcaump-content">
								<a class="breadcrumb_item" href="index.html">Home</a>
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
		


<div class="container" style="margin-left: 300px;">
	<div class="row">
    <div class="col-md-8">
      <section>      
        <h1 class="entry-title"><span>Sign Up</span> </h1>
        <hr>
            <form  action="" class="form-horizontal" method="" name="captcha_form" enctype="multipart/form-data" >        
        <div class="form-group">
          <label class="control-label col-sm-3">Email ID <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
              <div class="input-group">
              <span class="input-group-addon"><i  class="zmdi zmdi-email"></i></span>
              <input type="email" class="form-control" name="emailid" id="emailid" placeholder="Enter your Email ID" value="" required/> 
            </div>	
            <small> Your Email Id is being used for ensuring the security of your account, authorization and access recovery. </small> <span id="email_error" class="text-danger"></span></div>
           
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-3">Set Password <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
              <input type="password" class="form-control" name="password" id="password" placeholder="Choose password (5-15 chars)" value="" required/>
           </div>   
          </div>
          
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Confirm Password <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
              <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm your password" value=""required/> 
            </div> 
          </div>
          <span id="con_error" class="text-danger"></span>
         
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Full Name <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="mem_name" id="mem_name" placeholder="Enter your Name here" value="" required/>
          </div>
          <span id="name_error" class="text-danger"></span>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Date of Birth<span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9" >
            <input type="date" class="form-control" name="bdate" id="bdate" placeholder="Enter Date of Birth. Ex: mm/dd/yy" value="" required/>	
            </div>
               <span id="email_error" class="text-danger"></span>
                </div>

                
        <div class="form-group">
          <label class="control-label col-sm-3">Gender <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <label>
            <input name="gender" type="radio" value="Male" id="gender">
            Male </label>
               
            <label>
            <input name="gender" type="radio" value="Female" >
            Female </label>
            
          <span id="gen_error" class="text-danger"></span>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Captcha Code </label>
          <div class="col-md-5 col-sm-8">
            <div class="g-recaptcha" data-sitekey="6Ld0s8YUAAAAAKGN-ykVZdpIFCa5UOcK4ZErq8lr" required> </div>
               <span id="captcha_error" class"text-danger"></span>
             
          </div>
                </div>
                
        <div class="form-group">
          <div class="col-xs-offset-3 col-md-8 col-sm-9"><span class="text-muted"> By clicking Sign Up, you agree to our <a href="#" style="color: blue">Terms</a> and that you have read our <a href="#" style="color: blue">Policy</a>, including our <a href="#" style="color: blue">Cookie Use</a>.</span> </div>

        </div>
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-10">
            
            <button name="register" type="" id="register" onclick="reg()" class="btn btn-primary">Sign Up</button>
          </div>
        </div>
        <p style="padding-left:200px;color:#bdc3c7;margin-top: 15px;">Already have an account?<a href="my-account.php" style="color:blue;">Sign In</a></p>
      </form>
    </div>
</div>
</div>
		<!-- End My Account Area -->
			<!-- Footer Area -->
		<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
			<div class="footer-static-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer__widget footer__menu">
								<div class="ft__logo">
									<a href="index.html">
										<img src="logo.png" alt="logo">
									</a>
									<p>Fully Booked is all about finding the next great read. With over a hundred thousand titles across multiple genres—you'll never run out ofstories. Visit one of our bookstores in the Philippines.</p>
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
										<li><a href="index.html">Trending</a></li>
										<li><a href="index.html">Best Seller</a></li>
										<li><a href="index.html">All Product</a></li>
										<li><a href="index.html">Wishlist</a></li>
										<li><a href="index.html">Blog</a></li>
										<li><a href="index.html">Contact</a></li>
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
	<script src="cartfunction.js"></script>

</body>


</html>



<script>
	function reg(){
		let xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
		if(xhttp.readyState == 4 && xhttp.status ==200){ 
			alert("success");
			}
			};
		var fname = document.getElementById("mem_name").value;
		var dob = document.getElementById("bdate").value;
		var gender = document.getElementById("gender").value;
		var email = document.getElementById("emailid").value;
		var pw = document.getElementById("password").value;
		var confirmpw = document.getElementById("cpassword").value;

		if(pw!=confirmpw){
			document.getElementById("con_error").innerHTML = "Password doesn't Matched";
		}
		else{
			xhttp.open("GET","registration.php?fname="+fname+"&dob="+dob+"&gender="+gender+"&email="+email+"&pw="+pw+"",true);
			xhttp.send();
		}
	}
</script>
