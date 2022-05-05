<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>INSERT</title>
</head>
<body>

<?php

  include '../navigation/adminNavigation.php';  

?>




<div class="container">


<form action = "./clientInsert.php" method = "POST">

<button type="submit" name = "admin" class = "btn5" >INSERT CLIENT RECORD</button><br><br><br>


</form>

<form action = "./propertyOwnerInserP.php" method = "POST">

<button type="submit" name = "admin" class = "btn5" >INSERT PROPERTY OWNER(Person)</button><br><br><br>


</form>

</form>

<form action = "./propertyOwnerInsertC.php" method = "POST">

<button type="submit" name = "admin" class = "btn5" >INSERT PROPERTY OWNER(Company)</button><br><br><br>


</form>




<form action = './propertyInsertAdmin.php' method = "POST">

<button type="submit" name = "admin" class = "btn5">INSERT PROPERTY RECORD</button><br><br><br>

</form>



<form action = "./employeeInsert.php" method = "POST">

<button type="submit" name = "admin" class = "btn5">INSERT EMPLOYEE RECORD</button><br><br><br>

</form>



<form action = "./branchInsert.php" method = "POST">

<button type="submit" name = "admin" class = "btn5">INSERT BRANCH RECORD</button><br>

</form>


</div>




</body>
</html>