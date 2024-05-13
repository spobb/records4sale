<div class="profile-review">
    <a href="index.php?page=item&id=<?= $row['item_id'] ?>" class="title overflow"><?= $row['item'] ?></a>
    <span><?= $row['rating'] ?>/5</span>
    <p class="overflow"><?= $row['comment']; ?></p>
</div>