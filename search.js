$('#search').on('input', e => {
    let input = $('input#search').val().toLowerCase();
    const itms = $('.item-card').toArray();    
    itms.forEach(itm => {
        let titles = itm.childNodes[1].childNodes[3].innerText.toLowerCase();
        let artists = itm.childNodes[1].childNodes[1].innerText.toLowerCase();

        if(!titles.includes(input) && !artists.includes(input)) {
            itm.classList.add('hidden');
        } else itm.classList.remove('hidden');
    });
})

$('#search-button').click(() => {
    let input = $('input#search').val().toLowerCase();
    if(input.length) {
        $.ajax({url:'pages/catalog.php',
                data: {action: 'search', search: input},
                type: 'POST',
            success: (data) => {
                $('main').html(data);
            }}
            
        );
    }
});