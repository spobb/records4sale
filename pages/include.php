<?php

// fetches the album cover image based on title and artist name in database

// $images = [];
// $dir = 'public/images/covers';
// $directories = scandir($dir);
// foreach ($directories as $directory) {
//     if ($directory == '.' or $directory == '..') {
//         continue;
//     }
//     $files = scandir($dir . '/' . $directory);
//     foreach ($files as $file) {
//         if ($file == '.' or $file == '..') {
//             continue;
//         }
//         $images[$directory][] = $file;
//     }
// }
function format_string($str)
{
    $str = str_replace(' ', '-', $str);
    $str = preg_replace('/[:,;]/', '', $str);
    return strtolower($str);
}
function album_cover($res)
{
    $dir = 'public/images/covers';
    $ret = sprintf('%s/%s/%s/', $dir, $res['artist'], $res['label']);
    $file = sprintf('%s-%s.jpg', $res['artist'], $res['label']);
    $ret = format_string($ret .= $file);
    file_exists($ret) ? $ret : $ret = 'https://picsum.photos/seed/seed/300/300';
    return $ret;
}

function create_folders($res)
{
    $dir = "public/images/covers/" . format_string($res['artist']) . "/" . format_string($res['label']);

    if (!file_exists($dir)) {
        mkdir($dir, 0777, true);
    }
}
