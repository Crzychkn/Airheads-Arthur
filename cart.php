<?php include'header.php'?>

<?php include'../../includes/connect.php'?>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<?php include'navigation.php'?>


<div class="container">
  <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
              <th style="width:50%">Product</th>
              <th style="width:10%">Price</th>
              <th style="width:8%">Quantity</th>
              <th style="width:22%" class="text-center">Subtotal</th>
              <th style="width:10%"></th>
            </tr>
          </thead>

          <tbody>

<?php if (isset($_SESSION['cart'])): ?>

	<?php $sql = "select * from products where id in (";?>

	<?php echo "TEST"; ?>

	<?php foreach ($_SESSION['cart'] as $id => $value): ?>

		<?php $sql.=$id.",";?>		

	<?php endforeach; ?>

	<?php $sql = substr($sql, 0, -1).") order by name asc"; ?>

	<?php $query = mysqli_query ($conn, $sql); ?>

	<?php while ($row = mysqli_fetch_array($query)): ?>

		<?php $cartArr[] = $row; ?>

	<?php endwhile; ?>

	<?php foreach ($cartArr as $output): ?>

            <tr>
              <td data-th="Product">
                <div class="row">
		<div class="col-sm-2 hidden-xs"><img src="<?php echo $output['image'] ?>" alt="..." class="img-responsive"/></div>
                  <div class="col-sm-10">
		  <h4 class="nomargin"><?php echo $output['name'] ?></h4>
			
                    <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
              </td>
              <td data-th="Price">$7.95</td>
              <td data-th="Quantity">
                <input type="number" class="form-control text-center" value="1">
              </td>
              <td data-th="Subtotal" class="text-center">$7.95</td>
              <td class="actions" data-th="">
                <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>                
              </td>
            </tr>

	<?php endforeach; ?>

<?php else: echo "Your cart is empty.";?>

<?php endif; ?>

          </tbody>

	<!-- Sub Total Footer -->
          <tfoot>
            <tr class="visible-xs">
              <td class="text-center"><strong>Total $7.95</strong></td>
            </tr>
            <tr>
              <td><a href="store.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
              <td colspan="2" class="hidden-xs"></td>
              <td class="hidden-xs text-center"><strong>Total $7.95</strong></td>
              <td><a href="checkout.php" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
            </tr>
          </tfoot>
        </table>
</div>

<?php include'footer.php'?>

