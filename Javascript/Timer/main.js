var isPaused = false;
var isCounting = false;


function PauseTimer(){
    if (!isPaused) {
        document.getElementById("pause").innerHTML = "Resume Timer";
        isPaused = true;
    }else{
        document.getElementById("pause").innerHTML = "Pause Timer";
        isPaused = false;
    }
    
}
 function StartTimer(){
    if(isCounting){
        hours = 0;
        minutes = 0;
        seconds = 0;
        document.getElementById("display").innerHTML = hours + " H " + minutes + " M " + seconds + " S ";
        document.getElementById("start").innerHTML = "Start Timer";
        clearInterval(x);
    }
    isCounting = true;
    var seconds = parseFloat(document.getElementById("seconds").value);
    var minutes = parseFloat(document.getElementById("minutes").value);
    var hours = parseFloat(document.getElementById("hours").value);
    if(isNaN(seconds)){
        seconds = 0;
    }
    if(isNaN(minutes)){
        minutes = 0;
    }
    if(isNaN(hours)){
        hours = 0;
    }
   
    x = setInterval(function(){
        
        
        document.getElementById("start").innerHTML = "Restart Timer";

        if(!isPaused){
            seconds--;
        }
        if(seconds < 0){
            seconds = 59;
            minutes--;
        }
        if(minutes < 0){
            hours--; 
            minutes = 59;    
        }
        document.getElementById("display").innerHTML = hours + " H " + minutes + " M " + seconds + " S "
        if(hours < 0){
            document.getElementById("start").innerHTML = "Start Timer";
            document.getElementById("display").innerHTML = "TIME!!"
            clearInterval(x)
        }

        
}, 1000)
}

function ResetTimer(){
    clearInterval(x)
    hours = 0
    minutes = 0
    seconds = 0
    document.getElementById("display").innerHTML = hours + " H " + minutes + " M " + seconds + " S "
    document.getElementById("start").innerHTML = "Start Timer";
    isCounting = false;
}


