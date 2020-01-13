const fs   = require('fs-extra');
const glob = require('glob');

const execludeFiles = [
    'components/*.css',
    'dist/**',
    'fragments/*.css',
    'node_modules/**',
    'styles/**',
    '.git/**',
    '.gitattributes',
    '.gitignore',
    'create-dist.js',
    'package.json',
    'package-lock.json',
    'style.js',
];
const distFolderName = 'dist';

glob('**/*', {'ignore': execludeFiles}, function (err, dirContentList) {
    if (err) return console.log(err);

    const dirContentFilesOnlyList = dirContentList.filter((dirContentItem) => {
        return fs.lstatSync(dirContentItem).isDirectory() === false;
    });

    dirContentFilesOnlyList.forEach(file => {
        try {
            fs.copySync(file, `${distFolderName}/${file}`);
            console.log(`File ${file} copied successfully!`);
        } catch (error) {
            throw error;
        }
    });
});