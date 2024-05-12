<?php include 'connection.php';
$sql = "SELECT item_id, rating, comment, i.label as item FROM review 
LEFT JOIN item i on i.id = item_id 
WHERE user_id = 1";
$statement = $pdo->query($sql);
$reviews = $statement->fetchAll();
$c = 0;

foreach ($reviews as $row) {
    ++$c;
}
?>
<main>
    <nav class="sidebar">
        <a href="#profile-information">Personal information</a>
        <a href="#profile-reviews">Your reviews (<?php echo $c; ?>)</a>
        <a href="#profile-favorites">Your favorites</a>
        <a href="#">Blah blah</a>
        <a href="#">Blah blah</a>
        <a href="#">Blah blah</a>
        <a href="#profile-security">Security</a>
    </nav>
    </div>
    <div>
        <h1>Profile</h1>
        <h2 id="profile-information">Hello, Jean Pierre</h2>
        <h2 id="profile-reviews">Your reviews</h2>
        <div class="flex-center profile-reviews">
            <?php foreach ($reviews as $row) {
                include 'profile-review.php';
            } ?>
        </div>
        <h2 id="profile-favorites">Security</h2>
        <h2 id="profile-security">Security</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima rem architecto consequuntur veritatis ullam hic eveniet voluptates dolores corrupti dolorem! Ea vel, esse quasi alias veniam vitae inventore! Pariatur, possimus.</p>
</main>