<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<link rel="icon" href="images/fav icon.png" type="image/png">
	<title>NRI-CORNER</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="./assets/stylesheets/demo.css" />
	<link rel="stylesheet" href="./assets/stylesheets/unsemantic-grid-responsive-tablet.css" />
	<link rel="stylesheet" href="css/demo.css" />
	<link rel="stylesheet" href="css/default.css" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
</head>

<style type="text/css">

.c_container1 {
   width: 100% !important;
    height: 82% !important;
	position: relative;
    background: url(./images/Carrer.jpg) no-repeat;
    background-size: 100% 100%;
}

.banner_container{
	width: 100%;
	height: auto;
	padding: 0%;
	margin: 0%;
}

* {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  background: #2d2c414
}

ul { list-style-type: none; }

a {
  color: #b63b4d;
  text-decoration: none;
}

/** =======================
 * Contenedor Principal
 ===========================*/


h1 {
  color: #FFF;
  font-size: 24px;
  font-weight: 400;
  text-align: center;
  margin-top: 80px;
}

h1 a {
  color: #c12c42;
  font-size: 16px;
}

.accordion {
  width: 100%;
  /*max-width: 360px;*/
  margin: 1%;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}

.accordion .link {
  cursor: pointer;
  display: block;
  padding: 15px 15px 15px 0px;
  color: #4D4D4D;
  font-size: 14px;
  font-weight: 700;
  border-bottom: 1px solid #CCC;
  position: relative;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.accordion li:last-child .link { border-bottom: 0; }

.accordion li i {
  position: absolute;
  top: 16px;
  left: 12px;
  font-size: 18px;
  color: #595959;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.accordion li i.fa-chevron-down {
  right: 12px;
  left: auto;
  font-size: 16px;
}

/*.accordion li.open .link { color: #b63b4d; }*/

/*.accordion li.open i { color: #b63b4d; }
*/
.accordion li.open i.fa-chevron-down {
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
}

/**
 * Submenu
 -----------------------------*/


.submenu {
  display: none;
  font-size: 14px;
}

/*.submenu li { border-bottom: 1px solid #4b4a5e; }*/

.submenu a {
  display: block;
  text-decoration: none;
  color: #2b3e5f;
  padding: 5px;
  margin-left:-1%;

  -webkit-transition: all 0.25s ease;
  -o-transition: all 0.25s ease;
  transition: all 0.25s ease;
}

/*.submenu a:hover {
  background: #b63b4d;
  color: #FFF;
}*/

	.inputcls{
		width: 90%;
		height: 10%;
		margin: 2%;
		padding: 2%;
	}

	.submitcls{
		width: 90%;
		height: 10%;
		padding: 3%;
		margin: 2%;
		background-color: #c1c1c1;
		border: none;
		border-radius: 10px;
	}

	select#soflow {
	   -webkit-appearance: button;
	   -webkit-border-radius: 2px;
	   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
	   -webkit-padding-end: 20px;
	   -webkit-padding-start: 2px;
	   -webkit-user-select: none;
	   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
	   background-position: 97% center;
	   background-repeat: no-repeat;
	   border: none;
	   /*color: #555;*/
	   font-size: inherit;
	   margin: 2%;
	   overflow: hidden;
	   padding: 2%;
	   text-overflow: ellipsis;
	   white-space: nowrap;
	   width: 90%;
	}

