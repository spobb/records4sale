<h1>Review of:</h1>
<section>
    <div class="flex-wrapper">
        <h2><?= $_REQUEST['artist']; ?></h2>
        <p><?= $_REQUEST['label'];  ?></p>

        <form action="" method="POST">
            <div class="review-stars">
                <input type="radio" name="stars" id="stars-1">
                <label for="stars-1"></label>
                <input type="radio" name="stars" id="stars-2">
                <label for="stars-2"></label>
                <input type="radio" name="stars" id="stars-3">
                <label for="stars-3"></label>
                <input type="radio" name="stars" id="stars-4">
                <label for="stars-4"></label>
                <input type="radio" name="stars" id="stars-5">
                <label for="stars-5"></label>
            </div>

            <label for="message"></label>
            <textarea name="message" cols="30" rows="10" placeholder="Write a review..."></textarea>

            <button>Send</button>
        </form>
    </div>
</section>