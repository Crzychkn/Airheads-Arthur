<?php include'header.php'?>

<?php include'../../includes/connect.php'?>

<?php

$query = "select * from orders order by id asc";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($result))
{
	$resultArr[] = $row;
}
?>

<?php include 'navigation.php'?>

<div class="container">
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
		<?php elseif($output['status'] == "cancelled"): ?>
		<td><span class="label label-danger"><?php echo $output['status']?></span></td>  
		<?php else: ?>
		<td><span class="label label-warning"><?php echo $output['status']?></span></td>  
		<?php endif; ?>
                </tr>                                   
<?php endforeach; ?>
              </tbody>
            </table>
            </div>
  </div>
</div>

<?php include'footer.php'?>

