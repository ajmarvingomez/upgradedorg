'use strict';
/* Javascript for Menu */
let burgerIcon = document.querySelector('.nav-hamburger-icon');
let xIcon = document.querySelector('.nav-close-icon');
let menuList = document.querySelector('.nav-content__link-list');
if( null !== burgerIcon && null !== xIcon && null !== menuList) {
	window.addEventListener('DOMContentLoaded',() => {
		let width = window.innerWidth;

		if (width < 1000) {
			burgerIcon.onclick = () => {
				burgerIcon.style.display = 'none';
				xIcon.style.display = 'flex';
				menuList.style.display = 'flex';
			};
			xIcon.onclick = () => {
				xIcon.style.display = 'none';
				menuList.style.display = 'none';
				burgerIcon.style.display = 'flex';
			};
		} else {
			burgerIcon.style.display = 'none';
			xIcon.style.display = 'none';
		}
	})

	window.addEventListener('resize', () => {
		let width = window.innerWidth;
		menuList.style.display = 'none';

		xIcon.style.display = 'none;';
		if (width < 1000) {
			burgerIcon.style.display = 'flex';
			burgerIcon.onclick = () => {
				menuList.style.display = 'flex';
				xIcon.style.display = 'flex';
				burgerIcon.style.display = 'none';
			};
			xIcon.onclick = () => {
				burgerIcon.style.display = 'flex';
				xIcon.style.display = 'none';
				menuList.style.display = 'none';
			};
		} else {
			menuList.style.display = 'flex';
			burgerIcon.style.display = 'none';
			xIcon.style.display = 'none';
		}
	});
}
