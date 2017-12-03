<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
     <a href="index.php" class="navbar-left"><img src="img/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="store.php">STORE</a></li>
         <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>CART</a></li>
<?php if(isset($_SESSION['username'])): ?>
<li><a href="admin.php">ORDERS</a></li>
<?php endif; ?>
                                        <br class="">
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        
      </ul>
    </div>
  </div>
</nav>


