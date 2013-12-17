module.exports = function(grunt) {

// Project configuration
grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

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
    },

    cssmin: {
        combine: {
            files: {
                'assets/css/build/style.min.css': 'style.css'
            }
        }
    },

    uglify: {
        build: {
            src: 'assets/js/spring.js',
            dest: 'assets/js/build/spring.min.js'
        }
    },
});

// Load all grunt-* tasks
require('load-grunt-tasks')(grunt);

// Default tasks
grunt.registerTask('default', ['uglify', 'sass', 'cssmin']);

};