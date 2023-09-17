import time

from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

def click_search_button(driver):
  wait = WebDriverWait(driver, 10)
  search_button = wait.until(EC.visibility_of_element_located((By.XPATH, "/html/body/div[1]/div/div/div/main/div/span[1]/header/div/a[2]")))

  search_button.click()

# Initialize the web driver (you should replace 'path_to_chromedriver' with your actual driver path)
driver = webdriver.Firefox()
driver.implicitly_wait(10)

# Navigate to the housejet website
driver.get("https://housejet.com/")

click_search_button(driver)
print(driver.current_url)
time.sleep(10)
driver.quit()

