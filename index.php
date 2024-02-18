<?php
session_start();
include "dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time()?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/owl.theme.default.min.css?v=<?php echo time(); ?>">
    <title>KnowYourCity</title>
</head>

<body>
    <div id="navbar">
        <div id="list1">
            <Ul id="navbar-list">
                <a href="index.html">
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
                        <?php
                        if($_SESSION['loggedin']=="1"){
                        ?>
                            <a href="#">
                                <li><?php echo $_SESSION['USERNAME']?></li>
                            </a>
                            <a href="Logout.php">
                                <li>LogOut</li>
                            </a>

                        <?php
                        }
                        else{
                        ?>
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
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </Ul>
        </div>
    </div>


    <div class="owl-carousel owl-theme" id="banner">
        <div class="item">
            <div class="img-full" id="first-section">
                <div class="primary-heading">
                    <h1>Know Your City</h1>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="img-full" id="second-section2">
                <div class="primary-heading">
                    <h1>Know Your City</h1>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="img-full" id="second-section3">
                <div class="primary-heading">
                    <h1>Know Your City</h1>
                </div>
            </div>
        </div>
    </div>





    <!-- first-section -->
    <!-- <div id="first-section">
        <div class="primary-heading">
            <h1>Know Your City</h1>
        </div>
    </div> -->

    <div class="welcome-section">
        <div class="welcome-heading">
            <h1>Welcome</h1>
        </div>
        <div class="welcome-desc">
            <div class="welcome-img">
                <img src="img/cafe.jpg" alt="">
            </div>
            <div class="welcome-about">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae odit minima consequuntur non voluptatibus quod odio possimus, ut, libero veritatis voluptatem? Necessitatibus qui quam, veritatis ipsa ex fugiat quaerat! Debitis aut nostrum suscipit nisi harum ea corporis repellendus neque ipsum quaerat? Reprehenderit accusantium consequatur, distinctio itaque deleniti doloribus, sequi unde fugiat ad voluptas saepe. Labore cupiditate recusandae ullam soluta dolorem aut, ea quia vero vitae mollitia asperiores voluptas facilis modi nesciunt reprehenderit dicta, cum nulla, nobis esse voluptatum repellendus excepturi ab. Debitis et rem maxime neque explicabo, dicta corrupti ipsa assumenda recusandae dolore doloremque, laudantium veniam placeat voluptatum fugiat sapiente!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos necessitatibus expedita exercitationem temporibus hic quasi deleniti cupiditate, id neque similique, repellat voluptatum explicabo unde sequi saepe! Voluptatem doloremque, minus aperiam aliquid exercitationem adipisci magni velit? Autem aspernatur modi mollitia! Ipsum ipsa maiores laudantium sequi libero, aspernatur est aliquid vel dolorum corrupti magnam. Itaque temporibus ab doloribus quo repudiandae iste maxime quam molestiae ut voluptatum hic suscipit expedita explicabo asperiores ipsum nihil, laudantium nam quas a! Nisi officiis, minima neque repellat qui fugiat? Non ullam quos dolore sapiente fuga sunt deleniti dolores? Ad odit ullam, quibusdam sunt commodi voluptatem eum in.
            </div>
        </div>

    </div>

    <!-- second-section -->
    <div id="second-section">
        <form action="Aligarh.php" method="post">
            <div class="search-bar">
                <input type="text" name="search" id="search" placeholder="Enter Your City Name">
                <button class="primary-btn">Search</button>
            </div>
        </form>
        <div id="second-section-boxes">
            <div class="city-box">
                <img src="img/redfort.jpg" alt="city-pic">
                <a href="City.php?id=2">
                    <h2 class="secondary-heading">Delhi</h2>
                </a>
            </div>
            <div class="city-box">
                <img src="img/tajhotel.jpg" alt="city-pic">
                <a href="City.php?id=4">
                    <h2 class="secondary-heading">Mumbai</h2>
                </a>
            </div>
            <div class="city-box">
                <img src="img/rumigate.jpg" alt="city-pic">
                <a href="City.php?id=3">
                    <h2 class="secondary-heading">Lucknow</h2>
                </a>
            </div>
            <div class="city-box">
                <img src="img/bab-e-syed.jpg" alt="city-pic">
                <a href="City.php?id=1">

                    <h2 class="secondary-heading">Aligarh</h2>
                </a>
                
            </div>


        </div>
    </div>





    <!-- sponsor section -->
    <h2 class="text-center" style="line-height:55px">Sponsors</h2>
        
    <div class="sponsor-section owl-carousel owl-theme">
    <?php
    $sql="select * from main_sponsers";
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
    <!-- <div class="sponsors">
        <div class="sponsor-img">
            <img src="img/tajhotel.jpg" alt="">
        </div>
        <div class="sponsor-name">
            Tata & Sons
        </div>
    </div> -->
    
    <!-- footer -->
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
    
    
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript">
        $('#banner').owlCarousel({
        nav:false,
        dots:false,
        items:1,
        loop:true,
        autoplay:true,
        smartSpeed:800
    })
    </script>
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