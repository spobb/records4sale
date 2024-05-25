const tabs = document.querySelector('.profile-nav');
const tabButton = document.querySelectorAll('.tab-button');
const tab = document.querySelectorAll('.profile-tab');

tabs.addEventListener('click', (e) => {
	const id = e.target.dataset.id;
	if (id) {
		tabButton.forEach((b) => {
			b.classList.remove('active');
		});
		e.target.classList.add('active');

		tab.forEach((t) => {
			t.classList.remove('active');
		});
		const elem = document.getElementById(id);
		elem.classList.add('active');
	}
});
