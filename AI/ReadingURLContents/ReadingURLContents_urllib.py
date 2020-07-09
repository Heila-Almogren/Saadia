# Getting the contents of Sabq website
import urllib.request
f = urllib.request.urlopen("https://sabq.org/")
print(f.read())