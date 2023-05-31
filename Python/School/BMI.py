#Tjerk Veenstra
#245464
#9/12/22


def bmi(lengte, gewicht):
    """
    Berekent de bmi
    
    param lengte: float
    param gewicht: float

    >>> round(bmi(1.7, 65),1)
    22.6
    
    """
    return gewicht / (lengte * lengte)

if __name__ == "__main__":
    import doctest
    doctest.testmod()
    #returns 
    #Failed example:
    #round(bmi(1.7, 65),1)
    #Expected:
    #    22.6
    #Got:
    #    22.5

while True:
    doorgaan = True

    lengte = float(input("wat is je lengte in meters?"))
    gewicht = float(input("Wat is je gewicht in kilogram?"))


    if lengte < 0.40 or lengte > 3 or gewicht < 0.5 or gewicht > 500:
        print("Ongeldige input")
        doorgaan = False

    bmiUitslag = round(bmi(lengte, gewicht), 1)
    if doorgaan == True:
        if bmiUitslag < 18.5:
            print("je bmi is "  + str(bmiUitslag) + " Dus je hebt ondergewicht.")
        elif bmiUitslag < 25:
            print("je bmi is "  + str(bmiUitslag) + " Dus je bent gezond.")
        elif bmiUitslag < 30:
            print("je bmi is "  + str(bmiUitslag) + " Dus je hebt overgewicht.")
        elif bmiUitslag >= 30:
            print("je bmi is "  + str(bmiUitslag) + " Dus je hebt obesitas.") 
        else:
            print("Ongeldige waarde")
