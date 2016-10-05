<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	
	<title></title>
	
	<!--[if lt IE 9]>
	<script src="./assets/javascripts/html5.js"></script>
	<![endif]-->
	
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="./assets/stylesheets/demo.css" />
	<!--[if (gt IE 8) | (IEMobile)]><!-->
	<link rel="stylesheet" href="./assets/stylesheets/unsemantic-grid-responsive-tablet.css" />
	<!--<![endif]-->
	<!--[if (lt IE 9) & (!IEMobile)]>
	<link rel="stylesheet" href="./assets/stylesheets/ie.css" />
	<![endif]-->
	
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>


<div class="jquery-script-clear"></div>
</head>

<style type="text/css">

.parallax-window {
    min-height: 400px;
    background: transparent;
}

span {

text-align: center;
}
span > span {
margin-bottom: 0;
}

code, code > span {
text-align: center;
display: block;
/*font-family: Monaco, monospace;
background: #444;
color: #fff;*/
padding: 20px;

}
code > span {
padding: 0;
margin: 0;
}

.column {
	margin: 15px 15px 0;
	padding: 0;
}
.column:last-child {
	padding-bottom: 60px;
}
.column::after {
	content: '';
	clear: both;
	display: block;
}
.column div {
	position: relative;
	float: left;
	width: 300px;
	height: 200px;
	margin: 0 0 0 25px;
	padding: 0;
}
.column div:first-child {
	margin-left: 0;
}
.column div span {
	position: absolute;
	bottom: -20px;
	left: 0;
	z-index: -1;
	display: block;
	width: 300px;
	margin: 0;
	padding: 0;
	color: #444;
	font-size: 18px;
	text-decoration: none;
	text-align: center;
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
	opacity: 0;
}
figure {
	width: 300px;
	height: 200px;
	margin: 0;
	padding: 0;
	background: #fff;
	overflow: hidden;
}
figure:hover+span {
	bottom: -36px;
	opacity: 1;
}

