<?php
//Databse Connection file
include('config.php');
if(isset($_POST['submit']))
{
    //getting the post values
    $add=$_POST['add'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    $zip=$_POST['zip'];
    $phone=$_POST['phone'];
//	  print_r($_POST);
//	echo "insert into tblusers(FirstName,LastName, MobileNumber, country, skill,  Address) value('$fname','$lname', '$contno', '$country', '$skill', '$add' )";
//	    exit;

    // Query for data insertion
    $query=mysqli_query($con, "insert into address(UserAddress,UserCity, UserState, UserCountry, UserZip,  UserPhone) value('$add','$city', '$state', '$country', '$zip', '$phone' )");
    if ($query) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script type='text/javascript'> document.location ='accountpage.php'; </script>";
    }
    else
    {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Address Management!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/address.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="signup-form">
    <form  method="POST">
        <h2>Fill Data</h2>
        <p class="hint-text">Fill below form.</p>
        <div class="form-group">
            <input type="text" class="form-control" name="add" placeholder="User Address" required="true">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="city" placeholder="User City" required="true">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="state" placeholder="User State" required="true" >
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="country" placeholder="User Country" required="true">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="zip" placeholder="User Zip" required="true">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="phone" placeholder="User Phone" required="true">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
        </div>
    </form>    
</div>
</body>
</html>