<!-- Created by: Wahyu Berlianto -->
<?php
$servername = "localhost";
$username = "development";
$password = "password";
$dbname = "ParkirDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE parkir_table (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    slot INT(1) UNSIGNED NOT NULL,
    entry_datetime DATETIME
    )";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table ParkirTable created successfully";
    }

catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 