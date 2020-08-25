<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="ntd_db";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
Isset($_SESSION['username']);

if(isset($_POST['insert'])){
    $customerID=$_POST['customerID']; //received input value
    $customerEmail=$_POST['customerEmail'];
    $customerPhone=$_POST['customerPhone'];
    $customerMessage=$_POST['customerMessage'];
  
    
    echo $sql="insert into feedback values('$customerID','$customerEmail','$customerPhone','$customerMessage')";
    
    $result=$conn->query($sql);
    
    }
    
    if (isset($_GET['id'])){
        $id=$_GET['id']; 
        $sql="select * from feedback where id='$id'";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
        //display result
         $id=$row['id'];
         $email=$row['email'];
         $phone=$row['phone'];
         $message=$row['message'];
         
    
    }
        }
    }
    
    if(isset($_POST['update'])){
    $customerID=$_POST['customerID'];
    $customerEmail=$_POST['customerEmail'];  
    $customerPhone=$_POST['customerPhone'];
    $customerMessage=$_POST['customerMessage'];
  
    
    $sql="update feedback set email='$customerEmail',phone='$customerPhone',message='$customerMessage' where id='$customerID'";
    $result=$conn->query($sql);
    echo "<script> window.location.assign('ViewFeedback.php'); </script>";
    }
    
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <style>
 body{
  margin: 0;
  padding: 0;
  background: url(background1.png);
  background-size: cover;
}
.contact-form{
  width: 85%;
  max-width: 600px;
  background: #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  padding: 30px 40px;
  box-sizing: border-box;
  border-radius: 8px;
  text-align: center;
  box-shadow: 0 0 20px #000000b3;
  font-family: "Montserrat",sans-serif;
}
.contact-form h1{
  margin-top: 0;
  font-weight: 200;
}
.txtb{
  border:1px solid gray;
  margin: 8px 0;
  padding: 12px 18px;
  border-radius: 8px;
}
.txtb label{
  display: block;
  text-align: left;
  color: #333;
  text-transform: uppercase;
  font-size: 14px;
}
.txtb input,.txtb textarea{
  width: 100%;
  border: none;
  background: none;
  outline: none;
  font-size: 18px;
  margin-top: 6px;
}
.btn{
  display: inline-block;
  padding: 14px 0;
  text-transform: uppercase;
  cursor: pointer;
  margin-top: 8px;
  width: 100%;
}
</style>

<head>
<meta charset="utf-8">
     <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title></title>
    <link rel="stylesheet" href="">
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
       
        </li>
      </ul>
      
    </div>
  </nav>
<!------ Include the above in your HEAD tag ---------->



<body>

<div class="contact-form">
                    <h3 class="text-center text-info">
                            <?php
	                  if(isset($_GET['id'])){
	                    	echo"Update Form";

	                        }else{
	                     	echo"Feedback Form";
                      	}
	                   ?></h3>

                        <form clss="contact-form" class="" action="" method="post">
                         
                         
                            
                            <div class="txtb">
                                <label for="customerID" class="text-info">Full Name :</label>
                                <input type="text" name="customerID" id="customerID" class="form-control" placeholder="Enter Your Name" value ="<?php if(isset($_GET['id'])){echo  $id;}?>">
                            </div>

                            <div class="txtb">
                                <label for="customerEmail" class="text-info">Email:</label>
                                <input type="text" name="customerEmail" id="customerEmail" class="form-control" placeholder="Enter Your Email"value ="<?php if(isset($_GET['id'])){echo  $email;}?>">
                            </div>

                            <div class="txtb">
                                <label for="customerPhone" class="text-info">Phone:</label>
                                <input type="text" name="customerPhone" id="customerPhone" class="form-control" placeholder="Enter Your Phone Number" value ="<?php if(isset($_GET['id'])){echo  $phone;}?>">
                            </div>

                            <div class="txtb">
                                <label for="customerMessage" class="text-info">Message :</label>
                                <input type="text" name="customerMessage" id="customerMessage" class="form-control" value ="<?php if(isset($_GET['id'])){echo  $message;}?>">
                                
                            </div>

                            
                        
                           
	                      <?php
                            if(isset($_GET['id'])){
		                     echo'<button type="submit" class="btn" name="update">Update Customer </botton>';
	
	                        }else{
	                    	 echo'<button type="submit" href="a.php" class="btn" style="color:red;background:yellow;" name="insert" ><h5>SEND</h5></botton>';
	                         }
	                        ?>
	

	                     </div> <!-- form-group// -->      
                        </form>

                       

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>