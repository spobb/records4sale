<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>records4sale</title>
    <link rel="stylesheet" href="public/css/r4s.css">
    <link rel="stylesheet" href="public/css/queries.css" media="(min-width:576px)">
    <link rel="stylesheet" href="public/css/desktop.css" media="(min-width:1024px)">

    <!-- load font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="preload" href="https://fonts.gstatic.com/s/dmsans/v15/rP2Hp2ywxg089UriCZOIHQ.woff2" crossorigin as="font" type="font/woff2">

    <!-- preload hero image -->

    <link rel="preload" as="image" href="public/assets/herohalf.jpg">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/da76ef87bd.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="public/assets/favicon.ico" type="image/x-icon">
</head>

<body id="<?php
            if (isset($_GET['page'])) {
                echo $_GET['page'];
            }
            ?>">
    <header>
        <nav>
            <img src="public/assets/svg/search_mobile.svg" alt="magnifying glass icon" id="search-mobile" class="svg">
            <div class="home-buttons wrapper">
                <a href="index.php?page=home" class="home">records<span>4</span>sale</a>
            </div>
            <div class="search-bar">
                <img src="public/assets/svg/search.svg" alt="magnifying glass icon" class="svg">
                <input type="search" id="search" placeholder="Search..." autocomplete="off">
                <button id="search-button" class="header-button">Search</button>
            </div>
            <ul class="nav-buttons">
                <li>
                    <!-- <a href="index.php?page=contact"><button class="header-button">Contact Us</button></a> -->
                    <a href="index.php?page=contact" class="header-button">Contact Us</a>
                </li>
                <?php
                if ($_SESSION['active']) {
                ?>
                    <li class="logout">
                        <a href="index.php?page=logout" class="header-button">Sign out</a>
                    </li>
                    <li class="profile header-icon">
                        <a href="index.php?page=profile">
                            <img src="public /assets/svg/profile.svg" alt="user profile icon" class="svg">
                        </a>
                    </li>
                <?php
                } else {
                ?>
                    <li>
                        <a href="index.php?page=register" class=" header-button">Sign up</a>
                    </li>
                    <li>
                        <a href="index.php?page=login" class="header-button">Sign in</a>
                    </li>
                <?php
                }
                ?>
            </ul>
            <img src="public/assets/svg/list.svg" alt="burger menu icon" id="burger-button" class="svg">
        </nav>
    </header>
    <ul class="burger-menu hidden" id="burger-menu">
        <li class="profile"><a href="index.php?page=profile">Profile</a></li>
        <?php if (!isset($_SESSION['active'])) {
            if (!$_SESSION['active']);
        ?>
            <li class="login"><a href="index.php?page=login">Sign in</a></li>
            <li class="register"><a href="index.php?page=register">Sign up</a></li>
        <?php
        } else {
        ?>
            <li class="logout"><a href="index.php?page=logout">Sign out</a></li>
        <?php } ?>

        <li><a href="index.php?page=contact">Contact</a></li>
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
    <script src="public/js/links.js"></script>
</body>

</html>