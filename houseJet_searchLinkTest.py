from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

# Initialize the web driver (you should replace 'path_to_chromedriver' with your actual driver path)
driver = webdriver.Chrome()

# Navigate to the housejet website
driver.get("https://housejet.com/")

# Use an explicit wait to wait for the navigation drawer to become visible
wait = WebDriverWait(driver, 10)  # Adjust the timeout as needed
nav_drawer = wait.until(EC.visibility_of_element_located((By.CLASS_NAME, "v-navigation-drawer--right")))

# Find and click the "Search" button within the navigation drawer
search_button = nav_drawer.find_element(By.PARTIAL_LINK_TEXT, "Search")  # Assuming the text "Search" is part of the link text
search_button.click()

# Close the web driver (you can remove this line if you want to keep the browser window open)
driver.quit()
