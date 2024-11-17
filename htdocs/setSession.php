<!doctype html>
<html>

<head>
    <title>Set Session</title>
</head>

<body>
    <?php
    $_SESSION['fname'] = 'Ronak';
    $_SESSION['lname'] = 'Panchal';
    echo "session variables are set";
    echo "<br>";
    echo $_SESSION['fname'] . " " . $_SESSION['lname'];
    ?>
</body>

</html>