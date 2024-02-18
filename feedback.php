<?php 
include "dbconnect.php";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$opinion = $_POST['opinion'];

$query = "insert into userinfo (firstname, lastname, email, opinion) values ('$fname','$lname','$email','$opinion')";

mysqli_query($conn, $query);

header('location:index.html');

?>