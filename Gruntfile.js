module.exports = function(grunt) {

    var jquery = [
        "http://code.jquery.com/jquery-latest.js"
    ];

    var jsFileList = [ 
        "script/shared.js"
    ];

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            shared: { 
                options: {
                    'style': 'compressed'
                },
                files: {
                    'style.css': 'style/shared.scss'
                }
            }
        },
        uglify: {
            jquery: {
                files: [
                    {
                        src: jquery,
                        dest: "script/compiled/jquery.min.js"
                    }
                ]
            },
            shared: {
                files: [
                    {
                        src: jsFileList,
                        dest: "script/compiled/shared.min.js"
                    }
                ]
            }
        },
        watch: {
            sass: {
                files: 'style/*.scss',
                tasks: [
                    'sass:shared'
                ]
            },
            js: {
                files: 'script/*.js',
                tasks: [
                    'uglify:shared'
                ]
            }
        }
        
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Default task(s).
    grunt.registerTask('default', [
        'sass:shared',
        'uglify:jquery',
        'uglify:shared'
    ]);

};