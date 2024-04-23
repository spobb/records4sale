<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>records4sale</title>
    <link rel="stylesheet" href="css/r4s.css">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>
    <header>
        <nav>
            <ul>
                <?php
                $menu = [
                    'home' => 'HOME',
                    'contact' => 'CONTACT',
                    'catalog' => 'CATALOG',
                    'register' => 'SIGN UP',
                    'login' => 'SIGN IN',
                    'logout' => 'SIGN OUT',
                    'profile' => 'PROFILE',
                    'item' => 'ITEM',
                ];

                foreach ($menu as $href => $label) {
                    printf('<li><a href="index.php?page=%s">%s</a></li>', $href, $label);
                }
                ?>
            </ul>
        </nav>
    </header>

    <main>

        <?php
        if (file_exists($page)) {
            include $page;
        } else {
            include 'pages/home.html';
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
</body>

</html>