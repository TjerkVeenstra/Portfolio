function Forloop(){
    for(i = 0; i < 101; i++){
        if(i % 3 == 0 && i % 5 == 0 ){
            document.write("bingbong <br>")
        }
        else if(i % 3 == 0){
            document.write("bing <br>")
        }else if(i % 5 == 0){ 
            document.write("bong <br>")
        }else{
            document.write(i, "<br>")
        }
    }
}
function WhileLoop(){
    i = 0
    while(i < 101){
        if(i % 3 == 0 && i % 5 == 0 ){
            document.write("bingbong <br>")
        }
        else if(i % 3 == 0){
            document.write("bing <br>")
        }else if(i % 5 == 0){ 
            document.write("bong <br>")
        }else{
            document.write(i, "<br>")
        }
        i++;
    }
}
