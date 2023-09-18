import time
import test_houseJet
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC


def click_search_button(driver):
    wait = WebDriverWait(driver, 10)
    search_button = wait.until(
        EC.visibility_of_element_located((By.XPATH, "/html/body/div[1]/div/div/div/main/div/span[1]/header/div/a[2]")))

    search_button.click()


# Initialize the web driver (you should replace 'path_to_chromedriver' with your actual driver path)
driver = webdriver.Firefox()
driver.implicitly_wait(10)

# Navigate to the housejet website
driver.get("https://housejet.com/")

click_search_button(driver)

print("Done with search click test")
time.sleep(10)
driver.get("https://housejet.com/Search")

test_houseJet = test_houseJet.search_zip(driver)
time.sleep(5)
# will take a screen show and store it in the folder
driver.get_screenshot_as_file("sf.png")
driver.quit()
