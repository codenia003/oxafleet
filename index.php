<?php include "inc/header.php"; ?>
<!-- banner -->
<section class="banner w3pvt-banner mobile-home" id="home">
	<div class="container">
		<div class="banner-text hide_d">
			<div class="banner-info">
				<div class="join_exclusive home_page_banner_text">
					<h2>Delivery Made <br> Simple.</h2>
					<p>
						Move anything <br> across India.
					</p>
				</div>
			</div>
		</div>
		<div class="googleplayicon hide_m hide">
			<div class="googleplay2 hide_m">
                <a href="https://play.google.com/store/apps/details?id=com.tempotruck.customer" target="_blank">   
                    <img src="img/googleplay.png">
                </a>
            </div>
		</div>
	</div>
</section>
<section class="pick-up-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="form-section">
					<h1 class="hide_m">Delivery Made Simple.</h1>
					<p class="hide_m">Anywhere across india.</p>
					<form class="form_select_user" action="">
						<input type="hidden" id="site_url" value="<?php echo DOMAIN; ?>">
						<input type="hidden" id="app_url" value="https://play.google.com/store/apps/details?id=com.tempotruck.customer">
						<div class="seclect_area">
							<div class="form-group">
								<select name="stateOxafleet" onchange="getCity(this.value);" id="stateOxafleet" class="form-control" style="height: 45px;">
									<option>Select State</option>
	                            </select>
	                            <div id="stateOxafleet-error" class="invalid-feedback">Please select state.</div>
							</div>
							<div class="form-group">
							  	<select name="cityHome" id="cityHome" class="form-control" style="height: 45px;">
									<option>Select City</option>
	                           	</select>
							</div>
						</div>
					    <div class="form-group">
					     	<input type="text" class="form-control" placeholder="Name" id="nameHome">
					     	<div id="nameHome-error" class="invalid-feedback">Please enter your name.</div>
					    </div>
					    <div class="form-group">
					      	<input type="text" class="form-control" placeholder="Email" id="emailHome">
					      	<div id="emailHome-error" class="invalid-feedback">Please enter valid email.</div>
					    </div> 
					    <div class="form-group">
					      <input type="text" class="form-control" placeholder="Mobile Number" id="phoneHome" >
					      <div id="phoneHome-error" class="invalid-feedback">Please enter your phone.</div>
					    </div>
					   <!--  <div class="form-group">
					      <input type="text" class="form-control" placeholder="Drop off address" name="">
					    </div> -->
					    <input type="button" class="btn btn-primary search_btn_section" id="submitHome" value="Search on App">
                        <p id="sussHome" style="display:none;color: green; font-weight: bold;">Succesfully send</p>
					    <!-- <button type="submit" class="btn btn-primary search_btn_section">Search on App</button> -->
				  	</form>
				</div>
			</div>
			<div class="col-md-6">
				<div class="are_you_transportar">
					<p>Are you a transporter?</p>
					<div class="attach_your_truck">
						<div class="attach_your_truck_text">
							Attach your truck with OXA to <br> have a steady stream of trips <br> and increased income.
						</div>
						<div class="attach_your_truck_text2">
							<a class="hide_m" href="https://play.google.com/store/apps/details?id=com.tempotruck.driver">Become a <br> Transporter</a>
							<a class="hide_d" href="https://play.google.com/store/apps/details?id=com.tempotruck.driver"><img src="img/arrow-right-iconnew.png"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="how_we_make_it">
	<div class="container">
		<h1 class="hide_m">How it works?</h1>
		<h1 class="hide_d">How we make it work</h1>
		<div class="how_we_make_it_content">
			<div class="row text-center">
				<div class="col-md-3">
					<div class="how_we_make_it_text">
						<img src="img/howwemake1.jpg">
						<h4>Enter Location </h4>
						<h3>
							List your pick-up and <br> drop location 
						</h3>
					</div>
				</div>
				<div class="col-md-3">
					<div class="how_we_make_it_text">
						<img src="img/howwemake2.jpg">
						<h4>Receive Quotes </h4>
						<h3>Get competitive quotes <br> from  service providers </h3>
					</div>
				</div>
				<div class="col-md-3">
					<div class="how_we_make_it_text">
						<img src="img/howwemake3.jpg">
						<h4>Choose Bid </h4>
						<h3>Compare quotes. <br> Deliver instantly </h3>
					</div>
				</div>
				<div class="col-md-3">
					<div class="how_we_make_it_text">
						<img src="img/howwemake4.jpg">
						<h4>Easy Pay </h4>
						<h3>Pay via wallets, bank  <br> transfers, cash on delivery </h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="exploreoxa_vehicles_mobile hide">
	<div class="container">
	  	<h1>Explore OXA Vehicles</h1>
	  	<div class="nav nav-tabs exploreoxa_vehicles_mobile customer-logos slider">
	  		<div class="slide">
	      		<div class="exploreOxaselection active">
		        	<a data-toggle="tab" href="#truck_oxa">
			        	<div class="truck_section">
			        		<img src="img/truck.png">
			        	</div>
			        	<h4>Truck</h4>
			        </a>
		        </div>
	      	</div>
	      	<div class="slide">
	      		<div class="exploreOxaselection">
		        	<a data-toggle="tab" href="#cab_oxa">
		        		<div class="truck_section">
				        	<img src="img/cab.png">
				        </div>
			        	<h4>Cab</h4>
			        </a>
		        </div>
	      	</div>
	      	<div class="slide">
	      		<div class="exploreOxaselection">
		        	<a data-toggle="tab" href="#ambulance_oxa">
		        		<div class="truck_section">
				        	<img src="img/ambulance.png">
				        </div>
			        	<h4>Ambulance</h4>
			        </a>
		        </div>
	      	</div>
	      	<div class="slide">
	      		<div class="exploreOxaselection">
		        	<a data-toggle="tab" href="#breakdown_oxa">
		        		<div class="truck_section">
			        		<img src="img/breakdown.png">
			        	</div>
		        		<h4>Breakdown</h4>
		        	</a>
		        </div>
	      	</div>
	      	<div class="slide">
	      		<div class="exploreOxaselection">
		        	<a data-toggle="tab" href="#mortuary_oxa">
		        		<div class="truck_section">
			        		<img src="img/mortuary.png">
			        	</div>
		        		<h4>Mortuary</h4>
		        	</a>
		        </div>
	      	</div>
	      	<div class="slide">
	      		<div class="exploreOxaselection" style="margin-right: 0px;">
		        	<a data-toggle="tab" href="#container_oxa">
		        		<div class="truck_section">
			        		<img src="img/container.png">
			        	</div>
		        		<h4>Container</h4>
		        	</a>
	        	</div>
	      	</div>
	   </div>
	</div>
	<div class="container">
		<div class="tab-content">
	        <div id="truck_oxa" class="tab-pane active">
	        	<div class="">
					<h1>How it works?</h1>
					<div class="how_we_make_it_content how_we_make_it_content_m">
						<div class="row text-center">
							<div class="col-md-3">
								<div class="how_we_make_it_text">
									<img src="img/howwemake1.jpg">
									<h4>Step 1</h4>
									<h3>
										Add your location (Anywhere in India)​ 
										for availability and pricing
									</h3>
								</div>
							</div>
							<div class="col-md-3">
								<div class="how_we_make_it_text">
									<img src="img/howwemake2.jpg">
									<h4>Step 2</h4>
									<h3>Get free quotes from multiple service providers within 5-10 minutes</h3>
								</div>
							</div>
							<div class="col-md-3">
								<div class="how_we_make_it_text">
									<img src="img/howwemake3.jpg">
									<h4>Step 3</h4>
									<h3>Compare quotes & ratings; Hire the best trucker near you and move easily</h3>
								</div>
							</div>
							<div class="col-md-3">
								<div class="how_we_make_it_text">
									<img src="img/howwemake4.jpg">
									<h4>Step 4</h4>
									<h3>Pay online or COD without any hassles </h3>
								</div>
							</div>
						</div>
					</div>
				</div>
	        </div>
	        <div id="cab_oxa" class="tab-pane">
	            <h3>cab</h3>
	        </div>
	        <div id="ambulance_oxa" class="tab-pane">
	            <h3>Ambulance</h3>
	        </div>
	        <div id="breakdown_oxa" class="tab-pane">
	            <h3>breakdown</h3>
	        </div>
	        <div id="mortuary_oxa" class="tab-pane">
	            <h3>mortuary</h3>
	        </div>
	        <div id="container_oxa" class="tab-pane">
	            <h3>container</h3>
	        </div>
	    </div>
	</div>
