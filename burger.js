const menu = document.getElementById('burger-menu');
const button = document.getElementById('burger-button');
button.addEventListener('click', () => {
    menu.classList.toggle('hidden');
});