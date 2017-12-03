<?php include'header.php'?>


<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Redirect back to home page after 5 seconds -->
<meta http-equiv="refresh" content="5; url=index.php" />

<?php include'navigation.php'?>

<?php
if(isset($_POST)){ 

	if (isset($_SESSION['username']))
	{
		
	//Prepare statement
	$stmt = $conn->prepare("insert into orders (username, customerfirst, customerlast, streetone, streettwo, zip, city, state, totalprice, status) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssssissds", $username, $customerfirst, $customerlast, $streetone, $streettwo, $zip, $city, $state, $totalprice, $status);
	$username = $_SESSION['username'];
	$customerfirst = $_POST['customerfirst'];
	$customerlast = $_POST['customerlast'];
	$streetone = $_POST['streetone'];
	$streettwo = $_POST['streettwo'];
	$zip = $_POST['zip'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$totalprice = $_SESSION['totalprice'];
	$status = "pending";	


	$stmt->execute();
	$stmt->close();
	$conn->close();
	
	unset($_SESSION['cart']);
	}
	else
	{

	//Prepare statement
	$stmt = $conn->prepare("insert into orders (customerfirst, customerlast, streetone, streettwo, zip, city, state, totalprice, status) values (?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("ssssissds", $customerfirst, $customerlast, $streetone, $streettwo, $zip, $city, $state, $totalprice, $status);
	$customerfirst = $_POST['customerfirst'];
	$customerlast = $_POST['customerlast'];
	$streetone = $_POST['streetone'];
	$streettwo = $_POST['streettwo'];
	$zip = $_POST['zip'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$totalprice = $_SESSION['totalprice'];
	$status = "pending";	


	$stmt->execute();
	$stmt->close();
	$conn->close();
	
	unset($_SESSION['cart']);
	}
}
?>



<div class="container">
	<h2>Thanks for your order!</h2>
	<p>You will receive an email confirmation shortly.</p>
</div>

<?php include'footer.php'?>

