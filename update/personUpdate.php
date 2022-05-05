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

if(isset($_POST['update'])){

  include '../navigation/adminNavigation.php'; 

    $newownerid = $_POST['newownerid'];
    $nic = $_POST['nic'];
    $person = $_POST['person'];
    
    

    $sql = "UPDATE `person` SET `NIC`='$nic',`pername`='$person' WHERE `Owner_ID`='$newownerid'";

    $result = $connection->query($sql);

    if($result){

      echo "<script>
            alert('UPDATE Successfully.');
           
            </script>";


    }
    else{

      echo "<script>
            alert('UPDATE Failure!!');
            
            </script>";
            
     
    }


    
}


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update.css">
    <title>PROPERTY OWNWER UPDATE</title>
</head>
<body>

<div class="update">
<h1>PROPERTY OWNWER Record Update</h1><br><br>
    
   
      
      <form action="" method="POST">
    
        
        <input type="text" name="newownerid" placeholder="New Owner ID " required><br><br>

        
        <input type="text" name="nic" placeholder="UPDATED NIC" required><br><br>

        <input type="text" name="person" placeholder="Person Name" required><br><br>
     



        <br><br>
        <button type="submit" name="update">UPDATE RECORD</button>
      </form>
</div>





</body>
</html>