<!DOCTYPE html>

<?php

$serverName = 'localhost';
$username = 'root';
$password = '';
$dbname = 'assignment';
$connection = mysqli_connect($serverName, $username, $password, $dbname);



if(isset($_POST['register'])){

  include '../navigation/employeeNavigation.php'; 

    $employeeid = $_POST['employeeid'];
    $leaseno = $_POST['leaseno'];
    $upemployeeid = $_POST['upemployeeid'];
    $upleaseno = $_POST['upleaseno'];
    $upmonthrent = $_POST['upmonthrent'];
    $uprentstartdate = $_POST['uprentstartdate'];
    $uprentfinishdate = $_POST['uprentfinishdate'];
    $uppaymentmethod = $_POST['uppaymentmethod'];
    $upclientid = $_POST['upclientid'];
    $uppropertno = $_POST['uppropertno'];

  

    $sql1  = "UPDATE lease SET EmployeeID = '$upemployeeid',lease_No = '$upleaseno',month_rent = '$upmonthrent' ,rent_start_date = '$uprentstartdate',rent_finished_date = '$uprentfinishdate' WHERE EmployeeID = '$employeeid'";
    $sql2 = " UPDATE lease_pay_methode SET lease_No = '$upleaseno',payment_methode = '$uppaymentmethod' WHERE lease_No = '$leaseno'";
    

    


    $result1 = $connection->query($sql1);
    $result2 = $connection->query($sql2);
    

    if($result1 && $result2){

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
    <link rel="stylesheet" href="">
    <title>LEASE UPDATE</title>
</head>
<body>

<div class="update">
<h1>Lease Record Update</h1>
   

<form action="" method="POST">
   
        <?php

        $sql = "SELECT EmployeeID FROM lease;";
        $result = $connection->query($sql);

        if($result){

        
        echo 'Available  employee indexes :<br>';

        for ($i=0; $i < $result->num_rows; $i++) { 
            
        $row = $result->fetch_assoc();
        $Employee_ID = $row['EmployeeID'];

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

        <input type="text" name="upemployeeid" placeholder="New Assign EMPLOYEE ID" required><br><br>


        <input type="text" name="leaseno" placeholder="PREVIOUS LEASE NO" required><br><br>


        <input type="text" name="upleaseno" placeholder="UPDATE LEASE NO" required><br><br>

        <input type="text" name="uppropertno" placeholder="UPDATE PROPERTY NO" required><br><br>

        <input type="text" name="upclientid" placeholder="UPDATE CLIENT ID" required><br><br>


        <input type="number" name="upmonthrent" placeholder="UPDATE MONTH RENT" required>

        <h6>UPDATE RENT START DATE</h6>
        <input type="date" name="uprentstartdate" placeholder="" required>



        <h6>UPDATE FINISH DATE</h6>
        <input type="date" name="uprentfinishdate" placeholder="" required><br><br>

        <h6>UPDATE PAYMENT METHOD</h6>
        <input type="text" name="uppaymentmethod" placeholder="card, cheque or cash" required><br><br>


        <br><br>
        <button type="submit" name="register">UPDATE RECORD</button>
</form>
</div>



</body>
</html>