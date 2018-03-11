<?php
// Remote MYSQL Database Details
$servername = "sql2.freemysqlhosting.net";
$username = "sql2225891";
$password = "xP9%fE4%";
$dbname = "sql2225891";

// // Local MYSQL Database Details
// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname = "php_database";

// MYSQL Config
$con = new mysqli($servername, $username, $password, $dbname);

$id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM data WHERE id = $id"; 

if (mysqli_query($con, $sql)) {
    mysqli_close($con);
    header('Location: index.php'); //If index.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}

// Close Connection
$con->close();

?>