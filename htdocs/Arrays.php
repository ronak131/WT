<!DOCTYPE html>
<html>

<head>
    <title>Arrays</title>
</head>

<body>
    <h1>Arrays</h1>
    <?php
    $cars = ["BMW", "Bugatti", "Mercedes"];
    echo "I like " . $cars[0] . "," . $cars[1] . "&" . $cars[2]; //Indexed arrays
    echo "<br>Length of the Array is " . count($cars);
    ?>
</body>

</html>