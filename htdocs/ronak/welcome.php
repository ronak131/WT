<?php
// Start the session
session_start();

// Set session timeout to 10 seconds
$timeout_duration = 10;

// Check if session timeout needs to be reset
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout_duration) {
    // Last request was over 10 seconds ago, so destroy session
    session_unset();
    session_destroy();
    // Redirect to session_expired.php
    header("Location: session_expired.php");
    exit();
}

// Update last activity timestamp
$_SESSION['last_activity'] = time();

// Set the session username if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["username"] = $_POST["username"];
}

// Check if session is active to display welcome message
if (isset($_SESSION["username"])) {
    echo "<h2>Welcome, " . htmlspecialchars($_SESSION["username"]) . "!</h2>";
}
?>

<p><a href="logout.php">Logout</a></p>