<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DuskGaming</title>
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel = "stylesheet" href = "css/normalize.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "css/main.css">
</head>
<body>

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

<main>

</main>
<!-- end of main -->

<!-- footer -->
<footer id = "footer">

    <section class="index-login">
        <div class="wrapper">
            <div class="index-login-signup">
                <h4>SIGN UP</h4>
                <p>Don't have an account yet? Sign up here!</p>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                    <input type="text" name="email" placeholder="E-mail">
                    <br>
                    <button type="submit" name="submit">SIGN UP</button>
                </form>
            </div>
            <div class="index-login-login">
                <h4>LOGIN</h4>
                <p>Don't have an account yet? Sign up here!</p>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <br>
                    <button type="submit" name="submit">LOGIN</button>
                </form>
            </div>
        </div>
    </section>
    <div class = "container">
        <div class = "footer-links-1">
            <h2>Join GamerPro:</h2>
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
                    <a href = "#">About GamerPro</a>
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

        <p class = "text">&copy; <a href = "#">GamerPro</a>. All Rights Reserved.</p>
    </div>
</footer>
<!-- end of footer -->


<!-- custom js -->
<script src = "js/script.js"></script>
</body>
</html>