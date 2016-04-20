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

		autoprefixer:{
			dist: {
				files: {
					'admin/css/admin.css': 'admin/css/admin.css',
				},
			},
		},


		cssmin: {
			options: {
				shorthandCompacting: false,
				roundingPrecision: -1
			},
			target: {
				files: {
					'admin/css/admin.min.css': ['admin/css/admin.css']
				}
			}
		},

		watch: {
			grunt: {
				options: {
					reload: true
				},
				files: ['Gruntfile.js']
			},

			css: {
				files: 'sass/**/*.scss',
				tasks: ['sass', 'autoprefixer', 'cssmin'],
			},
		}
	});

	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-autoprefixer');

	grunt.registerTask('default', ['css','watch']);
	grunt.registerTask('css', ['sass', 'autoprefixer', 'cssmin']);
	grunt.registerTask('minify', ['cssmin']);
}
