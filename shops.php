<?php
include "dbconnect.php";
$type_id=$_GET['type_id'];
$city_id=$_GET['city_id'];
$sql="select * from stores where city_id= $city_id and type_id=$type_id";
$query=mysqli_query($conn,$sql);

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
    <title>City Shops</title>
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

    <!-- shops-section -->
    <div id="shops-container">
        <?php 
        while($row=mysqli_fetch_assoc($query)){
        ?>
        
    
        <div class="shops">
            <div class="shops-img">
                <img src="<?php echo $row['img1'];?>" alt="">

            </div>
            <div class="shop-name">
                <a href="shops-detail.php?id=<?php echo $row['id'];?>">
                    <h2><?php echo $row['name'];?></h2>
                </a>
                <a href=""><h5><?php echo $row['short_desc'];?></h5></a>
            </div>
        </div>
        <?php
        }
        ?>
        <!-- <div class="shops">
            <div class="shops-img">
                <img src="img/palmtree.jpg" alt="">

            </div>
            <div class="shop-name">
                <a href="">
                    <h2>Palmtree</h2>
                </a>
                <a href=""><h5>Restaurants & Hotel</h5></a>
            </div>
        </div>
        <div class="shops">
            <div class="shops-img">
                <img src="img/dominos.jpg" alt="">
            </div>
            <div class="shop-name">
                <a href="">
                    <h2>Dominos</h2>
                </a>
                <a href=""><h5>Restaurants</h5></a>
            </div>
        </div>
        <div class="shops">
            <div class="shops-img">
                <img src="img/milkbar.jpg" alt="">

            </div>
            <div class="shop-name">
                <a href="">
                    <h2>Milkbar</h2>
                </a>
                <a href=""><h5>Restaurants & studio</h5></a>
            </div>
        </div> -->

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