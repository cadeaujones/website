<?php
if(isset($_POST['stockin'])){
    $stockin = $_POST['stockin'];

    // Connect to the database
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "saint_anne";

    $conn = new mysqli($host, $user, $pass, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch data from the table
    $sql = "SELECT * FROM $stockin";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display the data in an HTML table
        echo "<table>";
        echo "<tr><th>Name</th><th>Date</th><th>Quantity</th><th>Unit Price</th><th>Total Price</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
            echo "<td>" . $row["quantity"] . "</td>";
            echo "<td>" . $row["unitprice"] . "</td>";
            echo "<td>" . $row["totalprice"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
}
?>
