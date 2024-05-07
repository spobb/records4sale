<?php
$page = 'home';

if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'profile':
            $page = 'pages/profile.php';
            break;
        case 'home':
            $page = 'pages/home.php';
            break;
        default:
            $page = 'pages/' . $_GET['page'] . '.html';
            break;
    }
}

include 'pages/skeleton.php';
