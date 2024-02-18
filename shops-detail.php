<?php
include "dbconnect.php";
$id=$_GET['id'];
$sql="select * from stores where id=$id";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/shops.css">
    <link rel="stylesheet" href="css/shops-detail.css">
    <title>Shops-Detail</title>
</head>

<body>
    <!-- navbar-section -->
    <div id="navbar">
        <div id="list1">
            <Ul id="navbar-list">
                <a href="index.php">
                    <li>Home</li>
                </a>
                <a href="About.html" id="">
                    <li>About</li>
                </a>
                <a href="Feedback.html" id="">
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

    <!-- shops-detail-section -->
    <div id="shops-detail-container">
        <div id="shop-name">
            <h2><?php echo $row['name'];?></h2>
        </div>
        <div id="shop-photo">
            <div class="shop-photo">
                <img src="<?php echo $row['img2'];?>" alt="">
                <h4 class="text-center"><?php echo $row['title_img2'];?></h4>
            </div>
            <div class="shop-photo">
                <img src="<?php echo $row['img3'];?>" alt="">
                <h4 class="text-center"><?php echo $row['title_img3'];?></h4> 
            </div>

        </div>
        <div id="about-shop">
            <h4><?php echo $row['description'];?></h4>
        </div>
    
        <div id="shop-location">
            <h5><?php echo $row['address'];?>
            </h5>
        </div>
    </div>
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