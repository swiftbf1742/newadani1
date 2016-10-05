<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<link rel="icon" href="images/fav icon.png" type="image/png">
	<title>Home</title>
	<!--[if lt IE 9]>
	<script src="./assets/javascripts/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/style.css?v=ajshd" />
	<link rel="stylesheet" href="./assets/stylesheets/demo.css" />
	<!--[if (gt IE 8) | (IEMobile)]><!-->
	<link rel="stylesheet" href="./assets/stylesheets/unsemantic-grid-responsive-tablet.css" />
	<!--<![endif]-->
	<!--[if (lt IE 9) & (!IEMobile)]>
	<link rel="stylesheet" href="./assets/stylesheets/ie.css" />
	<![endif]-->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<div class="jquery-script-clear"></div>

	<link href="css/jquery.bxslider.css" rel="stylesheet" />
	


	<script src="./assets/javascripts/jquery.js"></script>
	<script src="js/script.js"></script>
	<script src="./assets/javascripts/demo.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>

	<style type="text/css">
		body{
			overflow-x: hidden!important;
		}
	    .parallax-window {
	        min-height: 400px;
	        background: transparent;
	    }
	    
	    span {
	        text-align: center;
	    }
	    
	    span> span {
	        margin-bottom: 0;
	    }
	    
	    code, code> span {
	        text-align: center;
	        display: block;
	        /*font-family: Monaco, monospace;
			background: #444;
			color: #fff;*/
	        padding: 20px;
	    }
	    
	    code> span {
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

	    #owl-demo .item img{
		    display: block;
		    width: 100%;
		    height: auto;
		}
		.fa {
		    font-size: 43px!important;
		}

		/*.fa:hover{
				color: #fff;
		}
		*/
		.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.4s ease-in;
  transition: all 0.4s ease-in;
}

.hovereffect:hover img {
  filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feColorMatrix type="matrix" color-interpolation-filters="sRGB" values="0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0 0 0 1 0" /><feGaussianBlur stdDeviation="3" /></filter></svg>#filter');
  filter: grayscale(0.5) blur(3px);
  -webkit-filter: grayscale(0.5) blur(15px);
  /*-webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);*/
  background-color:rgba(255,255,0,0.3);
}

.hovereffect h2 {
  text-transform: uppercase;
  text-align: center;
  position: relative;
  font-size: 17px;
  padding: 10px;
  background: rgba(0, 0, 0, 0.6);
}

.hovereffect a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  
  margin: 136px 0 0 0;
  background-color: transparent;
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
}

.hovereffect a.info, .hovereffect h2 {
  -webkit-transform: scale(0.7);
  -ms-transform: scale(0.7);
  transform: scale(0.7);
  -webkit-transition: all 0.1s ease-in;
  transition: all 0.1s ease-in;
  opacity: 0;
  filter: alpha(opacity=0);
 color:#fff!important;
 font-weight: bold;
 font-size: 20px;
 font-family: 'futura_md_btmedium'!important;
  text-transform: uppercase;
}

.hovereffect:hover a.info, .hovereffect:hover h2 {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}
	

.akshover {
    content: url('images/family.png') !important;
}

.tooltip {
       position: absolute;
    display: inline-block;
    right: 23%;
    top: 39%;
}

.tooltip .tooltiptext {
    visibility: hidden;
   width: 50%;
   background-color: #fff;
   color: #444;
   text-align: center;
   border-radius: 5px;
   padding: 10px;
   position: absolute;
   z-index: 1;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}
</style>
	<script>
function bigImg(x) {
    x.style.height = "2.5%";
    x.style.width = "2.5%";
}

function normalImg(x) {
    x.style.height = "1%";
    x.style.width = "1%";
}

function bigImg1(x) {
    x.style.height = "4%";
    x.style.width = "4%";
}

