<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forget Password</title>
  <!-- Add your CSS and other meta tags if needed -->
</head>
<body>
  <!-- Navbar -->
  <?php include_once("./templates/header.php"); ?>
  <br/><br/>
  <div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      // Here you can implement the forget password logic.
      // Retrieve the email from the submitted form.
      $email = $_POST["email"];

      // Validate the email (you can add more validation here if needed).

      // Simulate a reset password process by displaying a success message.
      $message = "An email with reset instructions has been sent to $email";
      header("Location: forget_password.php?msg=" . urlencode($message));
      exit;
    }
    ?>
    <div class="card mx-auto" style="width: 20rem;">
      <img class="card-img-top mx-auto" style="width:60%;" src="./images/login.png" alt="Login Icon">
      <div class="card-body">
        <form method="post" id="form_forget_password">
          <div class="form-group">
            <label for="email">Enter your email address:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
          </div>
          <button type="submit" class="btn btn-primary">Reset Password</button>
        </form>
      </div>
      <div class="card-footer"><a href="index.php">Back to Login</a></div>
    </div>
  </div>
</body>
</html>
