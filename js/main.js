getReviewPage = () => {
    album = $('.artist')
        $.ajax({url:'pages/review.php',
                data: {review: album},
                type: 'POST',
            success: (data) => {
                $('main').html(data);
            }}
        );
};