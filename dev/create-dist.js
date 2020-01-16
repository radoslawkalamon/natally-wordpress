// Modules
const fs = require('fs-extra');
const glob = require('glob');
// Globals
const globals = require('./globals.js');
// Variables
const scriptFilename = __filename.split('\\').pop();

glob(globals.globs.allFiles, { 'ignore': globals.devFilesArray }, function (error, dirContentList) {
  if (error) {
    console.error(globals.consoleString(scriptFilename, `Glob setting failed!`));
    console.error(error);
    return;
  };

  const dirContentFilesOnlyList = dirContentList.filter((dirContentItem) => {
    return fs.lstatSync(dirContentItem).isDirectory() === false;
  });

  dirContentFilesOnlyList.forEach(file => {
    try {
      fs.copySync(file, `${globals.distFolder}/${file}`);
      console.log(globals.consoleString(scriptFilename, `File ${file} copying completed!`));
    } catch (errorForEach) {
      console.error(globals.consoleString(scriptFilename, `File ${file} copying failed!`));
      console.error(errorForEach);
      return;
    }
  });
});