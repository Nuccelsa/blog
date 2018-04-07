exports.files = {
  javascripts: {
      joinTo: {
        'js/vendor.js': /^(?!app)/,
        'js/app.js': /^app/
      }
  },
  stylesheets: {
    joinTo: {
    'css/vendor.css': /^(?!app)/,
    'css/app.css': /^app/
    }
  }
};

exports.plugins = {
    browserSync: {
        files: [
            '*'
        ]
    },
    copycat: {
        'fonts': ['node_modules/font-awesome/fonts']
    }
};

exports.npm = {
    styles: {
        'normalize.css': ['normalize.css'],
        'font-awesome': ['css/font-awesome.css'],
        'bootstrap': ['dist/css/bootstrap.css']
    },
    globals: {
      '$': 'jquery',
      'jQuery': 'jquery',
      'Popper': "popper.js",
      'bootstrap': 'bootstrap'
    }
};

exports.modules = {
  autoRequire: {
    'js/app.js': ['initialize']
  }
}
