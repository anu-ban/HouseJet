import time

from selenium import webdriver
from selenium.webdriver import Keys
from selenium.webdriver.common.by import By

# Initialize the web driver
driver = webdriver.Chrome()

# Navigate to the HouseJet website


# Find the element with the XPath selector ".//a[@href='/search']"
# search_button = driver.find_element(By.XPATH(".//a[@href='/search']"))

driver.get("https://housejet.com/Search")

search_stuff = driver.find_element(By.ID,"googleAutocomplete")
search_stuff.send_keys('65807')
search_stuff.send_keys(Keys.ENTER)

time.sleep(15)

# Click the element


# Close the web driver
driver.quit()
