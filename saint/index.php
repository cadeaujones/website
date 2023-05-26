<?php
$error = 0;
$message = 0;
require_once './connect.php';

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $select_query = "SELECT * FROM register WHERE username = '$username'";
  $result = mysqli_query($conn, $select_query);
  
  if ($result) {
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        if ($password == $row['password']) {
          session_start();
          $_SESSION['user'] = $row['username'];
          echo "
          <script>
            alert('Login successful!');
            window.location.href = './home.php';
          </script>";
          exit();
        } else {
          $error = 1;
          $message = "Incorrect password!";
        }
      }
    } else {
      $error = 1;
      $message = "User not found!";
    }
  } else {
    $error = 1;
    $message = "Database error: " . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Login</title>
  <link rel="shortcut icon" href="./St_ Ann Catholic School.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
  <div class="container">
    <form class="form" action="" method="post">
      <div class="title">
        <h1>SAINT ANNE</h1>
      </div>
      <div class="sub_title">
        <h4>LOGIN</h4>
      </div>
      <div class="form_field">
        <label for="username">Username:</label><br>
        <input class="form_input" type="text" name="username" id="username" required>
      </div>
      <div class="form_field">
        <label for="password">Password:</label><br>
        <input class="form_input" type="password" name="password" id="password" required>
      </div>
      <button class="submit" type="submit" name="submit" id="submit">Login</button>
      <p class="reg">
        Don't have an account?<button><a href="./register.php">Register</a></button>
      </p>
      <?php if ($error) : ?>
        <div class="error_message"><?php echo $message; ?></div>
      <?php endif; ?>
    </form>
  </div>
</body>
</html>
