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



if(isset($_POST['register'])){

  include '../navigation/adminNavigation.php'; 

    $beforeCLIENT_NO = $_POST['beforeclientno'];
    $CLIENT_NO = $_POST['clientno'];
    $FULL_NAME = $_POST['fname'];
    $NIC = $_POST['nic'];
    $EMAIL = $_POST['email'];

    $upbrandid = $_POST['upbrandid'];
    $upregistration = $_POST['upregistration'];
    $upstaff_name = $_POST['upstaff_name'];


    $sql = "UPDATE client SET ClientNo = '$CLIENT_NO',Full_Name = '$FULL_NAME',Email = '$EMAIL',NIC = '$NIC',`BranchID`='$upbrandid',`registration_date`='$upregistration',`staff_name`='$upstaff_name' WHERE ClientNo = '$beforeCLIENT_NO'";

    $resultClient = $connection->query($sql);

    if($resultClient == TRUE){

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
    <title>CLIENT UPDATE</title>
</head>
<body>

<div class="update">
<h1>CLIENT Record Update</h1>
    
   
      
      <form action="" method="POST">
    
        
        <input type="text" name="beforeclientno" placeholder="CLIENT NO" required><br><br>

        
        <input type="text" name="clientno" placeholder="UPDATED CLIENT NO" required><br><br>

        
        <input type="text" name="fname" placeholder="UPDATED FULL NAME" required><br><br>

        
        <input type="text" name="nic" placeholder="UPDATED NIC" required><br><br>

     
        <input type="text" name="email" placeholder="UPDATED EMAIL" required><br><br>

        <?php

          $sql = "SELECT BranchID FROM branch;";
          $result = $connection->query($sql);

          if($result->num_rows >0){

            
            echo 'Available  Branch indexes :<br>';

            for ($i=0; $i < $result->num_rows; $i++) { 
                
            $row = $result->fetch_assoc();
            $branchid = $row['BranchID'];

            echo $branchid;
            echo '  ,';
              
              
            }

              echo '<br>';
          }
          else {
            echo 'There is No Branch<br>';
          }

      ?>


        <input type="text" name="upbrandid" placeholder="New Asign BRANCH ID" required><br><br>

        <h5>UPDATE REGISTRATION DATE</h5>
        <input type="date" name="upregistration" placeholder="" required><br><br>

        <input type="text" name="upstaff_name" placeholder="UPDATE Staff Name" required><br>

        

        <br>
        <button type="submit" name="register">UPDATE RECORD</button>
      </form>
</div>



</body>
</html>