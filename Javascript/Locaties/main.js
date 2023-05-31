province = 'Fryslân';
municipality = 'Tytsjerksteradiel';
city = 'Gytsjerk';
street = '     Canterlandseweg    ';
zipCode = '9061cc';
nearestBusStop = 'Nieuwe Straatweg';

var plaatsnaam = municipality.substring(0,8)

document.write("<p>"+province.charAt(5)+"</p>")
document.write("<p>"+plaatsnaam+"</p>")
document.write("<p>"+plaatsnaam.length+"<p>")
document.write("<p>"+street.trim()+"<p>")
document.write("<p>"+zipCode.toUpperCase()+"</p>")
document.write("<p>"+nearestBusStop.toLowerCase()+"<p>")

/* 
De letter met het leesteken uit de provincienaam
Het stukje uit de gemeentenaam wat tevens een plaatsnaam is
De lengte van de plaatsnaam
De straatnaam zonder spaties eromheen
De postcode met letters in hoofdletters
De dichtstbijzijnde bushalte in kleine letters
*/