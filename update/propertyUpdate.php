<!DOCTYPE html>

<?php

$serverName = 'localhost';
$username = 'root';
$password = '';
$dbname = 'assignment';
$connection = mysqli_connect($serverName, $username, $password, $dbname);



if(isset($_POST['update'])){

  if(isset($_POST['admin'])){
      
    include '../navigation/adminNavigation.php'; 
    

  }
  else{

    include '../navigation/propertyOwnerNavigation.php';
  }

    $beforepropertyno = $_POST['beforepropertyno'];
    $uppropertyno = $_POST['uppropertyno'];
    $No_of_rooms = $_POST['No_of_rooms'];
    $rental = $_POST['rental'];
    $address = $_POST['address'];
    $type = $_POST['type'];

    $upownerid = $_POST['upownerid'];
    $upbranchid = $_POST['upbranchid'];
    

    $sql = "UPDATE `property` SET `PropertyNo`='$uppropertyno',`BranchID`='$upbranchid',`OwnerID`='$upownerid',`No_of_rooms`='$No_of_rooms',`rental`='$rental',`address`='$address' WHERE PropertyNo = '$beforepropertyno'";
    $sql2 = "UPDATE `prop_type` SET `PropertyNo`='$uppropertyno',`proTyoe`='$type' WHERE PropertyNo = '$beforepropertyno'";


    $result = $connection->query($sql);
    $result2 = $connection->query($sql2);

    if($result && $result2){

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
    <title>PROPERTY UPDATE</title>
</head>
<body>

<div class="update">
<h1>PROPERTY Record Update</h1>
    
   
      
      <form action="" method="POST">
    
        
        <input type="text" name="beforepropertyno" placeholder="PROPERTY NO" required><br><br>
        <input type="text" name="uppropertyno" placeholder="UPDATE PROPERTY NO" required><br><br>

        
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

        <input type="text" name="upbranchid" placeholder="New Assign Branch ID" required><br><br>

        <?php

        $sql = "SELECT Owner_ID FROM propert_owner;";
        $result = $connection->query($sql);

        if($result){


        echo 'Available  Property Owner indexes :<br>';

        for ($i=0; $i < $result->num_rows; $i++) { 
            
        $row = $result->fetch_assoc();
        $ownerid = $row['Owner_ID'];

        echo $ownerid;
        echo '  ,';
          
          
        }

          echo '<br>';
        }
        else{

        echo 'No Owner indexes<br>';
        }

        ?>

        <input type="text" name="upownerid" placeholder="New Assign Owner ID" required><br><br>


        <input type="text" name="No_of_rooms" placeholder="UPDATED NUM OF ROOM" required><br><br>
        
        <input type="text" name="rental" placeholder="UPDATED RENTAL" required><br><br>


        <input type="text" name="address" placeholder="UPDATED ADDRESS" required><br><br>
        
        
        <input type="text" name="type" placeholder="UPDATED TYPE" required><br><br>

        
        <button type="submit" name="update">UPDATE RECORD</button>
      </form>
</div>





</body>
</html>