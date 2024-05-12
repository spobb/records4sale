$('#search').on('input', e => {
    let input = $('#search')
    .val()
    .toLowerCase()
    .replace('/[-,;:!\'\"\\]/', '');

    const itms = $('.item-card').toArray(); 

    itms.forEach(itm => {
        let titles = itm.childNodes[1].childNodes[3].innerText.toLowerCase();
        let artists = itm.childNodes[1].childNodes[1].innerText.toLowerCase();
        
        !titles.includes(input) && !artists.includes(input) ? itm.classList.add('hidden') : itm.classList.remove('hidden');
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