<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<link rel="icon" href="images/fav icon.png" type="image/png">
	<title>Media Center</title>
	<!--[if lt IE 9]>
	<script src="./assets/javascripts/html5.js"></script>
	<![endif]-->
<!-- 	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="./assets/stylesheets/demo.css" /> -->
	<!--[if (gt IE 8) | (IEMobile)]><!-->
	<!-- <link rel="stylesheet" href="./assets/stylesheets/unsemantic-grid-responsive-tablet.css" /> -->
	<!--<![endif]-->
	<!--[if (lt IE 9) & (!IEMobile)]>
	<link rel="stylesheet" href="./assets/stylesheets/ie.css" />
	<![endif]-->
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="./assets/stylesheets/demo.css" />
	<link rel="stylesheet" href="./assets/stylesheets/unsemantic-grid-responsive-tablet.css" />
	<link rel="stylesheet" href="css/demo.css" />
	
	<link rel="stylesheet" href="css/default.css" />

	



	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

	  

	<style type="text/css">
		.container {
		    width: 100%;
			padding: 0;
		}
		.c_container1 {
		  width: 100% !important;
		    height: 82% !important;
			position: relative;
		    background: url(images/Media_center_new_bf.png) no-repeat;
		    background-size: 100% 100%;
		}

		.banner_container{
			width: 100%;
			height: auto;
			padding: 0%;
			margin: 0%;
		}
		hr{
		    margin-top: 20px;
		    margin-bottom: 20px;
		    border: 0;
		    border-top: 1px solid #eee;
		}

		.coverimg { margin: 10px 0 }

.coverimg a {
  display: inline-block;
  width: 100%;
  height: 200px;
  overflow: hidden;
  position: relative
}

.coverimg img {
  max-height: 100%;
  min-width: 100%;
  width: auto;
  left: 50%;
  -o-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
  position: absolute
}

img[data-gallery] { cursor: pointer }

.overlay {
  background: rgba(0,0,0,0.7);
  display: none;
  height: 100%;
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 999
}

.imgActive img {
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  position: absolute;
  top: 50%;
  left: 50%;
  max-width: 100%;
  max-height: 90%
}

.prev,
.next,
.close {
  transition: 0.3s ease all;
  display: inline-block;
  color: white;
  font-size: 6rem;
  opacity: 0.2;
  z-index: 1000
}

.prev:hover,
.next:hover,
.close:hover {
  cursor: pointer;
  opacity: 1
}

.prev,
.next {
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  position: absolute;
  top: 50%
}

.prev { left: 100px }

.next { right: 100px }

.close {
  font-size: 4rem;
  position: absolute;
  top: 20px;
  right: 20px
}

.coverImgOverlay {
  bottom: 20px;
  height: 100px;
  left: 50%;
  overflow: hidden;
  position: absolute;
  width: 3000%;
  z-index: 1000
}

.coverImgOverlay span {
  display: inline-block;
  height: 100px;
  margin: 5px;
  overflow: hidden;
  position: relative;
  width: 100px
}

.coverImgOverlay img {
  transition: 0.3s ease all;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  position: absolute;
  top: 50%;
  left: 50%;
  max-height: 100%;
  min-width: 100%;
  opacity: 0.2;
  width: auto
}

.coverImgOverlay img:hover { opacity: 1 !important }
	</style>
