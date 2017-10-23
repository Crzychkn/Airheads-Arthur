<?php include'header.php'?>

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

<?php include'footer.php'?>

