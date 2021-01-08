// Modules
const fs = require('fs-extra');
const glob = require('glob');
// Globals
const globals = require('./globals.js');
// Variables
const scriptFilename = __filename.split('\\').pop();

glob.sync(globals.globs.allFiles, { 'ignore': globals.devFilesArray })
  .filter((dirContentItem) => !fs.lstatSync(dirContentItem).isDirectory())
  .forEach(file => {
    fs.copySync(file, `${globals.distFolder}/${file}`);
    globals.consoleLog(scriptFilename, `File ${file} copied successfully!`);
  });