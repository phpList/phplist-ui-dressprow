module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        cssmin: {
            options: {
                mergeIntoShorthands: false,
                roundingPrecision: -1
            },
            target: {
                files: {
                    'css/all.min.css': ['../../css/reset.css', '../../css/jquery-ui-1.8.1.all.css', '../../css/app.css', '../../css/menu.css', 'css/base.css', 'css/layout.css', 'css/skeleton.css', 'css/style.css', 'css/gray.css']
                }
            }
        },

        uglify: {
            my_target: {
                files: {
                    'js/all.min.js': ['../../js/jquery-1.7.1.min.js', '../../js/jquery-ui-1.8.1.all.min.js', '../../js/jquery.tools.scrollable.js', '../../js/phplistapp.js', 'js/jquery.tablednd.js', 'js/phplist.js', 'jcarousellite_1.0.1.min.js']
                }
            }
        }


    });

    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');



};
