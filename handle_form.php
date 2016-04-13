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
require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;
$firstName = $_POST['fn'];
$lastName = $_POST['ln'];
$comments = $_POST['comments'];
$usrEmail = $_POST['usr-email'];

$usrCarrier = $_POST['usrCarrier'];
$usrCell 	= $_POST['usrCell'];
$masterCell = "7604641544@vtext.com";

// $mail->SMTPDebug = 2;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'asterofspace2@gmail.com';                 // SMTP username
$mail->Password = 'Muneca123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to

$mail->setFrom('info@asterofspace.com', 'The Lightside');
$mail->addAddress('info@asterofspace.com', 'Support Group');     // Add a recipient
$mail->addAddress("$masterCell",'Test');
$mail->addAddress('info@asterofspace.com', "Test");               // Name is optional
$mail->addReplyTo('info@asterofspace.com', 'Support Group');
$mail->addCC('info@asterofspace.com');
$mail->addBCC('info@asterofspace.com');

// commented out since im not using them $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('PHPMailer-master/img/Black-Stormtrooper.png', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $firstName." ".$lastName." ";
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
				<h2><strong style='text-transform:capitalize;'>$firstName $lastName,</strong>
					<br> has left you a message:<h4><b>$comments</b></h4>
					<h5> Cell Number $usrCell</h5>
					<p>Cell Company <b> $usrCarrier </b></p>
				</div>
			<hr>
				<h6 style='text-align:center'>From: $usrEmail </h6> 
</body>
</html>"

;



$mail->AltBody = "Msg: '$comments' Email: $usrEmail PN#: $usrCell";

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;

} else {
    echo "
    	<html>
    			<head>
    			<link rel='stylesheet' type='text/css' href='css/bootstrap.css'/>
    			<link rel='stylesheet' type='text/css' href='css/styles.css'/>
   <body>
    <article class='row text-center'>
		<article class='col-md-12 jumbotron-blue'>
			<h1 class='text-white'>Email Sent</h1>
		</article>
	</article>

			<article class='row text-center'>
		<article class='col-md-12 fill-background-blue'>
			<h2 class='text-center'>Thank You</h2>
					<h3 class='text-capitalize'><b>$firstName $lastName</b></h3><p> You Said <b>$comments</b></p>
							<h4>We Will Send You a SMS at <b>$usrCell</b></h4>
							<h5><b>Message and data rates may apply</b></h5>
		</article>
	</article>
	<footer class='text-center'>From: <a href='$usrEmail'>$usrEmail</a></footer>
	</body>
		</html>
	";
}
 
 ?>
 
 </html>
 
 
 