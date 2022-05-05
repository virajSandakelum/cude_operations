<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="menustyle.css">
  <title>WELCOME ADMIN</title>
</head>
<body>
  

<div class="header">

<h1><u>WELCOME ADMIN</u></h1>

</div>


<form action = "../login/login.php" method = "POST">

<button type="submit" class = "btn5">LOGOUT</button><br><br>

</form>   




<div class="container">

<form action = "../insert/admininsertMenu.php" method = "">

<button type="submit" name = "insert" class = "btn1" >INSERT</button><br><br>


</form>



<form action = '../update/adminUpdateMenu.php' method = "">

<button type="submit" name = "update" class = "btn2">UPDATE</button><br><br>

</form>



<form action = "../delect/adminDeleteMenu.php" method = "">

<button type="submit" name = "delete" class = "btn3">DELETE</button><br>

</form>



<form action = "../select/adminselectMenu.php" method = "POST">

<button type="submit" name = "view" class = "btn4">VIEW</button><br>

</form>


</div>
          


</body>
</html>