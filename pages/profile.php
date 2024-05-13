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
<main class="profile-page">
    <nav class="sidebar">
        <a href="#profile-information">Your profile</a>
        <a href="#profile-favorites">Your favorites</a>
        <a href="#">Blah blah</a>
        <a href="#profile-reviews">Your reviews (<?php echo $c; ?>)</a>
        <a href="#">Blah blah</a>
        <a href="#">Blah blah</a>
        <a href="#profile-security">Security</a>
    </nav>
    </div>
    <div>
        <h1 id="profile-information">Hello, Jean Pierre</h1>
        <h2 id="profile-favorites">Your favorites</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus beatae illo voluptas quam saepe quos tempore ad repudiandae minus fugit?</p>
        <h2>Lorem, ipsum dolor.</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima rem architecto consequuntur veritatis ullam hic eveniet voluptates dolores corrupti dolorem! Ea vel, esse quasi alias veniam vitae inventore! Pariatur, possimus.</p>
        <h2>Lorem, ipsum dolor.</h2>
        <h2 id="profile-reviews">Your reviews</h2>
        <div class="profile-reviews">
            <?php foreach ($reviews as $row) {
                include 'partials/profile-review.php';
            } ?>
        </div>
        <h2>Lorem, ipsum dolor.</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima rem architecto consequuntur veritatis ullam hic eveniet voluptates dolores corrupti dolorem! Ea vel, esse quasi alias veniam vitae inventore! Pariatur, possimus.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima rem architecto consequuntur veritatis ullam hic eveniet voluptates dolores corrupti dolorem! Ea vel, esse quasi alias veniam vitae inventore! Pariatur, possimus.</p>
        <h2 id="profile-security">Security</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam voluptatibus sunt, earum praesentium accusamus similique sint iste unde nemo quos dolores magni veniam! Repellat quibusdam possimus reprehenderit, quia veniam
            blanditiis minima? Harum debitis, natus numquam velit doloremque consequuntur, optio deleniti necessitatibus voluptatum reprehenderit beatae cupiditate corrupti perspiciatis eaque delectus modi!</p>
</main>