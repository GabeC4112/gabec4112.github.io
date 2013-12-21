<?php

$subject= "Gabe Design Contact Form";
$messageBody .= "****** Contact Information ****************\n\n";
$messageBody .= "Date: ".date('l dS \of F Y h:i:s A')."\n\n";
$messageBody .= "Name: ".$_POST['name']."\n";
$messageBody .= "Email Address: ".$_POST['email']."\n";
$messageBody .= "Phone: ".$_POST['phone']."\n";
$messageBody .= "Fax: ".$_POST['fax']."\n";
$messageBody .= "Address: ".$_POST['address']."\n";
$messageBody .= "City: ".$_POST['city']."\n";
$messageBody .= "State: ".$_POST['state']."\n";
$messageBody .= "Zip Code: ".$_POST['zipcode']."\n";
$messageBody .= "Comments: ".$_POST['special']."\n";

mail("GabeC4112@gmail.com",$subject,$messageBody,"From: Gabedesign.com");
header("Location: http://www.gabedesign.com/thankyou.php");


?>
