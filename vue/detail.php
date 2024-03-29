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
						<a href="#" class="dropdown-toggle  tag_menu" data-toggle="dropdown">Home <span class="badge indent0">7</span> <b class="caret"></b></a>

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
									<li><a href="list.php">Listing</a></li>
									<li><a href="detail.html">Listing Details</a></li>
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
						<a class="tag_menu" href="offers.php">Offers</a>                    </li>

					<li>
						<a class="tag_menu active_tab" href="detail.html">Detail</a>                    </li>

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
			<div class="detail clearfix">
				<div class="col-sm-8 space_all">
					<div class="detail_left clearfix">
						<div class="carousel slide article-slide clearfix" id="article-photo-carousel">

							<!-- Wrapper for slides -->
							<div class="carousel-inner cont-slider clearfix">

								<div class="item active">
									<img alt="" title="" src="img/42.jpg" width="100%">
								</div>
								<div class="item">
									<img alt="" title="" src="img/43.jpg" width="100%">
								</div>
								<div class="item">
									<img alt="" title="" src="img/44.jpg" width="100%">
								</div>
								<div class="item">
									<img alt="" title="" src="img/45.jpg" width="100%">
								</div>
							</div>
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li class="" data-slide-to="0" data-target="#article-photo-carousel">
									<img alt="" src="img/46.jpg">    </li>
								<li class="active" data-slide-to="1" data-target="#article-photo-carousel">
									<img alt="" src="img/47.jpg">    </li>
								<li class="" data-slide-to="2" data-target="#article-photo-carousel">
									<img alt="" src="img/48.jpg">    </li>
								<li class="" data-slide-to="3" data-target="#article-photo-carousel">
									<img alt="" src="img/49.jpg">    </li>
							</ol>
						</div>
					</div>
				</div>
				<div class="col-sm-4 space_all">
					<div class="detail_right clearfix">
						<div class="detail_right_inner clearfix">
							<h4>Lacinia Arcu Resort</h4>
							<h6>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</h6>
						</div>
						<div class="detail_right_inner_1 clearfix">
							<h3>Beautiful!</h3>
						</div>
						<div class="detail_right_inner_2 clearfix">
							<div class="col-sm-6">
								<div class="detail_right_inner_2_left text-center">
									<h3>87%</h3>
									<p>of people <br> Preferences</p>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="detail_right_inner_2_left border_none_1 text-center">
									<h3>4.3<span>/5</span></h3>
									<p>people ratings</p>
								</div>
							</div>
						</div>
						<div class="detail_right_inner_3 clearfix">
							<div class="col-sm-6">
								<div class="detail_right_inner_3_left text-center">
									<h6><i class="fa fa-comment"></i></h6>
									<p>38 comments</p>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="detail_right_inner_3_left text-center">
									<p><a href="#">+Add comment</a></p>
								</div>
							</div>
						</div>
						<div class="detail_right_inner_4 clearfix">
							<h5 class="heading_2"><a href="#"><i class="fa fa-plus"></i>ADD TO CART</a></h5>
							<h5 class="heading_1"><a href="#"><i class="fa fa-check"></i>BOOKING OPEN</a></h5>
						</div>

					</div>
				</div>
			</div>
			<div class="detail_1 clearfix">
				<div class="col-sm-8 space_left">
					<div class="detail_1_left clearfix">


						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-info"></i> About</a></li>
							<li><a data-toggle="tab" href="#menu1"><i class="fa fa-rupee"></i> Hotel price</a></li>
							<li><a data-toggle="tab" href="#menu2"><i class="fa fa-edit"></i> Popular</a></li>
							<li><a data-toggle="tab" href="#menu3"><i class="fa fa-map"></i> Maps</a></li>
							<li><a data-toggle="tab" href="#menu4"><i class="fa fa-smile-o"></i> Comments</a></li>
							<li><a data-toggle="tab" href="#menu5"><i class="fa fa-gear"></i> Works to do</a></li>
						</ul>

						<div class="tab-content clearfix">
							<div id="home" class="tab-pane fade in active clearfix">
								<div class="click clearfix">
									<div class="col-sm-12 tab_main">
										<div class="home_tab_inner clearfix">
											<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
										</div>
									</div>
									<div class="col-sm-12 tab_main">
										<div class="panel-group" id="accordion">
											<div class="home_tab_inner clearfix">
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="">Libero <i class="fa fa-caret-down pull-right"></i></a>
														</h4>
													</div>
													<div id="collapse1" class="panel-collapse collapse in" style="height: auto;">
														<div class="panel-body"><p>Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitursodales ligula in libero.Sed dignissim lacinia nunc.</p></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-12 tab_main">
										<div class="panel-group" id="accordion">
											<div class="home_tab_inner clearfix">
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="">Hotels <i class="fa fa-caret-down pull-right"></i></a>
														</h4>
													</div>
													<div id="collapse2" class="panel-collapse collapse in" style="height: auto;">
														<div class="panel-body"><p> Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-12 tab_main">
										<div class="panel-group" id="accordion">
											<div class="home_tab_inner clearfix">
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="">Internet <i class="fa fa-caret-down pull-right"></i></a>
														</h4>
													</div>
													<div id="collapse3" class="panel-collapse collapse in" style="height: auto;">
														<div class="panel-body"><p>Available</p></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-12 tab_main">
										<div class="panel-group" id="accordion">
											<div class="home_tab_inner clearfix">
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="">Room Service <i class="fa fa-caret-down pull-right"></i></a>
														</h4>
													</div>
													<div id="collapse4" class="panel-collapse collapse in" style="height: auto;">
														<div class="panel-body"><p>Available</p></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-12 tab_main">
										<div class="panel-group" id="accordion">
											<div class="home_tab_inner clearfix">
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="">Parking Space <i class="fa fa-caret-down pull-right"></i></a>
														</h4>
													</div>
													<div id="collapse5" class="panel-collapse collapse in" style="height: auto;">
														<div class="panel-body"><p>Available</p></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-12 tab_main">
										<div class="panel-group" id="accordion">
											<div class="home_tab_inner clearfix">
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="">Hotel Comforts <i class="fa fa-caret-down pull-right"></i></a>
														</h4>
													</div>
													<div id="collapse6" class="panel-collapse collapse in" style="height: auto;">
														<div class="panel-body">
															<div class="col-sm-4">
																<div class="panel_inner clearfix">
																	<p><i class="fa fa-check"></i>Control room</p>
																	<p><i class="fa fa-check"></i>A/C</p>
																	<p><i class="fa fa-check"></i>Phone service</p>
																	<p><i class="fa fa-check"></i>Bar</p>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="panel_inner clearfix">
																	<p><i class="fa fa-check"></i>Morning calls</p>
																	<p><i class="fa fa-check"></i>Daily roomservice</p>
																	<p><i class="fa fa-check"></i>Attached bathroom</p>
																	<p><i class="fa fa-check"></i>Hair saloon</p>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="panel_inner clearfix">
																	<p><i class="fa fa-check"></i>Makeup room</p>
																	<p><i class="fa fa-check"></i>Bathing tub</p>
																	<p><i class="fa fa-check"></i>Television</p>
																	<p><i class="fa fa-check"></i>Electronic items</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="menu1" class="tab-pane fade clearfix">
								<div class="click tab_main clearfix">
									<div class="menu1_inner_tab clearfix">
										<div class="menu1_inner_tab_inner clearfix">
											<p>Your tour price</p>
										</div>
										<div class="menu1_inner_tab_inner_1 clearfix">
											<div class="col-sm-6 space_left">
												<div class="clearfix">
													<div class="col-sm-4 space_left">
														<div class="menu1_inner_tab_inner_1_form clearfix">
															<div class="tab_inner_1_inner clearfix">
																<p>Start date</p>
																<input class="form-control" id="cal_1" placeholder="mm/dd/yyyy" type="text">
															</div>
														</div>
													</div>
													<div class="col-sm-4 space_left">
														<div class="menu1_inner_tab_inner_1_form clearfix">
															<div class="tab_inner_1_inner clearfix">
																<p>End date</p>
																<input class="form-control" id="cal_2" placeholder="mm/dd/yyyy" type="text">
															</div>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="tab_inner_1_inner clearfix">
															<p>HOTEL 3</p>
															<h6><a href="#">+ Book room</a></h6>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-6 space_left">
												<div class="col-sm-4 space_left">
													<div class="tab_inner_1_inner_1_inner clearfix">
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
												</div>
												<div class="col-sm-4 space_left">
													<div class="tab_inner_1_inner_1_inner clearfix">
														<p>kids</p>
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
												<div class="col-sm-4 space_left">
													<div class="menu1_inner_tab_inner_1_button text-center clerfix">
														<p><a href="#">LATEST</a></p>
													</div>
												</div>
											</div>
										</div>
										<div class="menu1_inner_tab_inner clearfix">
											<p class="para_1">Hotel type</p>
										</div>
									</div>
									<div class="menu1_inner_tab_1 clearfix">
										<div class="col-sm-4">
											<div class="menu1_inner_tab_1_left clearfix">
												<a href="#"><img src="img/50.jpg" width="100%" height="150px"></a>
											</div>
										</div>
										<div class="col-sm-5">
											<div class="menu1_inner_tab_1_middle clearfix">
												<h4>High Quality room</h4>
												<p>Max Available: 3 peoples</p>
												<h5>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</h5>
												<h6><i class="fa fa-check"></i> Cancellation free</h6>
												<h6><i class="fa fa-check"></i> Payment options</h6>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="menu1_inner_tab_1_right text-center clearfix">
												<h3>$39.31</h3>
												<h6>per/day</h6>
												<h5>7 left</h5>
												<h4><a href="#">BOOK</a></h4>
											</div>
										</div>
									</div>
									<div class="menu1_inner_tab_1 clearfix">
										<div class="col-sm-4">
											<div class="menu1_inner_tab_1_left clearfix">
												<a href="#"><img src="img/51.jpg" width="100%" height="150px"></a>
											</div>
										</div>
										<div class="col-sm-5">
											<div class="menu1_inner_tab_1_middle clearfix">
												<h4>Another Room with Valley View</h4>
												<p>Max Available: 5 peoples</p>
												<h5>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</h5>
												<h6><i class="fa fa-check"></i> Cancellation free</h6>
												<h6><i class="fa fa-check"></i> Payment options</h6>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="menu1_inner_tab_1_right text-center clearfix">
												<h3>$59.41</h3>
												<h6>per/day</h6>
												<h5>2 left</h5>
												<h4><a href="#">BOOK</a></h4>
											</div>
										</div>
									</div>
									<div class="menu1_inner_tab_1 clearfix">
										<div class="col-sm-4">
											<div class="menu1_inner_tab_1_left clearfix">
												<a href="#"><img src="img/52.jpg" width="100%" height="150px"></a>
											</div>
										</div>
										<div class="col-sm-5">
											<div class="menu1_inner_tab_1_middle clearfix">
												<h4>For Family</h4>
												<p>Max Available: 7 peoples</p>
												<h5>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</h5>
												<h6><i class="fa fa-check"></i> Cancellation free</h6>
												<h6><i class="fa fa-check"></i>  Payment options</h6>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="menu1_inner_tab_1_right text-center clearfix">
												<h3>$29.91</h3>
												<h6>per/day</h6>
												<h5>9 left</h5>
												<h4><a href="#">BOOK</a></h4>
											</div>
										</div>
									</div>
									<div class="menu1_inner_tab_1 clearfix">
										<div class="col-sm-4">
											<div class="menu1_inner_tab_1_left clearfix">
												<a href="#"><img src="img/53.jpg" width="100%" height="150px"></a>
											</div>
										</div>
										<div class="col-sm-5">
											<div class="menu1_inner_tab_1_middle clearfix">
												<h4>Great Sea View</h4>
												<p>Max Available: 3 peoples</p>
												<h5>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</h5>
												<h6><i class="fa fa-check"></i> Cancellation free</h6>
												<h6><i class="fa fa-check"></i> Payment options</h6>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="menu1_inner_tab_1_right text-center clearfix">
												<h3>$42.21</h3>
												<h6>per/day</h6>
												<h5>5 left</h5>
												<h4><a href="#">BOOK</a></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="menu2" class="tab-pane fade clearfix">
								<div class="click clearfix">
									<div class="col-sm-12 tab_main">
										<div class="home_tab_inner clearfix">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
										</div>
									</div>
									<div class="col-sm-12 tab_main">
										<div class="panel-group" id="accordion">
											<div class="home_tab_inner clearfix">
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="">Hotel Qualities <i class="fa fa-caret-down pull-right"></i></a>
														</h4>
													</div>
													<div id="collapse6" class="panel-collapse collapse in" style="height: auto;">
														<div class="panel-body">
															<div class="col-sm-4">
																<div class="panel_inner clearfix">
																	<p><i class="fa fa-check"></i>Internet available</p>
																	<p><i class="fa fa-check"></i>A/C</p>
																	<p><i class="fa fa-check"></i>Water park</p>
																	<p><i class="fa fa-check"></i>For child</p>
																	<p><i class="fa fa-check"></i>Fitness gym</p>
																	<p><i class="fa fa-check"></i>Free Dinner</p>
																	<p><i class="fa fa-check"></i>Parking space</p>
																	<p><i class="fa fa-check"></i>Pets care</p>
																	<p><i class="fa fa-check"></i>Massage services</p>
																	<p><i class="fa fa-check"></i>Hair saloon</p>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="panel_inner clearfix">
																	<p><i class="fa fa-check"></i>Beautiful garden</p>
																	<p><i class="fa fa-check"></i>Picnic spot</p>
																	<p><i class="fa fa-check"></i>Food stuff</p>
																	<p><i class="fa fa-check"></i>Bar room</p>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="panel_inner clearfix">
																	<p><i class="fa fa-check"></i>Welcome at reception</p>
																	<p><i class="fa fa-check"></i>Cricket ground</p>
																	<p><i class="fa fa-check"></i>Club area</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-12 tab_main">
										<div class="panel-group" id="accordion">
											<div class="home_tab_inner clearfix">
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="">Room Qualities <i class="fa fa-caret-down pull-right"></i></a>
														</h4>
													</div>
													<div id="collapse6" class="panel-collapse collapse in" style="height: auto;">
														<div class="panel-body">
															<div class="col-sm-4">
																<div class="panel_inner clearfix">
																	<p><i class="fa fa-check"></i>Control room</p>
																	<p><i class="fa fa-check"></i>A/C</p>
																	<p><i class="fa fa-check"></i>Phone service</p>
																	<p><i class="fa fa-check"></i>Bar</p>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="panel_inner clearfix">
																	<p><i class="fa fa-check"></i>Morning calls</p>
																	<p><i class="fa fa-check"></i>Daily roomservice</p>
																	<p><i class="fa fa-check"></i>Attached bathroom</p>
																	<p><i class="fa fa-check"></i>Hair saloon</p>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="panel_inner clearfix">
																	<p><i class="fa fa-check"></i>Makeup room</p>
																	<p><i class="fa fa-check"></i>Bathing tub</p>
																	<p><i class="fa fa-check"></i>Television</p>
																	<p><i class="fa fa-check"></i>Electronic items</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="menu3" class="tab-pane fade clearfix">
								<div class="click clearfix">
									<div class="menu3_inner_tab clearfix">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.53925916665!2d-80.29949920266738!3d25.782390733064336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C+FL%2C+USA!5e0!3m2!1sen!2sin!4v1530774403788" width="100%" height="900px" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
							<div id="menu4" class="tab-pane fade clearfix">
								<div class="click tab_main clearfix">
									<div class="menu4_tab_inner clearfix">
										<div class="well well-sm">
											<div class="row">
												<div class="col-sm-6">
													<h1 class="rating-num">
														4.5</h1>
													<div class="rating">
														<span class="fa fa-star"></span><span class="fa fa-star">
                            </span><span class="fa fa-star"></span><span class="fa fa-star">
                            </span><span class="fa fa-star-half-o"></span>
													</div>
													<div>
														<span class="fa fa-user"></span>1,234,009 full
													</div>
												</div>
												<div class="col-sm-6">
													<div class="row rating-desc">
														<div class="col-xs-3 col-sm-3 text-right">
															<span class="fa fa-star"></span>5
														</div>
														<div class="col-xs-8 col-sm-9">
															<div class="progress progress-striped">
																<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
																	<span class="sr-only">90%</span>
																</div>
															</div>
														</div>
														<!-- end 5 -->
														<div class="col-xs-3 col-sm-3 text-right">
															<span class="fa fa-star"></span>4
														</div>
														<div class="col-xs-8 col-sm-9">
															<div class="progress">
																<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
																	<span class="sr-only">70%</span>
																</div>
															</div>
														</div>
														<!-- end 4 -->
														<div class="col-xs-3 col-sm-3 text-right">
															<span class="fa fa-star"></span>3
														</div>
														<div class="col-xs-8 col-sm-9">
															<div class="progress">
																<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
																	<span class="sr-only">50%</span>
																</div>
															</div>
														</div>
														<!-- end 3 -->
														<div class="col-xs-3 col-sm-3 text-right">
															<span class="fa fa-star"></span>2
														</div>
														<div class="col-xs-8 col-sm-9">
															<div class="progress">
																<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
																	<span class="sr-only">30%</span>
																</div>
															</div>
														</div>
														<!-- end 2 -->
														<div class="col-xs-3 col-sm-3 text-right">
															<span class="fa fa-star"></span>1
														</div>
														<div class="col-xs-8 col-sm-9">
															<div class="progress">
																<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
																	<span class="sr-only">10%</span>
																</div>
															</div>
														</div>
														<!-- end 1 -->
													</div>
													<!-- end row -->
												</div>
											</div>
										</div>
									</div>
									<div class="menu4_tab_inner_1 clearfix">
										<div class="well">
											<h1 class="text-center">Voting is open now</h1>
											<div class="list-group">
												<a href="#" class="list-group-item active">
													<div class="media col-sm-3">
														<figure class="pull-left">
															<img class="media-object img-rounded img-responsive" src="img/55.jpg" alt="placehold.it/350x250">
														</figure>
													</div>
													<div class="col-sm-6">
														<h4 class="list-group-item-heading"> Hotel world detail </h4>
														<p class="list-group-item-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitursodales ligula in libero.Sed dignissim lacinia nunc.
														</p>
													</div>
													<div class="col-sm-3 text-center">
														<h2> 16360 <small> votes </small></h2>
														<button type="button" class="btn btn-default btn-lg btn-block"> Vote Now! </button>
														<div class="stars">
															<span class="glyphicon glyphicon-star"></span>
															<span class="glyphicon glyphicon-star"></span>
															<span class="glyphicon glyphicon-star"></span>
															<span class="glyphicon glyphicon-star"></span>
															<span class="glyphicon glyphicon-star-empty"></span>
														</div>
														<p> Average 4.7 <small> / </small> 5 </p>
													</div>
												</a>
												<a href="#" class="list-group-item">
													<div class="media col-sm-3">
														<figure class="pull-left">
															<img class="media-object img-rounded img-responsive" src="img/56.jpg" alt="placehold.it/350x250">
														</figure>
													</div>
													<div class="col-sm-6">
														<h4 class="list-group-item-heading"> Hotel world detail </h4>
														<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitursodales ligula in libero.Sed dignissim lacinia nunc.                    </p>
													</div>
													<div class="col-sm-3 text-center">
														<h2> 11534 <small> votes </small></h2>
														<button type="button" class="btn btn-primary btn-lg btn-block">Vote Now!</button>
														<div class="stars">
															<span class="glyphicon glyphicon-star"></span>
															<span class="glyphicon glyphicon-star"></span>
															<span class="glyphicon glyphicon-star"></span>
															<span class="glyphicon glyphicon-star"></span>
															<span class="glyphicon glyphicon-star-empty"></span>
														</div>
														<p> Average 3.7 <small> / </small> 5 </p>
													</div>
												</a>
												<a href="#" class="list-group-item">
													<div class="media col-sm-3">
														<figure class="pull-left">
															<img class="media-object img-rounded img-responsive" src="img/57.jpg" alt="placehold.it/350x250">
														</figure>
													</div>
													<div class="col-sm-6">
														<h4 class="list-group-item-heading"> Hotel world detail </h4>
														<p class="list-group-item-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitursodales ligula in libero.Sed dignissim lacinia nunc.
														</p>
													</div>
													<div class="col-sm-3 text-center">
														<h2> 12570 <small> votes </small></h2>
														<button type="button" class="btn btn-primary btn-lg btn-block">Vote Now!</button>
														<div class="stars">
															<span class="glyphicon glyphicon-star"></span>
															<span class="glyphicon glyphicon-star"></span>
															<span class="glyphicon glyphicon-star"></span>
															<span class="glyphicon glyphicon-star"></span>
															<span class="glyphicon glyphicon-star-empty"></span>
														</div>
														<p> Average 4.3 <small> / </small> 5 </p>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="menu5" class="tab-pane fade clearfix">
								<div class="click tab_main clearfix">
									<div class="menu1_inner_tab clearfix">
										<div class="menu1_inner_tab_inner clearfix">
											<p>Attractive guides available</p>
										</div>
									</div>
									<div class="menu1_inner_tab_1 clearfix">
										<div class="col-sm-4">
											<div class="menu1_inner_tab_1_left clearfix">
												<a href="#"><img src="img/58.jpg" width="100%" height="150px"></a>
											</div>
										</div>
										<div class="col-sm-5">
											<div class="menu1_inner_tab_1_middle clearfix">
												<h4>Dapibus Diam Beach</h4>
												<p><span>“Wow!!!”</span> 07/17/2017</p>
												<p> Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos Sed dignissim lacinia nunc.</p>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="menu1_inner_tab_1_right text-center clearfix">
												<h3><i class="fa fa-comment"></i></h3>
												<h6>21 comments </h6>
												<h4><a href="#">More</a></h4>
											</div>
										</div>
									</div>
									<div class="menu1_inner_tab_1 clearfix">
										<div class="col-sm-4">
											<div class="menu1_inner_tab_1_left clearfix">
												<a href="#"><img src="img/59.jpg" width="100%" height="150px"></a>
											</div>
										</div>
										<div class="col-sm-5">
											<div class="menu1_inner_tab_1_middle clearfix">
												<h4>Elementum Imperdiet Island</h4>
												<p><span>“Awesome”</span> 07/17/2017</p>
												<p>Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos Sed dignissim lacinia nunc.</p>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="menu1_inner_tab_1_right text-center clearfix">
												<h3><i class="fa fa-comment"></i></h3>
												<h6>37 comments </h6>
												<h4><a href="#">More</a></h4>
											</div>
										</div>
									</div>
									<div class="menu1_inner_tab_1 clearfix">
										<div class="col-sm-4">
											<div class="menu1_inner_tab_1_left clearfix">
												<a href="#"><img src="img/60.jpg" width="100%" height="150px"></a>
											</div>
										</div>
										<div class="col-sm-5">
											<div class="menu1_inner_tab_1_middle clearfix">
												<h4>Litora Torquent Beach</h4>
												<p><span>“This is the best island”</span> 07/17/2017</p>
												<p>Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos Sed dignissim lacinia nunc.</p>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="menu1_inner_tab_1_right text-center clearfix">
												<h3><i class="fa fa-comment"></i></h3>
												<h6>17 comments </h6>
												<h4><a href="#">More</a></h4>
											</div>
										</div>
									</div>
									<div class="menu1_inner_tab_1 clearfix">
										<div class="col-sm-4">
											<div class="menu1_inner_tab_1_left clearfix">
												<a href="#"><img src="img/61.jpg" width="100%" height="150px"></a>
											</div>
										</div>
										<div class="col-sm-5">
											<div class="menu1_inner_tab_1_middle clearfix">
												<h4>Black Islands</h4>
												<p><span>“Beautiful”</span> 07/17/2017</p>
												<p>Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos Sed dignissim lacinia nunc.</p>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="menu1_inner_tab_1_right text-center clearfix">
												<h3><i class="fa fa-comment"></i></h3>
												<h6>46 comments </h6>
												<h4><a href="#">More</a></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="col-sm-4 space_right">
					<div class="detail_1_right clearfix">
						<div class="detail_1_right_inner clearfix">
							<p>
								<i class="fa fa-quote-left"></i>  Per inceptos himenaeos curabitursodales ligula in libero sed dignissim lacinia nunc.</p>
							<h6>by Semper from Australia</h6>
						</div>
						<div class="detail_1_right_inner_1 clearfix">
							<h3><i class="fa fa-phone"></i> Require Help?</h3>
							<p>Fusce nec tellus sed augue semper porta Mauris massa Vestibulum lacinia arcu eget nulla</p>
							<h2>1-234-567-8910</h2>
						</div>
						<div class="detail_1_right_inner_2 clearfix">
							<h3><i class="fa fa-map-marker"></i> More For You</h3>
							<div class="detail_1_right_inner_2_inner clearfix">
								<div class="col-sm-5">
									<div class="detail_1_right_inner_2_inner_left">
										<a href="#"><img src="img/62.jpg" width="100%"></a>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="detail_1_right_inner_2_inner_right">
										<h5><a href="#">Resort Himenaeos</a></h5>
										<p><span>$41-$180</span> per/day</p>
										<h6>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</h6>
									</div>
								</div>
							</div>
							<div class="detail_1_right_inner_2_inner clearfix">
								<div class="col-sm-5">
									<div class="detail_1_right_inner_2_inner_left">
										<a href="#"><img src="img/63.jpg" width="100%"></a>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="detail_1_right_inner_2_inner_right">
										<h5><a href="#">Resort Himenaeos</a></h5>
										<p><span>$41-$180</span> per/day</p>
										<h6>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</h6>
									</div>
								</div>
							</div>
							<div class="detail_1_right_inner_2_inner clearfix">
								<div class="col-sm-5">
									<div class="detail_1_right_inner_2_inner_left">
										<a href="#"><img src="img/64.jpg" width="100%"></a>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="detail_1_right_inner_2_inner_right">
										<h5><a href="#">Resort Himenaeos</a></h5>
										<p><span>$41-$180</span> per/day</p>
										<h6>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</h6>
									</div>
								</div>
							</div>
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
