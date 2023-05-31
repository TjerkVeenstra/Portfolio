voornaam = input("Wat is je voornaam? ")
acthernaam = input("Wat is je acthernaam? ")

Tel1 = input("Wat is je telefoon nummer? ")
Tel2 = input("Wat is je mobiele nummer? ")

ideal = True
creditcard = False

naam = False
nummer = False
betaalmethode = False


if voornaam != "" and acthernaam != "":
    naam = True
if Tel1 != "" or Tel2 != "":
    nummer = True
if (ideal ^ creditcard) == True: 
    betaalmethode = True


if naam and nummer and betaalmethode:
    print("Voornaam:", voornaam)
    print("Acthernaam:", acthernaam)
    print("Tel1:", Tel1)
    print("Tel2:", Tel2)
    print("Je mag door gaan")    
else:
    print("niet alles is in gevuld")
