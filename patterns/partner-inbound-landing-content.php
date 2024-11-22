<?php
/**
 * Title: Partner Inbound Landing Content
 * Slug: webguyjeff/partner-inbound-landing-content
 * Categories: webguyjeff
 * Keywords: partner, backlink
 *
 * @package webguyjeff
 */

$strings = array(
	'section1' => array(
		'title'   => __( 'Expert Advice', 'webguyjeff' ),
		'eyebrow' => __( 'Professional Agency', 'webguyjeff' ),
		'button'  => __( 'Request a callback', 'webguyjeff' ),
		'image'   => WEBGUYJEFF_URL . 'assets/svg/pattern-images/shape-01.svg',
	),
	'section2' => array(
		'title'   => __( 'Independent Advice', 'webguyjeff' ),
		'eyebrow' => __( 'In the heart of your town', 'webguyjeff' ),
		'button'  => __( 'Get in touch today', 'webguyjeff' ),
		'image'   => WEBGUYJEFF_URL . 'assets/svg/pattern-images/shape-03.svg',
	),
	'section3' => array(
		'title'    => __( 'Joanna Bloggs', 'webguyjeff' ),
		'eyebrow'  => __( 'Professional Consultant', 'webguyjeff' ),
		'subtitle' => __( 'Contact Joanna', 'webguyjeff' ),
		'image'    => WEBGUYJEFF_URL . 'assets/svg/pattern-images/shape-02.svg',
	),
	'cta'      => array(
		'title'  => __( 'Get in Touch', 'webguyjeff' ),
		'byline' => __( 'Our advisers are here and ready to help you.', 'webguyjeff' ),
		'button' => __( 'Contact', 'webguyjeff' ),
	),
);

