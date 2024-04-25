<?php
$page = 'html';

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'catalog') {
        $page = 'catalog.php';
    } else {
        $page = 'pages/' . $_GET['page'] . '.html';
    }
} else if (isset($_GET['action'])) {
    echo 'action works';
}

include 'skeleton.php';
