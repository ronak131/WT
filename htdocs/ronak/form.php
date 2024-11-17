<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session Form</title>
</head>
<body>
    <h2>Enter Your Username</h2>
    <form action="welcome.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
