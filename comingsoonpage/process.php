<!DOCTYPE html>
<html>
<meta http-equiv="refresh" content="5; url=http://solutionsally.com/" />
<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
<head>
    <title>Bigperl Private Solutions Ltd</title>
</head>
<body>
<?php

    $to = "info@solutionsally.com"; 
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
        <h1>Thank You for sharing your details with us, We'll update you soon</h1>
    </div>
</div>
</body>
</html>