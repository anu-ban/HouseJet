import time

from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By

# Initialize the web driver
driver = webdriver.Chrome()
driver.implicitly_wait(5)  # tells our driver to wait until 5 sec, if the driver cant find the element

# Navigate to the HouseJet website
driver.get("https://www.amazon.com")

# Find the element with the outer HTML
search = driver.find_element(By.ID, "twotabsearchtextbox")

# Click the element
search.send_keys("dress", Keys.ENTER)
# Test Search dress text
expected_text = '"dress"'
actual_text = driver.find_element(By.XPATH, "//span[@class='a-color-state a-text-bold']").text
# Varification
assert expected_text == actual_text, f'Error. Expected text{expected_text}, but actual text:{actual_text}'

# Close the web driver
driver.quit()