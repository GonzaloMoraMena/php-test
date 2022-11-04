<?php
$servername = "localhost";
$username = getenv('USER_DB');
$password = getenv('PASS_DB');
$dbname =  getenv('DB_NAME');

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name FROM lenguajes;";
$result = mysql_query($sql) or die(mysql_error());
var_dump($result); echo '<br>';
echo '<h1> Modulo 3 Gonzalo Mora Conexión MySQL</h1>';
if ($result->num_rows > 0) {
  echo '<h3>  Lenguajes de programación</h3></br></br>';
  echo '<ul>';

  while($row =  mysql_fetch_array($result)) {
    echo '<li>';
    echo "Name: " . $row["name"];
    echo '</li>';
  }
  echo '</ul>';
} else {
  echo "0 results";
}

$conn->close();
?>