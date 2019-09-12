<?php

// c'est un comentaire

/*
c'est un comentaire sur plusieurs lignes
*/

/*echo "Bonjour c'est la D-WEB";
echo 'Bonjour c\'est la D-WEB'; // altgr+8
echo"<p>Bonjour c'est la D-WEB</p>";
?>
<h1>mon titre</h1>
*/
//phpinfo();


//une variable est un espace de mémoire


//comment declarer une variable en php
$nom_variable ="";
$_nomVariable =""; //camelCase
$nomVariable ="";
$NomVariable =''; //je ne le vous conseille pas
$nomVariable;

/*$nomFiliere = "D-WEB";
//comment afficher la variable

echo "bonjour la $nomFiliere";
echo 'Bonjor la $nomFiliere'; // A NE PAS FAIRE!!
echo "Bonjour la ".$nomFiliere;
echo 'bonjour la'.$nomFiliere."c'est l'heure de manger";
*/

// variables et les chffres / nombres / additions

/*
$a = 1;
$b = 100;
$c = $a + $b;
echo $c;
echo"le résultat est :$c";

$c += $a;
echo $c;

echo$c += $c;


// les comparaisons

if ($a <=> $b)
{
    echo 1;
    echo'true';
}else{
    echo 0;
    echo 'false';
}
*/

// affichier contenu d'une variable
/*
var_dump($nomFiliere);
var_dump($e);

//affichier information d'une variable lisible

print_r($nomFiliere);
print_r($e);
*/

//tableaux
$tab = array();
$tab = [];

// donnes dans un tableau

$tab = array("d-web", "pmspa");
//var_dump($tab);

//br colonne // index /: valeur correspondant index + longueurde chaine

$tab2=array($tab, $c,$e);
//var_dump($tab2);
//tableau d e3 elements = array(3) qui sont
/*
-index 0 = un tableau
-index 1 = une variable
-index 2 = une variable
*/

// pour afficher un tableau
//echo $tab2[0][0];

// afficher toutes les valeurs d'un tableau

//compter le nombre elements dans un tableau
$nbrElement = count($tab);

//boucle for
for($i=0;$i < $nbrElement;$i++)
{
    //echo $i;
    //comment afficher tout les tableaux
    //echo $tab[$i];
}

//boucle foreach
// deuxieme methode d'afficher tout les tableaux
foreach($tab as $filiere)
{
    //afficher valeur tableau
    //echo$filiere;
}
//afficher valeur avec index
foreach($tab as $inedx => $filiere)
{
    //echo" L'index : $index, correspond a la filière : $filiere.";
}


//afficher contenu de $tab2

//reponse
foreach ($tab2 as $index => $filiere)
{
 //  var_dump($filiere);
   
    
}

//autre type de boucle
$tab3 = ["un","deux","trois","cinq","stop"];

foreach ($tab3 as $value ) 
{
    //  afficher l'un des elements du tableau
    //  echo $ta3[2]; //trois
    if ($value == "trois") {
       // echo $value;
    }


}

//declarer un tableau dans une variabe
//qui contient les elements suivants 
/*
janvier, fevrier , mars , 2019,2018,2017
"fin", "stop,"recommencer"
*/

$tab4 = array("janvier", "fevrier" , "mars",2019,2018,2017,"fin", "stop","recommencer");

//

//Afficher le contenu du tableau $tabMois

$tabMois = ["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"];
//foreach($tabMois as $value)
//{
    //afficher valeur tableau
    //echo$value;
//}
//ou(Pour afficher les index)
//foreach($tabMois as $index => $value)
//{
    //echo $index;
//}
//ou (pour afficher le contenue du tableau+ses index)
/*foreach($tabMois as $index => $value)
{
    //afficher valeur tableau
    echo "$index - $value";
}
*/

// choisir /paramettrer/personnaliser index de tableau
$tabVS = ["id-850" => "VERROUX",
"id-851" => "RENAY","id-852" => "VITULIN","id-853" => "TERRINE"];
/*foreach ($tabVS as $ID => $nomVS)
{
    //afficher id et nom VS
    echo "<pre>";
    echo "L'identifiant : $ID est attribué au VS $nomVS";
    echo "</pre>";
    echo "$nomVS - $ID";
   
}
*/

//une variable constante

//declarer une variable constante (une variable constante est une variable qui ne change pas)
/*define("JOURNEE","24H");
echo JOURNEE;
echo "À la fin de cette journée nous aurons JOURNEE de plus";
echo "À la fin de cette journée nous aurons".JOURNEE."de plus";
echo 'À la fin de cette journée nous aurons JOURNEE de plus'; */

// addition de variable constante
/*define("NBR1",50);
define("NBR2" , 150);

$resultat = NBR1 + NBR2;
echo $resultat ; 

define("INFO" , NBR1);
echo INFO;

define("URL" , "http://www.nomdedomaine.com");
echo URL."/css/fichierStyle.css";
*/
// structure de contrôle 
/* $a = 10;
$b = -15;
$c = 0.50;
$e = $a + $c ; */

