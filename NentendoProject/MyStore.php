<?php
$servername = "localhost";//localhost for local PC or use IP address
$username = "root";//database username
$password = "";//database password
$database ="ntd_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">

    <title>Game Time</title>
    <style>
      body{
       background-color:lightskyblue;
       margin: 0;
          }
       

   </style>
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
          <a class="nav-link  mb-0 h5" href="  SelectionClothes.php">My Store<span class="badge badge-pill badge-success">3</span>
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
          <a class="nav-link  mb-0 h5" href="b.php" tabindex="-1" aria-disabled="true">Log in</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="search">Search</button>
      </form>
    </div>
  </nav>
              
              
            <div class="container-fluid">  
      <div class="row" style="margin-top: 10px">
        <div class="col-md-2">
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

        
                          <div class="col-md-1"></div>
                             <div class="col-md-8">
                             <div class="card border-0"></div>
                            <h5 class="card-title">Products</h5>
                          <div class="row"> 
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

                        $sql="select * from products".$search;
                        $result=$conn->query($sql);
                        if($result->num_rows>0){
                            while($row=$result->fetch_assoc()){
                       
                         $product_title=$row['product_title'];
                         $product_price=$row['product_price'];
                         $product_img1=$row['product_img1'];
                         $product_id=$row['product_id']; //for view detail
                        
                        ?>

                           

                                     <div class="col-sm-4" style="margin-top:20px">
                                      <div class="card h-100">
                                      <div class="card-body">
                                          
                                  
                                    <h5 class="card-title"><?php echo $product_title;?></h5>
                                    <a href="productDetail.php?id=<?php echo $product_id;?>"><img src="adminNTD/product_images/<?php echo $product_img1;?>"  alt="<?php echo $product_title;?>" class="img-fluid"></a>
                                    <div class="card-heading">RM <?php echo $product_price;?><br>RM<?php echo $product_price;?><br> <button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                                <?php
                            }
                        }
                        ?>

                   <?php
                    $sql="select * sum (product_price) from products";
                    $result=$conn->query($sql);
                    if($result->num_rows >0){
                      while($row=$result->fetch_assoc()){
                        $cat_title=$row['cat_title'];
                        $cat_id=$row['cat_id'];
                        echo'<li class="list-group-item"><a href="MY_Store.php?categories='.$cat_id.'">'.$cat_title.'</a></li>';
                      }
                    }
                    ?>
              
                      
                <div class="card card-footer">&copy; 2019</div>
                <nav aria-label="...">
                  <ul class="pagination pagination-sm" style="margin-top: 10px">
                    <li class="page-item active" aria-current="page">
                      <span class="page-link">
                        1
                        <span class="sr-only">(current)</span>
                      </span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                  </ul>
                </nav>
                    
            </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
    
    <div class="card text-white bg-dark mb-3" style="margin-top:15px" style="margin-bottom:0" style="max-height: 100%" style="max-width: 100%;">
    <div class="card-header"> 
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button"
            data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" 
            aria-expanded="false"
            aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  
    </div>
    <div class="card-body">
      <h5 class="card-title"> SUCProperty International (Malaysia) Sdn. Bhd.</h5>
      <p class="card-text">
          <div class="footer"><strong>Who we are</strong><br>-We provids the online house property sales and rent services<br>
            -In our home,there's always room for great questions and smart ideas that empower people to make property decisions more confidently
       </div>
      </p>
    </div>
    <div class="form-row">
  <a class="navbar-brand" href="#">Acceptable Use Policy</a>
  <a class="navbar-brand" href="#">Terms of Service</a>
  <a class="navbar-brand" href="#">Privacy Policy</a>
  <a class="navbar-brand" href="#">Terms of Purchase</a>
  <button class="navbar-toggler" type="button"
  data-toggle="collapse" data-target="#navbarSupportedContent"
  aria-controls="navbarSupportedContent" 
  aria-expanded="false"
  aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</div>

        <div class="copy-text" style="margin-top:0">
            Copyright © 2019 SUCProperty International (Malaysia) Sdn. Bhd. All rights reserved.
      </div>
</div>
</div>
</div>

</div>
</div>


  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
