from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

def click_search_button(driver):
  wait = WebDriverWait(driver, 10)
  nav_drawer = wait.until(EC.visibility_of_element_located((By.CLASS_NAME, "v-navigation-drawer--right")))
  print(nav_drawer.location)
  search_button = nav_drawer.find_element(By.PARTIAL_LINK_TEXT, "Search")
  search_button.click()

# Initialize the web driver (you should replace 'path_to_chromedriver' with your actual driver path)
driver = webdriver.Firefox()

# Navigate to the housejet website
driver.get("https://housejet.com/")

try:
  # Click the "Search" button
  click_search_button(driver)
except Exception as e:
  print(e)
  driver.quit()
