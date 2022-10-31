const nav_button = document.querySelector('.nav_button');
let nav_buttonopen = false;
nav_button.addEventListener('click', () => {
	if (!nav_buttonopen) {
		nav_button.classList.add('open');
		nav_buttonopen = true;
	} else {
		nav_button.classList.remove('open');
		nav_buttonopen = false;
	}
})