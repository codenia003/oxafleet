<?php include "inc/header.php"; ?>
<!-- banner -->
<section style="background: #fafafa;" class="banner w3pvt-banner exploreoxa_vehicles_mobile" id="home">
	<div class="container">
		<div class="banner-text oxa_vehicles_banner_text">
			<div class="row">
				<div class="col-md-12">
			    <h1>Select a pick up type to <br> learn more about it</h1>
			    <div id="myTab" class="nav nav-tabs exploreoxa_vehicles_mobile oxa_banner_service slider">
			  		<div class="slide active">
			      		<div class="exploreOxaselection">
				        	<a data-toggle="tab" href="#truck">
					        	<div class="truck_section">
					        		<img src="img/truck.png">
					        	</div>
					        	<h4>Truck</h4>
					        </a>
				        </div>
			      	</div>
			      	<div class="slide">
			      		<div class="exploreOxaselection">
				        	<a data-toggle="tab" href="#cab">
				        		<div class="truck_section">
						        	<img src="img/cab.png">
						        </div>
					        	<h4>Cab</h4>
					        </a>
				        </div>
			      	</div>
			      	<div class="slide">
			      		<div class="exploreOxaselection">
				        	<a data-toggle="tab" href="#ambulance">
				        		<div class="truck_section">
						        	<img src="img/ambulance.png">
						        </div>
					        	<h4>Ambulance</h4>
					        </a>
				        </div>
			      	</div>
			      	<div class="slide">
			      		<div class="exploreOxaselection">
				        	<a data-toggle="tab" href="#breakdown">
				        		<div class="truck_section">
					        		<img src="img/breakdown.png">
					        	</div>
				        		<h4>Breakdown</h4>
				        	</a>
				        </div>
			      	</div>
			      	<div class="slide">
			      		<div class="exploreOxaselection">
				        	<a data-toggle="tab" href="#mortuary">
				        		<div class="truck_section">
					        		<img src="img/mortuary.png">
					        	</div>
				        		<h4>Mortuary</h4>
				        	</a>
				        </div>
			      	</div>
			      	<div class="slide">
			      		<div class="exploreOxaselection" style="margin-right: 0px;">
				        	<a data-toggle="tab" href="#container">
				        		<div class="truck_section">
					        		<img src="img/container.png">
					        	</div>
				        		<h4>Container</h4>
				        	</a>
			        	</div>
			      	</div>
			   </div>
			    
			</div>
			</div>
		</div>
	</div>
</section>
<section class="service_section_content">
	<div class="container">
		<div class="tab-content">
	        <div id="truck" class="tab-pane active">
	        	<p class="how_to_use">How to use</p>
        		<h3 class="the_tuck_title">the Truck</h3>
            	<div class="row fisrsectionnavset">
            		<div class="col-md-6">
            			<div class="content_Section">
            				<p>
            					I am 45 years Old, and over-the-road trucking is the best job <br>
								I have ever had. That being said, trucking takes <br>
								commitment, hard work, determination, and a positive <br>
								Outlook to succeed. Unfortunately, many new drivers <br>
								sabotage themselves before their career ever takes Off. <br>
								Let's cover some common mistakes that new truck drivers <br>
								make.
            				</p>
            				<p style="margin-top: 30px;">
            					Prepare For The Challenge Ahead
								The first thing you must understand is that trucking will be <br>
								one Of the most challenging endeavors Of your lifetime. You <br>
								will maneuver through an emotional Obstacle course before <br>
								you reach your goals. CDL Training will push you to your <br>
								limits, and at times you may even regret your decision to <br>
								take a shot at this career. Remember, pain is only <br>
								temporary. The challenge Of taking on a few months Of CDL <br>
								training and a year Of rookie Obstacles is nothing in the <br>
								grand scheme Of things. Keep a great attitude and <br>
								persevere.
            				</p>
            			</div>
            		</div>
            		<div class="col-md-6">
            			<div class="oxa_vehicle_sec2">
            				<img style="width: 100%;" src="img/the_truckimg.png">
            			</div>
            		</div>
            	</div>
            	<div style="margin-top: 70px;" class="row">
            		<div class="col-md-6">
            			<img style="width: 100%;" src="img/the_truckimg1.png">
            			<div class="are_you_transportar oxa_transportationquest hide_m">
							<p>Are you a vehicle-owner?</p>
							<div class="attach_your_truck">
								<div class="attach_your_truck_text">
									Earn upto &#x20b9; 28,500/month helping <br> with pick-ups
								</div>
								<div class="attach_your_truck_text2">
									Become a Helper
								</div>
							</div>
						</div>
            		</div>
            		<div class="col-md-6">
            			<div class="content_Section oxa_vehicle_sec2">
            				<p>
            					I am 45 years Old, and over-the-road trucking is the best job <br>
								I have ever had. That being said, trucking takes <br>
								commitment, hard work, determination, and a positive <br>
								Outlook to succeed. Unfortunately, many new drivers <br>
								sabotage themselves before their career ever takes Off. <br>
								Let's cover some common mistakes that new truck drivers <br>
								make.
            				</p>
            				<div style="margin-top: 60px;" class="form-section">
								<h1>Book your truck</h1>
								<!-- <p>Anywhere across india.</p> -->
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
								    <input type="button" class="btn btn-primary search_btn_section" id="submitHome" value="Get Estimate">
			                        <p id="sussHome" style="display:none;color: green; font-weight: bold;">Succesfully send</p>
								    <!-- <button type="submit" class="btn btn-primary search_btn_section">Search on App</button> -->
							  	</form>
							</div>
            			</div>
            		</div>
            		
            	</div>
	        </div>
	        <div id="cab" class="tab-pane">
	            <h3>cab</h3>
	        </div>
	        <div id="ambulance" class="tab-pane">
	            <h3>Ambulance</h3>
	        </div>
	        <div id="breakdown" class="tab-pane">
	            <h3>breakdown</h3>
	        </div>
	        <div id="mortuary" class="tab-pane">
	            <h3>mortuary</h3>
	        </div>
	        <div id="container" class="tab-pane">
	            <h3>container</h3>
	        </div>
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
<?php include "inc/footer.php"; ?>
 <style type="text/css">
	@media (min-width: 1200px) {
	  .container {
	    max-width: 1300px !important;
	  }
	}
	@media (max-width: 736px) {
	.banner {
	    min-height: 356px;
	}
}
</style>
   