.hover06 figure img {
	-webkit-transform: rotate(15deg) scale(1.4);
	transform: rotate(15deg) scale(1.4);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover06 figure:hover img {
	-webkit-transform: rotate(0) scale(1);
	transform: rotate(0) scale(1);
}


</style>
<body>
	

	<div class="container">
		<?php include_once("includes/menu.php") ?>
		<?php include_once("includes/mobile_menu.php") ?>
		<div class="pad0 grid-100 mobile-grid-100 container1 " style="">
			<div class="grid-100 mobile-grid-100">
				<div class="grid-5 mobile-grid-5">
					<img class="tractor bee animate1" src="images/tractor.png" alt="">
				</div>
				<div class="grid-5 mobile-grid-5">
					<img class="track1 bee1 animate2" src="images/track1.png" alt="">
				</div>

				<div class="grid-5 mobilr-grid-5">
					<img class="truck2 bee1 animate3" src="images/truck1.png" alt="">
				</div>
				<div class="grid-5 mobile-grid-5">
					<img class="car1 bee animate4" src="images/02.png" alt="">
				</div>
				<div class="grid-5 mobile-grid-5">
					<img class="car2 bee animate5" src="images/04.png" alt="">
				</div>
				<div class="grid-5 mobile-grid-5">
					<img class="crane1 animate6" src="images/crane1.png" alt="">
				</div>
				<div class="grid-5 mobile-grid-5 ">
					<div class="hover05 column">
						<img class="ship" data-sr='wait 0.8s, scale up 30%' src="images/ship.png" alt="">
					</div>
				</div>
				<div class="grid-5 mobile-grid-5">
					<img class="car3" src="images/03.png" alt="">
				</div>
			</div>
		</div>
		<div class="pad0 grid-100 mobile-grid-100 about_us">
			<!-- <img class="about_us" class="wdh" src="images/bg2.png"> -->
			<div class="pad0 grid-60 prefix-20 mobile-grid-80 mobile-prefix-10 ">
				<h1 class="p_t" >About us</h1>
				<p style="color:#2b3e5f">The Adani Group is one of India's leading business houses with revenue of about $9.4 billion<br> 
					for the financial year 2014-15. </p>

				<p style="color:#2b3e5f">Founded in 1988, Adani has grown to become a global integrated infrastructure player with businesses in key<br> 
				   industry verticals - resources, logistics and energy. The integrated model is well adapted to cater to the 
				   infrastructure opportunities of the emerging economies. The Group has also made significant inroads in the agri-infr-astructure business by setting upgrain storage silos and cold storage facilities. We are a market leader in edible oil business with our Fortune brand of oil leading the pack.</p> 

				<p style="color:#2b3e5f">We live in the communities where we operate in and take our responsibilities to the society, seriously. 
				   Through Adani Foundation, we ensure that development and progress are sustainable and inclusive; for the people and the eco-system, alike. At Adani, we believe in delivering benefits that transcend our immediate stakeholders. </p>
			</div>
			<div class="grid-80 prefix-10 mobile-grid-100 ">
				<div class="grid-30 mobile-grid-100">
					<img class="casa1" class="wdh" src="images/casa1.png" alt="">
				</div>
				<div class="grid-40 mobile-grid-100">
					<img class="wdh casa" src="images/casa2.png" alt="">
				</div>
				<div class="grid-30 mobile-grid-100">
					<img class="casa2" style="" class="wdh" src="images/casa3.png" alt="">
				</div>
			</div>
			
			
			
		</div>

		<!--div class="pad0 grid-100 home">
			<div class="pad0 grid-60 prefix-20">
				<div class="pad0 grid-20">
					<h1>nwkndkws</h1>
				</div>
				<div class="pad0 grid-20">
					
				</div>
				<div class="pad0 grid-20">
					
				</div>
				<div class="pad0 grid-20">
					
				</div>
			</div>
		</div-->
		
		
		
		<!-- ticker -->
		
		<div class="pad  home grid-100 mobile-grid-100">
			<div class="pad0 grid-60 prefix-20 mobile-grid-100" style="margin-top: 2%;">
			
				<ul style="display`: inline-block !important; list-style-type: none;">
					<li style="margin-left:0px!important;">
						<div class="pad0 grid-20 mobile-grid-100">	
							<div class="pad0 grid-20 prefix-40 mobile-grid-100 ">
								<img class="wdh ticker_image" src="images/ticker1.png">
							</div><br />
							<div class="grid-100 mobile-grid-100">
								<span class="counter bold_number" >2000</span>
							</div>
							<div class="pad0 grid-50 prefix-25 mobile-grid-100">
								<p class="counter_year">Year
								Established</p>
							</div>
						</div>
					</li>
					
					<div class="pad0 grid-5 hide-on-mobile" style="margin-top:3%;">
						<img style="width:20%;" src="images/white_pipe.png">
					</div>
					
					
					<li style="margin-left:0px!important;">
						<div class="pad0 grid-20 mobile-grid-100" >	
							<div class="pad0 grid-20 prefix-40 mobile-grid-100">
								<img class="wdh ticker_image" src="images/ticker2.png">
							</div><br />
							<div class="grid-100 mobile-grid-100">
								<span class="counter bold_number" ><b>206</b></span>
							</div>
							<div class="pad0 grid-50 prefix-25 mobile-grid-100">
								<p class="counter_year">Projects
								Completed</p>
							</div>
						</div>
					</li>
					
					<div class="pad0 grid-5 hide-on-mobile" style="margin-top:3%;">
						<img style="width:20%;" src="images/white_pipe.png">
					</div>
					
					<li style="margin-left:0px!important;">
						<div class="pad0 grid-20 mobile-grid-100" >	
							<div class="pad0 grid-20 prefix-40 mobile-grid-100">
								<img class="wdh ticker_image" src="images/ticker3.png">
							</div><br />
							<div class="grid-100 mobile-grid-100">
								<span class="counter bold_number" ><b>870</b></span>
							</div>
							<div class="pad0 grid-50 prefix-25 mobile-grid-100">
								<p class="counter_year">Contractors
								Appointed</p>
							</div>
						</div>
					</li>
					
					<div class="pad0 grid-5 hide-on-mobile" style="margin-top:3%;">
						<img style="width:20%;" src="images/white_pipe.png">
					</div>
					
					<li style="margin-left:0px!important;">
						<div class="pad0 grid-20 mobile-grid-100">	
							<div class="pad0 grid-20 prefix-40 mobile-grid-100">
								<img class="wdh ticker_image" src="images/ticker4.png">
							</div><br />
							<div class="grid-100 mobile-grid-100">
								<span class="counter bold_number" >26</span>
							</div>
							<div class="pad0 grid-50 prefix-25 mobile-grid-100">
								<p class="counter_year">Awards
								Won</p>
							</div>
						</div>
					</li>
				</ul>
			
			</div>
		</div>
		
		
		<!-- ticker -->
		
		
		
		
		
		
		<div class="pad0 grid-100 ">
			<div class=" pad0 grid-100 residential ">

				<h1 class="p_t" style="color:#334564;" >Residential</h1>
				<img class="hr_line"src="images/horizontal_line.png" alt="">
				<div class="cm grid-35 prefix-35" style="margin-top:3%;">
					<img class="wdh" src="images/res1.png" alt="">
					<div class="grid-10">
						<img style="position: absolute;top: 38%;width: 2%; " src="images/coms_bcloud.png" alt="">
					</div>
					<div class="grid-10">
						<img style="position: absolute;width: 3%;top: 20%;right: 35%;" src="images/coms_scloud.png" alt="">
					</div>
					<div class="grid-10">
						<img style="position: absolute;width: 4%; top: 24%;left: 46%;" src="images/coms_bcloud.png" alt="">
					</div>
					<div class="grid-10">
						<img style="position: absolute;top: 25%;width: 3%;left: 39%;" src="images/r_bird1.png" alt="">
					</div>
					<div class="grid-10">
						<img style="position: absolute;top: 28%;width: 2%;left: 43%;" src="images/r_bird1.png" alt="">
					</div>
					<div class="grid-10">
						<img style="position: absolute;top: 41%;width: 2%;right: 33%;" src="images/r_bird1.png" alt="">
					</div>
				</div>
			</div>
			
		</div>
		<div class="pad0 grid-100">
			<div class=" pad0 grid-100 comercial p_t">
				<h1 class="p_t">Comercial</h1>
				<img class="hr_line" src="images/horizontal_line.png" alt="">

				<div class="cm grid-40 prefix-30" style="margin-top:5%;">
					<img class="wdh" src="images/coms1.png" alt="">
					<div class="grid-10">
						<img style="position: absolute;top: 28%;width: 3%;left: 38%;" src="images/r_bird1.png" alt="">
					</div>
					<div class="grid-10">
						<img style="position: absolute;width: 5%; top: 16%;left: 46%;" src="images/coms_bcloud.png" alt="">
					</div>
					<div class="grid-10">
						<img style="position: absolute;width: 3%;top: 40%;left: 35%;" src="images/coms_scloud.png" alt="">
					</div>
					<div class="grid-10">
						<img style="position: absolute; top: 25%;  width: 4%;right: 504px;" src="images/r_bird1.png" alt="">
					</div>
					<div class="grid-10">
						<img style="position: absolute;top: 29%; width: 3%;right: 459px;" src="images/r_bird1.png" alt="">
					</div>
					<div class="grid-10">
						<img style="position: absolute;top: 37%;width: 3%; right: 403px;" src="images/coms_bcloud.png" alt="">
					</div>
					
				</div>

			</div>
		</div>

		<div class="pad0 grid-100">
			<div class="pad0 grid-100 club">
				<h1 class="p_t" style="color:#fff;">Clubs</h1>
				<img class="hr_line" src="images/w_horizontalline.png" alt="">

				<div class="cm grid-40 prefix-30">
					<img class="wdh" src="images/clubs.png" alt="">
					<div class="grid-100">
						<div class="grid-10">
								<img style="position: absolute;top: 19%;width: 4%; left: 583px;" src="images/coms_bcloud.png" alt="">
						</div>
						<div class="grid-10">
								<img style="position: absolute;top: 29%; width: 4%;left: 517px;" src="images/club_bird1.png" alt="">
						</div>
						<div class="grid-10">
								<img style="position: absolute;width: 3%; top: 37%;left: 35%;" src="images/coms_scloud.png" alt="">
						</div>
						<div class="grid-10">
								<img style="position: absolute;top: 21%;width: 3%; right: 438px;" src="images/coms_bcloud.png" alt="">
						</div>
						<div class="grid-10">
								<img style="position: absolute;top: 19%; width: 3%;right: 376px;" src="images/club_bird1.png" alt="">
						</div>
					</div>

				</div>

			</div>
		</div>

		<div class="pad0 grid-100 mobile-grid-100" style="background-color:#eeeeee;margin-bottom:2%;">
			<div class="pad0 current_projects grid-100 mobile-grid-100 ">
					<img class="p_t" style="float: right;width: 60%;padding-bottom: 2%;" src="images/our_current_project.png" alt="">
				<div class="pad0 grid-60 prefix-20 mobile-grid-100 " style="margin-bottom:2%;">
					<div class="bee grid-40 prefix-10 mobile-grid-80 mobile-prefix-10">
							<img class="wdh" src="images/current_projects.png" alt="">
					</div>
					<div class="bee1 grid-50 mobile-grid-80 mobile-prefix-10 ">
							<p style="margin-top:17%;text-align:left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
								magna aliqua. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							<button  style="background-color: #bb1446; border: none;padding: 4%;color: #fff;font-weight: bold;border-radius: 10px; float:left;" 
							type="button">ENQUIRY NOW</button>

					</div>
				</div>
				

			</div>
		</div>

		<div class="pad0 grid-100 mobile-grid-100">
			<div class="cm grid-50 prefix-25" style="margin-top:3%;margin-bottom:3%;">
				<div class="grid-33 mobile-grid-100">
					<div class="Knowledge grid-100" style="margin-bottom:3%;">
						<a href="url">Knowledge Cafe</a>
					</div>
					<div class="grid-100 mobile-grid-100">
						<img class="wdh" src="images/knowledge_cafe.png" alt="">
					</div>
					<div class="grid-100 mobile-grid-100">
						<p  class="Knowledge_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
					</div>

					<div class="learn1  grid-100  mobile-grid-100">
						<a href="google.com">Learn More</a>
					</div>
					
				</div>
				<div class="grid-33 mobile-grid-100 ">
					<div class=" Knowledge grid-100 mobile-grid-100" style="margin-bottom:3%;">
						<a href="url" style="margin-bottom:3%;">Media Center</a>
					</div>
					<div class="grid-100 mobile-grid-100">
						<img class="wdh" src="images/media_center.png" alt="">
					</div>
					<div class="grid-100 mobile-grid-100">
						<p class="Knowledge_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
					</div>

					<div class="learn2 grid-100  mobile-grid-100">
						<a href="google.com">Learn More</a>
					</div>
					
				</div>
				<div class="grid-33  mobile-grid-100">
					<div class=" Knowledge grid-100 mobile-grid-100" style="margin-bottom:3%;">
						<a href="url">Careers</a>
					</div>
					<div class="grid-100 mobile-grid-100">
						<img class="wdh" src="images/careers.png" alt="">
					</div>
					<div class="grid-100 mobile-grid-100">
						<p class="Knowledge_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
					</div>

					<div class="learn3 grid-100  mobile-grid-100">
						<a href="google.com">Learn More</a>
					</div>
					
				</div>
			</div>

			<div class="cm grid-50 prefix-25 mobile-grid-100" style="margin-bottom:3%;">
				<div class="grid-50 mobile-grid-100">
					<div class="Knowledge grid-100 mobile-grid-100" style="margin-bottom:3%;">
						<a href="url">Investor Center</a>
					</div>
					<div class="grid-100 mobile-grid-100">
						<img class="wdh" src="images/investor_center.png" alt="">
					</div>

				</div>
				<div class="grid-50 mobile-grid-100">
					<div class="Knowledge grid-100 mobile-grid-100" style="margin-bottom:3%;">
						<a href="url">NRI Corner</a>
					</div>
					<div class="grid-100 mobile-grid-100">
						<img class="wdh" src="images/nri_corner.png" alt="">
					</div>
				</div>
				
			</div>
			
		</div>

		<div class="pad0 contact_us grid-100  mobile-grid-100">
			<div class="bee pad0 grid-100 mobile-grid-100">
				<div class="grid-30 prefix-20 mobile-grid-100">
					<p class="contact_us_text">Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit, sed do eiusmod tempor </p>
					
				</div>
			</div>
			<div class="cm grid-100">
				<div class="grid-30 prefix-20 ">
					<button style="background-color: #ef5f23;border: none;border-radius: 10px;padding: 4% 11%;float: left; margin-left: 12%;color: #fff;font-weight: bold;font-size: 18px;" type="button">CONTACT US</button>
				</div>
			</div>
			
		</div>

		<div class="pad0 grid-100 mobile-grid-100" style="background-color: #222222;color:#fff;">

			<div class="pad0 grid-50 mobile-grid-100 " style="margin-top:3%;">
				<div class="grid-40 prefix-60 mobile-grid-100 ">
					<h5 class="ml7 tl">TESTIMONIAL</h5>

					<div class="grid-100 mobile-grid-100 ">
						<div class="grid-10 mobile-grid-20">
							<img class="wdh " src="images/rohan.png" alt="">
						</div>
						<div class="grid-90 mobile-grid-80">
							<h6 class="rohan" >ROHAN KAPOOR</h6>
						</div>
					</div>

					<div class="grid-100 mobile-grid-100">
						<p style="text-align:left;margin-left: 4%; margin-top: 3%;color:#565656!important;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
								magna aliqua. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>

			<div class="grid-50 mobile-grid-100" style="margin-bottom:3%;margin-top:3%;">
				<div class="grid-100 mobile-grid-100">
					<h5 class="blog" >BLOG</h5>
				</div>
				<div class="grid-100 mobile-grid-100" style="margin-bottom:2%;">
					<div class="grid-15 mobile-grid-20">
							<img class="wdh" src="images/blog1.png" alt="">
					</div>

					<div class="grid-50 mobile-grid-80">
					<ul style="list-style-type: none;">
						<li style="text-align:left;margin-left:0px!important;"><b>Lorem Ipsum is simply Dummy</b></li>
						<li style="text-align:left;margin-left:0px!important;color:#565656!important;">Lorem Ipsum is simply </li>
						<li style="text-align:left;margin-left:0px!important;color:#565656!important;">Dummy text of the... </li>
					</ul>
					</div>
				</div>

				<div class="grid-100 mobile-grid-100" style="margin-bottom:2%;">
					<div class="grid-15 mobile-grid-20">
							<img class="wdh" src="images/blog2.png" alt="">
					</div>

					<div class="grid-50 mobile-grid-80">
					<ul style="list-style-type: none;">
						<li style="text-align:left;margin-left:0px!important;"><b>Lorem Ipsum is simply Dummy</b></li>
						<li style="text-align:left;margin-left:0px!important;color:#565656!important;">Lorem Ipsum is simply </li>
						<li style="text-align:left;margin-left:0px!important;color:#565656!important;">Dummy text of the... </li>
					</ul>
					</div>
				</div>

				<div class="grid-100 mobile-grid-100" >
					<div class="grid-15 mobile-grid-20">
							<img class="wdh" src="images/blog3.png" alt="">
					</div>

					<div class="grid-50 mobile-grid-80">
					<ul style="list-style-type: none;">
						<li style="text-align:left;margin-left:0px!important;"><b>Lorem Ipsum is simply Dummy</b></li>
						<li style="text-align:left;margin-left:0px!important;color:#565656!important;">Lorem Ipsum is simply </li>
						<li style="text-align:left;margin-left:0px!important;color:#565656!important;">Dummy text of the... </li>
					</ul>
					</div>
				</div>
			</div>
		
			
			
		</div>

		<div class="grid-100 mobile-grid-100" style="background-color:#313234;color:#fff;">
			<div class="pad0 grid-50 mobile-grid-100 " style="margin:1% 0%;">
				<div class="pad0 grid-75 prefix-15 mobile-grid-100">
					<ul class="f_ul footer_ul">
						<li class="footer_li">Terms & Conditions</li>
						<li class="footer_li">|</li>
						<li class="footer_li">Privacy policy</li>
						<li class="footer_li">|</li>
						<li class="footer_li">Contact Us</li>
					</ul>
				</div>
				
			</div>
			<div class="grid-50 mobile-grid-100" style="margin:1% 0%;">
				<p>@2016 All Rights Reserved</p>
			</div>
		</div>

		
		
		<!--footer-->
		<?php include_once("includes/footer.php") ?>
		<!--footer-->
		
	</div>
	 <script src="js/scrollreveal.js" type="text/javascript"></script> 

	<script type="text/javascript">
		window.sr = ScrollReveal({ reset: true });
		sr.reveal('.bee1',{ origin      : 'right',distance    : '200px',easing   : 'ease-in',duration: 5000 });
		sr.reveal('.bee',{ origin      : 'left',distance    : '200px',easing   : 'ease-in',duration: 5000 });
		sr.reveal('.cm',{ origin      : 'bottom',distance    : '200px',easing   : 'ease-in',duration: 5000 });

		// sr.reveal('.animate1',{ origin : 'left',	distance : '200px', duration: 5000 });
		// sr.reveal('.animate2',{ origin : 'left',	distance : '200px', duration: 5000 });
		// sr.reveal('.animate3, .car3',{ origin : 'right',	distance : '500px', duration: 5000 });
		// sr.reveal('.animate4',{ origin : 'left',	distance : '300px', duration: 5000 });
		// sr.reveal('.animate5',{ origin : 'left',	distance : '500px', duration: 5000 });
		// sr.reveal('.ship',{ origin : 'bottom',	distance : '200px', duration: 5000 });
		// sr.reveal('.animate6',{ origin : 'bottom',	distance : '200px', duration: 5000 });

	
    </script> 
    
	<script src="./assets/javascripts/jquery.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/script.js"></script>
	<script src="./assets/javascripts/demo.js"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> 
<script src="js/jquery.counterup.min.js"></script> 
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 3000
        });
    });
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>