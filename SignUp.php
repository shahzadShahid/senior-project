<?php
include "dbconnect.php";
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="insert into users (fname,lname,email,password) values('$fname','$lname','$email','$password')";
    $query=mysqli_query($conn,$sql);
    header("location:login.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/signup.css">
    <title>SignUp</title>
</head>

<body>
    <!-- Navbar-section -->
    <div id="navbar">
        <div id="list1">
            <Ul id="navbar-list">
                <a href="index.php">
                    <li>Home</li>
                </a>
                <a href="About.php" id="">
                    <li>About</li>
                </a>
                <a href="Feedback.php" id="">
                    <li>Feedback</li>
                </a>
                <a href="" id="">
                    <li>Contact</li>
                </a>
                <div id="list2">
                    <ul id="login">
                        <a href="SignUp.php">
                            <li>SignUp</li>
                        </a>
                        <a href="Login.php">
                            <li>Login</li>
                        </a>
                    </ul>
                </div>
            </Ul>
        </div>
    </div>

    <!-- login-section -->
    <form method="post">
    <div class="login-form-container">
        <div class="login-container">
            <label for="">First Name</label>
            <input type="text" name="fname" placeholder="Enter Your First Name">
            <label for="">Last Name</label>
            <input type="text"name="lname" placeholder="Enter Your Last Name">
            <label for="">Email</label>
            <input type="email"name="email" placeholder="Enter Your Email">
            <label for="">New Password</label>
            <input type="password"name="password"  id="">
            <button type="submit" name="submit" class="form-btn">Submit</button>
        </div>
    </div>
</form>

    <!-- footer-section -->
    <div id="footer">
        <div id="address-part">
            <pre>
                    Sha Inovative Pvt Ltd &copy;
                    Mohd Habib Hall
                    AMU, Aligarh
                </pre>
        </div>
        <div class="social-media">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
    </div>
</body>

</html>