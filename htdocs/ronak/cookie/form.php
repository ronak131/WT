<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session and Cookie Example</title>
</head>
<body>
    <h2>Enter Your Details</h2>
    <form action="welcome.php" method="post">
        <label for="rollno">Roll Number:</label>
        <input type="text" id="rollno" name="rollno" required><br><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
