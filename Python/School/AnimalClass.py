#Tjerk Veenstra
#245464
#02/03/2023

class Cat:
    #characteristics
    name = ''
    age = ''
    breed = ''
    size = ''
    condition = ''

    #Sets the default characteristics of the cat upon calling the class
    def __init__(self, name, age):
        self.name = name
        self.age = age

    #Sets the breed of the cat
    def SetBreed(self, breed):
        self.breed = breed

    #Sets the size of the cat
    def SetSize(self, size):
        """
        Param size: (float) Centimeters in height
        """
        self.size = size
    #returns the size of the cat
    def GetSize(self):
        if self.size < 10:
            return "That's a very small cat"
        elif self.size > 30:
            return "That's a HUGE cat"

    #Sets the medical condition of the cat
    def SetMedicalCondition(self, condition):
        self.condition = condition

    #returns the characteristics of the cat
    def GetCharacteristics(self):
        if self.condition != '':
            return f"The cats name is {self.name}, they are {self.age} year(s) old, the breed is {self.breed}, is {self.size} Centimers and has a(n) {self.condition} condition"
        else:
            return f"The cats name is {self.name}, they are {self.age} year(s) old, the breed is {self.breed}, and is {self.size} Centimers"
        
        

cat1 = Cat("Josh", "2")
cat1.SetBreed("housecat")
cat1.SetSize(20.5)
print(cat1.GetCharacteristics()) #Returns without a medical condition
cat1.SetMedicalCondition("Missing leg")
print(cat1.GetCharacteristics()) #Returns with a medical condition