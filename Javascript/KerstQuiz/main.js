var vragen = new Array("kerstDatum", "kerstman", "kerstKleur", "kerstBoom", "feestdag", "kerstViering", "waaromRood", "rendier", "kerstkaart", "frosty");
var aantalgoed = 0

function ToonUitslag1(){
    aantalgoed = 0
    for(i = 0; i < vragen.length; i++){
        var antwoord = document.getElementById(vragen[i]).value;

        if(antwoord == "Goed"){
            aantalgoed++;
        }
    }
    if(aantalgoed <= 5){
        document.getElementById("uitkomst").innerHTML = "helaas, onvoldoende"
    }
    else if(aantalgoed == 6 || aantalgoed == 7){
        document.getElementById("uitkomst").innerHTML = "netjes, voldoende"
    }
    else if(aantalgoed == 8 || aantalgoed == 9){
        document.getElementById("uitkomst").innerHTML = "goed gedaan, bijna alles goed"
    }
    else if(aantalgoed == 10){
        document.getElementById("uitkomst").innerHTML = "perfect, niets meer aan doen"
    }

}