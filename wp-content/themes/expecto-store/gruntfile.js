const { task } = require("grunt");

module.exports = function (grunt) {

  // All configuration goes here 
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // concat: {
    //     // Configuration for concatinating files goes here.
    //     dist: {
    //         src: [
    //                 '../js/libs/owl.carousel.js',
    //                 '../js/libs/jquery.actual.js',
    //                 '../js/libs/chosen.jquery.js',
    //                 '../js/libs/jquery.parallax.js',
    //                 '../js/src/common.js'  
    //         ],
    //         dest: '../js/pro/global.js',
    //     },
    // },
    sass: {
      dist: {
        options: {
          // compress: true,
          yuicompress: false,
          style: 'expanded',
        },
        files: {
          './style.css': './assets/scss/main.scss'
        }
      }
    },

    watch: {
      css: {
        files: '**/*.scss',
        tasks: ['sass']
      }

    },

  });

  // Where we tell Grunt we plan to use this plug-in.
  // grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Where we tell Grunt what to do when we type "grunt" into the terminal.
  grunt.registerTask('default', [/*'concat',*/ 'watch']);

};