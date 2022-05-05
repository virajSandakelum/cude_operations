<!DOCTYPE html>

<?php

$serverName = 'localhost';
$username = 'root';
$password = '';
$dbname = 'assignment';
$connection = mysqli_connect($serverName, $username, $password, $dbname);



if(isset($_POST['select'])){

    $Owner_ID = $_POST['ownerid'];
  
    $sql2 = "SELECT `NIC`, `pername`, `Owner_ID` FROM `person` WHERE `Owner_ID` = '$Owner_ID'";

    $sql = "SELECT * FROM propert_owner WHERE Owner_ID = '$Owner_ID'";

    $sql3 = "SELECT `CompanyID`, `Company_Name`, `Owner_ID` FROM `company` WHERE `Owner_ID` = '$Owner_ID'";

  
    $result = $connection->query($sql);
    $result2 = $connection->query($sql2);
    $result3 = $connection->query($sql3);

    if($result == TRUE && $result->num_rows > 0){
    
       echo '<ul>';

       for ($i=0; $i < $result->num_rows; $i++) { 
        $row = $result->fetch_assoc();
        $row2 = $result2->fetch_assoc();
        $row3 = $result3->fetch_assoc();

        $Owner_ID = $row['Owner_ID'];
        $ContactNo = $row['ContactNo'];
        $Email = $row['Email'];
        $address = $row['address'];
       

        if($result2->num_rows > 0){

            $NIC = $row2['NIC'];
            $pername = $row2['pername'];
        }
        if($result3->num_rows > 0){

            $CompanyID = $row3['CompanyID'];
            $Company_Name = $row3['Company_Name'];
        }

       
        echo '<br>';
        echo '<li>Owner ID = '.$Owner_ID;
        echo '<br>';
        echo '<li>Contact No :'.$ContactNo;
        echo '<br>';
        echo '<li>Email : '.$Email;
        echo '<br>';
        echo '<li>address : '.$address;
        echo '<br>';

        if($result2->num_rows > 0){

            echo '<li>NIC : '.$NIC;
            echo '<br>';
            echo '<li>person Name : '.$pername;
            echo '<br>';
           
        }
        if($result3->num_rows > 0){

            echo '<li>Company ID : '.$CompanyID;
            echo '<br>';
            echo '<li>Company Name : '.$Company_Name;
            echo '<br>';
           
        }
       
       
       
       
       

        
    }

      echo '</ul>';
      die();
    }
    else if($result == TRUE && $result->num_rows ==0){

        echo 'There is no owner available!!.';
        die();
    }
    else{

        echo 'Unsuceeded'.$connection->error;
        die();
    }


    
}

if(isset($_POST['selectall'])){

  $sql = "SELECT * FROM propert_owner";

  
  $result = $connection->query($sql);

  if($result == TRUE && $result->num_rows > 0){
  
     echo '<ul>';

     for ($i=0; $i < $result->num_rows; $i++) { 
      $row = $result->fetch_assoc();
      

      
      $Owner_ID = $row['Owner_ID'];
      $ContactNo = $row['ContactNo'];
      $Email = $row['Email'];
      $address = $row['address'];
     


     
      echo '<br>';
      echo '<li>Owner ID = '.$Owner_ID;
      echo '<br>';
      echo '<li>Contact No :'.$ContactNo;
      echo '<br>';
      echo '<li>Email : '.$Email;
      echo '<br>';
      echo '<li>address :'.$address;
      echo '<br>';
      echo '<br>';


  }

    echo '</ul>';
    die();
  }
  else if($result == TRUE && $result->num_rows ==0){

      echo 'There is no owner available!!.';
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
    <title>SELECT PROPERTY OWNERS</title>
</head>
<body>


<h1>VIEW PROPERTY OWNERS</h1>
    

    <form action="" method="POST">
    

    <br>
    <button type="submit" name="selectall">View All Records</button>
    </form>
      
      <form action="" method="POST">
    
      <br><br>
        <input type="text" name="ownerid" placeholder="OWNER ID" required>



     
        <button type="submit" name="select">VIEW EMPLOYEE</button>
    </form>
    



</body>
</html>