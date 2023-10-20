import sys
import validators
import requests
from datetime import datetime
from bs4 import BeautifulSoup
from concurrent.futures import ThreadPoolExecutor
import os
from selenium import webdriver
from selenium.webdriver.chrome.options import Options


if len(sys.argv) < 2:
    print("Argumen Tidak Lengkap")
    exit()

search = sys.argv[1]
limit = os.getenv("LIMIT_ASYNC",20)
limit = int(limit)

page = requests.get(
    "https://www.cnnindonesia.com/search/?query=" + search
)
soup = BeautifulSoup(page.text, "html.parser")
paging = soup.find("div", class_="flex gap-5 my-8 items-center justify-center")
if paging == None:
    exit()
page = paging.find_all("a")
length = len(page) - 1
array_data = []

def crawling_data(halaman):
    print("Run Di Page ", halaman)
    angka = str(halaman)
    page = requests.get(
        "https://www.cnnindonesia.com/search/?query=" + search + "&page=" + angka
    )
    
    soup = BeautifulSoup(page.text, "html.parser")
    list_berita = soup.find("div", class_="grow-0 w-leftcontent min-w-0")
    if list_berita == None:
        return
    articles = list_berita.find_all("article")
    if articles == None:
        return
    
    for i, list in enumerate(articles):
        konten = "Tidak Ada Konten"
        url = "Tidak Ada Url"
        judul = "Tidak Ada Judul"
        if list.a != None:
            url = list.a["href"]
            judul = list.a.find(class_="boxflex-grow_text").h2.text

        if validators.url(url):
            cPage = requests.get(url)
            cSoup = BeautifulSoup(cPage.text, "html.parser")
            body = cSoup.find(class_="detail__body")
            if (body) != None:
                konten = str(body.get_text(strip=True))
        else : 
            konten = "Tidak Ditemukan Konten"

        if konten == "Tidak Menemukan Definisi":
            continue

        array_data.append(
            [
                (
                    judul,
                    konten,
                    datetime.now().strftime("%Y-%m-%d %H:%M:%S"),
                )
            ]
        )


number_of_thread = 6
number_of_thread = int(number_of_thread)

pool = ThreadPoolExecutor(max_workers=number_of_thread)
for x in range(1, (int(length) + 1)):
    if x > limit:
        break
    pool.submit(crawling_data, str(x))
pool.shutdown(wait=True)
crawling_data(2)
print(array_data)
        