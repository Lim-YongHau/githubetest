<?php

session_start();
if(!isset($_SESSION['username'])){
    header('lacation:login.php');
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
          if(isset($_SESSION['userName'])){
             echo $_SESSION['userName'];
            }else{
              echo "User";
              }
              
          ?>
          </a>
          
        </li>
      </ul> 
      
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>

      <li >
          <a href="ViewCartDetail.php">
            <img src="cart.png"  width="50" height="50" alt="">
           
          </a>
        </li>
    </div>
  </nav>





  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-12">
            <img src="GameTime.jpg" class="d-block w-100 h-100" alt="...">
          </div>
        </div>
      </div>
       <div class="carousel-item">
                    <img src="title (1).jpg" class="d-block w-100 " alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="title (2).jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="title (3).jpg" class="d-block  w-100 " alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="title (4).jpg" class="d-block w-100 " alt="...">
                  </div> 



    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
  <br>

  <div class="w3-row w3-light">
  <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="equipment7.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft w3-container w3-red">HOT</span>
          <div class="w3-display-middle w3-display-hover">
            <a href="MY_Store.php">
            <button  class="w3-button w3-black" >Buy now <i class="fa fa-shopping-cart"></i></button>
            </a>
          </div>
        </div>
        <p>Small Box<br><b>RM 24</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="Surrounding2.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft ">New</span>
          <div class="w3-display-middle w3-display-hover">
          <a href="MY_Store.php">
            <button  class="w3-button w3-black" >Buy now <i class="fa fa-shopping-cart"></i></button>
            </a>
          </div>
        </div>
        <p>Men Hoodie<br><b>RM 50</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="game (12).jpg" style="width:63%">
          <span class="w3-tag w3-display-topleft w3-container w3-red">HOT</span>
          <div class="w3-display-middle w3-display-hover">
          <a href="MY_Store.php">
            <button  class="w3-button w3-black" >Buy now <i class="fa fa-shopping-cart"></i></button>
            </a>
          </div>
        </div>
        <p>Arms (Game)<br><b>RM 239</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="doll3.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft w3-container w3-teal">Discount</span>
          <div class="w3-display-middle w3-display-hover">
          <a href="MY_Store.php">
            <button  class="w3-button w3-black" >Buy now <i class="fa fa-shopping-cart"></i></button>
            </a>
          </div>
        </div>
        <p>Jenny Turtle (Doll)<br><b>Rm 40</b></p>
      </div>
    </div>

  </div>


  <br>
  
  <div class="w3-padding-64 w3-blue">
  <div class="w3-row-padding">
    <div class="w3-col l8 m6">
      <h1 class="w3-jumbo"><b> Pokémon Sword & Pokémon Shield</b></h1>
      <h1 class="w3-xxxlarge w3-text-yellow"><b>Introduction</b></h1>
      <p> The official strategy guide from Pokémon for the Pokémon Sword and Pokémon Shield video games. Get the tips you need for each part of your journey with the step-by-step walkthrough and hints in Pokémon Sword & Pokémon Shield The Official Galar Region Strategy Guide. The Galar region is ready for you--are you ready for it? With the official strategy guide to Pokémon Sword and Pokémon Shield, prepare yourself to take on the Gym Challenge and battle your way to the Champion Cup for your chance to become the next Champion! Here's what you'll find inside:
Complete walkthrough of the new Pokémon adventure! Lists of moves, items, and more--including how to get them! Info on all of the new features, including Dynamaxing and Max Raid Battles! Information on the Gigantamax Pokémon you may encounter during your adventure! Guides to the Wild Area and all you can do there, on your own and with friends! Pullout map of the region!  <span class="w3-xlarge  w3-text-orange">Price:RM 100</span></p>
      
    </div>
    <div class="w3-col l4 m6">
    <iframe width="450" height="470" src="https://www.youtube.com/embed/-Nl_t9yeV0k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <!-- <img src="game1.jpg" class="w3-image w3-right w3-hide-small" width="600" height="500"> -->
      
    </div>
  </div>
</div>


<!-- Clarity Section -->
<div class="w3-padding-64 w3-red">
  <div class="w3-row-padding">
    <div class="w3-col l4 m6">
    <iframe width="450" height="470" src="https://www.youtube.com/embed/Dk56OpKuFts" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="w3-col l8 m6">
      <h1 class="w3-jumbo"><b>Fortnite</b></h1>
      <h1 class="w3-xxxlarge w3-text-yellow"><b>Introduction</b></h1>
      <p><span class="w3-xlarge">Price:RM 60</span> The Fortnite: Deep Freeze Bundle will include the Fortnite Battle Royale game, and premium content, including the Frostbite Outfit, Cold Front Glider, Chill-Axe Pickaxe, Freezing Point Back Bling, and 1, 000 V-Bucks, which can be used to purchase in-game items, such as outfits and the Premium Battle Pass. In Fortnite Battle Royale, players squad up and compete to be the last one standing in 100-player PvP, where they'll build cover, battle opponents, and survive the longest to earn their victory.</p>
    </div>
  </div>
</div>
     
    </div>

   

       
       

  




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
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
<div class="icon-bar">
    <a href="https://web.facebook.com/?_rdc=1&_rdr" class="facebook"><i class="fa fa-facebook"style="margin:0px"></i></a> 
    <a href="https://twitter.com/login" class="twitter"><i class="fa fa-twitter"style="margin:0px"></i></a> 
    <a href="https://www.google.com/?hl=ms" class="google"><i class="fa fa-google"style="margin:0px"></i></a> 
   
  </div>

</html>