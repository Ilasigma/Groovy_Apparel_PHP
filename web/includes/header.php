<?php
session_start();

//-------------Login user can access only------------

$word = "index.php"; // Varibale to check for home page condition...
$string = $_SERVER['REQUEST_URI']; // Get the current URL
$homepage = "/web/";   // To check other home page scenarios
/*if(strpos($string, $word) == false){
    echo "Word Found!";
} else{
    echo "Word Not Found!";
}
*/
/**
 * isset($_SESSION['user_id'] => To check user is login or not using session....
 * strpos($string, $word) == false => To check/compare index.php exist in Request URL or not
 * $string != $homepage => "/web/" to check home page URL without index.php
 */
if (!isset($_SESSION['user_id']) && strpos($string, $word) == false && $string != $homepage)
{
    echo "<script>alert('Please login to view content of this page...');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
}
?>

<!-- Navigation -->
<nav class="navbar navbar-default w3ls navbar-fixed-top">
    <div class="container">
        <div class="navbar-header wthree nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                    data-target="#bs-megadropdown-tabs">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand agileinfo" href="index.php"><span>GROOVY</span> APPAREL</a>
            <ul class="w3header-cart">
                <li class="wthreecartaits"><span class="my-cart-icon"><i class="fa fa-cart-arrow-down"
                                                                         aria-hidden="true"></i><span
                            class="badge badge-notify my-cart-badge"></span></span></li>
            </ul>
        </div>
        <div id="bs-megadropdown-tabs" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle w3-agile hyper" data-toggle="dropdown"><span> MEN </span></a>
                    <ul class="dropdown-menu aits-w3 multi multi1">
                        <div class="row">

                            <div
                                class="col-sm-3 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-1">
                                <ul class="multi-column-dropdown">
                                    <li class="heading">FEATURED</li>
                                    <li><a href="mens.php"><i class="fa fa-angle-right" aria-hidden="true"></i>New
                                            Arrivals</a></li>
                                    <li><a href="mens.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Online
                                            Only</a></li>
                                    <li><a href="mens.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Brands</a>
                                    </li>
                                    <li><a href="mens.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Clearance
                                            Sale</a></li>
                                    <li><a href="mens.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Discount
                                            Store</a></li>
                                    <li><a href="mens.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Editor's
                                            Pick</a></li>
                                </ul>
                            </div>

                            <div
                                class="col-sm-3 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-2">
                                <p>TORSO</p>
                                <a href="mens.php"><img src="images/men-nav-1.jpg" alt="Groovy Apparel"></a>
                            </div>

                            <div
                                class="col-sm-3 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-3">
                                <p>LEGS</p>
                                <a href="mens.php"><img src="images/men-nav-2.jpg" alt="Groovy Apparel"></a>
                            </div>

                            <div
                                class="col-sm-3 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-4">
                                <p>ACCESSORIES</p>
                                <a href="mens_accessories.php"><img src="images/men-nav-3.jpg"
                                                                     alt="Groovy Apparel"></a>
                            </div>

                            <div class="clearfix"></div>
                            <p class="promo">Use Promo Code <span>#CFFGTY56</span> and take 30% off the products. <a
                                    href="#">Details</a></p>
                        </div>

                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span> WOMEN </span></a>
                    <ul class="dropdown-menu multi multi2">
                        <div class="row">

                            <div
                                class="col-sm-3 w3layouts-nav-agile w3layouts-womens-nav-agileits w3layouts-womens-nav-agileits-1">
                                <ul class="multi-column-dropdown">
                                    <li class="heading">FEATURED</li>
                                    <li><a href="womens.php"><i class="fa fa-angle-right" aria-hidden="true"></i>New
                                            Arrivals</a></li>
                                    <li><a href="womens.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Online
                                            Only</a></li>
                                    <li><a href="womens.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Brands</a>
                                    </li>
                                    <li><a href="womens.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Clearance
                                            Sale</a></li>
                                    <li><a href="womens.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Discount
                                            Store</a></li>
                                    <li><a href="womens.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Editor's
                                            Pick</a></li>
                                </ul>
                            </div>

                            <div
                                class="col-sm-3 w3layouts-nav-agile w3layouts-womens-nav-agileits w3layouts-womens-nav-agileits-2">
                                <p>TOP</p>
                                <a href="womens.php"><img src="images/women-nav-1.jpg" alt="Groovy Apparel"></a>
                            </div>

                            <div
                                class="col-sm-3 w3layouts-nav-agile w3layouts-womens-nav-agileits w3layouts-womens-nav-agileits-3">
                                <p>LEGS</p>
                                <a href="womens.php"><img src="images/women-nav-2.jpg" alt="Groovy Apparel"></a>
                            </div>

                            <div
                                class="col-sm-3 w3layouts-nav-agile w3layouts-womens-nav-agileits w3layouts-womens-nav-agileits-4">
                                <p>ACCESSORIES</p>
                                <a href="womens_accessories.php"><img src="images/women-nav-3.jpg"
                                                                       alt="Groovy Apparel"></a>
                            </div>

                            <div class="clearfix"></div>
                            <p class="promo">Use Promo Code <span>#CFFGTY56</span> and take 30% off the products. <a
                                    href="#">Details</a></p>
                        </div>

                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span> ACCESSORIES </span></a>
                    <ul class="dropdown-menu multi multi3">
                        <div class="row">

                            <div class="col-sm-3 w3layouts-nav-agile w3layouts-acc-nav-agileits w3layouts-acc-nav-agileits-1">
                                <ul class="multi-column-dropdown">
                                    <li class="heading">FEATURED</li>
                                    <li><a href="mens_accessories.php"><i class="fa fa-angle-right"
                                                                           aria-hidden="true"></i>New Arrivals</a>
                                    </li>
                                    <li><a href="mens_accessories.php"><i class="fa fa-angle-right"
                                                                           aria-hidden="true"></i>Online Only</a>
                                    </li>
                                    <li><a href="mens_accessories.php"><i class="fa fa-angle-right"
                                                                           aria-hidden="true"></i>Brands</a></li>
                                    <li><a href="mens_accessories.php"><i class="fa fa-angle-right"
                                                                           aria-hidden="true"></i>Clearance Sale</a>
                                    </li>
                                    <li><a href="mens_accessories.php"><i class="fa fa-angle-right"
                                                                           aria-hidden="true"></i>Discount Store</a>
                                    </li>
                                    <li><a href="mens_accessories.php"><i class="fa fa-angle-right"
                                                                           aria-hidden="true"></i>Editor's Pick</a>
                                    </li>
                                </ul>
                            </div>

                            <div
                                class="col-sm-3 w3layouts-nav-agile w3layouts-acc-nav-agileits w3layouts-acc-nav-agileits-2">
                                <p>MEN</p>
                                <a href="mens_accessories.php"><img src="images/other-nav-1.jpg"
                                                                     alt="Groovy Apparel"></a>
                            </div>

                            <div
                                class="col-sm-3 w3layouts-nav-agile w3layouts-acc-nav-agileits w3layouts-acc-nav-agileits-3">
                                <p>WOMEN</p>
                                <a href="womens_accessories.php"><img src="images/other-nav-2.jpg"
                                                                       alt="Groovy Apparel"></a>
                            </div>

                            <div
                                class="col-sm-3 w3layouts-nav-agile w3layouts-acc-nav-agileits w3layouts-acc-nav-agileits-4">
                                <p>ACCESSORIES</p>
                                <a href="mens_accessories.php"><img src="images/other-nav-3.jpg"
                                                                     alt="Groovy Apparel"></a>
                            </div>

                            <div class="clearfix"></div>
                            <p class="promo">Use Promo Code <span>#CFFGTY56</span> and take 30% off the products. <a
                                    href="#">Details</a></p>
                        </div>

                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span> HOTLIST </span></a>
                    <ul class="dropdown-menu multi multi4">
                        <div class="row">

                            <div
                                class="col-sm-3 w3layouts-nav-agile w3layouts-hot-nav-agileits w3layouts-hot-nav-agileits-1">
                                <ul class="multi-column-dropdown">
                                    <li class="heading">FEATURED</li>
                                    <li><a href="womens_accessories.php"><i class="fa fa-angle-right"
                                                                             aria-hidden="true"></i>New Arrivals</a>
                                    </li>
                                    <li><a href="womens_accessories.php"><i class="fa fa-angle-right"
                                                                             aria-hidden="true"></i>Online Only</a>
                                    </li>
                                    <li><a href="womens_accessories.php"><i class="fa fa-angle-right"
                                                                             aria-hidden="true"></i>Brands</a></li>
                                    <li><a href="womens_accessories.php"><i class="fa fa-angle-right"
                                                                             aria-hidden="true"></i>Clearance
                                            Sale</a></li>
                                    <li><a href="womens_accessories.php"><i class="fa fa-angle-right"
                                                                             aria-hidden="true"></i>Discount
                                            Store</a></li>
                                    <li><a href="womens_accessories.php"><i class="fa fa-angle-right"
                                                                             aria-hidden="true"></i>Editor's
                                            Pick</a></li>
                                </ul>
                            </div>

                            <div
                                class="col-sm-3 w3layouts-nav-agile w3layouts-hot-nav-agileits w3layouts-hot-nav-agileits-2">
                                <p>MEN</p>
                                <a href="mens.php"><img src="images/other-nav-1.jpg" alt="Groovy Apparel"></a>
                            </div>

                            <div
                                class="col-sm-3 w3layouts-nav-agile w3layouts-hot-nav-agileits w3layouts-hot-nav-agileits-3">
                                <p>WOMEN</p>
                                <a href="womens.php"><img src="images/other-nav-2.jpg" alt="Groovy Apparel"></a>
                            </div>

                            <div
                                class="col-sm-3 w3layouts-nav-agile w3layouts-hot-nav-agileits w3layouts-hot-nav-agileits-4">
                                <p>ACCESSORIES</p>
                                <a href="mens_accessories.php"><img src="images/other-nav-3.jpg"
                                                                     alt="Groovy Apparel"></a>
                            </div>

                            <div class="clearfix"></div>
                            <p class="promo">Use Promo Code <span>#CFFGTY56</span> and take 30% off the products. <a
                                    href="#">Details</a></p>
                        </div>

                    </ul>
                </li>
                <li><a href="about.php">ABOUT</a></li>
             <!-- --------------------Search box----------------------------------->
                <li class="wthreesearch">
                    <form action="search.php" method="get">
                        <input type="search" id="search-box" name="search" placeholder="Search for a Product" required="">
                        <button type="submit" class="btn btn-default search" aria-label="Left Align">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        <div id="suggesstion-box"></div>
                    </form>
                </li>
                <li class="wthreecartaits wthreecartaits2 cart cart box_1">
                    <form action="" method="post" class="last">
                        <input type="hidden" name="cmd" value="_cart"/>
                        <input type="hidden" name="display" value="1"/>
                        <button class="w3view-cart" type="submit" name="submit" value="">
                            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                        </button>
                    </form>
                </li>
            </ul>
        </div>

    </div>
