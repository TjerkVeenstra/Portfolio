#Tjerk
#245464
#2/9/2022
#Voor- en acthernaam School Opdracht

from time import sleep


naam = input("wat is je voornaam: ")
acthernaam = input("wat is je acthernaam: ")
leeftijd = input("wat is je leeftijd: ")

if naam == "Tjerk" and acthernaam == "Veenstra":
    print("goedendag Tjerk Veenstra, ben je al", leeftijd, "jaar?")
if naam != "Tjerk":
    print("Sorry je hebt de verkeerde naam in gevuld")
if acthernaam != "Veenstra":
    print("Sorry je hebt de verkeerde acthernaam in gevuld")
sleep(5)

