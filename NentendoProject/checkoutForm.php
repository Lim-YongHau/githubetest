<?php
$servername = "localhost"; //localhost for local PC or use 
$username = "root";
$password = "";
$database="ntd_db";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
Isset($_SESSION['username']);
   


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Game Time</title>
  </head>
  <script>
  
    function cal(){
        var number0=parseInt(document.getElementById("number0").value);
        var number1=parseInt(document.getElementById("number1").value);
        var number2=parseInt(document.getElementById("number2").value);
       
       
        var number4=number0+number1+number2;
        document.getElementById("number4").value=number4;

        var number4=parseInt(document.getElementById("number4").value);

        var number3=number4*0.10;
        document.getElementById("number3").value=number3;

        var number4=parseInt(document.getElementById("number4").value);
        var number3=parseInt(document.getElementById("number3").value);

        var number4=number4-number3;

        document.getElementById("number4").value=number4;


    }
  </script>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark  bg-danger">
    <nav class="navbar navbar-expand-lg navbar-dark  bg-danger">
      <a class="navbar-brand" href="home.php">
        <img src="logo.png" class="img-fluid rounded-circle" width="45" height="50" alt="">
        Game Time
      </a>
    </nav>
   
    
    <button class="navbar-toggler mb-0 h2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link mb-0 h5" href="home.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link  mb-0 h5" href="My_Store.php">My Store<span class="badge badge-pill badge-success">3</span>
            <img src="sopping.png" class="img-fluid rounded-circle" width="25" height="25" alt="">
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link  mb-0 h5 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Help
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="FeedbackForm1.php">Feedback Form and Massage</a>
              <a class="dropdown-item" href="CustomerDetail.php">Sign up</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="videoPage.php">Video n News</a>
          </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link  mb-0 h5 dropdown-toggle" href="login.php" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Login and Register </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">Login</a> 
              <a class="dropdown-item" href="logout.php">LOGOUT</a> 
              </div>
        </li>

        <li class="nav-item">
          <a class="nav-link  mb-0 h5" href="" tabindex="-1" aria-disabled="true"> Welcome 
          <?php
          if(isset($_SESSION['username'])){
             echo $_SESSION['username'];
            }else{
              echo "User";
	            }
          ?>
          </a>
          
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="search">Search</button>
      </form>

      <li >
          <a href="ViewCartDetail.php">
            <img src="cart.png"  width="50" height="50" alt="">
           
          </a>
        </li>
    </div>
  </nav>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Checkout Form</h2>
  
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-danger badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">First item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <input name="number[]" id="number0" type="text" size="5">
         <!-- <span class="text-muted">$12</span>-->
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <input name="number[]" id="number1" type="text" size="5">
        
        </li>
        
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <input name="number[]" id="number2" type="text" size="5" onchange="cal()">
       
        </li>

        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>10 % Discount</small>
          </div>
          <input name="number[]" id="number3" type="text" size="5">
      
        </li>

        <li class="list-group-item d-flex justify-content-between">
          <span>Total (RM)</span>
          <input name="number[]" id="number4" type="text" size="5" >
        
        </li>
        <img src="mbc.gif">
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-danger">Redeem</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" placeholder="Username" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" placeholder="" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Choose...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" id="state" required>
              <option value="">Choose...</option>
              <option>California</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2019 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script></body>

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
          <div class="row">
            <div class="col-4 col-md">
              <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
              <small class="d-block mb-3 text-muted">My Clothes © 2019</small>
            </div>
            <div class="col-6 col-md">
              <h5>Contact us</h5>
              <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="https://web.facebook.com/?_rdc=1&_rdr">Facebook</a></li>
                <li><a class="text-muted" href="https://www.instagram.com/">Instagram</a></li>
                <li><a class="text-muted" href="https://twitter.com/login">Twitter</a></li>
                <li><a class="text-muted" href="https://facebook.com/yongsiang.briansee">contact no:016-7565998</a></li>
        
              </ul>
            </div>
            <div class="col-4 col-md" data-spm-anchor-id="a2o4k.13056827.3838113200.i1.6ec1445drnMQOs">
              <h4 class="lzd-footer-h4">Delivery Services</h4>
              
                
                <img class="lzd-icon-delivery pull-left " src="https://laz-img-cdn.alicdn.com/tfs/TB1T_EMSkPoK1RjSZKbXXX1IXXa-311-118.png" alt="lel" height="40">
                
              
                
              
                
              
                
                <img class="lzd-icon-delivery pull-left " src="https://laz-img-cdn.alicdn.com/tfs/TB1BMIzSgTqK1RjSZPhXXXfOFXa-294-46.png" alt="nanji" height="15">
                
          
                
                <img class="lzd-icon-delivery pull-left " src="https://laz-img-cdn.alicdn.com/tfs/TB1.lALSa6qK1RjSZFmXXX0PFXa-78-30.png" alt="gdex" height="15">
                
              </br>
                
                <img class="lzd-icon-delivery pull-left " src="https://laz-img-cdn.alicdn.com/tfs/TB1GQ3fk_Zmx1VjSZFGXXax2XXa-108-30.png" alt="laju" height="15">
                
              
                
                <img class="lzd-icon-delivery pull-left " src="https://laz-img-cdn.alicdn.com/tfs/TB1D4kVShYaK1RjSZFnXXa80pXa-310-85.png" alt="sky" height="20">
                
              
                
                <img class="lzd-icon-delivery pull-left " src="https://laz-img-cdn.alicdn.com/tfs/TB18UEASgDqK1RjSZSyXXaxEVXa-846-409.png" alt="lorry" height="20">
                
              </br>
                
                <img class="lzd-icon-delivery pull-left " src="https://laz-img-cdn.alicdn.com/tfs/TB1gN35SiLaK1RjSZFxXXamPFXa-578-230.png" alt="century" height="30">
                
              
                
                <img class="lzd-icon-delivery pull-left " src="https://laz-img-cdn.alicdn.com/tfs/TB1VQoJSkzoK1RjSZFlXXai4VXa-400-200.png" alt="abx" height="30">
                
              
                
                <img class="lzd-icon-delivery pull-left " src="https://laz-img-cdn.alicdn.com/tfs/TB1y3IzSgTqK1RjSZPhXXXfOFXa-447-123.png" alt="j&amp;t" height="30" data-spm-anchor-id="a2o4k.13056827.3838113200.i2.6ec1445drnMQOs">
                
            </div>  
            <div class="col-6 col-md">
              <h5>Payment Methods</h5>
              <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">CIMB </a></li>
                <li><a class="text-muted" href="#">Maybank</a></li>
                <li><a class="text-muted" href="#">Hong Leong</a></li>
                <li><a class="text-muted" href="#">RHB</a></li>
                <li><a class="text-muted" href="#">Visa</a></li>
              </ul>
            </div>
          </div>
        </footer>
</html>