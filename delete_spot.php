<!-- Created by: Wahyu Berlianto -->
<?php
$servername = "localhost";
$username = "development";
$password = "password";
$dbname = "ParkirDB";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 
    // $sql = 'SELECT id FROM parkir_table WHERE slot = 0 LIMIT 1';
 
    // $q = $pdo->query($sql);
    // $q->setFetchMode(PDO::FETCH_ASSOC);
    // $id = $q->fetch();
    // echo json_encode($id);

    // $id = $id['id'];
    $id = $_POST['id'];
    $sql = 'UPDATE parkir_table SET slot = 0, entry_datetime = NULL WHERE id = ' . $id;
    $statement = $pdo->prepare($sql);
    $statement->execute();

} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>