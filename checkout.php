<?php include'header.php'?>

<?php include'../../includes/connect.php'?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php include'navigation.php'?>

<div class="container-fluid">
  <div class="page-header">
    <h1>Checkout </h1>
  </div>

<!-- Start Customer Info form -->
<form method="post" action="thanks.php" type="submit" name="submit" role="form" class="" id="customerinfo">
        <div class="list-group-item">
          <div class="list-group-item-heading">          
              <div class="row">
               
                <div class="col-xs-9">                      
                    <div class="form-group">
                      <label for="inputname">First Name</label>
                      <input type="text"  name="customerfirst" class="form-control form-control-large" id="inputname" placeholder="First">
		    </div>
		    <div class="form-group">
                      <label for="inputname">Last Name</label>
                      <input type="text" name="customerlast" class="form-control form-control-large" id="inputname" placeholder="Last">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress1">Street address 1</label>
                      <input type="text" name="streetone" class="form-control form-control-large" id="inputAddress1" placeholder="Enter address">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Street address 2</label>
                      <input type="text" name="streettwo" class="form-control form-control-large" id="inputAddress2" placeholder="Enter address">
                    </div>
                    <div class="row">
                      <div class="col-xs-3">
                        <div class="form-group">
                          <label for="inputZip">ZIP Code</label>
                          <input type="text" name="zip" class="form-control form-control-small" id="inputZip" placeholder="Enter zip">
                        </div>
                      </div>
                      <div class="col-xs-9">
                        <div class="form-group">
                          <label for="inputCity">City</label>
                          <input type="text" name="city" class="form-control" id="inputCity" placeholder="Enter city">
                        </div>
                      </div>
                    </div>


                    <div class="form-group">
                      <label for="inputState" class="control-label">State</label>
                      <select class="form-control form-control-large">
                        <option>Select state</option>
                      </select>
                    </div>
                </div>
              </div>
          </div>
        </div>
      </div>
</form>
<!-- End Customer Info Form -->

<!-- Gift Message -->
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
        <button onclick="redirect()" type="submit" form="customerinfo"  class="btn btn-primary btn-lg btn-block">Place Order</button>
      </div>
    </div>
  </div>
</div>

<?php include'footer.php'?>
