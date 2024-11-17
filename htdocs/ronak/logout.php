<?php
// Start the session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

echo "<h2>You have been logged out.</h2>";
echo '<p><a href="form.php">Go back to the form</a></p>';
?>
