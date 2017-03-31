<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Coming Soon</title>
<link href="tools/style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="tools/font-awesome/css/font-awesome.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="tools/jquery.min.js"></script> 
<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href="https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
</head>
<body>
<div class="transy"></div>
<div class="wrapper">
	<div class="centered">
		<div class="header">
			<h1 id="logo">Coming Soon :)</h1>
		</div>
		<div class="content">
				<p>This Site is under construction.</p>
		</div>		
		<div class="form">
			<p>We'll be back soon</p>
		</div>
		<button class="button" onclick="openPopupMenu()">subscribe</button>
		<div id="popup_bg">
			<div id="popup_main_div">
				<div class="container">
				  <form action="process.php">
				    <label for="fname">Name</label>
				    <input type="text" id="fname" name="name" placeholder="Your name..">

				    <label for="lname">Email</label>
				    <input type="text" id="lname" name="email" placeholder="Your last name..">

				    <label for="phone">Phone</label>
				    <input type="text" id="phone" name="phone" placeholder="Your last name..">

				    <label for="message">Message</label>
				    <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

				    <input type="submit" value="Submit">
				  </form>
				  <br><br>
				</div>
				<div id="close_popup_div" onclick="closePopupMenu()">
					x
				</div>
			</div>
		</div>
		
	</div>
</div>

	
	
		<script type="text/javascript">
var placeholder = $("#test").val();

$("#test").keydown(function() {
    if (this.value == placeholder) {
        this.value = '';
    }
}).blur(function() {
    if (this.value == '') {
        this.value = placeholder;
    }
});

var popupDiv = document.getElementById('popup_bg');
	function openPopupMenu() {
		popupDiv.style.display = "block";
	}
	function closePopupMenu() {
		popupDiv.style.display = "none";
	}
</script>

</body>
</html>
