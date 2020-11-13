<?php
session_start();
include('config.php');

//Code for deletion
if (isset($_GET['delid'])) {
    $rid = intval($_GET['delid']);
    $sql = mysqli_query($con, "delete from address where AddressID=$rid");
    echo "<script>alert('Data deleted');</script>";
    echo "<script>window.location.href = 'accountpage.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Address Management!</title>
    <link rel="stylesheet" href="css/address.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body>
<nav class="navbar navbar-default w3ls navbar-fixed-top">
    <div class="container">
        <div class="navbar-header wthree nav_2">
            <a class="navbar-brand agileinfo" href="index.php"><span>GROOVY</span> APPAREL</a>
            <!--   welcome message for login user------->
            <?php if(isset($_SESSION['firstname'])){?>
                <p>Welcome, <?php echo $_SESSION['firstname'].' '.$_SESSION['lastname']."!!";?></p>
            <?php }?>
        </div>        
    </div>
</nav>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Address <b>Management</b></h2>
                    </div>
                    <div class="col-sm-7" align="right">
                        <a href="insert.php" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add Address</span></a>

                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>AddressID</th>
                    <th>UserAddress</th>
                    <th>UserCity</th>
                    <th>UserState</th>
                    <th>UserCountry</th>
                    <th>UserZip</th>
                    <th>UserPhone</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $ret = mysqli_query($con, "select * from address");
                $cnt = 1;
                $row = mysqli_num_rows($ret);
                if ($row > 0) {
                    while ($row = mysqli_fetch_array($ret)) {

                        ?>
                        <!--Fetch the Records -->
                        <tr>
                            <td><?php echo $row['AddressID']; ?></td>
                            <td><?php echo $row['UserAddress']; ?></td>
                            <td><?php echo $row['UserCity']; ?></td>
                            <td><?php echo $row['UserState']; ?></td>
                            <td><?php echo $row['UserCountry']; ?></td>
                            <td> <?php echo $row['UserZip']; ?></td>
                            <td> <?php echo $row['UserPhone']; ?></td>
                            <td>
                                <a href="edit.php?editid=<?php echo htmlentities($row['AddressID']); ?>" class="edit"
                                   title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a href="accountpage.php?delid=<?php echo($row['AddressID']); ?>" class="delete"
                                   title="Delete" data-toggle="tooltip"
                                   onclick="return confirm('Do you really want to Delete ?');"><i
                                        class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>
                        <?php
                        $cnt = $cnt + 1;
                    }
                } else { ?>
                    <tr>
                        <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
                    </tr>
                <?php } ?>

                </tbody>
            </table>

        </div>
    </div>
</div>
</body>
</html>