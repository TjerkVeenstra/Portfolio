function Display(val){
    document.getElementById("placeholder").value += val
    return val
}

function Clear(){
    document.getElementById("placeholder").value = ""
}

function Result(){
    let x = document.getElementById('placeholder').value

    let y = eval(x);

    document.getElementById('placeholder').value = y

    return y
}
