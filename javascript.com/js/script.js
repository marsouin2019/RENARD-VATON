var marsouin=["VERROUX","RENAY","VITULIN","TERRINE","ROBINEL","MAXIMIN","MARIE-LUCE","RENARD-VATON","NEY","THOME"];
var copie=[];
console.log(marsouin);
console.log(marsouin[4]);
console.log(marsouin.length);
var nbr=marsouin.length;
for (var i=0;i<nbr;i++)
{copie.push(marsouin[i])
console.log(copie);
}
var last=marsouin[marsouin.length -1];
document.write(last);

marsouin.forEach(function(item,index,array)
{console.log(item,index);
    document.write(item,index);
});
addNewMarsouin = marsouin.push("POPOTE");
document.write(marsouin);

var deleteLastMarsouin=marsouin.pop();
//document.write(marsouin);
var deleteFirstMarsouin = marsouin.shift();
document.write(marsouin);

var question = prompt("Est-ce que monsieur RENARD-VATON,a compris le cours?");
if (question != null){document.getElementById("reponse").innerHTML = question ;  
}

var question = prompt("Est que monsieur RENAY est boulé");
if (question !=null){document.getElementById("reponse").innerHTML = question};

var genre = "" ;
genre= prompt ("Êtes vous un Homme ou une Femme?");
if (genre !=null)
alert(genre);
else {("Erreur.")
}

