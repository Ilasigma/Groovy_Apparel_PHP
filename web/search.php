<?php
include_once('config.php');

$keyword = $_GET["search"];
$pageUrl = "?search=".$keyword;

/*echo "<pre>";
print_r($_GET);*/
if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
$page_no = $_GET['page_no'];
} else {
$page_no = 1;
}

$total_records_per_page = 3;
$offset = ($page_no - 1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";

$result_count = mysqli_query($con, "SELECT COUNT(*) As total_records FROM products WHERE ProductName like '%" . $keyword . "%' OR ProductSKU like '%" . $keyword . "%'");
$total_records = mysqli_fetch_array($result_count);

//echo "<pre>";print_r($total_records);exit;

$total_records = $total_records['total_records'];////34
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1; // total page minus 1

echo "SELECT * FROM products WHERE ProductName like '%" . $keyword . "%' OR ProductSKU like '%" . $keyword . "%' LIMIT $offset, $total_records_per_page";

if (!empty($keyword)) {
	$query = mysqli_query($con, "SELECT * FROM products WHERE ProductName like '%" . $keyword . "%' OR ProductSKU like '%" . $keyword . "%' LIMIT $offset, $total_records_per_page");
}

//echo "SELECT * FROM products WHERE ProductName like '%" . $keyword . "%' OR ProductSKU like '%" . $keyword . "%'"; ;exit;
?>

<html lang="zxx">
<!-- Head -->
<head> 
<title>Groovy Apparel a E-Commerce & Fashion Category Bootstrap Responsive Website Template | Men's :: W3layouts</title>

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

</head>
<!-- //Head -->
<!-- Body -->
<body>
	<!-- Header -->
	<div class="agileheader" id="agileheadermens">
		<?php include 'includes/header.php';?>
	</div>
	<!-- //Header -->

	<!-- Men's-Product-Display -->
	<div class="wthreeproductdisplay">
		<h3>Search result for: "<?php echo $keyword;?>"</h3>
		<?php if(mysqli_num_rows($query) == 0) { 
       	?>
			
			
			<div class="no-record">
				<div>Sorry, no results found!</div>
				<div>Please check the spelling or try searching for something else</div>
			</div>

		<?php }else{?>

			<div id="cbp-pgcontainer" class="cbp-pgcontainer">
			<ul class="cbp-pggrid">
				<?php while ($result = mysqli_fetch_array($query)) {

					/*if(!empty($result['ProductImage'])){
						$image = $result['ProductImage'];
					} else {
						$image = "images/s1.jpg";
					}*/
					//Ternary Operator - https://www.geeksforgeeks.org/php-ternary-operator/
					$image = (!empty($result['ProductImage'])) ? $result['ProductImage'] : 'images/s1.jpg';
					?>
					<li class="wthree aits w3l">
					<div class="cbp-pgcontent" id="men-8">
						<span class="cbp-pgrotate"><i class="fa fa-exchange" aria-hidden="true"></i></span>
						<a href="mens_single.php">
							<div class="cbp-pgitem a3ls">
								<div class="cbp-pgitem-flip">
									<img src="<?php echo $image; ?>" alt="Groovy Apparel">
									<img src="<?php echo $image; ?>" alt="Groovy Apparel">
								</div>
							</div>
						</a>
						<ul class="cbp-pgoptions w3l">
							<li class="cbp-pgoptcompare">
								<input type="checkbox" name="checkboxG8" id="checkboxG8" class="css-checkbox w3"><label for="checkboxG8" class="css-label"></label>
							</li>
							<li class="cbp-pgoptfav">
								<span>5 <i class="fa fa-star" aria-hidden="true"></i></span>
							</li>
							<li class="cbp-pgoptsize agile">
								<span data-size="XL">XL</span>
								<div class="cbp-pgopttooltip">
									<span data-size="XL">XL</span>
									<span data-size="L">L</span>
									<span data-size="M">M</span>
									<span data-size="S">S</span>
								</div>
							</li>
							<li class="cbp-pgoptcart">
								<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1"> 
										<input type="hidden" name="w3l_item" value="Sweater "> 
										<input type="hidden" name="amount" value="25.00"> 
										<button type="submit" class="w3l-cart pw3l-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
										<span class="w3-agile-line"> </span>
										<a href="#" data-toggle="modal" data-target="#myModal1"></a>
									</form>
							</li>
						</ul>
					</div>
					<a href="mens_single.php">
						<div class="cbp-pginfo w3layouts">
							<h3><?php echo $result['ProductName'];?></h3>
							<span class="cbp-pgprice">$<?php echo $result['ProductPrice'];?></span>
						</div>
					</a>
				</li>
				<?php }?>
			</ul>
		</div>
			<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
			<strong>Page <?php echo $page_no . " of " . $total_no_of_pages; ?></strong>
			<ul class="pagination">
				<?php  if($page_no > 1){ echo "<li><a href='$pageUrl&page_no='>First Page</a></li>"; } ?>

				<li <?php if ($page_no <= 1) {
					echo "class='disabled'";
				} ?>>
					<a <?php if ($page_no > 1) {
						echo "href='$pageUrl&page_no=$previous_page'";
					} ?>>Previous</a>
				</li>

				<?php
				if ($total_no_of_pages <= 100) {
					for ($counter = 1; $counter <= $total_no_of_pages; $counter++) {
						if ($counter == $page_no) {
							echo "<li class='active'><a>$counter</a></li>";
						} else {
							echo "<li><a href='$pageUrl&page_no=$counter'>$counter</a></li>";
						}
					}
				}
				?>

				<li <?php if ($page_no >= $total_no_of_pages) {
					echo "class='disabled'";
				} ?>>
					<a <?php if ($page_no < $total_no_of_pages) {
						echo "href='$pageUrl&page_no=$next_page'";
					} ?>>Next</a>
				</li>
				<?php if ($page_no < $total_no_of_pages) {
					echo "<li><a href='$pageUrl&page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
				} ?>
			</ul>
		<?php }?>

    </div>


	</div>
	<!-- //Men's-Product-Display -->



	<?php include('includes/footer.php');?>

	
   <!-- Custom-JavaScript-File-Links -->
<!-- Default-JavaScript -->
<script src="js/jquery-2.2.3.js"></script>


<script src="js/modernizr.custom.js"></script>

		<!-- Shopping-Cart-JavaScript -->
		<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3l.render();

        w3l.cart.on('w3agile_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js --> 

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

		<script src="js/cbpShop.min.js"></script>
		<script>
			var shop = new cbpShop( document.getElementById( 'cbp-pgcontainer' ) ); 
		</script>

	<!-- //Custom-JavaScript-File-Links -->


<!-- Bootstrap-JavaScript --> <script src="js/bootstrap.js"></script>
</body>
<!-- //Body -->



</html>