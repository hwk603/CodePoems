var fs = require('fs');
var content = fs.readFileSync("word.txt","utf8").split(' ');
var count = 0;
content.forEach(function(key) {
	if(key == 'UCanUup')
		count ++;
});
console.log(count);