</nav>
<!-- //Navigation -->

<?php //echo "<pre>";print_r($_SESSION); ?>

<!-- Header-Top-Bar-(Hidden) -->
<div class="agileheader-topbar">
    <div class="container">
        <div class="col-md-6 agileheader-topbar-grid agileheader-topbar-grid1">

         <!--   welcome message for login user------->
            <?php if(isset($_SESSION['firstname'])){?>
                <p>Welcome, <?php echo $_SESSION['firstname'].' '.$_SESSION['lastname']."!!";?></p>
            <?php }?>
            <p>Free shipping on orders over $150. <a href="payment.php">Details</a></p>
        </div>
        <div class="col-md-6 agileheader-topbar-grid agileheader-topbar-grid2">
            <ul>
                <li><a href="stores.php">Store Locator</a></li>
                <li><a href="faq.php">FAQ</a></li>

               <!--     To confirm logout ----------->
                <?php if(isset($_SESSION['user_id'])){?>
                    <li>
                        <a onclick="return confirm('Are you sure you want to logout?');" href="/web/logout.php">Logout</a>
                    </li>
                    <li>
                        <a href="/web/accountpage.php">My Account</a>
                    </li>
                <?php }else{?>
                    <li><a class="popup-with-zoom-anim" href="#small-dialog1">Login</a></li>
                    <li><a class="popup-with-zoom-anim" href="#small-dialog2">Sign Up</a></li>
                <?php }?>
                <li><a href="codes.php">Codes</a></li>
                <li><a href="icons.php">Icons</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>

    <!-- Popup-Box -->
    <div id="popup1">
        <div id="small-dialog1" class="mfp-hide agileinfo">
            <div class="pop_up">
                <form action="index.php" method="post">
                    <h3>LOGIN</h3>

                    <input type="text" Name="Userame" placeholder="Registered Email or PhoneNo" required="">
                    <input type="password" Name="Password" placeholder="Password" required="">

                    <ul class="tick w3layouts agileinfo">
                        <li>
                            <input type="checkbox" id="brand1" value="">
                            <label for="brand1"><span></span>Remember me</label>
                        </li>
                        <li>
                            <a href="#">Forgot Password?</a>
                        </li>
                    </ul>
                    <div class="send-button wthree agileits">
                        <input type="submit" name="login" value="LOGIN">
                    </div>
                </form>
            </div>
        </div>
        <div id="small-dialog2" class="mfp-hide agileinfo">
            <div class="pop_up">
                <form enctype="multipart/form-data" action="index.php" method="post">
                    <h3>SIGN UP</h3>
                    <input type="text" Name="fName" placeholder="First Name" required="">
                    <input type="text" Name="lName" placeholder="Last Name" required="">
                    <input type="text" Name="Email" placeholder="Email" required="">
                    <input type="text" Name="Phone" placeholder="Phone Number" required="">
                    <input id="pass" type="password" Name="Password" placeholder="Password" required="">
                    <input id="pass" type="password" Name="Password_confirm" onblur="return checkPassword(form)" placeholder="Confirm-Password" required="">
                    <input type="file" name='document'><br>
                    <div id="error" style="color: red"></div>
                    <div class="send-button wthree agileits">
                        <input type="submit" name="submit" value="SIGN UP">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- //Popup-Box -->

</div>
<!-- //Header-Top-Bar-(Hidden) -->
<script src="js/jquery-2.2.3.js"></script>
<script>
    // ---------------------search box------------------------
    $(document).ready(function(){
        $("#search-box").keyup(function(){
            var search = $(this).val();
            /*console.log(search.length);*/
            if(search.length > 3){ // query length is more than 3 characters
                $.ajax({
                    type: "POST",
                    url: "ajax/searchbox.php",
                    data:{keyword:search},
                    success: function(data){
                        $("#suggesstion-box").show();
                        $("#suggesstion-box").html(data);
                    }
                });
            }else{
                $("#suggesstion-box").hide();
            }
        });
    });
</script>