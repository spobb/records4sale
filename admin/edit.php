<?php

$record = [
    'id' => '',
    'label' => '',
    'type' => ''
];

if (isset($_GET['id'])) {
    $sql = 'SELECT * FROM ? WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_GET['type'], $_GET['id']]);
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
<?php } ?>