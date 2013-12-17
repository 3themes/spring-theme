module.exports = function(grunt) {

  // Project configuration
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    
    uglify: {
      build: {
        src: 'assets/js/spring.js',
        dest: 'assets/js/build/spring.min.js'
      }
    },
    
    sass: {
      dist: {
        options: {
          // Generates expanded style.css in theme root
          // cssmin will minify later
          style: 'expanded'
        },
        files: {
          'style.css': 'assets/scss/style.scss'
        }
      }
    }
  });

  // Load the plugin that provides the "uglify" task
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Load the plugin that provides the "sass" task
  grunt.loadNpmTasks('grunt-contrib-sass');

  // Default tasks
  grunt.registerTask('default', ['uglify', 'sass']);

};