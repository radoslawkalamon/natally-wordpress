const fs       = require("fs");
const postcss  = require("postcss");
const atImport = require("postcss-import");
const clean    = require("postcss-clean");

const styleFileName       = 'style.css';
const styleFileNameOutput = 'style.min.css';
const css = fs.readFileSync(styleFileName, "utf8");

postcss([atImport(), clean()])
  .process(css, {
    from: styleFileName
  })
  .then(function (result) {
    fs.writeFile(styleFileNameOutput, result.css, (err) => {
      if (err) return console.log(err);
      console.log(`File ${styleFileNameOutput} created sucessfully!`);
    });
  });