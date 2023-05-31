var student1 = {
    naam: "Maria",
    email: "mariavanderweg@outlook.com",
    opleiding: "SoftwareDev"
};
var student2 = {
    naam: "Jeroen",
    email: " jeroentje540@hotmail.com",
    opleiding: "SoftwareDev"
};
var student3 = {
    naam: "Jeffrey",
    email: "jeffreywilliams@gmail.com",
    opleiding: "SoftwareDev"
};

var studenten = new Array(student1, student2, student3);
i = 0
while(i < 3){
    var student = {
        naam: prompt("naam"),
        email: prompt("email"),
        opleiding: "SoftwareDev"
    };
    studenten.push(student)
    i++
}

let Groep1 = studenten.slice(0,3)
let Groep2 = studenten.slice(3)

i = 0
document.write("<p>Groep1</p>")
while(Groep1[i]) {
    //document.write met naam, email en opleiding op aparte regel
    document.write("<p>"+ Groep1[i].naam +"</p>")
    document.write("<p>"+ Groep1[i].email +"</p>")
    document.write("<p>"+ Groep1[i].opleiding +"</p>")
    i++;
};  
i = 0
document.write("<p>Groep2</p>")
while(Groep2[i]) {
    //document.write met naam, email en opleiding op aparte regel
    document.write("<p>"+ Groep2[i].naam +"</p>")
    document.write("<p>"+ Groep2[i].email +"</p>")
    document.write("<p>"+ Groep2[i].opleiding +"</p>")
    i++;
};  