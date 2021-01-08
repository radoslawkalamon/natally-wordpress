// Modules
const fs = require('fs-extra');
const glob = require('glob');
const minify = require('minify');
// Globals
const globals = require('./globals.js');
// Variables
const scriptFilename = __filename.split('\\').pop();

glob.sync(globals.globs.filesToHash)
  .forEach(async (path) => {
    const minifiedContent = await minify(path);
    fs.writeFileSync(path, minifiedContent);
    globals.consoleLog(scriptFilename, `File ${path} minified successfully!`);
  });