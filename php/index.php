<?php
$servername = "localhost";
$username = getenv('USER_DB');
$password = getenv('PASS_DB');
$dbname =  getenv('DB_NAME');

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT name FROM lenguajes';
$result = $conn -> query ($sql);
var_dump($result); echo '<br>';
echo '<h1> Modulo 3 Gonzalo Mora  MySQL</h1>';
echo '<h3>  Lenguajes de programación</h3></br></br>';
echo '<ul>';

while($row = $result->fetch_array()) {
  echo '<li>';
  echo "Name: " . $row["name"];
  echo '</li>';
}
echo '</ul>';

$conn->close();
?>