</section>
<section style="display: none;" class="whats_our_users_are">
	<div class="container">
		<h1>What our users say</h1>
		<div class="whats_user_content">
			<div class="row">
				<div class="col-md-6">
					<div class="whats_user_text">
						<img src="img/testiminials_img.png">
						<div class="ratting">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div>
						<div class="reviews_text">
							<p>
								Fantastic! It’s like Uber but for pickup trucks to help move stuff across town.
							</p>
						</div>
						<div class="users_name">
							<p><b>Arun Kandoi</b> (Barasat) </p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="whats_user_text">
						<img src="img/testiminials_img.png">
						<div class="ratting">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div>
						<div class="reviews_text">
							<p>
								“I can simply tap a button and get things picked up and delivered. What's more, OXA's, 1-Click Insurance and Live Tracking feature gives me peace. UN-FREAKIN-BELIEVABLE!!!"

							</p>
						</div>
						<div class="users_name">
							<p><b>Harsh Bansal</b> (Kolkata)</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="whats_user_text">
						<img src="img/testiminials_img.png">
						<div class="ratting">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div>
						<div class="reviews_text">
							<p>
								“My transporter cancelled. So I tried booking a Tata 407 on OXA app. Received multiple quotations within 5-10 mins. Booked a truck. It arrived within the hour. Saved the day!”
							</p>
						</div>
						<div class="users_name">
							<p><b>Samaira Sehgal</b> (Rajarhat, New Town)</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 hide_m">
					<div class="whats_user_text">
						<img src="img/testiminials_img.png">
						<div class="ratting">
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div>
						<div class="reviews_text">
							<p>
								"I hired 2 big trucks for transporting to Bihar. The trucks came to my factory. Just like UBER. They have a competitive bidding system. No middlemen either. So, got a cheaper freight."
							</p>
						</div>
						<div class="users_name">
							<p><b>Akash Pradhan </b> (Howrah) </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="whats_our_users_are hide">
	<div class="container">
		<h1>What our users say</h1>
	  	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox">
		        <div class="item active">
		            <div class="row">
		                <div class="col-md-6">
		                    <div class="testiminials_content_new">
		                        <div class="media">
								    <div class="in-testi">
								        <div class="testi-name">
								            <div class="media-left">
								                <a class="avatar" href="#"> <img class="media-object" src="https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_960_720.png" alt="" data-pagespeed-url-hash="3444989124" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /> </a>
								            </div>
								            <!-- Content -->
								            <div class="media-body relative padding-left-10">
								                <h5>Arun Kandoi (Barasat)</h5>
								                <div class="ratting">
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
												</div>
								            </div>
								        </div>
								        <p>
											Fantastic! It’s like Uber but for pickup trucks to help move stuff across town.
										</p>
								    </div>
								</div>
		                    </div>
		                </div>
		                <div class="col-md-6">
		                    <div class="testiminials_content_new">
		                        <div class="media">
								    <div class="in-testi">
								        <div class="testi-name">
								            <div class="media-left">
								                <a class="avatar" href="#"> <img class="media-object" src="https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_960_720.png" alt="" data-pagespeed-url-hash="3444989124" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /> </a>
								            </div>
								            <!-- Content -->
								            <div class="media-body relative padding-left-10">
								                <h5>Harsh Bansal (Kolkata)</h5>
								                <div class="ratting">
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
												</div>
								            </div>
								        </div>
								        <p>
											“I can simply tap a button and get things picked up and delivered. What's more, OXA's, 1-Click Insurance and Live Tracking feature gives me peace. UN-FREAKIN-BELIEVABLE!!!"
										</p>
								    </div>
								</div>
		                    </div>
		                </div>
		            </div>
		        </div>

		        <div class="item">
		            <div class="row">
		                <div class="col-md-6">
		                    <div class="testiminials_content_new">
		                        <div class="media">
								    <div class="in-testi">
								        <div class="testi-name">
								            <div class="media-left">
								                <a class="avatar" href="#"> <img class="media-object" src="https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_960_720.png" alt="" data-pagespeed-url-hash="3444989124" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /> </a>
								            </div>
								            <!-- Content -->
								            <div class="media-body relative padding-left-10">
								                <h5>Samaira Sehgal (Rajarhat, New Town)</h5>
								                <div class="ratting">
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star-o" aria-hidden="true"></i>
												</div>
								            </div>
								        </div>
								        <p>
											“My transporter cancelled. So I tried booking a Tata 407 on OXA app. Received multiple quotations within 5-10 mins. Booked a truck. It arrived within the hour. Saved the day!”
										</p>
								    </div>
								</div>
		                    </div>
		                </div>
		                <div class="col-md-6">
		                    <div class="testiminials_content_new">
		                        <div class="media">
								    <div class="in-testi">
								        <div class="testi-name">
								            <div class="media-left">
								                <a class="avatar" href="#"> <img class="media-object" src="https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_960_720.png" alt="" data-pagespeed-url-hash="3444989124" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /> </a>
								            </div>
								            <!-- Content -->
								            <div class="media-body relative padding-left-10">
								                <h5>Akash Pradhan (Howrah)</h5>
								                <div class="ratting">
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
													<i class="fa fa-star" aria-hidden="true"></i>
												</div>
								            </div>
								        </div>
								        <p>
											"I hired 2 big trucks for transporting to Bihar. The trucks came to my factory. Just like UBER. They have a competitive bidding system. No middlemen either. So, got a cheaper freight." 
										</p>
								    </div>
								</div>
		                    </div>
		                </div>
		            </div>
		        </div>
		       
		    </div>

		    <!-- Controls -->
		    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		        <span class="sr-only">Previous</span>
		    </a>

		    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		        <span class="sr-only">Next</span>
		    </a>
		</div>
	</div>
