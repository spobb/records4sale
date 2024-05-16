<?php
if (isset($_REQUEST['id'])) {
    $sql = sprintf(
        "SELECT i.id, i.label, i.artist_id, a.label as artist 
        FROM item i 
        LEFT JOIN artist a ON a.id = i.artist_id
        WHERE a.id = %d",
        $_REQUEST['id']
    );
    $statement = $pdo->query($sql);
    $res = $statement->fetchAll();
}
?>

<main>
    <h1 class="overflow"><?= $res[0]['artist'] ?></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, amet vitae porro quae debitis aperiam modi autem itaque totam, nulla recusandae rerum expedita vero eveniet ad,
        obcaecati ullam vel nam deserunt hic exercitationem sapiente iusto velit accusantium! Fuga expedita voluptatem corrupti maxime mollitia quibusdam quos nisi, enim, et distinctio,
        rem culpa. Ut, maiores nihil, atque, facere eius at optio sit debitis exercitationem ex doloremque error culpa magni enim quam ab reiciendis eum in iste rerum consequuntur odio
        vel sint commodi. Tempora est temporibus distinctio sint excepturi quae sequi quasi quia laboriosam, nam et facere vel. Temporibus atque cupiditate maxime quod.
    </p>
    <h1>records</h1>
    <section class="item-catalog column-wrapper">
        <?php
        foreach ($res as $row) {
            if ($row['label'])
                include 'partials/a-item-card.php';
        }
        ?>
    </section>
</main>