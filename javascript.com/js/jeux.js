// declaration tableau vide et initialisation a vide
var joueurs= [];
//declaration de ma function add joueurs
function add_joueurs() {
    //afficher et stocker les joueurs 
    joueurs.push(prompt("Ecrire un nom de joueur en majuscule."));

    // tester varibale joueurs
    if(joueurs !=null) 
    {
        alert(joueurs.length)
        //mettre en majuscule
         document.getElementById("affiche_joueur").innerHTML=joueurs;
        
       
    }
    else {
        alert("Vous n'avez pas indiqué de nom de joueurs");
    }


}
  //declaration de ma function tirage_au_sort

function tirage_au_sort () 
{
//tester la longueur de la chaine
if (joueurs.length >0) 

{
/*
- déclaration d'une variable
- methode mathematique pour melanger des donnees
- tirage au sort d'une donnee
- indication de la longueur de mon tableau joueurs
*/




var rand = Math.floor(Math.random()*joueurs.length);

// afficher le nom du gagnant//
document.getElementById("affiche_gagnant").innerHTML="Le gagnant est : <strong> "+joueurs[rand]+"</strong>";
}
else {
    alert("Vous n'avez pas inscrit de joueurs !!!")
}




}

