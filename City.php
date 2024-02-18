<?php 
include "dbconnect.php";
$id=$_GET['id'];
if(($id>4)||($id<1)){
    ?>
    <script>
        window.location.href="index.html";
    </script>
    <?php
}
if(isset($_POST['submit_btn'])){
    $name=$_POST['name'];
    $review=$_POST['review'];
    $date=date('Y-m-d');
    $sql8="insert into reviews (city_id,name,review,date) values('$id','$name','$review','$date')";
    $query8=mysqli_query($conn,$sql8);
}
$sql="select * from city where id = $id";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/city.css?v=<?php echo time()?>">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/owl.theme.default.min.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time()?>">
    <title><?php echo $row['name']; ?> City</title>
</head>

<body>
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
    
    <div id="main">
        <div id="city-heading-section">
            <h1 class="city-heading">
                Welcome To <?php echo $row['name'] ?>
            </h1>
        </div>

        <!-- history-section -->

        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="<?php echo $row['img1']; ?>" style="">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="<?php echo $row['img2']; ?>" style="">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="<?php echo $row['img3']; ?>" style="">
                <div class="text">Caption Three</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <div id="history-section">
            <p><?php echo $row['history']; ?></p>
        </div>

        <!-- stores section -->
        <div id="stores">
            <h3 class="stores-heading">
                Popular Categories
            </h3>
            <div class="stores-container">
                <div class="city-stores">
                    <img src="img/restaurants.jpg" alt="">
                    <a href="shops.php?type_id=1&city_id=<?php echo $id;?>">
                        <h4>Restaurants</h4>
                    </a>
                </div>
                <div class="city-stores">
                    <img src="img/medical-store.jpg" alt="">
                    <a href="shops.php?type_id=2&city_id=<?php echo $id;?>">
                        <h4>Pharmacy</h4>
                    </a>
                </div>
                <div class="city-stores">
                    <img src="img/cafe.jpg" alt="">
                    <a href="shops.php?type_id=3&city_id=<?php echo $id;?>">
                        <h4>Cafe</h4>
                    </a>
                </div>
                <div class="city-stores">
                    <img src="img/hospital.jpg" alt="">
                    <a href="shops.php?type_id=4&city_id=<?php echo $id;?>">
                        <h4>hospital</h4>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- sponsors -->
    <h2 class="text-center" style="line-height:55px">Sponsors</h2>
    <div class="sponsor-section owl-carousel owl-theme">
    <?php
    $sql="select * from city_sponsors where city_id=$id order by city_sponsors.id desc";
    $query=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($query)){
        ?>
        <div class="item">
            <div class="sponsors">
                <div class="sponsor-img">
                    <img src="<?php echo $row['img'];?>" alt="">
                </div>
                <div class="sponsor-name">
                <?php echo $row['name'];?>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>  
    
    
    <!-- reviews-section -->
    <div class="reviews-section">
        <h1 class="text-center" style="height:55px">Reviews</h1>
        <?php
        $sql6="select * from reviews where city_id=$id";
        $query6 = mysqli_query($conn, $sql6);
        while($row=mysqli_fetch_assoc($query6)){
            ?>
            <div class="users-review">
                <div class="users-name">
                    <h3><?php echo $row['name']?></h3><?php echo $row['date']?>
                    <br>
                </div>
                <div class="users-opinion">
                <?php echo $row['review']?>
                </div>
            </div>
            <?php
        }
        ?>
        <div class=.reviews-form>
            <form method="post">
                <div class=users-form>
                    <input type="text" name="name" placeholder="Enter Your Name" required>
                </div>
                <div class=users-form>
                <textarea name="review" id="" cols="30" rows="10" placeholder="Give Your views" required></textarea>
                </div>
                <div class=users-form>
                    <button type="submit" name="submit_btn">Submit</button>
                </div>
            </form>
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

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
        </script>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript">
        $('.sponsor-section').owlCarousel({
        margin:10,
        nav:false,
        dots:false,
        items:5,
        loop:true,
        autoplay:true,
        smartSpeed:800
    })
    </script>
</body>

</html>