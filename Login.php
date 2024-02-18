<?php
include "dbconnect.php";
$error="";
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select * from users where email='$email' and password='$password'";
    $query=mysqli_query($conn,$sql);
    $num_rows=mysqli_num_rows($query);
    if($num_rows>0){
        $row=mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['loggedin']="1";
        $_SESSION['USERNAME']=$row['fname'];
        header("location:index.php");
    }
    else{
        $error="Invalid Credentials";
    }
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
    <!-- <link rel="stylesheet" href="css/feedback.css"> -->
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
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
            <label for="">Username</label>
            <input type="text" name="email" placeholder="enter your email">
            <label for="">Password</label>
            <input type="password" name="password" id="">
            <button type="submit" name="submit" class="form-btn">Submit</button>
            <p style="color:red"><?php echo $error?></p>
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