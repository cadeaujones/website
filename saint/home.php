<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location: ./index.php');
    exit();
}
require_once './connect.php';
if(isset($_GET['id'])){
    $userID = $_GET['id'];
    $delete_query = "DELETE FROM users WHERE userID = '$userID'";
    $result = mysqli_query($conn,$delete_query);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="shortcut icon" href="./St_ Ann Catholic School.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="./St_ Ann Catholic School logo.jpg" width="4%">
        </div>
        <div class="navbar">
            <ul>
               <li><a href="./home.php">HOME</a></li>
               <li><a href="./products.php">PRODUCTS</a></li>
               <li><a href="./stockin.php">STOCKIN</a></li>
               <li><a href="./stockout.php">STOCKOUT</a></li>
               <li><a href="./logout.php">LOGOUT</a></li>
            </ul>
        </div>
        <div class="main">
            <h1 class="webtitle">
                ECOLE SAINT ANNE SECONDARY SCHOOL
            </h1>
            <p>
                Welcome to the homepage of Saint Anne Secondary School!
            </p>
            <p>
                
Welcome to the homepage of Saint Anne Secondary School!

At Saint Anne Secondary School, we strive to provide an exceptional educational experience for our students, fostering a nurturing and inclusive environment that promotes academic excellence, personal growth, and character development. Our commitment to excellence extends beyond the classroom, as we aim to prepare our students to become responsible global citizens and future leaders.
</p>
<p>
    Thank you for visiting our homepage. We invite you to explore more about our school, our dedicated faculty, our vibrant student community, and the numerous opportunities we offer for academic and personal growth. Should you have any further inquiries or would like to schedule a visit, please don't hesitate to contact us.
</p>
        </div>

        <div class="footer">
           COPY RIGHT &copy; 2023 &nbsp;   SAINT ANNE SECONDARY SCHOOL
        </div>
    </div>
</body>
</html>