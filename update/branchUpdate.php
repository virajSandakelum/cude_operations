.<!DOCTYPE html>

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


    $beforebranchid = $_POST['beforebranchid'];
    $branchid = $_POST['branchid'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contactno = $_POST['contactno'];
    

    $sql = "UPDATE `branch` SET `BranchID`='$branchid',`Address`='$address',`Email`='$email',`contact_No`='$contactno' WHERE `BranchID`='$beforebranchid'  ";

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
    <title>BRANCH UPDATE</title>
</head>
<body>

<div class="update">
<h1>BRANCH Record Update</h1><br><br>
    
   
      
      <form action="" method="POST">
    
        
        <input type="text" name="beforebranchid" placeholder="BRANCH ID " required><br><br>

        
        <input type="text" name="branchid" placeholder="UPDATED BRANCH ID" required><br><br>


        <input type="text" name="address" placeholder="UPDATED ADDRESS" required><br><br>

        <input type="email" name="email" placeholder="UPDATED EMAIL" required><br><br>

        <input type="number" name="contactno" placeholder="CONTACT NO" required><br><br>
        
       


        <br><br>
        <button type="submit" name="update">UPDATE RECORD</button>
      </form>
</div>





</body>
</html>