<?php
namespace BigupWeb\Freedev;

/**
 * Admin Settings Handler.
 *
 * @package bigup-blocks
 * @author Jefferson Real <me@jeffersonreal.uk>
 * @copyright Copyright (c) 2023, Jefferson Real
 * @license GPL3+
 * @link https://jeffersonreal.uk
 * @package freedev
 */


/**
 * Freedev - Admin Settings.
 *
 * Hook into the WP admin area and add menu settings pages.
 */
class Settings {

	private const SLUG  = 'freedev-settings';
	public $admin_label = 'Freedev Theme';
	private $parent_slug;


	/**
	 * Populate the class properties.
	 */
	public function __construct() {
		$this->parent_slug = Settings_Parent::$page_slug;
	}


	public function register_admin_menu() {
		add_submenu_page(
			$this->parent_slug,                      // parent_slug
			$this->admin_label . ' Settings',        // page_title
			$this->admin_label,                      // menu_title
			'manage_options',                        // capability
			self::SLUG,                              // menu_slug
			array( &$this, 'create_settings_page' ), // function
			null,                                    // position
		);
	}


	public function create_settings_page() {
		// Get the active tab from the $_GET URL param.
		$tab = isset( $_GET['tab'] ) ? $_GET['tab'] : null;
		$theme_data = wp_get_theme();
		?>

		<div class="wrap">
			<h1>
				<?php echo esc_html( get_admin_page_title() ); ?>
			</h1>
			<p>These settings manage the Freedev theme.</p>

			<section>
				<h2>
					Information
				</h2>
				<table>
					<tbody>
						<tr>
							<td>Name</td>
							<td><?php echo $theme_data->get( 'Name' ); ?></td>
						</tr>
						<tr>
							<td>Theme URI</td>
							<td><a href="<?php echo $theme_data->get( 'ThemeURI' ); ?>"><?php echo $theme_data->get( 'ThemeURI' ); ?></a></td>
						</tr>
						<tr>
							<td>Description</td>
							<td><?php echo $theme_data->get( 'Description' ); ?></td>
						</tr>
						<tr>
							<td>Author</td>
							<td><?php echo $theme_data->get( 'Author' ); ?></td>
						</tr>
						<tr>
							<td>Author URI</td>
							<td><a href="<?php echo $theme_data->get( 'AuthorURI' ); ?>"><?php echo $theme_data->get( 'AuthorURI' ); ?></a></td>
						</tr>
						<tr>
							<td>Version</td>
							<td><?php echo $theme_data->get( 'Version' ); ?></td>
						</tr>
					</tbody>
				<table>
			</section>

			<nav class="nav-tab-wrapper">                                                                                                                              
				<a
					href="?page=<?php echo self::SLUG; ?>"
					class="nav-tab <?php echo ( $tab === null ) ? 'nav-tab-active' : ''; ?>"
				>
					Identity
				</a>
				<a
					href="?page=<?php echo self::SLUG; ?>&tab=verification"
					class="nav-tab <?php echo ( $tab === 'verification' ) ? 'nav-tab-active' : ''; ?>"
				>
					Verification
				</a>
			</nav>

			<div class="tab-content">
				<?php
				switch ( $tab ) :
					case 'verification':
						Settings_Tab_Verification::output_form();
						break;
					default:
						Settings_Tab_Identity::output_form();
						break;
				endswitch;
				?>
			</div>

		</div>

		<?php
	}


	/**
	 * Echo a link to the theme settings.
	 */
	public static function echo_dashboard_page_link( $link, $text, $description = '' ) {
		$tooltip = ( $description ) ? 'title="' . $description . '"' : '';
		?>
		<a href="<?php echo esc_url( $link ); ?>" <?php echo $tooltip; ?>>
			<?php echo esc_html( $text ); ?>
		</a>
		<?php
	}


	/**
	 * Echo settings link on the dashboard page.
	 */
	public function echo_settings_link_callback() {
		self::echo_dashboard_page_link(
			'/wp-admin/admin.php?page=' . self::SLUG,
			'Freedev theme settings'
		);
	}
}
