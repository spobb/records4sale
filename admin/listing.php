<div class="wrapper">
    <form action="index.php?page=edit" method="get">
        <button class="button">New</button>
        <input type="hidden" name="page" value="edit">
        <label>Type:
            <select name="type">
                <option value="artist">Artist</option>
                <option value="genre">Genre</option>
                <option value="category">Category</option>
                <option value="item">Item</option>
            </select>
        </label>
    </form>
    <hr>

    <h1>Artists</h1>
    <ul>
        <?php
        $stmt = $pdo->query('SELECT * FROM artist');
        while ($row = $stmt->fetch()) {
            printf('<li><a href="index.php?page=edit&id=%d&type=artist">%s</a></li>', $row['id'], $row['label']);
        } ?>
    </ul>
    <hr>
    <h1>Genres</h1>
    <ul>
        <?php
        $stmt = $pdo->query('SELECT * FROM genre');
        while ($row = $stmt->fetch()) {
            printf('<li><a href="index.php?page=edit&id=%d&type=genre">%s</a></li>', $row['id'], $row['label']);
        } ?>
    </ul>
    <hr>
    <h1>Categories</h1>
    <ul>
        <?php
        $stmt = $pdo->query('SELECT * FROM category');
        while ($row = $stmt->fetch()) {
            printf('<li><a href="index.php?page=edit&id=%d&type=category">%s</a></li>', $row['id'], $row['label']);
        }
        ?>
    </ul>
    <hr>
    <h1>Items</h1>
    <ul>
        <?php
        $stmt = $pdo->query('SELECT * FROM item');
        while ($row = $stmt->fetch()) {
            printf('<li><a href="index.php?page=edit&id=%d&type=item">%s</a></li>', $row['id'], $row['label']);
        }
        ?>
    </ul>
</div>