<?php
//Database Connection
include('config.php');
if(isset($_POST['submit']))
{
    $eid=$_GET['editid'];
    //Getting Post Values
    $add=$_POST['add'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    $zip=$_POST['zip'];
    $phone=$_POST['phone'];
//echo "update  address set UserAddress='$add',UserCity='$city', UserState='$state', UserCountry='$country', UserZip='$zip', UserPhone='$phone',where AddressID='$eid'";exit;
    //Query for data updation
    $query=mysqli_query($con, "update  address set UserAddress='$add',UserCity='$city', UserState='$state', UserCountry='$country', UserZip='$zip', UserPhone='$phone' where AddressID='$eid'");

    if ($query) {
        echo "<script>alert('You have successfully update the data');</script>";
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
        <?php
        $eid=$_GET['editid'];
        $ret=mysqli_query($con,"select * from address where AddressID='$eid'");
        while ($row=mysqli_fetch_array($ret)) {
            ?>
            <h2>Update </h2>
            <p class="hint-text">Update your info.</p>
              <div class="form-group">
                    <input type="text" class="form-control" name="add" value="<?php  echo $row['UserAddress'];?>" required="true">
             </div>
                <div class="form-group"
                         <input type="text" class="form-control" name="city" value="<?php  echo $row['UserCity'];?>" required="true">
                 </div>
            <div class="form-group">
                <input type="text" class="form-control" name="state" value="<?php  echo $row['UserState'];?>" required="true">
            </div>
            <div class="form-group">
                <input type="UserCountry" class="form-control" name="country" value="<?php  echo $row['UserCountry'];?>" required="true">
            </div>
           <div class="form-group">
               <input type="text" class="form-control" name="zip" value="<?php  echo $row['UserZip'];?>" required="true">
           </div>
            <div class="form-group">
               <input type="text" class="form-control" name="phone" value="<?php  echo $row['UserPhone'];?>" required="true">
            </div>
            <?php
        }?>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
        </div>
    </form>

</div>
</body>
</html>