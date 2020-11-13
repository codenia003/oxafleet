<?php include "inc/header.php";
define( 'WP_USE_THEMES', false ); // Don't load theme support functionality
require( 'blog/wp-load.php' );

 ?>

<!-- banner -->
<section style="background: url(img/indiantruckerart8.jpg) no-repeat top left; background-size: cover;" class="w3pvt-banner drive_with_us_section" id="Driver">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="join_exclusive drive_with_us_content">
					<h2>Join an exclusive <br> network of operators <br> and franchises</h2>
					<p>Transport anywhere in india. Inter-city and intra-city</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-section drive-with-us-form">
					<h1>Attach Vehicle Now</h1>
					<!-- <p>Anywhere across india.</p> -->
					<form class="form_select_user" action="">
						<input type="hidden" id="site_url" value="<?php echo DOMAIN; ?>">
					    <div class="form-group">
					      <input type="text" class="form-control" placeholder="Name" id="nameDriver">
					      <div id="nameDriver-error" class="invalid-feedback">Please enter your name.</div>
					    </div>
					    <div class="form-group">
					      <input type="text" class="form-control" placeholder="Mobile Number" id="phoneDriver">
					      <div id="phoneDriver-error" class="invalid-feedback">Please enter your phone.</div>
					    </div>
					   <div class="seclect_area">
							<div class="form-group">
								<select name="stateOxafleet" onchange="getCity(this.value);" id="stateOxafleet" class="form-control" style="height: 45px;">
									<option>Select State</option>
	                            </select>
	                             <div id="stateOxafleet-error" class="invalid-feedback">Please select state.</div>
							</div>
							<div class="form-group">
							  	<select name="cityDriver" id="cityDriver" class="form-control" style="height: 45px;">
									<option>Select City</option>
	                           	</select>
							</div>
						</div>
						<div class="seclect_area">
						    <div class="form-group">
						    	<select name="vechileOxafleet" id="vechileOxafleet" class="form-control" style="">
									<option>Select Vehicle</option>
		                        </select>
								 <div id="vechileOxafleet-error" class="invalid-feedback">Please select state.</div>
							</div>
							<div class="form-group">
						    	<select name="noOfVechile" id="noOfVechile" class="form-control" style="">
						    		<option>No of Vehicle</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
		                        </select>
								<div id="noOfVechile-error" class="invalid-feedback">Please select state.</div>
							</div>
						</div>
					    <!-- <button type="submit" class="btn btn-primary search_btn_section">Get Started</button> -->
					    <input type="button" class="btn btn-primary search_btn_section" id="submitDriver" value="Get Started">
                        <p id="sussDriver" style="display:none;color: green; font-weight: bold;">Succesfully send</p>
				  </form>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="drivewithservices1">

	<div class="container">
		<h1 class="driving_title">WHY OXA?</h1>
		<div class="row">
			<div class="col-md-4">
				<div class="servi23">
					<h1>WORK WHEN <br> YOU WANT</h1>
					<p>
						Becoming a driver partner with OxaFleet offers you the freedom to work when you want and instantly earn more.
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="servi23">
					<h1>EARN EXTRA <br> CASH</h1>
					<p>
						Earn more by partnering with the best! Regular trips and efficient service can grow your earnings.
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="servi23">
					<h1>ON-TIME <br> PAYMENT</h1>
					<p>
						Be assured to receive all payments on time & get the best in class support when you attach your truck with OXA.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="drivewithservices1 drivewithservices2">
	<div class="container">
		<h1 class="driving_title">MAKING YOUR LIFE EASY</h1>
		<div class="row">
			<div class="col-md-4">
				<div class="driningwithoxaserv">
					<div class="stepcount">
						Step <b>1</b>
					</div>
					<h1>No more waiting on the stand</h1>
					<p>Attach your truck with OXA to have a steady stream of trips and income.​</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="driningwithoxaserv">
					<div class="stepcount">
						Step <b>2</b>
					</div>
					<h1>Earn what you <br> Quote</h1>
					<p>You can take moving requests at your own time. No compulsory trips.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="driningwithoxaserv">
					<div class="stepcount">
						Step <b>3</b>

					</div>
					<h1>Hassle Free Navigation</h1>
					<p>With our GPS based navigation you can drive anywhere across the country without worrying about directions. </p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="drivewithservices1 drivewithservices2">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="manimg">
					<img src="img/man1.png">
				</div>
			</div>
			<div class="col-md-6">
				<div class="oxa_remove_text">
					<img class="commas_icon" src="img/comma-icon.jpg">
					<h1>OXA remove <br> restrictions. I can ship <br> & transport anywhere.’’</h1>
					<p>Dinesh operates in kolkata to earn extra money.</p>
					<a href="<?php echo get_permalink( 41 ); ?>" target="_blank">Learn how they operate</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="drivewithservices1">
	<div class="container">
		<div class="row">
			<?php 
				$args = array('category_name'=>'truck-operators-experience', 'post_status' => 'publish', 'posts_per_page' => '3');
				$recent_posts = new WP_Query($args);
				while( $recent_posts->have_posts() ) :  
				    $recent_posts->the_post() ?>
				    <div class="col-md-4">
						<div class="srviceimg">
							<?php if ( has_post_thumbnail() ) : ?>
					            <?php the_post_thumbnail('full') ?>
					        <?php endif ?>
							<p><?php the_title(); ?></p>
							<div class="content"><?php the_content(); ?></div>
							<a target="_blank" href="<?php echo get_permalink(); ?>">Learn how they operate</a>
						</div>
					</div>
				<?php endwhile; ?>
			<?php wp_reset_postdata();?>
			
			<!-- <div class="col-md-4">
				<div class="srviceimg">
					<img src="img/manimg22.png">
					<p>Manoj franchise in mumbai for the <br> flexibility</p>
					<a href="#">Learn how they operate</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="srviceimg">
					<img src="img/manimg23.png">
					<p>Manoj franchise in mumbai for the <br> flexibility</p>
					<a href="#">Learn how they operate</a>
				</div>
			</div> -->
		</div>
	</div>
