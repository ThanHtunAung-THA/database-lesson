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
$i = 1;
echo "
    <table class='table table-success'>
    <thead>
      <tr>
        <td>No.</td>
        <td>ID</td>
        <td>Name</td>
        <td>Phone</td>
        <td>Age</td>
        <td>Email</td>
      </tr>
";
  while (list( $id, $name, $phone, $age, $email )= mysqli_fetch_array($data)) {
    echo "
    <tr>
      <td> ".$i++." </td>
      <td> ".$id." </td>
      <td> ".$name." </td>
      <td> ".$phone." </td>
      <td> ".$age." </td>
      <td> ".$email." </td>
    </tr>
    ";
  }
echo"
  </tbody>
  </table>
  ";

?>
