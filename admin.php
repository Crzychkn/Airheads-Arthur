<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Airheads Candy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="img/favicon.png" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/custom.css" type="text/css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    
     <a href="index.php" class="navbar-left"><img src="img/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="store.php">STORE</a></li>
         <li><a href="cart.php">CART</a></li> <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
              Sign In<span class="caret"></span>
            </a>

                    <div class="dropdown-menu" id="formLogin">
                        <div class="row">
                            <div class="container-fluid">
                                <form class="">
                                    <div class="form-group">
                                        <label class="">Username</label>
                                        <input class="form-control" name="username" id="username" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="">Password</label>
                                        <input class="form-control" name="password" id="password" type="password">
                                        <br class="">
                                    </div>
                                     <a href="index.php" type="submit" id="btnLogin" class="btn btn-success btn-sm">Logout</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>   
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="span5">
    <h3>ORDERS</h3>
            <table class="table table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>Username</th>
                      <th>Order Date</th>
                      <th>Price</th>
                      <th>Status</th>                                          
                  </tr>
              </thead>   
              <tbody>
                <tr>
                    <td>Donna R. Folse</td>
                    <td>9/29/2017</td>
                    <td>$17.89</td>
                   <td><span class="label label-warning">Pending</span></td>  
                    </td>                                       
                </tr>
                <tr>
                    <td>Emily F. Burns</td>
                    <td>9/27/2017</td>
                    <td>$55.77</td>
                  <td><span class="label label-warning">Pending</span></td>                                     
                </tr>
                <tr>
                    <td>Andrew A. Stout</td>
                    <td>9/23/2017</td>
                    <td>$96.75</td>
                    <td><span class="label label-cancelled">Cancelled</span></td>                                        
                </tr>
                <tr>
                    <td>Mary M. Bryan</td>
                    <td>9/23/2017</td>
                    <td>$11.98</td>
                    <td><span class="label label-success">Shipped</span>                                      
                </tr>
                <tr>
                    <td>Mary A. Lewis</td>
                    <td>9/21/2017</td>
                    <td>$23.79</td>
                   <td><span class="label label-success">Shipped</span>                                       
                </tr>                                   
              </tbody>
            </table>
            </div>
  </div>
</div>
<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Theme Made By <a href="http://www.uvu.edu" data-toggle="tooltip" title="Visit Using">Airheads Dev Team</a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})


</script>

</body>
</html>
