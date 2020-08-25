<?php
$servername = "localhost"; //localhost for local PC or use 
$username = "root";
$password = "";
$database="myclothes";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['delete'])){
    if(empty($_REQUEST['item'])){

    }
    else{
        foreach($_REQUEST['item'] as $deleteID){
            $sql="delete from product where id=' $deleteID'";
            $result=$conn->query($sql);
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>My Clothes</title>
    <style>
      .icon-bar {
  position: fixed;
  top: 35%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 10px;
  transition: all 0.3s ease;
  color:yellow;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}


     body  {
     background-color:lightyellow;
          }
         

    </style>


  </head>
  <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="a.php">
                          <img src="ft.jpg"class="img-fluid rounded-circle" width="40" height="45" alt="">
                        </a>
                      </nav>
                <a class="navbar-brand" href="#">My Clothes</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                  <a class="nav-link" href="a.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">                     
                                    <a class="nav-link" href="SelectionClothes.php">Link
                                    <img src="sopping.png"class="img-fluid rounded-circle" width="25" height="25" alt="">
                                  </a>
                                  </li>
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      More
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="e.html">Checkout form</a>
                                      <a class="dropdown-item" href="CustomerDetail.php">Sign up</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                  </div>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="b.php" tabindex="-1" aria-disabled="true">Log in</a>
                                </li>
                               
                              </ul>
                              <a class="btn btn-success" href="ClothDetail.php" role="button">Continue</a>
                                
                            </div>
              </nav>

<div class="table-responsive" id="sailorTableArea">
<h1 style="text-align:center ">View Cart Detail</h1>
</br>
    <table id="sailorTable" class="table table-striped table-bordered" width="100%">

      <form action="ViewClothDetail.php?" method="POST">
        <thead>
            <tr>
               <th>&nbsp;</th>
                <th>Cloth ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Size</th>
                <th>Color</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
        $sql="select*from product";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
        //display result
        $id=$row['id'];
        $name=$row['name'];
        $type=$row['type'];
         $size=$row['size'];
         $color=$row['color'];
         $price=$row['price'];

        ?>

    <?php
       
        $totalPrice+=($price+$price)/2;
        
       

        ?>
            <tr>
            <td><input type="checkbox" name="item[]" value="<?php echo $id;?>"></td>
                <td><a href="ClothDetail.php? id=<?php echo $id; ?> ">
                <?php echo $id; ?></a></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $type; ?></td>
                <td><?php echo  $size; ?></td>
                <td><?php echo  $color; ?></td>
                <td><?php echo  $price; ?></td>
               
            </tr>
            <?php

    }
    }
?>
<tr>
<td colspan="6" style="text-align:right "><h4>Total Price</h4></td>
<td colspan="6"><h4>RM<?php echo  $totalPrice; ?></h4></td>
</tr>
<tr>
<td colspan="7" style="text-align:center "><button name ="delete" type= "submit" class="btn btn-warning ">Delete</button>

</td>
</tr>
        </tbody>
        </form>
    </table>
    </div>
    </html> 