<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamerPro</title>
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel = "stylesheet" href = "css/normalize.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "css/main.css">
</head>
<body>
  ÆáááááXAZ
    <!-- navbar -->
    <nav class = "navbar">
        <div class = "container flex">
            <a href = "index.php" class = "navbar-brand">Dusk<span>Gaming</span></a>

            <div class = "navbar-collapse">
                <button type = "button" class = "navbar-toggler-close">
                    <i class = "fas fa-times"></i>
                </button>
                <ul class = "navbar-nav">
                    <li class = "nav-item">
                        <a href = "index.php" class = "nav-link">home</a>
                    </li>
                    <li class = "nav-item">
                        <a href = "#" class = "nav-link">games</a>
                        <span class = "nav-item-dropdown">
                            <i class = "fas fa-chevron-down"></i>
                        </span>
                        <ul class = "nav-item-dropdown-content">
                            <li><a href = "#">PS4</a></li>
                            <li><a href = "#">Xbox</a></li>
                            <li><a href = "#">PUBG</a></li>
                        </ul>
                    </li>
                    <li class = "nav-item">
                        <a href = "#" class = "nav-link">news</a>
                        <span class = "nav-item-dropdown">
                            <i class = "fas fa-chevron-down"></i>
                        </span>
                        <ul class = "nav-item-dropdown-content">
                            <li><a href = "#">Latest</a></li>
                            <li><a href = "#">Popular</a></li>
                            <li><a href = "#">Archive</a></li>
                        </ul>
                    </li>
                    <li class = "nav-item">
                        <a href = "#" class = "nav-link">reviews</a>
                        <span class = "nav-item-dropdown">
                            <i class = "fas fa-chevron-down"></i>
                        </span>
                        <ul class = "nav-item-dropdown-content">
                            <li><a href = "#">Entertainment</a></li>
                            <li><a href = "#">Games</a></li>
                        </ul>
                    </li>
                    <li class = "nav-item">
                        <a href = "#" class = "nav-link">videos</a>
                    </li>
                    <li class = "nav-item">
                        <a href = "#" class = "nav-link">gear</a>
                        <span class = "nav-item-dropdown">
                            <i class = "fas fa-chevron-down"></i>
                        </span>
                        <ul class = "nav-item-dropdown-content">
                            <li><a href = "#">Gaming PC</a></li>
                            <li><a href = "#">Gaming Chair</a></li>
                            <li><a href = "#">Gaming Desk</a></li>
                            <li><a href = "#">Gaming Accessories</a></li>
                        </ul>
                    <li class = "nav-item">
                        <a href = "#" class = "nav-link">account</a>
                        <span class = "nav-item-dropdown">
                            <i class = "fas fa-chevron-down"></i>
                        </span>
                        <ul class = "nav-item-dropdown-content">

                            <ul class="menu-member">
                                <?php
                                if(isset($_SESSION["useruid"]))
                                {
                                    ?>
                                    <li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
                                    <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
                                    <li><a href="myshop/index.php">crud</a></li>
                                <li><a href="FM/upload.php">upload files for articles</a></li>
                            </ul>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <li><a href="loginuser.php">SIGN UP</a></li>
                                    <li><a href="loginuser.php" class="header-login-a">LOGIN</a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </ul>

                    </li>
                </ul>
            </div>

            <div class = "nav-icons-group">
                <form class = "search-form">
                    <div class = "search-icon-group">
                        <input type = "search" class = "search-control">
                        <button type = "submit" class = "search-icon">
                            <i class = "fas fa-search"></i>
                        </button>
                    </div>
                </form>
                <button type = "button" class = "navbar-toggler-open">
                    <i class = "fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- header -->
    <header id = "header">
        <div class = "container">
            <div class = "header-content">
                <div class = "header-item">
                    <img src = "resources/images/banner-img-1.jpg">
                    <div class = "header-item-text">
                        <h2>PLAY THE ULTIMATE EDITION NOW!</h2>
                        <p class = "text">Experience the complete story from the beginning to the End! Minecraft Dungeons: Ultimate Edition includes the base game and all six DLCs.</p>
                        <div>
                            <small>By Bradley van Welij</small>
                            <a href = "Mainpages/mainpage2.php">Read More</a>
                        </div>
                    </div>
                </div>

                <div class = "header-item">
                    <img src = "resources/images/banner-img-2.jpg">
                    <div class = "header-item-text">
                        <h2>PUBG: New State (Mobile) crosses 40 million pre-registrations</h2>
                        <p class = "text">Kraftson is gearing up to launch its second battle royale mobile game after Battlegrounds Mobile India called PUBG: New State. The game will follow the same battle royale blueprints as previous titles.</p>
                        <div>
                            <small>By Colin</small>
                            <a href = "Mainpages/mainpage1.php">Read More</a>
                        </div>
                    </div>
                </div>

                <div class = "header-item">
                    <img src = "resources/images/banner-img-3.jpg">
                    <div class = "header-item-text">
                        <h2>Apex Legends Evolution Collection Events</h2>
                        <p class = "text">Learn what a Legend can become in the Apex Legends Evolution Collection Event.</p>
                        <div>
                            <small>By Colin</small>
                            <a href = "#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end of header -->

    <!-- main -->
    <main>
        <!-- news section -->
        <section id = "news">
            <div class = "title">
                <div class = "container">
                    <h2>
                        <i class = "fas fa-rss"></i> News
                    </h2>
                </div>
            </div>

                <div class = "container">
                    <!-- news latest -->
                    <div class = "news-latest">
                        <h3>Latest News</h3>
                        <article>
                            <div class = "item-img">
                                <img src = "resources/images/news-1.jpg">
                                <span>
                                    <i class = "fas fa-comment"></i> 8.4
                                </span>
                            </div>
                            <div class = "item-text">
                                <a href = "#" class = "h1">
                                    <span class = "category">latest</span>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                </a>
                                <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, facilis quia. Officia similique omnis optio!</p>
                                <div class = "date">News | Latest | 11:00 AM</div>
                            </div>
                        </article>

                        <article>
                            <div class = "item-img">
                                <img src = "resources/images/news-2.jpg">
                                <span>
                                    <i class = "fas fa-comment"></i> 7.4
                                </span>
                            </div>
                            <div class = "item-text">
                                <a href = "#" class = "h1">
                                    <span class = "category">latest</span>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                </a>
                                <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, facilis quia. Officia similique omnis optio!</p>
                                <div class = "date">News | Latest | 11:00 AM</div>
                            </div>
                        </article>

                        <article>
                            <div class = "item-img">
                                <img src = "resources/images/news-3.jpg">
                                <span>
                                    <i class = "fas fa-comment"></i> 6.5
                                </span>
                            </div>
                            <div class = "item-text">
                                <a href = "#" class = "h1">
                                    <span class = "category">latest</span>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                </a>
                                <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, facilis quia. Officia similique omnis optio!</p>
                                <div class = "date">News | Latest | 11:00 AM</div>
                            </div>
                        </article>

                        <article>
                            <div class = "item-img">
                                <img src = "resources/images/news-4.jpg">
                                <span>
                                    <i class = "fas fa-comment"></i> 7.8
                                </span>
                            </div>
                            <div class = "item-text">
                                <a href = "#" class = "h1">
                                    <span class = "category">latest</span>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                </a>
                                <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, facilis quia. Officia similique omnis optio!</p>
                                <div class = "date">News | Latest | 11:00 AM</div>
                            </div>
                        </article>

                        <article>
                            <div class = "item-img">
                                <img src = "resources/images/news-5.jpg">
                                <span>
                                    <i class = "fas fa-comment"></i> 8.5
                                </span>
                            </div>
                            <div class = "item-text">
                                <a href = "#" class = "h1">
                                    <span class = "category">latest</span>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                </a>
                                <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, facilis quia. Officia similique omnis optio!</p>
                                <div class = "date">News | Latest | 11:00 AM</div>
                            </div>
                        </article>
                    </div>
                    <!-- end of news latest -->

                    <!-- news popular -->
                    <div class = "news-popular">
                        <h3>Popular News</h3>
                        <div class = "popular-list">
                            <article>
                                <div class = "item-img">
                                    <img src = "resources/images/news-6.jpg">
                                </div>
                                <div class = "item-text">
                                    <a href = "#" class = "h1"><span class = "category">popular</span>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</a>
                                </div>
                            </article>

                            <article>
                                <div class = "item-img">
                                    <img src = "resources/images/news-7.jpg">
                                </div>
                                <div class = "item-text">
                                    <a href = "#" class = "h1"><span class = "category">popular</span>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</a>
                                </div>
                            </article>

                            <article>
                                <div class = "item-img">
                                    <img src = "resources/images/news-8.jpg">
                                </div>
                                <div class = "item-text">
                                    <a href = "#" class = "h1"><span class = "category">popular</span>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</a>
                                </div>
                            </article>

                            <article>
                                <div class = "item-img">
                                    <img src = "resources/images/news-9.jpg">
                                </div>
                                <div class = "item-text">
                                    <a href = "#" class = "h1"><span class = "category">popular</span>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</a>
                                </div>
                            </article>

                            <article>
                                <div class = "item-img">
                                    <img src = "resources/images/news-10.jpg">
                                </div>
                                <div class = "item-text">
                                    <a href = "#" class = "h1"><span class = "category">popular</span>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <!-- end of news popular -->
                </div>
        </section>
        <!-- end of news section -->

        <!-- videos section -->
        <section id = "videos">
            <div class = "title">
                <div class = "container">
                    <h2>
                        <i class = "fas fa-video"></i> Videos & Trailers
                    </h2>
                </div>
            </div>
            <div class = "container">
                <article>
                    <div class = "item-video">
                        <video controls poster = "resources/videos/video-1-poster.webp">
                            <source src = "resources/videos/video-1.mp4" type = "video/mp4">
                        </video>
                    </div>
                    <div class = "item-text">
                        <a href = "https://www.youtube.com/watch?v=d8B1LNrBpqc" class = "h1"><span class = "category">trailer</span>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</a>
                        <p class = "text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil reprehenderit facere laborum laudantium, modi quos.</p>
                    </div>
                </article>

                <article>
                    <div class = "item-video">
                        <video controls poster = "resources/videos/video-2-poster.webp">
                            <source src = "resources/videos/video-2.mp4" type = "video/mp4">
                        </video>
                    </div>
                    <div class = "item-text">
                        <a href = "https://www.youtube.com/watch?v=TU94YL6QrM8" class = "h1"><span class = "category">trailer</span>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</a>
                        <p class = "text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil reprehenderit facere laborum laudantium, modi quos.</p>
                    </div>
                </article>

                <article>
                    <div class = "item-video">
                        <video controls poster = "resources/videos/video-3-poster.webp">
                            <source src = "resources/videos/video-3.mp4" type = "video/mp4">
                        </video>
                    </div>
                    <div class = "item-text">
                        <a href = "https://www.youtube.com/watch?v=TU94YL6QrM8" class = "h1"><span class = "category">trailer</span>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</a>
                        <p class = "text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil reprehenderit facere laborum laudantium, modi quos.</p>
                    </div>
                </article>

                <article>
                    <div class = "item-video">
                        <video controls poster = "resources/videos/video-4-poster.webp">
                            <source src = "resources/videos/video-4.mp4" type = "video/mp4">
                        </video>
                    </div>
                    <div class = "item-text">
                        <a href = "https://www.youtube.com/watch?v=TU94YL6QrM8" class = "h1"><span class = "category">trailer</span>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</a>
                        <p class = "text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil reprehenderit facere laborum laudantium, modi quos.</p>
                    </div>
                </article>
            </div>
        </section>
        <!-- end of videos section -->

        <!-- promo section -->
        <section id = "promo" class = "flex">
            <div class = "container">
                <span>join the battle</span>
                <h2>Fortnight Battle Royale</h2>
                <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta cupiditate molestias ad quia accusantium cumque.</p>
                <div class = "btn-groups flex">
                    <a href = "https://www.youtube.com/watch?v=Q6PNL_WZsFk">
                        <i class = "fas fa-play"></i> watch trailer
                    </a>
                    <a href = "https://www.epicgames.com/fortnite/en-US/home">
                        <i class = "fas fa-gamepad"></i> play free now
                    </a>
                </div>
            </div>
        </section>
        <!-- end of promo section -->

        <!-- reviews section -->
        <section id = "reviews">
            <div class = "title">
                <div class = "container">
                    <h2>
                        <i class = "fas fa-comments"></i> Featured Reviews
                    </h2>
                </div>
            </div>
            <div class = "container">
                <article>
                    <div class = "item-img">
                        <img src = "resources/images/review-1.jpg">
                        <span>
                            <i class = "fas fa-star"></i> 7
                        </span>
                    </div>
                    <div class = "item-text">
                        <a href = "#" class = "h1">
                            <span class = "category">review</span>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        </a>
                        <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, facilis quia. Officia similique omnis optio!</p>
                        <div class = "date">Reviews | Trending | 11:00 AM</div>
                    </div>
                </article>

                <article>
                    <div class = "item-img">
                        <img src = "resources/images/review-2.jpg">
                        <span>
                            <i class = "fas fa-star"></i> 9.8
                        </span>
                    </div>
                    <div class = "item-text">
                        <a href = "#" class = "h1">
                            <span class = "category">review</span>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        </a>
                        <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, facilis quia. Officia similique omnis optio!</p>
                        <div class = "date">Reviews | Trending | 11:00 AM</div>
                    </div>
                </article>

                <article>
                    <div class = "item-img">
                        <img src = "resources/images/review-3.jpg">
                        <span>
                            <i class = "fas fa-star"></i> 3.5
                        </span>
                    </div>
                    <div class = "item-text">
                        <a href = "#" class = "h1">
                            <span class = "category">review</span>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        </a>
                        <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, facilis quia. Officia similique omnis optio!</p>
                        <div class = "date">Reviews | Trending | 11:00 AM</div>
                    </div>
                </article>

                <article>
                    <div class = "item-img">
                        <img src = "resources/images/review-4.jpg">
                        <span>
                            <i class = "fas fa-star"></i> 9
                        </span>
                    </div>
                    <div class = "item-text">
                        <a href = "#" class = "h1">
                            <span class = "category">review</span>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        </a>
                        <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, facilis quia. Officia similique omnis optio!</p>
                        <div class = "date">Reviews | Trending | 11:00 AM</div>
                    </div>
                </article>

                <article>
                    <div class = "item-img">
                        <img src = "resources/images/review-5.jpg">
                        <span>
                            <i class = "fas fa-star"></i> 8.5
                        </span>
                    </div>
                    <div class = "item-text">
                        <a href = "#" class = "h1">
                            <span class = "category">review</span>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        </a>
                        <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, facilis quia. Officia similique omnis optio!</p>
                        <div class = "date">Reviews | Trending | 11:00 AM</div>
                    </div>
                </article>
            </div>
        </section>
        <!-- end of reviews section -->
    </main>
    <!-- end of main -->

    <!-- footer -->
    <footer id = "footer">
        <div class = "container">
            <div class = "footer-links-1">
                <h2>Join DuskGaming:</h2>
                <ul class = "flex">
                    <li>
                        <a href = "#"><i class = "fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href = "#"><i class = "fab fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href = "#"><i class = "fab fa-twitch"></i></a>
                    </li>
                    <li>
                        <a href = "#"><i class = "fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href = "#"><i class = "fab fa-twitter"></i></a>
                    </li>
                </ul>
            </div>

            <div class = "footer-links-2">
                <ul class = "flex">
                    <li>
                        <a href = "#">About DuskGaming</a>
                    </li>
                    <li>
                        <a href = "#">Adertise</a>
                    </li>
                    <li>
                        <a href = "#">Privacy Policy</a>
                    </li>
                    <li>
                        <a href = "#">Terms of Use</a>
                    </li>
                    <li>
                        <a href = "#">Contact</a>
                    </li>
                    <li>
                        <a href = "#">Reviews</a>
                    </li>
                </ul>
            </div>

            <p class = "text">&copy; <a href = "#">DuskGaming</a>. All Rights Reserved.</p>
        </div>
    </footer>
    <!-- end of footer -->


    <!-- custom js -->
    <script src = "js/script.js"></script>
</body>
</html>