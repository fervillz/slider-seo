module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		sass: {
			options: {
				includePaths: ['sass']
			},
			dist: {
				options: {
					outputStyle: 'expanded',
					sourceMap: true,
					style: 'expanded',
				},
				files: {
					//'css/app.css': 'scss/app.scss'
					'admin/css/admin.css': 'sass/admin.scss',
					'admin/css/slider_seo_style.css': 'sass/frontend.scss'
				}
			}
		},

		pot: {
					options:{
						text_domain: 'slider-seo', //Your text domain. Produces my-text-domain.pot 
						dest: 'lang/', //directory to place the pot file 
						keywords: [ 'gettext', '_e' ], //functions to look for 
						msgmerge: true
					},
					files:{
						src:  [ '**/*.php' ], //Parse all php files 
						expand: true,
			}
		},

		watch: {
			grunt: {
				options: {
					reload: true
				},
				files: ['Gruntfile.js']
			},

			sass: {
				files: 'sass/**/*.scss',
				tasks: ['sass']
			},

			pot: {
				files: [ '**/*.php' ],
				tasks: ['pot']
			}
		}
	});

	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-pot');

	grunt.registerTask('build', ['sass']);
	grunt.registerTask('default', ['build','watch']);
}