function normalImg1(x) {
    x.style.height = "3%";
    x.style.width = "3%";
}
</script>
</head>
<body>
	<div class="container">
		<div class="pad0 grid-100 tablet-grid-100 mobile-grid-100 container1 " style="">
			<?php include_once("includes/menu.php") ?>
			<?php include_once("includes/mobile_menu.php") ?>
			<div class="grid-100 tablet-grid-100 mobile-grid-100">
			<div id="deletesuccess">
				<div class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="water animate2" src="images/water.png" alt="">
				</div>
				<div class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="ship animate1" src="images/new_ship1.png" alt="">
				</div>
				<div class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="crane1 animate1" src="images/new_crane1.png" alt="">
				</div>
				<div class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="agree animate3" src="images/aggreA.png" alt="">
				</div>
				<div class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="tractor animate6 " src="images/tractor.png" alt="">
				</div>
				<div class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="tractor1 animate6A " src="images/Truck-01.png" alt="">
				</div>
				<div class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="coal animate4" src="images/coalA.png" alt="">
				</div>
				 <div class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="gas animate5" src="images/gas.png" alt="">
				</div>
				<div class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="consB animate7" src="images/cons1.png" alt="">
				</div>
				<div class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="cons2 animate7" src="images/cons4.png" alt="">
				</div>
				<div class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="consc animate7" src="images/cons3.png" alt="">
				</div>
				
				<div class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="cars animateA" src="images/carsA.png" alt="">
				</div>
				<div class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="carsA animateA" src="images/geenp.png" alt="">
				</div>
				<div class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="pack1 animate8 " src="images/02.png" alt="">
				</div>
				<div class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="pack2 animate9" src="images/03.png" alt="">
				</div>
				<div class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="pack3 animate10" src="images/04.png" alt="">
				</div>
				<div class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="pack4 animate11 " src="images/truck1.png" alt="">
				</div>
				<div class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="pack5 animate5" src="images/mizi.png" alt="">
				</div>
			</div>
			
				 <div id="deletesuccess1" class="grid-100 tablet-grid-5 mobile-grid-5">
					<img class="" style="position: absolute; width: 104%;height:111%;right:0%;bottom: 0%;top:0%;" src="images/new_bg/green1.png" alt="">
				</div>
				<div id="deletesuccess2" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="swim" src="images/new_bg/swim.png" alt="">
				</div>
				 <div  id="deletesuccess24" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="building" src="images/new_bg/building.png" alt="">
				</div>
				<div  id="deletesuccess4" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="boy1" src="images/new_bg/boy1.png" alt="">
				</div>
				<div   id="deletesuccess22" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="mom" src="images/new_bg/mom.png" alt="">
				</div>
				<div  id="deletesuccess20" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="girle" src="images/new_bg/girle.png" alt="">
				</div>
				<div  id="deletesuccess7" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="couple" src="images/new_bg/couple.png" alt="">
				</div>
				<div  id="deletesuccess19" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="cycle" src="images/new_bg/cycle.png" alt="">
				</div>
				<div  id="deletesuccess9" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="dadi" src="images/new_bg/dadi.png" alt="">
				</div>
				<div  id="deletesuccess16" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="mom1" src="images/new_bg/mom1.png" alt="">
				</div>
				<div  id="deletesuccess14" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="football" src="images/new_bg/football.png" alt="">
				</div>
				<div  id="deletesuccess12" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="watchman" src="images/new_bg/watchman.png" alt="">
				</div>
				<div  id="deletesuccess13" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="couple2" src="images/new_bg/couple2.png" alt="">
				</div>
				<div  id="deletesuccess11" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="ground" src="images/new_bg/ground.png" alt="">
				</div>
				<div  id="deletesuccess15" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="girle2" src="images/new_bg/girle2.png" alt="">
				</div>
				<div   id="deletesuccess10" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="kite" src="images/new_bg/kite.png" alt="">
				</div>
				<div  id="deletesuccess17" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="building2" src="images/new_bg/building2.png" alt="">
				</div>
				<div  id="deletesuccess18" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="boy2" src="images/new_bg/boy2.png" alt="">
				</div>
				<div id="deletesuccess8" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="show" src="images/new_bg/show.png" alt="">
				</div>
				<div id="deletesuccess6" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="boy3" src="images/new_bg/boy3.png" alt="">
				</div>
				<div  id="deletesuccess21" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="boy4" src="images/new_bg/boy4.png" alt="">
				</div>
				<div  id="deletesuccess5" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="orange" src="images/new_bg/orange.png" alt="">
				</div>
				<div id="deletesuccess23"  class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="boy5" src="images/new_bg/boy5.png" alt="">
				</div>
				<div id="deletesuccess3" class="grid-5 tablet-grid-5 mobile-grid-5">
					<img class="run" src="images/new_bg/run.png" alt="">
				</div> 
			
			</div>
		</div>
		<div class="pad0 grid-100 tablet-grid-100 mobile-grid-100 about_us">
			<div class="pad0 pt_2 grid-90 prefix-10 mobile-grid-80 mobile-prefix-10">
				<h1 class=" about_us_text" style="" >ABOUT US</h1>
				<div class=" res_mb_about p_t pad0 grid-30 mobile-grid-80 mobile-prefix-10" >
					<p class="about_us_text1" >Adani Realty, the youngest arm of the Adani Group, is developing close to 69 million sq. ft. of real estate space including residential, commercial and social club projects across Ahmedabad, Mumbai, Gurgaon, Kochi & Mundra </p>
					<div class=" grid-100">
						<a href="aboutus.php"><img class="wdh40" src="images/km3.png" alt="" style=" float:left;margin-left: -3%;"></a>
					</div>
				</div>
				<div class="pad0 grid-70 mobile-grid-100 ">
					<img class="img_map" src="images/mapn.png" alt="">
						<a href="residential.php"><div class="tooltip"><img width="5%" src="images/red.png" alt="">
						  <span class="tooltiptext">
						  	<p style="margin-bottom:2px!important;margin-top:0px!important;">The North Park-Shantigram, Ahmedabad</p>
						  	<hr style="margin-bottom:2px!important;"">
						  	<p style="margin-bottom:2px!important;margin-top:0px!important;" >The North Park-Shantigram, Ahmedabad</p>
						  	<hr style="margin-bottom:2px!important;"">
						  	<p style="margin-bottom:2px!important;margin-top:0px!important;" >The North Park-Shantigram, Ahmedabad</p>
						  </span>
						</div></a>
					<!-- <div class="casa1 grid-20 tablet-grid-30 mobile-grid-30">
						<img onmouseover="bigImg(this)" onmouseout="normalImg(this)" width="90%" height="90%" src="images/casa1.png" alt="">
					</div>
					<div class="casa grid-60 tablet-grid-40  mobile-grid-40">
						<img class="wdh " src="images/casa2.png" alt="">
					</div>
				    <div class="casa2 grid-20 tablet-grid-30 mobile-grid-30">
						<img  onmouseover="bigImg(this)" onmouseout="normalImg(this)" width="90%" height="90%" style=""  src="images/casa3.png" alt="">
				    </div> -->
				</div>
			</div>
		</div>
		<div class="pad home grid-100 tablet-grid-100 mobile-grid-100">
			<div class="pad0 ticker_margin-top grid-80 prefix-10 tablet-grid-80 tablet-prefix-10 mobile-grid-90 mobile-prefix-5" style="margin-top: 2.5%; margin-bottom: 2.5%">
				<ul style="display: block !important; list-style-type: none;">
					<li style="margin-left:0px!important;" >
						<div class="pad0 grid-20 tablet-grid-20 mobile-grid-25 pqr">	
							<div class="pad0 grid-25 prefix-40 tablet-grid-40 tablet-prefix-30  mobile-grid-100 " >
								<!-- <img class="wdh ticker_image1" src="images/ticker1.png"> -->
								<i class="fa fa-calendar" aria-hidden="true"></i>
							</div><br />
							<div class="grid-100 tablet-grid-100 mobile-grid-100">
								<span class="counter bold_number ticker_number"  style="margin-left:5%;" >2011</span>
							</div>
							<div class="pad0 grid-50  prefix-25 tablet-grid-100 mobile-grid-80">
								<p class="counter_year ticker_text axy_ticker" >Year<br>
								Established</p>
							</div>
						</div>
					</li>					
					<div class="pad0 grid-5 tablet-grid-5 hide-on-mobile" style="margin-top:3%;">
						<img style="width:20%;" src="images/white_pipe.png">
					</div>
					<li style="margin-left:0px!important;">
						<div class="pad0 grid-20 tablet-grid-20 mobile-grid-25 pqr" >	
							<div class="pad0 grid-25 prefix-40 tablet-grid-40 tablet-prefix-30 mobile-grid-100" >
								<!-- <img class="wdh ticker_image" src="images/ticker2.png"> -->
								<i class="fa fa-building-o" aria-hidden="true"></i>
							</div><br />
							<div class="ticker_margin-top grid-100 tablet-grid-100 mobile-grid-100">
								<span class="counter bold_number ticker_number" style="margin-left:4%;" ><b>69 </b></span>
							</div>
							<div class="pad0 grid-70 prefix-25 tablet-grid-100 mobile-grid-100">
								<center><p class="counter_year ticker_text under" >Milion Sq.Ft.<br>
								Under Development</p></center>

							</div>
						</div>
					</li>
					<div class="pad0 grid-5 tablet-grid-5 hide-on-mobile" style="margin-top:3%;">
						<img style="width:20%;" src="images/white_pipe.png">
					</div>
					<li style="margin-left:0px!important;">
						<div class="pad0 grid-20 tablet-grid-20 mobile-grid-25 pqr" >	
							<div class="pad0 grid-25 prefix-40 tablet-grid-40 tablet-prefix-30  mobile-grid-100" >
								<!-- <img class="wdh ticker_image " src="images/ticker3.png"> -->
								<i class="fa fa-trophy" aria-hidden="true"></i>
							</div><br />
							<div class=" grid-100 tablet-grid-100 mobile-grid-100">
								<span class="counter bold_number ticker_number" style="margin-left: 5%;"><b>4</b></span>
							</div>
							<div class="pad0 grid-50 prefix-25 tablet-grid-100 mobile-grid-100">
								<p class="counter_year ticker_text" style="margin-left: 8%;">Awards<br>
								Won</p>
							</div>
						</div>
					</li>
					<div class="pad0 grid-5 tablet-grid-5 hide-on-mobile" style="margin-top:3%;">
						<img style="width:20%;" src="images/white_pipe.png">
					</div>
					<li style="margin-left:0px!important;">
						<div class="pad0 grid-20 tablet-grid-20 mobile-grid-25 pqr familypqr">
							<div id="aks" class=" pad0 grid-25 prefix-40 tablet-grid-40 tablet-prefix-30 mobile-grid-100">
								<!-- <img class="wdh ticker_image" src="images/ticker4.png"> -->
								<img class="wdhA familyimage" src="images/family3.png" alt="">
							</div><br />
							<div class="grid-100 tablet-grid-100 mobile-grid-100 ">
								<span class="counter bold_number ticker_number" style="margin-left: 5%;">4000</span>
							</div>
							<div class="pad0 grid-50 prefix-25 tablet-grid-100 mobile-grid-100">
								<p class="counter_year ticker_text" style="margin-left: 8%;">Happy<br>
								Families</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="pad0 grid-100 mobile-grid-100 tablet-grid-100 residential" style="padding: 5% !important">
			<div class="pad0  grid-90 prefix-5 mobile-grid-90 mobile-prefix-5 " >
				<h1 class=" residential_text" >RESIDENTIAL</h1> 
				<div class=" res_mb_about grid-30 mobile-grid-100" style="padding-top:5%;">
					<p class="about_us_text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
					<div class="grid-100">
						<div class="  grid-100">
							<a href="residential.php"><img class="wdh50" src="images/km3.png" alt="" style="cursor:pointer;float:left;margin-left:-8%;"></a>
						</div>
					</div>				</div>
				<div class="  grid-60  prefix-5 tablet-grid-70 tablet-prefix-15 mobile-grid-80 mobile-prefix-10">
					<a href="residential.php"><img class="wdh float4" src="images/resi_new1.png" alt=""></a>
				</div>			
			</div>
		</div>
		<div class="pad0 grid-100 Commercial">
			<div class="pad0  grid-90 prefix-5 tablet-grid-90 tablet-prefix-10 mobile-grid-90 mobile-prefix-5">
					<h1 class=" comercial_text" >COMMERCIAL</h1>
				<div class=" grid-60  tablet-grid-70 tablet-prefix-15 mobile-grid-100">
					<img class="wdh float4" src="images/comsA_updated.png" alt="">
					<!-- <img  style=" position: absolute; top: 13%;right: 57%;width:5%;" class="float" src="images/coms_bcloud.png" alt=""> -->
				</div>
				<div class=" res_mb_about grid-30 tablet-grid-80 mobile-grid-100" style="padding-top:5%;">
					<!-- <h1 class="p_t comercial_text" >Commercial</h1> -->
					<p class="comercial_text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
					<div class=" grid-100">
						<a href="commercial.php"><img class="wdh50"  src="images/kmcm_new.png" alt="" style="cursor:pointer;float:right;"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="pad0 club grid-100 mobile-grid-100 tablet-grid-100 ">
			<div class="pad0 p_t grid-90 prefix-10  mobile-grid-90 mobile-prefix-5 tablet-grid-90 tablet-prefix-10">
				<h1 class="comercial_text" style="text-align: left; color: #fff !important;margin-left: 1%;" >CLUBS</h1>
				<div class=" res_mb_about grid-30 tablet-grid-100" style="padding-top:5%;" >
					<!-- <img class="wdh" style=" margin-bottom:2%;" src="images/CommercialA.png" alt=""> -->
					<p class=" club_text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
					<div class=" grid-100">
							<a href="clubs.php"><img class="" src="images/kmcb_img.png" alt="" style="cursor:pointer;float:left;margin-left:-3%;width:44%;"></a>
					</div>
				</div> 
				<div class=" grid-50 prefix-5 tablet-grid-70 tablet-prefix-15">
					<img class="wdh float4" src="images/clubs_new.png" alt="">
					<!-- <img style="position: absolute;top: 26%;right: 14%;width:2%;" class="float3" src="images/coms_bcloud.png" alt="">
					<img style="position: absolute;top: 0%;right: 35%;width:5%;" class="float4" src="images/coms_bcloud.png" alt="">
					<img  style=" position: absolute; bottom:54%;right: 49%;width:3%;" class="float2" src="images/newresic.png" alt="">
					<img style="position:absolute;top:29%;right:42%;width:3%;" class="float4" src="images/club_bird1.png" alt=""> -->
				</div>
			</div>
		</div>
		<!-- <div class="pad0 grid-100 tablet-grid-100 mobile-grid-100" style="background-color:#eeeeee;margin-bottom:2%;">
			<div class="pad0 current_projects grid-100 tablet-grid-100 mobile-grid-100 ">

				<img class="p_t" style="float: right;width: 60%;padding-bottom: 2%;" src="images/our_current_project.png" alt="">
				<div class="grid-80 prefix-10 mobile-grid-80">
					<ul class="bxslider">
					  <li>
					 		<div class="grid-55 mobile-grid-100">
					 			<img class="wdh" src="https://www.adanirealty.com/images/TBGCC.jpg" alt="">
					 		</div>
							<div class="grid-40 tablet-grid-100">
								<a href="http://www.belvedereshantigram.com/" style="text-decoration: none;"><h4 class="comercial_text" style="text-align: center;font-size: 22px; margin: 0 !important">The Belvedere Golf and Country Club</h4></a>
								<p class="about_us_text1" style="text-align: center; margin-top: 8%; font-size: 14px">Spread over a lavish 100 acres with a 9-hole Golf course, The Belvedere Golf & Country Club promises to be the only one-of-its-kind in the country. Designed thoughtfully to let you and your family savour the pleasures of life, The Belvedere Golf and Country Club will seduce you to play & party in equal measure. <br><br><br><a href="" style="text-decoration: none !important;  color: #2B3E5F !important">Visit Site</a></p>
					  		</div>
					  </li>
					 <li>
					 		<div class="grid-55">
					 			<img class="wdh" src="https://www.adanirealty.com/images/adani-inspire.jpg" alt="">
					 		</div>
							<div class="grid-40">
								<a href="http://www.inspirebkc.com" style="text-decoration: none;"><h4 class="comercial_text" style="text-align: center;font-size: 22px; margin: 0 !important">Inspire BKC</h4></a>
								<p class="about_us_text1" style="text-align: center; margin-top: 8%; font-size: 14px">An upcoming commercial office complex in Bandra Kurla Complex, opposite ICICI Bank Headquarters, Inspire is spread over 5.7 acres with a development potential of 1.3 million square feet. With best in class MEP services, ample parking, integrated BMS and state-of-art security infrastructure, this commercial office complex supports a thriving environment for knowledge based work culture. <br><br><br> <a href="" style="text-decoration: none !important; color: #2B3E5F !important">Visit Site</a></p>
					  		</div>
					  </li>
					</ul>	
				</div>
					
			</div>
			
		</div> -->
		<div class="pad0 grid-100 tablet-grid-100 mobile-grid-100">
			<div class=" grid-80 prefix-10 tablet-grid-80 tablet-prefix-10 mobile-grid-100" style="margin-bottom:3%;margin-top:3%;">
				<div class=" grid-33 tablet-grid-33 mobile-grid-100">
					<div class="Knowledge grid-100 tablet-grid-100 mobile-grid-100" style="margin-bottom:3%;">
						<a href="url">Media Center</a>
					</div>
					<div class="hovereffect">
				        <img class="wdh" src="images/media_center.png" alt="">
				        <div class="overlay">
				           <a class="info" href="#">Learn More</a>
				        </div>
				    </div>
				    <!-- <div class="grid-100 tablet-grid-100 mobile-grid-100">
						<p class="Knowledge_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
					</div> -->
			 </div>
				<div class=" grid-33 tablet-grid-33 mobile-grid-100">
					<div class="Knowledge grid-100 tablet-grid-100 mobile-grid-100" style="margin-bottom:3%;">
						<a href="url">Careers</a>
					</div>
					<div class="hovereffect">
				        <img class="wdh" src="images/careers.png" alt="">
				        <div class="overlay">
				         
				           <a class="info" href="career.php">Learn More</a>
				        </div>
				    </div>
				   <!--  <div class="grid-100 tablet-grid-100 mobile-grid-100">
						<p class="Knowledge_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
					</div> -->
				 </div>
				 
				 <div class=" grid-33 tablet-grid-33 mobile-grid-100">
					<div class="Knowledge grid-100 tablet-grid-100 mobile-grid-100" style="margin-bottom:3%;">
						<a href="url">NRI Corner</a>
					</div>
					<div class="hovereffect">
				        <img class="wdh" src="images/nri_home_icon.png" alt="">
				        <div class="overlay">
				           <a class="info" href="career.php">Learn More</a>
				        </div>
				    </div>
				    <!-- <div class="grid-100 tablet-grid-100 mobile-grid-100">
						<p class="Knowledge_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
					</div -->
				 </div>
			</div>
		</div>
		<div class="pad0 contact_us grid-100 tablet-grid-100 mobile-grid-100">
			<div class="pad0 contact_us_bottom grid-80 prefix-10 tablet-grid-80 tablet-prefix-10">
				<div class="pad0 contact_us_bottom1 grid-50 tablet-grid-40 mobile-grid-80 mobile-prefix-10 ">
					<div class=" grid-100 tablet-grid-10" style="margin-top:9%;">
						<a href="contactus.php"><img width="28%" src="images/contact_us_img.png" alt=""></a>
						<!-- <center><a href="contactus.php"><button style="background-color: #ef5f23;border: none;border-radius: 10px;padding: 2% 5%; color: #fff!important;font-weight: bold;font-size: 18px; cursor: pointer;" type="button">CONTACT US</button></a></center> -->
					</div>
				</div>
				<div class="pad0 grid-40 tablet-grid-40 mobile-grid-80 mobile-prefix-10 ">
					<img class="wdh" src="images/hands.png" alt="">
				</div>
			</div>
		</div>
		<?php include_once("includes/footer.php") ?>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function( ) {
		   $("button").click(function(){
		        $(".m").slideToggle();
		    })
		})
	</script>        
	<script src="js/scrollreveal.min.js" type="text/javascript"></script> 
	<script type="text/javascript">
		window.sr = ScrollReveal({ reset: true });
		sr.reveal('.animate2',{ origin:'right',distance:'50px',easing:'ease-in',duration: 1000 });
		sr.reveal('.animate1',{ origin:'bottom',distance:'10px',easing:'ease-in',duration: 1000,delay:1500 });
		sr.reveal('.animate3',{ origin : 'bottom',	distance : '5px', duration: 4500, delay:5000 });
		sr.reveal('.animate5',{ origin : 'bottom',	distance : '10px', duration: 4500 ,delay:2500});
		sr.reveal('.animate4',{ origin : 'bottom',	distance : 'px', duration: 4500 ,delay:5000});
		sr.reveal('.animateA',{ origin : 'bottom',	distance : '10px', duration: 5500 ,delay:10000});
		sr.reveal('.animate7',{ origin : 'bottom',	distance : '70px', duration: 7500 ,delay: 16000 });
		sr.reveal('.animate6',{ origin : 'left',easing:'ease-in',distance : '300px', duration: 5500,delay:5000 });
		sr.reveal('.animate6A',{ origin : 'left',easing:'ease-in',distance : '200px', duration: 6000,delay:5500 });
		sr.reveal('.animate8',{ origin : 'left',easing:'ease-in',	distance : '400px', duration: 5500,delay:10300  });
		sr.reveal('.animate10',{ origin : 'left',easing:'ease-in',	distance : '400px', duration: 3000,delay:2500 });
		sr.reveal('.animate9',{ origin : 'right',easing:'ease-in',	distance : '200px', duration: 5500,delay:10300  });
		sr.reveal('.animate11',{ origin : 'right',easing:'ease-in',	distance : '400px', duration: 3000,delay:10300  });
			// $('.bxslider').bxSlider();
	 $(".familypqr").mouseover(function(){
	 	$(".familyimage").attr('src', 'images/family.png');
	 })

	 $(".familypqr").mouseout(function(){
	 	$(".familyimage").attr('src', 'images/family3.png');
	 })
    </script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> 
	<script src="js/jquery.counterup.min.js"></script> 
	<script>
	    jQuery(document).ready(function( $ ) {
	        $('.counter').counterUp({
	            delay: 10,
	            time: 4000
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
	 <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript"> 
      $(document).ready( function() {
        $('#deletesuccess').delay(25000).fadeOut(1500);
      });

       $(document).ready( function() {
        $('#deletesuccess1').delay(25500).fadeIn(3000);
         $('#deletesuccess2').delay(27000).fadeIn(3200);
         $('#deletesuccess3').delay(28000).fadeIn(3200);
         $('#deletesuccess4').delay(29000).fadeIn(3200);
         $('#deletesuccess5').delay(30000).fadeIn(3200);
         $('#deletesuccess6').delay(31000).fadeIn(3200);
         $('#deletesuccess7').delay(32000).fadeIn(3200);
         $('#deletesuccess8').delay(33000).fadeIn(3200);
         $('#deletesuccess9').delay(34000).fadeIn(3200);
         $('#deletesuccess10').delay(35000).fadeIn(3200);
         $('#deletesuccess11').delay(36000).fadeIn(3200);
         $('#deletesuccess12').delay(37000).fadeIn(3200);
         $('#deletesuccess13').delay(38000).fadeIn(3200);
         $('#deletesuccess14').delay(39000).fadeIn(3200);
         $('#deletesuccess15').delay(40000).fadeIn(3200);
         $('#deletesuccess16').delay(41000).fadeIn(3200);
         $('#deletesuccess17').delay(42000).fadeIn(3200);
         $('#deletesuccess18').delay(43000).fadeIn(3200);
         $('#deletesuccess19').delay(44000).fadeIn(3200);
         $('#deletesuccess20').delay(45000).fadeIn(3200);
         $('#deletesuccess21').delay(46000).fadeIn(3200);
         $('#deletesuccess22').delay(47000).fadeIn(3200);
         $('#deletesuccess23').delay(48000).fadeIn(3200);
         $('#deletesuccess24').delay(49000).fadeIn(3200);
      });
    </script>
</body>
</html>