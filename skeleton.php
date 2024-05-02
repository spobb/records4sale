<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>records4sale</title>
    <link rel="stylesheet" href="css/r4s.css">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body id="<?= $_GET['page']; ?>">
    <header>
        <nav>
            <!-- <ul> -->
            <?php
            /*
                $menu = [
                    'home' => 'Home',
                    'catalog' => 'Catalog',

                    'search' => 'Search',

                    'contact' => 'Contact',
                    'register' => '<button>Sign up</button>',
                    'login' => '<button>Sign in</button>',
                    // 'logout' => '<button>Sign out</button>',
                    'profile' => '<img src="img/svg/profile.svg" alt="user profile icon">',
                    // 'item' => 'Item',
                ];
                foreach ($menu as $href => $label) {
                    if ($href === 'search') {
                        echo '<li class="search-bar"><input type="search" name="search" id="search"><button><img src="img/svg/search.svg" alt="magnifying glass icon"></button></li>';
                    } else {
                        printf('<li class="%s"><a href="index.php?page=%s">%s</a></li>', $href, $href, $label);
                    }
                }
                */
            ?>
            <!-- </ul> -->

            <div class="home-buttons">
                <a href="index.php?page=home" class="home">Home</a>
                <a href="index.php?page=catalog" class="catalog">Catalog</a>
            </div>
            <div class="search-bar" class="search">
                <input type="search" name="search" id="search"><a href="#"><img src="img/svg/search.svg" alt="magnifying glass icon"></a>
            </div>
            <ul class="nav-buttons">
                <li class="contact"><a href="index.php?page=contact">Contact</a></li>
                <li class="register"><a href="index.php?page=register"><button>Sign up</button></a></li>
                <li class="login"><a href="index.php?page=login"><button>Sign In</button></a></li>
                <li class="profile"><a href="index.php?page=profile"><img src="img/svg/profile.svg" alt="user profile icon"></a></li>
            </ul>
        </nav>
    </header>

    <main>

        <?php
        if (file_exists($page)) {
            include $page;
        } else {
            include 'pages/catalog.php';
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

    <script src="search.js"></script>
</body>

</html>