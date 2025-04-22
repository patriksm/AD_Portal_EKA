<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $servername = "localhost:3306";
        $username = "root";
        $password = "usbw";

        // Create connection
        // $conn = new mysqli($servername, $username, $password);
        // Check connection
        // if ($conn->connect_error) {
        //     die("Connection failed: " . $conn->connect_error);
        // }

        // $res = mysql_query("SHOW DATABASES");
        $conn = mysql_connect($servername, $username, $password);
        $res = mysql_query("SHOW DATABASES");

        while ($row = mysql_fetch_assoc($res)) {
             echo $row['Database']."\n";
        }

        $conn->close();
?>
</body>
</html>