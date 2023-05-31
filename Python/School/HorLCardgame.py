import random
cards = ["A", 2, 3, 4, 5, 6, 7, 8, 9, 10, "j", "Q", "H"]
types = ["♣", "♠", "♥", "♦"]
score = 0
print("""Welkom bij Hoger / Lager
De spelregels:
De computer draait een kaart om en vraagt aan jou of jij denkt dat de volgende kaart hoger of lager is.
Kies 'H' voor hoger of 'L' voor lager gevolgd door <enter>. Als je het goed hebt krijg je er 10 punten bij,
als je het fout hebt gaan er 5 punten af. Een game duurt 15 ronden.
""")
for i in range(15):
    
    currentCard = random.choice(cards)
    nextCard = random.choice(cards)
    randomType = random.choice(types)

    while nextCard == currentCard:
        nextCard = random.choice(cards)

    print("******************************************************")
    print("your card is ", randomType, currentCard)


    playerGuess = input("Will the next card be higher or lower?(h/l): ").lower()

    if playerGuess == "h":
        if cards.index(nextCard)  > cards.index(currentCard):
            print("That was the right guess! The card was " + randomType, nextCard )
            score += 10
        else:
            print("That was the wrong guess! The card was " + randomType, nextCard )
            score -= 5
    elif playerGuess == "l":
        if cards.index(nextCard) < cards.index(currentCard):
            print("That was the right guess! The card was " + randomType, nextCard )
            score += 10
        else:
            print("That was the wrong guess! The card was " + randomType, nextCard )
            score -= 5
    else:
        print("you gave the wrong value")
        score -= 5
    
print("Your score is", score)
input("Press Enter to quit")