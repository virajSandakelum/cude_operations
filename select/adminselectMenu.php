<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>VIEW</title>
</head>
<body>
    
<?php

  include '../navigation/adminNavigation.php';  

?>




<div class="container">


<form action = "./clientselect.php" method = "POST">

<button type="submit" name = "admin" class = "btn5" >VIEW CLIENT RECORD </button><br><br><br>


</form>


<form action = "./clientReqirmentSelect.php" method = "POST">

<button type="submit" name = "admin" class = "btn5">CLIENT REQUIRMENT RECORD</button><br><br><br>

</form>

<form action = "./propertyOwner.php" method = "POST">

<button type="submit" name = "admin" class = "btn5" >VIEW PROPERTY OWNER RECORD</button><br><br><br>


</form>



<form action = './propertySelect.php' method = "POST">

<button type="submit" name = "admin" class = "btn5">VIEW PROPERTY RECORD</button><br><br><br>

</form>



<form action = "./employeeSelect.php" method = "POST">

<button type="submit" name = "admin" class = "btn5">VIEW EMPLOYEE RECORD</button><br><br><br>

</form>



<form action = "./branchSelect.php" method = "POST">

<button type="submit" name = "admin" class = "btn5">VIEW BRANCH RECORD</button><br>

</form>


</div>

</body>
</html>