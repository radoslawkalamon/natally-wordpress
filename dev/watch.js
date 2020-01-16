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
    .on('ready', () => console.log(globals.consoleString(scriptFilename, 'Initial scanning completed! (MoveOnChange)')))
    .on('change', path => {
        fs.copySync(path, `${globals.distFolder}/${path}`);
        console.log(globals.consoleString(scriptFilename, `File ${path} copying completed!`));
    });

const watcherStyles = chokidar.watch(globals.globs.cssFiles, {
    ignored: [ globals.cssFiles.minified ],
    persistent: true,
});
watcherStyles
    .on('ready', () => console.log(globals.consoleString(scriptFilename, 'Initial scanning completed! (Styles)')))
    .on('change', () => require('child_process').fork('./dev/style.js'));