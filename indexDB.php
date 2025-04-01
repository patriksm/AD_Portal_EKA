<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB conn w3Schools</title>
</head>
<body>
    <div>
        <p>Create a DataBase</p>
        <form method="POST">
            <label>Enter the name of your DB</label>
            <input type="text" id="my_mes" name="mymes"></input>
            <input type="submit" id="my_sbmt" name="mysbmt"></input>
        </form>
    </div>

    <!-- <?php 
        $mytext = $_POST['mymes'];
        echo "<p>".$mytext."</p>";
    ?> -->
    
    <?php
        $servername = "localhost:3306";
        $username = "root";
        $password = "usbw";
        $codeset = "utf8mb4_unicode_ci";
        $charset = "utf8mb4";

        // Create connection
        $conn = new mysqli($servername, $username, $password);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Create database
        $sql = "CREATE DATABASE $mytext CHARACTER SET $charset COLLATE $codeset";
        if ($conn->query($sql) === TRUE) {
            echo "Database $mytext created successfully";
        } else {
            echo "Error creating database: " . $conn->error;
        }

        $conn->close();
    ?>
</body>
</html>