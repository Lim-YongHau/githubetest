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
   

include("functions/functions.php");


?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
          <a class="nav-link  mb-0 h5" href="userProfile.php" tabindex="-1" aria-disabled="true"> Welcome 
          <?php
          if(isset($_SESSION['userName'])){
             echo $_SESSION['userName'];
            }else{
              echo "User";
	            }
          ?>
          </a>
          
        </li>
      </ul>
      <form action="MY_Store.php" method="POST" class="form-inline my-2 my-lg-0">
        <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>

      <li >
          <a href="ViewCartDetail.php">
            <img src="cart.png"  width="50" height="50" alt="">
           
          </a>
        </li>
    </div>
  </nav>

   
  <div class ="row">
                  
                <div class= "col-md-2 col-sm-6">
                    <br>
                   
                <ul class="list-group">
                    <li class="list-group-item active">Products Categories</li>
                    <?php
                    $sql="select * from product_categories";
                    $result=$conn->query($sql);
                    if($result->num_rows >0){
                      while($row=$result->fetch_assoc()){
                        $p_cat_title=$row['p_cat_title'];
                        $p_cat_id=$row['p_cat_id'];
                        echo'<li class="list-group-item"><a href="MY_Store.php?product_categories='.$p_cat_id.'">'.$p_cat_title.'</a></li>';
                      }
                    }
                    ?>
                    <br>
                    <br>
                   
                  </ul>

                  <ul class="list-group">
                    <li class="list-group-item active">Products</li>
                    <?php
                    $sql="select * from categories";
                    $result=$conn->query($sql);
                    if($result->num_rows >0){
                      while($row=$result->fetch_assoc()){
                        $cat_title=$row['cat_title'];
                        $cat_id=$row['cat_id'];
                        echo'<li class="list-group-item"><a href="MY_Store.php?categories='.$cat_id.'">'.$cat_title.'</a></li>';
                      }
                    }
                    ?>
                  </ul>
                 
                </div>

                

              

      

      <div class= "col-md-9 ">
      <div class="card border-0">
                      <h5 class="card-title">Products</h5>
                      <div class="row" >

                      <?php
                        //step 2 for search
                        if(isset($_POST['search'])){
                          $keyword=$_POST['search'];
                        }

                        //step 3 for search
                        $search="";
                        if(isset($_POST['search'])){
                          $search=" where product_title like '%".$keyword."%' or product_desc like '%".$keyword."%'";

                        }

                        if(isset($_POST['categories'])){
                          $categoryID=$_GET['categories'];
                          $search=" where categories='".$categoryID."'";
                        }

                        if(isset($_POST['product_categories'])){
                          $product_categories=$_GET['product_categories'];
                          $search=" where categories='".$product_categories."'";
                        }

                        $sql="select * from products".$search;
                        $result=$conn->query($sql);
                        if($result->num_rows>0){
                            while($row=$result->fetch_assoc()){
                       
                         $product_title=$row['product_title'];
                         $product_price=$row['product_price'];
                         $product_img1=$row['product_img1'];
                         $product_id=$row['product_id']; //for view detail
                        
                        ?>
                              <div class="col-sm-4">
                                      <div class="card h-100" >
                                       <div class="card-body">
                                         <h5 class="card-title"><?php echo $product_title?></h5>
                                          <img src="adminNTD/product_images/<?php echo $product_img1 ?>" alt="<?php echo $product_title?>">
                                           <div class="card-heading">RM <?php echo $product_price ?> 
                                           <button onclick="document.location='productDetail.php?product_id=<?php echo $product_id ?>'" class="btn btn-danger btn-xs">Add To Cart</button>
<!-- 
                                           <button style="float:right;" name="cart" class="btn btn-danger btn-xs" >
                                           <a href="productDetail.php?product_id=<?php echo $product_id ?>"></a>
                                           AddToCart</button> -->
                                         
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <?php
                            }
                          }
                          ?>
                         </div>
                                    </div>
                        
                          
                      <div class="card card-footer">&copy; 2019</div>
                    
                      <nav aria-label="...">
                        <ul class="pagination pagination-sm" style="margin-top:10 px">
                         
                        
                          <li class="page-item active" aria-current="page">
                            <span class="page-link">
                              1
                              <span class="sr-only">(current)</span>
                            </span>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>
                        </ul>
                      </nav>
   
   
    
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    
    
</body>

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