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
						<a href="#" class="dropdown-toggle tag_menu" data-toggle="dropdown">Home <span class="badge indent0">7</span> <b class="caret"></b></a>

						<ul class="dropdown-menu dropdown-menu-large row drop_menu_1">
							<li class="col-sm-4 border_right_1">
								<ul>
									<li class="dropdown-header">Mainpages</li>
									<li><a href="offers.php">Offers</a></li>
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
									<li><a href="list.html">Listing</a></li>
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
						<a class="tag_menu active_tab" href="list.html">List</a>                    </li>

					<li>
						<a class="tag_menu" href="blog.php">Blog</a>                    </li>

					<li>
						<a class="tag_menu" href="offers.php">Offers</a>                    </li>

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

<section id="list">
	<div class="container">
		<div class="row">
			<div class="list clearfix">
				<ul>
					<li><a href="#"><i class="fa fa-home"></i></a> /</li>
					<li><a href="#">Rooms</a> /</li>
					<li><a href="#">America</a> /</li>
					<li><a href="#">London</a></li>
				</ul>
			</div>
			<div class="list_1 clearfix">
				<div class="col-sm-3 space_all">
					<div class="list_1_left clearfix">
						<div class="list_1_left_inner text-center clearfix">
							<p><span>23</span> Rooms available at</p>
							<h2>$56</h2>
							<p>Sharp results or see all</p>
						</div>
						<div class="list_1_left_inner_1 clearfix">
							<div class="tab_inner clearfix">
								<div class="menu_1_inner col-sm-12 clearfix">
									<p>Go any where you want to </p>
									<input class="form-control" placeholder="Italy" type="text">
								</div>
								<div class="clearfix">
									<div class="col-sm-6 ">
										<div class="tab_inner_1 clearfix">

											<div class="tab_inner_1_inner clearfix">
												<p>Check in</p>
												<input class="form-control" id="cal_3" placeholder="mm/dd/yyyy" type="text">
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
												<p>Check in</p>
												<input class="form-control" id="cal_4" placeholder="mm/dd/yyyy" type="text">
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
															<option value="6"> 5 </option>
														</select>
													</div>
													<div class="col-sm-6 space_left">
														<p>Kids</p>
														<select class="form_1 form-control">
															<option value="1"> 2 </option>
															<option value="2"> 1 </option>
															<option value="3"> 2 </option>
															<option value="4"> 3 </option>
															<option value="5"> 4 </option>
															<option value="6"> 5 </option>
														</select>
													</div>
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
						<div class="list_1_left_inner_2 clearfix">
							<h3>Separate by</h3>
							<a href="#"><h5>User rating</h5></a>
							<h6>
								<input type="checkbox" class="check_1">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<span>5 Stars</span>
							</h6>
							<h6>
								<input type="checkbox" class="check_1">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
								<span>4 Stars</span>
							</h6>
							<h6>
								<input type="checkbox" class="check_1">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<span>3 Stars</span>
							</h6>
							<h6>
								<input type="checkbox" class="check_1">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<span>2 Stars</span>
							</h6>
							<h6>
								<input type="checkbox" class="check_1">
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<span>1 Star</span>
							</h6>

							<div class="list_1_left_inner_2_inner clearfix">
								<a href="#"><h5>Range of price</h5></a>
								<p>99$ to 1100$</p>
								<a href="#"><h5>All type</h5></a>
							</div>

							<div class="list_1_left_inner_2_inner_1 clearfix">
								<p><input type="radio"> <span>All</span></p>
								<p><input type="radio"> <span>Room</span></p>
								<p><input type="radio"> <span>Sleep & Lunch</span></p>
								<p><input type="radio"> <span>Flat</span></p>
								<p><input type="radio"> <span>Cursus </span></p>
								<p><input type="radio"> <span>All-Exclusive Hotel</span></p>

							</div>

							<a href="#"><h5>Best Resort</h5></a>
							<div class="list_1_left_inner_2_inner_1 clearfix">
								<p><input type="radio"> <span>Wi-Fi Internet (31)</span></p>
								<p><input type="radio"> <span>A/C Room (22)</span></p>
								<p><input type="radio"> <span>Water park (35)</span></p>
								<p><input type="radio"> <span>For child (19)</span></p>
								<p><input type="radio"> <span>Fitness gym (29)</span></p>
								<p><input type="radio"> <span>Best breakfast (17)</span></p>
								<p><input type="radio"> <span>Full parking (16)</span></p>
								<p><input type="radio"> <span>Hair Saloon (38)</span></p>
								<p><input type="radio"> <span>For pets (26)</span></p>
								<p><input type="radio"> <span>Food in resort (57)</span></p>
								<p><input type="radio"> <span>Hotel qualities (68)</span></p>
								<p><input type="radio"> <span>Massage and spa (47)</span></p>

							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="list_1_right clearfix">
						<div class="list_1_right_1 clearfix">
							<div class="col-sm-4">
								<div class="list_1_right_1_left clearfix">
									<div class="col-sm-3 space_all">
										<p>Sort by :</p>
									</div>
									<div class="col-sm-9 right">
										<select class="form_1 form-control">
											<option value="Country">User rating </option>
											<option value="India"> 5 stars </option>
											<option value="United states"> 4 stars </option>
											<option value="Afghanisthan">3 stars </option>
											<option value="China"> 2 stars</option>
											<option value="Indonesia">1 stars </option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="list_1_right_1_left clearfix">
									<div class="col-sm-6 space_left">
										<select class="form_1 form-control">
											<option value="Country">A to Z </option>
											<option value="India"> A to Z </option>
											<option value="United states">  Z to A </option>
										</select>
									</div>
									<div class="col-sm-6 space_left">
										<select class="form_1 form-control">
											<option value="Country">Pricing </option>
											<option value="India"> High </option>
											<option value="United states"> Low </option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="list_1_right_1_right clearfix">
									<div class="col-sm-6 space_all">
										<p><a href="#">Most Trending</a></p>
									</div>
									<div class="col-sm-6 space_all">
										<h6>
											<a href="#"><i class="fa fa-windows"></i></a>
											<a href="#"><i class="fa fa-list "></i></a>
											<a href="#"><i class="fa fa-windows"></i></a>
										</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="list_1_right_2 clearfix">
							<div class="col-sm-4 space_left">
								<div class="list_1_right_2_inner clearfix">
									<div class="grid clearfix">

										<figure class="effect-ming">
											<img src="img/30.jpg" alt="img08"/>
											<figcaption>
												<h2>Tour <span>Travel</span></h2>
												<p> Lorem ipsum dolor sit amet adipiscing elit Integer nec odio.</p>
												<a href="detail.php">View more</a>						</figcaption>
										</figure>
									</div>
									<div class="list_1_right_2_inner_1 clearfix">
										<div class="col-sm-8">
											<h6>Lacinia Arcu Resort</h6>
											<p><span>$45.00</span> per/day</p>
										</div>
										<div class="col-sm-4">
											<h5><a href="detail.php">Book</a></h5>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 space_left">
								<div class="list_1_right_2_inner clearfix">
									<div class="grid clearfix">

										<figure class="effect-ming">
											<img src="img/31.jpg" alt="img08"/>
											<figcaption>
												<h2>Tour <span>Travel</span></h2>
												<p> Lorem ipsum dolor sit amet adipiscing elit Integer nec odio.</p>
												<a href="detail.php">View more</a>						</figcaption>
										</figure>
									</div>
									<div class="list_1_right_2_inner_1 clearfix">
										<div class="col-sm-8">
											<h6>Lacinia Arcu Resort</h6>
											<p><span>$47.00</span> per/day</p>
										</div>
										<div class="col-sm-4">
											<h5><a href="detail.php">Book</a></h5>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 space_left">
								<div class="list_1_right_2_inner clearfix">
									<div class="grid clearfix">

										<figure class="effect-ming">
											<img src="img/32.jpg" alt="img08"/>
											<figcaption>
												<h2>Tour <span>Travel</span></h2>
												<p> Lorem ipsum dolor sit amet adipiscing elit Integer nec odio.</p>
												<a href="detail.php">View more</a>						</figcaption>
										</figure>
									</div>
									<div class="list_1_right_2_inner_1 clearfix">
										<div class="col-sm-8">
											<h6>Lacinia Arcu Resort</h6>
											<p><span>$49.00</span> per/day</p>
										</div>
										<div class="col-sm-4">
											<h5><a href="detail.php">Book</a></h5>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="list_1_right_2 clearfix">
							<div class="col-sm-4 space_left">
								<div class="list_1_right_2_inner clearfix">
									<div class="grid clearfix">

										<figure class="effect-ming">
											<img src="img/33.jpg" alt="img08"/>
											<figcaption>
												<h2>Tour <span>Travel</span></h2>
												<p> Lorem ipsum dolor sit amet adipiscing elit Integer nec odio.</p>
												<a href="detail.php">View more</a>						</figcaption>
										</figure>
									</div>
									<div class="list_1_right_2_inner_1 clearfix">
										<div class="col-sm-8">
											<h6>Lacinia Arcu Resort</h6>
											<p><span>$55.00</span> per/day</p>
										</div>
										<div class="col-sm-4">
											<h5><a href="detail.php">Book</a></h5>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 space_left">
								<div class="list_1_right_2_inner clearfix">
									<div class="grid clearfix">

										<figure class="effect-ming">
											<img src="img/34.jpg" alt="img08"/>
											<figcaption>
												<h2>Tour <span>Travel</span></h2>
												<p> Lorem ipsum dolor sit amet adipiscing elit Integer nec odio.</p>
												<a href="detail.php">View more</a>						</figcaption>
										</figure>
									</div>
									<div class="list_1_right_2_inner_1 clearfix">
										<div class="col-sm-8">
											<h6>Lacinia Arcu Resort</h6>
											<p><span>$56.00</span> per/day</p>
										</div>
										<div class="col-sm-4">
											<h5><a href="detail.php">Book</a></h5>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 space_left">
								<div class="list_1_right_2_inner clearfix">
									<div class="grid clearfix">

										<figure class="effect-ming">
											<img src="img/35.jpg" alt="img08"/>
											<figcaption>
												<h2>Tour <span>Travel</span></h2>
												<p> Lorem ipsum dolor sit amet adipiscing elit Integer nec odio.</p>
												<a href="detail.php">View more</a>						</figcaption>
										</figure>
									</div>
									<div class="list_1_right_2_inner_1 clearfix">
										<div class="col-sm-8">
											<h6>Lacinia Arcu Resort</h6>
											<p><span>$58.00</span> per/day</p>
										</div>
										<div class="col-sm-4">
											<h5><a href="detail.php">Book</a></h5>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="list_1_right_2 clearfix">
							<div class="col-sm-4 space_left">
								<div class="list_1_right_2_inner clearfix">
									<div class="grid clearfix">

										<figure class="effect-ming">
											<img src="img/36.jpg" alt="img08"/>
											<figcaption>
												<h2>Tour <span>Travel</span></h2>
												<p> Lorem ipsum dolor sit amet adipiscing elit Integer nec odio.</p>
												<a href="detail.php">View more</a>						</figcaption>
										</figure>
									</div>
									<div class="list_1_right_2_inner_1 clearfix">
										<div class="col-sm-8">
											<h6>Lacinia Arcu Resort</h6>
											<p><span>$72.00</span> per/day</p>
										</div>
										<div class="col-sm-4">
											<h5><a href="detail.php">Book</a></h5>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 space_left">
								<div class="list_1_right_2_inner clearfix">
									<div class="grid clearfix">

										<figure class="effect-ming">
											<img src="img/37.jpg" alt="img08"/>
											<figcaption>
												<h2>Tour <span>Travel</span></h2>
												<p> Lorem ipsum dolor sit amet adipiscing elit Integer nec odio.</p>
												<a href="detail.php">View more</a>						</figcaption>
										</figure>
									</div>
									<div class="list_1_right_2_inner_1 clearfix">
										<div class="col-sm-8">
											<h6>Lacinia Arcu Resort</h6>
											<p><span>$73.00</span> per/day</p>
										</div>
										<div class="col-sm-4">
											<h5><a href="detail.php">Book</a></h5>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 space_left">
								<div class="list_1_right_2_inner clearfix">
									<div class="grid clearfix">

										<figure class="effect-ming">
											<img src="img/38.jpg" alt="img08"/>
											<figcaption>
												<h2>Tour <span>Travel</span></h2>
												<p> Lorem ipsum dolor sit amet adipiscing elit Integer nec odio.</p>
												<a href="detail.php">View more</a>						</figcaption>
										</figure>
									</div>
									<div class="list_1_right_2_inner_1 clearfix">
										<div class="col-sm-8">
											<h6>Lacinia Arcu Resort</h6>
											<p><span>$83.00</span> per/day</p>
										</div>
										<div class="col-sm-4">
											<h5><a href="detail.php">Book</a></h5>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="list_1_right_2 clearfix">
							<div class="col-sm-4 space_left">
								<div class="list_1_right_2_inner clearfix">
									<div class="grid clearfix">

										<figure class="effect-ming">
											<img src="img/39.jpg" alt="img08"/>
											<figcaption>
												<h2>Tour <span>Travel</span></h2>
												<p> Lorem ipsum dolor sit amet adipiscing elit Integer nec odio.</p>
												<a href="detail.php">View more</a>						</figcaption>
										</figure>
									</div>
									<div class="list_1_right_2_inner_1 clearfix">
										<div class="col-sm-8">
											<h6>Lacinia Arcu Resort</h6>
											<p><span>$31.00</span> per/day</p>
										</div>
										<div class="col-sm-4">
											<h5><a href="detail.php">Book</a></h5>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 space_left">
								<div class="list_1_right_2_inner clearfix">
									<div class="grid clearfix">

										<figure class="effect-ming">
											<img src="img/40.jpg" alt="img08"/>
											<figcaption>
												<h2>Tour <span>Travel</span></h2>
												<p> Lorem ipsum dolor sit amet adipiscing elit Integer nec odio.</p>
												<a href="detail.php">View more</a>						</figcaption>
										</figure>
									</div>
									<div class="list_1_right_2_inner_1 clearfix">
										<div class="col-sm-8">
											<h6>Lacinia Arcu Resort</h6>
											<p><span>$39.00</span> per/day</p>
										</div>
										<div class="col-sm-4">
											<h5><a href="detail.php">Book</a></h5>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 space_left">
								<div class="list_1_right_2_inner clearfix">
									<div class="grid clearfix">

										<figure class="effect-ming">
											<img src="img/41.jpg" alt="img08"/>
											<figcaption>
												<h2>Tour <span>Travel</span></h2>
												<p> Lorem ipsum dolor sit amet adipiscing elit Integer nec odio.</p>
												<a href="detail.php">View more</a>						</figcaption>
										</figure>
									</div>
									<div class="list_1_right_2_inner_1 clearfix">
										<div class="col-sm-8">
											<h6>Lacinia Arcu Resort</h6>
											<p><span>$41.00</span> per/day</p>
										</div>
										<div class="col-sm-4">
											<h5><a href="detail.php">Book</a></h5>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="list_1_right_last clearfix text-right">
							<ul class="pagination">
								<li class="disabled"><a href="detail.php">«</a></li>
								<li class="active"><a href="detail.php">1 <span class="sr-only">(current)</span></a></li>
								<li><a href="detail.php">2</a></li>
								<li><a href="detail.php">3</a></li>
								<li><a href="detail.php">4</a></li>
								<li><a href="detail.php">5</a></li>
								<li><a href="detail.php">»</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="footer_page_2">
	<div class="container">
		<div class="row">
			<div class="footer_page_2 clearfix">
				<div class="col-sm-3">
					<div class="footer_page_2_inner">
						<h4>Social Network</h4>
						<ul class="social-network social-circle">
							<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
							<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
						<h5><a href="index.php"><i class="fa fa-tree"></i>Tour &amp; TRAVEL </a></h5>
						<p>© 2013 Your Website Name. All Rights Reserved | Design by <a href="http://www.templateonweb.com">TemplateOnWeb</a></p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="footer_page_2_inner_1">
						<h4>Journey Guides </h4>
						<p><i class="fa fa-chevron-circle-right"></i><a href="#">Sport Holidays</a></p>
						<p><i class="fa fa-chevron-circle-right"></i><a href="#">Ski Jumping</a></p>
						<p><i class="fa fa-chevron-circle-right"></i><a href="#">Disney Lands</a></p>
						<p><i class="fa fa-chevron-circle-right"></i><a href="#">Nature Park Holidays</a></p>
						<p><i class="fa fa-chevron-circle-right"></i><a href="#">Nature World Holidays</a></p>
						<p><i class="fa fa-chevron-circle-right"></i><a href="#">Holidays As Promotion</a></p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="footer_page_2_inner_1">
						<h4>Journey Guides </h4>
						<p><i class="fa fa-chevron-circle-right"></i><a href="#">Receptions</a></p>
						<p><i class="fa fa-chevron-circle-right"></i><a href="#">Tour &amp; Travel</a></p>
						<p><i class="fa fa-chevron-circle-right"></i><a href="#">Disney Lands</a></p>
						<p><i class="fa fa-chevron-circle-right"></i><a href="#">Sails</a></p>
						<p><i class="fa fa-chevron-circle-right"></i><a href="#">All Over the World</a></p>
						<p><i class="fa fa-chevron-circle-right"></i><a href="#">Gold Class Airways</a></p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="footer_page_2_inner_2 clearfix">
						<h4>Newsletter</h4>
						<div class="input-group clearfix">
							<input type="text" class="form-control" placeholder="Enter email">
							<span class="input-group-btn">
					<button class="btn btn-primary" type="button">
						<i class="fa fa-arrow-right"></i></button>
				</span>
						</div>
						<h4>Client support</h4>
						<h1>1-234-567-8900</h1>
						<p>info@gmail.com</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="footer_page_2_bottom">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="footer_page_2_bottom text-center clearfix">
					<ul>
						<li><a href="#">Homepage</a></li>
						<li><a href="#">About us</a></li>
						<li><a href="#">Last hour</a></li>
						<li><a href="#">Advance booking</a></li>
						<li><a href="#">Trending offers</a></li>
						<li><a href="#">Blogpost</a></li>
						<li class="border_none_1"><a href="#">Contact us</a></li>
					</ul>
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
