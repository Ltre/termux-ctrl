const ngrok = require('ngrok');
(async function() {
  const url = await ngrok.connect();
})();



var exec = require('child_process').exec; 
exec('mpv ./12345.mp3', function(err,stdout,stderr){
    
})