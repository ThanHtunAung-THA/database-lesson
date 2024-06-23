<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schooldb";

// db->connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "connection error <br>";
}else{
    echo"successfully connected <br>";
}

if (isset($_GET['sub'])) {
  # code...
  $name = $_GET['name'];
  $phone = $_GET['phone'];
  $age = $_GET['age'];
  $email = $_GET['email'];

  $query = "INSERT INTO `boylist` VALUE( '', '$name', '$phone', '$age', '$email' )";
  if ($conn->query($query) === TRUE) { 
    echo "<center>Data insert successful.</center> <br>";
  }else{
      echo "error in insertation. <br>";
  }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register form</title>
</head>
<body>
  <center>
    <form action="">
      <br>
      <h1>Student Register Form</h1><br><br>
      Enter your Name <br>
      <input type="text" name="name" id="name"><br>

      Enter your phone <br>
      <input type="text" name="phone" id="phone"><br>

      Enter your Age <br>
      <input type="number" name="age" id="age"><br>

      Enter your Email <br>
      <input type="text" name="email" id="email"><br><br>

      <input type="submit" value="Register" name="sub" id="sub">

    </form>
  </center>
</body>
</html>