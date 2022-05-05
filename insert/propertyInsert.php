<!DOCTYPE html>

<?php

$serverName = 'localhost';
$username = 'root';
$password = '';
$dbname = 'assignment';
$connection = mysqli_connect($serverName, $username, $password, $dbname);




if(isset($_POST['insert'])){

  
    if(isset($_POST['admin'])){
      
      include '../navigation/adminNavigation.php'; 
      

    }
    else{

      include '../navigation/propertyOwnerNavigation.php';
    }


    $PropertyNo = $_POST['propertyno'];
    $No_of_rooms = $_POST['Noofrooms'];
    $rental = $_POST['rental'];
    $address = $_POST['address'];
    $branchid = $_POST['branchid'];
    $ownerid = $_POST['ownerid'];
    $propertype = $_POST['propertype'];
    
    
    $sql2 = "INSERT INTO `prop_type`(`PropertyNo`, `proTyoe`) VALUES ('$PropertyNo','$propertype')";
    $sql = "INSERT INTO `property`(`PropertyNo`, `BranchID`, `OwnerID`, `No_of_rooms`, `rental`, `address`) VALUES ('$PropertyNo','$branchid','$ownerid','$No_of_rooms','$rental','$address')";


    $result1 = $connection->query($sql);
    $result2 = $connection->query($sql2);

    if($result1 && $result2){

      echo "<script>
            alert('Property insert Successfully.');
          
            </script>";

      
    }
    else{

      echo "<script>
            alert('Property insert Failure!!');
           
            </script>";
      
    }

    
}


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>PROPERTY INSERT</title>
</head>
<body>


<div class="insert">
<h1>INSERT PROPERTY DETAILS</h1>
    
  
      
      <form action="" method="POST">
    
        
        <input type="text" name="propertyno" placeholder="Property NO" required><br><br>


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

      <input type="text" name="branchid" placeholder="Assign Branch ID" required><br><br>

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

        <input type="text" name="ownerid" placeholder="Assign Owner ID" required><br><br>
       
        <input type="text" name="Noofrooms" placeholder="No_of_rooms" required><br><br>

        
        <input type="text" name="rental" placeholder="Rental" required><br><br>

        
        <input type="address" name="address" placeholder="Address" required><br>

        <h5>PROPERTY TYPE</h5>
        <input type="address" name="propertype" placeholder="Flat, Annex,Bungalow,Commercial" required><br><br>
      
        <button type="submit" name="insert">INSERT</button>


      </form>
</div>







</body>
</html>