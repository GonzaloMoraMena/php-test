<?php
$servername = "localhost";
$username = getenv('USER_DB');
$password = getenv('PASS_DB');
$dbname =  getenv('DB_NAME');

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM lenguajes";
$result = $conn->query($sql);
echo "<h1> Modulo 3 Gonzalo Mora Conexión MySQL</h1>";
if ($result->num_rows > 0) {
  echo "<h3>  Lenguajes de programación</h3></br></br>";
  echo "<ul>";
  while($row = $result->fetch_assoc()) {
    echo "<li> id: " . $row["id"]. " - Name: " . $row["name"] "</li>";
  }
  echo "</ul>";
} else {
  echo "0 results";
}

$conn->close();
?>