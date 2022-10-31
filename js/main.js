const nav_button = document.querySelector('.nav_button');
const menu=document.querySelector('.menu');
let nav_buttonopen = false;
nav_button.addEventListener('click', () => {
	if (!nav_buttonopen) {
		nav_button.classList.add('open');
		menu.classList.add('active');
		nav_buttonopen = true;
	} else {
		nav_button.classList.remove('open');
		menu.classList.remove('active');
		nav_buttonopen = false;
	}
})