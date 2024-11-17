<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Cookies</title>
</head>
<body>
    <h2>Stored Details from Cookies</h2>

    <?php
    if (isset($_COOKIE["rollno"]) && isset($_COOKIE["name"])) {
        echo "<p>Name: " . htmlspecialchars($_COOKIE["name"]) . "</p>";
        echo "<p>Roll Number: " . htmlspecialchars($_COOKIE["rollno"]) . "</p>";
    } else {
        echo "<p>No cookies found. Please <a href='form.php'>submit the form</a> first.</p>";
    }
    ?>

    <p><a href="welcome.php">Go Back to Welcome Page</a></p>
</body>
</html>
