module.exports = function (grunt) {
    grunt.initConfig({
        watch: {
            src: {
                files: ['**/*.scss', '**/src/*.js'],
                tasks: ['compass:dev', 'uglify', 'copy']
            }
        },
        uglify: {
            my_target: {
                options: {
                    beautify: false,
                    compress: false,
                    flatten: false
                },
                files: {
                    'assets/js/min/app.min.js': ['js/src/app.js']
                }
            }
        },
        compass: {
            dev: {
                options: {
                    sassDir: 'scss',
                    cssDir: 'css',
                    imagesPath: 'img',
                    noLineComments: false,
                    outputStyle: 'compressed'
                }
            }
        },
        copy: {
            files: {
                expand: true,
                dest: 'css',
                src: 'scss'
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
};
