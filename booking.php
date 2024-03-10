<?php
// Check if the user is logged in
session_start();
if (!isset($_SESSION['user_id'])) {
  // Redirect to the login page if the user is not logged in
  header("Location: login.php");
  exit();
}

// Continue with the booking page content
?>

<!DOCTYPE html>
<html>
<head>
  <title>Booking Page</title>
</head>
<body>
  <h2>Booking Page</h2>
  <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
  <!-- Rest of the booking page content -->
</body>
</html>
