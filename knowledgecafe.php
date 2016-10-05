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
.contact1 {
	width: 100% !important;
    height: 80% !important;
	position: relative;
    background: url(./images/bg4.png) no-repeat;
    background-size: 100% 100%;
}
.banner_container{
	width: 100%;
	height: auto;
	padding: 0%;
	margin: 0%;
}

</style>

<body>
	<div class="container">
			<div class="pad0 grid-100 tablet-grid-100 mobile-grid-100 contact1">
				<!-- <img class="about_us" class="wdh" src="images/bg2.png"> -->
								<!--menu-->
				<?php include_once("includes/menu.php") ?>
				<!--menu-->

				<!--menu-->
				<?php include_once("includes/mobile_menu.php") ?>
				<!--menu-->
		
			</div>
			
			<div class="pad0 grid-60 prefix-20 tablet-grid-60 tablet-prefix-20 mobile-grid-80 mobile-prefix-10 ">
					<h1 class="p_t about_us_text" style="" >Knowledge Cafe</h1>
					<p class="about_us_text1" >The Adani Group is one of India's leading business houses with revenue of about $9.4 billion<br> 
						for the financial year 2014-15. </p>
			</div>
		
			<!--footer-->
			<?php include_once("includes/footer.php") ?>
			<!--footer-->	
	</div>
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $(".m").slideToggle();
    });
});
</script>
</body>
</html>