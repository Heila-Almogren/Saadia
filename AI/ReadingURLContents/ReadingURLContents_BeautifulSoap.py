# Reading Sabq today's news headlines
import requests
from bs4 import BeautifulSoup

base_url = 'https://sabq.org/'
r = requests.get(base_url)
soup = BeautifulSoup(r.text, "html.parser")
data = soup.find_all('h1')
for head in data:
    print(head.text)