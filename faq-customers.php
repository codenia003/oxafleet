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
						<h1 style=" color: #000000; margin-top: 0; padding-top: 0; " class="hide_d">Help Centre</h1>
						<img style="width: 60%;" src="img/ilustracion_shipping_camion_lateral_big.png">
						<!-- <h1>Booking and Shipping guide</h1> -->
						<div class="articles_help hide_d">
							<input class="form-control" type="text" placeholder="Search help articles" aria-label="Search">
						</div>
						<h1>FAQ - Booking and Shipping </h1>
						<p class="hide_m">Get help booking a truck. Contacting your <br> driver and more.</p>
						
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
<section class="faq_section_cstm">
	<div class="container">
		<div class="accordition_custom">
			<div class="accordion">
			    <div class="option">
			        <input type="checkbox" id="customermain1" class="toggle" />
			        <label class="title" for="customermain1">How does OXA work? </label>
			        <div class="content">
			            <div class="sub_accordion">
						    <div class="option">
						        <input type="checkbox" id="customer1" class="toggle" />
						        <label class="title" for="customer1">How does OXA work? </label>
						        <div class="content">
						            <p>
						                Download our app from the Google Play Store to book a truck (Just like UBER). <br>
										At OXA, you choose who you want to move with. When you request for a truck, we crowd-source the prices quoted by trusted transporters around you and provide them to you on your app screen.

						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer2" class="toggle" />
						        <label class="title" for="customer2">What is OXA? </label>
						        <div class="content">
						            <p>
						                OXA is an on-demand last mile online platform that connects customers (individuals/businesses) with trucks to solve all your moving and shipping needs. <br>
										Whether you are a Transporter/ Broker, Agent or a Fleet Owner, manage your entire Transportation Business on the OXA app now. Discover Trucks near you (just like UBER), Get instant bids and quotes and close freight deals in real-time with verified and trusted Road Transport service providers. Track your Load or Truck live and round the clock.

						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer3" class="toggle" />
						        <label class="title" for="customer3">
						            How can a Customer/Shipper manage the entire load portfolio on the app?
						        </label>
						        <div class="content">
						            <p>
						                OXA offers complete Load portfolio management solution to its customers, shippers and brokers. Starting from the placement of active Loads, tracking of Loads during trips, knowing arrival status details of each freight deal & complete history of delivered loads, everything about your Transportation business can be managed from OXA app on the go.
						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer4" class="toggle" />
						        <label class="title" for="customer4">
						            How Do I Contact OXA Customer Support by Phone?
						        </label>
						        <div class="content">
						            <p>
						                Email:  <a href="mailto:contact@oxafleet.com">contact@oxafleet.com</a> <br>
						                Phone number: <a href="tel:+91 9836-123-128">+91 9836-123-128</a>
						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer5" class="toggle" />
						        <label class="title" for="customer5">
						           	Do you also provide vehicles for inter-city movements?
						        </label>
						        <div class="content">
						            <p>
						                Yes, we do provide inter-city FTL service.
						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer6" class="toggle" />
						        <label class="title" for="customer6">
						            How quickly can my shipment be delivered?
						        </label>
						        <div class="content">
						            <p>
						                We assure you that we try our best to get shipments delivered as quickly as possible. It completely depends on the loading/unloading time` and traffic.
						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer7" class="toggle" />
						        <label class="title" for="customer7">
						            What’s an Auction?
						        </label>
						        <div class="content">
						            <p>
						                An auction is a listing for your shipment, which service providers are able to bid on through the OXA app.
						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer8" class="toggle" />
						        <label class="title" for="customer8">
						            What’s a Service Provider?
						        </label>
						        <div class="content">
						            <p>
						                Service providers are all types of individual truck owner-operators or a transportation company, owning a fleet of trucks on-boarded onto the OXA platform as a transport service provider after due verification of their documents.
						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer9" class="toggle" />
						        <label class="title" for="customer9">
						            What are the different truck types and size?
						        </label>
						        <div class="content">
						            <p>
						                OXA has both OPEN and CLOSED body types available on the platform. You may choose from 1 Ton Trucks (as small as Tata Ace’s (commonly known as the Chota Hathi) for your small moves or upto 44 Ton 16 wheeler large trucks.
						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer10" class="toggle" />
						        <label class="title" for="customer10">
						            What Goods are permitted on OXA? 
						        </label>
						        <div class="content">
						            <p>
						                We accept all goods that are not under our list of prohibited items and are suitable to be transported in our trucks based on payload and capacity requirements. To better match your requirements with the right truck, we classify goods under the following categories. We categorize goods under the following to better match your requirement with the right truck.
						                <ul>
										<li>Electrical/Electronics</li>
										<li>Furniture</li>
										<li>Food & Beverages</li>
										<li>House Shifting</li>
										<li>Machines / Equipment / Spare Parts</li>
										<li>Wood/Timber/Plywood</li>
										<li>Courier/Mover and Packers</li>
										<li>Vehicles/Automotive Parts</li>
										<li>Chemicals/Paints/Oil</li>
										<li>Tiles/Ceramics / Sanitary-ware</li>
										<li>Glassware</li>
										<li>Pipes/Metal Rods (more than 7 ft)</li>
										<li>Pipes/Metal Rods (less than 7 ft)</li>
										<li>Metal Sheets</li>
										<li>Gas / Commercial Cylinder</li>
										<li>Construction materials</li>
										</ul>
						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer11" class="toggle" />
						        <label class="title" for="customer11">
						            Do you serve 24X7 or is there any time limit?
						        </label>
						        <div class="content">
						            <p>
						                Yes, we do try to serve you 24x7. Please note that the order confirmation is subject to vehicle availability.
						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer120" class="toggle" />
						        <label class="title" for="customer120">
						            I am a transport broker. Can I use the OXA app?
						        </label>
						        <div class="content">
						            <p>
						                Yes! If you are a broker / transport commission agent, you can book and arrange a transporter through our app. OXA endeavors to provide you the best rates in the market and get you trucks in the shortest time possible to help out with your last minute client’s deliveries.
						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer13" class="toggle" />
						        <label class="title" for="customer13">
						            Do you have an iPhone app?
						        </label>
						        <div class="content">
						            <p>
						                No! OXA app is currently available for download only from the Google Play Store on your android phone.
						            </p>
						        </div>
						    </div>

						</div>
			        </div>
			    </div>
			    <div class="option">
			        <input type="checkbox" id="customermain2" class="toggle" />
			        <label class="title" for="customermain2">Receiving Quotes and Booking your Shipment</label>
			        <div class="content">
			        	<div class="sub_accordion">
						    <div class="option">
						        <input type="checkbox" id="customer110" class="toggle" />
						        <label class="title" for="customer110">Shipping Basics</label>
						        <div class="content">
						            <p>
						                Shipping large items can be a hassle, especially if you've never done it before. Follow these guidelines to help ensure a seamless experience from pickup through delivery.
						                <br>
										Know Your Shipment
										Try to make sure your truck request includes accurate shipment details, as well as correct pickup and delivery locations.
										<br>
										Consider Your Options
										Once you've listed your pick-up and drop locations, and entered your goods details into the Oxa app, you'll be able to start receiving quotes from our highly trained service providers. Be sure to check out the pricing and ratings of the transport service providers prior to making the advance payment for confirming the transporter. If you have any questions, you can always check our FAQ/Support section for further details or reach out to us at our customer care number.
										<br>
										Book and Pay Online
										When you're ready, you can book your shipment by accepting the quote of the service provider of your choice. You'll be prompted to pay either a partial advance deposit, or the full amount, through our secure payments system. This is refunded to you incase a transporter cancels the trip. We'll send confirmation messages exchanging your contact information with your service provider. Get in touch right away to instruct or guide, and direct the trucker. Keep in contact with your transport service provider throughout the duration of your shipment.
										<br>
										Prepare for Delivery
										Be sure to settle the balance payment with your transporter if only a small advance was paid to book the truck. Please also take a moment to leave feedback for your service provider. Our feedback system helps to ensure all transport providers are accountable for the quality of the service they deliver.
										<br>
										All set? Great! Register or sign in and list your shipment to start receiving quotes. Still have questions? Feel free to contact our Customer Support team, or check out one of the following links.

						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer12" class="toggle" />
						        <label class="title" for="customer12">How to create a Trip on the app?</label>
						        <div class="content">
						           <p>
						           		After downloading the OXA Customer app, the customer/shipper can create a trip request after filling some information like loading point, unload point, truck category, date, time, product types and then publish. 
						           		<br>
										Wait for a few minutes, available and interested transporters will bid. <br>

										Customer/Shipper will accept the bid which is suitable for him and can contact the transporter driver.

						           </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer130" class="toggle" />
						        <label class="title" for="customer130">How Do I Get an Estimate?</label>
						        <div class="content">
						           <p>
						           		Once you list your shipment details (pick up and drop off location; goods details; size of the truck) and you request for quotes, you’ll get multiple bookable bids / quotes from transport service providers near you.

						           </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer14" class="toggle" />
						        <label class="title" for="customer14">How to Choose a Service Provider?</label>
						        <div class="content">
						           <p>
						           		So you've listed your shipment, and now you have some quotes. That's great! It's time to consider your options.
										A good transport service provider is key to a good experience on OXA, so we provide all the information you'll need to make a smart selection. Follow these guidelines to ensure you're booking with a company who meets your expectations.
										<br>
										<b>Review Rating</b>
										Our transporters are rated after every trip they make. When you receive quotes from these service providers, you’ll be able to see their average rating against their quote and gather insights into the quality of work they tend to provide.

										<b>Consider Price</b>
										Obviously, this matters. You're here to find a deal! While the lowest price may be tempting, it may not always be the best choice. Are you willing to pay a bit more for a better timeline or a more experienced provider? Consider all factors and accept the quote that's right for you.
										<br>
										If you have additional questions, please feel free to continue perusing our FAQ or contact our Customer Support team.


						           </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer15" class="toggle" />
						        <label class="title" for="customer15">Can I Call a Service Provider?</label>
						        <div class="content">
						           <p>
						           		All communications can only take place once your transport service provider is booked by you. You’ll receive the service provider’s phone number as soon as your shipment is booked by making a small advance payment to book the truck.
						           </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer16" class="toggle" />
						        <label class="title" for="customer16">How Do I Accept a Quote?</label>
						        <div class="content">
						           <p>
						           		Click on the quote you like. Click on the “Book your vehicle” button within the app to make a small advance payment to complete your truck booking.
						           </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer17" class="toggle" />
						        <label class="title" for="customer17">I have confirmed my order and received the driver’s contact information. What should I do now?</label>
						        <div class="content">
						           <p>
						           		When you see the driver’s information, it means that the driver has already received your order. You may now call the driver or wait for the driver’s call to confirm the exact pickup point and destination.
						           </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer18" class="toggle" />
						        <label class="title" for="customer18">My driver is severely late, or has not appeared at all, without any proper notice. What do I do?</label>
						        <div class="content">
						           <p>
						           		You will find the driver’s number on the app. You can push the call button and may call and talk to the driver. If things still don’t work out and the trip has to be cancelled, please re-request for a vehicle.
						           </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer19" class="toggle" />
						        <label class="title" for="customer19">How does the pricing work? </label>
						        <div class="content">
						           <p>
						           		With OXA, you never have to worry about surge or delay pricing. You don’t have to calculate the kilometers either.
										When you request for a truck, you will receive bids/quotations from the transporters. These quotations include the distance to cover, time, toll, etc. You only have to pay the amount you chose from the various bids/quotes you received from the many service providers. <br>

										<i>Parking & Other Charges: The customer / shipper/ sender of the goods has to bear these charges over and above the fare amount. These charges have to be paid to our partner directly.</i>

						           </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer21" class="toggle" />
						        <label class="title" for="customer21">How do I pay for my shipment? </label>
						        <div class="content">
						           <p>
						           		OXA accepts payment via credit or debit card, net banking, wallets and even UPI’s. After accepting a quote, you’ll be prompted to pay either an advance deposit or the full payment through our app.
						           		<br>
										If you made an advance payment, the balance amount can be paid either in cash to the transporter on pick-up or delivery; or via online payment routes via our secure gateways.


						           </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer21" class="toggle" />
						        <label class="title" for="customer21">Do I pay the transporter directly?</label>
						        <div class="content">
						           <p>
						           		If you made full payment while booking, payment will be released to the transporter through OXA after trip end once the delivery is done. <br>
										If you paid only an advance deposit to book, you can then choose to pay the remaining amount directly to the transporter via Cash or by making the balance payment online through the app.

						           </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer22" class="toggle" />
						        <label class="title" for="customer22">Who pays the toll, parking and other charges?</label>
						        <div class="content">
						           <p>
						           		These are included in your trip fare. You don’t have to pay for these changes at the time of crossing the toll or pay additional money to the partner.

						           </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer23" class="toggle" />
						        <label class="title" for="customer23">I made an advance payment. Transporter cancelled the trip. What do I do?</label>
						        <div class="content">
						           <p>
						           		Service providers may cancel the trip for a variety of reasons, mostly pertaining to engine break downs or sudden unforeseen driver un-availability. <br>
										In this case, be assured that the advance you paid will be refunded to your wallet or bank account where you made the payment from.


						           </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer24" class="toggle" />
						        <label class="title" for="customer24">Will I be charged anything if I cancel the trip?</label>
						        <div class="content">
						           <p>
						           		OXA may charge a booking cancellation charge to ensure that all booking cancellations are done by users thoughtfully. If you cancel a booking after a truck has been confirmed for your trip, then you may be charged a cancellation fee of 20% of your total trip fare. 

						           </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer25" class="toggle" />
						        <label class="title" for="customer25">Why did a quote expire?</label>
						        <div class="content">
						           <p>
						           		The default expiration for all quotes is set for 2 hours after the first quote has been received.

						           </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer26" class="toggle" />
						        <label class="title" for="customer26">can the Customer/Shipper do if the Driver doesn’t show up?</label>
						        <div class="content">
						           <p>
						           		If the shipper has time on hand and is flexible, the shipper may wait and try to contact the driver again. If the shipper is unable to reach the driver, the shipper may complain to OXA Customer Care, and if directed, cancel the bid and rebook a vehicle. <br>
										If the transporter is found at fault and this trip is cancelled, any advance payment made during this trip by the Shipper will be refunded back to the Shipper.
						           </p>
						        </div>
						    </div>
						</div>
			        </div>
			    </div>
			    <div class="option">
			        <input type="checkbox" id="customermain3" class="toggle" />
			        <label class="title" for="customermain3">Researching Transporters & Protecting your Shipment </label>
			        <div class="content">
			            <div class="sub_accordion">
						    <div class="option">
						        <input type="checkbox" id="customer31" class="toggle" />
						        <label class="title" for="customer31">Are my goods secured? </label>
						        <div class="content">
						            <p>
						                The service providers go through a background verification process. You may also track your goods live while they are being transported and stay in touch with the driver while the trip is being made.

						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer32" class="toggle" />
						        <label class="title" for="customer32">How reliable are OXA driver-partners? </label>
						        <div class="content">
						            <p>
						               We have a checklist of documents which every driver-partner needs to submit before he comes onboard.
						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer33" class="toggle" />
						        <label class="title" for="customer33">
						            Is there any service guarantee? 
						        </label>
						        <div class="content">
						            <p>
						                Given the unpredictable nature of traffic & road conditions, we do not provide any service guarantee. <br>
										<b>What Is Feedback / Review?</b>
										Feedback is a review left by either a shipping customer or transport service provider for the other party after a shipment is completed.

						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer34" class="toggle" />
						        <label class="title" for="customer34">
						            Insurance 
						        </label>
						        <div class="content">
						            <p>
						                Transportation can be risky business. That's why we offer cargo insurance. You can purchase Cargo Insurance while booking a truck for your goods instantly through the OXA app.
						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer35" class="toggle" />
						        <label class="title" for="customer35">
						           	Do Service Providers Have Cargo Insurance?
						        </label>
						        <div class="content">
						            <p>
						                Providers aren’t required by law to carry full value replacement insurance and we don’t verify insurance credentials. You’re welcome to request that information from your service provide or, depending upon what you’re booking, purchase Instant Cargo Insurance from within the app - it’s the best way to guarantee coverage.
						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer36" class="toggle" />
						        <label class="title" for="customer36">
						            How Do I Purchase Cargo Insurance?
						        </label>
						        <div class="content">
						            <p>
						                Cargo insurance will be offered by the OXA app once your truck has arrived for pick-up at the pick-up location. <br>
										You can insure your goods with a single click.

						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer37" class="toggle" />
						        <label class="title" for="customer37">
						            Why Does the Service Provider Leave Me a Review?
						        </label>
						        <div class="content">
						            <p>
						                As a neutral venue, we think all parties should have the chance to review one another once a shipment is completed. 
						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer38" class="toggle" />
						        <label class="title" for="customer38">
						            How Do I Know Reviews Are Real?
						        </label>
						        <div class="content">
						            <p>
						                Feedback can only be left by shipping customers who’ve booked and completed shipments through OXA. OXA doesn’t manipulate feedback in any way.
						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer39" class="toggle" />
						        <label class="title" for="customer39">
						            Leaving Feedback
						        </label>
						        <div class="content">
						            <p>
						                Feedback is a vital part of the OXA marketplace. Leaving feedback is the best way to let other shipping customers know about your experience with your service provider. The OXA community depends on your feedback so that future shipping customers have a better idea of which providers might be best to work with. <br>

										You can rate your experience with your service provider giving them ratings from 1 to 5 stars. You'll have the option to provide a detailed description, and even leave OXA some feedback as well.
										Your feedback will appear on the service provider's profile, where they'll have the opportunity to respond. As with all communications on OXA, please keep it honest, kind, and professional. <br>

										If for any reason you need to cancel your shipment, please follow the proper steps for completing a cancellation. By doing so, you'll ensure both a refund and/or credit for the shipment added to your OXA wallet, as well as the opportunity to leave your feedback as a cancellation comment, which will appear on the service provider's profile. <br>

										If you have additional questions, please feel free to continue perusing our Help Center or contact our Customer Support team.

						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer310" class="toggle" />
						        <label class="title" for="customer310">
						            What is Unloading OTP?
						        </label>
						        <div class="content">
						            <p>
						                Customers/Shippers receive secret Unloading OTP on the OXA app and share the OTP with the Driver of Truck after Unloading is completed. The driver enters Unloading OTP in his/her app to indicate Unloading completion & end of the Trip. This provides instant confirmation of successful delivery. <br>

										<b>My driver/vehicle profile does not match. What do I do?</b>
										As a customer, you will be able to see the driver’s profile on the app along with his vehicle details. When you notice it’s not matching kindly reach out to our Customer Support Center and don't let driver to load the vehicle.

						            </p>
						        </div>
						    </div>
						   
						</div>
			        </div>
			    </div>
			    <div class="option">
			        <input type="checkbox" id="customermain4" class="toggle" />
			        <label class="title" for="customermain4">Labour services</label>
			        <div class="content">
			            <div class="sub_accordion">
						    <div class="option">
						        <input type="checkbox" id="customer41" class="toggle" />
						        <label class="title" for="customer41">Do you provide labour (loading / unloading) services?</label>
						        <div class="content">
						            <p>
						                We do not provide labour services for loading or unloading of goods. If required, you can negotiate with our driver partner who will get allocated for your trip. However there is no assurance that he will be willing to do the labour work & if he is willing then the charges will be mutually decided between you & the partner. OXA will have no role in the negotiation.

						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer42" class="toggle" />
						        <label class="title" for="customer42">Will the OXA driver help with the loading/unloading of goods?</label>
						        <div class="content">
						            <p>
						               Drivers can help out on a friendly basis; however, they are not obliged to load/unload the goods.
						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer43" class="toggle" />
						        <label class="title" for="customer43">
						            Does delivery partner provide wrapping materials? 
						        </label>
						        <div class="content">
						            <p>
						                No, the customer / shippers should ensure that the goods to be moved are packed properly.
						            </p>
						        </div>
						    </div>
						    
						   
						</div>
			        </div>
			    </div>
			    <div class="option">
			        <input type="checkbox" id="customermain5" class="toggle" />
			        <label class="title" for="customermain5">Tracking and Reports</label>
			        <div class="content">
			            <div class="sub_accordion">
						    <div class="option">
						        <input type="checkbox" id="customer51" class="toggle" />
						        <label class="title" for="customer51">How do I track my order? </label>
						        <div class="content">
						            <p>
						                To track a current trip, you must be logged in to the OXA app. You will always be able to see easily see real-time movement of your truck on the app.
						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer52" class="toggle" />
						        <label class="title" for="customer52">How can I track the vehicle? </label>
						        <div class="content">
						            <p>
						               The vehicle can be live-tracked on the mapping system available on the app.
						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer53" class="toggle" />
						        <label class="title" for="customer53">
						            What is Live Tracking of Truck/Load in OXA app?
						        </label>
						        <div class="content">
						            <p>
						                OXA Live Tracking helps the Customer/Shipper to know the live location of the Truck and the Load on a digital map built in the OXA app during an ongoing Trip. The Live Tracker starts after a Truck is booked and it stays on until the completion of unloading at the delivery location. OXA Live tracking can only be accessed during the Trip by the <br>
						                Customer/Shipper whose Load is being transported and by the concerned Truck Owner making it the most secured live tracking tool. OXA Live Tracker respects the privacy of the driver and it does not track the Truck when the Truck is not in service or not yet booked for carrying any Load. The driver app must be logged in to activate OXA Live Tracker.
						            </p>
						        </div>
						    </div>
						    
						   
						</div>
			        </div>
			    </div>
			    <div class="option">
			        <input type="checkbox" id="customermain6" class="toggle" />
			        <label class="title" for="customermain6">Documents & Billing</label>
			        <div class="content">
			            <div class="sub_accordion">
						    <div class="option">
						        <input type="checkbox" id="customer61" class="toggle" />
						        <label class="title" for="customer61">E-way bill FAQs </label>
						        <div class="content">
						            <p>
						                From 1st April 2018, if the invoice value of goods is more than Rs 50,000, e-way bill is mandatory for inter-state movement of goods (movement to other states). For such deliveries, please provide a copy of valid E-way bill and Invoice to our driver partners for smooth and hassle-free movement of goods. <br>

										If consignment value is less than or equal to Rs 50,000 please provide the partner driver with the copy of invoice, bill of supply or delivery challan.

						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer62" class="toggle" />
						        <label class="title" for="customer62">What is ePOD?</label>
						        <div class="content">
						            <p>
						               The OXA ePOD (electronic proof-of-delivery) provides a digital Bill of Lading that is consistent, instantly uploaded and secure. Managed via the OXA app, ePOD provides written and visual documentation to ensure a better shipping experience for all involved. <br>

										The goal of ePOD is accountability for everyone involved in a shipping transaction. Not only does instant-access proof of delivery make life easier and more efficient for carriers, it also offers peace of mind for the shipping customers who rely on them. Transporters can give access to ePOD on a shipment-by-shipment basis to their drivers, allowing electronic documentation.


						            </p>
						        </div>
						    </div>
						    <div class="option">
						        <input type="checkbox" id="customer63" class="toggle" />
						        <label class="title" for="customer63">
						            HOW CAN USERS GET PROOF OF DELIVERY AFTER SUCCESSFUL DELIVERY?
						        </label>
						        <div class="content">
						            <p>
						                The Driver can take a picture of the Proof of Delivery and upload the picture through Driver app at the delivery location which becomes instantly visible to sender of goods on the OXA Customer App.
						            </p>
						        </div>
						    </div>
						    
						   
						</div>
			        </div>
			    </div>
			    <div class="option">
			        <input type="checkbox" id="customermain7" class="toggle" />
			        <label class="title" for="customermain7">Troubleshooting the Android App</label>
			        <div class="content">
			        	<p>It's beneficial to close or refresh any application, and ours is no different.  If you're experiencing inconsistency or having issues navigating the app, typically all that's needed is a restart of the app.  Here are some steps to achieve this on your android device and a couple other tips to help in the event you run into an issue.</p>
			        	<p>Remove the app from the background and and reopen the app.
						This can be done by pressing the ‘square’ button present on all android phones; and swiping away the app.
						</p>
						<p>If that does not fix your problem:</p>
						<ul>
							<li>Tap and hold the app icon</li>
							<li>A popup menu will appear, select "App info" in that menu</li>
							<li>Tap on the line titled "Storage"</li>
							<li>Tap "Clear Data"</li>
							<li>Tap "Clear Cache"</li>
							<li>Then, find the OXA app icon again and reopen the app.</li>
							<li>If nothing else works, delete and re-install the app.</li>
						</ul>
			        </div>
			    </div>
			</div>
		</div>
  	</div>
</section>
<section class="popular_sections">
	<div class="container">
		<h1 class="Popular_articles_content_title">Recommended articles</h1>
		<div class="Popular_articles_content">
			<div class="row text-center">
				<?php 
					$args = array( 'category_name'=>'for-customers', 'post_status' => 'publish', 'posts_per_page' => '8');
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
							<a href="#">Read more &gt;</a>
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
							<a href="#">Read more &gt;</a>
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
							<a href="#">Read more &gt;</a>
						</div>
					</div>
				</div> -->
			</div>
		</div>
		<!-- <div class="Popular_articles_content">
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
							<a href="#">Read more &gt;</a>
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
							<a href="#">Read more &gt;</a>
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
							<a href="#">Read more &gt;</a>
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
							<a href="#">Read more &gt;</a>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</section>
<!-- <section class="contact_click_section">
	<div class="container">
		<h1>Contact us</h1>
		<ul class="contact_click">
			<li>
				<a href="tel:+91 9836 123 128">
					<div class="imgicon">
						<img src="img/phoneicon.png">
					</div>
					<p>Call</p>
				</a>
			</li>
			<li>
				<a href="mailto:contact@oxafleet.com">
					<div class="imgicon">
						<img src="img/mainicon.png">
					</div>
					<p>Mail</p>
				</a>
			</li>
			<li>
				<div class="imgicon">
					<img src="img/messseageicon.png">
				</div>
				<p>Chat</p>
			</li>
		</ul>
	</div>
</section> -->
<div class="what_do_think">
	<div class="container text-center">
		<a href="#">
			<img src="img/what_do_you_think.png">
		</a>
	</div>
</div>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php include "inc/footer.php"; ?>
<style type="text/css">
.panel {
    border: 1px solid #ececec;
    background: none;
    box-shadow: none;
    border-bottom: none !important;
}

.panel:last-child {
    border-bottom: none;
}

.panel-group > .panel:first-child .panel-heading {
    border-radius: 4px 4px 0 0;
}

.panel-group .panel {
    border-radius: 0;
}

.panel-group .panel + .panel {
    margin-top: 0;
}

.panel-heading {
    /*background-color: #009688;*/
    border-radius: 0;
    border: none;
    color: #fff;
    padding: 0;
}

.panel-title a {
    display: block;
    color: #505050 !important;
    padding: 15px;
    position: relative;
    font-size: 18px;
    font-weight: 800;
}

.panel-body {
    background: #fff;
    border: none !important;
}

.panel:last-child .panel-body {
    border-radius: 0 0 4px 4px;
}

.panel:last-child .panel-heading {
    border-radius: 0 0 4px 4px;
    transition: border-radius 0.3s linear 0.2s;
}

.panel:last-child .panel-heading.active {
    border-radius: 0;
    transition: border-radius linear 0s;
}
/* #bs-collapse icon scale option */

.panel-heading a:before {
    content: "\e146";
    position: absolute;
    font-family: "Material Icons";
    right: 5px;
    top: 10px;
    font-size: 24px;
    transition: all 0.5s;
    transform: scale(1);
}

.panel-heading.active a:before {
    content: " ";
    transition: all 0.5s;
    transform: scale(0);
}

#bs-collapse .panel-heading a:after {
    content: " ";
    font-size: 24px;
    position: absolute;
    font-family: "Material Icons";
    right: 5px;
    top: 10px;
    transform: scale(0);
    transition: all 0.5s;
}

#bs-collapse .panel-heading.active a:after {
    content: "\e909";
    transform: scale(1);
    transition: all 0.5s;
}
/* #accordion rotate icon option */

#accordion .panel-heading a:before {
    content: "\e316";
    font-size: 19px;
    position: absolute;
    font-family: "Material Icons";
    right: 5px;
    top: 32%;
    /* transform: translate(-50%, 0); */
    transform: rotate(180deg);
    transition: all 0.5s;
    background: #c4c2c2;
    color: white;
    border-radius: 50%;
    padding: 0;
    font-weight: normal;
}

#accordion .panel-heading.active a:before {
    transform: rotate(0deg);
    transition: all 0.5s;
    background: black;
}
.accordion {
  /*margin: 3em auto;*/
  max-width: 100%;
}

.accordition_custom .toggle {
  display: none;
}

.option {
    position: relative;
    margin-bottom: 0;
    border: 1px solid #bfbfbf;
    border-bottom: none;
}
.option:last-child {
    position: relative;
    margin-bottom: 0;
    border: 1px solid #bfbfbf;
    border-bottom-color: #bfbfbf !important;
}
.sub_accordion .option {
	border: 1px solid transparent !important;
	margin-bottom: 0px;
}
.title,
.content {
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transform: translateZ(0);
          transform: translateZ(0);
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
}

.title {
  	display: block;
    color: #505050 !important;
    padding: 15px;
    position: relative;
    font-size: 18px;
    font-weight: 800;
    cursor: pointer;
    padding-right: 39px;
}
.sub_accordion .title {
    background: #fff;
    padding: 1em;
    display: block;
    color: #000000 !important;
    font-weight: normal;
    cursor: pointer;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 0;
    padding-right: 39px;
    letter-spacing: 1px;
}

/*.title:after, .title:before {
  	content: "\e5cf";
    font-size: 19px;
    position: absolute;
    font-family: "Material Icons";
    right: 5px;
    top: 32%;
     transform: translate(-50%, 0); 
    transform: rotate(180deg);
    transition: all 0.5s;
    background: #c4c2c2;
    color: white;
    border-radius: 50%;
    padding: 0;
    font-weight: normal;
}*/

.title:after {
  	content: "\e5cf";
    font-size: 19px;
    position: absolute;
    font-family: "Material Icons";
    right: 15px;
    top: 32%;
    /*transform: translate(-50%, 0); 
    transform: rotate(180deg);*/
    transition: all 0.5s;
    background: #c4c2c2;
    color: white;
    border-radius: 50%;
    padding: 0;
    font-weight: normal;
    height: 20px;
    width: 20px;
    line-height: 20px;
}

.content {
  max-height: 0;
  overflow: hidden;
  background-color: #fff;
  
}
.sub_accordion .content ul {
	padding: 0.5em 1em 1em;
}
.content p {
  margin: 0;
  padding: 0em 1em 1em;
  font-size: 14px;
  line-height: 1.5;
  display: block;
}

.toggle:checked + .title, .toggle:checked + .title + .content {
  box-shadow: 3px 3px 6px #ddd, -3px 3px 6px #ddd;
}
.sub_accordion .toggle:checked + .title, .sub_accordion .toggle:checked + .title + .content {
  box-shadow: none;
  background: #fbfbfb;
}
.toggle:checked + .title + .content {
   max-height: initial;
}
.toggle:checked + .title:after {
	-webkit-transform: rotate(180deg) !important;
	transform: rotate(180deg) !important;
	transition: all 0.5s;
	background: black;
}
.sub_accordion {
    padding: 10px;
}
.sub_accordion .title:after {
	font-size: 14px;
    font-weight: normal;
    height: 14px;
    width: 14px;
    line-height: 14px;
}
.content ul {
    padding: 0 15px;
    margin-top: -9px;
}
.content ul li {
    color: #707579;
    line-height: 2;
    /* margin-top: -10px; */
}
</style>

   