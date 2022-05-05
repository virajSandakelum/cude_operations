<!DOCTYPE html>

<?php

$serverName = 'localhost';
$username = 'root';
$password = '';
$dbname = 'assignment';
$connection = mysqli_connect($serverName, $username, $password, $dbname);




if(isset($_POST['select'])){

    $CLIENT_NO = $_POST['clientno'];
  

    $sql = "SELECT * FROM client WHERE ClientNo = '$CLIENT_NO'";

  
    $result = $connection->query($sql);

    if($result == TRUE && $result->num_rows > 0){
    
       echo '<ul>';

       for ($i=0; $i < $result->num_rows; $i++) { 
        $row = $result->fetch_assoc();

        $CLIENT_NO = $row['ClientNo'];
        $FULL_NAME = $row['Full_Name'];
        $NIC = $row['NIC'];
        $BranchID = $row['BranchID'];
        $registration_date = $row['registration_date'];
        $staff_name = $row['staff_name'];
        $EMAIL = $row['Email'];


       
        echo '<br>';
        echo '<li>Client No = '.$CLIENT_NO;
        echo '<br>';
        echo '<li>Full name :'.$FULL_NAME;
        echo '<br>';
        echo '<li>NIC : '.$NIC;
        echo '<br>';
        echo '<li>Email :'.$EMAIL;
        echo '<br>';
        echo '<li>BranchID : '.$BranchID;
        echo '<br>';
        echo '<li>registration_date : '.$registration_date;
        echo '<br>';
        echo '<li>staff_name : '.$staff_name;
        echo '<br>';
        echo '<br>';
        
    }

      echo '</ul>';
      die();
    }
    else if($result == TRUE && $result->num_rows ==0){

        echo 'User account not found';
        die();
    }
    else{

        echo 'Unsuceeded'.$connection->error;
        die();
    }


    
}

if(isset($_POST['selectall'])){

  $sql = "SELECT * FROM client";

  
  $result = $connection->query($sql);

  if($result == TRUE && $result->num_rows > 0){
  
     echo '<ul>';

     for ($i=0; $i < $result->num_rows; $i++) { 
      $row = $result->fetch_assoc();
      $CLIENT_NO = $row['ClientNo'];
      $FULL_NAME = $row['Full_Name'];
      $NIC = $row['NIC'];
      $BranchID = $row['BranchID'];
      $registration_date = $row['registration_date'];
      $staff_name = $row['staff_name'];
      $EMAIL = $row['Email'];


     
      echo '<br>';
      echo '<li>Client No = '.$CLIENT_NO;
      echo '<br>';
      echo '<li>Full name :'.$FULL_NAME;
      echo '<br>';
      echo '<li>NIC : '.$NIC;
      echo '<br>';
      echo '<li>Email :'.$EMAIL;
      echo '<br>';
      echo '<li>BranchID : '.$BranchID;
      echo '<br>';
      echo '<li>registration_date : '.$registration_date;
      echo '<br>';
      echo '<li>staff_name : '.$staff_name;
      echo '<br>';
      echo '<br>';
  }

    echo '</ul>';
    die();
  }
  else if($result == TRUE && $result->num_rows ==0){

      echo 'User account not found';
      die();
  }
  else{

      echo 'Unsuceeded'.$connection->error;
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
    <title>CLIENT Register</title>
</head>
<body>


<h1>VIEW CLIENT</h1>
 
    <div class="reg">

    <form action="" method="POST">
    

    <br>
    <button type="submit" name="selectall">View All Records</button><br><br>
    </form>
      
      <form action="" method="POST">
    
        
        <input type="text" name="clientno" placeholder="CLIENT NO">

        
        <button type="submit" name="select">VIEW CLIENT</button>
      </form>
    </div>



</body>
</html>