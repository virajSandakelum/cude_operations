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

    $branchid = $_POST['branchid'];
   
   

    $sqlDelete = "DELETE FROM branch WHERE BranchID = '$branchid'";

    $result = $connection->query($sqlDelete);


    if($result) {

      echo "<script>
            alert('Delete Successfully.');
           
            </script>";

     

    }
    else{

      echo "<script>
            alert('Delete Failure!!Incorrect BRANCH NO');
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
    <title>BRANCH DELETE</title>
</head>
<body>

<div class="delete">
<h1>DELETE BRANCH RECODE</h1>
 
    
      
      <form action="" method="POST">
    
        
        <input type="text" name="branchid" placeholder="Branch ID">

        

        <br><br>
        <button type="submit" name="delete">Delete Recode</button>
      </form>
</div>



</body>
</html>