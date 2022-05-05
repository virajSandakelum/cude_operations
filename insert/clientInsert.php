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

    $CLIENT_NO = $_POST['clientno'];
    $FULL_NAME = $_POST['fname'];
    $NIC = $_POST['nic'];
    $EMAIL = $_POST['email'];
    $BranchID = $_POST['brandid'];
    $registrationdate = $_POST['registrationdate'];
    $staff_name = $_POST['staff_name'];

    $sql = "INSERT INTO `client`(`ClientNo`, `Full_Name`, `Email`, `NIC`, `BranchID`,`registration_date`, `staff_name`) VALUES ('$CLIENT_NO','$FULL_NAME','$EMAIL','$NIC','$BranchID','$registrationdate','$staff_name')";

    $resultClient = $connection->query($sql);

    if($resultClient){

      echo "<script>
            alert('CLIENT insert Successfully.');
           
            </script>";

      

    }
    else{

      echo "<script>
            alert('CLIENT insert Failure!!');
          
            </script>";
            
      
    }

    
}


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>CLIENT INSERT</title>
</head>
<body>





<div class="insert">
<h1>INSERT CLIENT DETAILS</h1>
    
  
      
      <form action="" method="POST">
    
        
        <input type="text" name="clientno" placeholder="CLIENT NO" required><br><br>

      
        <input type="text" name="fname" placeholder="FULL NAME" required><br><br>

        
        <input type="email" name="email" placeholder="EMAIL" required><br><br>


        <input type="text" name="nic" placeholder="NIC" required><br><br>


    

      <?php

          $sql = "SELECT BranchID FROM branch;";
          $result = $connection->query($sql);

          if($result->num_rows >0){

            
            echo 'Available  Branch indexes :';

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


        <input type="text" name="brandid" placeholder="ASSIGNED BRANCH ID" required><br><br>

        <label for="">Registration Date :</label><br>
        <input type="date" name="registrationdate" placeholder="" required><br><br>

        <input type="text" name="staff_name" placeholder="Staff Name" required><br><br>

        

        
        <button type="submit" name="insert">INSERT</button>


      </form>
</div>



</body>
</html>