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
        <label for="type">Type</label>
        <input type="text" name="type" value="<?= $_GET['type']; ?>" readonly>
        <label for="id">ID</label>
        <input type="text" name="id" value="<?= $record['id']; ?>" readonly>
        <label for="label">Label</label>
        <input type="text" name="label" value="<?= $record['label']; ?>">
        <button class="button">Save</button>
    </form>
    <a href="index.php?page=listing" class="button">Cancel</a>
<?php } ?>