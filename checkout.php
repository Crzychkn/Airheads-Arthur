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
    
     <a href="index.html" class="navbar-left"><img src="img/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">HOME</a></li>
        <li><a href="store.html">STORE</a></li>
         <li><a href="cart.html">CART</a></li>
      
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
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
                                     <a href="admin.html" type="submit" id="btnLogin" class="btn btn-success btn-sm">Login</a>
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

<div class="container-fluid">
  <div class="page-header">
    <h1>Checkout </h1>
  </div>
               
        <div class="list-group-item">
          <div class="list-group-item-heading">          
              <div class="row">
               
                <div class="col-xs-9">                      
                  <form role="form" class="">
                    <div class="form-group">
                      <label for="inputname">Name</label>
                      <input type="text" class="form-control form-control-large" id="inputname" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress1">Street address 1</label>
                      <input type="text" class="form-control form-control-large" id="inputAddress1" placeholder="Enter address">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Street address 2</label>
                      <input type="text" class="form-control form-control-large" id="inputAddress2" placeholder="Enter address">
                    </div>
                    <div class="row">
                      <div class="col-xs-3">
                        <div class="form-group">
                          <label for="inputZip">ZIP Code</label>
                          <input type="text" class="form-control form-control-small" id="inputZip" placeholder="Enter zip">
                        </div>
                      </div>
                      <div class="col-xs-9">
                        <div class="form-group">
                          <label for="inputCity">City</label>
                          <input type="text" class="form-control" id="inputCity" placeholder="Enter city">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputState" class="control-label">State</label>
                      <select class="form-control form-control-large">
                        <option>Select state</option>
                      </select>
                    </div>
                  </form>
                  <button class="btn btn-sm">Save Address</button>
                </div>
              </div>
          </div>
        </div>
      </div>
      <form role="form">
          <div class="checkbox">
            <label data-toggle="collapse" data-target="#gift">
              <input type="checkbox"> I'd like to include a gift message
            </label>
          </div>
          <div class="form-group collapse" id="gift">
            <label for="inputGift" class="control-label">Gift Message</label>
            <textarea class="form-control form-control-large" rows="3"></textarea>
            <p class="help-block">256 characters left</p>
          </div>
      </form>
      <h3>I'll pay with&hellip;</h3>
      <div class="list-group">
        <div class="list-group-item">
          <div class="list-group-item-heading">          
              <div class="row radio">
                <div class="col-xs-3">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked>
                    My Visa Card
                  </label>
                </div>
                <div class="col-xs-9">
                  <div class="row">
                    <div class="col-xs-4">                      
                      <dl class="dl-small">
                        <dt>Credit Card Number</dt>
                        <dd>**********1111</dd>
                      </dl>
                    </div>
                    <div class="col-xs-2">
                      <dl class="dl-small">
                        <dt>Expiration</dt>
                        <dd>07/2016</dd>
                      </dl>
                    </div>
                    <div class="col-xs-6">
                      <dl class="dl-small">
                        <dt>Billing Address</dt>
                        <dd>1234 Some Street, AnyTown, UT 84601 </dd>
                      </dl>
                    </div>
                  </div>
                  <button class="btn btn-sm">Edit</button>
                  <button class="btn btn-sm btn-link">Delete this card</button>
                </div>
              </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="list-group-item-heading">          
              <div class="row radio">
                <div class="col-xs-3">
                  <label data-toggl-e="collapse" data-target="#newcard">
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    A New Credit Card
                  </label>
                </div>
                <div class="col-xs-9">                      
                  <div class="media">
                    <a class="media-left" href="#">
                      <img src="https://lovewithfood.com/assets/credit_cards/cards-b3a7c7b8345355bf110ebedfd6401312.png" height="25" alt="" />
                    </a>
                    <div class="media-body" id="newcard">
                      We accept these credit cards.
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="list-group-item">
          <div class="list-group-item-heading">          
              <div class="row radio">
                <div class="col-xs-3">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    PayPal
                  </label>
                </div>
                <div class="col-xs-9">                      
                  <div class="media">
                    <a class="media-left" href="#">
                      <img src="https://www.paypalobjects.com/webstatic/mktg/logo-center/PP_Acceptance_Marks_for_LogoCenter_76x48.png" height="25" alt="" />
                    </a>
                    <div class="media-body">
                      When you click "Place Order", you will be taken to the PayPal website.
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="well">
        <button type="button" class="btn btn-primary btn-lg btn-block">Place Order</button>
      </div>
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

$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
</script>

</body>
</html>
