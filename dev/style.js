// Modules
const fs = require('fs-extra');
const postcss = require('postcss');
const atImport = require('postcss-import');
const clean = require('postcss-clean');
// Globals
const globals = require('./globals.js');
// Variables
const scriptFilename = __filename.split('\\').pop();
const cssContent = fs.readFileSync(globals.cssFiles.default, 'utf8');

postcss([atImport(), clean()])
  .process(cssContent, {
    from: globals.cssFiles.default
  })
  .then(function (result) {
    fs.writeFile(`./${globals.cssFiles.minified}`, result.css, (error) => {
      if (error) {
        console.error(globals.consoleString(scriptFilename, `Style building failed!`));
        console.error(error);
        return;
      };

      console.log(globals.consoleString(scriptFilename, `Style building completed! (${globals.cssFiles.minified})`));
    });
  });