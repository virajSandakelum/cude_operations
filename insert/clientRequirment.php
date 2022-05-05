<!DOCTYPE html>

<?php

$serverName = 'localhost';
$username = 'root';
$password = '';
$dbname = 'assignment';
$connection = mysqli_connect($serverName, $username, $password, $dbname);



if(isset($_POST['insert'])){

  include '../navigation/clientNavigation.php'; 

    $CLIENT_NO = $_POST['clientno'];
    $reqirmentno = $_POST['reqirmentno'];
    $type = $_POST['type'];
    $area = $_POST['area'];
    $maxrent = $_POST['maxrent'];
    $willingdate = $_POST['willingdate'];
    


    $sql = "INSERT INTO `requirements`(`ClientNo`, `ReqNo`, `type`, `area`, `max_rent`, `date_willing_to_rent`) VALUES ('$CLIENT_NO','$reqirmentno','$type','$area','$maxrent','$willingdate')";

    $resultClient = $connection->query($sql);

    if($resultClient){

      echo "<script>
            alert('REQUIEMENT insert Successfully.');
           
            </script>";

      

    }
    else{

      echo "<script>
            alert('REQUIEMENT insert Failure!!');
          
            </script>";
            
      
    }

    
}


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>CLIENT REQUIEMENT INSERT</title>
</head>
<body>





<div class="insert">
<h1>INSERT CLIENT REQUIEMENT DETAILS</h1>
    
  
      
      <form action="" method="POST">
    

        <?php

        $sql = "SELECT ClientNo FROM client;";
        $result = $connection->query($sql);

        if($result->num_rows >0){

        
        echo 'Available  client numbers :<br>';

        for ($i=0; $i < $result->num_rows; $i++) { 
            
        $row = $result->fetch_assoc();
        $clientno = $row['ClientNo'];

        echo $clientno;
        echo '  ,';
            
            
        }

            echo '<br>';
        }
        else {
        echo 'There is No client<br>';
        }

        ?>

        
        <input type="text" name="clientno" placeholder="CLIENT NO" required><br><br>

      
        <input type="text" name="reqirmentno" placeholder="REQUIEMENT NO" required><br><br>

        
        <input type="text" name="type" placeholder="Flat, Annex,Bungalow,Commercial" required><br><br>

        
        <input type="text" name="area" placeholder="AREA" required><br><br>

    
        <input type="text" name="maxrent" placeholder="MAX RENT" required><br>


        <h6>DATE OF WILLING TO RENT</h6>
        <input type="date" name="willingdate" placeholder="DATE OF WILLING TO RENT" required><br><br>
        

        
        <button type="submit" name="insert">INSERT REQUIEMENT</button>


      </form>
</div>



</body>
</html>