$('.item-card button:first-child').click(function() {
    let artist = $(this).parents('.item-card').find('.artist').text();
    let label = $(this).parents('.item-card').find('.title').text();
    $.ajax({url:'pages/review.php',
            data: {label: label, artist: artist},
            type: 'GET',
            success: (data) => {
                $('main').html(data);
            }
    });
});