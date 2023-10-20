from selenium import webdriver
from selenium.webdriver.common.by import By
from bs4 import BeautifulSoup
import time 
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

class Login:
    def __init__(self, page_url):
        self.page_url = page_url
        self.driver = webdriver.Chrome()

    def perform_login(self, email, password, nama, alamat, telp, deskripsi):
        self.driver.get(self.page_url)
        # wait = WebDriverWait(self.driver, 10)
        email_input = self.driver.find_element(By.ID, 'input-19')
        password_input = self.driver.find_element(By.ID, 'input-22')
        login_button = self.driver.find_element(By.CLASS_NAME, 'v-btn--is-elevated')

        email_input.send_keys(email)
        password_input.send_keys(password)
        login_button.click()

        time.sleep(3)

        userprofile_button = self.driver.find_element(By.CSS_SELECTOR, 'a[href="/user-view"]')
        userprofile_button.click()

        time.sleep(3)

        tambahtoko_button = self.driver.find_element(By.CLASS_NAME, 'tambahtoko')
        tambahtoko_button.click()

        time.sleep(3)

        nama_button = self.driver.find_element(By.XPATH, "//button[contains(., 'Nama')]")
        nama_button.click() 
        nama_input = self.driver.find_element(By.ID, 'input-135')

        time.sleep(1)

        alamat_button = self.driver.find_element(By.XPATH, "//button[contains(., 'Alamat')]")
        alamat_button.click()
        alamat_input = self.driver.find_element(By.ID, 'input-138')

        time.sleep(1)

        telepon_button = self.driver.find_element(By.XPATH, "//button[contains(., 'No.Telp')]")
        telepon_button.click()
        telp_input = self.driver.find_element(By.ID, 'input-141')

        time.sleep(1)

        deskripsi_button = self.driver.find_element(By.XPATH, "//button[contains(., 'Deskripsi')]")
        deskripsi_button.click()
        deskripsi_input = self.driver.find_element(By.ID, 'input-144')

        time.sleep(1)

        buattoko_button = self.driver.find_element(By.CLASS_NAME, 'button-aksi')

        nama_input.send_keys(nama)
        alamat_input.send_keys(alamat)
        telp_input.send_keys(telp)
        deskripsi_input.send_keys(deskripsi)
        buattoko_button.click()


        current_url = self.driver.current_url
        print("URL halaman saat ini:", current_url)

class Register:
    def __init__(self, page_url):
        self.page_url = page_url
        self.driver = webdriver.Chrome()

    def perform_register(self, nama, email, password):
        self.driver.get(self.page_url)

        buat_akun_element = self.driver.find_element(By.CSS_SELECTOR, '.buat-akun a')
        buat_akun_element.click()

        time.sleep(2)

        nama_element = self.driver.find_element(By.ID, 'input-35')
        email_element = self.driver.find_element(By.ID, 'input-38')
        password_element = self.driver.find_element(By.ID, 'input-41')

        register_button = self.driver.find_element(By.CLASS_NAME, 'v-btn--is-elevated')

        nama_element.send_keys(nama)
        email_element.send_keys(email)
        password_element.send_keys(password)

        register_button.click()

        current_url = self.driver.current_url
        print("URL halaman saat ini:", current_url)

page_url = 'http://localhost:5000'

register_test = Register(page_url)
register_test.perform_register("scrapingregis2", "scrapingregis2@gmail.com", "scraping2")

login_test = Login(page_url)
login_test.perform_login("scrapingregis@gmail.com", "scraping", "scrapingtoko", "Bekasi", "0898989989", "Toko Buat Scraping")

time.sleep(10)