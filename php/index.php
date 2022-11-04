<?php
$servername = "localhost";
$username = getenv('USER_DB');
$password = getenv('PASS_DB');
$dbname =  getenv('DB_NAME');

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

try
{

    $sql = 'SELECT name FROM modulo_3.lenguajes;';
    mysql_select_db($dbname) or die(mysql_error());
    $result = $conn -> query ($sql);
    
    echo '<h1> Modulo 3 Gonzalo Mora Conexión MySQL</h1>';
    if ($result->num_rows > 0) {
      echo '<h3>  Lenguajes de programación</h3></br></br>';
      echo '<ul>';
    
      while($row = $result->fetch_array()) {
        echo '<li>';
        echo "Name: " . $row["name"];
        echo '</li>';
      }
      echo '</ul>';
    } else {
      echo "0 results";
    }
    
    $conn->close();  
}
catch(Exception $e)
{
        printf("Database Error: %s\n", $e->getMessage());
        exit();

}


?>