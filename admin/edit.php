<?php

$record = [
    'id' => '',
    'label' => '',
    'type' => ''
];

if (isset($_GET['id'])) {
    if ($_GET['type'] == 'item') {
        require 'edit_item.php';
        die();
    }
    $sql = "SELECT * FROM " . $_GET['type'] . " WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_GET['id']]);
    $record = $stmt->fetch();
}
if ($_GET['type'] == 'item') {
    require 'edit_item.php';
} else {
?>
    <form action="save.php" method="POST" class="form">
        <?=
        create_input('type', 'text', $_GET['type']),
        create_input('id', 'hidden', $record['id']),
        create_input('label', 'text', $record['label']);
        ?>
        <button class="button save">Save</button>
    </form>
    <a href="index.php?page=listing" class="button cancel">Cancel</a>
    <form action="delete.php" method="POST" class="form">
        <?=
        create_input('type', 'hidden', $_GET['type']),
        create_input('id', 'hidden', $record['id']),
        create_input('label', 'hidden', $record['label']),
        create_input('confirmed', 'hidden', 'false')
        ?>
        <button class="button delete">Delete</button>
    </form>
<?php } ?>