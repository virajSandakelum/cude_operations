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

    $employeeid = $_POST['employeeid'];
    $upemployeeid = $_POST['upemployeeid'];
    $upname = $_POST['upname'];
    $upsalary = $_POST['upsalary'];
    $upcontactno = $_POST['upcontactno'];

    $updob = $_POST['updob'];
    $upnic = $_POST['upnic'];
    $upgender = $_POST['upgender'];
    $upbrandid = $_POST['upbrandid'];
    $upstartdate = $_POST['upstartdate'];
    $upemployeetype = $_POST['upemployeetype'];
    


    $sql = "UPDATE employee SET Employee_ID='$upemployeeid',Name='$upname',Salary='$upsalary',ContactNo='$upcontactno',DOB='$updob',NIC='$upnic',Gender='$upgender',StartDate='$upstartdate',BranchID='$upbrandid',EmployeeType='$upemployeetype' WHERE Employee_ID = '$employeeid'";

    $resultClient = $connection->query($sql);

    if($resultClient){

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
    <title>EMPLOYEE UPDATE</title>
</head>
<body>

<div class="update">
<h1>EMPLOYEE Record Update</h1>
    
   
      
      <form action="" method="POST">
    
        
      
        <input type="text" name="employeeid" placeholder="Employee ID" required><br><br>

        <input type="text" name="upemployeeid" placeholder="UPDATE Employee ID" required><br><br>
            
        <input type="text" name="upname" placeholder="UPDATE Name" required><br><br>


        <input type="number" name="upsalary" placeholder="UPDATE Salary" required><br><br>


        <input type="number" name="upcontactno" placeholder="UPDATE Contact No" required><br><br>


        <label>BOD :</label><br>
        <input type="date" name="updob" placeholder="UPDATE DOB" required><br><br>


        <input type="text" name="upnic" placeholder="UPDATE NIC" required><br><br>


        <input type="text" name="upgender" placeholder="UPDATE Gender" required><br><br>

        <label>UPDATE Start Date :</label><br>
        <input type="date" name="upstartdate" placeholder="" required><br><br>

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
        else{

            echo 'No Branch indexes<br>';
        }

        ?>


        <input type="text" name="upbrandid" placeholder="New Assign BRANCH ID" required><br><br>
        <label>UPDATE Employee Type :</label><br>
        <input type="text" name="upemployeetype" placeholder="Manager,Supervisor,Assistant" required>



        <br><br>
        <button type="submit" name="register">UPDATE RECORD</button>
      </form>
</div>



</body>
</html>