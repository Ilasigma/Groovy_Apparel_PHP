<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
--> 
<!DOCTYPE html>
<html lang="zxx"> 
<!-- Head -->
<head>

<title>Groovy Apparel a E-Commerce & Fashion Category Bootstrap Responsive Website Template | Contact :: W3layouts</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Groovy Apparel a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS -->	<link rel="stylesheet" href="css/bootstrap.css"	type="text/css" media="all">
<!-- Index-Page-CSS -->	<link rel="stylesheet" href="css/style.css"		type="text/css" media="all">
<!-- //Custom-Stylesheet-Links -->

<!-- Fonts -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Serif:400,700"	   type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"	   type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500" type="text/css" media="all">
<!-- //Fonts -->

<!-- Font-Awesome-File-Links -->
<!-- CSS --> <link rel="stylesheet" href="css/font-awesome.css" 		 type="text/css" media="all">
<!-- TTF --> <link rel="stylesheet" href="fonts/fontawesome-webfont.ttf" type="text/css" media="all">
<!-- //Font-Awesome-File-Links -->

<!-- Default-JavaScript --><script src="js/jquery-2.2.3.js"></script>

</head>
<!-- //Head -->



<!-- Body -->
<body>



	<!-- Header -->
	<div class="agileheader">

		<?php include 'includes/header.php';?>

		<!-- Banner -->
		<div class="agileheader-banner">
			<img src="images/banner.jpg" alt="Groovy Apparel">
		</div>
		<!-- //Banner -->

	</div>
	<!-- //Header -->



	<!-- Contact -->
	<div class="w3aitscontactagile">
		<h1>CONTACT</h1>

		<div class="contact-info">
			<div class="container">
				<div class="contact-info-grids">
					<div class="col-md-6 col-sm-6 contact-info-grid contact-info-grid-1">
						<img src="images/shop.jpg" alt="Groovy Apparel">
					</div>
					<div class="col-md-6 col-sm-6 contact-info-grid contact-info-grid-2">
						<h2>Where We Are</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>



	<!-- Map -->
		<div id="map"></div>
	<!-- //Map -->



	<div class="wthreeaddressaits">
		<div class="container">
			<div class="col-md-4 wthreeaddressaits-grid wthreeaddressaits-grid1">
				<div class="aitsaddressw3l">
					<h4>Address</h4>
					<address>
						<ul>
							<li>Studio 40019</li>
							<li>Parma Via Modena</li>
							<li>Sant'Agata Bolognese</li>
							<li>BO, Italy</li>
						</ul>
					</address>
				</div>
				<div class="aitsphonew3l">
					<h4>Phone</h4>
					<ul>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +1 (734) 123-4567</li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +1 (739) 648-7114</li>
					</ul>
				</div>
				<div class="aitsemailw3l">
					<h4>Email</h4>
					<ul>
						<li><a href="mailto:mail@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> info1@example.com</a></li>
						<li><a href="mailto:mail@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> info2@example.com</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="col-md-8 wthreeaddressaits-grid wthreeaddressaits-grid2">
				<form action="#" method="post">
					<input type="text" class="text" name="Name" placeholder="Name" required="">
					<input type="text" class="text" name="Email" placeholder="Email" required="">
					<input type="text" class="text" name="Phone" placeholder="Phone" required="">
					<input type="text" class="text" name="City" placeholder="City" required="">
					<textarea name="Message" class="text" placeholder="Message" required=""></textarea>
					<input type="submit" value="SEND MESSAGE">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //Contact -->

	<?php include('includes/footer.php');?>

	<!-- Custom-JavaScript-File-Links -->

		<!-- Bootstrap-JavaScript --> <script src="js/bootstrap.js"></script>

		<!-- Shopping-Cart-JavaScript -->
			<script type='text/javascript' src="js/jquery.mycart.js"></script>
			<script type="text/javascript">
				$(function () {
					var goToCartIcon = function($addTocartBtn){
						var $cartIcon = $(".my-cart-icon");
						var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
						$addTocartBtn.prepend($image);
						var position = $cartIcon.position();
						$image.animate({
						top: position.top,
						left: position.left
						}, 500 , "linear", function() {
							$image.remove();
						});
					}
					$('.my-cart-btn').myCart({
						classCartIcon: 'my-cart-icon',
						classCartBadge: 'my-cart-badge',
						affixCartIcon: true,
						checkoutCart: function(products) {
							$.each(products, function(){
								console.log(this);
							});
						},
						clickOnAddToCart: function($addTocart){
							goToCartIcon($addTocart);
						},
						getDiscountPrice: function(products) {
							var total = 0;
							$.each(products, function(){
								total += this.quantity * this.price;
							});
							return total * 0.5;
						}
					});
				});
			</script>
		<!-- Shopping-Cart-JavaScript -->

		<!-- Dropdown-Menu-JavaScript -->
			<script>
				$(document).ready(function(){
					$(".dropdown").hover(
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');
						}
					);
				});
			</script>
		<!-- //Dropdown-Menu-JavaScript -->

		<!-- Popup-Box-JavaScript -->
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<script>
				$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});
				});
			</script>
		<!-- //Popup-Box-JavaScript -->

		<!-- Map-JavaScript -->
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>        
			<script type="text/javascript">
				google.maps.event.addDomListener(window, 'load', init);
				function init() {
					var mapOptions = {
						zoom: 11,
						center: new google.maps.LatLng(44.6648, 11.1342),
						styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
					};
					var mapElement = document.getElementById('map');
					var map = new google.maps.Map(mapElement, mapOptions);
					var marker = new google.maps.Marker({
						position: new google.maps.LatLng(44.6648, 11.1342),
						map: map,
					});
				}
			</script>
		<!-- //Map-JavaScript -->

	<!-- //Custom-JavaScript-File-Links -->



</body>
<!-- //Body -->



</html>