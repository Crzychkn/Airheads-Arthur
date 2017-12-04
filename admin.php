<?php include'header.php'?>


<?php
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}

?>

<?php

if(isset($_POST['cancel']) || isset($_POST['ship']))
{

if (isset($_POST['cancel']))
{
	$status = "cancelled";
}
else if (isset($_POST['ship']))
{
	$status = "shipped";
}

$id = $_POST['todelete'];

foreach ($id as $delete)
{
	$query = "update orders set status='$status' where id='$delete'";
	mysqli_query($conn, $query);
	$query = "select * from orders where id=$delete";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);

        // Set the recipient email address.
        $recipient = "arthur.schoenfeld@gmail.com, $email";

        // Set the email subject.
        $subject = "Your order of Airheads has been $status";

        // Build the email content.
        $email_content = "Name: ".$row['customerfirst']." ".$row['customerlast']."\n";
        $email_content .= "Email: ".$row['email']."\n\n";
        $email_content .= "Total: \n$".$row['totalprice']."\n";
	echo $email_content;

        // Build the email headers.
        $email_headers = "From: ".$row['customerfirst']." <".$row['email'].">";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
        }



}


}

?>

<?php


if($_SESSION['username'] == "admin")
{

$query = "select * from orders order by id asc";

$result = mysqli_query($conn, $query);

}

else {
	$username = $_SESSION['username'];
	$query = "select * from orders where username='".$_SESSION['username']."'";
	$result = mysqli_query($conn, $query);
}
while ($row = mysqli_fetch_array($result))
{
	$resultArr[] = $row;
}
?>

<?php include 'navigation.php'?>

<div class="container">
<form action="admin.php" method="post">
  <div class="row">
    <div class="span5">
    <h3>ORDERS</h3>
            <table class="table table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>Customer Name</th>
                      <th>Address</th>
                      <th>Order Date</th>
                      <th>Price</th>
                      <th>Status</th>                                          
                      <th>Selected</th>                                          
                  </tr>
              </thead>   
              <tbody>

<?php foreach ($resultArr as $output): ?>
                <tr>
		<td><?php echo $output['customerfirst']." ", $output['customerlast']?></td>
		<td><?php echo $output['streetone']." ", $output['streettwo']." <br>", $output['city'].", ", $output['state']." ", $output['zip'] ?></td>
		<td><?php echo date('m/j/Y',strtotime($output['orderdate'])); ?></td>
		<td>$<?php echo $output['totalprice']?></td>
		<?php if($output['status'] == "shipped"): ?>
		<td><span class="label label-success"><?php echo $output['status']?></span></td>  
		<td></td>
		<?php elseif($output['status'] == "cancelled"): ?>
		<td><span class="label label-danger"><?php echo $output['status']?></span></td>  
		<td></td>
		<?php else: ?>
		<td><span class="label label-warning"><?php echo $output['status']?></span></td>  
		<td><input type="checkbox" value="<?php echo $output['id'] ?>" name="todelete[]" /></td>
		<?php endif; ?>
                </tr>                                   
<?php endforeach; ?>
              </tbody>
            </table>
            </div>
  </div>
<?php if($_SESSION['username'] == "admin"): ?>
  <button type="submit" name="ship" class="btn btn-success">SHIP</button>
<?php endif; ?>
  <button type="submit" name="cancel" class="btn btn-success">CANCEL</button>
</form>
</div>

<?php include'footer.php'?>

