<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>records4sale</title>
    <link rel="stylesheet" href="public/css/r4s.css">
    <link rel="stylesheet" href="public/css/queries.css" media="(min-width:576px)">
    <link rel="stylesheet" href="public/css/desktop.css" media="(min-width:1024px)">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <link rel="shortcut icon" href="public/assets/favicon.ico" type="image/x-icon">
</head>

<body id="<?php
            if (isset($_GET['page'])) {
                echo $_GET['page'];
            }
            ?>">
    <header>
        <nav>
            <div class="home-buttons wrapper">
                <a href="index.php?page=home" class="home"><img src="public/assets/text-logo.png" alt="logo image"></a>
            </div>
            <div class="search-bar wrapper">
                <input type="search" id="search" placeholder="Search for an album or artist..." autocomplete="off"><button id="search-button"><img src="public/assets/svg/search.svg" alt="magnifying glass icon" class="svg"></button>
            </div>
            <ul class="nav-buttons">
                <li class="contact"><a href="index.php?page=contact">Contact</a></li>
                <li class="register"><a href="index.php?page=register"><button class="header-button">Sign up</button></a></li>
                <li class="login"><a href="index.php?page=login"><button class="header-button">Sign In</button></a></li>
                <li class="profile"><a href="index.php?page=profile"><img src="public/assets/svg/profile.svg" alt="user profile icon" class="svg"></a></li>
            </ul>
            <img src="public/assets/svg/list.svg" alt="burger menu icon" id="burger-button" class="svg">
        </nav>
    </header>
    <ul class="burger-menu hidden" id="burger-menu">
        <li class="profile"><a href="index.php?page=profile">Profile</a></li>
        <li class="login"><a href="index.php?page=login">Sign in</a></li>
        <li class="register"><a href="index.php?page=register">Sign up</a></li>
        <li class="contact"><a href="index.php?page=contact">Contact</a></li>
        <li class="about"><a href="index.php?page=about">About us</a></li>
    </ul>

    <?php
    if (file_exists($page)) {
        include $page;
    } else {
        include 'pages/home.php';
    }
    ?>

    <footer>
        <div class="footer">
            <div>
                <!-- contact info -->
                <!-- socials -->
                <nav>
                    <a href="#">Facebook</a>
                    <a href="#">Instagram</a>
                    <a href="#">Twitter</a>
                </nav>
                <p>Contact me:</p>
                <address>
                    guillaume <br>
                    gverlaeken@student.efp.be
                </address>
            </div>
            <div>
                <ul>
                    <li><a href="index.php?page=about">About us</a></li>
                    <li><a href="#">Legal stuff</a></li>
                    <li><a href="#">Lorem, ipsum</a></li>
                </ul>
                <!-- partners/links -->
            </div>
            <div class="map">
                <!-- map -->
                <img src="public/assets/map.png" alt="map of EFP">
            </div>
            <div>
                <!-- copyright -->
                &copy; <?= date('Y') ?> Guillaume V.
            </div>
        </div>
    </footer>

    <script src="public/js/search.js"></script>
    <script src="public/js/burger.js"></script>
</body>

</html>