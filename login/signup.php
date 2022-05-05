<!DOCTYPE html>

<?php

$serverName = 'localhost';
$username = 'root';
$password = '';
$dbname = 'assignment';
$connection = mysqli_connect($serverName, $username, $password, $dbname);

if (isset($_POST['login'])) {

  $USERNAME = $_POST['username'];
  $PASSWORD = $_POST['password'];
  $USERTYPE = $_POST['usertype'];



  $sql = "INSERT INTO loginUser (`UserName`, `Password`, `UserType`) VALUES ('$USERNAME','$PASSWORD','$USERTYPE')";

  $resultClient = $connection->query($sql);

  if ($resultClient == TRUE) {

    echo "<script>
    alert('Registration Successfully.');
    window.location.href='./login.php';
    </script>";
    die();
  } else {

    echo "<script>
      alert('Registration Failure!!');
      window.location.href='./signup.php';
      </script>";
    die();
  }
}


?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTRATION</title>
</head>

<body>


  <h1>REGISTRATION</h1>



  <form action="" method="POST">

    <p>User Name :</p>
    <input type="text" name="username" placeholder="Username" required>


    <p>Password :</p>
    <input type="password" name="password" placeholder="Password" required>

    <br><br>




    <label for="usertype">User Type :</label>
    <select name="usertype">

      <option value="Client">Client</option>
      <option value="PropertyOwner">Property Owner</option>
      <option value="Employee">Employeer</option>


    </select>


    <br><br>
    <button type="submit" name="login">LOG IN</button>
  </form>




</body>

</html>