# 统计 "UCanUup" 出现了次数
---

### python

```
from collections import Counter
with open("word.txt","r") as f:
	#print (f.read())
	content = f.read().split(' ')
	count = Counter(content)
	print count.get('UCanUup',0)
```


### shell

```
grep -o UCanUup word.txt | grep -c UCanUup
```

### php

```
<?php
$file = fopen("word.txt", "r") or die("Unable to open file!");
$content = fread($file,filesize("word.txt"));
$word = "UCanUup";
$count = substr_count($content,$word);
echo $count;
fclose($file);
?>
```

### javascript

```
var fs = require('fs');
var content = fs.readFileSync("word.txt","utf8").split(' ');
var count = 0;
content.forEach(function(key) {
	if(key == 'UCanUup')
		count ++;
});
console.log(count);

```