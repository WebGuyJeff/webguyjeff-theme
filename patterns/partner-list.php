<?php
/**
 * Title: Partner List
 * Slug: webguyjeff-theme/partner-list
 * Categories: webguyjeff-theme
 * Keywords: partner, list
 *
 * @package webguyjeff-theme
 */

$strings = array(
	'title' => __( 'Browse our Partners', 'webguyjeff-theme' ),
);

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"wgj-yellow","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-wgj-yellow-background-color has-background" id="partners" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:0;padding-bottom:var(--wp--preset--spacing--70);padding-left:0">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="padding-right:0;padding-left:0">
		<!-- wp:heading {"textAlign":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html( $strings['title'] ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:query {"queryId":11,"query":{"perPage":"20","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[27]}},"align":"wide"} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":5}} -->
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","wideSize":"12rem"}} -->
			<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
				<!-- wp:post-featured-image {"isLink":true,"width":"80%","style":{"border":{"radius":"1rem"}},"className":"browse-partner\u002d\u002dimage"} /-->
				<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"fontSize":"medium"} /-->
			</div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
