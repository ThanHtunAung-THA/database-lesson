<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schooldb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  echo "connection error <br>";
}else{
  echo"successfully connected <br>";
}

$query = "SELECT * FROM boylist";
$data = $conn->query($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data SELECT</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
  <table class="table table-success">
    <thead>
      <tr>
        <td>#</td>
        <td>Name</td>
        <td>Phone</td>
        <td>Age</td>
        <td>Email</td>
      </tr>
      <?php while (list( $id, $name, $phone, $age, $email )= mysqli_fetch_array($data)) { ?>
      <tr>
        <td> <?php echo $id ?> </td>
        <td> <?php echo $phone ?> </td>
        <td> <?php echo $name ?> </td>
        <td> <?php echo $age ?> </td>
        <td> <?php echo $email ?> </td>
     
      </tr>
      
      <?php } ?>
      
    </tbody>
  </table>
</body>
</html>
