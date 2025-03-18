<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8"> -->
    <meta charset="utf8mb4">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADS Latvia</title>
    <link rel="stylesheet" href="css\style.css">
</head>
<body>
    <?php
        $text = "How let us connect to DataBase";
    ?>
    <div>
        <b>Hello world! <?php echo $text ?></b>
        <br>
        <b>
            <?php
                $dbcon=mysqli_connect("localhost:3306", "root", "usbw", "test1");
                if($dbcon == false){
                    print("Connection to DB is not established! " . mysqli_connect_error());
                } else {
                    print("Connection Successful! <br>");
                    $sql = 'SELECT id, name FROM cities';
                    $result = mysqli_query($dbcon, $sql);
                    
                    if($result == false){
                        print("There is an error with connection to the database!".mysqli_connect_error());
                    } else {
                        while($row = mysqli_fetch_array($result)){
                            print("Id = " . $row['id'] . "; City Name = " . $row['name'] . "<br>");
                        }
                    }
                }
            ?>
        </b>
    </div>
</body>
</html>