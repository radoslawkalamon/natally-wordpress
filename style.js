// dependencies
const fs = require("fs");
const postcss = require("postcss");
const atImport = require("postcss-import");
const clean = require("postcss-clean");

// css to be processed
const css = fs.readFileSync("style.css", "utf8");

// process css
postcss([atImport(), clean()])
  .process(css, {
    // `from` option is needed here
    from: "style.css"
  })
  .then(function (result) {
    fs.writeFile("style.min.css", result.css, (err) => {
      if (err) return console.log(err);
      console.log("The file was saved!");
    });
  });
