<!DOCTYPE html>

<?php

$serverName = 'localhost';
$username = 'root';
$password = '';
$dbname = 'assignment';
$connection = mysqli_connect($serverName, $username, $password, $dbname);



if(isset($_POST['select'])){

    $EMPLOYEE_NO = $_POST['employeeno'];
  

    $sql = "SELECT * FROM employee WHERE Employee_ID = '$EMPLOYEE_NO'";

  
    $result = $connection->query($sql);

    if($result == TRUE && $result->num_rows > 0){
    
       echo '<ul>';

       for ($i=0; $i < $result->num_rows; $i++) { 
        $row = $result->fetch_assoc();

        $EMPLOYEE_NO = $row['Employee_ID'];
        $name = $row['Name'];
        $Salary = $row['Salary'];
        $ContactNo = $row['ContactNo'];
        $DOB = $row['DOB'];
        $NIC = $row['NIC'];
        $Gender = $row['Gender'];
        $StartDate = $row['	StartDate'];
        $BranchID = $row['BranchID'];
        $EmployeeType = $row['	EmployeeType'];


       
        echo '<br>';
        echo '<li>Property No = '.$EMPLOYEE_NO;
        echo '<br>';
        echo '<li>Name :'.$name;
        echo '<br>';
        echo '<li>Salary : '.$Salary;
        echo '<br>';
        echo '<li>Contact No :'.$ContactNo;
        echo '<br>';
        echo '<li>Property No = '.$EMPLOYEE_NO;
        echo '<br>';
        echo '<li>DOB :'.$DOB;
        echo '<br>';
        echo '<li>NIC : '.$NIC;
        echo '<br>';
        echo '<li>StartDate :'.$StartDate;
        echo '<br>';
        echo '<li>Branch ID : '.$BranchID;
        echo '<br>';
        echo '<li>Employee Type :'.$EmployeeType;
        echo '<br>';
        echo '<br>';

        
    }

      echo '</ul>';
      die();
    }
    else if($result == TRUE && $result->num_rows ==0){

        echo 'There is no employee available!!.';
        die();
    }
    else{

        echo 'Unsuceeded'.$connection->error;
        die();
    }


    
}

if(isset($_POST['selectall'])){

  $sql = "SELECT * FROM employee";

  
  $result = $connection->query($sql);

  if($result == TRUE && $result->num_rows > 0){
  
     echo '<ul>';

     for ($i=0; $i < $result->num_rows; $i++) { 
      $row = $result->fetch_assoc();
      $EMPLOYEE_NO = $row['Employee_ID'];
      $name = $row['Name'];
      $Salary = $row['Salary'];
      $ContactNo = $row['ContactNo'];
      $DOB = $row['DOB'];
      $NIC = $row['NIC'];
      $Gender = $row['Gender'];
      $StartDate = $row['StartDate'];
      $BranchID = $row['BranchID'];
      $EmployeeType = $row['EmployeeType'];


     
      echo '<br>';
      echo '<li>Property No = '.$EMPLOYEE_NO;
      echo '<br>';
      echo '<li>Name :'.$name;
      echo '<br>';
      echo '<li>Salary : '.$Salary;
      echo '<br>';
      echo '<li>Contact No :'.$ContactNo;
      echo '<br>';
      echo '<li>Property No = '.$EMPLOYEE_NO;
      echo '<br>';
      echo '<li>DOB :'.$DOB;
      echo '<br>';
      echo '<li>NIC : '.$NIC;
      echo '<br>';
      echo '<li>StartDate :'.$StartDate;
      echo '<br>';
      echo '<li>Branch ID : '.$BranchID;
      echo '<br>';
      echo '<li>Employee Type :'.$EmployeeType;
      echo '<br>';
      echo '<br>';

  }

    echo '</ul>';
    die();
  }
  else if($result == TRUE && $result->num_rows ==0){

      echo '<br><br>There is no employee available!!.';
      die();
  }
  else{

      echo '<br><br>Unsuceeded'.$connection->error;
      die();
  }



}


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="select.css">
    <title>SELECT EMPLOYEE</title>
</head>
<body>


<h1>VIEW EMPLOYEE</h1>
    

    <form action="" method="POST">
    

    <br>
    <button type="submit" name="selectall">View All Records</button>
    </form>
      
      <form action="" method="POST">
    
      <br><br>
        <input type="text" name="employeeno" placeholder="EMPLOYEE NO" required>



     
        <button type="submit" name="select">VIEW EMPLOYEE</button>
    </form>
    



</body>
</html>