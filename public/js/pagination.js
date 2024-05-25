document.addEventListener('DOMContentLoaded', () => {
	let perPage = 16;
	let currentPage = 0;

	const items = document.querySelectorAll('.item-card');
	const container = document.querySelector('.page-buttons');

	function show(page) {
		const start = page * perPage;
		const end = start + perPage;
		items.forEach((e, i) => {
			e.classList.toggle('hidden', i < start || i >= end);
		});
	}

	function pageButtons() {
		const pages = Math.ceil(items.length / perPage);
		for (i = 0; i < pages; ++i) {
			const pageButton = document.createElement('button');
			pageButton.textContent = i + 1;
			pageButton.addEventListener('click', (e) => {
				currentPage = e.target.innerText - 1;
				show(currentPage);
				selectedPage(currentPage);
			});
			pageButton.classList.add('page-button');
			container.append(pageButton);
		}
	}

	function selectedPage(page) {
		const buttons = document.querySelectorAll('.page-button');
		buttons.forEach((e, i) => {
			if (page === i) {
				e.classList.add('active');
			} else e.classList.remove('active');
		});
	}

	pageButtons();
	show(currentPage);
	selectedPage(currentPage);
});
