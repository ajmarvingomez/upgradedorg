/* Javascript for Menu */

let burgerIcon  = document.querySelector('.nav-hamburger-icon');
let xIcon 	    = document.querySelector('.nav-close-icon');
let menuList    = document.querySelector('.nav-content__link-list');
let width 		= window.innerWidth;

if (width > 1000) {
	burgerIcon.style.display = "none";
}

if (width < 1000) {
	burgerIcon.onclick = () => {
		burgerIcon.style.display = "none";
		xIcon.style.display 	 = "flex";
		menuList.style.display 	 = "flex";
	}
	xIcon.onclick = () => {
		xIcon.style.display 	 = "none";
		menuList.style.display 	 = "none";
		burgerIcon.style.display = "flex";
	}
} else {
	burgerIcon.style.display 	 = "none";
	xIcon.style.display 		 = "none";
}

window.onresize = () => {
	let width = window.innerWidth;
	menuList.style.display 		 = "none";
	burgerIcon.style.display 	 = "flex";
	xIcon.style.display 	 	 = "none;"

	if (width < 1000) {
		burgerIcon.onclick = () => {
			menuList.style.display   = "flex";
			xIcon.style.display 	 = "flex";
			burgerIcon.style.display = "none";
		}
		xIcon.onclick = () => {
			burgerIcon.style.display = "flex";
			xIcon.style.display 	 = "none";
			menuList.style.display 	 = "none";
		}
	} else if (width => 1000) {
		menuList.style.display 	 = "flex";
		burgerIcon.style.display = "none";
		xIcon.style.display 	 = "none";
	}
}