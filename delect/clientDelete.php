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

    $CLIENT_NO = $_POST['clientno'];
   
   

    $sqlDelete = "DELETE FROM client WHERE ClientNo = '$CLIENT_NO'";

    $resultClient = $connection->query($sqlDelete);


    if($resultClient ) {

      echo "<script>
            alert('Delete Successfully.');
            
            </script>";

     

    }
    else{

      echo "<script>
            alert('Delete Failure!!Incorrect ClientNo');
            
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
    <title>CLIENT Deleted</title>
</head>
<body>

<div class="delete">
<h1>DELETE RECODE</h1>
 
    
      
      <form action="" method="POST">
    
        
        <input type="text" name="clientno" placeholder="CLIENT NO">

        

        <br><br>
        <button type="submit" name="delete">Delete Recode</button>
      </form>
</div>



</body>
</html>