<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $database = "saint_anne";

  $conn = mysqli_connect($host,$user,$pass,$database);
  if(!$conn){
      echo"Connection Failed";
  }
?>