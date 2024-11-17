<!doctype html>
<html>

<head>
    <title>cookie</title>
</head>

<body>
    <?php
    if (count($_COOKIE) > 0) {
        echo "cookies are enabled";
    } else {
        echo "cookies not enabled";
    }
    ?>
</body>

</html>