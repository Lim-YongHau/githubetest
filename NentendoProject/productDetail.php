<?php
$servername = "localhost"; //localhost for local PC or use 
$username = "root";
$password = "";
$database="ntd_db";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);
    
//get product id from product.php
if(isset($_GET['product_id'])){
  $product_id=$_GET['product_id'];
  $sql="select * from products where product_id='".$product_id."'";
  $result=$conn->query($sql);
  if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
        
   $product_title=$row['product_title'];
   $product_price=$row['product_price'];
   $product_img1=$row['product_img1'];
   $product_desc=$row['product_desc'];
      }
    }
  
  
  
  $generateOrderId = uniqid();
if(isset($_POST['add'])){
    $product_title=$_POST['title'];
    $product_img1=$_POST['image'];
    $product_price=$_POST['price'];
    $quantity=$_POST['quantity'];
      }
  
        //  $sql="insert into orderlist(orderid,userid,username,goodsId,goodsName,goodsImage,goodsPrice,goodsColor,goodsSize,quantity)values
        //   ('$generateOrderId','$userId','$userName','$id','$name','$image','$price','$color','$goodsSize','$userquantity')";//get $createname save follow database colmun
        
            //insert不能是因为sql没修过  要改成和orderlist一样
         $sql="insert into orderlist(order_id,order_user,order_title,order_img1,order_price,order_qty)values
         ('$generateOrderId','','$product_title','$product_img1','$product_price','') ";//get $createname save follow database colmun
      
          $result=$conn->query($sql);
   
    echo'<script type=text/javascript>';//add myself
    echo 'window.alert("Add Product Scessfully")';
    echo '</script>';
}
  



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
          <a class="nav-link  mb-0 h5" href="  home.php">My Store<span class="badge badge-pill badge-success">3</span>
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
        <li class="nav-item">
          <a class="nav-link  mb-0 h5" href="login.php" tabindex="-1" aria-disabled="true">Login and register</a>
        </li>
      </ul>
      <!-- <form class="form-inline my-2 my-lg-0"  method="POST">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>
  </nav>

  <form action="productDetail.php?product_id=<?php echo $_GET['product_id'];?>" method="POST">
                  <div class="col-1"></div>
                  <div class="col-8">

                  <div class ="card border-0" <?php echo  $product_id ?>>
                      <h5 class="card-title">Product</h5>

                     
                     <div class ="row">

                        <div class="col-sm-6">
                              <img src="adminNTD/product_images/<?php echo $product_img1?>" alt="game" name="image" class="img-fluid" width="70%">
                        </div>

                                  <div class="col-sm-6" style="margin-top: 20px">
                                        <div class="card h-100  border-0">
                                          <div class="card-body">
                                            <h1 class="card-title"><?php echo $product_title?></h1>
                                                    <p><h5 name="title"><?php echo $product_title?></h5>
                                                    <p><?php echo $product_desc?></p>
                                                    
                                              

                                     <div style="height: 100px"> Quantity <input type="number" name="quantity" value="1" min="1" max="100">Available stock : 50</div>
                                      <div class="card-heading" name="price" >RM <?php echo $product_price;?> 
                                   
                                         <button style="float:right;" name="add" type="submit" class="btn btn-danger btn-xs">AddToCart</button>
                                       </div>
                                    </div>
                               </div>
                                      </div>
                            

                      </div>
                    
                   
                    </div>
                    </div>
                    <div class="card card-footer">&copy;2019</div>
                    <div class="col-md-1"></div>
               
 </div>
      </div>
     </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
 
 

 
 
  </body>
</html>