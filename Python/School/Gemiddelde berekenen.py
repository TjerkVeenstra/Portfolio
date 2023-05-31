#Tjerk Veenstra
#245464
#10/7/2022
som = 0
aantal_getallen = 0
doorgaan = True

while doorgaan == True:
  nummer = float(input('Welk getal? (0 betekent stoppen):'))
  if nummer == 0:
    doorgaan = False
  else:
    som = som + nummer
    aantal_getallen = aantal_getallen + 1
    gemiddelde = som / aantal_getallen
    print("Gemiddelde tot nu toe: ", float(gemiddelde))