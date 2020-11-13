<?php
session_start();
include('config.php');

$email = trim($_POST['Email']);
$query = mysqli_query($con, "INSERT INTO `newsletter`(`email_id`) VALUES ('$email')");

echo "<script>alert('You have successfully subscribed');</script>";
echo "<script>window.location.href = '".$_SERVER['HTTP_REFERER']."'</script>"; // HTTP_REFERER - Give us previous page URL

// Send email
$subjectStr = 'Subscription Successfully!!';
sendEmail($email,$subjectStr);


function sendEmail($email, $subjectStr){
    //  ----------------Email function------------
    $fromAddr='Groovy Apparel <www.phpgurukul.com>'; // the address to show in From field.
    $recipientAddr = $email;
    $mailBodyText = <<<HHHHHHHHHHHHHH
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>Subscribe</title>
</head>
<body>
<p><b>Welcome to GROOVY APPAREL</p>
<p><b>Newsletter Confirmation</b><p>
<br>You're subscribed to the following newsletters:

<br>You can always change, manage or update your subscriptions.

<p>Thanks,
Your Friends At GROOVY APPAREL!</p>
</body>
</html>
HHHHHHHHHHHHHH;

    $headers= <<<TTTTTTTTTTTT
From: $fromAddr
MIME-Version: 1.0
Content-Type: text/html;
TTTTTTTTTTTT;

    mail($recipientAddr,$subjectStr,$mailBodyText,$headers);
}

?>