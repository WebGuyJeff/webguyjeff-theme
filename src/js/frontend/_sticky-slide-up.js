/**
 * WebGuyJeff Sticky Slide Up
 *
 * Makes an element slide up from the bottom of the viewport on scroll up. Handy for bottom-screen
 * mobile menus. The element must be stuck to the bottom of the viewport.
 *
 * @package webguyjeff-theme
 * @author Jefferson Real <jeff@webguyjeff.com>
 * @copyright Copyright 2025 Jefferson Real
 */

const stickySlideUp = () => {

	const stickyElementSelector = '.someElement'

	if ( ! document.querySelector( stickyElementSelector ) ) return

	let timerElapsed           = true
	let displayed              = true
	let previousScrollPosition = window.pageYOffset
	let currentScrollPosition

	window.onscroll = function () {
		currentScrollPosition = window.pageYOffset
		if ( timerElapsed ) {
			timerElapsed = false
			setTimeout( function () {
				if (
					previousScrollPosition > currentScrollPosition &&
					displayed === false
				) {
					document.querySelector(
						'.thumbNav-jshide'
					).style.transform = 'translateY(0rem)'
					displayed = true
				} else if (
					previousScrollPosition < currentScrollPosition &&
					displayed === true
				) {
					document.querySelector(
						'.thumbNav-jshide'
					).style.transform = 'translateY(5rem)'
					document.querySelector(
						'.thumbNav_checkbox'
					).checked = false
					displayed = false
				}
				previousScrollPosition = currentScrollPosition
				timerElapsed = true
			}, 500 )
		}
	}
}

export { stickySlideUp }