</section>
<div class="container testiminials_slider_main whats_our_users_are">
	<h1>What our users say</h1>
	<div class="testiminials_slider slider">
	  	<div class="slide active">
	  		<div class="testiminials_content_new">
                <div class="media">
				    <div class="in-testi">
				        <div class="testi-name">
				            <div class="media-left">
				                <a class="avatar" href="#"> <img class="media-object" src="https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_960_720.png" alt="" data-pagespeed-url-hash="3444989124" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /> </a>
				            </div>
				            <!-- Content -->
				            <div class="media-body relative padding-left-10">
				                <h5>Arun Kandoi (Barasat)</h5>
				                <div class="ratting">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
				            </div>
				        </div>
				        <p>
							Fantastic! It’s like Uber but for pickup trucks to help move stuff across town.
						</p>
				    </div>
				</div>
            </div>
	  	</div>
	  	<div class="slide">
	  		<div class="testiminials_content_new">
                <div class="media">
				    <div class="in-testi">
				        <div class="testi-name">
				            <div class="media-left">
				                <a class="avatar" href="#"> <img class="media-object" src="https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_960_720.png" alt="" data-pagespeed-url-hash="3444989124" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /> </a>
				            </div>
				            <!-- Content -->
				            <div class="media-body relative padding-left-10">
				                <h5>Harsh Bansal (Kolkata)</h5>
				                <div class="ratting">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
				            </div>
				        </div>
				        <p>
							“I can simply tap a button and get things picked up and delivered. What's more, OXA's, 1-Click Insurance and Live Tracking feature gives me peace. UN-FREAKIN-BELIEVABLE!!!"
						</p>
				    </div>
				</div>
            </div>
	  	</div>
	  	<div class="slide">
	  		<div class="testiminials_content_new">
                <div class="media">
				    <div class="in-testi">
				        <div class="testi-name">
				            <div class="media-left">
				                <a class="avatar" href="#"> <img class="media-object" src="https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_960_720.png" alt="" data-pagespeed-url-hash="3444989124" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /> </a>
				            </div>
				            <!-- Content -->
				            <div class="media-body relative padding-left-10">
				                <h5>Samaira Sehgal (Rajarhat, New Town)</h5>
				                <div class="ratting">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
				            </div>
				        </div>
				        <p>
							“My transporter cancelled. So I tried booking a Tata 407 on OXA app. Received multiple quotations within 5-10 mins. Booked a truck. It arrived within the hour. Saved the day!”
						</p>
				    </div>
				</div>
            </div>
	  	</div>
	  	<div class="slide">
	  		<div class="testiminials_content_new">
                <div class="media">
				    <div class="in-testi">
				        <div class="testi-name">
				            <div class="media-left">
				                <a class="avatar" href="#"> <img class="media-object" src="https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_960_720.png" alt="" data-pagespeed-url-hash="3444989124" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /> </a>
				            </div>
				            <!-- Content -->
				            <div class="media-body relative padding-left-10">
				                <h5>Akash Pradhan (Howrah)</h5>
				                <div class="ratting">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
				            </div>
				        </div>
				        <p>
							"I hired 2 big trucks for transporting to Bihar. The trucks came to my factory. Just like UBER. They have a competitive bidding system. No middlemen either. So, got a cheaper freight." 
						</p>
				    </div>
				</div>
            </div>
	  	</div>
	</div>
