<!-- This is with success message -->
<?php

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the form data
  $email = $_POST['email'];

  // Validate the email address
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "Invalid email address";
  } else {
    // Send an email notification
    $to = "you@example.com";
    $subject = "Coming soon notification";
    $message = "A user has signed up for notification about your coming soon page: $email";
    $headers = "From: noreply@example.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    mail($to, $subject, $message, $headers);

    // Set a success message
    $success = "Thank you! You will be notified as soon as the site is visible on this domain.";
  }
}

?>

<!-- Form HTML goes here -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <label for="email">Email:</label>
  <input type="text" name="email" id="email" value="<?php if (isset($email)) echo $email; ?>">
  <input type="submit" name="submit" value="Sign up">
</form>

<?php
// Show an error message if there is one
if (isset($error)) echo "<p>$error</p>";

// Show the success message in a popup if there is one
if (isset($success)) {
  echo "<script type='text/javascript'>alert('$success');</script>";
}
?>
