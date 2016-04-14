<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<title>About</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css"  >
	
</head>

 <?php
require '../PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;
$usrCarrier = $_POST['usrCarrier'];
$usrCell 	= $_POST['usrCell'];
$masterCell = $usrCell.$usrCarrier;
$fullName 	= $_POST['fullName'];
$msg 		= $_POST['msg'];

// $mail->SMTPDebug = 2;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'asterofspace2@gmail.com';                 // SMTP username
$mail->Password = 'Muneca123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to

$mail->setFrom($fullName);
$mail->addAddress($masterCell);
$mail->addAddress("asterofspace@hotmail.com");

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $fullName;
$mail->Body    = "
<html>
	<head>
		<link rel='stylesheet' href='css/styles.css'>
			<title>Website Contact Form
		</title>
	</head>
<html>
	<body>
		<div style='text-align:center;'>
			<h1 style='background:#409FF2;'>Contact Form</h1>
				<h2><strong style='text-transform:capitalize;'>firstName lastName,</strong>
					<br> has left you a message:<h4><b>comments</b></h4>
					<h5> Cell Number usrCell</h5>
					<p>Cell Company <b> usrCarrier </b></p>
				</div>
			<hr>
				<h6 style='text-align:center'>From: usrEmail </h6> 
</body>
</html>"

;



$mail->AltBody = "Msg: $msg";

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;

} else {
    echo "
    	<html>
    			
   <body>
    <article class='row text-center'>
		<article class='col-md-12 jumbotron-blue'>
			<h1 class='text-white'>Message Sent</h1>
		</article>
	</article>

			<article class='row text-center'>
		<article class='col-md-12'>
			<h2 class='text-center'>Thank You <br>$fullName</h2>
							<h3>Message sent to <b>$usrCell</b></h3>
							<h5><b>Message and data rates may apply</b></h5>

		</article>
	</article>
	<a href='index.php' class='text-center'>Go Back</a>
	
	</body>
		</html>
	";
}
 
 ?>
 
 </html>
 
 
 