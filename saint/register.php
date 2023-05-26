<?php
$error = 0;
$message = 0;
include './connect.php';

   if(isset($_POST['submit'])){
       $username = $_POST['username']; 
       $password = $_POST['password'];
       
        $insert_query = "INSERT INTO register(username,password) VALUES('$username','$password')";
        $result = mysqli_query($conn,$insert_query);
        if($result){
            echo"<script>alert('User Registered successfuly!');</script>";
            header('location:./home.php');
        }
            
       
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="shortcut icon" href="./St_ Ann Catholic School.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
    <form class="form" action="" method="post">
        <div class="title">
            <h1>SAINT ANNE</h1>
        </div>
        <div class="sub_title">
            <h4>REGISTER</h4>
        </div>
      <div class="form_field">
        <label for="username">username:</label>
        <input class="form_input" type="text" name="username" id="username" required>
      </div>
      <div class="form_field">
        <label for="password">password:</label>
        <input class="form_input" type="text" name="password" id="password" required>
      </div>
      <button class="submit" type="submit" name="submit" id="submit">register</button>
      <p class="reg">
       Already have an acccount? &nbsp;<button><a href="./index.php"> login now</a></button>
      </p>
    </form>
</body>
</html>