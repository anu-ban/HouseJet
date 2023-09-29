import time
from selenium.webdriver.common.keys import Keys
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC


# Checks log in button
def clickLogIN(driver):
    wait = WebDriverWait(driver, 10)
    login_button = wait.until(
        EC.visibility_of_element_located((By.XPATH, "/html/body/div[1]/div/div/div/main/div/span[1]/header/div/a[6]")))
    login_button.click()


# Checks log In information
def check_logIn_input(driver, user_name, user_email):
    wait = WebDriverWait(driver, 5)
    name_text = wait.until(EC.visibility_of_element_located(
        (By.XPATH, "/html/body/div[1]/div/div/div/main/div/div/div[3]/div/span/form/div[1]/div/div[1]/div/input")))
    name_text.send_keys(user_name, Keys.ENTER)
    email_input = driver.find_element(By.XPATH,
                                      "/html/body/div[1]/div/div/div/main/div/div/div[3]/div/span/form/div["
                                      "2]/div/div[1]/div[2]/input")
    email_input.send_keys(user_email, Keys.ENTER)

    phone_input = wait.until(EC.visibility_of_element_located(
        (By.XPATH, "/html/body/div[1]/div/div/div/main/div/div/div[3]/div/span/form/div[3]/div/div[1]/div[2]/input")))
    phone_input.send_keys("4177711257", Keys.ENTER)

#Need to check the confirm button after finishing with the input
#Click confirm btn def
def click_confirm_login(driver):
    wait =WebDriverWait(driver,5)

    clik_login_btn = wait.until(EC.visibility_of_element_located((By.XPATH, "/html/body/div[1]/div/div/div/main/div/div/div[3]/div/span/form/button/span")))
    clik_login_btn.click()

driver = webdriver.Firefox()
driver.implicitly_wait(10)

# Navigate to the housejet website
driver.get("https://housejet.com/")

clickLogIN(driver)

driver.implicitly_wait(5)

check_logIn_input(driver, "Rafi", "rafi_anu@gmail.com")

# Takes a screenShot and keep saves it as png file
driver.get_screenshot_as_file("loginPage.png")

click_confirm_login(driver)
driver.implicitly_wait(10)
driver.get_full_page_screenshot_as_file("confirmpage.png")


