<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
                $dbcon=mysqli_connect("localhost:3306", "root", "usbw");
                if($dbcon == false){
                    print("Connection to DB is not established! " . mysqli_connect_error());
                } else {
                    print("Connection Successful!");
                }
            ?>
        </b>
    </div>
</body>
</html>