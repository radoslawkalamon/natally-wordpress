module.exports = {
    devFilesArray: [
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
    ],
    globs: {
        allFiles: '**/*',
        cssFiles: '**/*.css',
    },
    cssFiles: {
        default: 'style.css',
        minified: 'style.min.css',
    },
    distFolder: './dist',
    watcherFolder: '../natally',
    consoleString(actionName, logString) {
        const ConsoleDate = new Date();
        return `${ConsoleDate.toLocaleTimeString('pl-PL')} | ${actionName.padEnd(20)} | ${logString}`;
    }
};