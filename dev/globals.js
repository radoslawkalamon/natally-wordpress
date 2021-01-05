module.exports = {
    devFilesArray: [
        'dev/**',
        'dist/**',
        'node_modules/**',
        '.git/**',
        '.gitattributes',
        '.gitignore',
        'package.json',
        'package-lock.json',
        'file-hashes.json',
    ],
    globs: {
        allFiles: '**/*',
        filesToHash: 'dist/**/*.*(js|css)',
    },
    distFolder: './dist',
    hashesFile: './dist/file-hashes.json',
    watcherFolder: '../natally',
    consoleLog(actionName, logString) {
        const ConsoleDate = new Date();
        console.log(`${ConsoleDate.toLocaleTimeString('pl-PL')} | ${actionName.padEnd(20)} | ${logString}`);
    }
};