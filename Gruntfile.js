module.exports = function(grunt) {

// Load all grunt-* tasks (load-grunt-tasks plugin)
require('load-grunt-tasks')(grunt);

require('time-grunt')(grunt);

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
            dest: 'assets/js/build/spring-production.js'
        }
    },

    uglify: {
        build: {
            src: 'assets/js/build/spring-production.js',
            dest: 'assets/js/build/spring-production.min.js'
        }
    },

    // TODO: Let's discuss how we want to implement this
    // imagemin: {
    //     dynamic: {
    //         files: [{
    //             expand: true,
    //             cwd: 'assets/img/',
    //             src: ['../../*.{png,jpg,gif}', '**/*.{png,jpg,gif}'],
    //             dest: 'assets/images/'
    //         }]
    //     }
    // },

    watch: {
        options: {
            livereload: true,
        },
        scripts: {
            files: ['assets/js/*.js', 'assets/js/lib/*.js'],
            tasks: ['jshint', 'concat'],
            options: {
                spawn: false
            }
        },
        css: {
            files: ['assets/css/scss/*.scss'],
            tasks: ['sass'],
            options: {
                spawn: false
            }
        }
    }
});

// Default task is to rebuild
grunt.registerTask('default', ['sass', 'concat']);

// Tasks for development
grunt.registerTask('build', ['sass', 'cssmin', 'concat', 'uglify']);
};