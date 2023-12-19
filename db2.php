<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="users";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";


$sql ="SELECT * FROM mesure";
$result = mysqli_query($conn,$sql);
?>