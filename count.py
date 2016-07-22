from collections import Counter
with open("word.txt","r") as f:
	#print (f.read())
	content = f.read().split(' ')
	count = Counter(content)
	print count.get('UCanUup',0)