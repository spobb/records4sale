let currentRating = 0;

const stars = $('.review-stars > :radio').toArray();
console.log(stars);

$('.review-stars > :radio').on('click', (e) => {
    for(i = 0 ; i < stars.length; ++i) {
        stars[i].classList.remove('stars-checked');
    }
    currentRating = parseInt(e.target.id);
    console.log(currentRating);
    for(i = 0 ; i < currentRating; ++i) {
        stars[i].classList.add('stars-checked');
    }
});