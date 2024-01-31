from petpy.api import Petfinder


def animals(animal_types):
    with open("petFinderApi.txt") as file:
        apiKey = file.read()
    apiKey = apiKey.strip()

    with open("perfinderSecretKey.txt") as file:
        secretKey = file.read().strip()

    pf = Petfinder(key=apiKey, secret=secretKey)
    cats = []
    if animal_types == 'cat':
        for page in range(1, 4):
            cats.extend(
                pf.animals(animal_type='cat', pages=page, results_per_page=50, location='MO', status='adoptable')[
                    'animals'])
        for cat in cats:
            print(f"Id: {cat['id']}")
            print(f"Kitty: {cat['name']}")
            print(f"Attitude: {cat['description']}")
            print(f"Breed: {cat['status']}")
            print(f"City: {cat['contact']['address']['city']}")
            print(f"State: {cat['contact']['address']['state']}")
            print()  # Empty print statement for a new line

    dogs = []
    birds = []
    if animal_types == 'dog':
        for page in range(1, 3):
            dogs.extend(
                pf.animals(animal_type='dog', pages=page, results_per_page=50, location='MO', status='adoptable')[
                    'animals'])
            for dog in dogs:
                print(f"Id: {dog['id']}")
                print(f"Name: {dog['name']}")
        return dogs


animal_type = input("Which Animals are you looking for")


animals(animal_type)
