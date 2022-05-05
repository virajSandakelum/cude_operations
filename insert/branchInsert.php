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

    $BranchID = $_POST['branchid'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contactno = $_POST['contactno'];

    include '../navigation/adminNavigation.php'; 
  
   

    $sql = "INSERT INTO `branch`(`BranchID`, `Address`, `Email`, `contact_No`) VALUES ('$BranchID','$address','$email','$contactno')";

    $result = $connection->query($sql);

    if($result){

      echo "<script>
            alert('branch Insert Successfully.');
            
            </script>";

      

    }
    else{

      echo "<script>
            alert('branch Insert Failure!!');
            </script>";
            
      
    }

    
}


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="insert.css">
    <title>BRANCH INSERT</title>
</head>
<body>




<div class="insert">
<h1>INSERT BRANCH DETAILS</h1>
    

      
      <form action="" method="POST">
    
        
        <input type="text" name="branchid" placeholder="Branch ID" required><br><br>

       
        <input type="text" name="address" placeholder="Address" required><br><br>

        
        <input type="email" name="email" placeholder="EMAIL" required><br><br>

    
        <input type="number" name="contactno" placeholder="Contact No" required><br><br>
        

        
        <button type="submit" name="insert">INSERT</button>


      </form>
</div>






</body>
</html>