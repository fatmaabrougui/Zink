



	
<!doctype html>
			<html class="no-js" lang="zxx">
			
			<head>
				<meta charset="utf-8">
				<meta http-equiv="x-ua-compatible" content="ie=edge">
				<title>flatter</title>
				<meta name="description" content="">
				<meta name="viewport" content="width=device-width, initial-scale=1">
			
				<!-- <link rel="manifest" href="site.webmanifest"> -->
				<link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
				<!-- Place favicon.ico in the root directory -->
			
				<!-- CSS here -->
				<link rel="stylesheet" href="css/bootstrap.min.css">
				<link rel="stylesheet" href="css/owl.carousel.min.css">
				<link rel="stylesheet" href="css/magnific-popup.css">
				<link rel="stylesheet" href="css/font-awesome.min.css">
				<link rel="stylesheet" href="css/themify-icons.css">
				<link rel="stylesheet" href="css/nice-select.css">
				<link rel="stylesheet" href="css/flaticon.css">
				<link rel="stylesheet" href="css/animate.css">
				<link rel="stylesheet" href="css/slicknav.css">
				<link rel="stylesheet" href="css/style.css">
				<!-- <link rel="stylesheet" href="css/responsive.css"> -->
			</head>
			
			<body>
				<!--[if lte IE 9]>
						<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
					<![endif]-->
			
				<!-- header-start -->
				<header>
					<div class="header-area ">
						<div id="sticky-header" class="main-header-area">
							<div class="container">
								<div class="row align-items-center">
									<div class="col-xl-10 col-lg-10">
										<div class="main-menu d-none d-lg-block">
											<nav>
												<ul class="mein_menu_list" id="navigation">
													<li><a href="about.html">About</a></li>
													<li><a href="service.html">Reservation</a></li>
													<li><a href="menu.html">menu</a></li>
													<li><a href="gallery.html">gallery</a></li>
													<div class="logo-img d-none d-lg-block">
															<a href="index.html">
																<img src="img/logo.png" alt="">
															</a>
														</div>
													<li><a href="#">blog <i class="ti-angle-down"></i></a>
														<ul class="submenu">
															<li><a href="blog.html">blog</a></li>
															<li><a href="single-blog.html">single-blog</a></li>
														</ul>
													</li>
													<li><a href="#">pages <i class="ti-angle-down"></i></a>
														<ul class="submenu">
															<li><a href="elements.html">elements</a></li>
														</ul>
													</li>
													<li><a href="contact.html">Contact</a></li>
												</ul>
											</nav>
										</div>
									</div>
									<div class="col-xl-2 col-lg-2 d-none d-lg-block">
										<div class="custom_order">
											<a href="#" class="boxed_btn_white">Custom Order</a>
										</div>
									</div>
									<div class="col-12">
										<div class="mobile_menu d-block d-lg-none"></div>
									</div>
									<div class="logo-img-small d-sm-block d-md-block d-lg-none">
											<a href="index.html">
												<img src="img/logo.png" alt="">
											</a>
										</div>
								</div>
							</div>
						</div>
					</div>
				</header>
				<!-- header-end -->
			
				<?PHP
		include_once "../../core/produitC.php";
		include_once "../../entities/Produit.php";
	    $produit=new produitC();
		$listeProduits=$produit->afficherproduits();
		 if(isset($_POST['description']))
			{
		 
		 $produit=new produitC();
		 $liste1=$produit->chercherproduit($_POST['description']);
	//$produitrC->chercherproduit($_POST['id_p']);



			}
			?>
			
				<!-- breadcam_area_start -->
				<div class="breadcam_area breadcam_bg_1 zigzag_bg_2">
					<div class="breadcam_inner">
						<div class="breadcam_text">
							<h3>Our Menu</h3>
							<p>WELCOME !!</p>
						</div>
					</div>
				</div>
				<!-- breadcam_area_end -->
			
				<div class="row">
									
									<?php foreach($liste1 as $produit): ?>				
								  <div class="col-md-3 product-men women_two shop-gd">
										<div class="product-googles-info googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
												<img src="../images/<?= $produit->image; ?>" class="img-fluid" alt="">	
													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
															  <h4> <a href="single.html"> <?= $produit->description ?></a></h4>
															  <div class="grid-price mt-2">
																	<span class="money "><?= $produit->prix_org; ?> Dt</span>
															  </div>
															  <div class="grid-price mt-2">
																	<span class="moneyy "><?= $produit->prix_disc; ?> Dt</span>
															  </div>
															  <div class="grid-price mt-2">
																	<span class="available "><?= $produit->available; ?></span>
															  </div>
															</div>
															
														</div>



											


















														<div class="googles single-item hvr-outline-out">
															<form action="#" method="post">
																<input type="hidden" name="cmd" value="_cart">
																<input type="hidden" name="add" value="1">
																<input type="hidden" name="googles_item" value="Farenheit">
																<input type="hidden" name="amount" value="575.00">
															
																	
																</button>
															</form>

														</div>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
									
					<?php endforeach; ?>

		</div>
								
									
							</div>
						</div>
				<!-- order_area_end -->
			
			
			
			<!-- footer-start -->
			<footer class="footer_area footer-bg zigzag_bg_1">
			
			
					<div class="footer-top">
						<div class="container">
							<div class="row">
								<div class="col-xl-2 col-md-6 col-lg-2">
									<div class="footer_widget">
										<h3 class="heading">
												Top Products
										</h3>
										<ul>
											<li><a href="#">Managed Website</a></li>
											<li><a href="#"> Manage Reputation</a></li>
											<li><a href="#">Power Tools</a></li>
											<li><a href="#">Marketing Service</a></li>
										</ul>
									</div>
								</div>
								<div class="col-xl-2 col-md-6 col-lg-2">
									<div class="footer_widget">
										<h3 class="heading">
												Quick Links
										</h3>
										<ul>
											<li><a href="#">Jobs</a></li>
											<li><a href="#">Brand Assets</a></li>
											<li><a href="#"> Investor Relations</a></li>
											<li><a href="#">Terms of Service</a></li>
										</ul>
									</div>
								</div>
								<div class="col-xl-2 col-md-6 col-lg-2">
									<div class="footer_widget">
										<h3 class="heading">
												Features
										</h3>
										<ul>
											<li><a href="#">Jobs</a></li>
											<li><a href="#">Brand Assets</a></li>
											<li><a href="#">Investor Relations</a></li>
											<li><a href="#">Terms of Service</a></li>
										</ul>
									</div>
								</div>
								<div class="col-xl-2 col-md-6 col-lg-2">
									<div class="footer_widget">
										<h3 class="heading">
												Resources
										</h3>
										<ul>
											<li><a href="#">Guides</a></li>
											<li><a href="#">Research</a></li>
											<li><a href="#">Experts</a></li>
											<li><a href="#">Agencies</a></li>
										</ul>
									</div>
								</div>
								<div class="col-xl-4 col-md-12 col-lg-4">
									<div class="footer_widget">
										<h3 class="heading">
												Newsletter
										</h3>
										<p class="offer_text" >You can trust us. we only send promo offers,</p>
										<form action="#">
											<input type="text" placeholder="Your email address">
											<button type="submit"> <i class="ti-arrow-right"></i> </button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-bottom">
						<div class="container">
							<div class="row align-items-center">
								<div class="col-xl-7 col-md-12 col-lg-8">
									<div class="copyright">
											<p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
									</div>
								</div>
								<div class="col-xl-5 col-md-12 col-lg-4">
									<div class="social_links">
										<ul>
											<li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
											<li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
											<li><a href="#"> <i class="fa fa-dribbble"></i> </a></li>
											<li><a href="#"> <i class="fa fa-behance"></i> </a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</footer>
				<!-- footer-end -->
			
			
				<!-- JS here -->
				<script src="js/vendor/modernizr-3.5.0.min.js"></script>
				<script src="js/vendor/jquery-1.12.4.min.js"></script>
				<script src="js/popper.min.js"></script>
				<script src="js/bootstrap.min.js"></script>
				<script src="js/owl.carousel.min.js"></script>
				<script src="js/isotope.pkgd.min.js"></script>
				<script src="js/ajax-form.js"></script>
				<script src="js/waypoints.min.js"></script>
				<script src="js/jquery.counterup.min.js"></script>
				<script src="js/imagesloaded.pkgd.min.js"></script>
				<script src="js/scrollIt.js"></script>
				<script src="js/jquery.scrollUp.min.js"></script>
				<script src="js/wow.min.js"></script>
				<script src="js/nice-select.min.js"></script>
				<script src="js/jquery.slicknav.min.js"></script>
				<script src="js/jquery.magnific-popup.min.js"></script>
				<script src="js/plugins.js"></script>
			
				<!--contact js-->
				<script src="js/contact.js"></script>
				<script src="js/jquery.ajaxchimp.min.js"></script>
				<script src="js/jquery.form.js"></script>
				<script src="js/jquery.validate.min.js"></script>
				<script src="js/mail-script.js"></script>
			
				<script src="js/main.js"></script>
			
			</body>
			
			</html>

