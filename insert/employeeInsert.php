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

    $employeeid = $_POST['employeeid'];
    $name = $_POST['name'];
    $salary = $_POST['salary'];
    $contactno = $_POST['contactno'];
    $dob = $_POST['dob'];
    $nic = $_POST['nic'];
    $gender = $_POST['gender'];
    $startdate = $_POST['startdate'];
    $brandid = $_POST['brandid'];
    $employeetype = $_POST['employeetype'];
    

    

    $sql = "INSERT INTO `employee`(`Employee_ID`, `Name`, `Salary`, `ContactNo`, `DOB`, `NIC`, `Gender`, `StartDate`, `BranchID`, `EmployeeType`) VALUES ('$employeeid','$name','$salary','$contactno','$dob','$nic','$gender','$startdate','$brandid','$employeetype')";

    $resultClient = $connection->query($sql);

    if($resultClient == TRUE){

      echo "<script>
            alert('Employee insert Successfully.');
            
            </script>";

     

    }
    else{

      echo "<script>
            alert('Employee insert Failure!!');
           
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
    <title>EMPLOYEE INSERT</title>
</head>
<body>


<div class="insert">
<h1>INSERT EMPLOYEE DETAILS</h1>
    
  
      
      <form action="" method="POST">
    
        
        <input type="text" name="employeeid" placeholder="	Employee ID" required><br><br>

       
        <input type="text" name="name" placeholder="Name" required><br><br>

        
        <input type="number" name="salary" placeholder="Salary" required><br><br>

        
        <input type="number" name="contactno" placeholder="Contact No" required><br><br>


        <label>BOD :</label><br>
        <input type="date" name="dob" placeholder="DOB" required><br><br>

       
        <input type="text" name="nic" placeholder="NIC" required><br><br>

        
        <input type="text" name="gender" placeholder="Gender" required><br><br>

        <label>Start Date :</label><br>
        <input type="date" name="startdate" placeholder="" required><br><br>

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
          else{

            echo 'No Branch indexes<br>';
          }

      ?>


        <input type="text" name="brandid" placeholder="ASSIGNED BRANCH ID" required><br><br>
        <label>Employee Type :</label><br>
        <input type="text" name="employeetype" placeholder="Manager,Supervisor,Assistant" required><br><br>


        

      
        <button type="submit" name="insert">INSERT</button>


      </form>
</div>







</body>
</html>