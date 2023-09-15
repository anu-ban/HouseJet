from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
import time
import requests

from bs4 import BeautifulSoup

response = requests.get("https://housejet.com/")
soup = BeautifulSoup(response.text, features="html.parser")
links = soup.find_all('a')
for link in links:
    print(link.text, link.get('href'))
search_id = soup.find(link,'Search')
print(search_id)
#
# with open('houseJet.txt', 'w',encoding = 'utf8') as f:
#     f.write(soup.prettify())

driver = webdriver.Chrome()
driver.get("https://housejet.com/")
#
# soup2 = BeautifulSoup(driver.page_source,features="html.parser")
# with open('houseJetWebDriver.txt','w',encoding='utf8') as f:
#     f.write(soup2.prettify())
# Get package title
title = driver.title
#
# Test if title is correct
assert "HouseJet - HouseJet" in title
print("TEST 0: 'title' test Passed ")

# search_link.send_keys(Keys.RETURN)
