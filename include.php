<?php
function album_cover($result)
{
    $ret = sprintf('./img/covers/%s-%s.jpg', $result['artist'], $result['label']);
    $ret = str_replace(' ', '-', $ret);
    return strtolower($ret);
}
