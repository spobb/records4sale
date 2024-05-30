<?php
require_once '../connection.php';


if ($_POST['confirmed'] == "true") {

    $sql = "DELETE FROM " . $_POST['type'] . " WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $res = $stmt->execute([$_POST['id']]);
    header('Location: index.php?page=listing');
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DELETE</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <h1>Are you sure you want to delete <em><?= $_POST['label'] ?></em></h1>
        <form action="delete.php" method="POST" class="form">
            <input type="hidden" name="type" value="<?= $_POST['type']; ?>" readonly>
            <input type="hidden" name="id" value="<?= $_POST['id']; ?>" readonly>
            <input type="hidden" name="confirmed" value="true" readonly>
            <button class="button delete">Delete (permanent)</button>
        </form>
        <a href="index.php?page=listing" class="button cancel">Cancel</a>
    </body>

    </html>

<?php } ?>