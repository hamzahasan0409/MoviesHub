<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <!-- css -->
    <link rel="stylesheet" href="..\Css\Pages\home.css">
    <!-- top-bar-css -->
    <link rel="stylesheet" href="..\Css\Components\topbar.css">
    <!-- nav-bar-css -->
    <link rel="stylesheet" href="..\Css\Components\navbar.css">
    <!-- footer-css -->
    <link rel="stylesheet" href="..\Css\Components\footer.css">
    <!-- moviedata-css -->
    <link rel="stylesheet" href="..\Css\Pages\moviedata.css">
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
            <li><a href="home.php">Home</a></li>
            <li><a href="movielist.php">Movie List</a></li>
            <li><a href="movieform.php">Add Movie</a></li>
            <li><a href="registration.php">Log in/Sign up</a></li>
        </ul>
    </nav>
    <!-- movie-data -->
    <section class="movie-banner">
        <!--==img==================================-->
        <div class="m-banner-img">
            <img alt="cover" src="..\Images\Covers\Pirates-of-the-Caribbean-Cover.jpg">
        </div>
        <!--content================================-->
        <div class="banner-container">
            <!--title-container*******************----->
            <div class="title-container">
                <!--title-top===============-->
                <div class="title-top">
                    <!--title----->
                    <div class="movie-title">
                        <h1>Pirates of the Caribbean Salazar's Revenge</h1>
                    </div>
                    <!--more-about-movie-->
                    <div class="more-about-movie">
                        <span class="length">87 minutes</span>
                        <span>28 August 2017</span>
                    </div>
                </div>
                <!--Title-botttom==========================-->
                <div class="title-bottom">
                    <!--category------->
                    <div class="category">
                        <strong>Category</strong></br>
                        <a href="#">Horror</a>, <a href="#">Mystery</a>, <a href="#">Thriller</a>
                    </div>
                    <!--trailer-btn---->
                    <a href="https://www.youtube.com/watch?v=ZgQkEf3dQ08" class="watch-btn">Watch Trailer</a>
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
</body>

</html>