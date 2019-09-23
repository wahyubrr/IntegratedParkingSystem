import requests
import json

url = requests.get("http://localhost/development/request_spot.php")
myjson = url.content
spotKosong = json.loads(myjson)
print(spotKosong["id"])