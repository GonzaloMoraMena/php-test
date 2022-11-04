<?php
$servername = "localhost";
$username = getenv('USER_DB');
$password = getenv('PASS_DB');
$dbname =  getenv('DB_NAME');

try
{

    $db = new mysqli($servername,$username,$password,$dbname);

    if ($db->connect_errno) {
        throw new Exception($db->connect_error);
    }

    if ($result = $db->query("SELECT * FROM lenguajes")) {
        printf("Select returned %d rows.\n", $result->num_rows);


        while($row = $result->fetchAssoc())
          {
            echo $row['name'];
            echo "<br />";
          }


        /* free result set */
        $result->close();
    }


    $db->close();   
}
catch(Exception $e)
{
        printf("Database Error: %s\n", $e->getMessage());
        exit();

}
?>