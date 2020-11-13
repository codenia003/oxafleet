<?php include "inc/header.php";
define( 'WP_USE_THEMES', false ); // Don't load theme support functionality
require( 'blog/wp-load.php' );

 ?>
<!-- banner -->
<section style="background: #ffffff;" class="w3pvt-banner" id="home">
	<div class="container">
		<div class="banner-text">
			<div class="row">
				<div class="col-md-6">
					<div class="welcome_to_the_oxa">
						<h1 style=" color: #000000; margin-top: 0; padding-top: 0; " class="hide_d">Welcome to the OXA <br> Help Centre</h1>
						<img style="width: 60%;" src="img/welcome-to-the-oxa.png">
						<h1 class="hide_m">Welcome to the OXA <br> Help Centre</h1>
						<div class="articles_help">
							<input class="form-control" type="text" placeholder="Search help articles" aria-label="Search">
						</div>
					</div>
				</div>
				<div class="col-md-6 hide_m">
					<div class="download_personalised">
						<h1>Download app for <br> personalised support</h1>
						<p>Get help with your booking, <br> account, and more. </p>
						<a href="https://play.google.com/store/apps/details?id=com.tempotruck.customer" class="btn btn-primary search_btn_section" target="_blank">Download App</a>
						<!-- <button type="submit" class="btn btn-primary search_btn_section">Download App</button> -->
					</div>
				</div>	
			</div>
		</div>
	</div>
