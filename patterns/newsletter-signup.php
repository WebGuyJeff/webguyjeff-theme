<?php
/**
 * Title: Newsletter Signup
 * Slug: freedev/newsletter-signup
 * Categories: freedev
 * Keywords: newsletter, signup
 *
 * @package freedev
 */

$strings = array(
	'title'           => __( 'Be the First to Know', 'freedev' ),
	'byline'          => __( 'Keep in touch for the latest news, products and offers by signing up to receive newsletters, and follow us on social for more regular updates.', 'freedev' ),
	'smallprint_html' => 'Please click <a href="/privacy-policy/">here</a> to review our privacy policy before submitting.',
);

$image = FREEDEV_URL . 'assets/svg/pattern-images/shape-03.svg';

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"},"margin":{"bottom":"var:preset|spacing|50"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"1rem"}},"className":"has-overflow-hidden signup"} -->
	<div class="wp-block-columns alignwide has-overflow-hidden signup" style="border-radius:1rem;margin-bottom:var(--wp--preset--spacing--50);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
		<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|fdev-fg-alt"}}}},"backgroundColor":"fdev-green-dark","textColor":"fdev-fg-alt"} -->
		<div class="wp-block-column has-fdev-fg-alt-color has-fdev-green-dark-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60);flex-basis:50%">
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800","textTransform":"uppercase"}},"fontSize":"xxx-large","fontFamily":"body"} -->
			<h2 class="wp-block-heading has-text-align-center has-body-font-family has-xxx-large-font-size" style="font-style:normal;font-weight:800;text-transform:uppercase"><?php echo esc_html( $strings['title'] ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php echo esc_html( $strings['byline'] ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0">

				<!-- wp:shortcode -->
				[bigup_contact_form title=""]
				<!-- /wp:shortcode -->

				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size"><?php echo esc_html( $strings['smallprint_html'] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:block {"ref":210} /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full loyalty_image">
				<img src="<?php echo esc_html( $image ); ?>" alt="" />
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
