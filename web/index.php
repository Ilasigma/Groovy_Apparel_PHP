<?php
session_start();
include('config.php');

if (isset($_POST['submit'])) {
    $fname = trim($_POST['fName']);
    $lname = trim($_POST['lName']);
    $email = trim($_POST['Email']);
    $phone = trim($_POST['Phone']);
    $password = trim(md5($_POST['Password']));
    $document = trim($_POST['document']);
//    ----------Backened validation------------------
    if (empty($fname)) {
        echo "<script>alert('enter your Firstname !');</script>";
        echo "<script>window.location.href ='index.php'</script>";
    } else if (!ctype_alpha($fname)) {
        echo "<script>alert('enter your Firstname letters only !');</script>";
        echo "<script>window.location.href ='index.php'</script>";
    } else if (empty($lname)) {
        echo "<script>alert('enter your Lastname !');</script>";
        echo "<script>window.location.href ='index.php'</script>";
    } else if (!ctype_alpha($lname)) {
        echo "<script>alert('enter your Lastname letters only !');</script>";
        echo "<script>window.location.href ='index.php'</script>";
    } else if (empty($email)) {
        echo "<script>alert('enter your email !');</script>";
        echo "<script>window.location.href ='index.php'</script>";
    } else if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {
        echo "<script>alert('enter your valid email !');</script>";
        echo "<script>window.location.href ='index.php'</script>";
    } else if (empty($phone)) {
        echo "<script>alert('enter your Phone No  !');</script>";
        echo "<script>window.location.href ='index.php'</script>";
    } else if (!is_numeric($phone)) {
        echo "<script>alert('enter your valid Phone No  !');</script>";
        echo "<script>window.location.href ='index.php'</script>";
    } else if (empty($password)) {
        echo "<script>alert('enter your Password !');</script>";
        echo "<script>window.location.href ='index.php'</script>";
    }
//            -----upload data---------
    $imgfile = $_FILES["document"]["name"];
    move_uploaded_file($_FILES["document"]["tmp_name"], "/var/www/html/PHP/web/data/" . $imgfile);


//--------------------Registration-----------
    $ret = mysqli_query($con, "select * from users where UserEmail='$email' || UserPhone='$phone'");
    $result = mysqli_fetch_array($ret);

    if ($result > 0) {
        echo "<script>alert('This email or Contact Number already associated with another account');</script>";
    } else {
        $query = mysqli_query($con, "INSERT INTO users(`UserEmail`, `UserPassword`, `UserFirstName`, `UserLastName`, `UserPhone`, `Document`) 
                              VALUES ('$email', '$password', '$fname', '$lname', '$phone', '$document')");

        // Send email
        $subjectStr = 'Registration Successfully!!';
        sendEmail($email, $subjectStr);

        if ($query) {
            echo "<script>alert('You have successfully registered');</script>";
            echo "<script>window.location.href ='index.php'</script>";
        } else {
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
            echo "<script>window.location.href ='index.php'</script>";
        }
    }

}


function sendEmail($email, $subjectStr)
{
    //  ----------------Email function------------
    $fromAddr = 'Groovy Apparel <www.phpgurukul.com>'; // the address to show in From field.
    $recipientAddr = $email;
    $mailBodyText = <<<HHHHHHHHHHHHHH
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>Registration</title>
</head>
<body>
<p><b>Welcome to GROOVY APPAREL</b></p>
<p>Thanks for the registration!</p>
</body>
</html>
HHHHHHHHHHHHHH;

    $headers = <<<TTTTTTTTTTTT
From: $fromAddr
MIME-Version: 1.0
Content-Type: text/html;
TTTTTTTTTTTT;

    mail($recipientAddr, $subjectStr, $mailBodyText, $headers);
}


//    -----------Login page---------------

if (isset($_POST['login'])) {
    $emailcon = $_POST['Userame'];
    $password = md5($_POST['Password']);
    $query = mysqli_query($con, "select * from users where  (UserEmail='$emailcon' || UserPhone='$emailcon') && UserPassword='$password' ");
    $ret = mysqli_fetch_array($query);
    if ($ret > 0) {
        $_SESSION['user_id'] = $ret['UserID'];
        $_SESSION['firstname'] = $ret['UserFirstName'];
        $_SESSION['lastname'] = $ret['UserLastName'];
        echo "<script>alert('Congratulations you have successfully login!!');</script>";
    } else {
        echo "<script>alert('Invalid Username and Password');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->
<head>

    <title>Groovy Apparel a E-Commerce & Fashion Category Bootstrap Responsive Website Template | Home ::
        W3layouts</title>

    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords"
          content="Groovy Apparel a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //Meta-Tags -->

    <!-- Custom-StyleSheet-Links -->
    <!-- Bootstrap-CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <!-- Header-Slider-CSS -->
    <link rel="stylesheet" href="css/fluid_dg.css" id="fluid_dg-css" type="text/css" media="all">
    <!-- //Custom-StyleSheet-Links -->

    <!-- Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Serif:400,700" type="text/css" media="all">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css" media="all">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500" type="text/css" media="all">
    <!-- //Fonts -->

    <!-- Font-Awesome-File-Links -->
    <!-- CSS -->
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
    <!-- TTF -->
    <link rel="stylesheet" href="fonts/fontawesome-webfont.ttf" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->

    <!-- Supportive-Modernizr-JavaScript -->
    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Default-JavaScript -->
    <script src="js/jquery-2.2.3.js"></script>

    <!--    ---------script for password------------->
    <script>
        function checkPassword(form) {
            Password = form.Password.value;
            Password_confirm = form.Password_confirm.value;

            if (Password != Password_confirm) {
                alert("\nPassword did not match: Please try again...");
                return false;
            }
        }

    </script>
</head>
<!-- //Head -->


<!-- Body -->
<body>


<!-- Header -->
<div class="agileheader" id="agileitshome">

    <?php include 'includes/header.php'; ?>

    <!-- Header-Slider -->
    <div class="w3slideraits">
        <div class="fluid_dg_wrap fluid_dg_emboss pattern_1 fluid_dg_white_skin" id="fluid_dg_wrap_4">
            <div data-thumb="images/slide-1-small.jpg" data-src="images/slide-1.jpg"></div>
            <div data-thumb="images/slide-2-small.jpg" data-src="images/slide-2.jpg"></div>
            <div data-thumb="images/slide-3-small.jpg" data-src="images/slide-3.jpg"></div>
            <div data-thumb="images/slide-4-small.jpg" data-src="images/slide-4.jpg"></div>
            <div data-thumb="images/slide-5-small.jpg" data-src="images/slide-5.jpg"></div>
        </div>
    </div>
    <!-- //Header-Slider -->

</div>
<!-- //Header -->


<!-- Model-Slider -->
<div class="agilemodel-slider">
    <div id='film_roll_1'>
        <div><img src="images/model_slide-1.jpg" alt="Groovy Apparel"></div>
        <div><img src="images/model_slide-2.jpg" alt="Groovy Apparel"></div>
        <div><img src="images/model_slide-3.jpg" alt="Groovy Apparel"></div>
        <div><img src="images/model_slide-4.jpg" alt="Groovy Apparel"></div>
        <div><img src="images/model_slide-5.jpg" alt="Groovy Apparel"></div>
        <div><img src="images/model_slide-6.jpg" alt="Groovy Apparel"></div>
        <div><img src="images/model_slide-7.jpg" alt="Groovy Apparel"></div>
        <div><img src="images/model_slide-8.jpg" alt="Groovy Apparel"></div>
        <div><img src="images/model_slide-9.jpg" alt="Groovy Apparel"></div>
        <div><img src="images/model_slide-10.jpg" alt="Groovy Apparel"></div>
    </div>
</div>
<!-- //Model-Slider -->


<!-- Latest-Arrivals -->
<div class="wthreehome-latest">
    <div class="container">

        <div class="wthreehome-latest-grids">
            <div class="col-md-6 wthreehome-latest-grid wthreehome-latest-grid1">
                <div class="grid">
                    <figure class="effect-apollo">
                        <img src="images/home-latest-1.jpg" alt="Groovy Apparel">
                        <figcaption></figcaption>
                    </figure>
                </div>
                <h4>DENIM TOPS</h4>
                <h5>Lorem Ipsum Dolor Site Amet</h5>
                <h6><a href="womens.php">Shop Now</a></h6>
            </div>
            <div class="col-md-6 wthreehome-latest-grid wthreehome-latest-grid2">
                <div class="grid">
                    <figure class="effect-apollo">
                        <img src="images/home-latest-2.jpg" alt="Groovy Apparel">
                        <figcaption></figcaption>
                    </figure>
                </div>
                <h4>LEATHER JACKETS</h4>
                <h5>Lorem Ipsum Dolor Site Amet</h5>
                <h6><a href="womens.php">Shop Now</a></h6>
            </div>
            <div class="col-md-6 wthreehome-latest-grid wthreehome-latest-grid3">
                <div class="grid">
                    <figure class="effect-apollo">
                        <img src="images/home-latest-3.jpg" alt="Groovy Apparel">
                        <figcaption></figcaption>
                    </figure>
                </div>
                <h4>WATCHES</h4>
                <h5>Lorem Ipsum Dolor Site Amet</h5>
                <h6><a href="womens_accessories.php">Shop Now</a></h6>
            </div>
            <div class="col-md-6 wthreehome-latest-grid wthreehome-latest-grid4">
                <div class="grid">
                    <figure class="effect-apollo">
                        <img src="images/home-latest-4.jpg" alt="Groovy Apparel">
                        <figcaption></figcaption>
                    </figure>
                </div>
                <h4>BEACH WEAR</h4>
                <h5>Lorem Ipsum Dolor Site Amet</h5>
                <h6><a href="mens.php">Shop Now</a></h6>
            </div>
        </div>
        <div class="clearfix"></div>

    </div>
</div>
<!-- //Latest-Arrivals -->


<!-- Winter-Collection -->
<div class="wthreewinter-coll">
    <div class="container">
        <h1>BRACE YOURSELVES! WINTER IS COMING...</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
        <div class="wthreeshop-a">
            <a href="womens.php">SHOP WINTER COLLECTION</a>
        </div>
    </div>
</div>
<!-- //Winter-Collection -->


<!-- Denim-Collection -->
<div class="wthreedenim-coll">
    <div class="style-grids">
        <div class="col-md-6 style-grid style-grid-1">
            <img src="images/style-1.jpg" alt="Groovy Apparel">
            <div class="style-grid-1-text">
                <h3>DENIM JEANS</h3>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                    professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                    consectetur.</p>
                <div class="wthreeshop-a">
                    <a href="womens.php">SHOP DENIM COLLECTION</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 style-grid style-grid-2">
            <div class="style-image-1">
                <img src="images/style-2.jpg" alt="Groovy Apparel">
                <div class="style-grid-2-text">
                    <h3>WATER REPELLENT</h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC.</p>
                </div>
            </div>
            <div class="style-image-2">
                <img src="images/style-3.jpg" alt="Groovy Apparel">
                <div class="style-grid-2-text">
                    <h3>STITCHED TO PERFECTION</h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC.</p>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //Denim-Collection -->


<!-- Clearance-Sale -->
<div class="aitsclearance-sales">
    <div class="aitsclearance-sales-text">
        <h2>ALL CLEARANCE ITEMS</h2>
        <h4>BUY ONE AND GET ONE FREE</h4>
        <h5>50% OFF
            <small>On selected products<sup>*</sup></small>
        </h5>
        <div class="wthreeshop-a">
            <a href="mens.php">SHOP NOW</a>
        </div>
    </div>
</div>
<!-- //Clearance-Sale -->


<!-- Shopping -->
<div class="agileshopping">
    <div class="container">

        <div class="agileshoppinggrids">
            <div class="col-md-6 agileshoppinggrid agileshoppinggrid1">
                <div class="grid">
                    <figure class="effect-apollo">
                        <img src="images/mens.jpg" alt="Groovy Apparel">
                        <figcaption></figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-6 agileshoppinggrid agileshoppinggrid2">
                <div class="grid">
                    <figure class="effect-apollo">
                        <img src="images/womens.jpg" alt="Groovy Apparel">
                        <figcaption></figcaption>
                    </figure>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="agileshoppinggrids-bottom">
            <h3>CHOOSE THE BEST FOR YOU</h3>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.</p>
            <div class="agileshoppinggrids-bottom-grids">
                <div class="col-md-6 agileshoppinggrids-bottom-grid agileshoppinggrids-bottom-grid1">
                    <div class="wthreeshop-a">
                        <a href="mens.php">SHOP MEN</a>
                    </div>
                </div>
                <div class="col-md-6 agileshoppinggrids-bottom-grid agileshoppinggrids-bottom-grid2">
                    <div class="wthreeshop-a">
                        <a href="womens.php">SHOP WOMEN</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
</div>
<!-- //Shopping -->

<!-- Newsletter -->
<div class="agileinfonewsl">
    <h3>SIGN UP FOR NEWSLETTER</h3>
    <p>Subscribe to us to get highest-level access to our new styles and trends</p>
</div>
<!-- //Newsletter -->

<?php include('includes/footer.php'); ?>


<!-- Custom-JavaScript-File-Links -->

<!-- Default-JavaScript -->
<script src="js/jquery-2.2.3.js"></script>
<script src="js/modernizr.custom.js"></script>
<!-- Custom-JavaScript-File-Links -->

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

<!-- Header-Slider-JavaScript-Files -->
<script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='js/fluid_dg.min.js'></script>
<script>jQuery(document).ready(function () {
        jQuery(function () {
            jQuery('#fluid_dg_wrap_4').fluid_dg({
                height: 'auto',
                loader: 'bar',
                pagination: false,
                thumbnails: true,
                hover: false,
                opacityOnGrid: false,
                imagePath: '',
                time: 4000,
                transPeriod: 2000
            });
        });
    })
</script>
<!-- //Header-Slider-JavaScript-Files -->

<!-- Dropdown-Menu-JavaScript -->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //Dropdown-Menu-JavaScript -->

<!-- Pricing-Popup-Box-JavaScript -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
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
<!-- //Pricing-Popup-Box-JavaScript -->

<!-- Model-Slider-JavaScript-Files -->
<script src="js/jquery.film_roll.js"></script>
<script>
    (function () {
        jQuery(function () {
            this.film_rolls || (this.film_rolls = []);
            this.film_rolls['film_roll_1'] = new FilmRoll({
                container: '#film_roll_1',
                height: 560
            });
            return true;
        });
    }).call(this);
</script>
<!-- //Model-Slider-JavaScript-Files -->

<!-- //Custom-JavaScript-File-Links -->


<!-- Bootstrap-JavaScript -->
<script src="js/bootstrap.js"></script>

</body>
<!-- //Body -->


</html>