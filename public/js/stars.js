let currentRating = 0;
const stars = $('.stars > :radio').toArray();

$('.stars > :radio').on('click', (e) => {
    $('.stars-checked').removeClass('stars-checked');
    currentRating = parseInt(e.target.id);
    for(i = 0 ; i < currentRating; ++i) {
        stars[i].classList.add('stars-checked');
    }
});