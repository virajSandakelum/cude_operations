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



if(isset($_POST['insert'])){

  include '../navigation/adminNavigation.php'; 

    $Owner_ID = $_POST['ownerid'];
    $ContactNo = $_POST['ContactNo'];
    $EMAIL = $_POST['email'];
    $address  = $_POST['address'];

    $sql = "INSERT INTO `propert_owner`(`Owner_ID`, `ContactNo`, `Email`, `address`) VALUES ('$Owner_ID','$ContactNo','$EMAIL','$address')";

    $result1 = $connection->query($sql);
    
   

    if($result1){

      echo "<script>
            alert('PROPERTY insert Successfully.');
            window.location.href='./companyInsert.php';
            </script>";

     

    }
    else{

      echo "<script>
            alert('PROPERTY insert Failure!!');
           
            </script>";
            
      
    }

    
}


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>INSERT PROPERTY OWNER</title>
</head>
<body>


<div class="insert">
<h1>INSERT PROPERTY OWNER</h1>
    
  
      
      <form action="" method="POST">
    
        
        <input type="text" name="ownerid" placeholder="Owner ID" required><br><br>

       
        <input type="text" name="ContactNo" placeholder="Contact No" required><br><br>

      
        <input type="text" name="email" placeholder="Email" required><br><br>

        <input type="text" name="address" placeholder="ADDRESS" required><br><br>

    
        
        <button type="submit" name="insert">INSERT</button>


      </form>
</div>






</body>
</html>