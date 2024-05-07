$('.item-card footer>button').click( function() {
    let artist = $(this).parents('.item-card').find('.artist').text();
    let label = $(this).parents('.item-card').find('.title').text();
    console.log(artist, label);
    $.ajax({url:'pages/review.php',
            data: {label: label, artist: artist},
            type: 'POST',
            success: (data) => {
                $('main').html(data);
            }
    });
});