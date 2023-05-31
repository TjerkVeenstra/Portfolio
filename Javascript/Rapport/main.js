var naam = prompt("Wat is je naam?")
document.write(naam)

var nederlands = prompt("Wat is je cijfer op nederlands?")
document.write("<p> je nederlands cijfer is "+ nederlands+ "</p>" )

var fries = prompt("Wat is je cijfer op fries?")
document.write("<p> je fries cijfer is "+ fries+ "</p>" )

var engels = prompt("Wat is je cijfer op engels?")
document.write("<p> je engels cijfer is "+ engels+ "</p>" )

var rekenen = prompt("Wat is je cijfer op rekenen?")
document.write("<p> je rekenen cijfer is "+ rekenen+ "</p>" )

var frontendprg = prompt("Wat is je cijfer op frontend?")
document.write("<p> je frontend cijfer is "+ frontendprg+ "</p>" )

var backendprg = prompt("Wat is je cijfer op backend?")
document.write("<p> je backend cijfer is "+ backendprg+ "</p>" )

var gemiddelde = ( parseFloat(nederlands) + parseFloat(fries) + parseFloat(engels) + parseFloat(rekenen) + parseFloat(frontendprg) + parseFloat(backendprg) ) / 6


function myFunction(){
    if (gemiddelde.toFixed(1) < 5.5 ){
        alert("Je bent gefaald met een gemiddelde van "+ gemiddelde.toFixed(1))
    }else{
        alert("Je bent geslaagd met een gemiddelde van "+ gemiddelde.toFixed(1))
    }
}
