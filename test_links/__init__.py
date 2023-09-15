import unittest
from selenium import webdriver

class TestHouseJet(unittest.TestCase):

    def setUp(self):
        # Initialize the WebDriver
        self.driver = webdriver.Chrome()
        self.driver.get("https://housejet.com")

    def tearDown(self):
        # Close the WebDriver after each test
        self.driver.quit()

    def test_title(self):
        # Get the page title
        title = self.driver.title

        # Test if the title is correct
        self.assertIn("HouseJet - HouseJet", title)

if __name__ == "__main__":
    unittest.main()
