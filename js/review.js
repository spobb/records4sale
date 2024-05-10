$('.item-card button:first-child').click(function() {
    console.log('button works')
    let artist = $(this).parents('.item-card').find('.artist').text();
    let label = $(this).parents('.item-card').find('.title').text();
    
});