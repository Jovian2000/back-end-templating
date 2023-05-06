<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes and requires</title>
</head>
<body>
    <?php
        include "content.php";
        for ($x = 0; $x <= 10; $x++) {
            echo "$fname<br>";
            echo "$lname<br>";
            echo "$image_code";
            echo "$txt<br>";
        }
    ?>
</body>
</html>