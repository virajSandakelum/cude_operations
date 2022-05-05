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

    $beforeownerid = $_POST['beforeownerid'];
    $owenerid = $_POST['owenerid'];
    $contactno = $_POST['contactno'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    

    $sql = "UPDATE `propert_owner` SET `Owner_ID`='$owenerid',`ContactNo`='$contactno',`Email`='$email',`address`='$address' WHERE `Owner_ID`='$beforeownerid'";

    $result = $connection->query($sql);

    if($result){

      echo "<script>
            alert('UPDATE Successfully.');
            window.location.href='./personUpdate.php';
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
    
        
        <input type="text" name="beforeownerid" placeholder="Owner ID " required><br><br>

        
        <input type="text" name="owenerid" placeholder="UPDATED Owner ID" required><br><br>

        <input type="text" name="contactno" placeholder="CONTACT NO" required><br><br>
        
        <input type="email" name="email" placeholder="UPDATED EMAIL" required><br><br>

        <input type="text" name="address" placeholder="UPDATED ADDRESS" required><br><br>

        <br><br>
        <button type="submit" name="update">UPDATE RECORD</button>
      </form>
</div>





</body>
</html>