</style>
<body>
	<div class="container">

		<div class="pad0 grid-100 tablet-grid-100 mobile-grid-100 nri1" style="background: url(./images/NRI_corner_bg.png) no-repeat; background-size: 100% 100%">
			<?php include_once("includes/menu.php") ?>
			<?php include_once("includes/mobile_menu.php") ?>
		</div>
		<div class="pad0 grid-80 prefix-10 tablet-grid-80 tablet-prefix-10 mobile-grid-80 mobile-prefix-10 ">
			<h1 class="p_t about_us_text" style="text-align: center; padding: 1% 0">NRI Corner <hr></h1>
		</div>
		<div class="pad0 grid-100 tablet-grid-100 mobile-grid-100">
			<div class="pad0 grid-80 prefix-10 tablet-grid-80 tablet-prefix-10 mobile-grid-90 mobile-prefix-5" style="text-align:center;margin-bottom:3%;" >
				<div class="grid-100">
					<p class="about_us_text1" >As the government continues to push through reforms (in the Land Acquisition Act, the Real Estate Regulatory bill, relaxation of FDI rules, etc.), Property continues to remain the best option for NRIs looking to invest in India.</p>
				</div>
				<div class="grid-100">
					<p class="about_us_text1">But before making the final decision, there are some big questions to be addressed; who is the developer, what are his credentials, what about the property, location, amenities, payment terms, legalities and so on. Adani Realty offers rewarding investment options in the commercial hub of India – Mumbai.
				</div>
				<div class="grid-100">
					<p class="about_us_text1">No project is executed without the help of the finest architects, designers and contractors, and the end result is always splendid. Delving deeper into intricacies of real estate, we understand the needs of our clientele and realize that city life can often become a burden. Our homes are designed to interact with nature, As louver glass is utilized to allow sunlight through but no sunrays and as a result, dependency on natural light is maximized. Incorporating climatology into realty is just one of the several techniques that Adani Realty has pioneered for indulgent living. Luxury is a priority and no compromises are made when it comes to the comfort of our valued customers.
					</p>
				</div>
				<div class="grid-100">
					<p class="about_us_text1">Commercial spaces, malls, multiplexes, hotels and IT parks are executed with as much precision as our residential projects and many of our prominent landmarks define the seductive skyline of Mumbai. Because of our obsession with realty, the end result is always a landmark planned with passion!
					</p>
				</div>
			</div>
		</div>
		
		<div class="pad0 grid-100" style="background-color:#F7F7F7!important;">
			<div class="pad0 grid-80 prefix-10 tablet-grid-80 tablet-prefix-10 mobile-grid-90 mobile-prefix-5" style="margin-bottom:3%;">
				<h2 id="faq " class="faq_text p_t">FAQ's</h2>
			</div>
			<div class="pad0 current_openings grid-80 prefix-10 tablet-grid-80 tablet-prefix-10 mobile-grid-90 mobile-prefix-5">
				<ul id="accordion" class="accordion" style="margin-left:-3%;">
				  <li>
				    <div class="link">Q.WHO IS A NON-RESIDENT INDIAN(NRI)?<i class="fa fa-chevron-down"></i></div>
				    <ul class="submenu">
				      <li style="text-align:justify;"><a href="#"><p>A. An Indian citizen who stays abroad for employment/carrying on business or vocation outside India or stays abroad under circumstances indicating an intention for an uncertain duration of stay abroad is a non-resident. (Persons posted in U.N. organisations and officials deputed abroad by Central/State Governments and Public Sector undertakings on temporary assignments are also treated as non-temporary assignments are also treated as non-residents). Non-resident foreign citizens of Indian origin are treated on par with non- resident Indian citizens (NRIs)..</a></li>
				    </ul>
				  </li>	
				  <li>
				    <div class="link">Q.WHO IS A PIO?<i class="fa fa-chevron-down"></i></div>
				    <ul class="submenu">
				      <li style="text-align:justify;"><a href="#"><p>A.  A person of Indian origin means an individual (not being a citizen of Pakistan or Bangladesh or Sri Lanka or Afghanistan or China or Iran or Nepal or Bhutan) who:•	held an Indian Passport at any time, or •	who or whose father or paternal grand father was a citizen of India by virtue of the Constitution of India or the Citizenship Act, 1955</a></li>
				    </ul>
				  </li>
				  <li>
				    <div class="link">Q.WHO ARE THE VARIOUS FACILITIES AVAILABLE TO NRIs/OCBS?<i class="fa fa-chevron-down"></i></div>
				    <ul class="submenu">
				      <li style="text-align:justify;"><a href="#"><p>A. NRIs/OCB's are granted the following facilities:1.	Maintenance of bank accounts in India 2.	Investments in securities/shares of, and deposits with, Indian firms/companies3.	Investments in immovable properties in India</a></li>
				    </ul>
				  </li>			
				  <li>
				    <div class="link">Q.WHO CAN PURCHASE IMMOVABLE PROPERTY IN INDIA?CAN NRIs CELL THE PROPERTIES THEY HOLD INDIA WITHOUT RESERV BANK PERMISSION?<i class="fa fa-chevron-down"></i></div>
				    <ul class="submenu">
				      <li style="text-align:justify;"><a href="#"><p>A.1 Under the general permission available, the following categories can freely purchase immovable property in India:Si) Non-Resident Indian (NRI) - that is a citizen of India resident outside Indiaii)  Person of Indian Origin (PIO) - that is an individual (not being a citizen of Pakistan or Bangladesh or Sri Lanka or Afghanistan or China or Iran or Nepal or Bhutan), who1. at any time, held Indian passport, or 2. who or either of whose father or grandfather was a citizen of India by virtue of the Constitution of India or the Citizenship Act, 1955 (57 of 1955). The general permission, however, covers only purchase of residential and commercial property.</a></li>
				    </ul>
				  </li>			
				  <li>
				    <div class="link">Q.CAN NRIs CELL THE PROPERTIES THEY HOLD INDIA WITHOUT RESERV BANK PERMISSION?<i class="fa fa-chevron-down"></i></div>
				    <ul class="submenu">
				      <li><a href="#"><p>A. YES</a></li>
				    </ul>
				  </li>			
				  <li>
				    <div class="link">Q.CAN NRIs ACQUIRE OR DISPOSE RESIDENTIAL PROPERTY BY WAY OF GIFT?<i class="fa fa-chevron-down"></i></div>
				    <ul class="submenu">
				      <li style="text-align:justify;"><a href="#"><p>A. Yes, under the general permission granted by the Reserve Bank, property other than agricultural land/farm house/plantation property can be acquired by NRIs provided the purchase consideration is met either out of inward remittances in foreign exchange through normal banking channels or out of funds from the purchaser's NRE/FCNR accounts maintained with banks in India and a declaration is submitted to the Central Office of Reserve Bank in form IPI 7 within a period of 90 days from the date of purchase of the property/final payment of purchase consideration.</a></li>
				    
				    </ul>
				  </li>		
				  <li>
				    <div class="link">Q. WHAT IS POWER OF ATTORNEY?<i class="fa fa-chevron-down"></i></div>
				    <ul class="submenu">
				      <li style="text-align:justify;"><a href="#"><p>A Power Of Attorney (POA) or letter of attorney is a written authorization to represent or act on another&#8217;s behalf in private affairs, business, or some other legal matter, sometimes against the wishes of the other. The person authorizing the other to act is the principal, grantor, or donor (of the power).A Power Of Attorney is not an instrument of transfer in regard to any right, title or interest in an immovable property.A Power Of Attorney, or letter of attorney, is a document that authorizes another person, known as the agent or attorney-in-fact—usually a legally competent relative or close friend over 18 years old—to handle any combination of financial, legal and health care decisions. A power of attorney is also referred to as a POA. Generally, one chooses a POA as a provision if he or she becomes incapacitated.</a></li>
				    </ul>
				  </li>										 
			 	</ul>
			</div>
		</div>

		<div class="pad0 grid-100 mobile-grid-100 tablet-grid-100" style="background-color:#fff;">
			<div class="grid-80 prefix-10 tablet-grid-80 tablet-prefix-10 mobile-grid-90 mobile-prefix-5">
				<h2 id="faq " class="faq_text p_t">NRI/PIO/OCI Real Estate Investment Guidelines</h2>
			</div>
			<div class="grid-80 prefix-10 tablet-grid-80 tablet-prefix-10 mobile-grid-90 mobile-prefix-5" style="text-align:left;padding-left:0px!important;margin-bottom:2%;">
				<ul id="accordion1" class="accordion" style="margin-left:-3%;background-color:#fff;margin-bottom:5px!important;">
					<li>
					    <div class="link" style="cursor:pointer;border-bottom: 1px solid;padding: 15px 0px;font-size:14px;font-weight:bold;"> Q. DOES CAPITAL GAINS TAX (CGT) APPLY TO NRI/PIO/OCI?<i class="fa fa-chevron-down" style="float:right;margin-right:-1%;"></i></div>
					    <ul class="submenu">
					      <li style="text-align:justify;"><a href="#"><p>A. Yes. Long-term and short-term capital gains are taxable in the hands of non-residents.</a></li>
					    
					    </ul>
					 </li>	
				</ul>	
				<ul id="accordion2" class="accordion" style="margin-left:-3%;background-color:#fff;">
					<li>
					    <div class="link" style="cursor:pointer;border-bottom: 1px solid;padding: 15px 0px;font-size:14px;font-weight:bold;"> Q. DOES CAPITAL GAINS TAX (CGT) APPLY TO NRI/PIO/OCI?<i class="fa fa-chevron-down " style="float:right;margin-right:-1%;"></i></div>
					    <ul class="submenu">
					      <li style="text-align:justify;"><a href="#"><p>Type of asset: Assets like house property, land and building, jewellery, development rights etc.  Rate of tax deduction at source (TDS)
								Long term – 20.6%<
								Short term – 30.9%</a></li>
						  <li style="text-align:justify;"><a href="#"><p>Exemption available (only for long term capital gains)  The long term capital gains arising on sale of a residential house can be invested in buying/ constructing another residential house, within the prescribed time. The exemption is restricted to the amount of capital gains or amount invested in new residential house, whichever is lower. If the amount of capital gains is invested in bonds of National Highways Authority of India</a></li>
						   <li style="text-align:justify;"><a href="#"><p>(NHAI) or Rural Electrification Corporation, then the entire capital gains is exempted, else the proportionate gain is exempted. As per the financial budget 2007-08, a cap of Rs. 50 lakhs has been imposed on investment that can be made in capital tax saving bonds.</a></li>
					    </ul>
					 </li>	
				</ul>	
			</div>
		</div>
		<div class="pad0 grid-100" style="background: #f7f7f7">
			<div class="pad0 grid-80 prefix-10 tablet-grid-100 mobile-grid-80 mobile-prefix-10">
				<h2 id="faq" class="faq_text p_t">Inquiry Form</h2>
			</div>
			<div class="pad0 grid-80 prefix-10 tablet-grid-80 tablet-prefix-10 mobile-grid-100" style="margin-bottom:3%;">
				<div class="pad0 grid-40 prefix-10 tablet-grid-40 tablet-prefix-5 mobile-grid-100">
					<input type="text" style="border-radius:10px;outline: none;" placeholder="Please Enter Name" class="inputcls">
				</div>
				<div class="pad0 grid-40 tablet-grid-40 tablet-prefix-10 mobile-grid-100">
					<input type="text"  style="border-radius:10px;outline: none;" placeholder="Please Enter Mobile No." class="inputcls">
				</div>
				<div class="pad0 grid-40 prefix-10 tablet-grid-40 tablet-prefix-5 mobile-grid-100">
					<input type="text"  style="border-radius:10px;outline: none;" placeholder="Please Enter Email Id" class="inputcls">
				</div>
				<div class="pad0 grid-40 tablet-grid-40 tablet-prefix-10 mobile-grid-100">
					<input type="text" style="border-radius:10px;outline: none;" placeholder="Please Enter Location" class="inputcls">
				</div>
				<div class="pad0 grid-80 prefix-10 tablet-grid-80 tablet-prefix-10  mobile-grid-100">
					<textarea style="resize: none; border-radius:10px;outline: none;" placeholder="Please enter your remarks" rows="3" class="inputcls"></textarea>
				</div>
				<div class="pad0 grid-50 prefix-25 tablet-grid-100 mobile-grid-100">
					<img style="width:20%;"  src="images/Sub.png" alt="">
					<!-- <button  style="background-color: #266690; border: none;padding: 1% 5%;color: #fff!important;font-size:20px;font-weight: bold;border-radius: 10px;cursor:pointer;box-shadow: 0 0 5px #266690;" type="button">Submit</button> -->
				</div>
			</div>
		</div>
		<div class="" style="font-size: 13px;">
			<?php include_once("includes/footer.php") ?>
		</div>
	</div>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!-- <script src="./assets/javascripts/jquery.js"></script> -->
	<script src="js/script.js"></script>
	<script src="js/accordion.js"></script>
	<script src="./assets/javascripts/demo.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
	<script>
		$(document).ready(function(){
		    $("button").click(function(){
		        $(".m").slideToggle();
		    });



		    $(function() {
				var Accordion = function(el, multiple) {
					this.el = el || {};
					this.multiple = multiple || false;

					// Variables privadas
					var links = this.el.find('.link');
					// Evento
					links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
				}

				Accordion.prototype.dropdown = function(e) {
					var $el = e.data.el;
						$this = $(this),
						$next = $this.next();

					$next.slideToggle();
					$this.parent().toggleClass('open');

					if (!e.data.multiple) {
						$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
					};
				}	

				var accordion = new Accordion($('#accordion'), false);
			});

		     $(function() {
				var Accordion = function(el, multiple) {
					this.el = el || {};
					this.multiple = multiple || false;

					// Variables privadas
					var links = this.el.find('.link');
					// Evento
					links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
				}

				Accordion.prototype.dropdown = function(e) {
					var $el = e.data.el;
						$this = $(this),
						$next = $this.next();

					$next.slideToggle();
					$this.parent().toggleClass('open');

					if (!e.data.multiple) {
						$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
					};
				}	

				var accordion = new Accordion($('#accordion1'), false);
			});


		       $(function() {
				var Accordion = function(el, multiple) {
					this.el = el || {};
					this.multiple = multiple || false;

					// Variables privadas
					var links = this.el.find('.link');
					// Evento
					links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
				}

				Accordion.prototype.dropdown = function(e) {
					var $el = e.data.el;
						$this = $(this),
						$next = $this.next();

					$next.slideToggle();
					$this.parent().toggleClass('open');

					if (!e.data.multiple) {
						$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
					};
				}	

				var accordion = new Accordion($('#accordion2'), false);
			});
		});
	</script>
</body>
</html>