#Tjerk Veenstra
#245464
#2/11/22

aantalTafels = 10
tafel = 1
while aantalTafels != 0:
    print("De tafel van", tafel, "is")
    for teller in range(1, 11, 1):
        print(teller, "x", tafel, "=", teller * tafel)
    if teller == 10:
        tafel += 1
        teller = 0
    aantalTafels -= 1