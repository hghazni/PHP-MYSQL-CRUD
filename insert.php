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

// Escape user inputs for security
$name = mysqli_real_escape_string($con, $_REQUEST['Name']);
 
// Inserts query execution
$sql = "INSERT INTO data (name) VALUES ('$name')";
if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

// Close Connection
$con->close();

?>