//IF
/* if ($a == $e){
    // si c'est vrai, affiche une réponse
    echo "La réponse est vrai";
    //et mettre d'autres actions

    $e = $a ;

    //si c'est faux il ne ce passe rien 

}*/

//ELSE
/* if ($a == $e){
    // si c'est vrai affiche quelque chose
} else{
    //si c'est faux affiche autre chose
    echo "La réponse est fausse.";
    // mettre des actions
    $e = 0;
} */
//$a = 7;
//$b = 6;
//ELSE IF / ELSEIF
/* if ($a > $b){
    // si c'est vrai
    echo "a est plus grand que b";
} elseif($a == $b){
    echo "a est egal à b";
} else{
    echo "a est plus petit que b";
} */

// Syntaxe alternative
?>

<?php /*if ($a ==5 ) : ?>
<p>A est egal à 5</p>
<?php endif;  */?>

<?php 
/* if($a ==5):
    echo "a est egal à 5";
    echo ".....";

    elseif ($a == 6):
        echo "a est egal à 6";
        echo "!!!!";
    else:
        echo "a ne vaut ni 5 ni 6";
    endif;

    //operateur ternaire = condition ternaire
    //?
    // resultat ? si c'est vrai : si c'est faux :
    echo $resultat ? $a == $b : "c'est faux";

    // c'est egal
    if($a == $b){
        //affiche rien
    } else {
        //affiche 
        echo $result = "c'est faux";
    }
    ?> */

    // Exercice
    /*
    -Mettre en place un scrit pour autoriser les hommes d'un âge supérieur à 35ans
    à écrire un livre.
    -Mettre en place un script permettant de lister les personnes ayant réussie l'examen
    du code de la route. Voici les notes.
    - 35,37,25,4,40,36,40,12,34,22,20,10,10
    */

    //Exo 1
   
    
   /* $b = 25;
    $c = 0;
    
    
    if($a > $b)
    {
        echo "Vous pouvez écrire un livre";
    }
    else{
        echo "Vous ne pouvez pas écrire un livre";
    }
    */
    //Correction exo1
   /* $a= 36;
    $b = 34;
    if ($a < $b)
    {
        echo "Rentrez un âge valide";
    }
    else{
        echo "est autorisé à écrire un livre";
    }
*/

//Correction exo2 
/* $codes = [35,37,25,4,40,36,40,12,34,22,20,10,10];

foreach($codes as $value)
{
    if($value > 34)
    {
        echo $value;
    }

}
?>
<html>
<div class="container">
   <form method="POST" action="index.php" id="frmInscription">
   <div class="form-group">
    <label for="email">E-mail</label>
    <input type="text" class="form-control" id="frmNom" aria-describedby="nom" placeholder="Entrer votre nom (*)" name= "frmNom" required>
    <small id="nomHelp" class="form-text text-muted">Ce champs est obligatoire.</small>
  </div>
  <div class="form-group">
    <label for="comfirm_email_adress">Comfirmer l'adresse e-mail</label>
    <input type="text" class="form-control" id="frPrenom" aria-describedby="prenom" placeholder="Entrer votre prenom (*)" name= "frmPrenom" required>
    <small id="prenomHelp" class="form-text text-muted">Ce champs est obligatoire.</small>
  </div>
  <div class="form-group">
    <label for="mot_de_passe">Mot de Passe</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre email (*)" name= "frmEmail" required>
    <small id="emailHelp" class="form-text text-muted">Ce champs est obligatoire.</small>
  </div>
  <div class="form-group">
    <label for="confirm_mot_de_passe">Comfirmer votre Mot de passe</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre email (*)" name= "frmEmail" required>
    <small id="emailHelp" class="form-text text-muted">Ce champs est obligatoire.</small>
  </div>
  <input type="text" id="frmMDP">
  <div class="form-group">
    <label for="confirm_mot_de_passe">Confirmer votre mot de passe</label>
    <input type="password" class="form-control" id="frmMDP2" placeholder="Confirmer votre mot de passe (*)" name= "frComfirm">
  </div>
  <button type="submit" class="btn btn-primary">Inscription</button>
</form>
   </div>
</html>*/

// boucle While 
// une boucle while est le moyen le plus simple d'implanter une boucle en php

/* $i = 1 ;
while($i <= 10 ){
  echo$i ;
  $i++ ;

} */

// boucle do while 
/* $i = 0 ;
do {
    echo $i;

} while ( $i > 0);

*/

//BREAK 
/* $tabVS =["RENARD","TERRINE","ROBINEL","THOME","MARIE-LUCE"];

$nbr = count ($tabVS);
foreach($tabVS as $value)
{
    if ($value == "MARIE-LUCE")
    {
        break;
    }
    echo $value;
} */

    //switch 

   /* $i = 25 ;
    switch ($i){
        case 2 :
        echo $i ;
        break;

        case 20 :
        echo $i;
        break ;

        case 25 :
        echo $i ;
        break ;
    }
        */

// include
// permet d'inclure un script php dans un autre cript php

include ("head.php");
                                                                                                                                                                                                                                                                                                                                                                
