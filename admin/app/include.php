<?php
function create_tab(string $header, string $table_name)
{
    global $pdo;
    echo '<div class="' . $table_name . ' tab"><header><h1>' . $header . '</h1><form action="index.php?page=edit" method="get"><input type="hidden" name="page" value="edit"><input type="hidden" name="type" value="' . $table_name . '"><button class="button">New</button></form></header><ul>';
    $stmt = $pdo->query('SELECT * FROM ' . $table_name . ' ORDER BY label ASC');
    while ($row = $stmt->fetch()) {
        printf('<li><a href="index.php?page=edit&id=%d&type=%s">%s</a></li>', $row['id'], $table_name, $row['label']);
    }
    echo '</ul></div>';
}

function create_input(string $name, string $type, $value)
{
    $r = '';
    if ($type == 'hidden' or $name == 'type') {
        $r .= '<input type="' . $type . '" name="' . $name . '" value="' . $value . '" readonly>';
    } else {
        $r .= '<label for="' . $name . '">' . $name . '</label>';
        $r .= '<input type="' . $type . '" name="' . $name . '" value="' . $value . '">';
    }
    return $r;
}

function create_select(string $name, array $table, array $record)
{
    $ret = '';
    $ret .= sprintf('<label for "%1$s">%1$s</label><select name="%1$s">', $name);
    foreach ($table as $t) {
        if ($t['id'] === $record[$name . '_id']) {
            $ret .= sprintf('<option value="%d"selected>%s</option>', $t['id'], $t['label']);
        } else {
            $ret .= sprintf('<option value="%d">%s</option>', $t['id'], $t['label']);
        }
    }
    return $ret .= '</select>';
}
