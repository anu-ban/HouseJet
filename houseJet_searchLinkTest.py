from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

# ...
driver = webdriver.Chrome()
driver.get("https://housejet.com/")
driver.fullscreen_window()

search_button = driver.find_element(By.CSS_SELECTOR, "a[href='/search']")
search_button.click()


