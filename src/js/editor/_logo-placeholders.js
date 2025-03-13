/**
 * WebGuyJeff Logo Placeholders
 *
 * Set logo and slide header icon placeholder images in the editor.
 *
 * @package webguyjeff-theme
 * @author Jefferson Real <jeff@webguyjeff.com>
 * @copyright Copyright 2025 Jefferson Real
 */

const logoPlaceholders = () => {

	const wpLogoSelector        = '.wp-block-site-logo'
	const wpLogoImgSelector     = '.custom-logo'
	const wgjHeaderIconSelector = '.logoContainer .wp-block-image'
	const wpPlaceholderSelector = '.block-editor-media-placeholder'
	const logoPath              = '/assets/image/placeholder-logo.png'
	const iconPath              = '/assets/image/placeholder-logo-icon.png'


	const appendPlaceholder = ( el, type ) => {
		// webguyjeffThemelocalizedEditorVars enqeued by wp_localize_script().
		const { templateDirectoryUri } = webguyjeffThemelocalizedEditorVars
		const wpPlaceholder            = el.querySelector( wpPlaceholderSelector )
		const img                      = document.createElement( 'img' )
		wpPlaceholder.style.display = 'none'
		img.src = templateDirectoryUri + ( type === 'logo' ? logoPath : iconPath )
		img.alt = type === 'logo' ? 'Logo' : 'Icon'
		img.width = type === 'logo' ? '120' : '60'
		img.classList.add( type === 'logo' ? 'placeholder-logo' : 'placeholder-icon' )
		el.appendChild( img )
	}


	const setPlaceholderImages = () => {

		const logos    = document.querySelectorAll( wpLogoSelector )
		const icon     = document.querySelector( wgjHeaderIconSelector )

		if ( Object.keys( logos ).length > 0 ) {
			logos.forEach( ( logo ) => {
				if ( ! logo.querySelector( 'img' ) ) {
					appendPlaceholder( logo, 'logo' )
				}
				// Observe logo for further changes.
				const observer = new MutationObserver( () => {
					if ( ! logo.querySelector( 'img' ) ) {
						appendPlaceholder( logo, 'logo' )
					} else if ( logo.querySelector( wpLogoImgSelector ) && logo.querySelector( '.placeholder-logo' ) ) {
						const placeholder = logo.querySelector( '.placeholder-logo' )
						logo.removeChild( placeholder )
					}
				} )
				observer.observe( logo, { childList: true, subtree: true } )
			} )
		}
		if ( icon ) {
			if ( ! icon.querySelector( 'img' ) ) {
				appendPlaceholder( icon, 'icon' )
			}
			// Observe icon for further changes.
			const observer = new MutationObserver( () => {
				const images = icon.querySelectorAll( 'img' )
				if ( ! icon.querySelector( 'img' ) ) {
					appendPlaceholder( icon, 'icon' )
				} else if ( Object.keys( images ).length > 1 && icon.querySelector( '.placeholder-icon' ) ) {
					const placeholder = icon.querySelector( '.placeholder-icon' )
					icon.removeChild( placeholder )
				}
			} )
			observer.observe( icon, { childList: true, subtree: true } )
		}
	}


	let docWait = 30 // x100ms === 5 seconds.

	const docLoaded = setInterval( () => {
		const hasLogo = document.querySelector( wpLogoSelector ) || document.querySelector( wgjHeaderIconSelector )
		docWait = docWait - 1
		if ( document.readyState === 'complete' && hasLogo ) {
			clearInterval( docLoaded )
			setPlaceholderImages()
		}
	}, 100 )
}

export { logoPlaceholders }
