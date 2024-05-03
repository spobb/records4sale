document.getElementById('search').addEventListener('input', e => {
    srch = e.target.value.toLowerCase();
    itms = document.querySelectorAll('.item-card');
    
    itms.forEach(itm => {
        (console.log(itms));
        titles = itm.childNodes[1].childNodes[3].innerText.toLowerCase();
        artists = itm.childNodes[1].childNodes[1].innerText.toLowerCase();

        if(!titles.includes(srch) && !artists.includes(srch)) {
            itm.classList.add('hidden');
        } else itm.classList.remove('hidden');
    });
})