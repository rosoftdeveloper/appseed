var FtpDeploy = require('ftp-deploy');
var ftpDeploy = new FtpDeploy();
 
var config = {
    user: "YOUR_USER_HERE",                   // NOTE that this was username in 1.x 
    password: "YOUR_PASS_HERE",           // optional, prompted if none given
    host: "YOUR_FTP_SERVER_HERE",
    port: 21,
    localRoot: __dirname + '/public',
    remoteRoot: '/',
    include: ['*', '**/*'],      // this would upload everything except dot files
    //include: ['*.php', 'dist/*'],
    exclude: ['dist/**/*.map'],     // e.g. exclude sourcemaps - ** exclude: [] if nothing to exclude **
    deleteRemote: false,              // delete ALL existing files at destination before uploading, if true
    forcePasv: false                 // Passive mode is forced (EPSV command is not sent)
}
 
// use with promises
ftpDeploy.deploy(config)
    .then(res => console.log('finished:', res))
    .catch(err => console.log(err))
    
// use with callback
//ftpDeploy.deploy(config, function(err, res) {
//    if (err) console.log(err)
//    else console.log('finished:', res);
//});

ftpDeploy.on('uploading', function(data) {
    data.totalFilesCount;       // total file count being transferred
    data.transferredFileCount; // number of files transferred
    data.filename;             // partial path with filename being uploaded
});

ftpDeploy.on('uploaded', function(data) {
    console.log(data);         // same data as uploading event
});

ftpDeploy.on('log', function(data) {
    console.log(data);         // same data as uploading event
});

ftpDeploy.on('upload-error', function (data) {
    console.log(data.err); // data will also include filename, relativePath, and other goodies
});
