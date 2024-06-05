<?php
/**
 * Title: Partner Post Content
 * Slug: freedev/partner-post-content
 * Categories: freedev
 * Keywords: partner, post
 *
 * @package freedev
 */

$strings = array(
	'title'  => __( 'Estate Agents', 'freedev' ),
	'button' => __( 'Visit Our Partner', 'freedev' ),
);

$partner_colour = '#fe6150';
$partner_image  = FREEDEV_URL . 'assets/svg/pattern-images/shape-05.svg';

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0"}},"className":"partner-container","layout":{"type":"constrained"},"metadata":{"name":""}} -->
<div class="wp-block-group alignfull partner-container">
	<!-- wp:bigup-blocks/vector-shapes {"currentColor":"<?php echo esc_html( $partner_colour ); ?>","className":"alignfull"} -->
	<svg
		xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 60" style="color:<?php echo esc_html( $partner_colour ); ?>;display:block" class="wp-block-bigup-blocks-vector-shapes alignfull">
		<path fill="currentColor" d="M960 24c641 55 960 0 960 0v37H0V24s319-54 960 0Z"></path>
	</svg>
	<!-- /wp:bigup-blocks/vector-shapes -->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}},"color":{"background":"<?php echo esc_html( $partner_colour ); ?>"}},"className":"partner-container\u002d\u002dinner-top","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull partner-container--inner-top has-background" style="background-color:<?php echo esc_html( $partner_colour ); ?>;padding-top:0;padding-bottom:0">
		<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull">
			<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"className":".partner-container\u002d\u002dcolumns"} -->
			<div class="wp-block-columns alignwide .partner-container--columns" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:column {"width":"50%"} -->
				<div class="wp-block-column" style="flex-basis:50%">
					<!-- wp:group {"style":{"color":{"text":"<?php echo esc_html( $partner_colour ); ?>"},"elements":{"link":{"color":{"text":"<?php echo esc_html( $partner_colour ); ?>"}}}},"className":"partner-container\u002d\u002dimage","layout":{"type":"constrained"}} -->
					<div class="wp-block-group partner-container--image has-text-color has-link-color" style="color:<?php echo esc_html( $partner_colour ); ?>">
						<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"2rem","width":"1rem"}}} -->
						<figure class="wp-block-image size-full has-custom-border">
							<img src="<?php echo esc_html( $partner_image ); ?>" alt="" style="border-width:1rem;border-radius:2rem"/>
						</figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
				<div class="wp-block-column" style="padding-top:0;padding-bottom:0;flex-basis:50%">
					<!-- wp:group {"style":{"border":{"radius":"1rem"},"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"0"}},"className":"partner-container\u002d\u002dcopy","layout":{"type":"constrained"}} -->
					<div class="wp-block-group partner-container--copy" style="border-radius:1rem;padding-top:0;padding-bottom:0">
						<!-- wp:group {"style":{"border":{"radius":"1rem"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
						<div class="wp-block-group" style="border-radius:1rem;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">
							<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|bur-bg"}}},"typography":{"textTransform":"capitalize"}},"textColor":"bur-bg","fontSize":"xxx-large"} -->
							<h3 class="wp-block-heading has-bur-bg-color has-text-color has-link-color has-xxx-large-font-size" style="text-transform:capitalize"><?php echo esc_html( $strings['title'] ); ?></h3>
							<!-- /wp:heading -->
						</div>
						<!-- /wp:group -->
						<!-- wp:group {"style":{"border":{"radius":"2rem","width":"0rem","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|bur-bg-alt"}}}},"backgroundColor":"bur-bg-alt","textColor":"bur-bg-alt","className":"has-shadow-soft","layout":{"type":"constrained"}} -->
						<div class="wp-block-group has-shadow-soft has-bur-bg-alt-color has-bur-bg-alt-background-color has-text-color has-background has-link-color" style="border-style:none;border-width:0rem;border-radius:2rem">
							<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|bur-fg-alt"}}},"border":{"radius":"1rem"}},"textColor":"bur-fg-alt","layout":{"type":"constrained"}} -->
							<div class="wp-block-group has-bur-fg-alt-color has-text-color has-link-color" style="border-radius:1rem;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
								<!-- wp:paragraph -->
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<!-- /wp:paragraph -->
								<!-- wp:paragraph -->
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
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
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}},"color":{"background":"<?php echo esc_html( $partner_colour ); ?>"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-background" style="background-color:<?php echo esc_html( $partner_colour ); ?>;padding-top:0;padding-bottom:0">
		<!-- wp:bigup-blocks/vector-shapes {"currentColor":"#044171","className":"alignfull"} -->
		<svg
			xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 60" style="color:#044171;display:block" class="wp-block-bigup-blocks-vector-shapes alignfull">
			<path fill="currentColor" d="M960 24c641 55 960 0 960 0v37H0V24s319-54 960 0Z"></path>
		</svg>
		<!-- /wp:bigup-blocks/vector-shapes -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"backgroundColor":"bur-bg-alt","className":"partner-container\u002d\u002dinner-bottom","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull partner-container--inner-bottom has-bur-bg-alt-background-color has-background" style="padding-top:0;padding-bottom:0">
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
			<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"}}},"className":".partner-container\u002d\u002dcolumns"} -->
			<div class="wp-block-columns alignwide .partner-container--columns" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
				<div class="wp-block-column" style="padding-top:0;padding-bottom:0;flex-basis:50%">
					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0">
						<!-- wp:button {"style":{"color":{"background":"<?php echo esc_html( $partner_colour ); ?>"}},"className":"is-style-fill"} -->
						<div class="wp-block-button is-style-fill">
							<a class="wp-block-button__link has-background wp-element-button" href="https://lucimorganestateagency.com/who-we-are/" style="background-color:<?php echo esc_html( $partner_colour ); ?>" target="_blank" rel="noreferrer noopener"><?php echo esc_html( $strings['button'] ); ?></a>
						</div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"50%"} -->
				<div class="wp-block-column" style="flex-basis:50%"></div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"backgroundColor":"bur-bg-alt","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-bur-bg-alt-background-color has-background" style="padding-top:0;padding-bottom:0">
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
