<!DOCTYPE html>

<?php

$serverName = 'localhost';
$username = 'root';
$password = '';
$dbname = 'assignment';
$connection = mysqli_connect($serverName, $username, $password, $dbname);




if(isset($_POST['select'])){

    $PROPERTY_NO = $_POST['propertyno'];
  

    $sql = "SELECT * FROM property WHERE PropertyNo = '$PROPERTY_NO'";
    $sql2 = "SELECT * FROM `prop_type` WHERE PropertyNo = '$PROPERTY_NO'";

  
    $result = $connection->query($sql); 
    $result2 = $connection->query($sql2);

    if($result == TRUE && $result->num_rows > 0 && $result2){
    
       echo '<ul>';

       for ($i=0; $i < $result->num_rows; $i++) { 
        $row = $result->fetch_assoc();

        $PROPERTY_NO = $row['PropertyNo'];
        $Noofrooms = $row['No_of_rooms'];
        $rental = $row['rental'];
        $address = $row['address'];

        $row2 = $result2->fetch_assoc();
        $type = $row2['proTyoe'];
       
        echo '<br>';
        echo '<li>Property No = '.$PROPERTY_NO;
        echo '<br>';
        echo '<li>No_of_rooms :'.$Noofrooms;
        echo '<br>';
        echo '<li>Rental : '.$rental;
        echo '<br>';
        echo '<li>Address :'.$address;
        echo '<br>';
        echo '<li>Type : '.$type;
        echo '<br><br>';
        
    }

      echo '</ul>';
      die();
    }
    else if($result == TRUE && $result->num_rows ==0){

        echo 'There is no property available!!.';
        die();
    }
    else{

        echo 'Unsuceeded'.$connection->error;
        die();
    }


    
}

if(isset($_POST['selectall'])){

  $sql = "SELECT * FROM property";
  $sql2 = "SELECT * FROM `prop_type`";

  
  $result = $connection->query($sql);
  $result2 = $connection->query($sql2);

  if($result == TRUE && $result->num_rows > 0 && $result2){
  
     echo '<ul>';

     for ($i=0; $i < $result->num_rows; $i++) { 
        $row = $result->fetch_assoc();

        $PROPERTY_NO = $row['PropertyNo'];
        $Noofrooms = $row['No_of_rooms'];
        $rental = $row['rental'];
        $address = $row['address'];

        $row2 = $result2->fetch_assoc();
        $type = $row2['proTyoe'];
       
        echo '<br>';
        echo '<li>Property No = '.$PROPERTY_NO;
        echo '<br>';
        echo '<li>No_of_rooms :'.$Noofrooms;
        echo '<br>';
        echo '<li>Rental : '.$rental;
        echo '<br>';
        echo '<li>Address :'.$address;
        echo '<br>';
        echo '<li>Type : '.$type;
        echo '<br><br>';

  }

    echo '</ul>';
    die();
  }
  else if($result == TRUE && $result->num_rows ==0){

      echo 'There is no property available!!.';
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
    <title>SELECT PROPERTY</title>
</head>
<body>


<h1>VIEW PROPERTY</h1>
    

    <form action="" method="POST">
    

    <br>
    <button type="submit" name="selectall">View All Records</button>
    </form>
      
      <form action="" method="POST">
    
      <br><br>
        <input type="text" name="propertyno" placeholder="PROPERTY NO" required>



     
        <button type="submit" name="select">VIEW PROPERTY</button>
    </form>
    



</body>
</html>