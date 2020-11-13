<?php include "inc/header.php"; ?>
<!-- banner -->
<section style="background: url(img/drive_with_us_banner.png) no-repeat center;    background-size: cover !important;" class="banner w3pvt-banner drive_with_us_section" id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="join_exclusive">
					<h2>
						Become a Franchise with <br> OXA launch your own <br> truck, mini-truck, taxi, <br> ambulance & fatafat delivery <br>
						business your city
					</h2>
					<p>Inter-city and intra-city</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-section drive-with-us-form">
					<h1 style="font-size: 40px;line-height: 1.2;">Register as an <br> OXA Franchise</h1>
					<!-- <p>Anywhere across india.</p> -->
					<form class="form_select_user" action="">
						<input type="hidden" id="site_url" value="<?php echo DOMAIN; ?>">
					    <div class="form-group">
					      <input type="text" class="form-control" id="nameFranchise" placeholder="Name">
					    </div>
					    <div class="form-group">
					      <input type="text" class="form-control" id="emailFranchise" placeholder="Email">
					    </div>
					    <div class="form-group">
					      <input type="text" class="form-control" id="phoneFranchise">
					    </div>
					   <div class="seclect_area">
							<div class="form-group">
								<select name="stateOxafleet" onchange="getCity(this.value);" id="stateOxafleet" class="form-control" style="height: 45px;border-right: 2px solid #e6e6e6!important;">
									<option>Select State</option>
	                            </select>
							</div>
							<div class="form-group">
							  	<select name="cityFranchise" id="cityFranchise" class="form-control" style="height: 45px;">
									<option>Select City</option>
	                           	</select>
							</div>
						</div>
						<div class="form-group">
					      <input type="text" class="form-control" id="addressFranchise" placeholder="Address">
					    </div>
					    <div class="form-group">
						  <select style="border-right: 2px solid #e6e6e6!important;" class="form-control" id="investmentFranchise">
						    <option>Select Investment</option>
						    <option value="50k - 2lac">50k - 2lac</option>
						    <option value="2lac - 5lac">2lac - 5lac</option>
						    <option value="5lac - 10lac">5lac - 10lac</option>
						    <option value="10lac - 20lac">10lac - 20lac</option>
						    <option value="20lac - 30lac">20lac - 30lac</option>
						    <option value="30lac - 50lac">30lac - 50lac</option>
						    <option value="50lac - 1cr">50lac - 1cr</option>
						    <option value="1cr above">1cr above</option>
						  </select>
						</div>
						<div class="form-group">
					      <input type="text" class="form-control" id="messageFranchise" placeholder="Message">
					    </div>
					    <input type="button" class="btn btn-default search_btn_section" id="submitFranchise" value="Get Started">
                        <p id="sussFranchise" style="display:none;color: green; font-weight: bold;">Succesfully send</p>
				  </form>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="drivewithservices1">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="servi23">
					<h1>Why franchise <br> WITH oxa?</h1>
					<p>
						Own multiple vehicles? You <br>
						have the freedom to decide <br>
						your pricing and schedule.
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="servi23">
					<h1>OXA priority <br> service</h1>
					<p>
						Match first based on your <br>
						fleet ratings and area Of <br>
						operations.
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="servi23">
					<h1>Deals <br> are verified</h1>
					<p>
						Be assured to receive all <br>
						payments on time & get the <br>
						best in class support, when <br>
						your attach your truck with <br>
						OXA.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="drivewithservices1">
	<div class="container">
		<h1 class="driving_title">Distribution centres</h1>
		<div class="row">
			<div class="col-md-4">
				<div class="driningwithoxaserv">
					<div class="stepcount">
						Step <b>1</b>
					</div>
					<h1>List your vehicles <br> for free</h1>
					<p>Get your vehicles listed and <br> you can plan your schedule <br> on our app, it's flexible.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="driningwithoxaserv">
					<div class="stepcount">
						Step <b>2</b>
					</div>
					<h1>Decide how you <br> want to operate</h1>
					<p>You can take moving <br> requests at your own time. <br> No compulsory trips. </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="driningwithoxaserv">
					<div class="stepcount">
						Step <b>3</b>

					</div>
					<h1>Welcome your <br> first deal</h1>
					<p>Receive orders based on <br> your quote and you've got <br> your first booking.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="we_are_looking_for_partners">
	<div class="container">
		<h1 class="we_are_looking_title">We're looking <br> for partners with</h1>
		<div class="row">
			<div class="col-md-6">
				<div class="we_are_looking_text">
					<h1>Fleet of verified drivers</h1>
					<p>Drivers that are highly likely to give a <br>
						good delivery experience.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="we_are_looking_text">
					<h1>Regular checks</h1>
					<p>Significant screening, procedures and <br> routine check-ups.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="we_are_looking_text">
					<h1>Mufti-location presence</h1>
					<p>Growing reach and operations <br> running pan-India.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="we_are_looking_text">
					<h1>Logistical advantage</h1>
					<p>Strong need to create and promote <br> operations that convert</p>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	$('#submitFranchise').click(function(){
        var name = $('#nameFranchise').val();
        var email = $('#emailFranchise').val();
        var phone = $('#phoneFranchise').val();
        var country = '1';
        var state = $('#stateOxafleet').val();
        var city = $('#cityFranchise').val();
        var investment = $('#investmentFranchise').val();
        var address = $('#addressFranchise').val();
        var message = $('#messageFranchise').val();
        var country_code = '+91';
        var site_url = $('#site_url').val(); 
        
        if(name.trim() == ''){
            $('#nameHome').addClass('HomeError');
            return false;
        }
        if(email.trim() == ''){
            $('#emailHome').addClass('HomeError');
            return false;
        }
        if(phone.trim() == ''){
            $('#phoneHome').addClass('HomeError');
            return false;
        }
        if(state.trim() == ''){
            $('#stateOxafleet').addClass('HomeError');
            return false;
        }
        if(city.trim() == ''){
            $('#cityHome').addClass('HomeError');
            return false;
        }
        
        var data= {
                     name: name,
                    email: email,
                    phone: phone,
                    country: country,
                    state: state,
                    city: city,
                    investment: investment,
                    address: address,
                    message: message,
                    country_code: country_code,
                    timezone: new Date().getTimezoneOffset(), 
                };
        var url = site_url+"websiteapi/index/?lang=en&type=become_a_franchise";
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
	                $('#sussFranchise').css('display','block');
	                $('#nameFranchise').val('');
	                $('#emailFranchise').val('');
	                $('#phoneFranchise').val('');
	                $('#stateOxafleet').val('');
	                $('#cityFranchise').val('');
	                $('#investmentFranchise').val('');
	                $('#addressFranchise').val('');
	                $('#messageFranchise').val('');
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
                    $('#cityFranchise').html(options);
                },
                error: function(xhr, status, error) {
                    console.log("error: ",error);
                },
            });
    }

    var input = document.querySelector("#phoneFranchise");
    window.intlTelInput(input, {
      localizedCountries: { 'in': 'India ' },
      preferredCountries: ['in', 'ae'],
      separateDialCode: true,
      utilsScript: "js/utils.js",
    });

</script>
<style type="text/css">
	header {position: relative;}
	.drive-with-us-form {
	    margin-top: 0px !important;
	}
</style>
<?php include "inc/footer.php"; ?>