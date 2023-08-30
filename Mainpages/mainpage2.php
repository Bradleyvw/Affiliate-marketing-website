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
    <link rel = "stylesheet" href = "../css/normalize.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "../css/main.css">
</head>
<body>
ÆáááááXAZ
<!-- navbar -->
<nav class = "navbar">
    <div class = "container flex">
        <a href = "../index.php" class = "navbar-brand">Dusk<span>Gaming</span></a>

        <div class = "navbar-collapse">
            <button type = "button" class = "navbar-toggler-close">
                <i class = "fas fa-times"></i>
            </button>
            <ul class = "navbar-nav">
                <li class = "nav-item">
                    <a href = "../index.php" class = "nav-link">home</a>
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
                                <li><a href="../includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
                                <?php
                            }
                            else
                            {
                                ?>
                                <li><a href="../loginuser.php">SIGN UP</a></li>
                                <li><a href="../loginuser.php" class="header-login-a">LOGIN</a></li>
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
    <div class="mainpage2"></div>
    <H1 class="mp2title">Play the Ultimate edition NOW!</H1>
    <img class="mp2image" src="C:\xampp\htdocs\project1200\img\WhatNeverWas.jpg">
    <p class="mp2text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Imperdiet nulla malesuada pellentesque elit. Pellentesque nec nam aliquam sem et. Nibh cras pulvinar mattis nunc sed. Mollis nunc sed id semper risus in hendrerit gravida rutrum. Tellus at urna condimentum mattis pellentesque id nibh tortor. Auctor neque vitae tempus quam pellentesque nec nam aliquam sem. Lacus vestibulum sed arcu non odio euismod lacinia at. Odio ut sem nulla pharetra. Lacus viverra vitae congue eu consequat ac felis donec.<br> <br>

        Adipiscing elit duis tristique sollicitudin nibh sit amet commodo. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non. Tortor id aliquet lectus proin. Imperdiet nulla malesuada pellentesque elit eget. Nibh tortor id aliquet lectus. Facilisis leo vel fringilla est. Nibh cras pulvinar mattis nunc sed blandit libero volutpat. Massa eget egestas purus viverra accumsan in nisl nisi scelerisque. Sapien pellentesque habitant morbi tristique. Tellus id interdum velit laoreet id donec. Dui sapien eget mi proin sed libero enim. Molestie nunc non blandit massa enim nec dui nunc. Tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Nam libero justo laoreet sit amet cursus sit amet.

        Eget nullam non nisi est. Donec adipiscing tristique risus nec feugiat in fermentum posuere urna. Diam ut venenatis tellus in metus vulputate. Nullam vehicula ipsum a arcu. Quam elementum pulvinar etiam non quam. Pharetra massa massa ultricies mi quis hendrerit dolor magna. Dolor sit amet consectetur adipiscing elit duis. Mattis molestie a iaculis at erat pellentesque adipiscing. Sagittis nisl rhoncus mattis rhoncus. In ante metus dictum at tempor commodo ullamcorper. <br> <br>Sed augue lacus viverra vitae congue eu. Justo eget magna fermentum iaculis eu non. Nulla porttitor massa id neque aliquam vestibulum morbi blandit cursus. Convallis tellus id interdum velit laoreet. Elementum integer enim neque volutpat ac. Ornare arcu dui vivamus arcu felis bibendum ut tristique. Ac auctor augue mauris augue neque. Vitae aliquet nec ullamcorper sit amet risus nullam. Orci porta non pulvinar neque.

        Nunc non blandit massa enim. Porta nibh venenatis cras sed felis eget velit. Congue nisi vitae suscipit tellus mauris a diam maecenas. Fermentum dui faucibus in ornare quam. Nisi porta lorem mollis aliquam ut porttitor leo a. Ut venenatis tellus in metus vulputate eu scelerisque felis. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Est sit amet facilisis magna etiam. Elit ut aliquam purus sit amet luctus venenatis. Porta nibh venenatis cras sed felis. Euismod lacinia at quis risus.<br> <br>

        At tempor commodo ullamcorper a lacus vestibulum sed arcu non. Sed tempus urna et pharetra pharetra massa massa. Ante metus dictum at tempor commodo ullamcorper. Eu lobortis elementum nibh tellus molestie nunc non. Magna ac placerat vestibulum lectus mauris ultrices eros. Tellus orci ac auctor augue. Risus viverra adipiscing at in tellus integer feugiat scelerisque. Lacus vestibulum sed arcu non. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Nunc eget lorem dolor sed viverra ipsum nunc aliquet. Urna nec tincidunt praesent semper feugiat nibh sed. Quam adipiscing vitae proin sagittis. Blandit turpis cursus in hac habitasse platea dictumst quisque sagittis. Ac turpis egestas integer eget. Rhoncus dolor purus non enim praesent elementum facilisis. Dolor purus non enim praesent elementum facilisis leo. Amet nisl suscipit adipiscing bibendum est ultricies integer. Magna sit amet purus gravida.</p>

    <script class="affiliatelinkmp1" src="https://widget.allkeyshop.com/lib/assets/js/generate/iframe/game-prices-comparison.js?game=17103&widgetTemplate=18" type="text/javascript"></script>
    <!-- end of header -->

    <!-- main -->
    <main>
        <!-- news section -->

        <!-- news latest -->

        <!-- end of news latest -->

        <!-- news popular -->

        <!-- end of news popular -->
        </div>
        </section>
        <!-- end of news section -->

        <!-- videos section -->

        <!-- end of videos section -->

        <!-- promo section -->

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
                        <img src = "../resources/images/review-1.jpg">
                        <span>
                            <i class = "fas fa-star"></i> 10
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
                        <img src = "../resources/images/review-2.jpg">
                        <span>
                            <i class = "fas fa-star"></i> 10
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
                        <img src = "../resources/images/review-3.jpg">
                        <span>
                            <i class = "fas fa-star"></i> 10
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
                        <img src = "../resources/images/review-4.jpg">
                        <span>
                            <i class = "fas fa-star"></i> 10
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
                        <img src = "../resources/images/review-5.jpg">
                        <span>
                            <i class = "fas fa-star"></i> 10
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
    <script src = "../js/script.js"></script>
</body>
</html>