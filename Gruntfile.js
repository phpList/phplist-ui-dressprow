module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
	concat: {
	  js: {
        src: [
			// Initial scripts from basic application
			'../../js/jquery-1.7.1.min.js',
			'../../js/jquery-ui-1.8.1.all.min.js',
			'../../js/jquery.tools.scrollable.js',
			'../../js/phplistapp.js',
			// Now override the above with the scripts from the UI theme
			'./js/jquery.tablednd.js',
			'./js/phplist.js',
			'./js/jcarousellite_1.0.1.min.js'
		],
        dest: './js/<%= pkg.name %>.all.js'
	  },
	  css: {
		src: [
			// Initial styles from basic application
			'../../css/reset.css',
			'../../css/jquery-ui-1.8.1.all.css',
			'../../css/app.css',
			'../../css/menu.css',
			// Now override the above with the styles from the UI theme
			'css/base.css',
			'css/layout.css',
			'css/skeleton.css',
			'css/style.css',
			'css/gray.css'		
		],
		dest: './css/<%= pkg.name %>.all.css'
	  }
	},
	cssmin: {
	  min: {
		files: {
		  './css/<%= pkg.name %>.all.min.css': ['./css/<%= pkg.name %>.all.css']
		}
	  }
	},
    uglify: {
      js: {
        files: {
          './js/<%= pkg.name %>.all.2.min.js': ['./js/<%= pkg.name %>.all.js']
        }
      }
    },
watch: {
  scripts: {
    files: ['<%= concat.js.src %>'],
    tasks: ['concat','uglify'],
    options: {
      interrupt: true,
    }
  },
  styles: {
    files: ['<%= concat.css.src %>'],
    tasks: ['concat','cssmin'],
    options: {
      interrupt: true,
    }
  }
}
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('build', ['concat', 'uglify', 'cssmin']);
  grunt.registerTask('default', ['concat', 'uglify', 'cssmin']);
  //grunt.registerTask('watch', ['watch']);
};