</div>
<section>
	<div class="moving_with_oxa">
		<div class="container">
			<h1 class="main_title">Moving with OXA</h1>
			<div class="moving_with_content">
				<div class="row">
					<div class="col-md-4">
						<div class="moving_with_text">
							<img src="img/movingicon1.png">
							<h2>Available across India</h2>
							<p>
								Hire Verified Trucks Online  <br> Just like an Uber. 
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="moving_with_text">
							<img src="img/movingicon2.png">
							<h2>Insured & Trackable </h2>
							<p>
								One​-click goods Insurance. <br> Track truck Live. 
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="moving_with_text">
							<img src="img/movingicon3.png">
							<h2>24/7 Customer Support</h2>
							<p>
								Talk to our support​ <br> any time of the day. 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="guaranteed_bikes">
	<div class="container">
		<div class="hide_m">
			<a href="https://play.google.com/store/apps/details?id=com.tempotruck.customer" target="_blank">
				<img class="guarnteedim2" style="width: 100%;" src="img/guarnteedim2.png">
			</a>
		</div>
		<div class="hide_d">
			<a href="https://play.google.com/store/apps/details?id=com.tempotruck.customer" target="_blank">
				<img style="width: 100%;" src="img/guaranteeimg23.png">
			</a>
		</div>
	</div>
