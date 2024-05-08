<main>
    <h1>Review of:</h1>
    <section class="wrapper">
        <div>
            <h2><?= $_REQUEST['artist']; ?></h2>
            <p><?= $_REQUEST['label'];  ?></p>

            <form action="" method="POST">
                <div class="review-stars">
                    <input type="radio" name="stars" id="1" value="1" class="stars svg" required>
                    <input type="radio" name="stars" id="2" value="2" class="stars svg" required>
                    <input type="radio" name="stars" id="3" value="3" class="stars svg" required>
                    <input type="radio" name="stars" id="4" value="4" class="stars svg" required>
                    <input type="radio" name="stars" id="5" value="5" class="stars svg" required>
                    <!-- <input type="radio" name="stars" id="6" class="stars svg">
                    <input type="radio" name="stars" id="7" class="stars svg">
                    <input type="radio" name="stars" id="8" class="stars svg">
                    <input type="radio" name="stars" id="9" class="stars svg">
                    <input type="radio" name="stars" id="10" class="stars svg"> -->
                </div>
                <textarea name="review" cols="30" rows="10" placeholder="Write a review..."></textarea>

                <button>Send</button>
            </form>
        </div>
    </section>
    <script src="js/stars.js"></script>
</main>