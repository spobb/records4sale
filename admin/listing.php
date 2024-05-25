<div class="wrapper">
    <form action="index.php?page=edit" method="get">
        <button class="button">New</button>
        <input type="hidden" name="page" value="edit">
        <label>Type:
            <select name="type">
                <option value="item" selected>Item</option>
                <option value="song">Song</option>
                <option value="artist">Artist</option>
                <option value="genre">Genre</option>
                <option value="category">Category</option>
            </select>
        </label>
    </form>
    <hr>

    <div class="artists tab">
        <h1>Artists</h1>
        <ul>
            <?php
            $stmt = $pdo->query('SELECT * FROM artist ORDER BY label ASC');
            while ($row = $stmt->fetch()) {
                printf('<li><a href="index.php?page=edit&id=%d&type=artist">%s</a></li>', $row['id'], $row['label']);
            } ?>
        </ul>
    </div>
    <div class="genres tab">
        <h1>Genres</h1>
        <ul>
            <?php
            $stmt = $pdo->query('SELECT * FROM genre ORDER BY label ASC');
            while ($row = $stmt->fetch()) {
                printf('<li><a href="index.php?page=edit&id=%d&type=genre">%s</a></li>', $row['id'], $row['label']);
            } ?>
        </ul>
    </div>
    <div class="categories tab">
        <h1>Categories</h1>
        <ul>
            <?php
            $stmt = $pdo->query('SELECT * FROM category ORDER BY label ASC');
            while ($row = $stmt->fetch()) {
                printf('<li><a href="index.php?page=edit&id=%d&type=category">%s</a></li>', $row['id'], $row['label']);
            }
            ?>
        </ul>
    </div>
    <div class="songs tab">
        <h1>Songs</h1>
        <ul>
            <?php
            $stmt = $pdo->query('SELECT * FROM song ORDER BY label ASC');
            while ($row = $stmt->fetch()) {
                printf('<li><a href="index.php?page=edit&id=%d&type=song">%s</a></li>', $row['id'], $row['label']);
            }
            ?>
        </ul>
    </div>
    <div class="items tab">
        <h1>Items</h1>
        <ul>
            <?php
            $stmt = $pdo->query('SELECT * FROM item ORDER BY label ASC');
            while ($row = $stmt->fetch()) {
                printf('<li><a href="index.php?page=edit&id=%d&type=item">%s</a></li>', $row['id'], $row['label']);
            }
            ?>
        </ul>
    </div>
</div>