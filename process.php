<!DOCTYPE html>
<html>
<meta http-equiv="refresh" content="3; url=http://premium.way2gps.com/landing_page/mobile-application-development" />
<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
<head>
    <title>Bigperl Private Solutions Ltd</title>
</head>
<body>
<?php

    $to = "rajlaxmi@grabwebs.com";
    $from = $_REQUEST['email']; 
    $name = $_REQUEST['name']; 
    $headers = "From: $from"; 
    $subject = "You have a message sent from your site"; 

    $fields = array(); 
    $fields{"name"} = "name"; 
    $fields{"email"} = "email"; 
    $fields{"phone"} = "phone"; 
    $fields{"message"} = "message";

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
<div class="container">
    <div class="well">
        <p>Thank You for sharing your details with us, We'll update you soon</p>
    </div>
</div>
</body>
</html>