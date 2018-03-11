<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP MYSQL</title>
</head>
<body>

<form action="insert.php" method="post">
<label for="Name">Name: </label>
<input type="text" name="Name" id="Name">
<input type="submit" value="Submit">
</form>

<?php
    // Remote MYSQL Database Details
    $servername = "sql2.freemysqlhosting.net";
    $username = "sql2225891";
    $password = "xP9%fE4%";
    $dbname = "sql2225891";

    // Local MYSQL Database Details
    // $servername = "localhost";
    // $username = "root";
    // $password = "root";
    // $dbname = "php_database";

    // MYSQL Config
    $con = new mysqli($servername, $username, $password, $dbname);

    // Checks to see if 
    if ($con -> connect_error) {
        die ("Failed");
        } else {
        echo "Successful";
        }﻿
?>
<br />
<br />
<?php
    // Selects all columns from table
    $query = "SELECT * FROM data";
    $result = $con->query($query);
    $comma = '"';

    if ($result->num_rows > 0) {
        // output data of each row
        echo "<ol>";
        while($row = $result->fetch_assoc()) {
            echo "<li>" .$row["name"] . " ";
            echo "<a href='delete.php?id=".$row['id']."'>Delete</a>"."";
            echo " <form action='update.php' method='post'> ";
            echo "<input name='entry".$row['id']."'></a>"." ";
            echo "<button href='update.php?id=".$row['id']."'>Update</a>"."</li>"."</form>"."<br>";
        }
        echo "</ol>";        
    } else {
        echo "0 results";
    }

    // Close Connection
    $con->close();
?>
    
</body>
</html>