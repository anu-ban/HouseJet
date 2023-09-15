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

# Get a list of all the cats that are available for adoption
cats = pf.animals(animal_type='cat',pages=3)

# Get the names of all the cats
cat_names = []
for cat in cats['animals']:
  cat_names.append(cat['name'])
  str_output =  pd.DataFrame(cat_names)
# Print the list of cat names
  # This is just to make it easier on yourself when you're debugging!


print(str_output)
