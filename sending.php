<?php 
$element1 = $_POST['name'];
$element2 = $_POST['email_address'];
$element3 = $_POST['message'];

//-----------------
$message = "<html><body>";
$body = "Name: ".$element1.
        "<br />Email: ".$element2.
        "<br />Message: ".$element3;
$message .= "</body></html>";

$to = "pkfulch1408@gmail.com";
$subject = "Contact Form";
$message = $body;
$from = "daniel.fulcher@btinternet.com";
$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to,$subject,$message,$headers);

header( 'Location: thanks.php' ) ;

?>