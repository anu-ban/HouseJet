from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
import time
import requests

from bs4 import BeautifulSoup

# response = requests.get("https://housejet.com/")
# soup= BeautifulSoup(response.text,features="html.parser")
#
# with open('houseJet.txt', 'w',encoding = 'utf8') as f:
#     f.write(soup.prettify())

driver = webdriver.Chrome()
driver.get("https://housejet.com/")
soup2 = BeautifulSoup(driver.page_source,features="html.parser")
with open('houseJetWebDriver.txt','w',encoding='utf8') as f:
    f.write(soup2.prettify())
driver.quit()


