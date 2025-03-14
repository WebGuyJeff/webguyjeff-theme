/**
 * WebGuyJeff Slide-Header
 *
 * Handle header slide animation on scroll. Header is also squished thin once below fold. Elements
 * in the header can update to suit by targeting with the inserted css class.
 *
 * @package webguyjeff-theme
 * @author Jefferson Real <jeff@webguyjeff.com>
 * @copyright Copyright 2025 Jefferson Real
 */

const slideHeader = () => {

	const selector = '.jsSlideHeader'

	let header,
		lastScrollY  = 0,
		isAnimating  = false,
		isThrottled  = false,
		squishBuffer = 150 // Help with class add/remove loop error when scroll distance is affected by header squish.

	const init = () => {
		const target = document.querySelector( selector )
		if ( ! target ) {
			return
		} else {
			header = target.closest( 'header' )
		}
		header.style.visibility = 'visible'
		window.addEventListener( 'scroll', hasScrolledThrottle )
	}

	const hasScrolledThrottle = () => { 
		if ( isThrottled ) return
		isThrottled = true
		hasScrolled()
		const wait = setTimeout( () => {
			clearTimeout( wait )
			isThrottled = false
		}, 10 )
	}

	const hasScrolled = () => {
		const currentScrollY = window.scrollY
		const isScrollingDown = ( currentScrollY > lastScrollY ) ? true : false
		lastScrollY = currentScrollY
		const isBelowFold  = window.scrollY > window.innerHeight
		const shouldSquish = window.scrollY > squishBuffer

		// Insert class when squished thin.
		if ( shouldSquish ) {
			header.classList.add( 'is-squished' )
		} else {
			header.classList.remove( 'is-squished' )
		}

		// Animate.
		const isVisible = ( header.style.visibility === 'visible' )
		if ( ! isAnimating ) {
			isAnimating = true
			if ( ! isBelowFold && ! isVisible || ! isVisible && ! isScrollingDown ) {
				show()
			} else if ( isVisible && isBelowFold && isScrollingDown ) {
				hide()
			} else {
				isAnimating = false
			}
		}
	}

	/**
	 * Header must transform to 'none' and not 'translate( 0, 0 )' otherwise inner fixed position
	 * modals will not be able to break out of the header element. Issue discovered with the WP
	 * nav modal getting locked into the header. Note: behaviour is per W3 spec, not a bug.
	 */
	const show = () => {
		visibilityToPromise( header, 'visible' )
			.then( () => transitionToPromise( header, 'transform', 'none' ) )
			.then( () => isAnimating = false )
	}

	const hide = () => {
		transitionToPromise( header, 'transform', 'translate( 0, -100% )' )
			.then( () => visibilityToPromise( header, 'hidden' ) )
			.then( () => isAnimating = false )
	}

	const transitionToPromise = ( element, property, value ) => {
		return new Promise( ( resolve ) => {
			element.addEventListener( 'transitionend', () => resolve( 'transition ended!' ), { 'once': true } )
			element.style[ property ] = value
		} )
	}

	// Custom listener as visibility doesn't trigger the `transitionend` listener.
	const visibilityToPromise = ( element, value ) => {
		return new Promise( ( resolve ) => {
			element.style.visibility = value
			const hasChanged = setInterval( () => {
				if ( element.style.visibility === value ) {
					clearInterval( hasChanged )
					resolve( 'visibility changed!' )
				}
			}, 50 )
		} )
	}

	const docLoaded = setInterval( () => {
		if ( document.readyState === 'complete' ) {
			clearInterval( docLoaded )
			init()
		}
	}, 100 )
}

export { slideHeader }
