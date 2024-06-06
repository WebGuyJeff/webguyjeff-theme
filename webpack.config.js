const path = require( 'path' )
const BrowserSyncPlugin = require( 'browser-sync-webpack-plugin' )
// @wordpress/scripts config.
const wordpressConfig = require( '@wordpress/scripts/config/webpack.config' )
// @wordpress/scripts helper which generates entry points from any '**/block.json' in 'src'.
const { getWebpackEntryPoints } = require( '@wordpress/scripts/utils/config' )

// See svgo.config.js to configure SVG manipulation.

module.exports = {
	...wordpressConfig,
	entry: {
		// @wordpress/scripts helper which generates entry points from any '**/block.json' in 'src'.
		...wordpressConfig.entry(),
		// 'example/output': './path/to/dir/entrypoint.js',
		'css/freedev': path.join( __dirname, '/src/css/freedev.scss' ),
		'css/freedev-admin': path.join( __dirname, '/src/css/freedev-admin.scss' ),
		'css/freedev-editor': path.join( __dirname, '/src/css/freedev-editor.scss' ),
		'css/freedev-dev': path.join( __dirname, '/src/css/freedev-dev.scss' ),
		'js/freedev': path.join( __dirname, '/src/js/freedev' ),
		// Legacy support for old page until migration to blocks is complete.
		'old/old-css': path.join( __dirname, '/src/old/old.scss' ),
		'old/old-js': path.join( __dirname, '/src/old/old' ),
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
