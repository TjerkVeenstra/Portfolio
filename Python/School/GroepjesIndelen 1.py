#Tjerk
#245464
#10/27/22

import random


stoppen = False
leerlingen = []
kanGroepenMaken = False

#Divides a list in to seperate lists
def chunks(l, n):
    for i in range(0, len(l), n):
        yield l[i:i + n]

#Allows the user to add any name/numbers(besides 1)/characters into a list 
while stoppen == False:
    leerling = input("Geef een naam van een leerling(press Enter als je een nieuwe naam wilt invullen of type 1 om de groepjes te maken) ")
    if leerling == "1" :
        break
    leerlingen.append(leerling)
    print("De lijst tot nu toe", leerlingen)
random.shuffle(leerlingen)
print(leerlingen)

print("Je hebt in totaal", len(leerlingen),"leerlingen aan de lijst toegevoegt")

#Checks if the user can make a group
while kanGroepenMaken == False:
    n = int(input("Hoeveel groepen?: "))

    if len(leerlingen) % n == 1:
        print("Er komen ongelijken groepen uit. Geef een ander getal")
    else:
        kanGroepenMaken = True

groepjes = list(chunks(leerlingen, n))
#Creating a txt file to store the groups
f = open("Groups.txt", "a")
f.write(str(groepjes))