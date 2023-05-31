rol = prompt("Wat is je rol")
code = prompt("Wat is je code")

document.write("<h1> if/else </h1>")
if(rol == "admin"){
    if(code == "admin"){
        document.write("<p> Welkom admin </p>")
    }else{
        document.write("<p> Ongeldige code </p>")
    }
} else if(rol == "student"){
    if(code == "student"){
        document.write("<p> Welkom student </p>")
    }
    else{
        document.write("<p> Ongeldige code </p>")
    }
}else{
    document.write("<p> Ongeldige rol </p>")
}
document.write("<h1> Switch </h1>")

switch(rol){
    case "admin":
        switch(code){
            case "admin":
                document.write("<p> Welkom admin </p>")
                break;
            default:
                document.write("<p> Ongeldige code </p>")
        }
    break;
    case "student":
        switch(code){
            case "student":
                document.write("<p> Welkom student </p>")
                break;
            default:
                document.write("<p> Ongeldige code </p>")
         
        }
    break
    default:
        document.write("<p> Ongeldige rol </p>")
        
}