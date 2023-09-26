import pandas as pd
import requests
import json
from petpy.api import Petfinder

with open("petFinderApi.txt") as file:
  apiKey = file.read()
apiKey = apiKey.strip()

with open("perfinderSecretKey.txt") as file:
  secretKey = file.read().strip()

pf = Petfinder(key=apiKey, secret=secretKey)
#cats love
# Get a list of all the cats that are available for adoption


# Get the list of cats available for adoption, for 3 pages 50 cats per page
cats=[]
for page in range(1,4):
  cats.extend(pf.animals(animal_type='cat',pages=page,results_per_page=50,location='MO',status='adoptable')['animals'])

with open('cat.txt','w',encoding='utf8') as f:
  for cat in cats:
    f.write(f"Id: {cat['id']}\n")
    f.write(f"Kitty: {cat['name']}\n")
    f.write(f"Attitude: {cat['description']}\n")
    f.write(f"Status: {cat['status']}\n")
    f.write(f"City: {cat['contact']['address']['city']}\n")
    f.write(f"State: {cat['contact']['address']['state']}\n\n")

for cat in cats:
    print(f"Id: {cat['id']}")
    print(f"Kitty: {cat['name']}")
    print(f"Attitude: {cat['description']}")
    print(f"Breed: {cat['status']}")
    print(f"City: {cat['contact']['address']['city']}")
    print(f"State: {cat['contact']['address']['state']}")
    print()  # Empty print statement for a new line


# Print the list of cat names
  # This is just to make it easier on yourself when you're debugging!



