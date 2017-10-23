<?php include'header.php'?>

<?php include'../../includes/connect.php'?>

<?php 

$query = "select name, image, price from products"; 

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($result))
{
	$resultArr[] = $row;
}

?>


<?php include'navigation.php'?>

<div class="container">

<div id="products" class="row list-group">


<?php foreach ($resultArr as $output) { ?>

        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
	    <img class="group list-group-image" src="<?php echo $output['image']?>" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading"><?php echo $output['name']?></h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
			<p class="lead">$<?php echo $output['price']?></p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php } ?>
    
    </div>
</div>

<?php include'footer.php'?>

