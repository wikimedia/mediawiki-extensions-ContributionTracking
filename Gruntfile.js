/*!
 * Grunt file
 *
 * @package ContributionTracking
 */

/*jshint node:true */
module.exports = function ( grunt ) {
	'use strict';
	grunt.loadNpmTasks( 'grunt-contrib-jshint' );
	grunt.loadNpmTasks( 'grunt-banana-checker' );

	grunt.initConfig( {
		jshint: {
			options: {
				jshintrc: true
			},
			all: [
				'**/*.js',
				'!node_modules/**'
			]
		},
		banana: {
			all: ['i18n/']
		}
	} );

	grunt.registerTask( 'test', [ 'jshint', 'banana' ] );
	grunt.registerTask( 'default', 'test' );
};