</section>
<section class="drivewithservices1">
	<div class="container text-center">
		<a href="faq-transporter"><img src="img/needhelpimg.png" width="600"></a>
	</div>
</section>
<script>
	$('#submitDriver').click(function(){
        var name = $('#nameDriver').val();
        var phone = $('#phoneDriver').val();
        var state = $('#stateOxafleet').val();
        var city = $('#cityDriver').val();
        var vechileOxafleet = $('#vechileOxafleet').val();
        var noOfVechile = $('#noOfVechile').val(); 
        var site_url = $('#site_url').val(); 
        
        if(name.trim() == ''){
            $('#nameDriver').addClass('is-invalid');
            $("#nameDriver-error").show();
            return false;
        }
        if(phone.trim() == ''){
            $('#phoneDriver').addClass('is-invalid');
            $("#phoneDriver-error").show();
            return false;
        }
        if(state == ''){
            $('#stateOxafleet').addClass('is-invalid');
            $("#stateOxafleet-error").show();
            return false;
        }
        if(city == ''){
            $('#cityDriver').addClass('is-invalid');
            return false;
        }
        if(vechileOxafleet == ''){
            $('#vechileOxafleet').addClass('is-invalid');
            $("#vechileOxafleet-error").show();
            return false;
        }
        if(noOfVechile == ''){
            $('#noOfVechile').addClass('is-invalid');
            $("#noOfVechile-error").show();
            return false;
        }
        
        var data= {
                    name: name,
                    phone: phone,
                    state: state,
                    city: city,
                    vechileOxafleet: vechileOxafleet,
                    noOfVechile: noOfVechile, 
                };
        var url = site_url+"websiteapi/index/?lang=en&type=driver_with_us";
        console.log(data);
        $.ajax({
	        type: 'POST', 
	        url: url,
	        data: JSON.stringify(data),
	        contentType: 'application/json',
	        dataType: "json",
	        success: function(data) {
	             console.log("data",data.status);
	             if(data.status == 1){
	                $('#sussDriver').css('display','block');

	                $('#nameDriver').val('');
	                $('#nameDriver').removeClass('is-invalid');
            		$("#nameDriver-error").hide();

	                $('#phoneDriver').val('');
	                $('#phoneDriver').removeClass('is-invalid');
            		$("#phoneDriver-error").hide();

	                $('#stateOxafleet').val('');
	                $('#stateOxafleet').removeClass('is-invalid');
            		$("#stateOxafleet-error").hide();

	                $('#cityDriver').val('');

	                $('#vechileOxafleet').val('');
	                $('#vechileOxafleet').removeClass('is-invalid');
            		$("#vechileOxafleet-error").hide();

	                $('#noOfVechile').val('');
	             	$('#noOfVechile').removeClass('is-invalid');
            		$("#noOfVechile-error").hide();

	             }else{
	                 $('#sussDriver').text('Somthing went worng.');
	                 $('#sussDriver').css('display','block');
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
    
	function getVechile(){
		var site_url = $('#site_url').val(); 
        var url = site_url+"websiteapi/index/?lang=en&type=vechile_wesite";
        $.ajax({
                type: 'POST', 
                url: url,
                contentType: 'application/json',
                dataType: "json",
                success: function(data) {
                    //console.log("data",data); 
                    var options = '<option value="">Select Vehicle</option>';
                    $.each( data, function( key, value ) {
                        options += "<option value='"+value['motor_id']+"'>"+value['motor_name']+"</option>";                     
                    });
                    //console.log(options);
                    $('#vechileOxafleet').html(options);
                },
                error: function(xhr, status, error) {
                    console.log("error: ",error);
                },
            });
    }
    
   getVechile();
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
                    $('#cityDriver').html(options);
                },
                error: function(xhr, status, error) {
                    console.log("error: ",error);
                },
            });
    }

    var input = document.querySelector("#phoneDriver");
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