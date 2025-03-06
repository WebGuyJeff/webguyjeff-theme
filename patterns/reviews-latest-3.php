<?php
/**
 * Title: Reviews: Latest 3
 * Slug: webguyjeff-theme/reviews-latest-3
 * Categories: webguyjeff-theme
 * Keywords: reviews, latest, section
 *
 * @package webguyjeff-theme
 */

$strings = array(
	'title'  => __( 'Reviews', 'webguyjeff-theme' ),
	'byline' => __( 'What our customers are saying', 'webguyjeff-theme' ),
	'button' => __( 'See All Reviews', 'webguyjeff-theme' ),
	'stars'  => '⭐⭐⭐⭐⭐',
);

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"},"metadata":{"name":"Reviews"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"textAlign":"center","fontSize":"xxx-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-xxx-large-font-size"><?php echo esc_html( $strings['title'] ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php echo esc_html( $strings['byline'] ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:spacer {"height":"1rem"} -->
	<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- wp:query {"queryId":24,"query":{"perPage":"3","pages":"1","offset":0,"postType":"review","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"className":"has-gutter-medium","layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"},"elements":{"link":{"color":{"text":"var:preset|color|wgj-bg"}}}},"backgroundColor":"wgj-bg-alt","textColor":"wgj-bg","className":"has-border-radius-medium has-overflow-hidden has-shadow-soft","layout":{"inherit":false}} -->
		<div class="wp-block-group has-border-radius-medium has-overflow-hidden has-shadow-soft has-wgj-bg-color has-wgj-bg-alt-background-color has-text-color has-background has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50"}}},"className":"gs_reveal","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group gs_reveal" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
				<p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--40)"><?php echo esc_html( $strings['stars'] ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:post-title {"textAlign":"center","level":3,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"italic","fontWeight":"700"}},"fontFamily":"body"} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"className":"gs_reveal","layout":{"type":"constrained"}} -->
			<div class="wp-block-group gs_reveal" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:post-excerpt {"showMoreOnNewLine":false} /-->
				<!-- wp:bigup-reviews/review-source-url {"linkText":"See full review \u003e"} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:bigup-blocks/vector-shapes {"currentColor":"#ffb129"} -->
				<svg
					xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 60" style="color:#ffb129;display:block" class="wp-block-bigup-blocks-vector-shapes alignfull">
					<path fill="currentColor" d="M960 24c641 55 960 0 960 0v37H0V24s319-54 960 0Z"></path>
				</svg>
				<!-- /wp:bigup-blocks/vector-shapes -->
				<!-- wp:columns {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|wgj-fg"}}}},"backgroundColor":"wgj-yellow","textColor":"wgj-fg"} -->
				<div class="wp-block-columns has-wgj-fg-color has-wgj-yellow-background-color has-text-color has-background has-link-color" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:column {"width":"50%"} -->
					<div class="wp-block-column" style="flex-basis:50%">
						<!-- wp:bigup-reviews/review-name /-->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"width":"30%"} -->
					<div class="wp-block-column" style="flex-basis:30%">
						<!-- wp:post-featured-image {"aspectRatio":"1","width":"4rem","height":"","align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"50rem","width":"0px","style":"none"}}} /-->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)">
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline">
			<a class="wp-block-button__link wp-element-button" href="/reviews/"><?php echo esc_html( $strings['button'] ); ?></a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
