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
    $to = "himanshuhada9602@gmail.com";
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


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" sizes="32x32" href="images/himanshu-update.png">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Freelancehimanshu</title>


</head>

<body>
  <!-- Main Container -->
  <main>
    <!-- Header Logo -->
    <!-- <div class="header-logo"></div> -->
    <!-- Title Section -->
    <article class="title-section">
      <h1>We are launching <span class="soon">soon!</span></h1>
      <p class="title-info">Subscribe and get notified</p>
    </article>
    <!-- Input Section -->
    <article class="input-section">

    <!-- Form HTML goes here -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <label for="email">Email:</label>
  <input type="text" name="email" id="email" value="<?php if (isset($email)) echo $email; ?>">
  <input type="submit" name="submit" value="Sign up">
</form>

      <input id="email-input" class="email-input" type="email" placeholder="Your email address..">
      <label for="email-input" class="email-input-message"></label>

      <button class="submit-btn">Notify Me</button>
    </article>

    <?php
// Show an error message if there is one
if (isset($error)) echo "<p>$error</p>";

// Show the success message in a popup if there is one
if (isset($success)) {
  echo "<script type='text/javascript'>alert('$success');</script>";
}
?>

    <article>

      <!-- Statistics IMG-->
      <div class="statistics-img"></div>
    </article>
  </main>
  <!-- Footer -->
  <footer>
    <!-- Social Media -->
    <section class="social-media">
      <a href="https://www.linkedin.com/in/himanshu-hada-2b96a41b4" class="linkedinn"><i class="fa-brands fa-linkedin"></i></a>
      <a href="https://twitter.com/_himanshu_hada_?s=09" class="twitter"><i class="fa-brands fa-twitter"></i></a>
      <a href="https://instagram.com/freelancehimanshu?igshid=YmMyMTA2M2Y=" class="instagram"><i class="fa-brands fa-instagram"></i></a>
      <a href="https://github.com/DarkBunniee" class="github"><i class="fa-brands fa-github"></i></a>
    </section>
    <!-- Copyright -->
    <p class="copyright"> 2023 &copy; Copyright freelancehimanshu.tech. All rights reserved.</p>
  </footer>

  <script src="app.js"></script>

</body>

</html>