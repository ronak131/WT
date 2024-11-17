<?php
// Start the session
session_start();

// Check if the form is submitted and set session variables
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["rollno"]) && isset($_POST["name"])) {
    // Store roll number and name in session variables
    $_SESSION["rollno"] = $_POST["rollno"];
    $_SESSION["name"] = $_POST["name"];
}

// If session variables are set, store them in cookies
if (isset($_SESSION["rollno"]) && isset($_SESSION["name"])) {
    // Set cookies with session values (expires in 1 day)
    setcookie("rollno", $_SESSION["rollno"], time() + (86400), "/"); // 86400 seconds = 1 day
    setcookie("name", $_SESSION["name"], time() + (86400), "/"); // 86400 seconds = 1 day

    echo "<h2>Welcome, " . htmlspecialchars($_SESSION["name"]) . " (Roll No: " . htmlspecialchars($_SESSION["rollno"]) . ")!</h2>";
    echo "<p>Your details have been stored in cookies.</p>";
} else {
    echo "<h2>Please submit the form first.</h2>";
}
?>

<p><a href="show_cookies.php">Show Cookies</a></p>
<p><a href="logout.php">Logout</a></p>
