function Splitter(){
    var bedrag = parseFloat(document.getElementById("bedrag").value);
    var mensen = parseFloat(document.getElementById("aantalMensen").value);
    var fooi = parseFloat(document.getElementById("fooi").value);
    

    if(fooi > 0){
        var uitkomst = ((bedrag + fooi) / mensen).toFixed(2)
    }else{
        var uitkomst = (bedrag / mensen).toFixed(2)
    }

    document.getElementById("toonUitkomst").innerHTML = "Het totale bedrag per persoon is: " + uitkomst;

}