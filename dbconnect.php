<?php
$username = "root";
$password = "";
$server = "localhost";

$conn = mysqli_connect($server, $username, $password);
if(!$conn){
    echo "connection failed";
    die();
}

mysqli_select_db($conn, 'cities');

// $fname = $_POST['fname'];
// $lname = $_POST['lname'];
// $email = $_POST['email'];
// $opinion = $_POST['opinion'];

// $query = "insert into userinfo (firstname, lastname, email, opinion) values ('$fname','$lname','$email','$opinion')";

// mysqli_query($conn, $query);

// header('location:index.html');


?>