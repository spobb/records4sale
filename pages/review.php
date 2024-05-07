<h1>Review of:</h1>
<section>
    <div class="flex-wrapper">
        <h2><?= $_REQUEST['artist']; ?></h2>
        <p><?= $_REQUEST['label'];  ?></p>

        <form action="" method="POST">
            <div class="review-stars">
                <input type="radio" name="stars" id="1" class="stars svg-img">
                <input type="radio" name="stars" id="2" class="stars svg-img">
                <input type="radio" name="stars" id="3" class="stars svg-img">
                <input type="radio" name="stars" id="4" class="stars svg-img">
                <input type="radio" name="stars" id="5" class="stars svg-img">
            </div>
            <textarea name="review" cols="30" rows="10" placeholder="Write a review..."></textarea>

            <button>Send</button>
        </form>
    </div>
</section>
<script src="js/stars.js"></script>