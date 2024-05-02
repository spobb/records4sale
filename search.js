document.getElementById('search').addEventListener('input', e => {
    srch = e.target.value.toLowerCase();
    itm = document.querySelectorAll('.item-card');
    
    console.log(srch);
    itm.forEach(itms => {
        titles = itms.childNodes[1].childNodes[3].innerText.toLowerCase();
        artists = itms.childNodes[1].childNodes[1].innerText.toLowerCase();

        if(!titles.includes(srch) && !artists.includes(srch)) {
            itms.classList.add('hidden');
        } else itms.classList.remove('hidden');
    });
})