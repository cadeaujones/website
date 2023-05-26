<?php

include'./connect.php';

$query = "select * from stock_in";
$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stockin</title>
    <link rel="shortcut icon" href="./St_ Ann Catholic School.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body bg-dark>
     <div class="container">
        <div class="row mt-5">
            <div class="col">
            <button class=""><a class="" href="./products.php">back</a></button>
               <div class="card mt-5">
                <div class="card-header">
                    <h2 class="display-6 text-center">stock_in preports</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr class="bg-dark text-white">
                            <td>product-name</td>
                            <td>stockin-date</td>
                            <td>quantity</td>
                            <td>unit-price</td>
                            <td>total-price</td>
                        </tr>
                        <tr>
                            <?php
                            
                            while($row = mysqli_fetch_assoc($result))
                            {
                              ?>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['quantity']; ?></td>
                                <td><?php echo $row['unitprice']; ?></td>
                                <td><?php echo $row['totalprice']; ?></td>
                           </tr>
                            <?php
                            
                        }
                         ?>
                        
                    </table>
                </div>
               </div>
            </div>
        </div>
     </div>
     <div class="container"><button><a href="./products.php">add product</a></button>
</body>
</html> 