nlMaanden = ["Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober","November", "December"];
nlDagen = ["Zondag", "Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag"];

duMaanden = ["Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember"];
duDagen = ["Sonntag", "Montag", "Dienstag", "Mitchwoch", "Donnerstag", "Freitag", "Samstag"]

fyMaanden = ["Jannewaris", "Febrewaris", "Maart", "April", "Maaie", "Juny", "July", "Augustus", "Septimber", "Oktober", "Novimber", "Desimber" ];
fyDagen = ["Snein", "Moandei", "Tiisdei", "Woansdei", "Tongersdei", "Freed", "Saberdei"];
var vandaag = new Date();



document.write("<p>", nlDagen[vandaag.getDay()]," ",vandaag.getDate() ," ",nlMaanden[vandaag.getMonth()],"</p>");
document.write("<p>", fyDagen[vandaag.getDay()]," ",vandaag.getDate() ," ",fyMaanden[vandaag.getMonth()],"</p>");
document.write("<p>", duDagen[vandaag.getDay()]," ",vandaag.getDate() ," ",duMaanden[vandaag.getMonth()],"</p>");



