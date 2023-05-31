#Tjerk Veenstra
#245464
#02/03/2023

class Auto:
    autoAan = False

    def __init__(self, merk, type, kenteken, Verbruik_in_liter_per_100_km):
        self.merk = merk
        self.type = type
        self.kenteken = kenteken
        self.verbuik = Verbruik_in_liter_per_100_km
    
    #Berekent afstand in km per liter en formateert het met 1 getal achter de comma
    def Verbruik(self):
        """
        Berekent afstand in km per liter

        >>> auto1.Verbruik()
        'De auto verbruikt 1:14.7, want 1 liter benzine brengt je 14.7 km verder.'
        """

        uitkomst = " {verbruik_per_1L:.1f}, want 1 liter benzine brengt je {verbruik_per_1L:.1f} km verder."
        return uitkomst.format(verbruik_per_1L = 100 / self.verbuik)
    
    #Zet de auto aan
    def StartAuto(self): 
        autoAan = True
        self.autoAan = autoAan
        return autoAan
    #Zet de auto uit
    def StopAuto(self):
        autoAan = False
        self.autoAan = autoAan
        return autoAan
    #Laat de eigenschappen zien als de auto aan staat
    def Dashboard(self):
        if self.autoAan:
            return f"merk: {self.merk}, type: {self.type}, kenteken: {self.kenteken}"
        else:
            return "De auto staat uit"
    #Checked de kenteken
    def KentekenCheck(self):
        if str(self.kenteken).__len__() < 6:
            return "verkeerd kenteken"
        elif '-' in str(self.kenteken) and str(self.kenteken).__len__() < 8:
            return "verkeerd kenteken"
        else: 
            return "De kenteken is correct"


volvo = Auto('Volvo', 'XC90', '12-NRB8', 6)
print(volvo.KentekenCheck()) # Geeft aan 'verkeerd kenteken'
volvo = Auto('Volvo', 'XC90', '12-NRB-8', 6)
if(volvo.autoAan):
    print(volvo.Dashboard() + ", verbruik 1 : " + str(volvo.Verbruik()))

if __name__ == "__main__":
    import doctest
    doctest.testmod(name="Auto", verbose=True)