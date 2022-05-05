<!DOCTYPE html>

<?php

$serverName = 'localhost';
$username = 'root';
$password = '';
$dbname = 'assignment';
$connection = mysqli_connect($serverName, $username, $password, $dbname);


if(isset($_POST['admin'])){
  
  include '../navigation/adminNavigation.php'; 
  

}



if(isset($_POST['insert'])){

  include '../navigation/adminNavigation.php'; 

    $Owner_ID = $_POST['ownerid'];
 
    $nic  = $_POST['nic'];
    $name  = $_POST['name'];
   
   

 

    $sql3 = "INSERT INTO person(NIC,pername,Owner_ID) values('$nic','$name','$Owner_ID')";

    $result3 = $connection->query($sql3);

  
    
   

    if($result3){

      echo "<script>
            alert('PROPERTY insert Successfully.');
            
            </script>";

      

    }
    else{

      echo "<script>
            alert('PROPERTY insert Failure!!');
           
            </script>";
            
      
    }

    
}


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>INSERT PROPERTY OWNER</title>
</head>
<body>


<div class="insert">
<h1>INSERT PROPERTY OWNER</h1>
    
  
      
      <form action="" method="POST">
    
        
        <input type="text" name="ownerid" placeholder="Owner ID" required><br><br>

       
  

        
        <input type="text" name="nic" placeholder="Person NIC" ><br><br>

        <input type="text" name="name" placeholder="Person Name" ><br><br>

    
        
        <button type="submit" name="insert">INSERT</button>


      </form>
</div>






</body>
</html>