</section>
<!-- <section class="pick-up-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="form-section">
					<h1>Moving? Book a truck.</h1>
					<p>Anywhere across india.</p>
					<form class="form_select_user" action="">
					<div class="seclect_area">
						<div class="form-group">
						  <select style="border-right: 2px solid #e6e6e6!important;" class="form-control" id="city">
						    <option>State</option>
						    <option>test</option>
						    <option>test</option>
						    <option>test</option>
						  </select>
						</div>
						<div class="form-group">
						  <select class="form-control" id="area">
						    <option>City</option>
						    <option>test</option>
						    <option>test</option>
						    <option>test</option>
						  </select>
						</div>
					</div>
				    <div class="form-group">
				      <input type="text" class="form-control" id="" placeholder="Pic up address" name="">
				    </div>
				    <div class="form-group">
				      <input type="text" class="form-control" id="" placeholder="Drop off address" name="">
				    </div>
				    <div class="form-group">
				      <input type="text" class="form-control" id="" placeholder="Drop off address" name="">
				    </div>
				    <button type="submit" class="btn btn-primary search_btn_section">Search on App</button>
				  </form>
				</div>
			</div>
			<div class="col-md-6">
				<div class="are_you_transportar">
					<p>Are you transportar</p>
					<div class="attach_your_truck">
						<div class="attach_your_truck_text">
							Attach your truck with OXA to <br> have a steady stream of trips <br> and increased income.
						</div>
						<div class="attach_your_truck_text2">
							Become a <br> Transportar
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<section class="popular_sections">
	<div class="container">
		<h1>Popular articles</h1>
		<div class="Popular_articles_content">
			<div class="row text-center">
				
				<?php 
					$args = array( 'post_status' => 'publish', 'posts_per_page' => '8');
					// $args = array( 'category_name'=>'support', 'post_status' => 'publish', 'posts_per_page' => '8');
					$recent_posts = new WP_Query($args);
					while( $recent_posts->have_posts() ) :  
					    $recent_posts->the_post() ?>
					    <div class="col-md-3">
								<div class="Popular_articles_section">
									<!-- <div class="icon_chate">
										<img src="img/icon_chate.png">
									</div> -->
									<div class="popular_articles">
										<h1>
											<img src="img/icon_chate.png"><?php the_title(); ?>
										</h1>
										<div class="content"><?php the_content(); ?></div>
										<a target="_blank" href="<?php echo get_permalink(); ?>">Read more ></a>
									</div>
								</div>
							</div>
					<?php endwhile; ?>
				<?php wp_reset_postdata(); # reset post data so that other queries/loops work ?>
				<!-- <div class="col-md-3">
					<div class="Popular_articles_section">
						<div class="icon_chate">
							<img src="img/icon_chate.png">
						</div>
						<div class="popular_articles">
							<h1>
								Everything You Need To <br>
								Know About Becoming <br>
								A Fleet Manager
							</h1>
							<p>
								Fleet management is <br>
								concerned with the <br>
								management of <br>
								commercial and...
							</p>
							<a href="#">Read more ></a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="Popular_articles_section">
						<div class="icon_chate">
							<img src="img/icon_chate.png">
						</div>
						<div class="popular_articles">
							<h1>
								Choosing The Correct <br>
								Logistics Partner Can <br>
								Take Your Start-up Up <br>
								A Notch
							</h1>
							<p>
								Do you own a start-up? <br>
								Are you looking for a <br>
								reliable logistics <br>
								partner?
							</p>
							<a href="#">Read more ></a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="Popular_articles_section">
						<div class="icon_chate">
							<img src="img/icon_chate.png">
						</div>
						<div class="popular_articles">
							<h1>
								Driver Feedback And <br>
								Ratings Can Help Your <br>
								Truck Driver Earn More
							</h1>
							<p>
								Have you ever wondered <br>
								what good does the <br>
								rating system hold when <br>
								it comes to increasing...
							</p>
							<a href="#">Read more ></a>
						</div>
					</div>
				</div>
				<div class="col-md-3 hidden-xs">
					<div class="Popular_articles_section">
						<div class="icon_chate">
							<img src="img/icon_chate.png">
						</div>
						<div class="popular_articles">
							<h1>
								Technology Can Help <br>
								You Enhance Your <br>
								Service Efficiency
							</h1>
							<p>
								Technology has a long- <br>
								lasting effect on our <br>
								lives. And the fleet <br>
								management sector.
							</p>
							<a href="#">Read more ></a>
						</div>
					</div>
				</div> -->
			</div>
		</div>
		<!-- <div class="Popular_articles_content hidden-xs">
			<div class="row text-center">
				<div class="col-md-3">
					<div class="Popular_articles_section">
						<div class="icon_chate">
							<img src="img/icon_chate.png">
						</div>
						<div class="popular_articles">
							<h1>
								Logistics In India 2019 — <br>
								Near Future Trends To <br>
								Watch Out For!
							</h1>
							<p>
								1. D2C Shipments The <br>
								quantum of Direct to <br>
								Consumer movements <br>
								and shipments will...
							</p>
							<a href="#">Read more ></a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="Popular_articles_section">
						<div class="icon_chate">
							<img src="img/icon_chate.png">
						</div>
						<div class="popular_articles">
							<h1>
								Emergency or Non- <br>
								Emergency Ambulance <br>
								Service, OXA App Is <br>
								The Solution
							</h1>
							<p>
								Do you need an <br>
								ambulance service in <br>
								Kolkata? Are you still <br>
								wondering if you...
							</p>
							<a href="#">Read more ></a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="Popular_articles_section">
						<div class="icon_chate">
							<img src="img/icon_chate.png">
						</div>
						<div class="popular_articles">
							<h1>
								How Mortuary Van <br>
								Service App can help <br>
								you most when you <br>
								don't know the roads?
							</h1>
							<p>
								Death is a very <br>
								disquieting situation in <br>
								itself. And when it takes <br>
								away a dear one...
							</p>
							<a href="#">Read more ></a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="Popular_articles_section">
						<div class="icon_chate">
							<img src="img/icon_chate.png">
						</div>
						<div class="popular_articles">
							<h1>
								Benefits Of Having A <br>
								Car Breakdown Service <br>
								App Such As OXA <br>
								Handy
							</h1>
							<p>
								Did your car breakdown <br>
								in the middle of the <br>
								road? Are you looking for <br>
								help but do not seem...
							</p>
							<a href="#">Read more ></a>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</section>
<a href="#"><img class="hide_d" src="img/bannernewtest.png"></a>
<section class="kind_of_help_sectionmain">
	<div class="container">
		<h1>Choose the kind of help you need</h1>
		<div class="kind_of_help_section">
			<div class="row">
				<div class="col-md-6">
					<div class="kind_of_help">
						<div class="kindofhelpimg">
							<a href="faq-customers">
								<img src="img/ilustracion_shipping_camion_lateral_big.png">
							</a>
						</div>
						<div class="kindofhelpcontent">
							<a href="faq-customers">
								<h1>Booking And Shipping</h1>
								<p>Get help booking a truck. Contacting your 
								driver and more.</p>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="kind_of_help">
						<div class="kindofhelpimg">
							<a href="faq-transporter">
								<img src="img/instagram.png">
							</a>
						</div>
						<div class="kindofhelpcontent">
							<a href="faq-transporter">
								<h1>Transporting</h1>
								<p>Answers for all your delivery questions,
									 how-to’s and more.
								</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="what_do_think">
	<div class="container text-center">
		<a href="faq-transporter">
			<img src="img/what_do_you_think.png">
		</a>
	</div>
</div>
<?php include "inc/footer.php"; ?>
