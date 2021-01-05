// Modules
const fs = require('fs-extra');
const md5File = require('md5-file');
const glob = require('glob');
// Globals
const globals = require('./globals.js');
// Variables
const scriptFilename = __filename.split('\\').pop();
const hashesTable = {};

glob.sync(globals.globs.filesToHash)
  .forEach((path) => {
    const pathForPHP = path.substring(5); // '/dist'
    hashesTable[pathForPHP] = md5File.sync(path).substring(0, 8);
    globals.consoleLog(scriptFilename, `Hash for ${path} calculated successfully!`);
  });

fs.writeFileSync(globals.hashesFile, JSON.stringify(hashesTable));
globals.consoleLog(scriptFilename, `Hashes saved into ${globals.hashesFile}!`);