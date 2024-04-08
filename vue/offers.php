<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tour & Travel</title>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css" />
	<link href="../assets/css/element.css" rel="stylesheet">
	<link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" />
	<link type="text/css" rel="stylesheet" href="../assets/css/animate.css">
	<script src="../assets/js/jquery-2.1.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/js/codebase/dhtmlxcalendar.css"/>
	<script src="../assets/js/codebase/dhtmlxcalendar.js"></script>
	<script>
		var myCalendar;
		function doOnLoad() {
			myCalendar = new dhtmlXCalendarObject(["cal_1","cal_2", "cal_3", "cal_4", "cal_5", "cal_6", "cal_7", "cal_8"]);
		}
	</script>


</head>
<body  onload="doOnLoad();">
<section id="header">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand heading_tag" href="index.php"><i class="fa fa-tree"></i> TOUR & TRAVEL </a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown dropdown-large">
						<a href="#" class="dropdown-toggle  tag_menu" data-toggle="dropdown">Home <span class="badge indent0">7</span> <b class="caret"></b></a>

						<ul class="dropdown-menu dropdown-menu-large row drop_menu_1">
							<li class="col-sm-4 border_right_1">
								<ul>
									<li class="dropdown-header">Mainpages</li>
									<li><a href="offers.html">Offers</a></li>
									<li><a href="full_search.php">Search full page</a></li>
									<li><a href="presentation.php"> Presentation</a></li>
									<li><a href="footer_2.php">New footer page</a></li>
									<li><a href="full_page.php">All contents</a></li>
									<li><a href="homepage_2.php">Second homepage</a></li>
									<li><a href="new_homepage.php">Another homepage</a></li>
								</ul>
							</li>
							<li class="col-sm-4 border_right_1">
								<ul>
									<li class="dropdown-header">Inner pages</li>
									<li><a href="#">Inner 1</a></li>
									<li><a href="#">Inner 2 </a></li>
									<li><a href="#">Inner 3 </a></li>
								</ul>
							</li>
							<li class="col-sm-4 border_right_1">
								<ul>
									<li class="dropdown-header">Themes</li>
									<li><a href="#">Dark</a></li>
									<li><a href="#">Light</a></li>
									<li><a href="#">Catchy</a></li>
									<li><a href="#">Attractive</a></li>
									<li class="dropdown-header">Trending Pages</li>
								</ul>
							</li>

						</ul>

					</li>

					<li class="dropdown dropdown-large">
						<a href="#" class="dropdown-toggle tag_menu" data-toggle="dropdown">All Pages <span class="badge indent0">8</span><b class="caret"></b></a>

						<ul class="dropdown-menu dropdown-menu-large row drop_menu_1">
							<li class="col-sm-4 border_right_1">
								<ul>
									<li class="dropdown-header">Internal pages</li>
									<li><a href="list.php">Listing</a></li>
									<li><a href="detail.php">Listing Details</a></li>
									<li><a href="blog.php">Blog</a></li>
									<li><a href="blog_detail.php">Blog details</a></li>
									<li><a href="about.php">About us</a></li>
									<li><a href="payment.php">Payment type</a></li>
									<li><a href="contact.php">Contact us</a></li>
								</ul>
							</li>
							<li class="col-sm-4 border_right_1">
								<ul>
									<li class="dropdown-header">Trending</li>
									<li><a href="#"> Homepage </a></li>
									<li><a href="#"> List </a></li>
									<li><a href="#"> Payment</a></li>
									<li><a href="#">Another list</a></li>
									<li><a href="#">Another payment</a></li>

									<li><a href="#">Another list</a></li>
									<li><a href="#">List details</a></li>
									<li><a href="#">Next payment</a></li>
									<li><a href="#">Another list</a></li>
									<li><a href="#">Another payment</a></li>
									<li><a href="#">Another list</a></li>
									<li><a href="#">Blog details</a></li>
									<li><a href="#">Another payment</a></li>
									<li><a href="#">Another page</a></li>
								</ul>
							</li>
							<li class="col-sm-4 border_right_1">
								<ul>
									<li class="dropdown-header">Html Coading</li>
									<li><a href="#">Products</a></li>
									<li><a href="#">Language</a></li>
									<li><a href="#">Styles</a></li>
									<li class="dropdown-header">Upcoming</li>

									<li><a href="#">Many Home pages</a></li>
									<li><a href="#">Details</a></li>
									<li class="dropdown-header">Trending Pages</li>
								</ul>
							</li>

						</ul>

					</li>

					<li>
						<a class="tag_menu" href="list.php">List</a>                    </li>

					<li>
						<a class="tag_menu" href="blog.php">Blog</a>                    </li>

					<li>
						<a class="tag_menu active_tab" href="offers.html">Offers</a>                    </li>

					<li>
						<a class="tag_menu" href="detail.php">Detail</a>                    </li>

					<li>
						<a class="tag_menu" href="payment.php">Payment</a>                    </li>

					<li>
						<a class="tag_menu" href="contact.php">Contact</a>                    </li>

					<li class="dropdown">
						<a class="tag_menu" href="#" data-toggle="dropdown" role="button" aria-expanded="false">Offers<span class="caret"></span></a>
						<ul class="dropdown-menu drop_1" role="menu">
							<li class="dropdown-header"> Dropdown 1</li>
							<li><a href="#">Dropdown Inner</a></li>
							<li><a href="#">Dropdown Inner 1</a></li>
						</ul>
					</li>

				</ul>

			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
