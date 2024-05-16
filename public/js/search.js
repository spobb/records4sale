$('#search').on('input', () => {
    let input = $('#search')
    .val()
    .toLowerCase()
    .replace('/[-,;:!\'\"\\]/', '');

    const itms = $('.item-card').toArray();
    
    itms.forEach(function (itm) {
        title = itm.querySelector('.title').innerText.toLowerCase();
        artist = itm.querySelector('.artist').innerText.toLowerCase();
        !title.includes(input) && !artist.includes(input) ? itm.classList.add('hidden') : itm.classList.remove('hidden');
    });
})

$('#search-button').on('click', () => {
    let input = $('#search').val().toLowerCase();
    if(input.length) {
        $.ajax({url:'pages/home.php',
                data: {action: 'search', search: input},
                type: 'get',
                success: (()=> {
                    window.location.href = "index.php?page=home";
                })
            }
        );
    }
});