
<?php
session_start();

include("class/cl_traitement.php");
include("class/connect.php");

//creation d'objet
$addPersonne = new Personne($mysqli); //pour ajouter une personne

// les conditions if/else ou un switch/case

// $_POST("frmForm")  //valeur soit frmRegister soit frmLogin
// condition

switch($_POST["frmForm"])
{
    case "Register";
    //appel methode add personne
    $addPersonne->add_personne($_POST);
    break;
    case "Login";
    //appel methode login
    $addPersonne->login($_POST);
    break;
    
};






 






/*


//traitement du formulaire register
//print_r($_POST);

//var_dump($_POST["frmPrenom"]);

foreach($_POST as $key => $value)

{
   //echo $key. "valeur". strip_tags($value). "<br />"; &
    if(strlen(htmlentities(strip_tags($value))) < 50)
    {
        echo "la chaine correspondant a $key , n'est pas valide <br />" ;
    }else{
        echo "champ $key correspond à $value <br />";
    }
}
*/

//print_r( password_hash($_POST["frmPass"],PASSWORD_DEFAULT));


//$salt = "MARsouins";

//$salt = md5($salt);

//echo shal(md5($_POST["frmPass"]));

//echo $key correspond à $value

 