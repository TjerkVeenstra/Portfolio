#Tjerk Veenstra
#245464
#12/3/22
import datetime
nu = datetime.datetime.now()

vandaag = nu.weekday()

weekdagen = ["Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag", "Zondag"]

def Get_weekday(current_weekday, days_ahead):
    """(int, int) -> int
    
    Return which day of the week it will be days_ahead days from current_weekday

    current_weekday is the current day of the week and is in the range 1-7,'
    indicating wether today is Sunday(1), Monday(2), ...., Saturday(7).

    days_ahead is the number of days after today  
    """
    return (current_weekday + days_ahead - 1) % 7 + 1


print(weekdagen[Get_weekday(vandaag, 69420)])