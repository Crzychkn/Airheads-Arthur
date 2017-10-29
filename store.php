<?php include'header.php'?>
<?php include'../../includes/connect.php'?>
<?php 
  
    if(isset($_GET['action']) && $_GET['action']=="add"){ 
        $id=intval($_GET['id']); 
        if(isset($_SESSION['cart'][$id])){ 
              
            $_SESSION['cart'][$id]['quantity']++; 
              
        }else{ 
              
            $sql_s = "SELECT * FROM products WHERE id={$id}"; 
            $query_s=mysqli_query($conn, $sql_s); 
            if(mysqli_num_rows($query_s)!=0){ 
                $row_s=mysqli_fetch_array($query_s); 
                  
                $_SESSION['cart'][$row_s['id']]=array( 
                        "quantity" => 1, 
                        "price" => $row_s['price'] 
                    ); 
                  
            }else{ 
                  
                $message="This product id is invalid!"; 
                  
            } 
              
        } 
          
    } 
  
?>

<?php 
$query = "select id, name, image, price from products"; 
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

        <div class="item  col-xs-12 col-md-6 col-lg-4">
            <div class="thumbnail">
        <img class="group list-group-image" src="<?php echo $output['image']?>" alt="" data-toggle="modal" data-target="#myModal<?php echo $output['id'] ?>"/>
                <div class="caption">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal<?php echo $output['id'] ?>"><h4 class="group inner list-group-item-heading"><?php echo $output['name']?></h4></button>


                <!-- Modal -->
<div id="myModal<?php echo $output['id'] ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        <h4 class="modal-title"><?php echo $output['name']?></h4>
         <img class="group list-group-image" src="<?php echo $output['image']?>" alt="" />
      </div>
      <div class="modal-body">
        <p>Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
      </div>
      <div class="modal-footer">
        <a class="btn btn-success" href="store.php?action=add&id=<?php echo $output['id'] ?>">Add to cart</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


                    
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
            <p class="lead">$<?php echo $output['price']?></p>
                        </div>
                        <div class="col-xs-12 col-md-6">

                <a class="btn btn-success" href="store.php?action=add&id=<?php echo $output['id'] ?>">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php } ?>
    
    </div>
</div>

<?php include'footer.php'?>