?>
<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0"}},"className":"partner-container","layout":{"type":"constrained"},"metadata":{"name":""}} -->
	<div class="wp-block-group alignfull partner-container">
		<!-- wp:bigup-blocks/vector-shapes {"currentColor":"#04724f","className":"alignfull"} -->
		<svg
			xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 60" style="color:#04724f;display:block" class="wp-block-bigup-blocks-vector-shapes alignfull">
			<path fill="currentColor" d="M960 24c641 55 960 0 960 0v37H0V24s319-54 960 0Z"></path>
		</svg>
		<!-- /wp:bigup-blocks/vector-shapes -->
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"backgroundColor":"wgj-green-dark","className":"partner-container\u002d\u002dinner-top","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull partner-container--inner-top has-wgj-green-dark-background-color has-background" style="padding-top:0;padding-bottom:0">
			<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
				<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:column {"width":"50%"} -->
					<div class="wp-block-column" style="flex-basis:50%">
						<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|wgj-yellow"}}}},"textColor":"wgj-yellow","className":"partner-container\u002d\u002dimage","layout":{"type":"constrained"}} -->
						<div class="wp-block-group partner-container--image has-wgj-yellow-color has-text-color has-link-color">
							<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"2rem","width":"1rem"}},"className":"partner-container\u002d\u002dlogo"} -->
							<figure class="wp-block-image size-full has-custom-border partner-container--logo">
								<img src="<?php echo esc_html( $strings['section1']['image'] ); ?>" alt="" style="border-width:1rem;border-radius:2rem;aspect-ratio:1;object-fit:cover"/>
							</figure>
							<!-- /wp:image -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
					<div class="wp-block-column" style="padding-top:0;padding-bottom:0;flex-basis:50%">
						<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|wgj-fg-alt"}}},"border":{"radius":"1rem"}},"textColor":"wgj-fg-alt","layout":{"type":"constrained"}} -->
						<div class="wp-block-group has-wgj-fg-alt-color has-text-color has-link-color" style="border-radius:1rem;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
							<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
							<div class="wp-block-group">
								<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"large","fontFamily":"body"} -->
								<h3 class="wp-block-heading has-body-font-family has-large-font-size" style="font-style:italic;font-weight:400"><?php echo esc_html( $strings['section1']['eyebrow'] ); ?></h3>
								<!-- /wp:heading -->
								<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
								<h2 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php echo esc_html( $strings['section1']['title'] ); ?></h2>
								<!-- /wp:heading -->
							</div>
							<!-- /wp:group -->
							<!-- wp:paragraph -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<!-- /wp:paragraph -->
							<!-- wp:buttons -->
							<div class="wp-block-buttons">
								<!-- wp:button -->
								<div class="wp-block-button">
									<a class="wp-block-button__link wp-element-button" href="#" target="_blank" rel="noreferrer noopener"><?php echo esc_html( $strings['section1']['button'] ); ?></a>
								</div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"backgroundColor":"wgj-green-dark","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-wgj-green-dark-background-color has-background" style="padding-top:0;padding-bottom:0">
			<!-- wp:bigup-blocks/vector-shapes {"currentColor":"#ffb129","className":"alignfull"} -->
			<svg
				xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 60" style="color:#ffb129;display:block" class="wp-block-bigup-blocks-vector-shapes alignfull">
				<path fill="currentColor" d="M960 24c641 55 960 0 960 0v37H0V24s319-54 960 0Z"></path>
			</svg>
			<!-- /wp:bigup-blocks/vector-shapes -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"},"metadata":{"name":""}} -->
	<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|wgj-fg"}}}},"backgroundColor":"wgj-yellow","textColor":"wgj-fg","className":"partner-container\u002d\u002dinner-top","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull partner-container--inner-top has-wgj-fg-color has-wgj-yellow-background-color has-text-color has-background has-link-color" style="padding-top:0;padding-bottom:0">
			<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
				<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
					<div class="wp-block-column" style="padding-top:0;padding-bottom:0;flex-basis:50%">
						<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"1rem"}},"layout":{"type":"constrained"}} -->
						<div class="wp-block-group" style="border-radius:1rem;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
							<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
							<div class="wp-block-group">
								<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"large","fontFamily":"body"} -->
								<h3 class="wp-block-heading has-body-font-family has-large-font-size" style="font-style:italic;font-weight:400"><?php echo esc_html( $strings['section2']['eyebrow'] ); ?></h3>
								<!-- /wp:heading -->
								<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
								<h2 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php echo esc_html( $strings['section2']['title'] ); ?></h2>
								<!-- /wp:heading -->
							</div>
							<!-- /wp:group -->
							<!-- wp:paragraph -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<!-- /wp:paragraph -->
							<!-- wp:buttons -->
							<div class="wp-block-buttons">
								<!-- wp:button -->
								<div class="wp-block-button">
									<a class="wp-block-button__link wp-element-button" href="#" target="_blank" rel="noreferrer noopener"><?php echo esc_html( $strings['section2']['button'] ); ?></a>
								</div>
								<!-- /wp:button -->
							</div>
							<!-- /wp:buttons -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"50%"} -->
					<div class="wp-block-column" style="flex-basis:50%">
						<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|wgj-yellow"}}}},"textColor":"wgj-yellow","layout":{"type":"constrained"}} -->
						<div class="wp-block-group has-wgj-yellow-color has-text-color has-link-color">
							<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"1rem"}}} -->
							<figure class="wp-block-image size-large has-custom-border">
								<img src="<?php echo esc_html( $strings['section2']['image'] ); ?>" alt="" style="border-radius:1rem;aspect-ratio:1;object-fit:cover"/>
							</figure>
							<!-- /wp:image -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"backgroundColor":"wgj-yellow","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-wgj-yellow-background-color has-background" style="padding-top:0;padding-bottom:0">
			<!-- wp:bigup-blocks/vector-shapes {"currentColor":"#fe6150","className":"alignfull"} -->
			<svg
				xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 60" style="color:#fe6150;display:block" class="wp-block-bigup-blocks-vector-shapes alignfull">
				<path fill="currentColor" d="M960 24c641 55 960 0 960 0v37H0V24s319-54 960 0Z"></path>
			</svg>
			<!-- /wp:bigup-blocks/vector-shapes -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"},"metadata":{"name":""}} -->
	<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|wgj-bg"}}}},"backgroundColor":"wgj-accent","textColor":"wgj-bg","className":"partner-container\u002d\u002dinner-top","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull partner-container--inner-top has-wgj-bg-color has-wgj-accent-background-color has-text-color has-background has-link-color" style="padding-top:0;padding-bottom:0">
			<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
				<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
				<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:column {"width":"50%"} -->
					<div class="wp-block-column" style="flex-basis:50%">
						<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|wgj-yellow"}}}},"textColor":"wgj-yellow","layout":{"type":"constrained"}} -->
						<div class="wp-block-group has-wgj-yellow-color has-text-color has-link-color">
							<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1rem"}}} -->
							<figure class="wp-block-image size-full has-custom-border">
								<img src="<?php echo esc_html( $strings['section3']['image'] ); ?>" alt="" style="border-radius:1rem;aspect-ratio:1;object-fit:cover"/>
							</figure>
							<!-- /wp:image -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
					<div class="wp-block-column" style="padding-top:0;padding-bottom:0;flex-basis:50%">
						<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"1rem"}},"layout":{"type":"constrained"}} -->
						<div class="wp-block-group" style="border-radius:1rem;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
							<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
							<div class="wp-block-group">
								<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"large","fontFamily":"body"} -->
								<h3 class="wp-block-heading has-body-font-family has-large-font-size" style="font-style:italic;font-weight:400"><?php echo esc_html( $strings['section3']['eyebrow'] ); ?></h3>
								<!-- /wp:heading -->
								<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
								<h2 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php echo esc_html( $strings['section3']['title'] ); ?></h2>
								<!-- /wp:heading -->
							</div>
							<!-- /wp:group -->
							<!-- wp:paragraph -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<!-- /wp:paragraph -->
							<!-- wp:heading {"level":4,"fontSize":"x-large"} -->
							<h4 class="wp-block-heading has-x-large-font-size"><?php echo esc_html( $strings['section3']['subtitle'] ); ?></h4>
							<!-- /wp:heading -->
							<!-- wp:paragraph -->
							<p>Address First Line
								<br>Address Second Line
								<br>City
								<br>County
								<br>POST CODE
							</p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph -->
							<p>
								<strong>Mobile: </strong>
								<a href="tel:#">07777 0000000</a>
								<br>
								<strong>Office: </strong>
								<a href="tel:#">01234 0000 000</a>
								<br>
								<strong>Email: </strong>
								<a href="mailto:#">email@address.example</a>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->

				<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
					<!-- wp:query {"queryId":44,"query":{"perPage":"1","pages":0,"offset":0,"postType":"review","order":"desc","orderBy":"date","author":"","search":"Charlotte has been faultless","exclude":[],"sticky":"","inherit":false,"parents":[]},"align":"wide"} -->
					<div class="wp-block-query alignwide">
						<!-- wp:post-template {"layout":{"type":"constrained"}} -->
						<!-- wp:post-title {"textAlign":"center"} /-->
						<!-- wp:post-content /-->
						<!-- /wp:post-template -->
					</div>
					<!-- /wp:query -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"backgroundColor":"wgj-accent","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-wgj-accent-background-color has-background" style="padding-top:0;padding-bottom:0">
			<!-- wp:bigup-blocks/vector-shapes {"currentColor":"#fcfcfc","className":"alignfull"} -->
			<svg
				xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 60" style="color:#fcfcfc;display:block" class="wp-block-bigup-blocks-vector-shapes alignfull">
				<path fill="currentColor" d="M960 24c641 55 960 0 960 0v37H0V24s319-54 960 0Z"></path>
			</svg>
			<!-- /wp:bigup-blocks/vector-shapes -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"webguyjeff-accent","className":"has-responsive-h2","layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-responsive-h2 has-webguyjeff-accent-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
			<p class="has-text-align-center has-large-font-size"><?php echo esc_html( $strings['cta']['byline'] ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"textAlign":"center","textColor":"webguyjeff-fg-alt","fontSize":"display-medium"} -->
			<h2 class="wp-block-heading has-text-align-center has-webguyjeff-fg-alt-color has-text-color has-display-medium-font-size"><?php echo esc_html( $strings['cta']['title'] ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:button {"textColor":"webguyjeff-fg-alt","className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill">
					<a class="wp-block-button__link has-webguyjeff-fg-alt-color has-text-color wp-element-button" href="#" target="_blank" rel="noreferrer noopener"><?php echo esc_html( $strings['cta']['button'] ); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
