const BrowserSyncPlugin = require( 'browser-sync-webpack-plugin' )
// @wordpress/scripts config.
const wordpressConfig = require( '@wordpress/scripts/config/webpack.config' )

// See svgo.config.js to configure SVG manipulation.

module.exports = {
	...wordpressConfig,
	entry: {
		// 'example/output': './path/to/dir/entrypoint.js',
		'css/webguyjeff-theme': './src/css/webguyjeff-theme.scss',
		'css/webguyjeff-theme-admin': './src/css/webguyjeff-theme-admin.scss',
		'css/webguyjeff-theme-editor': './src/css/webguyjeff-theme-editor.scss',
		'css/webguyjeff-theme-dev': './src/css/webguyjeff-theme-dev.scss',
		'js/webguyjeff-theme': './src/js/webguyjeff-theme.js',
	},
	plugins: [
		...wordpressConfig.plugins,
		new BrowserSyncPlugin( {
			proxy: 'localhost:6969', // Live WordPress site. Using IP breaks it.
			ui: { port: 3001 }, // BrowserSync UI.
			port: 3000, // Dev port on localhost.
			logLevel: 'debug',
			reload: false, // false = webpack handles reloads (not sure if this works with files option).
			browser: "google-chrome-stable",
			files: [
				'src/**',
				'classes/**',
				'patterns/**',
				'parts/**',
				'templates/**',
				'**/**.json'
			]
		} )
	]
}
