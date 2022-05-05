
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>DELECT</title>
</head>
<body>

<?php

  include '../navigation/adminNavigation.php';  

?>




<div class="container">


<form action = "./clientDelete.php" method = "POST">

<button type="submit" name = "admin" class = "btn5" >DELECT CLIENT RECORD</button><br><br><br>


</form>

<form action = "./propertyOwnerDelete.php" method = "POST">

<button type="submit" name = "admin" class = "btn5" >DELECT PROPERTY OWNER RECORD</button><br><br><br>


</form>



<form action = './propertyDelete.php' method = "POST">

<button type="submit" name = "admin" class = "btn5">DELECT PROPERTY RECORD</button><br><br><br>

</form>



<form action = "./employeeDelete.php" method = "POST">

<button type="submit" name = "admin" class = "btn5">DELECT EMPLOYEE RECORD</button><br><br><br>

</form>



<form action = "./branchDelete.php" method = "POST">

<button type="submit" name = "admin" class = "btn5">DELECT BRANCH RECORD</button><br>

</form>


</div>




</body>
</html>