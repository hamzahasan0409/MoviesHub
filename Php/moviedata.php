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
    <!-- table-css -->
    <link rel="stylesheet" href="..\Css\Components\table.css">
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
            <div class="play-btn-container">
                <div class="play-btn">
                    <a href="#">
                        <ion-icon name="play"></ion-icon>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- movie-details -->
    <section>
        <div class="details">
            <!-- plot -->
            <div class="movie-plot">
                <strong>plot</strong>
                <p>Thrust into an all-new adventure, a down-on-his-luck Capt. Jack Sparrow feels the winds of
                    ill-fortune blowing even more strongly when deadly ghost sailors led by his old nemesis,
                    the evil Capt. Salazar, escape from the Devil's Triangle. Jack's only hope of survival lies
                    in seeking out the legendary Trident of Poseidon, but to find it, he must forge an uneasy
                    alliance with a brilliant and beautiful astronomer and a headstrong young man in the British
                    navy.</p>
            </div>
            <div class="movie-details">
                <strong>movie details</strong>
                <br>
                <!-- production-company -->
                <div class="production-company">
                    <div class="sub-header">Production Company</div>
                    <p>Walt Disney Pictures</p>
                    <p> 500 South Buena Vista Street, Burbank, California, United States</p>
                </div>
                <!-- director -->
                <div class="director-details">
                    <div class="sub-header">Director</div>
                    <!-- director-table -->
                    <table class="director-table">
                        <thead>
                            <tr>
                                <th>Director</th>
                                <th>DOB</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Joachim Rønning</td>
                                <td>30 May 1972</td>
                            </tr>
                            <tr>
                                <td>Espen Sandberg</td>
                                <td>17 June 1971</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- actor -->
                <div class="actor-details">
                    <div class="sub-header">Actor</div>
                    <!-- actor-table -->
                    <table>
                        <thead>
                            <tr>
                                <th>Actor</th>
                                <th>Role</th>
                                <th>DOB</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Johnny Depp</td>
                                <td>Captain Jack Sparrow</td>
                                <td>9 June 1963</td>
                            </tr>
                            <tr>
                                <td>Javier Bardem</td>
                                <td>Armando Salazar</td>
                                <td>1 March 1969</td>
                            </tr>
                            <tr>
                                <td>Orlando Bloom</td>
                                <td>Will Turner</td>
                                <td>13 January 1977</td>
                            </tr>
                            <tr>
                                <td>Geoffrey Rush</td>
                                <td>Captain Barbossa</td>
                                <td>6 July 1951</td>
                            </tr>
                            <tr>
                                <td>Keira Knightley</td>
                                <td>Elizabeth Swann</td>
                                <td>26 March 1985</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- actor -->
                <div class="quotes-details">
                    <div class="sub-header">Quotes</div>
                    <!-- quotes-table -->
                    <table>
                        <thead>
                            <tr>
                                <th>Actor</th>
                                <th>Role</th>
                                <th>Quotes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Javier Bardem</td>
                                <td>Armando Salazar</td>
                                <td>Pirates had infected the seas for generations. So I vowed to eliminate them all.
                                    And then, there was this boy. Jack Sparrow. He took everything from me... And
                                    filled me with... rage</td>
                            </tr>
                            <tr>
                                <td>Will Turner</td>
                                <td>Orlando Bloom</td>
                                <td>Jack Sparrow cursed me to this life. I will have my revenge.</td>
                            </tr>
                            <tr>
                                <td>Javier Bardem</td>
                                <td>Armando Salazar</td>
                                <td>There's nowhere to hide. Find Sparrow for me.</td>
                            </tr>
                            <tr>
                                <td>Geoffrey Rush</td>
                                <td>Hector Barbossa</td>
                                <td>I've heard stories of a mighty Spanish captain who's hunted and killed thousands of men.
                                    "No, no, no, no, no. Men, no! No, no, no, no. Pirates!"</td>
                            </tr>
                        </tbody>
                    </table>
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
</body>

</html>