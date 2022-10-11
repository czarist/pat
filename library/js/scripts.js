document.addEventListener("DOMContentLoaded", () => {
	const openMenu = document.getElementById("open-menu");
	const closeMenu = document.getElementById("close-menu");
	const menuMobile = document.getElementById("menu-mobile");

	// open menu
	openMenu.onclick = function openmenu() {
		closeMenu.classList.remove("d-none");
		closeMenu.classList.add("d-flex");
		openMenu.classList.add("d-none");
		openMenu.classList.remove("d-flex");
		menuMobile.classList.remove("d-none");
		menuMobile.classList.add("d-flex");
	};

	// close menu
	closeMenu.onclick = function closemenu() {
		openMenu.classList.remove("d-none");
		openMenu.classList.add("d-flex");
		closeMenu.classList.add("d-none");
		closeMenu.classList.remove("d-flex");
		menuMobile.classList.add("d-none");
		menuMobile.classList.remove("d-flex");
	};

	jQuery(document).ready(function ($) {
		$('a[href^="#"]').on("click", function (e) {
			e.preventDefault();
			var id = $(this).attr("href"),
				targetOffset = $(id).offset().top;

			$("html, body").animate({
				scrollTop: targetOffset - 100,
			},
				500
			);
		});
	});
});
