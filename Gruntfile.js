module.exports = function(grunt) {

	// 1. All configuration goes here 
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		concat: {   
			website: {
				src: [
					'src/js/vendors/dough.min.js',
					'src/js/vendors/hogan.min.js',
					'src/js/utility/helpers.js',
					'src/js/controllers/*.js',
					'src/js/models/*.js',
					'src/js/views/*.js',
					'src/js/app.js'
				],
				dest: 'assets/js/web.js',
			}
		},
		uglify: {
			build: {
				src: 'assets/js/web.js',
				dest: 'assets/js/web.min.js'
			}
		},
		watch: {
			scripts: {
				files: ['src/js/*.js', 'src/js/*/*.js'],
				tasks: ['concat', 'uglify'],
				options: {
					spawn: false,
				},
			} 
		}
	});

	// 3. Where we tell Grunt we plan to use this plug-in.
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
	grunt.registerTask('default', ['concat', 'uglify']);
};