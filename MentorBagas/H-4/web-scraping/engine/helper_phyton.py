from dotenv import load_dotenv
from pathlib import Path
import os

def dictenv():
    dict_env={}
    os.chdir(os.path.dirname(os.path.abspath(__file__)))
    current_directory = os.getcwd()
    with open(current_directory + "/.env", "r") as f:
        for elemen in f.readlines():
            if elemen[0]=="#":
                continue
            split_text = elemen.split("=")
            key_env = split_text[0].strip()
            val_env = split_text[1].strip()

            dict_env[key_env]=val_env
    return dict_env

def loadenvapi():
    dict_env = dictenv()
    real_path_api= dict_env["REAL_URL_API"]
    dotenv_path=Path(real_path_api+".env")
    load_dotenv(dotenv_path=dotenv_path)