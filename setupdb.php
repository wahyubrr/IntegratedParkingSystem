<?php
$servername = "localhost";
$username = "development";
$password = "password";

try {
	//create database
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE ParkirDB";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";

    

catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 