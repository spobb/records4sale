<?php
include 'connection.php';
include 'include.php';

if (isset($_REQUEST['id'])) {
    $sql = sprintf(
        "SELECT i.id, i.label, i.price, i.artist_id, a.label as artist 
        FROM item i 
        LEFT JOIN artist a ON a.id = i.artist_id
        WHERE a.id = %d",
        $_REQUEST['id']
    );
    $statement = $pdo->query($sql);
    $res = $statement->fetch();
}
?>

<main>
    <h1><?= $res['artist'] ?></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, amet vitae porro quae debitis aperiam modi autem itaque totam, nulla recusandae rerum expedita vero eveniet ad,
        obcaecati ullam vel nam deserunt hic exercitationem sapiente iusto velit accusantium! Fuga expedita voluptatem corrupti maxime mollitia quibusdam quos nisi, enim, et distinctio,
        rem culpa. Ut, maiores nihil, atque, facere eius at optio sit debitis exercitationem ex doloremque error culpa magni enim quam ab reiciendis eum in iste rerum consequuntur odio
        vel sint commodi. Tempora est temporibus distinctio sint excepturi quae sequi quasi quia laboriosam, nam et facere vel. Temporibus atque cupiditate maxime quod.
    </p>
    <ul>
        <li><?= $res['label'] ?></li>
    </ul>
</main>