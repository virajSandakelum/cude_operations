<!DOCTYPE html>

<?php

$serverName = 'localhost';
$username = 'root';
$password = '';
$dbname = 'assignment';
$connection = mysqli_connect($serverName, $username, $password, $dbname);



if(isset($_POST['select'])){

    $clientno = $_POST['clientno'];
  

    $sql = "SELECT `ClientNo`, `ReqNo`, `type`, `area`, `max_rent`, `date_willing_to_rent` FROM `requirements` WHERE `ClientNo` = '$clientno' ";

  
    $result = $connection->query($sql);

    if($result == TRUE && $result->num_rows > 0){
    
       echo '<ul>';

       for ($i=0; $i < $result->num_rows; $i++) { 
        $row = $result->fetch_assoc();

        $ClientNo = $row['ClientNo'];
        $ReqNo = $row['ReqNo'];
        $type = $row['type'];
        $area = $row['area'];

        $max_rent = $row['max_rent'];
        $date_willing_to_rent = $row['date_willing_to_rent'];
        
        
    
       
        echo '<br>';
        echo '<li>Client No  : '.$ClientNo;
        echo '<br>';
        echo '<li>requirement No :'.$ReqNo;
        echo '<br>';
        echo '<li>Type : '.$type;
        echo '<br>';
        echo '<li>Area  :'.$area;
        echo '<br>';
        echo '<li>Max rent : '.$max_rent;
        echo '<br>';
        echo '<li>Date Willing to Rent :'.$date_willing_to_rent;
        echo '<br><br>';
        
        
    }

      echo '</ul>';
      die();
    }
    else if($result == TRUE && $result->num_rows ==0){

        echo 'There is no requirement available!!.';
        die();
    }
    else{

        echo 'Unsuceeded'.$connection->error;
        die();
    }


    
}

if(isset($_POST['selectall'])){

  $sql = "SELECT * FROM `requirements`";

  
  $result = $connection->query($sql);

  if($result == TRUE && $result->num_rows > 0){
  
     echo '<ul>';

     for ($i=0; $i < $result->num_rows; $i++) { 
      $row = $result->fetch_assoc();
      
      $ClientNo = $row['ClientNo'];
      $ReqNo = $row['ReqNo'];
      $type = $row['type'];
      $area = $row['area'];

      $max_rent = $row['max_rent'];
      $date_willing_to_rent = $row['date_willing_to_rent'];
      
      
  
     
      echo '<br>';
      echo '<li>Client No  : '.$ClientNo;
      echo '<br>';
      echo '<li>requirement No :'.$ReqNo;
      echo '<br>';
      echo '<li>Type : '.$type;
      echo '<br>';
      echo '<li>Area  :'.$area;
      echo '<br>';
      echo '<li>Max rent : '.$max_rent;
      echo '<br>';
      echo '<li>Date Willing to Rent :'.$date_willing_to_rent;
      echo '<br><br>';

  }

    echo '</ul>';
    die();
  }
  else if($result == TRUE && $result->num_rows ==0){

      echo 'There is no requirement available!!.';
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
    <title>SELECT BRANCH</title>
</head>
<body>


<h1>VIEW BRANCH</h1>
    

    <form action="" method="POST">
    

    <br>
    <button type="submit" name="selectall">View All Records</button>
    </form>
      
      <form action="" method="POST">
    
      <br><br>
        <input type="text" name="clientno" placeholder="Client No" required>



     
        <button type="submit" name="select">VIEW BRANCH</button>
    </form>
    



</body>
</html>