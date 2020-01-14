const fs       = require('fs-extra');
const chokidar = require('chokidar');

const execludeFiles = [
    'components/*.css',
    'dev/**',
    'dist/**',
    'fragments/*.css',
    'node_modules/**',
    'styles/**',
    '.git/**',
    '.gitattributes',
    '.gitignore',
    'package.json',
    'package-lock.json',
];
const distFolderName = '../natally';

const watcher = chokidar.watch('**/*', {
    ignored: execludeFiles,
    persistent: true,
});

watcher
    .on('ready', () => console.log('Initial scan complete. Ready for changes'))
    .on('change', path => {
        console.log(`File ${path} has been changed`);
        fs.copySync(path, `${distFolderName}/${path}`)
    });

const watcherCSS = chokidar.watch('**/*.css', {
    ignored: [
        'style.min.css',
    ],
    persistent: true,
});

watcherCSS
    .on('ready', () => console.log('Initial CSS scan complete. Ready for changes'))
    .on('change', path => {
        console.log(`File ${path} has been changed`);
        require('child_process').fork('style.js');
    });