</section>

<div class="main clearfix">
	<div class="main_1 clearfix">
		<section id="center">
			<div class="banner">
				<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
					<!-- Wrapper-for-Slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active"><!-- First-Slide -->
							<img src="img/1.jpg" alt="" class="img-responsive">
							<div class="carousel-caption kb_caption kb_caption_right">
								<h3 data-animation="animated flipInX" class=""> BRAZIL<br> <span class="dollar_2">UK</span></h3>
								<h4 data-animation="animated flipInX" class="">START<br> <span class="dollar_1">$1000</span></h4>
							</div>
						</div>
						<div class="item"> <!-- Second-Slide -->
							<img src="img/2.jpg" alt="" class="img-responsive">
							<div class="carousel-caption kb_caption kb_caption_right">
								<h3 data-animation="animated fadeInDown">BRISBANE <br> <span class="dollar_2">SYDNEY</span></h3>
								<h4 data-animation="animated fadeInUp">START<br> <span class="dollar_1">$1200</span></h4>
							</div>
						</div>
						<div class="item"><!-- Third-Slide -->
							<img src="img/3.jpg" alt="" class="img-responsive">
							<div class="carousel-caption kb_caption kb_caption_center">
								<h3 data-animation="animated fadeInLeft">LONDON <br><span class="dollar_2">PEARTH</span></h3>
								<h4 data-animation="animated flipInX"> START <br><span class="dollar_1">$1600</span></h4>
							</div>
						</div>
					</div>
					<!-- Left-Button -->
					<a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
						<span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<!-- Right-Button -->
					<a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
						<span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<script src="js/custom.js"></script>
			</div>

		</section>
	</div>
	<div class="main_2 clearfix">
		<section id="booking">
			<div class="container">
				<div class="row">
					<div class="booking clearfix">
						<div class="col-sm-4">
							<div class="booking_left">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-plane"></i> Flight</a></li>
								</ul>

								<div class="tab-content clearfix">
									<div id="home" class="tab-pane fade in active clearfix">
										<div class="click clearfix">
											<div class="tab_inner clearfix">
												<div class="col-sm-6 ">
													<div class="tab_inner_1 clearfix">
														<div class="tab_inner_1_inner clearfix">
															<p>Ville de depart</p>
															<input class="form-control" placeholder=" Airport" type="text">
														</div>
														<div class="tab_inner_1_inner clearfix">
															<p>Men</p>
															<select class="form_1 form-control">
																<option value="1"> 1 </option>
																<option value="2"> 2 </option>
																<option value="1"> 3 </option>
																<option value="2"> 4 </option>
																<option value="1"> 5 </option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-sm-6 ">
													<div class="tab_inner_1 clearfix">
														<div class="tab_inner_1_inner clearfix">
															<p>Ville d'arrivée</p>
															<input class="form-control" placeholder="Airport" type="text">
														</div>
														<div class="tab_inner_1_inner clearfix">
															<p>Kids</p>
															<select class="form_1 form-control">
																<option value="1"> 1 </option>
																<option value="2"> 2 </option>
																<option value="1"> 3 </option>
																<option value="5"> 4 </option>
																<option value="4"> 5 </option>
															</select>
														</div>
													</div>
												</div>

											</div>
											<div class="tab_inner_last clearfix">
												<h4><a href="#">SEARCH</a></h4>
											</div>
										</div>
									</div>

									<div id="menu2" class="tab-pane fade clearfix">
										<div class="click clearfix">
											<div class="tab_inner clearfix">
												<div class="col-sm-6 ">
													<div class="tab_inner_1 clearfix">
														<div class="tab_inner_1_inner clearfix">
															<p>Start from</p>
															<input class="form-control" placeholder=" Address" type="text">
														</div>
														<div class="tab_inner_1_inner clearfix">
															<p>Start date</p>
															<input class="form-control" id="cal_5" placeholder="mm/dd/yyyy" type="text">
														</div>
														<div class="tab_inner_1_inner clearfix">
															<p>End off date</p>
															<input class="form-control" id="cal_6" placeholder="mm/dd/yyyy" type="text">
														</div>
													</div>
												</div>
												<div class="col-sm-6 ">
													<div class="tab_inner_1 clearfix">
														<div class="tab_inner_1_inner clearfix">
															<p>End off</p>
															<input class="form-control" placeholder="Address" type="text">
														</div>
													</div>
												</div>

											</div>
											<div class="tab_inner_last clearfix">
												<h4><a href="#">SEARCH</a></h4>
											</div>
										</div>
									</div>
									<div id="menu3" class="tab-pane fade clearfix">
										<div class="click clearfix">
											<div class="tab_inner clearfix">
												<div class="col-sm-6 ">
													<div class="tab_inner_1 clearfix">
														<div class="tab_inner_1_inner clearfix">
															<p>Start from</p>
															<input class="form-control" placeholder="Airport" type="text">
														</div>
														<div class="tab_inner_1_inner clearfix">
															<p>Check in</p>
															<input class="form-control" id="cal_7" placeholder="mm/dd/yyyy" type="text">
														</div>
														<div class="tab_inner_1_inner clearfix">
															<p>HOTEL 2</p>
															<h6><a href="#">+ Book room</a></h6>
														</div>
													</div>
												</div>
												<div class="col-sm-6 ">
													<div class="tab_inner_1 clearfix">
														<div class="tab_inner_1_inner clearfix">
															<p>Destination</p>
															<input class="form-control" placeholder=" Airport" type="text">
														</div>
														<div class="tab_inner_1_inner clearfix">
															<p>Check in </p>
															<input class="form-control" id="cal_8" placeholder="mm/dd/yyyy" type="text">
														</div>
														<div class="tab_inner_1_inner clearfix">
															<div class="tab_inner_1_inner_1_inner clearfix">
																<div class="col-sm-6 space_left">
																	<p>Men</p>
																	<select class="form_1 form-control">
																		<option value="1"> 2 </option>
																		<option value="2"> 1 </option>
																		<option value="3"> 2 </option>
																		<option value="4"> 3 </option>
																		<option value="5"> 4 </option>
																		<option value="2"> 5 </option>
																	</select>
																</div>
																<div class="col-sm-6 space_left">
																	<p>Kids</p>
																	<select class="form_1 form-control">
																		<option value="2"> 2 </option>
																		<option value="1"> 1 </option>
																		<option value="3"> 2 </option>
																		<option value="1"> 3 </option>
																		<option value="5"> 4 </option>
																		<option value="4"> 5 </option>
																	</select>
																</div>
															</div>

														</div>
													</div>
												</div>

											</div>
											<div class="tab_inner_last clearfix">
												<h4><a href="#">SEARCH</a></h4>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="booking_middle clearfix">
								<div class="grid clearfix">

									<figure class="effect-goliath">
										<img src="img/4.jpg" alt="img24"/>
										<figcaption>
											<h2>ITALY <span>ROME</span></h2>
											<p>$39.99</p>
										</figcaption>
									</figure>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="booking_middle clearfix">
								<div class="grid clearfix">

									<figure class="effect-goliath">
										<img src="img/5.jpg" alt="img24"/>
										<figcaption>
											<h2>FRANCE <span>PARIS</span></h2>
											<p>$49.99</p>
										</figcaption>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

