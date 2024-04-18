<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>records4sale</title>
    <link rel="stylesheet" href="r4s.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <?php
                $menu = [
                    'home' => 'Home',
                    'contact' => 'Contact',
                    'catalog' => 'Catalog',
                    'register' => 'Sign up',
                    'login' => 'Sign in',
                    'logout' => 'Sign out',
                    'profile' => 'Profile',
                    'item' => 'Item',
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
    <footer></footer>
</body>

</html>