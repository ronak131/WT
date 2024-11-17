<!doctype html>
<html>

<head>
    <title>delete session</title>
</head>

<body>
    <?php
    include 'StartSession.php';
    session_unset(); // unset session variables
    session_destroy(); // destroy the session
    echo "session deleted";
    ?>
</body>

</html>