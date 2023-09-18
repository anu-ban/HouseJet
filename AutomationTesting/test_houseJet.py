import time

from selenium import webdriver
from selenium.webdriver import Keys
from selenium.webdriver.common.by import By

#method to search 65807 zipcode
def search_zip(driver):
    search_stuff = driver.find_element(By.ID, "googleAutocomplete")
    search_stuff.send_keys('65807')
    search_stuff.send_keys(Keys.ENTER)

print("{Done with zip check}")

