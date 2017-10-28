<?php include'header.php'?>

<?php include'../../includes/connect.php'?>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<! -- Redirect back to home page after 5 seconds -->
<!--<meta http-equiv="refresh" content="5; url=index.php" /> -->

<?php include'navigation.php'?>

<?php
if(isset($_POST)){ 
	$customerfirst = $_POST['customerfirst'];
	$customerlast = $_POST['customerlast'];
	$streetone = $_POST['streetone'];
	echo $customerfirst;
	echo $customerlast;
	echo $streetone;
}
?>



<div class="container">
	<h5>Thanks for your order!</h5>
</div>

<?php include'footer.php'?>

