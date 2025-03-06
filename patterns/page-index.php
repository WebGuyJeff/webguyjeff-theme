<?php
/**
 * Title: Page Index
 * Slug: webguyjeff-theme/page-index
 * Categories: webguyjeff-theme
 * Keywords: index
 *
 * @package webguyjeff-theme
 */

$strings = array(
	'title'    => __( 'Explore this Page', 'webguyjeff-theme' ),
	'section1' => __( 'Section 1', 'webguyjeff-theme' ),
	'section2' => __( 'Section 2', 'webguyjeff-theme' ),
	'section3' => __( 'Section 3', 'webguyjeff-theme' ),
	'faq'      => __( 'Jump to FAQs', 'webguyjeff-theme' ),
);

?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"0","right":"0","left":"0"}}},"backgroundColor":"wgj-bg-alt","className":"has-overflow-hidden has-border-radius-medium","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide has-overflow-hidden has-border-radius-medium has-wgj-bg-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:0;padding-left:0">
		<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|wgj-fg-alt"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"wgj-fg-alt","fontSize":"xxx-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-wgj-fg-alt-color has-text-color has-link-color has-xxx-large-font-size" style="font-style:normal;font-weight:700"><?php echo esc_html( $strings['title'] ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"33.34%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|wgj-fg"}}}},"backgroundColor":"wgj-yellow","textColor":"wgj-fg"} -->
			<div class="wp-block-column has-wgj-fg-color has-wgj-yellow-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40);flex-basis:33.34%">
				<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
				<div class="wp-block-group alignwide">
					<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"800","textTransform":"uppercase"}},"fontSize":"xx-large","fontFamily":"body"} -->
					<h4 class="wp-block-heading has-body-font-family has-xx-large-font-size" style="font-style:normal;font-weight:800;text-transform:uppercase">
						<a href="#"><?php echo esc_html( $strings['section1'] ); ?></a>
					</h4>
					<!-- /wp:heading -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph -->
						<p>
							<a href="#">
								<strong>Nam libero tempore</strong>
							</a>
						</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p>
							<a href="#">
								<strong>Et harum quidem</strong>
							</a>
						</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p>
							<a href="#">
								<strong>Itaque earum</strong>
							</a>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"width":"33.34%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|wgj-fg-alt"}}}},"backgroundColor":"wgj-green-light","textColor":"wgj-fg-alt"} -->
			<div class="wp-block-column has-wgj-fg-alt-color has-wgj-green-light-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40);flex-basis:33.34%">
				<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
				<div class="wp-block-group alignwide">
					<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"800","textTransform":"uppercase"}},"fontSize":"xx-large","fontFamily":"body"} -->
					<h4 class="wp-block-heading has-body-font-family has-xx-large-font-size" style="font-style:normal;font-weight:800;text-transform:uppercase">
						<a href="#"><?php echo esc_html( $strings['section2'] ); ?></a>
					</h4>
					<!-- /wp:heading -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph -->
						<p>
							<a href="#">
								Sed ut perspiciatis unde
							</a>
						</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p>
							<a href="#">
								Nemo enim ipsam voluptatem
							</a>
						</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p>
							<a href="#">
								Quis autem vel eum iure reprehenderit
							</a>
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"stretch","width":"33.33%","style":{"spacing":{"blockGap":"0"}}} -->
			<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:33.33%">
				<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|wgj-fg-alt"}}}},"backgroundColor":"wgj-accent","textColor":"wgj-fg-alt","layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group alignwide has-wgj-fg-alt-color has-wgj-accent-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
					<div class="wp-block-group alignwide">
						<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"800","textTransform":"uppercase"}},"fontSize":"xx-large","fontFamily":"body"} -->
						<h4 class="wp-block-heading has-body-font-family has-xx-large-font-size" style="font-style:normal;font-weight:800;text-transform:uppercase">
							<a href="#"><?php echo esc_html( $strings['section3'] ); ?></a>
						</h4>
						<!-- /wp:heading -->
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p>
								<a href="#">
									Lorem ipsum dolor sit amet
								</a>
							</p>
							<!-- /wp:paragraph -->
							<!-- wp:paragraph -->
							<p>
								<a href="#">
									Excepteur sint occaecat
								</a>
							</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"dimensions":{"minHeight":"100%"}},"backgroundColor":"wgj-green-lightest","layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group alignwide has-wgj-green-lightest-background-color has-background" style="min-height:100%;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"800","textTransform":"uppercase"},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"x-large","fontFamily":"body"} -->
					<h4 class="wp-block-heading has-body-font-family has-x-large-font-size" style="font-style:normal;font-weight:800;text-transform:uppercase">
						<a href="#faq"><?php echo esc_html( $strings['faq'] ); ?></a>
					</h4>
					<!-- /wp:heading -->
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
