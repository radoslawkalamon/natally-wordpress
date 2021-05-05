// Modules
const fs = require('fs-extra');
const glob = require('glob');
const minify = require('minify');
// Globals
const globals = require('./globals.js');
// Variables
const scriptFilename = __filename.split('\\').pop();
// Minify options
const options = {
  css: {
    inline: ['none'],
  },
};
// Optout of minifying
const noMinify = [
  'dist/styles/fonts.css',
];

glob.sync(globals.globs.filesToHash)
  .forEach(async (path) => {
    if (noMinify.includes(path)) return;

    const minifiedContent = await minify(path, options);
    fs.writeFileSync(path, minifiedContent);
    globals.consoleLog(scriptFilename, `File ${path} minified successfully!`);
  });