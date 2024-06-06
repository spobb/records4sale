document.addEventListener('DOMContentLoaded', () => {
	// set defaults
	let perPage = 0;
	let currentPage = 0;

	// how many items per page based on media queries -> follows CSS

	// does NOT dynamically update: is set on page laod :(

	const queryBig = window.matchMedia('(min-width: 1024px)');
	const queryMed = window.matchMedia('(min-width: 768px)');

	queryMed.matches
		? queryBig.matches
			? (perPage = 16)
			: (perPage = 12)
		: (perPage = 8);

	// get elements

	const items = document.querySelectorAll('.item-card');
	const container = document.querySelector('.page-buttons');

	// show elements from the selected page

	function show(page) {
		const start = page * perPage;
		const end = start + perPage;
		items.forEach((e, i) => {
			e.classList.toggle('hidden', i < start || i >= end);
		});
	}

	// create buttons to select pages

	function pageButtons() {
		const pages = Math.ceil(items.length / perPage);
		for (i = 0; i < pages; ++i) {
			const pageButton = document.createElement('button');
			pageButton.textContent = i + 1;
			pageButton.addEventListener('click', e => {
				currentPage = e.target.innerText - 1;
				show(currentPage);
				selectedPage(currentPage);
			});
			pageButton.classList.add('page-button');
			container.append(pageButton);
		}
	}

	// style buttons based on which page is active

	function selectedPage(page) {
		const buttons = document.querySelectorAll('.page-button');
		buttons.forEach((e, i) => {
			if (page === i) {
				e.classList.add('active');
			} else e.classList.remove('active');
		});
	}

	if (items.length > perPage) {
		pageButtons();
		show(currentPage);
		selectedPage(currentPage);
	}
});
