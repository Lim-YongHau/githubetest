<?php
$servername = "localhost"; //localhost for local PC or use 
$username = "root";
$password = "";
$database="loginntd";
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
           echo  $sql="delete from feedback where id='$deleteID'";
            $result=$conn->query($sql);
        }
    }
}
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
 
</style>
<div class="table-responsive" id="sailorTableArea">
<h1 style="text-align:center ">View Customer Detail</h1>
</br>
    <table id="sailorTable" class="table table-striped table-bordered" width="100%">

      <form action="ViewFeedback.php?" method="POST">
        <thead>
            <tr>
               <th>&nbsp;</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Massage</th>
                
            </tr>
        </thead>
        <tbody>
        
        <?php
        $sql="select*from feedback";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
        //display result
        $id=$row['id'];
        $email=$row['email'];
        $phone=$row['phone'];
         $message=$row['message'];
        
      

        ?>
            <tr>
            <td><input type="checkbox" name="item[]" value="<?php echo $id;?>"></td>
                <td><a href="FeedbackForm1.php? id=<?php echo $id; ?> ">
                <?php echo $id; ?></a></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $phone; ?></td>
                <td><?php echo  $message; ?></td>
               
               
            </tr>
            <?php

    }
    }
?>
<tr>
<td colspan="6" style="text-align:center "><button name ="delete" type= "submit" class="btn btn-denger btn-xs">Delete</button>

</td>
</tr>
        </tbody>
        </form>
    </table>
    </div>