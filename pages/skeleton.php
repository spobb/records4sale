<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>records4sale</title>
    <link rel="stylesheet" href="css/r4s.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">
</head>

<body id="<?php
            if (isset($GET['page'])) {
                $_GET['page'];
            }
            ?>">
    <header>
        <nav>
            <div class="home-buttons">
                <a href="index.php?page=home" class="home">records4sale</a>
            </div>
            <div class="search-bar search">
                <input type="search" id="search" placeholder="Search for an album or artist..." autocomplete="off"><button id=" search-button"><img src="img/svg/search.svg" alt="magnifying glass icon" class="svg-img" id="search-button"></button>
            </div>
            <ul class="nav-buttons">
                <li class="contact"><a href="index.php?page=contact">Contact</a></li>
                <li class="register"><a href="index.php?page=register"><button>Sign up</button></a></li>
                <li class="login"><a href="index.php?page=login"><button>Sign In</button></a></li>
                <li class="profile"><a href="index.php?page=profile"><img src="img/svg/profile.svg" alt="user profile icon" class="svg-img"></a></li>
            </ul>
            <img src="img/svg/list.svg" alt="burger menu icon" id="burger-button" class="svg-img">
        </nav>
    </header>
    <ul class="burger-menu hidden" id="burger-menu">
        <li class="profile"><a href="index.php?page=profile">Profile</a></li>
        <li class="login"><a href="index.php?page=login">Sign in</a></li>
        <li class="register"><a href="index.php?page=register">Sign up</a></li>
        <li class="contact"><a href="index.php?page=contact">Contact</a></li>
    </ul>

    <main>

        <?php
        if (file_exists($page)) {
            include $page;
        } else {
            include 'pages/home.php';
        }
        ?>
    </main>

    <footer>
        <div>
            <!-- contact info -->
            <address>
                guillaume <br>
                0476 68 29 54 <br>
                gverlaeken@student.efp.be
            </address>

            <!-- socials -->
            <nav>
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Twitter</a>
            </nav>
        </div>

        <div>
            <ul>
                <li><a href="#">link 1</a></li>
                <li><a href="#">link 2</a></li>
                <li><a href="#">link 3</a></li>
            </ul>

            <!-- partners/links -->
        </div>

        <div>
            <!-- map -->
            <img src="img/map.png" alt="map of EFP">
        </div>

        <div>
            <!-- copyright -->
            &copy; <?= date('Y') ?>
        </div>
    </footer>

    <script src="js/search.js"></script>
    <script src="js/burger.js"></script>
    <script src="js/review.js"></script>
    <script type="module" src="js/stars.js"></script>
</body>

</html>