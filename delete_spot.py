# Created by: Wahyu Berlianto
import requests

url = 'http://localhost/development/delete_spot.php'

print("Masukkan spot yang akan dihapus")
spot = input()
myobj = {'id': spot}

x = requests.post(url, data = myobj)

print(x.text)