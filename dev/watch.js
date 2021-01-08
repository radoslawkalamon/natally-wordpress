// Modules
const fs       = require('fs-extra');
const chokidar = require('chokidar');
// Globals
const globals = require('./globals.js');
// Variables
const scriptFilename = __filename.split('\\').pop();

const watcherMoveOnChange = chokidar.watch(globals.globs.allFiles, {
  ignored: globals.devFilesArray,
  persistent: true,
});

watcherMoveOnChange
  .on('ready', () => globals.consoleLog(scriptFilename, 'Initial scanning completed!'))
  .on('change', (path) => {
    fs.copySync(path, `${globals.watcherFolder}/${path}`);
    globals.consoleLog(scriptFilename, `File ${path} copied successfully!`);
  });