</section>
<section class="guaranteed_bikes">
	<div class="container">
		<div class="hide">
			<a href="oxa-vehicles">
				<img style="width: 95%;" src="img/wide-rangeimg2.png">
			</a>
		</div>
		<div class="hide_d hide">
			<a href="oxa-vehicles">
				<img style="width: 100%;" src="img/guaranteeimg24.png">
			</a>
		</div>
	</div>
</section>
<script>
	$('#submitHome').click(function(){
        var name = $('#nameHome').val();
        var email = $('#emailHome').val();
        var phone = $('#phoneHome').val();
        var state = $('#stateOxafleet').val();
        var city = $('#cityHome').val();
        var app_url = $('#app_url').val();
        var site_url = $('#site_url').val();

        if(state == ''){
            $('#stateOxafleet').addClass('is-invalid');
            $("#stateOxafleet-error").show();
            return false;
        }
        if(city == ''){
            $('#cityHome').addClass('is-invalid');
            return false;
        }
        if(name.trim() == ''){
            $('#nameHome').addClass('is-invalid');
            $("#nameHome-error").show();
            return false;
        }
        if(IsEmail(email)==false){
            $('#emailHome').addClass('is-invalid');
            $("#emailHome-error").show();
            return false;
        }
        if(phone.trim() == ''){
            $('#phoneHome').addClass('is-invalid');
            $("#phoneHome-error").show();
            return false;
        }
        
        
        var data= {
                    name: name,
                    email: email,
                    phone: phone,
                    state: state,
                    city: city,
                    app_url: app_url,
                    timezone: new Date().getTimezoneOffset(), 
                };
        var url = site_url+"websiteapi/index/?lang=en&type=become_a_partner";
        // console.log(data);
        $.ajax({
	        type: 'POST', 
	        url: url,
	        data: JSON.stringify(data),
	        contentType: 'application/json',
	        dataType: "json",
	        success: function(data) {
	             console.log("data",data.status);
	             if(data.status == 1){
	                $('#sussHome').css('display','block');
	                
	                $('#stateOxafleet').val('');
	                $('#stateOxafleet').removeClass('is-invalid');
            		$("#stateOxafleet-error").hide();
	                
	                $('#nameHome').val('');
	                $('#nameHome').removeClass('is-invalid');
            		$("#nameHome-error").hide();
	                
	                $('#emailHome').val('');
	                $('#emailHome').removeClass('is-invalid');
            		$("#emailHome-error").hide();
	                
	                $('#phoneHome').val('');
	                $('#phoneHome').removeClass('is-invalid');
            		$("#phoneHome-error").hide();
	                
	                $('#cityHome').val('');
	                if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
						window.location.href=app_url;
					}
	             }else{
	                 $('#sussHome').text('Somthing went worng.');
	                 $('#sussHome').css('display','block');
	             }
	           
	             
	        },
	        error: function(xhr, status, error) {
	            console.log("error: ",error);
	        },
	    });        
    });

    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
           return false;
        }else{
           return true;
        }
      }
    
	function getState(country_id){
		var site_url = $('#site_url').val(); 
        var url = site_url+"websiteapi/index/?lang=en&type=state_wesite";
        var data = {country_id:country_id};
        $.ajax({
                type: 'POST', 
                url: url,
                data: JSON.stringify(data),
                contentType: 'application/json',
                dataType: "json",
                success: function(data) {
                    //console.log("data",data); 
                    var options = '<option value="">Select State</option>';
                    $.each( data, function( key, value ) {
                        options += "<option value='"+value['state_id']+"'>"+value['state_name']+"</option>";                     
                    });
                    //console.log(options);
                    $('#stateOxafleet').html(options);
                },
                error: function(xhr, status, error) {
                    console.log("error: ",error);
                },
            });
    }
    
   getState(1);

   function getCity(state_id){
   		var site_url = $('#site_url').val(); 
        var url = site_url+"websiteapi/index/?lang=en&type=city_wesite";
        var data = {state_id:state_id};
        $.ajax({
                type: 'POST', 
                url: url,
                data: JSON.stringify(data),
                contentType: 'application/json',
                dataType: "json",
                success: function(data) {
                    //console.log("data",data); 
                    var options = '';
                    $.each( data, function( key, value ) {
                        options += "<option value='"+value['city_id']+"'>"+value['city_name']+"</option>";
                    	//console.log( key + ": " + value['country_name'] );
                     
                    });
                    //console.log(options);
                    $('#cityHome').html(options);
                },
                error: function(xhr, status, error) {
                    console.log("error: ",error);
                },
            });
    }

    var input = document.querySelector("#phoneHome");
    window.intlTelInput(input, {
      localizedCountries: { 'in': 'India ' },
      preferredCountries: ['in', 'ae'],
      separateDialCode: true,
      utilsScript: "js/utils.js",
    });
</script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
	      $('.testiminials_slider').slick({
	        dots: false,
	        infinite: true,
	        speed: 500,
	        slidesToShow: 2,
	        slidesToScroll: 1,
	        autoplay: true,
	        autoplaySpeed: 2000,
	        arrows: true,
	        prevArrow: '<span id="cstmPrevArrow" class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>',
	        nextArrow: '<span id="cstmPrevArrow" class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
	        responsive: [{
	          breakpoint: 768,
	          settings: {
	          	arrows: false,
	            slidesToShow: 1,
	            slidesToScroll: 1
	          }
	        },
	        {
	           breakpoint: 400,
	           settings: {
	              arrows: false,
	              slidesToShow: 1,
	              slidesToScroll: 1
	           }
	        }]
	    });
	});
</script>
<?php include "inc/footer.php"; ?>
   