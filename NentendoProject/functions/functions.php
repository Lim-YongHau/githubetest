<?php 

$db = mysqli_connect("localhost","root","","ntd_db");

function getPro(){
    
    global $db;
    
    $get_products = "select * from products order by 1 DESC LIMIT 0,8";
    
    $run_products = mysqli_query($db,$get_products);
    
    while($row_products=mysqli_fetch_array($run_products)){
        
        $pro_id = $row_products['product_id'];
        
        $pro_title = $row_products['product_title'];
        
        $pro_price = $row_products['product_price'];
        
        $pro_img1 = $row_products['product_img1'];
        
        echo "
        
        <div class='col-md-4 col-sm-6 single'>
        
            <div class='product'>
            
                <a href='details.php?pro_id=$pro_id'>
                
                    <img class='img-responsive' src='adminNTD/product_images/$pro_img1'>
                
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='details.php?pro_id=$pro_id'>

                            $pro_title

                        </a>
                    
                    </h3>
                    
                    <p class='price'>
                    
                        $ $pro_price
                    
                    </p>
                    
                    <p class='button'>
                    
                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                            View Details

                        </a>
                    
                        <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

                            <i class='fa fa-shopping-cart'></i> Add to Cart

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
        
        ";
        
    }
    
}

function getPCats(){
global $db;
$get_p_cats = "select * from product_categories";
$run_p_cats = mysqli_query($db,$get_p_cats);
while($row_p_cats=mysqli_fetch_array($run_p_cats)){
$p_cat_id = $row_p_cats['p_cat_id'];
$p_cat_title = $row_p_cats['p_cat_title'];
echo"
<li>
a href='MY_Store.php?p_cat=$p_cat_id'>$p_cat_title</a>

</li>
";
}

}

function getCats(){
    global $db;
    $get_cats = "select * from categories";
    $run_cats = mysqli_query($db,$get_cats);
    while($row_cats=mysqli_fetch_array($run_cats)){
    $cat_id = $row_cats['cat_id'];
    $cat_title = $row_cats['cat_title'];
    echo"
    <li>
    a href='MY_Store.php?cat=$cat_id'>$cat_title</a>
    
    </li>
    ";
    }
    
    }

    function getpcatpro(){
        global $db;
       
        if(isset(Get['p_cat'])){
        $p_cat_id = $_GET['p_cat'];
        $get_p_cats ="select * from product_categories where p_cat_id='$p_cat_id'";
        $run_p_cats = mysqli_query($db,$get_p_cats);
        $row_p_cats = mysqli_fetch_array($run_p_cats);
        $p_cat_title = $row_p_cats['p_cat_title'];
        $p_cat_desc = $row_p_cats['p_cat_desc'];
        $get_products ="select * from product where p_cat_id='$p_cat_id'";
        $run_products = mysqli_query($db,$get_products);
        $count = mysqli_num_rows($run_products);
        if($count==0){
            echo"
            <div class='box'>
            <h1>No  Product Found in This Categories</h1>
            </div>
            ";

        }else{
            echo"
            <h1> $p_cat_title </h1>
            <p> $p_cat_desc </p>
            ";

        }

        while($row_products=mysqli_fetch_array($row_products)){

            $pro_id = $row_products['product_id'];
        
            $pro_title = $row_products['product_title'];
            
            $pro_price = $row_products['product_price'];
            
            $pro_img1 = $row_products['product_img1'];

            
        }


        }
        
        }



?>