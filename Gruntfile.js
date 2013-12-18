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
                'style.css': 'assets/css/scss/style.scss'
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

    jshint: {
        beforeconcat: ['assets/js/*.js']
    },

    concat: {
      dist: {
        src: [
          'assets/js/lib/*.js',
          'assets/js/spring.js'
        ],
        dest: 'assets/js/build/production.js'
      }
    },

    uglify: {
        build: {
            src: 'assets/js/build/production.js',
            dest: 'assets/js/build/production.min.js'
        }
    },

    imagemin: {
        dynamic: {
            files: [{
                expand: true,
                cwd: 'assets/img/',
                src: ['../../*.{png,jpg,gif}', '**/*.{png,jpg,gif}'],
                dest: 'assets/images/'
            }]
        }
    },

    watch: {
        options: {
            livereload: true,
        },
        scripts: {
            files: ['assets/js/*.js', 'assets/js/lib/*.js'],
            tasks: ['jshint', 'concat', 'uglify'],
            options: {
                spawn: false,
            }
        },
        css: {
            files: ['assets/css/scss/*.scss'],
            tasks: ['sass', 'cssmin'],
            options: {
                spawn: false,
            }
        },
        images: {
            files: ['assets/images/**/*.{png,jpg,gif}', 'assets/images/*.{png,jpg,gif}', '*.{png,jpg,gif}'],
            tasks: ['imagemin'],
            options: {
                spawn: false,
            }
        }
    }
});

// Load all grunt-* tasks (load-grunt-tasks plugin)
require('load-grunt-tasks')(grunt);

// Default task is to rebuild
grunt.registerTask('default', ['sass', 'cssmin', 'concat', 'uglify', 'imagemin']);

// Tasks for development
// grunt.registerTask('dev', ['connect', 'watch']);
};