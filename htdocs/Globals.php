<!DOCTYPE html>
<html>

<head>
    <title>globals</title>
</head>

<body>
    <?php
    $x = 192;
    $y = 475;
    function add()
    {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; //accessing global variables
    }
    add();
    echo $GLOBALS['z'];
    ?>
</body>

</html>