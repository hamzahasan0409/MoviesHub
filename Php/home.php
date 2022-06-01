<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- css -->
    <link rel="stylesheet" href="..\Css\Pages\home.css">
    <!-- top-bar-css -->
    <link rel="stylesheet" href="..\Css\Components\topbar.css">
    <!-- nav-bar-css -->
    <link rel="stylesheet" href="..\Css\Components\navbar.css">
    <!-- slider-css -->
    <link rel="stylesheet" href="..\Css\Components\swiper-bundle.min.css">
    <link rel="stylesheet" href="..\Css\Components\slider.css">
    <!-- latest-movies -->
    <link rel="stylesheet" href="..\Css\Components\latest.css">
    <!-- footer-css -->
    <link rel="stylesheet" href="..\Css\Components\footer.css">
    <!-- google-fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <!-- top-bar -->
    <div class="top-bar">
        <span>
            <ion-icon name="call" class="call"></ion-icon>
            123 456 789
        </span>
        <!-- social-media links-->
        <ul>
            <li><a href="#">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a></li>
            <li><a href="#">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a></li>
            <li><a href="#">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a></li>
        </ul>
    </div>
    <!-- responsive navbar -->
    <nav>
        <div class="logo">
            <a href="#"><img src="..\Images\logo.png" alt="logo">MoviesHub</a>
        </div>
        <div class="toggle">
            <a href="#">
                <ion-icon name='menu'></ion-icon>
            </a>
        </div>
        <ul class="menu">
            <li><a href="home.php" class="select">Home</a></li>
            <li><a href="movielist.php">Movie List</a></li>
            <li><a href="movieform.php">Add Movie</a></li>
            <li><a href="registration.php">Log in/Sign up</a></li>
        </ul>
    </nav>
    <!-- responsive slider -->
    <section id="main-slider">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- 1 -->
                <div class="swiper-slide">
                    <!-- slider-box -->
                    <div class="main-slider-box">
                        <!-- overlay -->
                        <a href="#" class="main-slider-overlay">
                            <ion-icon name="play"></ion-icon>
                        </a>
                        <!-- img -->
                        <div class="main-slider-img">
                            <img src="..\Images\Posters\Iron-Man-01.jpg" alt="poster 1">
                        </div>
                        <!-- text -->
                        <div class="main-slider-text">
                            <!-- length -->
                            <span class="length">126 minutes</span>
                            <!-- bottom_text -->
                            <div class="bottom-text">
                                <!-- name -->
                                <div class="movie-name">
                                    <span>2008</span>
                                    <a href="#">Iron Man</a>
                                </div>
                                <!--category-->
                                <div class="category">
                                    <a href="#">Action</a>,<a href="#">Thriller</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="swiper-slide">Slide 2</div>
                <!-- 3 -->
                <div class="swiper-slide">Slide 3</div>
                <!-- 4 -->
                <div class="swiper-slide">Slide 4</div>
            </div>
        </div>
    </section>
    <!--btns-------------------->
    <div class="slider-btns">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <!-- latest movies -->
    <section id="latest">
        <!-- heading -->
        <div class="latest-heading">
            <h1>Latest Movies</h1>
        </div>
        <!-- container -->
        <div class="post-container">
            <!-- post-box 1-->
            <div class="post-box">
                <!-- img -->
                <div class="post-img">
                    <img src="..\Images\Posters\p-1.jpg" alt="post01">
                </div>
                <div class="main-slider-text">
                    <!-- quality -->
                    <span class="length">126 minutes</span>
                    <!-- bottom text -->
                    <div class="bottom-text">
                        <!-- name -->
                        <div class="movie-name">
                            <span>2014</span>
                            <a href="#">Paranormal Activity: The Marked Ones</a>
                        </div>
                        <div class="category-rating">
                            <!--category-->
                            <div class="category">
                                <a href="#">Thriller</a>,<a href="#">Mystery</a>,<a href="#">Thriller</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer>
        <!--footer-logo--->
        <div class="footerlogo"><a href="home.php">MoviesHub</a>
        </div>
        <!--copyright----->
        <span class="copyright">
            Copyright 2022 - Hamza Hasan
        </span>
    </footer>
    <!-- scripts -->
    <!-- ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- nav-bar-js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../Js/Components/navbar.js"></script>
    <!-- slider -->
    <script src="../Js/swiper-bundle.min.js"></script>
    <script src="../Js/Components/swiper.js"></script>
</body>

</html>