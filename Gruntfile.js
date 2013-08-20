'use strict';

module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    // Metadata.
    pkg: grunt.file.readJSON('package.json'),
    banner: '/*! <%= pkg.title || pkg.name %> - v<%= pkg.version %> - ' +
      '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
      '<%= pkg.homepage ? "* " + pkg.homepage + "\\n" : "" %>' +
      '* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;' +
      ' Licensed <%= _.pluck(pkg.licenses, "type").join(", ") %> */\n',
    // Task configuration.
    clean: {
      files: ['dist']
    },
    copy:{
      main:{
        files: [
          {expand: true, "cwd": "src/demo", src: ["**"], dest: "dist/demo"},
          {expand: true, 'cwd': 'src/modules/accounts', src: ['**'], dest: 'dist/modules/accounts'},
          {expand: true, 'cwd': 'src/modules/accounts', src: ['**'], dest: 'dist/demo/modules/accounts'},
          {expand: true, cwd: "libs/php-model-engine-0.0.7/dist/dependencies", src: ["**"], dest: "dist/demo"},
          {expand: true, cwd: "libs/php-model-engine-0.0.7/dist/model-engine", src: ["**"], dest: "dist/demo/modules/model-engine"},
        ]
      }
    }
  });

  // These plugins provide necessary tasks.
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-copy');

  // Default task.
  grunt.registerTask('default', ['clean', 'copy']);

};
