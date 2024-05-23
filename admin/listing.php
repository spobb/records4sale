<div class="wrapper">
    <a href="index.php?page=edit" class="button">New</a>

    <ul>
        <?php
        $stmt = $pdo->query('SELECT * FROM genre');
        while ($row = $stmt->fetch()) {
            printf('<li><a href="index.php?page=edit&id=%d">%s</a></li>', $row['id'], $row['label']);
        }
        ?>
    </ul>
</div>