<!DOCTYPE html>

<?php

$serverName = 'localhost';
$username = 'root';
$password = '';
$dbname = 'assignment';
$connection = mysqli_connect($serverName, $username, $password, $dbname);



if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $userType = $_POST['usertype'];

    $sql = "SELECT * FROM loginuser WHERE  Username = '$username' AND UserType = '$userType' AND Password = '$password'";

    $result =  $connection->query($sql);

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();


        if (strcmp($row['UserType'], 'admin') == 0) {

            header("Location:../users/adminMenu.php");
            die();
        }

        if (strcmp($row['UserType'], 'Client') == 0) {

            header("Location:../users/clientMenu.php");
            die();
        }

        if (strcmp($row['UserType'], 'PropertyOwner') == 0) {

            header("Location:../users/propertyOwnerMenu.php");
            die();
        }

        if (strcmp($row['UserType'], 'Employee') == 0) {

            header("Location:../users/employeeMenu.php");
            die();
        }
    } else {

        echo "<script>
            alert('Username or password is incorrect');
            window.location.href='./login.php';
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
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SEVENA PROPERTY</title>
</head>

<body>

    <div class="login">
        <h1>SEVENA </h1>
        <h2>Property Renters</h2>


        <form action="" method="POST">

            <div class="textbox">

                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                <input type="text" name="username" placeholder="Enter Username" required>

            </div>

            <div class="textbox">

                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" name="password" id="pwd" placeholder="Enter Password" required>

            </div>

            <div class="checkBox">
                <input type="checkbox" onclick="myFunction()">Show Password <br>
            </div>
            <script>
                function myFunction() {
                    var x = document.getElementById("pwd");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                }
            </script>

            <br><br>
            <div class="option">
                <i class="fa fa-users" aria-hidden="true"></i>
                <select name="usertype">

                    <option value="client">Client</option>
                    <option value="PropertyOwner">Property Owner</option><br>
                    <option value="Employee">Employee</option>
                    <option value="admin">Admin</option><br>

                </select>

            </div>


            <button type="submit" name="login" class="btn1">LOGIN</button>


        </form>



        <form method="POST" action="./signup.php">


            <button type="submit" name="signup" class="btn2">SIGNUP</button>

        </form>


    </div>



</body>

</html>