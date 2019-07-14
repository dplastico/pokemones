import requests
import sys
from time import sleep

url = 'http://127.0.0.1/pokemones/xss/home.php'
headers = {'User-Agent':'Mozilla/5.0 (X11; Linux x86_64; rv:60.0) Gecko/20100101 Firefox/60.0', 'Content-Type': 'application/x-www-form-urlencoded', 'Cookie':'lasupercookie'}
counter = 0
while True:
    http = requests.post(url, headers=headers, data={'txt_email':'aaaa','txt_subject':'bbbb', 'txt_msg' : 'ccccccccc' , 'but_submit':'Enviar+mensaje'})
    if http.status_code == 200:
        print http.status_code 
        print "visita "+str(counter)+" ok!"
    else:
        print http.status_code
        print "visita fallo "+ (counter)
    counter = counter + 1
    sleep(5)

