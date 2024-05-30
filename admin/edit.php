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
        <input type="hidden" name="id" value="<?= $record['id']; ?>" readonly>
        <label for="label">Label</label>
        <input type="text" name="label" value="<?= $record['label']; ?>">

        <button class="button save">Save</button>
    </form>
    <a href="index.php?page=listing" class="button cancel">Cancel</a>
    <form action="delete.php" method="POST" class="form">
        <input type="hidden" name="type" value="<?= $_GET['type']; ?>" readonly>
        <input type="hidden" name="id" value="<?= $record['id']; ?>" readonly>
        <input type="hidden" name="confirmed" value="false" readonly>
        <input type="hidden" name="label" value="<?= $record['label']; ?>" readonly>
        <button class="button delete">Delete</button>
    </form>
<?php } ?>