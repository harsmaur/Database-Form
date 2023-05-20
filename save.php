<?php

$fistname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];

$address = $_POST["address"];
$pincode = $_POST["pincode"];
$city = $_POST["city"];
$state = $_POST["state"];


$conn = mysqli_connect("localhost", "root", "", "dbms") or die("connection failed");
$sql = "INSERT INTO harshmaurya(fname, lname, email, mno, address,pincode,city,state) VALUES ('{$fistname}',
'{$lastname}','{$email}','{$mobile}','{$address}','{$pincode}','{$city}','{$state}' )";

$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: http://localhost/database%20form/contactfrom.php");
mysqli_close($conn);
?>