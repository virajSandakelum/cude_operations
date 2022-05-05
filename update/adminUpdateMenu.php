
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>UPDATE</title>
</head>
<body>

<?php

  include '../navigation/adminNavigation.php';  

?>




<div class="container">


<form action = "./clientUpdate.php" method = "POST">

<button type="submit" name = "admin" class = "btn5" >UPDATE CLIENT RECORD</button><br><br><br>


</form>

<form action = "./propertyOwnerUpdateP.php" method = "POST">

<button type="submit" name = "admin" class = "btn5" >UPDATE PROPERTY OWNER(Person)</button><br><br><br>


</form>

<form action = "./propertyOwnerUpdateC.php" method = "POST">

<button type="submit" name = "admin" class = "btn5" >UPDATE PROPERTY OWNER(Company)</button><br><br><br>


</form>


<form action = './propertyUpdateAdmin.php' method = "POST">

<button type="submit" name = "admin" class = "btn5">UPDATE PROPERTY RECORD</button><br><br><br>

</form>



<form action = "./employeeUpdate.php" method = "POST">

<button type="submit" name = "admin" class = "btn5">UPDATE EMPLOYEE RECORD</button><br><br><br>

</form>



<form action = "./branchUpdate.php" method = "POST">

<button type="submit" name = "admin" class = "btn5">UPDATE BRANCH RECORD</button><br>

</form>


</div>




</body>
</html>