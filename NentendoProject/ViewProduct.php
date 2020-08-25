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
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginAdmin.php");
    exit;
}


if(isset($_POST['delete'])){
    if(empty($_REQUEST['item'])){

    }
    else{
        foreach($_REQUEST['item'] as $deleteID){
           echo  $sql="delete from products where product_title='$deleteID'";
            $result=$conn->query($sql);
            echo "<script>alert('Product has been delete sucessfully')</script>";
        }
    }
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
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Game Time</title>
  
</head>


<nav class="navbar navbar-expand-lg navbar-danger  bg-dark">
    <nav class="navbar navbar-expand-lg navbar-danger  bg-dark ">
      <a class="navbar-brand" href="">
        <img src="logo.png" class="img-fluid rounded-circle" width="45" height="50" alt="">
        Game Time
      </a>
    </nav>
   
    
    <button class="navbar-toggler mb-0 h2 bg-primary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu bg-primary " ></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link mb-0 h5" href="ViewProduct.php">Home<span class="sr-only">(current)</span></a>
        </li>
        
      
      

        <li class="nav-item">
          <a class="nav-link  mb-0 h5" href="CheckUserDetail.php">Check User Detail
            
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  mb-0 h5" href="insert_product.php">Insert Product </a>
            
        </li>
        
        <li class="nav-item">
          <a class="nav-link  mb-0 h5" href="ViewFeedback.php">View Feedback </a>
            
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link  mb-0 h5 dropdown-toggle" href="loginAdmin.php" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Hi,<?php echo htmlspecialchars($_SESSION["username"]); ?></a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="reset-password.php">Reset Password</a> 
              <a class="dropdown-item" href="logout.php">LOGOUT</a> 
              </div>
        </li>
      
        

      </ul> 
     
    </div>
   
  </nav>



<div class="table-responsive" id="sailorTableArea">
<h1 style="text-align:center ">Product List</h1>
</br>
    <table id="sailorTable" class="table table-striped table-bordered" width="100%">

      <form action="ViewProduct.php?" method="POST">
        <thead>
            <tr class="bg-info">
               <th>&nbsp;</th>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Product Categories</th>
                <th>Categories</th>
                <th>Price</th>
                <th>Product Dertribution</th>
                
            </tr>
        </thead>
        <tbody>
        
        <?php
        $sql="select*from products";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
        //display result
        $product_title=$row['product_title'];
        $product_img1=$row['product_img1'];
        $p_cat_id=$row['p_cat_id'];
         $cat_id=$row['cat_id'];
         $product_price=$row['product_price'];
         $product_desc=$row['product_desc'];
      

        ?>
            <tr>
            <td><input type="checkbox" name="item[]" value="<?php echo $product_title;?>"></td>
                <td><a href="Insert_product.php? product_title=<?php echo $product_title; ?> ">
                <?php echo $product_title; ?></a></td>
                <td> <img src="product_images/<?php echo $product_img1; ?>" width="40%"></td>
                <td><?php echo $p_cat_id; ?></td>
                <td><?php echo  $cat_id; ?></td>
                <td><?php echo  $product_price; ?></td>
                <td><?php echo  $product_desc; ?></td>
               
               
            </tr>
            <?php

    }
    }
?>
<tr>
<td colspan="7" style="text-align:center "><button name ="delete" type= "submit" class="btn btn-danger">Delete</button>

</td>
</tr>
        </tbody>
        </form>
    </table>
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