<?php
$error = 0;
$message = 0;
include './connect.php';

   if(isset($_POST['stockin'])){
       $name = $_POST['name']; 
       $date = $_POST['date'];
       $quantity = $_POST['quantity'];
       $unitprice = $_POST['unitprice'];
       $totalprice = $_POST['totalprice'];
       
       
        $insert_query = "INSERT INTO stock_in(name,date,quantity,unitprice,totalprice) VALUES('$name','$date','$quantity','$unitprice','$totalprice')";
        $result = mysqli_query($conn,$insert_query);
        if($result){
            echo"<script>alert('product details already inserted!');</script>";

            header('location:./stockin.php');
        }
            
       
   }
   
  else if(isset($_POST['stockout'])){
    $name = $_POST['name']; 
    $date = $_POST['date'];
    $quantity = $_POST['quantity'];
    $unitprice = $_POST['unitprice'];
    $totalprice = $_POST['totalprice'];
    
    
     $insert_query = "INSERT INTO stock_out(name,date,quantity,unitprice,totalprice) VALUES('$name','$date','$quantity','$unitprice','$totalprice')";
     $result = mysqli_query($conn,$insert_query);
     if($result){
         echo"<script>alert('product details already inserted!');</script>";
         header('location:./stockout.php');
     }
         
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <link rel="shortcut icon" href="./St_ Ann Catholic School.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
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
    <form class="form" action="" method="post">
        <div class="title">
            <h1>SAINT ANNE</h1>
        </div>
        <div class="sub_title">
            <h4>STOCK</h4>
        </div>
      <div class="form_field">
        <label for="name">product name:</label>
        <input class="form_input" type="text" name="name" id="name" required>
      </div>
      <div class="form_field">
        <label for="date">date:</label>
        <input class="form_input" type="date" name="date" id="date" required>
      </div>
      <div class="form_field">
        <label for="quantity">quantity:</label>
        <input class="form_input" type="text" name="quantity" id="quantity" required>
      </div>
      <div class="form_field">
        <label for="unitprice">unit price:</label>
        <input class="form_input" type="text" name="unitprice" id="unitprice" required>
      </div>
      <div class="form_field">
        <label for="totalprice">total price:</label>
        <input class="form_input" type="text" name="totalprice" id="totalprice" required>
      </div>
      <button class="submit" type="submit" name="stockin" id="submit">stockin</button>
      <button class="submit" type="submit" name="stockout" id="submit">stockout</button>
    </form>
        
        <div class="footer">
            COPY RIGHT &copy; 2023 &nbsp;   SAINT ANNE SECONDARY SCHOOL
         </div>
        </div>
</body>
</html>