<section id="flight_detail" class="flight_detail_main">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="flight_detail text-center clearfix">
					<p>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</p>
					<h3>LAST HOUR: <span>Belgium</span> - 4 nights - Airways+6* Room, Departure 17h Jan from $199/person</h3>
					<h4><a href="#">LEARN MORE</a></h4>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="offers">
	<div class="container">
		<div class="row">
			<div class="offers clearfix">
				<div class="col-sm-3">
					<div class="offers_left">
						<h2>Trending Best<br> Offers</h2>
						<p>Nulla quis sem at nibh elementum imperdiet Praesent mauris.</p>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="offers_right">
						<div id="Carousel" class="carousel slide">

							<ol class="carousel-indicators">
								<li data-target="#Carousel" data-slide-to="0" class="active"></li>
								<li data-target="#Carousel" data-slide-to="1"></li>
								<li data-target="#Carousel" data-slide-to="2" class=""></li>
							</ol>

							<!-- Carousel items -->
							<div class="carousel-inner">

								<div class="item active">
									<div class="row">
										<div class="col-sm-4">
											<a href="#" class=""><img src="img/6.jpg" alt="Image" style="max-width:100%;"></a>
											<div class="item_inner clearfix">
												<h6>Italy - Rome</h6>
												<p>Discount up to 20%</p>
											</div>
										</div>
										<div class="col-sm-4">
											<a href="#" class=""><img src="img/7.jpg" alt="Image" style="max-width:100%;"></a>
											<div class="item_inner clearfix">
												<h6>Paris</h6>
												<p>Discount up to 20%</p>
											</div>
										</div>
										<div class="col-sm-4">
											<a href="#" class=""><img src="img/8.jpg" alt="Image" style="max-width:100%;"></a>
											<div class="item_inner clearfix">
												<h6>Go to Sea Beaches</h6>
												<p>Discount up to 20%</p>
											</div>
										</div>

									</div><!--.row-->
								</div><!--.item-->

								<div class="item">
									<div class="row">
										<div class="col-sm-4">
											<a href="#" class=""><img src="img/6.jpg" alt="Image" style="max-width:100%;"></a>
											<div class="item_inner clearfix">
												<h6>Italy - Rome</h6>
												<p>Discount up to 20%</p>
											</div>
										</div>
										<div class="col-sm-4">
											<a href="#" class=""><img src="img/7.jpg" alt="Image" style="max-width:100%;"></a>
											<div class="item_inner clearfix">
												<h6>Paris</h6>
												<p>Discount up to 20%</p>
											</div>
										</div>
										<div class="col-sm-4">
											<a href="#" class=""><img src="img/8.jpg" alt="Image" style="max-width:100%;"></a>
											<div class="item_inner clearfix">
												<h6>Go to Sea Beaches</h6>
												<p>Discount up to 20%</p>
											</div>
										</div>

									</div><!--.row-->
								</div><!--.item-->

								<div class="item">
									<div class="row">
										<div class="col-sm-4">
											<a href="#" class=""><img src="img/6.jpg" alt="Image" style="max-width:100%;"></a>
											<div class="item_inner clearfix">
												<h6>Italy - Rome</h6>
												<p>Discount up to 20%</p>
											</div>
										</div>
										<div class="col-sm-4">
											<a href="#" class=""><img src="img/7.jpg" alt="Image" style="max-width:100%;"></a>
											<div class="item_inner clearfix">
												<h6>Paris</h6>
												<p>Discount up to 20%</p>
											</div>
										</div>
										<div class="col-sm-4">
											<a href="#" class=""><img src="img/8.jpg" alt="Image" style="max-width:100%;"></a>
											<div class="item_inner clearfix">
												<h6>Go to Sea Beaches</h6>
												<p>Discount up to 20%</p>
											</div>
										</div>

									</div><!--.row-->
								</div><!--.item-->

							</div><!--.carousel-inner-->
							<a data-slide="prev" href="#Carousel" class="left carousel-control control_1">‹</a>
							<a data-slide="next" href="#Carousel" class="right carousel-control control_1">›</a>
						</div>
					</div>
				</div>
			</div>
			<div class="offers clearfix border_none_1">
				<div class="col-sm-3">
					<div class="offers_left">
						<h2>Popular <br>Deals</h2>
						<p>Nulla quis sem at nibh elementum imperdiet Praesent mauris.</p>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="offers_right">
						<div id="Carousel_1" class="carousel slide">

							<ol class="carousel-indicators">
								<li data-target="#Carousel_1" data-slide-to="0" class="active"></li>
								<li data-target="#Carousel_1" data-slide-to="1"></li>
								<li data-target="#Carousel_1" data-slide-to="2" class=""></li>
							</ol>

							<!-- Carousel items -->
							<div class="carousel-inner">

								<div class="item active">
									<div class="row">
										<div class="col-sm-4">
											<a href="#" class=""><img src="img/9.jpg" alt="Image" style="max-width:100%;"></a>
											<div class="item_inner clearfix">
												<h6>Australia Valleys</h6>
												<p>Discount up to 20%</p>
											</div>
										</div>
										<div class="col-sm-4">
											<a href="#" class=""><img src="img/10.jpg" alt="Image" style="max-width:100%;"></a>
											<div class="item_inner clearfix">
												<h6>England</h6>
												<p>Discount up to 20%</p>
											</div>
										</div>
										<div class="col-sm-4">
											<a href="#" class=""><img src="img/11.jpg" alt="Image" style="max-width:100%;"></a>
											<div class="item_inner clearfix">
												<h6>New York</h6>
												<p>Discount up to 20%</p>
											</div>
										</div>

									</div><!--.row-->
								</div><!--.item-->

								<div class="item">
									<div class="row">
										<div class="col-sm-4">
											<a href="#" class=""><img src="img/9.jpg" alt="Image" style="max-width:100%;"></a>
											<div class="item_inner clearfix">
												<h6>Australia Valleys</h6>
												<p>Discount up to 20%</p>
											</div>
										</div>
										<div class="col-sm-4">
											<a href="#" class=""><img src="img/10.jpg" alt="Image" style="max-width:100%;"></a>
											<div class="item_inner clearfix">
												<h6>England</h6>
												<p>Discount up to 20%</p>
											</div>
										</div>
										<div class="col-sm-4">
											<a href="#" class=""><img src="img/11.jpg" alt="Image" style="max-width:100%;"></a>
											<div class="item_inner clearfix">
												<h6>New York</h6>
												<p>Discount up to 20%</p>
											</div>
										</div>

									</div><!--.row-->
								</div><!--.item-->

								<div class="item">
									<div class="row">
										<div class="col-sm-4">
											<a href="#" class=""><img src="img/9.jpg" alt="Image" style="max-width:100%;"></a>
											<div class="item_inner clearfix">
												<h6>Australia Valleys</h6>
												<p>Discount up to 20%</p>
											</div>
										</div>
										<div class="col-sm-4">
											<a href="#" class=""><img src="img/10.jpg" alt="Image" style="max-width:100%;"></a>
											<div class="item_inner clearfix">
												<h6>England</h6>
												<p>Discount up to 20%</p>
											</div>
										</div>
										<div class="col-sm-4">
											<a href="#" class=""><img src="img/11.jpg" alt="Image" style="max-width:100%;"></a>
											<div class="item_inner clearfix">
												<h6>New York</h6>
												<p>Discount up to 20%</p>
											</div>
										</div>

									</div><!--.row-->
								</div><!--.item-->

							</div><!--.carousel-inner-->
							<a data-slide="prev" href="#Carousel_1" class="left carousel-control control_1">‹</a>
							<a data-slide="next" href="#Carousel_1" class="right carousel-control control_1">›</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="footer text-center">
					<div class="clearfix aniview animated slideInDown" data-av-animation="slideInDown" data-wow-delay="0.1s" style="opacity: 1;">
						<ul class="social-network social-circle">
							<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
							<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					<p>© 2013 Your Website Name. All Rights Reserved | Design by <a href="http://www.templateonweb.com">TemplateOnWeb</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<div id="toTop" class="btn btn-info" style="display: block; background:none; color:#999; border-color:#999;"><span class="fa fa-chevron-up"></span></div>

<script type="text/javascript">
	$(document).ready(function(){
		$('body').append('<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span> Back to Top</div>');
		$(window).scroll(function () {
			if ($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		});
		$('#toTop').click(function(){
			$("html, body").animate({ scrollTop: 0 }, 600);
			return false;
		});
	});

</script>


<script src="../assets/js/classie.js"></script>
<script src="../assets/js/cbpAnimatedHeader.js"></script>

</body>

</html>
