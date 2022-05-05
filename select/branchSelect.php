<!DOCTYPE html>

<?php

$serverName = 'localhost';
$username = 'root';
$password = '';
$dbname = 'assignment';
$connection = mysqli_connect($serverName, $username, $password, $dbname);



if(isset($_POST['select'])){

    $BranchID = $_POST['branchId'];
  

    $sql = "SELECT * FROM branch WHERE 	BranchID = '$BranchID'";

  
    $result = $connection->query($sql);

    if($result == TRUE && $result->num_rows > 0){
    
       echo '<ul>';

       for ($i=0; $i < $result->num_rows; $i++) { 
        $row = $result->fetch_assoc();

        $BranchID = $row['BranchID'];
        $Address = $row['Address'];
        $Email = $row['Email'];
        $contact_No = $row['contact_No'];
        


       
        echo '<br>';
        echo '<li>Branch ID  : '.$BranchID;
        echo '<br>';
        echo '<li>Address :'.$Address;
        echo '<br>';
        echo '<li>Email : '.$Email;
        echo '<br>';
        echo '<li>Contact No :'.$contact_No;
        echo '<br><br>';
        
    }

      echo '</ul>';
      die();
    }
    else if($result == TRUE && $result->num_rows ==0){

        echo 'There is no branch available!!.';
        die();
    }
    else{

        echo 'Unsuceeded'.$connection->error;
        die();
    }


    
}

if(isset($_POST['selectall'])){

  $sql = "SELECT * FROM branch";

  
  $result = $connection->query($sql);

  if($result == TRUE && $result->num_rows > 0){
  
     echo '<ul>';

     for ($i=0; $i < $result->num_rows; $i++) { 
      $row = $result->fetch_assoc();
      
      $BranchID = $row['BranchID'];
      $Address = $row['Address'];
      $Email = $row['Email'];
      $contact_No = $row['contact_No'];
      


     
      echo '<br>';
      echo '<li>Branch ID  : '.$BranchID;
      echo '<br>';
      echo '<li>Address :'.$Address;
      echo '<br>';
      echo '<li>Email : '.$Email;
      echo '<br>';
      echo '<li>Contact No :'.$contact_No;
      echo '<br><br>';

  }

    echo '</ul>';
    die();
  }
  else if($result == TRUE && $result->num_rows ==0){

      echo 'There is no branch available!!.';
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
        <input type="text" name="branchId" placeholder="BRanch ID" required>



     
        <button type="submit" name="select">VIEW BRANCH</button>
    </form>
    



</body>
</html>