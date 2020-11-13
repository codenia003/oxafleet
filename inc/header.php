<?php define("DOMAIN", "https://oxafleet.com/"); 
	$url = $_SERVER['REQUEST_URI']; //returns the current URL
  	$parts = explode('/',$url);
 	$what_we_need = $parts[2]; 
 	// print_r($what_we_need);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>OXA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/custom.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/custom-mobile.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/intlTelInput.css">
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/intlTelInput.js"></script>
    <script src="js/common.js"></script>
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
	<script>
		$(window).scroll(function(){
		    if ($(window).scrollTop() >= 300) {
		        $('header').addClass('fixed-header');
		        $('header div').addClass('visible-title');
		    }
		    else {
		        $('header').removeClass('fixed-header');
		        $('header div').removeClass('visible-title');
		    }
		});
	</script>
</head>
<body>

<!-- header -->
<header class="header" id="myHeader">
	<div class="container">
		<!-- nav -->
		<nav class="py-md-4 py-3 d-lg-flex">
			<div id="logo">
				<a href="index">
					<img src="img/logo.png">
				</a>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu p-3 ml-auto">
				<?php if ($what_we_need != "drive-with-us"): ?>
					<li class="active"><a href="drive-with-us">Drive with us</a></li>
					<!-- <li class=""><a href="become-a-franchise">Become a Franchise</a></li> -->
				<?php endif ?>
				<li class=""><a href="support">Support</a></li>
				<li class="mr-2"><a id="contact_click" href="#footer">Contact</a></li>
			</ul>
			<div class="top_bar_right_wrapper">
	            <a href="https://play.google.com/store/apps/details?id=com.tempotruck.customer" class="action_button" target="_blank" style="background: url(img/googleplay.png) -9px -58px no-repeat; padding: 55px 86px 8px 86px; display: block; float: left;background-position: 100%;background-size: 100%;"> </a>
	        </div>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->