<!DOCTYPE html>

<?php

$serverName = 'localhost';
$username = 'root';
$password = '';
$dbname = 'assignment';
$connection = mysqli_connect($serverName, $username, $password, $dbname);


if(isset($_POST['admin'])){
  
  include '../navigation/adminNavigation.php'; 
  

}

if(isset($_POST['delete'])){

  include '../navigation/adminNavigation.php';

    $ownerid = $_POST['ownerid'];
   
   

    $sqlDelete = "DELETE FROM `propert_owner` WHERE  Owner_ID='$ownerid'";

    $result = $connection->query($sqlDelete);


    if($result) {

      echo "<script>
            alert('Delete Successfully.');
            </script>";

      

    }
    else{

      echo "<script>
            alert('Delete Failure!!Incorrect Property ID');
            </script>";
            
    }

    
}


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="delete.css">
    <title>PROPERTY_OWNER_DELETE Deleted</title>
</head>
<body>

<div class="delete">
<h1>DELETE PROPERTY OWNER RECODE</h1>
 
    
      
      <form action="" method="POST">
    
        
        <input type="text" name="ownerid" placeholder="OWNER ID">

        

        <br><br>
        <button type="submit" name="delete">Delete Recode</button>
      </form>
</div>



</body>
</html>