<?php
/**
 * Title: Job Vacancy Description
 * Slug: freedev/job-vacancy-description
 * Categories: freedev
 * Keywords: job, vacancy
 *
 * @package freedev
 */

$strings = array(
	'job_title'      => __( 'Mortgage and Protection Adviser', 'freedev' ),
	'details'        => array(
		'title'       => __( 'Job details', 'freedev' ),
		'pay_title'   => __( 'Pay', 'freedev' ),
		'type_title'  => __( 'Job Type', 'freedev' ),
		'shift_title' => __( 'Shift', 'freedev' ),
	),
	'benefits_title' => __( 'Benefits', 'freedev' ),
	'duties_title'   => __( 'Duties / key responsibilities', 'freedev' ),
	'button'         => __( 'Apply Now', 'freedev' ),
);

$icons = array(
	'money'     => FREEDEV_URL . 'assets/svg/icons/money.svg',
	'briefcase' => FREEDEV_URL . 'assets/svg/icons/briefcase.svg',
	'clock'     => FREEDEV_URL . 'assets/svg/icons/clock.svg',
);

?>
<!-- wp:group {"align":"wide","style":{"border":{"radius":"1rem"},"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}},"className":"has-overflow-hidden has-shadow-soft","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-overflow-hidden has-shadow-soft" style="border-radius:1rem;padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"0","right":"0","left":"0"},"blockGap":"var:preset|spacing|40"},"elements":{"link":{"color":{"text":"var:preset|color|bur-fg-alt"}}}},"backgroundColor":"bur-bg-alt","textColor":"bur-fg-alt","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide has-bur-fg-alt-color has-bur-bg-alt-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:0;padding-left:0">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
			<!-- wp:heading {"textAlign":"right","align":"wide"} -->
			<h2 class="wp-block-heading alignwide has-text-align-right" id="protection"><?php echo esc_html( $strings['job_title'] ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:bigup-blocks/vector-shapes {"currentColor":"#fcfcfc"} -->
		<svg
			xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 60" style="color:#fcfcfc;display:block" class="wp-block-bigup-blocks-vector-shapes alignfull">
			<path fill="currentColor" d="M960 24c641 55 960 0 960 0v37H0V24s319-54 960 0Z"></path>
		</svg>
		<!-- /wp:bigup-blocks/vector-shapes -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
		<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"xx-large","fontFamily":"body"} -->
		<h4 class="wp-block-heading has-body-font-family has-xx-large-font-size" style="font-style:normal;font-weight:800"><?php echo esc_html( $strings['details']['title'] ); ?></h4>
		<!-- /wp:heading -->
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"id":234,"width":"26px","sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large is-resized">
					<img src="<?php echo esc_html( $icons['money'] ); ?>" alt="" class="wp-image-234" style="width:26px"/>
				</figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontFamily":"body"} -->
				<h5 class="wp-block-heading has-body-font-family" style="font-style:normal;font-weight:800"><?php echo esc_html( $strings['details']['pay_title'] ); ?></h5>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph -->
			<p>
				<strong>£20,000 - £130,000 a year</strong>
			</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"id":232,"width":"26px","sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large is-resized">
					<img src="<?php echo esc_html( $icons['briefcase'] ); ?>" alt="" class="wp-image-232" style="width:26px"/>
				</figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontFamily":"body"} -->
				<h5 class="wp-block-heading has-body-font-family" style="font-style:normal;font-weight:800"><?php echo esc_html( $strings['details']['type_title'] ); ?></h5>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph -->
			<p>Permanent / Full-time</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"id":233,"width":"26px","sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large is-resized">
					<img src="<?php echo esc_html( $icons['clock'] ); ?>" alt="" class="wp-image-233" style="width:26px"/>
				</figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontFamily":"body"} -->
				<h5 class="wp-block-heading has-body-font-family" style="font-style:normal;font-weight:800"><?php echo esc_html( $strings['details']['shift_title'] ); ?></h5>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph -->
			<p>Monday to Friday</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
		<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"xx-large","fontFamily":"body"} -->
		<h4 class="wp-block-heading has-body-font-family has-xx-large-font-size" style="font-style:normal;font-weight:800"><?php echo esc_html( $strings['benefits_title'] ); ?></h4>
		<!-- /wp:heading -->
		<!-- wp:list -->
		<ul>
			<!-- wp:list-item -->
			<li>At vero eos et accusamus</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Et harum quidem</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Nam libero tempore</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Temporibus autem</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Itaque earum</li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->
		<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"xx-large","fontFamily":"body"} -->
		<h4 class="wp-block-heading has-body-font-family has-xx-large-font-size" style="font-style:normal;font-weight:800"><?php echo esc_html( $strings['duties_title'] ); ?></h4>
		<!-- /wp:heading -->
		<!-- wp:list -->
		<ul>
			<!-- wp:list-item -->
			<li>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur</li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button">
				<a class="wp-block-button__link wp-element-button"><?php echo esc_html( $strings['button'] ); ?></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
