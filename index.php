<?php
$page = 'html';

if (isset($_GET['page'])) {
    $page = 'pages/' . $_GET['page'] . '.html';
} else if (isset($_GET['action'])) {
    echo 'action works';
} else {
    $page = 'pages/home.html';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>records4sale</title>
    <link rel="stylesheet" href="r4s.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php?page=contact">Contact</a></li>
            <li><a href="index.php?page=catalog">Catalog</a></li>
            <li><a href="index.php?page=register">Sign up</a></li>
            <li><a href="index.php?page=login">Sign in</a></li>
            <li><a href="index.php?page=logout">Sign out</a></li>
            <li><a href="index.php?page=profile">Profile</a></li>
            <li><a href="index.php?page=item">Item</a></li>
        </ul>
    </nav>
    <?php
    if (file_exists($page)) {
        include $page;
    } else {
        include 'pages/home.html';
    }
    ?>
</body>

</html>