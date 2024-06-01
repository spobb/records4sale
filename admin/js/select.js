document.addEventListener('DOMContentLoaded', ()=> {
    const select = document.querySelector('.multi-select');
    const inputs = document.querySelectorAll('.multi-select-option');
    const selectedElem = document.querySelector('.multi-select-selected');

    select.addEventListener('change', () => {
        const song = select.options[select.selectedIndex];
        song.setAttribute('selected', '');
        
        // create tags        
        
        const tag = document.createElement('span');
        tag.setAttribute('data-song', '');
        tag.classList.add('tag');
        tag.innerText = song.text;
        selectedElem.appendChild(tag);

        tag.addEventListener('click', ()=> {
            selectedElem.removeChild(tag);
            return;
        })
    })
});