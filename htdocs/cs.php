<!DOCTYPE html>
<html>

<head>
    <title>Case Sensitive</title>
</head>

<body>
    <p>Keywords are no case sensitive</p>
    <?php
    echo "I am not case sensitive";
    ECHO "same but in capital"; // This will be printed
    ?>
    <br>
    <p>But variables are case sensitive</p>
    <?php
    $name = "Ronak";
    echo "My name is " . $name . "";
    echo "My name is " . $NAME . ""; //This will not be printed instead generates a warning
    ?>
</body>

</html>