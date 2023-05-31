uit = False
leeftijd = int(input("wat is je leeftijd? "))
id = input("Heb je een id? ").casefold()

if leeftijd >= 18 and id == "ja":
    uit = True
print("Mag je uit?", uit)

input()