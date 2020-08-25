<?php
$servername = "localhost"; //localhost for local PC or use 
$username = "root";
$password = "";
$database="ntd_db";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);



?>

<!doctype html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
          <a class="nav-link  mb-0 h5" href="MY_Store.php">My Store
            
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
          <a class="nav-link  mb-0 h5" href="userProfile.php" tabindex="-1" aria-disabled="true"> Welcome 
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
      
      

      
    </div>
  </nav>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<!------ Include the above in your HEAD tag ---------->

<div class="container" >
	<div class="row">
		<div class="col-xs-8" >
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
							</div>
							<div class="col-xs-6">
								
									
									<a href="MY_Store.php" class="btn btn-primary btn-sm btn-block"  >
									<span class="glyphicon glyphicon-share-alt" ></span>
									Continue shopping
                             </a>
									
								
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="game (1).jpg">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Sport Party</strong></h4><h4><small>The warranty system will maintain for 2 week after checkout</small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong>109.00 <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="text" class="form-control input-sm" value="1">
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="equipment3.jpg">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Netando Switch 1</strong></h4><h4><small>The warranty system will maintain for 2 week after checkout</small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong>2368.00 <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="text" class="form-control input-sm" value="1">
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="text-center">
							<div class="col-xs-9">
								<h6 class="text-right">Added items?</h6>
							</div>
							<div class="col-xs-3">
								<button type="button" class="btn btn-default btn-sm btn-block">
									Update cart
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Total <strong>RM2477.00</strong></h4>
						</div>
						<div class="col-xs-3">
							
                            <a href="checkoutForm.php" class="btn btn-success btn-block">
          
                            Checkout
                             </a>
							
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
        </html>