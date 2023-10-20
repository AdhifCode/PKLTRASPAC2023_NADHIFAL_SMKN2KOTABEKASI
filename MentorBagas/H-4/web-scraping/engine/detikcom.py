import sys
import validators
import requests
from datetime import datetime
from bs4 import BeautifulSoup
from concurrent.futures import ThreadPoolExecutor
import os
import mysql.connector


if len(sys.argv) < 2:
    print("Argumen Tidak Lengkap")
    exit()

search = sys.argv[1]
limit = os.getenv("LIMIT_ASYNC",20)
limit = int(limit)

page = requests.get(
    "https://www.detik.com/search/searchall?query=" + search + "&siteid=2"
)
soup = BeautifulSoup(page.text, "html.parser")
paging = soup.find(class_="paging")
if paging == None:
    exit()
page = paging.find_all("a")
length = len(page) - 1
array_data = []

def crawling_data(halaman):
    print("Run Di Page ", halaman)
    angka = str(halaman)
    page = requests.get(
        "https://www.detik.com/search/searchall?query=" + search + "&siteid=2" + angka
    )
    soup = BeautifulSoup(page.text, "html.parser")
    list_berita = soup.find(class_="list-berita")
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
            judul = list.a.find(class_="box_text").h2.text

        if validators.url(url):
            cPage = requests.get(url)
            cSoup = BeautifulSoup(cPage.text, "html.parser")
            body = cSoup.find(class_="detail__body")
            if (body) != None:
                konten = str(body.get_text(strip=True))
        else : 
            konten = "Tidak Ditemukan"

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

    query = (
        "INSERT INTO scraping"
        + " (judul,konten,dibuat_pada) VALUES (%s,%s,%s)"
    )
    insert_data(query, array_data)

def insert_data(query, array_data, nama_db="web_scraping"):
    try:
        connection = mysql.connector.connect(
            database=nama_db,
            user="root",
            password="",
            host="localhost",
            port="3306"
        )

        cursor = connection.cursor()

        for data_list in array_data:
            for data_tuple in data_list:
                judul, konten, dibuat_pada = data_tuple
                values = (judul, konten, dibuat_pada)
                cursor.execute(query, values)

        connection.commit()
        count = cursor.rowcount
        print(count, "Data Kesimpan")

        if connection:
            cursor.close()
            connection.close()
            print("Sql Tutup")
    except (Exception, mysql.connector.Error) as error:
        print("Gagal Tersimpan", error) 

number_of_thread = 6
number_of_thread = int(number_of_thread)

pool = ThreadPoolExecutor(max_workers=number_of_thread)
for x in range(1, (int(length) + 1)):
    if x > limit:
        break
    pool.submit(crawling_data, str(x))
pool.shutdown(wait=True)

print(array_data)