</head>
<body>
	<div class="container">
		<div class="pad0 grid-100 tablet-grid-100 mobile-grid-100 nri1" style="background: url(./images/Media_center_new_bf.png) no-repeat; background-size: 100% 100%">
			<?php include_once("includes/menu.php") ?>
			<?php include_once("includes/mobile_menu.php") ?>
		</div>
		<div class="pad0 grid-80 prefix-10 tablet-grid-80 tablet-prefix-10 mobile-grid-80 mobile-prefix-10 ">
			<h1 class=" about_us_text" style="text-align: center; padding: 1% 0">Blogs <hr></h1>
		</div>		
		<div class="grid-60 prefix-10  tablet-grid-60 tablet-prefix-5 mobile-grid-90 mobile-prefix-5" >
			<div class="grid-100 tablet-grid-100 mobile-grid-100" style="padding-bottom: 2%">
				<div class=" grid-30 tablet-grid-40 pad0">
					<img src="images/media4.png" alt="" style="width: 100%;">
				</div>
				<div class="grid-70 tablet-grid-60" style="text-align:left;">
					<h3 style="margin-bottom:0px!important;color:#2B3E5F!important;">Redefining The Good Life: The Belvedere Golf and Country Club</h3>
					<p style="font-size:12px;color:#2B3E5F!important;text-align:justify;">Reinvent yourself with a membership at The Belvedere Golf and Country Club that includes a par, 9-hole golf course spread over 69 acres, and membership to an exclusive social club with dozens of lifestyle amenities for every member of the family.</p>
					<a href="residential_real.php" style="color:#2B3E5F!important;">Read More</a>
				</div>
			</div>
			<hr>
			<div class="grid-100 tablet-grid-100 mobile-grid-100" style="padding-bottom: 2%">
				<div class=" grid-30 tablet-grid-40 pad0">
					<img src="images/media3.png" alt="" style="width: 100%;">
				</div>
				<div class="grid-70 tablet-grid-60" style="text-align:left;">
					<h3 style="margin-bottom:0px!important;color:#2B3E5F!important;">Integrated Townships:The residential format of the future</h3>
					<p style="font-size:12px;color:#2B3E5F!important;text-align:justify;">Integrated Townships are mammoth real estate projects that haveboth residential and commercial complexes, and all associated infrastructure like roads, schools, colleges, hospitals, shopping centers, water treatment plants....</p>
					<a href="residential_real.php" style="color:#2B3E5F!important;">Read More</a>
				</div>
			</div>
			<hr>
			<div class="grid-100 tablet-grid-100 mobile-grid-100" style="padding-bottom: 2%">
				<div class=" grid-30 tablet-grid-40 pad0">
					<img src="images/media2.png" alt="" style="width: 100%;">
				</div>
				<div class="grid-70 tablet-grid-60 " style="text-align:left;">
					<h3 style="margin-bottom:0px!important;color:#2B3E5F!important;">Home is not a place, it’s a feeling.</h3>
					<p style="font-size:12px;color:#2B3E5F!important;text-align:justify;">From thatched roofed huts to buildings. From comfortable houses to luxurious homes, modern day architecture has come a long way since its inception. The concept of homes has evolved too! Where homes were earlier used as a shelter...</p>
					<a href="residential_real.php" style="color:#2B3E5F!important;">Read More</a>
				</div>
			</div>
			<hr>
			<div class="grid-100 tablet-grid-100 mobile-grid-100" style="padding-bottom: 2%">
				<div class="grid-30 tablet-grid-40 pad0">
					<img src="images/media1.png" alt="" style="width: 100%;">
				</div>
				<div class="grid-70 tablet-grid-60" style="text-align:left;">
					<h3 style="margin-bottom:0px!important;color:#2B3E5F!important;">Affordable Housing: Comfort within Everyone’s Reach</h3>
					<p style="font-size:12px;color:#2B3E5F!important;text-align:justify;">One of the major investments that a person makes during his lifetime is buying his dream home; a decision taken after considering every possible factor that defines good living and spells comfort for them. People are becoming more cautious...</p>
					<a href="residential_real.php" style="color:#2B3E5F!important;">Read More</a>
				</div>
			</div>
		</div>
		<div class="grid-20 tablet-grid-30 mobile-grid-100" style="margin-bottom:3%;">
			<div class="grid-100 tablet-grid-100 mobile-grid-100" style="background: #efefef; text-align: left;padding: 5%;margin-bottom:3%;">
				<div class="Knowledge grid-100 tablet-grid-100 mobile-grid-100" style="">
					<h6 class="" style="color:#2B3E5F!important;"><b>Home is not a place, it’s a feeling.</b></h6>
				</div>
				<div class="grid-100 tablet-grid-100 mobile-grid-100">
					<img class="wdh " src="images/picture_clipping.png" alt="" style="height: 200px">
				</div>
				<div class="grid-100 tablet-grid-100 mobile-grid-100">
					<p class="Knowledge_text " style="text-align: left;font-size:12px;color:#2B3E5F!important;text-align:justify;">Apart from the exuberant amenities, real estate property developers like Adani Realty ...</p>
				</div>
				<div class=" learn1 grid-100 tablet-grid-100 mobile-grid-100">
					<a href="career.php" style="color:#2B3E5F!important;">Read More</a>
				</div>
			</div>
			<hr>
			<div class="grid-100 tablet-grid-100 mobile-grid-100" style="background: #efefef; text-align: left;padding: 5%;margin-bottom:3%;">
				<div class=" Knowledge grid-100 tablet-grid-100 mobile-grid-100" style="">
					<h6 style="color:#2B3E5F!important;"><b>The concept of Shantigram</b></h6>
				</div>
				<div class="grid-100 tablet-grid-100 mobile-grid-100">
					<img class="wdh " src="images/article222.png" alt="" style="height: 200px">
				</div>
				<div class="grid-100 tablet-grid-100 mobile-grid-100">
					<p class="Knowledge_text " style="text-align: left;font-size:12px;color:#2B3E5F!important;text-align:justify;">Can a single project change the face of an entire state? With the development of Shantigram ...</p>
				</div>
				<div class=" learn1 grid-100 tablet-grid-100 mobile-grid-100">
					<a  href="career.php" style="color:#2B3E5F!important;">Read More</a>
				</div>
			</div>
		</div>
		<div class="grid-80 prefix-10 mobile-grid-90 mobile-prefix-5 tablet-grid-90 tablet-prefix-5 pad0" style="margin-bottom:2%;">
			<h1 class=" about_us_text" style="text-align: center; padding: 1% 0">News About Us <hr></h1>
				<div class="coverimg">
					<div class="grid-25 news">
						<a href="#"><img src="images/news1.jpg" data-gallery="first-gallery" alt=""/></a>
					</div>
					<div class="grid-25 news">
						<a href="#"><img src="images/news2.jpg" data-gallery="first-gallery" alt=""/></a>
					</div>
					<div class="grid-25 news">
						<a href="#"><img src="images/news2.jpg" data-gallery="first-gallery" alt=""/></a>
					</div>
					<div class="grid-25 news">
						<a href="#"><img src="images/news4.jpg" data-gallery="first-gallery" alt=""/></a>
					</div>
					<div class="grid-25 news">
						<a href="#"><img src="images/news5.jpg" data-gallery="first-gallery" alt=""/></a>
					</div>
					<div class="grid-25 news">
						<a href="#"><img src="images/news6.jpg" data-gallery="first-gallery" alt=""/></a>
					</div>
					<div class="grid-25 news">
						<a href="#"><img src="images/news7.jpg" data-gallery="first-gallery" alt=""/></a>
					</div>
					
				</div>
        </div>
		<div class="" style="font-size: 13px;">
			<!-- </!--footer--> 
			<?php include_once("includes/footer.php") ?>
			<!--footer-->
		</div>
	</div>
	<script src="./assets/javascripts/jquery.js"></script>
	<script src="js/script.js"></script>
	<script src="./assets/javascripts/demo.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/jquery-gallery.js"></script>
	<script>
		$(document).ready(function(){
		    $("button").click(function(){
		        $(".m").slideToggle();
		    });
})
		 
	</script>
	<script>
$(document).jquerygallery({

// displays a thumbnails navigation
'coverImgOverlay' : true,

// CSS classes
'imgActive' : "imgActive",
'thumbnail' : "coverImgOverlay",
'overlay' : "overlay",

// the height of the thumbnails
'thumbnailHeight' : 120,

// custom navigation controls. 
// requires Font Awesome
'imgNext' : "<i class='fa fa-angle-right'></i>",
'imgPrev' : "<i class='fa fa-angle-left'></i>",
'imgClose' : "<i class='fa fa-times'></i>",

// animation speed
'speed' : 300

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

</body>
</html>