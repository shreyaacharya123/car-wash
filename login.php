<?php
// Check if the user is already logged in
session_start();
if (isset($_SESSION['user_id'])) {
  // Redirect to the booking page if the user is already logged in
  header("Location: booking.php");
  exit();
}

// Handle the login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Validate the submitted form data (e.g., username and password)
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Perform authentication (e.g., check credentials against a database)
  // Replace this with your own authentication logic
  if ($username === 'admin' && $password === 'password') {
    // Authentication successful, store user information in the session
    $_SESSION['user_id'] = 1; // Example user ID
    $_SESSION['username'] = $username;
    
    // Redirect to the booking page
    header("Location: booking.php");
    exit();
  } else {
    // Authentication failed, show an error message
    $error = "Invalid username or password";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
</head>
<body>
  <h2>Login Page</h2>
  <?php if (isset($error)) { ?>
    <p style="color: red;"><?php echo $error; ?></p>
  <?php } ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" value="Login">
  </form>
</body>
</html>
