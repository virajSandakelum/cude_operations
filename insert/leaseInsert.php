<!DOCTYPE html>

<?php

$serverName = 'localhost';
$username = 'root';
$password = '';
$dbname = 'assignment';
$connection = mysqli_connect($serverName, $username, $password, $dbname);


if(isset($_POST['insert'])){

  include '../navigation/employeeNavigation.php'; 

    $employeeid = $_POST['employeeid'];
    $leaseno = $_POST['leaseno'];
    $monthrent = $_POST['monthrent'];
    $rentstartdate = $_POST['rentstartdate'];
    $rentfinishdate = $_POST['rentfinishdate'];
    $paymentmethod = $_POST['paymentmethod'];

    $clientid = $_POST['clientid'];
    $propertyid = $_POST['propertyid'];
    

    $sql1 = "INSERT INTO `lease`(`EmployeeID`, `lease_No`, `month_rent`, `rent_start_date`, `rent_finished_date`) VALUES ('$employeeid','$leaseno','$monthrent','$rentstartdate','$rentfinishdate')";
    $sql2 = "INSERT INTO `lease_pay_methode`(`lease_No`, `payment_methode`) VALUES ('$leaseno','$paymentmethod')";
    $sql3 = "INSERT INTO `lease_form`(`lease_No`, `ClientNo`, `PropertyNo`) VALUES ('$leaseno','$clientid','$propertyid')";

    $result1 = $connection->query($sql1);
    $result2 = $connection->query($sql2);
    $result3 = $connection->query($sql3);

    if($result1 && $result2 && $result3){

      echo "<script>
            alert('LEASE DRAWS UP insert Successfully.');
           
            </script>";

      

    }
    else{

      echo "<script>
            alert('LEASE DRAWS UP insert Failure!!');
          
            </script>";
            
      
    }

    
}


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>LEASE DRAWS UP</title>
</head>
<body>





<div class="insert">
<h1>LEASE DRAWS UP</h1>
    
  
      
      <form action="" method="POST">
    
      
      <?php

          $sql = "SELECT Employee_ID FROM employee;";
          $result = $connection->query($sql);

          if($result->num_rows >0){

            
            echo 'Available  employee indexes :<br>';

            for ($i=0; $i < $result->num_rows; $i++) { 
                
            $row = $result->fetch_assoc();
            $Employee_ID = $row['Employee_ID'];

            echo $Employee_ID;
            echo '  ,';
              
              
            }

              echo '<br><br>';
          }
          else {
            echo 'There is No employee.<br><br>';
          }

      ?>
  

        <input type="text" name="employeeid" placeholder="ASSIGN EMPLOYEE ID" required><br><br>


        <?php

          $sql = "SELECT ClientNo FROM client;";
          $result = $connection->query($sql);

          if($result->num_rows >0){

            
            echo 'Available  client indexes :<br>';

            for ($i=0; $i < $result->num_rows; $i++) { 
                
            $row = $result->fetch_assoc();
            $ClientNo = $row['ClientNo'];

            echo $ClientNo;
            echo '  ,';
              
              
            }

              echo '<br><br>';
          }
          else {
            echo 'There is No client.<br><br>';
          }

      ?>
  

        <input type="text" name="clientid" placeholder="ASSIGN CLIENT ID" required><br><br>


        
        <?php

          $sql = "SELECT PropertyNo FROM property;";
          $result = $connection->query($sql);

          if($result->num_rows >0){

            
            echo 'Available  Property numbers :<br>';

            for ($i=0; $i < $result->num_rows; $i++) { 
                
            $row = $result->fetch_assoc();
            $PropertyNo = $row['PropertyNo'];

            echo $PropertyNo;
            echo '  ,';
              
              
            }

              echo '<br><br>';
          }
          else {
            echo 'There is No property.<br><br>';
          }

      ?>
  

        <input type="text" name="propertyid" placeholder="ASSIGN PROPERTY NO" required><br><br>

      
      
        <input type="text" name="leaseno" placeholder="LEASE NO" required><br><br>

        
        <input type="number" name="monthrent" placeholder="MONTH RENT" required>

        <h6>RENT START DATE</h6>
        <input type="date" name="rentstartdate" placeholder="" required>

    

        <h6>RENT FINISH DATE</h6>
        <input type="date" name="rentfinishdate" placeholder="" required><br><br>

        <h6>PAYMENT METHOD</h6>
        <input type="text" name="paymentmethod" placeholder="card, cheque or cash" required><br><br>

        

        
        <button type="submit" name="insert">DRAWS UP</button>


      </form>
</div>



</body>
</html>